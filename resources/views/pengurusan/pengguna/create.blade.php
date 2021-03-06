@extends('layouts.induk')

@section('kandungan_utama_halaman')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Pengguna</h1>
</div>

<!-- Content Row -->
<div class="row">

    <!-- Content Col -->
    <div class="col-md-12">

    <form method="POST" action="{{ route('users.store') }}">
        @csrf

    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Pengguna</h6>
        </div>
        <div class="card-body">

            @include('layouts.alerts')

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama">
                <small id="nama" class="form-text text-muted">Nama pengguna.</small>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
                <small id="email" class="form-text text-muted">Alamat email pengguna.</small>
            </div>

            <div class="form-group">
                <label for="telefon">Telefon</label>
                <input type="text" class="form-control" name="telefon">
                <small id="telefon" class="form-text text-muted">No telefon pengguna.</small>
            </div>

			<div class="form-group">
				<label for="password">Katalaluan</label>
				<input type="password" class="form-control" id="password" name="password">
                <small id="email" class="form-text text-muted">Minima 3 karektor.</small>
			</div>

            <div class="form-group">
                <label for="password_confirmation">Sahkan Katalaluan</label>
				<input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                <small id="email" class="form-text text-muted">Sila taip semula katalaluan yang ditetapkan.</small>
            </div>

            <div class="form-group">
                <label for="bahagian">Bahagian</label>
                <input type="text" class="form-control" name="bahagian">
                <small id="bahagian" class="form-text text-muted">Bahagian/Unit.</small>
            </div>

            <div class="form-group">
                <label for="jawatan">Jawatan</label>
                <input type="text" class="form-control" name="jawatan">
                <small id="jawatan" class="form-text text-muted">Jawatan.</small>
            </div>

            <div class="form-group">
                <label for="jawatan">Status Akaun</label>
                <select name="status" class="form-control">
                    <option value="aktif">Aktif</option>
                    <option value="tutup">Tutup</option>
                </select>
                <small id="jawatan" class="form-text text-muted">Status akaun.</small>
            </div>

        </div>
        <div class="card-footer">
            <a class="btn btn-default" href="{{ route('users.index') }}">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
    </form>

    </div><!-- End Content Col -->
</div><!-- End Content Row-->

@endsection

