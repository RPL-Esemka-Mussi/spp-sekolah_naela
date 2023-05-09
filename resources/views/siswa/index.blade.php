@extends('main.bootstrap')
@section('content')
<div class="text-center py-5  bg-dark text-white">
    <h3>Kelola Siswa</h3>
</div>
<div class="container mt-4">
    <div class="d-flex justify-content-between">
        <div>
            <h4>Data Siswa</h4>
        </div>
        <div>
            <a href="{{ url('siswa/tambah') }}" class="btn btn-success">Tambah</a>
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
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>alamat</th>
                <th>No. HP</th>
                <th>Kelola</th>
            </tr>
        </thead>
        <tbody>
            @if($siswa->count() == 0)
            <tr class="text-center">
                <td colspan="7">Belum ada data.</td>
            </tr>
            @else
                @foreach ($siswa as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->nis }}</td>
                    <td>{{ $data->user->name}}</td>
                    <td>{{ $data->kelas->kelas}}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>{{ $data->no_hp}}</td>
                    <td>
                    <a href='{{ url("siswa/hapus/$data->id")}}' class="btn btn-sm btn-danger">Hapus</a>
                    <a href='{{ url ("siswa/edit/$data->id") }}' class="btn btn-sm btn-primary">Edit</a>
                    </td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
@endsection