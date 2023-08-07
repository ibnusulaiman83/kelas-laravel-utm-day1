@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add New Vehicle') }}</div>

                <div class="card-body">
                   <form action="{{route('vehicle.store')}}" method="POST">
                    @csrf
                        <div class="form-group row">
                          <label for="brand" class="col-4 col-form-label">Brand</label>
                          <div class="col-8">
                            <input id="brand" name="brand"  type="text" class="form-control">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="text1" class="col-4 col-form-label">Model</label>
                          <div class="col-8">
                            <input id="text1" name="text1" type="text" class="form-control">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="year" class="col-4 col-form-label">Year</label>
                          <div class="col-8">
                            <input id="year" name="year" type="text" class="form-control">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="color" class="col-4 col-form-label">Color</label>
                          <div class="col-8">
                            <input id="color" name="color" type="text" class="form-control">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Save</button>
                          </div>
                        </div>
                      </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
