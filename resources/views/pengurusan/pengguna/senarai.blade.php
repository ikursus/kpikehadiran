@extends('layouts.induk')

@section('kandungan_utama_halaman')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Senarai Pengguna</h1>
</div>


<!-- Content Row -->
<div class="row">

    <!-- Content Col -->
    <div class="col-md-12">

    <form method="POST" action="">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Senarai Pengguna Sistem</h6>
        </div>
        <div class="card-body">

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAMA</th>
                        <th>EMAIL</th>
                        <th>TINDAKAN</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($senarai_pengguna as $pengguna)
                    <tr>
                        <td>{{ $pengguna->id }}</td>
                        <td>{{ $pengguna->nama }}</td>
                        <td>{{ $pengguna->email }}</td>
                        <td>
                            <a href="{{ route('users.edit', $pengguna->id) }}" class="btn btn-sm btn-info">EDIT</a>
                            <button type="button" class="btn btn-sm btn-danger">DELETE</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $senarai_pengguna->links() }}

        </div>
        <div class="card-footer">
            <a class="btn btn-default" href="{{ route('user.dashboard') }}">Dashboard</a>
            <a class="btn btn-primary" href="{{ route('users.create') }}">Tambah Pengguna</a>
        </div>
    </div>
    </form>

    </div><!-- End Content Col -->
</div><!-- End Content Row-->
@endsection
