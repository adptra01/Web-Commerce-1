<x-apps>
    <x-slot name="title">Kategori Produk</x-slot>
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800 font-weight-bold">KATEGORI PRODUK <small>/ {{ $categorie->name }}</small></h1>
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
                <img class="align-self-center mr-3" width="230px" src="/layouts/drawKit/vector (4).svg"
                    alt="Generic placeholder image">
                <div class="media-body">
                    <small> <i class="fas fa-regular fa-bell"></i> Peringatan!!!</strong> <br>Sebagai admin toko, Anda dapat menambahkan, mengedit, atau
                        menghapus kategori produk yang dijual di toko Anda. Anda harus memasukkan informasi produk
                        secara lengkap dan
                        akurat sebelum menyimpannya.</small>
                </div>
            </div>
        @endif
    </div>
    <div class="card shadow m-3">
        <div class="card-body">
            <p class="text-center font-weight-bold">UBAH KATEGORI PRODUK</p>
            <div class="card-header bg-white mb-3">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputUsername1">Nama lama</label>
                        <input type="text" class="form-control" name="name" value="{{ $categorie->name }}"
                            disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <form action="{{ route('admin.categories.update', ['id' => $categorie->id]) }}" method="POST">
                            @csrf
                            <label for="exampleInputUsername1">Nama baru</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                required>
                            <div class="text-right my-2">
                                <button type="submit" class="btn btn-primary text-right"><i class="fas fa-check"></i>
                                    Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <table id="mytable" class="display responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th>Kategori produk</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $no => $item)
                        <tr>
                            <td>{{ ++$no }}</td>
                            <td>{{ $item->name }}</td>
                            <td>
                                <div class="d-flex" style="gap: 5px">
                                    <a href="{{ route('admin.categories.edit', ['id' => $item->id]) }}"
                                        class="btn btn-warning btn-sm"><i class="fa fa-gavel" aria-hidden="true"></i>
                                        Ubah</a>
                                    <a href="{{ route('admin.categories.delete', ['id' => $item->id]) }}"
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
