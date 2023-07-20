<x-apps>
    <x-slot name="title">Perlu Dicek</x-slot>
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800 font-weight-bold">TRANSAKSI PERLU DICEK</h1>
        @if (session('success'))
            <div class="alert alert-primary shadow" role="alert">
                {{ session('success') }}
            </div>
        @elseif ($errors->any())
            <div class="alert alert-danger shadow" role="alert">
                Ada yang salah dengan inputan anda, silahkan input ulang.
            </div>
        {{-- @else
            <div class="media bg-primary rounded mb-3 text-white p-3">
                <img class="align-self-center mr-3" width="230px" src="/layouts/drawKit/vector (10).svg"
                    alt="Generic placeholder image">
                <div class="media-body">
                    <small>
                        <strong><i class="fas fa-regular fa-bell"></i> Peringatan!!!</strong><br>Harap perhatikan
                        detail dan kelengkapan dari pesanan yang dibuat, seperti nama, alamat, nomor telepon,
                        jumlah,
                        warna, ukuran, dan lain-lain. Jika ada pesanan yang tidak jelas, kurang lengkap, atau tidak
                        sesuai dengan stok produk, harap segera menghubungi pelanggan untuk mengkonfirmasi atau
                        mengubah
                        pesanan tersebut.
                    </small>
                </div>
            </div> --}}
        @endif
    </div>
    <div class="card shadow m-3">
        <div class="card-body">
            <table id="mytable" class="display responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th> Invoice </th>
                        <th>Pemesan</th>
                        <th>Subtotal</th>
                        <th>Metode Pembayaran</th>
                        <th>Status Pesanan</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orderbaru as $order)
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
                            <td><span class="badge badge-warning p-2"><i class="fa fa-exclamation-triangle"
                                        aria-hidden="true"></i> {{ $order->name }}</span></td>
                            <td class="text-center">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('admin.transaksi.detail', ['id' => $order->id]) }}"
                                        class="btn btn-primary btn-sm">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        Cek Pembayaran
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-apps>
