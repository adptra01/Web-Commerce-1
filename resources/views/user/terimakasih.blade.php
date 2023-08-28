@extends('user.app')
@section('content')

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <span class="icon-check_circle display-3 text-success"></span>
                    <h2 class="display-3 text-dark font-weight-bold">Terima Kasih!</h2>
                    <p class="lead mb-5">Pesanan Kamu Berhasil Dibuat. Silahkan Konfirmasi Pembayaran Lewat
                        Menu Konfirmasi Pembayaran.</p>
                    <p><a href="{{ route('user.order') }}" class="btn btn-sm btn-dark">Menu Pembayaran</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
