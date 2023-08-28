@extends('user.app')
@section('content')
    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="#">Home</a> <span class="mx-2 mb-0">/</span> <a
                        href="cart.html">Cart</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Checkout</strong>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <div class="p-3 p-lg-5 border">
                                <form action="{{ route('user.order.simpan') }}" method="POST">
                                    @csrf
                                    <table class="table site-block-order-table mb-5">
                                        <h2 class="h3 mb-3 text-black font-weight-bold text-primary text-center mb-4">Your
                                            Order</h2>
                                        <thead>
                                            <th>Product</th>
                                            <th>Total</th>
                                        </thead>
                                        <tbody>
                                            <?php $subtotal = 0; ?>
                                            @foreach ($keranjangs as $keranjang)
                                                <tr>
                                                    <td>{{ $keranjang->nama_produk }} <strong class="mx-2">x</strong>
                                                        {{ $keranjang->qty }}</td>
                                                    <?php
                                                    $total = $keranjang->price * $keranjang->qty;
                                                    $subtotal = $subtotal + $total;
                                                    ?>
                                                    <td>Rp. {{ number_format($total, 2, ',', '.') }}</td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td>
                                                    Ongkir
                                                </td>
                                                <td>
                                                    Rp. {{ number_format($ongkir, 2, ',', '.') }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-black font-weight-bold"><strong>Jumlah Pembayaran</strong>
                                                </td>
                                                <td class="text-black font-weight-bold">
                                                    <?php $alltotal = $subtotal + $ongkir; ?>
                                                    <strong>Rp. {{ number_format($alltotal, 2, ',', '.') }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Alamat Penerima</td>
                                                <td>{{ $alamat->detail }}, {{ $alamat->kota }}, {{ $alamat->prov }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="form-group">
                                        <label for="pesan">Catatan</label>
                                        <textarea name="pesan" class="form-control" rows="5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">No telepon yang bisa dihubungi</label>
                                        <input type="number" name="no_hp" class="form-control" required>
                                    </div>
                                    <input type="hidden" name="invoice" value="{{ $invoice }}">
                                    <input type="hidden" name="subtotal" value="{{ $alltotal }}">
                                    <input type="hidden" name="ongkir" value="{{ $ongkir }}">
                                    <div class="form-group">
                                        <label for="">Pilih Metode Pembayaran</label>
                                        <select name="metode_pembayaran" id="" class="form-control">
                                            <option value="trf">Transfer</option>
                                            <option value="cod">Cod</option>
                                        </select>
                                        <small>Jika memilih cod maka akan dikenakan biaya tambahan sebesar Rp. 10.000,00 dan
                                            ScreenShot halaman ini sebagai bukti pembayaran COD, </small>
                                        <a type="button" class="text-danger" value="Capture" onclick="capture()">Klik
                                            disini.</a>
                                    </div>


                                    <div class="form-group">
                                        <button class="btn btn-primary btn-lg py-3 btn-block" type="submit">Pesan
                                            Sekarang</button>
                                        <small>Mohon periksa alamat penerima dengan benar agar tidak terjadi salah
                                            pengiriman</small>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- </form> -->
        </div>
    </div>
    <!-- https://github.com/niklasvh/html2canvas -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.4/html2canvas.min.js"></script>
    <script>
        function capture() {
            html2canvas(document.body).then((canvas) => {
                let a = document.createElement("a");
                a.download = "ss.png";
                a.href = canvas.toDataURL("image/png");
                a.click(); // MAY NOT ALWAYS WORK!
            });
        }
    </script>
@endsection
