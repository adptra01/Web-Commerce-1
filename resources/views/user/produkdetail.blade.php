@extends('user.app')
@section('content')

    @foreach ($errors->all() as $error)
        <div class="container alert alert-danger alert-dismissible fade show text-center justify-content-center"
            role="alert">
            {{ $error }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endforeach
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center text-dark mb-4">
                    <h3 class="display-5 font-weight-bold" style="text-transform:uppercase">Detail Produk</h3>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ Storage::url($produk->image) }}" alt="Image" width="100%" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h2 class="font-weight-bold text-dark">{{ $produk->name }}</h2>
                    <p class="text-dark">
                        {{ $produk->description }}
                    </p>
                    <p>
                        <strong class="text-dark h4">Rp {{ number_format($produk->price, 2, ',', '.') }} </strong>
                    </p>
                    <div class="mb-5">
                        <form action="{{ route('user.keranjang.simpan') }}" method="post">
                            @csrf
                            @if (Route::has('login'))
                                @auth
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                @endauth
                            @endif
                            <input type="hidden" name="products_id" value="{{ $produk->id }}">
                            <small>Sisa Stok {{ $produk->stok }}</small>
                            <input type="hidden" value="{{ $produk->stok }}" id="sisastok">
                            <div class="input-group mb-3" style="max-width: 120px;">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-dark js-btn-minus" type="button">&minus;</button>
                                </div>
                                <input type="text" name="qty" class="form-control text-center" value="1"
                                    placeholder="" aria-label="Example text with button addon"
                                    aria-describedby="button-addon1">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-dark js-btn-plus" type="button">&plus;</button>
                                </div>
                            </div>

                    </div>
                    <p><button type="submit" class="buy-now btn btn-sm btn-dark">Masukkan ke keranjang</button></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
