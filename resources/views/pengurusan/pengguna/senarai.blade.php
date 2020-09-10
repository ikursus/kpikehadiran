@extends('layouts.induk')

@section('custom_css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
@endsection

@section('custom_js')
<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<script>

$(function() {
    $('#users-datatables').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: '{!! route('users.datatables') !!}',
            type: 'POST',
                'headers': {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
        },
        columns: [
            { data: 'id', name: 'id'},
            { data: 'nama', name: 'nama'},
            { data: 'email', name: 'email'},
            { data: 'status', name: 'status'},
            { data: 'tindakan', name: 'tindakan', orderable: false, searchable: false },
        ],
        'autowidth' : false
    });
});

</script>
@endsection

@section('kandungan_utama_halaman')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Senarai Pengguna</h1>
</div>

<!-- Content Row -->
<div class="row">

    <!-- Content Col -->
    <div class="col-md-12">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Senarai Pengguna Sistem</h6>
        </div>
        <div class="card-body">

            @if (session('alert_alert_mesej'))
            {{ session('alert_mesej') }}
            @endif


            <!-- datatables -->
            <table class="table" id="users-datatables">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAMA</th>
                        <th>EMAIL</th>
                        <th>STATUS</th>
                        <th>TINDAKAN</th>
                    </tr>
                </thead>
            </table>
            <!-- end:datatables -->

        </div>
        <div class="card-footer">
            <a class="btn btn-default" href="{{ route('user.dashboard') }}">Dashboard</a>
            <a class="btn btn-primary" href="{{ route('users.create') }}">Tambah Pengguna</a>
            <a class="btn btn-warning" href="{{ route('user.kursus.reminder') }}">Kirim Reminder KPI</a>
        </div>
    </div>

    </div><!-- End Content Col -->
</div><!-- End Content Row-->
@endsection
