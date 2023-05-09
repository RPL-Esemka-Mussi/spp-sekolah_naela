@extends('main.bootstrap')
@section('content')
    <div class="text-center py-5  bg-dark text-white">
        <h3>Kelola Kelas</h3>
    </div>
    <div class="container mt-4">
        <div class="d-flex justify-content-between">
            <div>
                <h4>Edit Kelas</h4>
            </div>
            <div>
                <a href="{{ url('kelas') }}" class="btn btn-warning">Kembali</a>
            </div>
        </div>
        <hr>
        <form action="{{ url('kelas/update') }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $kelas->id }}">
            <div class="form-group">
                <label for="kelas">Kelas</label>
                <input type="text" name="kelas" id="kelas" class="form-control" value="{{ $kelas->kelas }}" required>
            </div>
            <div class="form-group">
                <label for="kompetensi_keahlian">Kompetensi Keahlian</label>
                <input type="text" name="kompetensi_keahlian" id="kompetensi_keahlian" class="form-control" value="{{ $kelas->kompetensi_keahlian }}" required>
            </div>

            <div class="mt-3 text-end">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
@endsection
