<x-apps>
    <x-slot name="title">
        Produk Toko
    </x-slot>
    <div class="container">
        <h1 class="h3 mb-2 text-gray-800 font-weight-bold">PRODUK TOKO <small>/ {{ $product->name }}</small></h1>
        <div class="media bg-primary rounded mb-3 text-white p-3">
            <img class="align-self-center mr-3" width="230px" src="/layouts/img/img1.png" alt="Generic placeholder image">
            <div class="media-body">
                <small> <strong>Peringatan!!!</strong><br>Perubahan ini akan berpengaruh pada tampilan dan ketersediaan
                    produk di situs web dan aplikasi anda. Pastikan Anda telah memeriksa kembali data produk sebelum
                    menyimpannya. Jika Anda ingin membatalkan perubahan ini, silakan klik tombol "Simpan" di bawah ini.
                </small>
            </div>
        </div>
    </div>

    <form action="{{ route('admin.product.update', ['id' => $product->id]) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        <div class="card shadow m-3">
            <div class="card-header font-weight-bold text-baseline">
                <div class="row">
                    <div class="col-4">
                        <img src="{{ asset('imageproducts/' . $product->image) }}" class="rounded border-3"
                            style="object-fit: cover;
            object-position: center; width: 150px; height:150px;"
                            alt="{{ $product->name }}">
                    </div>
                    <div class="col-8">
                        <div class="custom-file">
                            <label for="exampleFormControlFile1">Foto produk</label>
                            <input type="file" name="image" class="form-control-file btn btn-primary"
                                id="exampleFormControlFile1">
                            <small class="text-danger">Kosongkan jika tidak mengubah gambar</small>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputUsername1">Nama Produk</label>
                    <input required type="text" class="form-control" name="name" value="{{ $product->name }}">
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="exampleFormControlSelect2">Pilih Kategori</label>
                        <select class="form-control" name="categories_id" id="exampleFormControlSelect2">
                            @foreach ($categories as $categorie)
                                <option value="{{ $categorie->id }}" <?php if ($product->categories_id == $categorie->id) {
                                    echo 'selected';
                                } ?>>{{ $categorie->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <label for="exampleInputUsername1">Stok</label>
                        <input required type="number" class="form-control" name="stok" value="{{ $product->stok }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="exampleInputUsername1">Berat (gram)</label>
                        <input required type="number" class="form-control" name="weigth"
                            value="{{ $product->weigth }}">
                    </div>
                    <div class="col">
                        <label for="exampleInputUsername1">Harga</label>
                        <input required type="number" class="form-control" name="price"
                            value="{{ $product->price }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="5" class="form-control" required>{{ $product->description }}</textarea>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary text-right"><i class="fas fa-check"></i>
                        Simpan</button>
                </div>
            </div>
        </div>
    </form>
</x-apps>
