@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Senarai Kenderaan') }}</div>

                <div class="card-body">
                  <a href="{{ route('vehicle.create')}}" class="btn btn-primary">Tambah Rekod</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
