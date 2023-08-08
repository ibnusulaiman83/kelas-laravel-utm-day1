<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::get();
        //$vehicles = Vehicle::where('brand','Honda')->get();
        //dd($vehicles);
        return view('vehicle.index',compact('vehicles'));
    }

    public function create()
    {
        $edit = false;
        return view('vehicle.form',compact('edit'));
    }

    public function edit($id)
    {
        $vehicle = Vehicle::where('id',$id)->first();
        $edit = true;
        return view('vehicle.edit',compact('vehicle','edit'));
    }

    public function store(Request $request)
    {
        //dd($request);
        $validate = array(
            'brand'=>'required|string',
            'model'=>'required|string',
            'year'=>'required|string',
            'colour'=>'required|string',
        );

        $validator = Validator::make($request->all(), $validate);

        if ($validator->fails()) {
            return redirect()->route('vehicle.create')->withErrors($validator)->withInput();
        } else {
            $input = [];
            $input['brand'] = $request->brand;
            $input['model'] = $request->model;
            $input['year'] = $request->year;
            $input['colour'] = $request->colour;
            $input['status'] = 1;
            $input['created_at'] = now();

            DB::beginTransaction();
                try {
                    Vehicle::insert($input);
                    DB::commit();
                } catch (\Exception $ex) {
                    DB::rollBack();
                }
                return redirect(route('vehicle.index'))->withSuccess('Vehicle successfully created');
        }

    }

    public function update(Request $request, $id)
    {
        $validate = array(
            'brand'=>'required|string',
            'model'=>'required|string',
            'year'=>'required|string',
            'colour'=>'required|string',
        );

        $validator = Validator::make($request->all(), $validate);
        if ($validator->fails()) {
            return redirect()->route('vehicle.edit',$id)->withErrors($validator)->withInput();
        }else{
            $input = [];
            $input['brand'] = $request->brand;
            $input['model'] = $request->model;
            $input['year'] = $request->year;
            $input['colour'] = $request->colour;
            $input['status'] = 0;
            $input['updated_at'] = now();
            Vehicle::where('id',$id)->update($input);
            return redirect(route('vehicle.index'))->withSuccess('Vehicle successfully updated');
        }
        //dd($request);

    }

    public function delete($id)
    {
        $input = [];
        $input['status'] = 0;
        $input['deleted_at'] = now();
        Vehicle::where('id',$id)->update($input);
        return redirect(route('vehicle.index'));
    }

    public function activate($id)
    {
        $input = [];
        $input['status'] = 1;
        $input['updated_at'] = now();
        Vehicle::where('id',$id)->update($input);
        return redirect(route('vehicle.index'))->withSuccess('Vehicle successfully activated');
    }
}
