@extends('layouts.induk')

@section('kandungan_utama_halaman')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Profile</h1>
</div>

<!-- Content Row -->
<div class="row">

    <!-- Content Col -->
    <div class="col-md-12">

    <form method="POST" action="">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Kemaskini Profile</h6>
        </div>
        <div class="card-body">

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama">
                <small id="nama" class="form-text text-muted">Nama anda.</small>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
                <small id="email" class="form-text text-muted">Alamat email anda.</small>
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
                <input type="text" class="form-control">
                <small id="bahagian" class="form-text text-muted">Bahagian/Unit.</small>
            </div>

            <div class="form-group">
                <label for="telefon">Telefon</label>
                <input type="text" class="form-control">
                <small id="telefon" class="form-text text-muted">No telefon anda.</small>
            </div>

        </div>
        <div class="card-footer">
            <button class="btn btn-primary">Kemaskini</button>
        </div>
    </div>
    </form>

    </div><!-- End Content Col -->
</div><!-- End Content Row-->

@endsection

