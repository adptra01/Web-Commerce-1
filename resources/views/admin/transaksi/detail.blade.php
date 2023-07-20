<x-apps>
    <x-slot name="title">Detail Transaksi</x-slot>
    <div class="container-fluid">
        <div class="row gap-3">
            <div class="col-12 col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <h1 class="mr-2 text-primary" style="font-size: 50px"><i class="fa fa-sticky-note"
                                    aria-hidden="true"></i>
                            </h1>
                            <div class="media-body">
                                <span class="mt-0 font-weight-bold">{{ $order->invoice }}</span>
                                <p> {{ Carbon\carbon::parse($order->created_at)->format('l, d M Y') }}</p>
                            </div>
                            {{-- <a class="btn btn-primary" href="{{ Route('admin.transaksi.invoice', $order->id) }}"
                                role="button">Invoice</a> --}}
                        </div>
                        <div class="card my-3">
                            <div class="card-body bg-primary rounded text-white">
                                <div class="row mb-2">
                                    <div class="col-6 col-md-4 font-weight-bold">Kepada</div>
                                    <div class="col-12 col-md-8 font-weight-bold">{{ $order->nama_pelanggan }}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-6 col-md-4 font-weight-bold">Metode Pembayaran</div>
                                    <div class="col-12 col-md-8 font-weight-bold">
                                        @if ($order->metode_pembayaran == 'cod')
                                            Cash On Delivery (COD)
                                        @elseif ($order->metode_pembayaran == 'trf')
                                            Transfer
                                        @endif
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-6 col-md-4 font-weight-bold">Status</div>
                                    <div class="col-12 col-md-8 font-weight-bold">{{ $order->status }}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-6 col-md-4 font-weight-bold">Kurir</div>
                                    <div class="col-12 col-md-8 font-weight-bold">JNE Service OKE
                                    </div>
                                </div>
                                @if ($order->no_resi != null)
                                    <div class="row mb-2">
                                        <div class="col-6 col-md-4 font-weight-bold">No. Resi</div>
                                        <div class="col-12 col-md-8 font-weight-bold"> {{ $order->no_resi }}
                                        </div>
                                    </div>
                                @endif
                                <div class="row mb-2">
                                    <div class="col-6 col-md-4 font-weight-bold">Ongkir</div>
                                    <div class="col-12 col-md-8 font-weight-bold">Rp.
                                        {{ number_format($order->ongkir, 2, ',', '.') }}
                                        @if ($order->metode_pembayaran == 'cod')
                                            + Rp. {{ number_format(10000, 2, ',', '.') }}
                                        @endif
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-6 col-md-4 font-weight-bold">Telp/HP</div>
                                    <div class="col-12 col-md-8 font-weight-bold">{{ $order->no_hp }}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-6 col-md-4 font-weight-bold">Catatan</div>
                                    <div class="col-12 col-md-8 font-weight-bold">{{ $order->pesan }}</div>
                                </div>
                                @if ($order->status_order_id == 3)
                                    <div class="row mb-2">
                                        <div class="col-6 col-md-4 font-weight-bold">Masukkan Resi</div>
                                        <div class="col-12 col-md-8 font-weight-bold">
                                            <form
                                                action="{{ route('admin.transaksi.inputresi', ['id' => $order->id]) }}"
                                                method="POST">
                                                @csrf
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control"
                                                        placeholder="Nomor resi pengiriman" name="no_resi" required>
                                                    <div class="input-group-append">
                                                        <button class="btn btn-sm btn-dark"
                                                            type="submit">Simpan</button>
                                                    </div>
                                                </div>
                                                @error('no_resi')
                                                    <small class="text-white">{{ $message }}</small>
                                                @enderror
                                            </form>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="table-responsive rounded">
                            <table class="table table-striped table-sm text-center">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">NO</th>
                                        <th scope="col">Produk</th>
                                        <th scope="col">Total Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detail as $no => $dt)
                                        <tr>
                                            <th scope="row">{{ ++$no }}</th>
                                            <td>{{ $dt->nama_produk }} <small> X {{ $dt->qty }}</small></td>
                                            <td>Rp. {{ number_format($dt->qty * $dt->price, 2, ',', '.') }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h3><strong>TOTAL</strong></h3>
                        <button class="btn btn-primary">
                            Rp. {{ number_format($order->subtotal, 2, ',', '.') }}</span>
                        </button><br><small>(Termasuk Ongkir)</small><br>
                        @if ($order->bukti_pembayaran != null)
                            <img src="{{ Storage::url($order->bukti_pembayaran) }}" class="mt-3"
                                alt="BuktiPembayaran" style="width: -webkit-fill-available;"><br><small
                                class="mb-3">(Bukti
                                pembayaran)</small><br>
                            @if ($order->status_order_id == 2)
                                <a href="{{ route('admin.transaksi.konfirmasi', ['id' => $order->id]) }}"
                                    class="btn btn-primary">Konfirmasi Telah
                                    Membayar</a><br>
                                <small>Klik tombol ini jika pembeli sudah terbukti melakukan pembayaran</small>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-apps>
