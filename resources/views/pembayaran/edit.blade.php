@extends('main.bootstrap')

@section('content')
    <div class="text-center  py-5 bg-black text-white">
        <h3>Pembayaran SPP</h3>
    </div>
    <div class="container mt-4">
        <div class="d-flex justify-content-between">
            <div>
                <h4><b>Kelola Pembayaran</b></h4>
            </div>
            <a href="{{ url('pembayaran') }}" class="btn btn-warning">Kembali</a>
        </div>
        <form action="{{ url('pembayaran/update') }}" method="post">
            <div class="">
                @csrf
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="siswa_id" value="{{ $data->siswa_id }}">
                <input type="hidden" name="id" value="{{ $data->id }}" >
                <div class="form-group mt-2">
                    <label for="jumlah_bayar"> Jumlah Bayar</label>
                    <input type="number" name="jumlah_bayar" id="jumlah_bayar" class="form-control"
                        value="{{ $data->jumlah_bayar }}" required>
                </div>
            </div>
            <div class="modal-footer mt-3">

                <button type="submit" class="btn btn-primary ">Save changes</button>
            </div>
        </form>
    </div>
@endsection
