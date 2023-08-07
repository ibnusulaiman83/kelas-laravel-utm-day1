<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        return view('vehicle.index');
    }

    public function create()
    {
        //$haiwan = 'Ayam';
        //dd($haiwan);
        return view('vehicle.form');
    }

    public function store(Request $request)
    {
       // dd($request);
      return redirect(route('vehicle.index'));
      //  return view('vehicle.form');
    }
}
