@extends('layouts.induk')

@section('kandungan_utama_halaman')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Penyertaan Kursus</h1>
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

</div><!-- End Content Row -->

<!-- Content Row -->
<div class="row">

    <!-- Content Col -->
    <div class="col-md-12">

    <form method="POST" action="">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Senarai Rekod Pendaftaran Kursus</h6>
        </div>
        <div class="card-body">

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>KURSUS</th>
                        <th>TARIKH MULA</th>
                        <th>TARIKH TAMAT</th>
                        <th>TINDAKAN</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($senarai_kursus as $kursus)
                    <tr>
                        <td>{{ $kursus['id'] }}</td>
                        <td>{{ $kursus['nama'] }}</td>
                        <td>{{ $kursus['tarikh_mula_kursus'] }}</td>
                        <td>{{ $kursus['tarikh_tamat_kursus'] }}</td>
                        <td>
                            <a href="{{ route('user.kursus.edit', $kursus['id']) }}" class="btn btn-sm btn-info">EDIT</a>
                            <button type="button" class="btn btn-sm btn-danger">DELETE</button>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <div class="card-footer">
            <a class="btn btn-default" href="{{ route('user.dashboard') }}">Dashboard</a>
        </div>
    </div>
    </form>

    </div><!-- End Content Col -->
</div><!-- End Content Row-->
@endsection
