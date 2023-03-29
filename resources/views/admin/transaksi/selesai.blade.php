<x-apps>
  <x-slot name="title">Transaksi Selesai</x-slot>
  <div class="container-fluid">
      <h1 class="h3 mb-2 text-gray-800 font-weight-bold">TRANSAKSI SELESAI</h1>
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
                      menghapus kategori produk yang dijual di toko Anda. Anda harus memasukkan informasi produk
                      secara lengkap dan
                      akurat sebelum menyimpannya.</small>
              </div>
          </div>
      @endif
  </div>
  <div class="card shadow m-3">
      <div class="card-body">
        <table id="mytable" class="display responsive nowrap" style="width:100%">
          <thead>
            <tr>
              <th width="5%">No</th>
              <th>No Invoice</th>
              <th>Pemesan</th>
              <th>Subtotal</th>
              <th>Metode Pembayaran</th>
              <th>Status Pesanan</th>
              <th width="15%">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($orderbaru as $order)
              <tr>
                  <td align="center"></td>
                  <td>{{ $order->invoice }}</td>
                  <td>{{ $order->nama_pemesan }}</td>
                  <td>{{ $order->subtotal + $order->biaya_cod }}</td>
                  <td>{{ $order->metode_pembayaran }}</td>
                  <td>{{ $order->name }}</td>
                  <td align="center">
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('admin.transaksi.detail',['id'=>$order->id]) }}" class="btn btn-primary btn-sm">
                      Detail
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
