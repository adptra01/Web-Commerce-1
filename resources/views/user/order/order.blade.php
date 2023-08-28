@extends('user.app')
@section('content')

    <div class="site-section">
        <div class="container">
            <div class="row mb-3">
                <div class="col-md-12">
                    <h4 class="text-center font-weight-bold text-dark">Belum Dibayar</h4>
                    <hr>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">Invoice</th>
                                    <th class="product-name">Total</th>
                                    <th class="product-price">Status</th>
                                    <th class="product-quantity" width="20%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order as $o)
                                    <tr>
                                        <td>{{ $o->invoice }}</td>
                                        <td>{{ $o->subtotal + $o->biaya_cod }}</td>
                                        <td>{{ $o->name }}</td>
                                        <td>
                                            <div class="d-flex" style="gap: 5px">
                                                <a href="{{ route('user.order.pembayaran', ['id' => $o->id]) }}"
                                                    class="btn btn-sm btn-success">Bayar</a>
                                                <a href="{{ route('user.order.pesanandibatalkan', ['id' => $o->id]) }}"
                                                    onclick="return confirm('Yakin ingin membatalkan pesanan')"
                                                    class="btn btn-sm btn-danger">Batalkan</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>

            <div class="container">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <h4 class="text-center font-weight-bold text-dark">Sedang Dalam Proses</h4>
                        <hr>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-12">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">Invoice</th>
                                    <th class="product-name">Total</th>
                                    <th class="product-price">Status</th>
                                    <th class="product-quantity" width="20%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dicek as $o)
                                    <tr>
                                        <td>{{ $o->invoice }}</td>
                                        <td>{{ $o->subtotal + $o->biaya_cod }}</td>
                                        <td>
                                            @if ($o->name == 'Perlu Di Cek')
                                                Sedang Di Cek
                                            @else
                                                {{ $o->name }}
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('user.order.detail', ['id' => $o->id]) }}"
                                                class="btn btn-sm btn-success">Detail</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="container">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <h4 class="text-center font-weight-bold text-dark">Riwayat Pesanan Anda</h4>
                            <hr>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">Invoice</th>
                                            <th class="product-name">Total</th>
                                            <th class="product-price">Status</th>
                                            <th class="product-quantity" width="20%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($histori as $o)
                                            <tr>
                                                <td>{{ $o->invoice }}</td>
                                                <td>{{ $o->subtotal + $o->biaya_cod }}</td>
                                                <td>{{ $o->name }}</td>
                                                <td>
                                                    <a href="{{ route('user.order.detail', ['id' => $o->id]) }}"
                                                        class="btn btn-sm btn-success">Detail</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>
            @endsection
