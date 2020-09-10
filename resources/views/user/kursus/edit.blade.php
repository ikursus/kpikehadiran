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

    <form method="POST" action="{{ route('user.kursus.edit', $kursus->id) }}">
    @method('PATCH')
    @csrf

    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Rekod Pendaftaran Kursus</h6>
        </div>
        <div class="card-body">

            <div class="form-group">
                <label for="nama">Nama Kursus</label>
                <input type="text" class="form-control" name="nama" value="{{ $kursus->nama }}">
                <small id="nama" class="form-text text-muted">Nama kursus yang disertai.</small>
            </div>

            <div class="form-group">
                <label for="lokasi">Lokasi Kursus</label>
                <input type="text" class="form-control" name="lokasi" value="{{ $kursus->lokasi }}">
                <small id="lokasi" class="form-text text-muted">Lokasi/Tempat kursus dijalankan.</small>
            </div>

            <div class="row">
                <div class="col-md-4">

                    <div class="form-group">
                        <label for="tarikh_mula">Tarikh Mula Kursus</label>
                        <input type="date" class="form-control" id="tarikh_mula" name="tarikh_mula" value="{{ $kursus->tarikh_mula }}">
                        <small id="tarikh_mula" class="form-text text-muted">Tarikh kursus bermula.</small>
                    </div>

                </div>
                <div class="col-md-4">

                    <div class="form-group">
                        <label for="tarikh_tamat">Tarikh Tamat Kursus</label>
                        <input type="date" class="form-control" id="tarikh_tamat" name="tarikh_tamat" value="{{ $kursus->tarikh_tamat }}">
                        <small id="tarikh_tamat" class="form-text text-muted">Tarikh kursus berakhir.</small>
                    </div>

                </div>
                <div class="col-md-4">

                    <div class="form-group">
                        <label for="jumlah_hari">Jumlah Hari</label>
                        <input type="number" class="form-control" id="jumlah_hari" name="jumlah_hari" value="{{ $kursus->jumlah_hari }}">
                        <small id="jumlah_hari" class="form-text text-muted">Jumlah bilangan jumlah_hari penyertaan kursus.</small>
                    </div>
            
                </div>
            </div>

            <div class="form-group">
                <label for="nota">Nota</label>
                <textarea name="nota" class="form-control">{{ $kursus->nota }}</textarea>
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

