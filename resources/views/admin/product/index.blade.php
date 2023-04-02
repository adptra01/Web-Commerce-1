<x-apps>
    <x-slot name="title">PRODUK TOKO</x-slot>
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800 font-weight-bold">PRODUK TOKO</h1>
        @if (session('success'))
            <div class="alert alert-primary shadow" role="alert">
                {{ session('success') }}
            </div>
        @elseif ($errors->any())
            <div class="alert alert-danger shadow" role="alert">
                Ada yang salah dengan inputan anda, silahkan input ulang.
            </div>
        @else
            <div class="media bg-primary rounded mb-3 text-white p-3">
                <img class="align-self-center mr-3" width="230px" src="/layouts/img/img1.png"
                    alt="Generic placeholder image">
                <div class="media-body">
                    <small> <strong>Peringatan!!!</strong><br>Sebagai admin toko, Anda dapat menambahkan, mengedit, atau
                        menghapus produk yang dijual di toko Anda. Anda harus memasukkan informasi produk secara lengkap
                        dan
                        akurat sebelum menyimpannya.</small>
                </div>
            </div>
        @endif
        @include('admin.product.tambah')
    </div>
    <div class="card shadow m-3">
        <div class="card-body">
            <table id="mytable" class="display responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Berat</th>
                        <th>Kategori</th>
                        <th>Stok</th>
                        <th>Gambar</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $no => $product)
                        <tr>
                            <td align="center">{{ ++$no }}</td>
                            <td>{{ $product->name }}</td>
                            <td>Rp. {{ number_format($product->price, 2, ',', '.') }}</td>
                            <td>{{ $product->weigth }}gr</td>
                            <td>{{ $product->nama_kategori }}</td>
                            <td>{{ $product->stok }}</td>
                            <td><img src="{{ Storage::url($product->image) }}" class="rounded-circle"
                                    style="object-fit: cover;
                              object-position: center; width: 25px; height:25px;"
                                    alt="{{ $product->name }}">
                            </td>
                            <td>
                                <div class="d-flex" style="gap: 5px">
                                    <a href="{{ route('admin.product.edit', ['id' => $product->id]) }}"
                                        class="btn btn-warning btn-sm"><i class="fa fa-gavel" aria-hidden="true"></i>
                                        Ubah</a>
                                    <a href="{{ route('admin.product.delete', ['id' => $product->id]) }}"
                                        onclick="return confirm('Yakin Hapus data')" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i> Hapus
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
