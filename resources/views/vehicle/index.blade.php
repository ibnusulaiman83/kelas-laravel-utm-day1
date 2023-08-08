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
                 <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Brand</th>
                            <th>Model</th>
                            <th>Year</th>
                            <th>Color</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    @foreach ($vehicles as $v )
                    <tbody>
                    <tr>
                        <td>{{$v->brand}}</td>
                        <td>{{$v->model}}</td>
                        <td>{{$v->year}}</td>
                        <td>{{$v->colour}}</td>
                        <td></td>
                    </tr>
                    </tbody>
                    @endforeach
                 </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
