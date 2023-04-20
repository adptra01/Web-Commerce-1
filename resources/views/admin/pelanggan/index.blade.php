<x-apps>
    <x-slot name="title">
        Informasi Pembelian
    </x-slot>
    <div class="container">
        <h1 class="h3 mb-2 text-gray-800 font-weight-bold">INFORMASI PEMBELIAN</h1>
        <div class="media bg-primary rounded mb-3 text-white p-3">
            <img class="align-self-center mr-3" width="230px" src="/layouts/drawKit/vector (13).svg"
                alt="Generic placeholder image">
            <div class="media-body">
                <small>
                    <strong><i class="fas fa-regular fa-bell"></i> Peringatan!!!</strong> <br>
                    Harap perhatikan detail dan kelengkapan dari pesanan yang dibuat, seperti nama, alamat, nomor telepon, jumlah, warna, ukuran, dan lain-lain. Jika ada pesanan yang tidak jelas, kurang lengkap, atau tidak sesuai dengan stok produk, harap segera menghubungi pelanggan untuk mengkonfirmasi atau mengubah pesanan tersebut.
                </small>
            </div>
        </div>
    </div>

    <div class="card shadow m-3">
        <div class="card-body">
            <table id="mytable" class="display responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No Rekening</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pelanggan as $no => $pel)
                        <tr>
                            <td> {{ ++$no }}</td>
                            <td>{{ $pel->name }}</td>
                            <td>{{ $pel->email }}</td>
                            <td>{{ $pel->detail }}, {{ $pel->kota }}, {{ $pel->prov }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



</x-apps>
