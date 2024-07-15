@extends('layouts.backend.app')

@section('content')
    <div class="col-xl-12 col-md-12 mb-8 text-center">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            <h2>Selamat datang di Dashboard Admin</h2>
                            <br>
                            <img src="{{ asset('templates/frontend/devfolio/assets/img/logo_umby.png') }}" alt="logo_umby" height="150px">
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <h3 class="h5 mb-4">Nama: Theresia Martins Berelaka</h3>
                            <h3 class="h5 mb-4">NIM: 191210052</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop