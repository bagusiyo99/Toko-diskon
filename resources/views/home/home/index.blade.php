@extends('layouts.app_home')
@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($banner as $key => $item)
                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                        <img class="w-100" src="/{{ $item->gambar }}" alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <!-- Add your caption content here -->
                                {{-- Example caption content --}}
                                {{-- <div class="row justify-content-start">
                                <div class="col-lg-7">
                                    <h1 class="display-2 mb-5 animated slideInDown">Organic Food Is Good For Health</h1>
                                    <a href="" class="btn btn-primary rounded-pill py-sm-3 px-sm-5">Products</a>
                                    <a href="" class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">Services</a>
                                </div>
                            </div> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                @foreach ($pengaturan as $item)
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="about-img position-relative overflow-hidden p-5 pe-0">
                            <img class="img-fluid w-100" src="/{{ $item->gambar }}">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h3 class="display-5 mb-4">Selamat Datang</h3>
                        <p class="mb-4 description">{!! $item->deskripsi !!}</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Terpercaya</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Murah dan Mewah</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Kualitas Teruji</p>
                        {{-- <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="">Read More</a> --}}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- About End -->





    <!-- Feature Start -->
    <div class="container-fluid bg-light bg-icon my-5 py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <h1 class="display-5 mb-3">Kategori Produk </h1>
                <p> Beberapa kategori yang berada di perusahaan kami.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        {{-- <img class="img-fluid mb-4" src="img/icon-1.png" alt=""> --}}
                        <h4 class="mb-3">Ruangan</h4>
                        <p class="mb-4">Temukan furnitur yang cocok untuk setiap ruang di rumah Anda, mulai dari ruang
                            tamu yang ramah hingga kamar tidur yang nyaman.
                            .</p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Lihat
                            Selengkapnya</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        {{-- <img class="img-fluid mb-4" src="img/icon-2.png" alt=""> --}}
                        <h4 class="mb-3">Material</h4>
                        <p class="mb-4">Kami menawarkan koleksi furniture yang dibuat dengan bahan berkualitas tinggi,
                            mulai dari kayu solid yang tahan lama hingga material modern yang inovatif.

                        </p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Lihat
                            Selengkapnya</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        {{-- <img class="img-fluid mb-4" src="img/icon-3.png" alt=""> --}}
                        <h4 class="mb-3">Dekorasi</h4>
                        <p class="mb-4">Tambahkan sentuhan dekoratif yang memukau dengan pilihan furnitur kami yang dapat
                            meningkatkan keindahan dan gaya dalam setiap sudut ruangan.

                        </p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Lihat
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Product Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s"
                        style="max-width: 500px;">
                        <h1 class="display-5 mb-3">Produk Diskon</h1>
                        <p>Tingkatkan keindahan rumah Anda dengan penawaran istimewa! Temukan koleksi produk diskon kami
                            yang menawarkan nilai luar biasa untuk setiap furnitur yang Anda butuhkan.






                        </p>
                    </div>
                </div>
                {{-- <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary border-2 active" data-bs-toggle="pill"
                                href="#tab-1">Vegetable</a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-2">Fruits
                            </a>
                        </li>
                        <li class="nav-item me-0">
                            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill"
                                href="#tab-3">Fresh</a>
                        </li>
                    </ul>
                </div> --}}
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        @foreach ($diskon as $item)
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="product-item">
                                    <div class="position-relative bg-light overflow-hidden">
                                        <img class="img-fluid w-100" src="/{{ $item->gambar }}"
                                            style="height: 300px; object-fit: cover;" alt="">

                                        <div
                                            class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            Diskon
                                            {{ $item->diskon }}%</div>
                                    </div>
                                    <div class="text-center p-4">
                                        <a class="d-block h5 mb-2 text-uppercase" href="">{!! Str::limit($item->nama_barang, 40) !!}</a>
                                        <span
                                            class="text-primary me-1">{{ formatRupiah($item->harga_barang - ($item->harga_barang * $item->diskon) / 100) }}</span>
                                        <span
                                            class="text-body text-decoration-line-through">{{ formatRupiah($item->harga_barang) }}</span>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="w-50 text-center border-end py-2">
                                            <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>
                                                Detail</a>
                                        </small>
                                        <small class="w-50 text-center py-2">
                                            <a class="text-body" href=""><i
                                                    class="fab fa-whatsapp text-primary me-2"></i>Whatsapp</a>
                                        </small>
                                    </div>
                                </div>
                            </div>
                        @endforeach



                        <div class="col-12 text-center">
                            <a class="btn btn-primary rounded-pill py-3 px-5" href="/diskon">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->






    <!-- Firm Visit Start -->
    <div class="container-fluid bg-primary bg-icon mt-5 py-6">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-7 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-5 text-white mb-3">Kunjungi Perusahaan Kami</h1>
                    <p class="text-white mb-0">Jelajahi dunia furnitur yang penuh inspirasi! Kunjungi perusahaan kami dan
                        temukan koleksi lengkap yang akan membawa kehangatan dan keindahan ke setiap ruangan di rumah Anda.






                    </p>
                </div>
                <div class="col-md-5 text-md-end wow fadeIn" data-wow-delay="0.5s">
                    <a class="btn btn-lg btn-secondary rounded-pill py-3 px-5" href=""> Kunjungi</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Firm Visit End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-light bg-icon py-6 mb-5">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <h1 class="display-5 mb-3">Kata Pelanggan</h1>
                <p>Saya sangat terkesan dengan desain minimalis namun elegan dari meja makan yang saya beli di sini.
                    Material yang digunakan terasa kuat dan tahan lama. Produk yang sangat direkomendasikan!</p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">Kualitasnya tidak diragukan lagi, sangat nyaman dan sesuai dengan yang diharapkan.
                        Sangat puas dengan pembelian saya.</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" alt="">
                        <div class="ms-3">
                            <h5 class="mb-1">Sarah </h5>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">Desain yang unik dan inovatif! Saya senang menemukan furnitur di sini yang sesuai
                        dengan selera saya. Kualitasnya melebihi ekspektasi saya dan memberikan sentuhan istimewa pada
                        ruangan saya.</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" alt="">
                        <div class="ms-3">
                            <h5 class="mb-1">Anton</h5>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">Pengiriman tepat waktu, furnitur dikemas dengan baik, dan hasil akhirnya sangat
                        memuaskan. Layanan pelanggan juga responsif dan membantu..</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" alt="">
                        <div class="ms-3">
                            <h5 class="mb-1">Johnson</h5>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">Harganya sangat bersaing untuk kualitas yang diberikan. Saya senang dengan pilihan
                        yang ada dan pasti akan kembali lagiet sit.</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg" alt="">
                        <div class="ms-3">
                            <h5 class="mb-1">Susi</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <h1 class="display-5 mb-3">Informasi Terbaru</h1>
                <p>Ini dia berita terkini! Perusahaan kami telah merilis koleksi terbaru furnitur yang menghadirkan desain
                    inovatif dan tren terkini. Jelajahi pilihan terbaru kami yang menggabungkan fungsionalitas, gaya, dan
                    kualitas untuk mempercantik setiap ruang di rumah Anda.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="img/blog-1.jpg" alt="">
                    <div class="bg-light p-4">
                        <a class="d-block h5 lh-base mb-4" href="">How to cultivate organic fruits and
                            vegetables in own firm</a>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>01 Jan, 2045</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img class="img-fluid" src="img/blog-2.jpg" alt="">
                    <div class="bg-light p-4">
                        <a class="d-block h5 lh-base mb-4" href="">How to cultivate organic fruits and
                            vegetables in own firm</a>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>01 Jan, 2045</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid" src="img/blog-3.jpg" alt="">
                    <div class="bg-light p-4">
                        <a class="d-block h5 lh-base mb-4" href="">How to cultivate organic fruits and
                            vegetables in own firm</a>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>01 Jan, 2045</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection
