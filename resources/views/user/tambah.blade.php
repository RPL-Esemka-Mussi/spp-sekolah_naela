@extends('main.bootstrap')
@section('content')
    <div class="text-center py-5 bg-dark text-white">
        <h3>Kelola User</h3>
    </div>
    <div class="container mt-4">
        <div class="d-flex justify-content-between">
            <div>
                <h4>Tambah User</h4>
            </div>
            <div>
                <a href="{{ url('user') }}" class="btn btn-warning">Kembali</a>
            </div>
        </div>
        <hr>
        <form action="{{ url('user/simpan') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="level">Level</label>
                <select name="level" id="" class="form-select" required>
                    <option value="" disabled selected>Pilih Level user</option>
                    <option value="admin">Admin </option>
                    <option value="petugas">Petugas</option>
                    <option value="siswa">Siswa</option>
                </select>
            </div>

            <div class="mt-3 text-end">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
@endsection
