<x-apps>
    <x-slot name="title">Detail Transaksi</x-slot>
    <div class="container-fluid">
        <div class="row gap-3">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <h1 class="mr-2 text-primary" style="font-size: 50px"><i class="fa fa-sticky-note"
                                    aria-hidden="true"></i>
                            </h1>
                            <div class="media-body">
                                <h5 class="mt-0 font-weight-bold">{{ $order->invoice }}</h5>
                                Cras sit amet nibh libero
                            </div>
                        </div>
                        <div class="card my-3">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-4 font-weight-bold">KEPADA</div>
                                    <div class="col text-primary">{{ $order->nama_pelanggan }}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-4 font-weight-bold">METODE</div>
                                    <div class="col text-primary">{{ $order->metode_pembayaran }} @if ($order->metode_pembayaran == 'cod')
                                            ({{ $order->biaya_cod }})
                                        @endif
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-4 font-weight-bold">STATUS</div>
                                    <div class="col text-primary">{{ $order->status }}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-4 font-weight-bold">KURIR</div>
                                    <div class="col text-primary">
                                        @if ($order->no_resi != null)
                                            {{ $order->no_resi }}
                                        @endif
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-4 font-weight-bold">TELP/HP</div>
                                    <div class="col text-primary">{{ $order->no_hp }}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-4 font-weight-bold">CATATAN</div>
                                    <div class="col text-primary">{{ $order->pesan }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
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
            <div class="col-4">
                <div class="card text-center">
                    <div class="card-body">
                        <button class="btn btn-primary">
                            Notifications</span>
                        </button><br><small>(Termasuk Ongkir)</small><br>
                        @if ($order->bukti_pembayaran != null)
                            <img src="{{ asset('buktibayar/' . $order->bukti_pembayaran) }}" class="my-5"
                                alt="BuktiPembayaran" style="max-width: 180px"><br>
                            @if ()
                            <a name="{{ route('admin.transaksi.konfirmasi', ['id' => $order->id]) }}"
                                onclick="return confirm('Yakin ingin mengonfirmasi pesanan ini?')" id="" class="btn btn-primary" href="#"
                                role="button">Konfirmasi Telah Membayar</a><br>
                                <small>Klik tombol ini jika pembeli sudah terbukti melakukan pembayaran</small>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-apps>
