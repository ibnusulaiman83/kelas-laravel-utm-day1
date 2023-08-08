@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Senarai Kenderaan') }}</div>

                <div class="card-body">
                  <a href="{{ route('vehicle.create')}}" class="btn btn-primary">Add New Record</a>
                 <br>
                 @if(Session::get('success', false))
                 <div class="alert alert-success alert-notification">
                     <i class="fa fa-check"></i>
                     {{ Session::get('success') }}
                 </div>
                 @endif

                 <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Brand</th>
                            <th>Model</th>
                            <th>Year</th>
                            <th>Color</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($vehicles as $v )

                    <tr>
                        <td>{{$v->brand}}</td>
                        <td>{{$v->model}}</td>
                        <td>{{$v->year}}</td>
                        <td>{{$v->colour}}</td>
                        <td>@if( $v->status == 1) Active
                            @else Inactive
                            @endif</td>
                        <td>
                            @if( $v->status == 1)
                            <a href="{{ route('vehicle.edit', $v->id)}}" class="btn btn-primary">Edit</a>
                            &nbsp;
                            <a href="{{ route('vehicle.delete', $v->id)}}" class="btn btn-danger">Delete</a>
                            @else
                            <a href="{{ route('vehicle.activate', $v->id)}}" class="btn btn-warning" >Activate</a>

                            @endif

                        </td>
                    </tr>

                    @endforeach
                </tbody>
                 </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
