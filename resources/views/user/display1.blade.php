@extends('user.app')
@section('content')
    <div class="container my-5 text-center text-dark">
        <h3>Just dropped & never seen before</h3>
        <h1 class="font-weight-bold">Designed specially for you</h1>
    </div>

    <div class="container">
        <div class="site-blocks-cover rounded"
            style="background-image: url({{ asset('shopper') }}/images/display.jpg); max-height:200px;" data-aos="fade">
            <div class="container">
                <div class="row align-items-start align-items-md-center justify-content-end">
                    <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
                        <h1 class="mb-2">Show Your Personal Style</h1> <br>
                        <div class="intro-text text-center text-md-left">
                            <span class="mb-4 text-white fw-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Molestias, sunt ducimus? Asperiores ipsa magni natus quidem, officia eius quod deleniti
                                reiciendis, facilis repudiandae obcaecati blanditiis adipisci. Cumque aliquid libero
                                quia.</span>
                            <p><a href="{{ route('user.produk') }}" class="btn btn-sm btn-primary mt-5">Belanja Sekarang</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section block-3 site-blocks-2" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 site-section-heading text-center pt-4">
                    <h2>Produk Terbaru</h2>
                    <hr class="border">
                </div>
            </div>
            @php
                $random1 = App\Product::oldest()->first();
                $random2 = App\Product::inRandomOrder()
                    ->limit(2)
                    ->get();
                $random3 = App\Product::latest()
                    ->limit(2)
                    ->get();
            @endphp
            <div class="row">
                <div class="col-md mb-3">
                    <img src="{{ Storage::url($random1->image) }}" alt="{{ $random1 }}" width="100%">
                </div>
                <div class="col-md">
                    <div class="row mb-4 justify-content-center align-items-center">
                        @foreach ($random2 as $item)
                            <div class="col w-50 m-auto">
                                <img src="{{ Storage::url($item->image) }}" width="100%" alt="{{ $item->name }}">
                            </div>
                        @endforeach
                    </div>
                    <div class="row mb-3 justify-content-center align-items-center">
                        @foreach ($random3 as $item)
                            <div class="col w-50 m-auto">
                                <img src="{{ Storage::url($item->image) }}" width="100%" alt="{{ $item->name }}">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section block-3 site-blocks-2" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 site-section-heading text-center pt-4">
                    <h2>Produk Terlaris</h2>
                    <hr class="border">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="nonloop-block-3 owl-carousel">
                        @foreach ($produks as $produk)
                            <div class="item">
                                <div class="block-4 text-center">
                                    <figure class="block-4-image">
                                        <img src="{{ Storage::url($produk->image) }}" alt="Image placeholder"
                                            class="img-fluid" width="100%" style="height:300px">
                                    </figure>
                                    </a>
                                    <div class="block-4-text p-4" style="height: 200px;">
                                        <h3 class="text-primary">{{ $produk->name }}</h3>
                                        <small class="mb-0">Rp. {{ number_format($produk->price, 2, ',', '.') }}</small>
                                        @if ($produk->stok == 0)
                                            <a href="{{ route('user.produk.detail', ['id' => $produk->id]) }}"
                                                class="btn btn-primary mt-2 disabled" tabindex="-1" role="button"
                                                aria-disabled="true">Habis</a>
                                        @else
                                            <a href="{{ route('user.produk.detail', ['id' => $produk->id]) }}"
                                                class="btn btn-primary mt-2">Detail</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
