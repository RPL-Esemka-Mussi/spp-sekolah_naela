@extends('main.bootstrap')
@section('content')
<div class="text-center py-5  bg-dark text-white">
    <h3>Kelola Kelas</h3>
</div>
<div class="container mt-4">
    <div class="d-flex justify-content-between">
        <div>
            <h4>Data kelas</h4>
        </div>
        <div>
            <a href="{{ url('kelas/tambah') }}" class="btn btn-success">Tambah</a>
        </div>
    </div>
    @if (Session::has('sukses'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses!</strong>{{ Session::get('sukses') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @elseif (Session::has('sukses'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Gagal!</strong>{{ Session::get('gagal') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <hr>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Kelas</th>
                <th>Kompetensi Keahlian</th>
                <th>Kelola</th>
            </tr>
        </thead>
        <tbody>
            @if($kelas->count() == 0)
            <tr class="text-center">
                <td colspan="4">Belum ada data.</td>
            </tr>
            @else
                @foreach ($kelas as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->kelas }}</td>
                    <td>{{ $data->kompetensi_keahlian }}</td>
                    <td>
                    <a href='{{ url("kelas/hapus/$data->id")}}' class="btn btn-sm btn-danger">Hapus</a>
                    <a href=' {{ url ("kelas/edit/$data->id") }}' class="btn btn-sm btn-primary">Edit</a>
                    </td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
@endsection