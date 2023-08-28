@extends('user.app')
@section('content')
    <div class="container">
        <div class="card border-0">
            <div class="card-body">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner rounded">
                        <div class="carousel-item active">
                            <img class="d-block m-auto" src="/layouts/drawKit/vector (7).svg" style="height: 400px;"
                                alt="First slide">
                            <div class="carousel-caption d-md-block text-dark">
                                <h3 class="font-weight-bold">Pengiriman cepat dan andal</h3>
                                <p class="font-weight-bold">Jangan sampai menunggu lama untuk mendapatkan pakaian
                                    berkualitas terbaik yang Anda
                                    inginkan!
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block m-auto" src="/layouts/drawKit/vector (4).svg" style="height: 400px;"
                                alt="Second slide">
                            <div class="carousel-caption d-md-block text-dark">
                                <h3 class="font-weight-bold">Kami hanya menggunakan bahan berkualitas terbaik untuk setiap
                                    pakaian yang kami produksi
                                </h3>
                                <p class="font-weight-bold">Sehingga Anda tidak perlu khawatir tentang keawetan dan
                                    kualitasnya.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block m-auto" src="/layouts/drawKit/vector (8).svg" style="height: 400px;"
                                alt="Third slide">
                            <div class="carousel-caption d-md-block text-dark">
                                <h3 class="font-weight-bold">Dapatkan pakaian berkualitas tinggi dengan harga terjangkau di
                                    sini! </h3>
                                <p class="font-weight-bold">Kami menawarkan produk-produk terbaik tanpa merusak dompet Anda.
                                </p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="media bg-primary">
            <div class="row justify-content-center align-items-center bg-primary" style="border-radius: 10px;">
                <div class="col-md text-center">
                    <img src="/layouts/drawKit/vector (3).svg" alt="Generic placeholder image" style="max-width: 400px">
                </div>
                <div class="col-md">
                    <div class="media-body text-white">
                        <h3 class="mt-5">Tampil Keren dengan Pakaian Anak
                            Berkualitas Tinggi</h3>
                        <p>Jangan pernah mengorbankan kualitas untuk gaya! Di toko kami, Anda bisa mendapatkan pakaian anak
                            berkualitas
                            tinggi dengan harga terjangkau. Dapatkan busana anak-anak yang trendi dan tahan lama untuk
                            tampil
                            keren
                            sepanjang hari.</p>
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
                                        <p class="mb-0">Rp. {{ number_format($produk->price, 2, ',', '.') }}</small> <br>
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
    <div class="site-section">
        <div class="container">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s"
                    style="min-height: 400px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
                    <div class="position-relative">
                        <img class="img-fluid w-100 h-100" src="toko.jpeg"
                            style="object-fit: cover; border-radius: 10px; max-height: 600px">
                    </div>
                </div>
                <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <h6 class="text-dark font-weight-bold text-uppercase mb-3">FITUR KAMI</h6>
                    <h1 class="font-weight-bold text-primary mb-5">BERSAMA KAMI DISTRO BZL KIDS</h1>
                    <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <i class="fa fa-globe text-dark fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5 class="font-weight-bold text-dark">Kualitas Terbaik</h5>
                            <p class="mb-0 text-dark">Menjamin kualitas terbaik yang siap memenuhi kebutuhan dan
                                harapan
                                pelanggan kami</p>
                        </div>
                    </div>
                    <div class="d-flex mb-5 wow fadeIn" data-wow-delay="0.5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                        <i class="fa fa-shipping-fast text-dark fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5 class="font-weight-bold text-dark">Pengiriman Tepat Waktu</h5>
                            <p class="mb-0 text-dark">Layanan pengiriman JNE yang membantu kami mengirimkan semua
                                kebutuhan anak.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-0 wow fadeInUp" data-wow-delay="0.7s"
                        style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                        <i class="fa fa-headphones text-dark fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5 class="font-weight-bold text-dark">Dukungan Telepon</h5>
                            <p class="mb-0 text-dark">Anda dapat menghubungi kami kapan saja selama jam kerja (08.00 -
                                20.00 WIB)
                                untuk
                                keluhan maupun pertanyaan. Tim dukungan kami siap membantu
                                Anda
                                dengan senang hati.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
