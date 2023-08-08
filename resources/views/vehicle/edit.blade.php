@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Vehicle') }}</div>

                <div class="card-body">
                   <form action="{{route('vehicle.update', $vehicle -> id )}}" method="POST">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>
                                        <strong>{{ $error }}</strong>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <div class="form-group row">
                          <label for="brand" class="col-4 col-form-label">Brand</label>
                          <div class="col-8">
                            <input id="brand" name="brand"  type="text" class="form-control" value="@if($edit) {{$vehicle -> brand }}@endif">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="text1" class="col-4 col-form-label">Model</label>
                          <div class="col-8">
                            <input id="text1" name="model" type="model" class="form-control" value="@if($edit) {{$vehicle -> model }}@endif">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="year" class="col-4 col-form-label">Year</label>
                          <div class="col-8">
                            <input id="year" name="year" type="text" class="form-control" value="@if($edit) {{$vehicle -> year }}@endif">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="colour" class="col-4 col-form-label">colour</label>
                          <div class="col-8">
                            <input id="colour" name="colour" type="text" class="form-control" value="@if($edit) {{$vehicle -> colour }}@endif">
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
