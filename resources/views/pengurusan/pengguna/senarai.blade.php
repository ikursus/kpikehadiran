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
                        <td>{{ $pengguna->email ?? "Tiada Rekod Email" }}</td>
                        <td>
                            <a href="{{ route('users.edit', $pengguna->id) }}" class="btn btn-sm btn-info">EDIT</a>
                            
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete-{{ $pengguna->id }}">
                                DELETE
                            </button>
                            

                                <div class="modal fade" id="modal-delete-{{ $pengguna->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        
                            <!-- Modal -->
                            <form method="POST" action="{{ route('users.destroy', $pengguna->id) }}">
                                
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

                                            <p>Adakah anda bersetuju untuk menghapuskan data {{ $pengguna->nama }}</p>

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

            {{ $senarai_pengguna->appends(['total' => request('total')])->links() }}

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
