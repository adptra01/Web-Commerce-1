@extends('user.app')
@section('content')
    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0">
                    <a href="#">Home</a> <span class="mx-2 mb-0">/</span>
                    <a href="#">Order</a> <span class="mx-2 mb-0">/</span>
                    <strong class="text-black">Detail</strong>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row mb-3">
                <div class="col-md-12 text-center">
                    <h2 class="display-5 font-weight-bold text-primary">Detail Pesanan Anda</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md">
                                            <span class="text-primary"> Invoice </span>
                                            <td>:</td>
                                            <p class="text-dark">{{ $order->invoice }}</p>

                                            <span class="text-primary">No Resi</span>
                                            <td>:</td>
                                            <p class="text-dark">{{ $order->no_resi == null ? '-' : $order->no_resi }}</p>

                                            <span class="text-primary">Status Pesanan</span>
                                            <td>:</td>
                                            <p class="text-dark">{{ $order->status }}</p>
                                        </div>
                                        <div class="col-md">
                                            <span class="text-primary">Metode Pembayaran</span>
                                            <td>:</td>
                                            <p>
                                                @if ($order->metode_pembayaran == 'trf')
                                                    Transfer Bank
                                                @else
                                                    COD + (Rp. 10.000,00)
                                                @endif
                                            </p>

                                            <span class="text-primary">Ongkir</span>
                                            <td>:</td>
                                            <p class="text-dark">Rp. {{ number_format($order->ongkir, 2, ',', '.') }}</p>

                                            <span class="text-primary">Total Pembayaran</span>
                                            <td>:</td>
                                            <p class="text-dark">Rp.
                                                {{ number_format($order->subtotal + $order->biaya_cod, 2, ',', '.') }}
                                            </p>
                                        </div>
                                    </div>
                                    @if ($order->status_order_id == 4)
                                        <div class="col-md text-right">
                                            <a href="{{ route('user.order.pesananditerima', ['id' => $order->id]) }}"
                                                onclik="return confirm('Yakin ingin melanjutkan ?')"
                                                class="btn btn-primary">Pesanan Di Terima</a><br>
                                            <small>Jika pesanan belum datang harap jangan tekan tombol ini</small>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-md-12 table-responsive">
                                    <table class="table table-bordered text-center">
                                        <thead>
                                            <tr>
                                                <th class="product-thumbnail">Gambar</th>
                                                <th class="product-name">Nama Produk</th>
                                                <th class="product-price">Jumlah</th>
                                                <th class="product-quantity" width="20%">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($detail as $o)
                                                <tr>
                                                    <td><img src="{{ Storage::url($o->image) }}" class="w-25">
                                                    </td>
                                                    <td>{{ $o->nama_produk }}</td>
                                                    <td>{{ $o->qty }}</td>
                                                    <td>Rp. {{ number_format($o->qty * $o->price, 2, ',', '.') }}</td>
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
        </div>
    @endsection
