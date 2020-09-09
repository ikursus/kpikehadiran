@extends('layouts.induk')

@section('kandungan_utama_halaman')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Penyertaan Kursus</h1>
</div>

<!-- Content Row -->
<div class="row">

    <!-- Content Col -->
    <div class="col-md-12">

    <form method="POST" action="">
    
    @csrf

    {{ csrf_field() }}

    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Rekod Pendaftaran Kursus</h6>
        </div>
        <div class="card-body">

            <div class="form-group">
                <label for="nama">Nama Kursus</label>
                <input type="text" class="form-control" name="nama">
                <small id="nama" class="form-text text-muted">Nama kursus yang disertai.</small>
            </div>

            <div class="form-group">
                <label for="lokasi">Lokasi Kursus</label>
                <input type="text" class="form-control" name="lokasi">
                <small id="lokasi" class="form-text text-muted">Lokasi/Tempat kursus dijalankan.</small>
            </div>

            <div class="row">
                <div class="col-md-4">

                    <div class="form-group">
                        <label for="tarikh_mula_kursus">Tarikh Mula Kursus</label>
                        <input type="date" class="form-control" id="tarikh_mula_kursus" name="tarikh_mula_kursus">
                        <small id="tarikh_mula_kursus" class="form-text text-muted">Tarikh kursus bermula.</small>
                    </div>

                </div>
                <div class="col-md-4">

                    <div class="form-group">
                        <label for="tarikh_tamat_kursus">Tarikh Tamat Kursus</label>
                        <input type="date" class="form-control" id="tarikh_tamat_kursus" name="tarikh_tamat_kursus">
                        <small id="tarikh_tamat_kursus" class="form-text text-muted">Tarikh kursus berakhir.</small>
                    </div>

                </div>
                <div class="col-md-4">

                    <div class="form-group">
                        <label for="hari">Jumlah Hari</label>
                        <input type="number" class="form-control" id="hari" name="hari">
                        <small id="hari" class="form-text text-muted">Jumlah bilangan hari penyertaan kursus.</small>
                    </div>
            
                </div>
            </div>

            <div class="form-group">
                <label for="nota">Nota</label>
                <textarea name="nota" class="form-control"></textarea>
                <small id="nota" class="form-text text-muted">Nota tambahan.</small>
            </div>

        </div>
        <div class="card-footer">
            <a class="btn btn-default" href="{{ route('user.kursus.index') }}">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
    </form>

    </div><!-- End Content Col -->
</div><!-- End Content Row-->

@endsection

