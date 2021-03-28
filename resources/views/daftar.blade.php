@extends('layouts.front')
@push('style')
    <style>
        html, body
        {
            background-image: linear-gradient(#00c6ff, #0072ff);
            background-repeat: no-repeat;
            color: white;
            height: 100%;
        }
    </style>
@endpush
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="card my-5" style="width: 100%;">
                        <div class="card-header">
                            <h3>Silahkan registrasi</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" name="" id="" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h1>WAW</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection