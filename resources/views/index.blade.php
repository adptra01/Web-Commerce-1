<x-apps>
  <div class="card">
    <div class="card-body m-4">
      <table class="table table-bordered table-hovered" id="mytable">
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
          @foreach($products as $product)
            <tr>
                <td align="center"></td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->weigth }}gr</td>
                <td>{{ $product->nama_kategori }}</td>
                <td>{{ $product->stok }}</td>
                <td><img src="{{ asset('imageproducts/'.$product->image) }}" alt="" ></td>
                <td align="center">
                <div class="btn-group" role="group" aria-label="Basic example">
                  <a href="{{ route('admin.product.edit',['id'=>$product->id]) }}" class="btn btn-warning btn-sm">
                    <i class="mdi mdi-tooltip-edit"></i>
                  </a>
                  <a href="{{ route('admin.product.delete',['id'=>$product->id]) }}" onclick="return confirm('Yakin Hapus data')" class="btn btn-danger btn-sm">
                    <i class="mdi mdi-delete-forever"></i>
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