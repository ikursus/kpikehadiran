@extends('layouts.induk')

@section('kandungan_utama_halaman')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Selamat Datang {{ auth()->user->nama ?? "Pengguna" }}</h1>
</div>

<!-- Content Row -->
<div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-4 col-md-4 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
    <div class="card-body">
        <div class="row no-gutters align-items-center">
        <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">KPI Tahunan</div>
        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ config('kpikehadiran.tetapan.kpi') }} Hari</div>
        </div>
        <div class="col-auto">
            <i class="fas fa-calendar fa-2x text-gray-300"></i>
        </div>
        </div>
    </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-4 col-md-4 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
    <div class="card-body">
        <div class="row no-gutters align-items-center">
        <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">KPI Anda</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $kpi_total ?? 0 }} Hari</div>
        </div>
        <div class="col-auto">
            <i class="fas fa-check fa-2x text-gray-300"></i>
        </div>
        </div>
    </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-4 col-md-4 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
    <div class="card-body">
        <div class="row no-gutters align-items-center">
        <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Baki KPI</div>
            <div class="row no-gutters align-items-center">
            <div class="col-auto">
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ (config('kpikehadiran.tetapan.kpi') - ($kpi_total ?? 0)) }} Hari</div>
            </div>
            </div>
        </div>
        <div class="col-auto">
            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
        </div>
        </div>
    </div>
    </div>
</div>


</div>

@endsection
