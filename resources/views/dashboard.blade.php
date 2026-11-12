@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1 class="h3 mb-4">Dashboard</h1>
    <div class="row">
        <div class="col-md-3">
            <div class="card text-bg-">
                <div class="card-body">
                    <h5 class="card-title">Kendaraan</h5>
                    <p class="card-text fs-4">0</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-bg-">
                <div class="card-body">
                    <h5 class="card-title">Pelanggan</h5>
                    <p class="card-text fs-4">0</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-bg-">
                <div class="card-body">
                    <h5 class="card-title">Transaksi</h5>
                    <p class="card-text fs-4">0</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-bg-">
                <div class="card-body">
                    <h5 class="card-title">Pengembalian</h5>
                    <p class="card-text fs-4">0</p>
                </div>
            </div>
        </div>
    </div>
@endsection
