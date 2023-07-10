@extends('admin.layout.app')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-home"></i>
                </span> Transaksi
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col">
                                <h4 class="card-title">Semua transaksi</h4>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hovered" id="table">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th> Invoice </th>
                                        <th>Pemesan</th>
                                        <th>Subtotal</th>
                                        <th>Metodo Pembayaran</th>
                                        <th>Status Pesanan</th>
                                        <th width="15%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order_terbaru as $order)
                                        <tr>
                                            <td class="text-center"></td>
                                            <td>{{ $order->invoice }}</td>
                                            <td>{{ $order->nama_pemesan }}</td>
                                            <td>Rp. {{ number_format($order->subtotal + $order->biaya_cod, 2, ',', '.') }}</td>
                                            <td> @if ($order->metode_pembayaran == 'cod')
                                            Cash On Delivery (COD)
                                        @elseif ($order->metode_pembayaran == 'trf')
                                            Transfer
                                        @endif</td>
                                            <td>{{ $order->name }}</td>
                                            <td class="text-center">
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{ route('admin.transaksi.detail', ['id' => $order->id]) }}"
                                                        class="btn btn-warning btn-sm">
                                                        Lihat Detail
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
