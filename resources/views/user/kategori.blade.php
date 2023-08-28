@extends('user.app')
@section('content')
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center font-weight-bold text-dark mb-4">
                    <h3 class="display-5 font-weight-bold" style="text-transform:uppercase">Produk Kategori
                        {{ $categories->name }}</h3>
                    <hr>
                </div>
            </div>
            <div class="row mb-5 justify-content-center">
                <div class="row mb-5">
                    @foreach ($produks as $produk)
                        <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                            <div class="block-4 text-center border">
                                <img src="{{ Storage::url($produk->image) }}" alt="Image placeholder" class="img-fluid"
                                    width="400px" style="height:200px">
                                </a>
                                <div class="block-4-text p-4" style="height: 200px;">
                                    <h3 class="text-dark">{{ Str::limit($produk->name, 20, '...') }}</h3>
                                    <p class="mb-0">Rp. {{ number_format($produk->price, 2, ',', '.') }}</p>
                                    @if ($produk->stok == 0)
                                        <a href="{{ route('user.produk.detail', ['id' => $produk->id]) }}"
                                            class="btn btn-dark mt-2 disabled" tabindex="-1" role="button"
                                            aria-disabled="true">Habis</a>
                                    @else
                                        <a href="{{ route('user.produk.detail', ['id' => $produk->id]) }}"
                                            class="btn btn-dark mt-2">Detail</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- <div class="col-md-9 order-2">

                </div> --}}
            </div>
        </div>

    </div>
    </div>
@endsection
