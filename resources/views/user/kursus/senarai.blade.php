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
                        <td>{{ $kursus->id }}</td>
                        <td>{{ $kursus['nama'] }}</td>
                        <td>{{ $kursus['tarikh_mula'] }}</td>
                        <td>{{ $kursus['tarikh_tamat'] }}</td>
                        <td>
                            <a href="{{ route('user.kursus.edit', $kursus['id']) }}" class="btn btn-sm btn-info">EDIT</a>
                            
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete-{{ $kursus->id }}">
                                DELETE
                            </button>
                            

                                <div class="modal fade" id="modal-delete-{{ $kursus->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        
                                    <!-- Modal -->
                                    <form method="POST" action="{{ route('user.kursus.destroy', $kursus->id) }}">
                                        
                                        @csrf
                                        @method('DELETE')
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Pengesahan Delete</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">

                                                <p>Adakah anda bersetuju untuk menghapuskan data {{ $kursus->nama }}</p>

                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger">Confirm</button>
                                            </div>
                                        </div>
                                            
                                    </form>

                                    </div>
                                </div>

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

    </div><!-- End Content Col -->
</div><!-- End Content Row-->
@endsection
