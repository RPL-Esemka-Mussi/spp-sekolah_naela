@extends('main.bootstrap')
@section('content')
    <div class="text-center py-5 bg-dark text-white">
        <h3>Kelola SPP</h3>
    </div>
    <div class="container mt-4">
        <div class="d-flex justify-content-between">
            <div>
                <h4>Tambah SPP</h4>
            </div>
            <div>
                <a href="{{ url('spp') }}" class="btn btn-warning">Kembali</a>
            </div>
        </div>
        <hr>
        <form action="{{ url('spp/simpan') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="tahun">Tahun</label>
                <input type="number" name="tahun" id="tahun" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nominal">Nominal</label>
                <input type="" name="nominal" id="nominal" class="form-control" required>
            </div>
            
            <div class="mt-3 text-end">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
@endsection
