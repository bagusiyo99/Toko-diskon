@extends('layouts.app_home')

@section('content')
    <div>
        <img src="/{{ settings()->get('foto') }}" width="100%" class="img-fluid" alt="...">
    </div>
    <!-- Product Start -->
    <div class="container-xxl py-5 mt-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                        <h1 class="display-5 mb-3">Produk Diskon</h1>
                        <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor
                            duo.</p>
                    </div>
                </div>
                <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                    <form action="{{ route('furnitur.index') }}" method="GET">
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- Other Contents -->
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="kategori">Pilih Kategori:</label>
                                    <select name="kategori" id="kategori" class="form-control">
                                        <option value="all" {{ request('kategori') === 'all' ? 'selected' : '' }}>Semua
                                        </option>
                                        <option value="Ruangan" {{ request('kategori') === 'Ruangan' ? 'selected' : '' }}>
                                            Ruangan</option>
                                        <option value="Material" {{ request('kategori') === 'Material' ? 'selected' : '' }}>
                                            Material</option>
                                        <option value="Dekorasi" {{ request('kategori') === 'Dekorasi' ? 'selected' : '' }}>
                                            Dekorasi</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary mt-2">Cari</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

            <div class="row g-4">
                @if ($produk->isEmpty())
                    <div class="col-12 text-center mt-5">
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                                aria-label="Danger:">
                                <use xlink:href="#exclamation-triangle-fill" />
                            </svg>
                            <div>
                                Tidak ada produk yang ditemukan.
                            </div>
                        </div>
                    </div>
                @else
                    @foreach ($produk as $item)
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="/{{ $item->gambar }}"
                                        style="height: 300px; object-fit: cover;" alt="">
                                    <div
                                        class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        Diskon {{ $item->diskon }}%
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2 text-uppercase"
                                        href="">{{ Str::limit($item->nama_produk, 40) }}</a>
                                    <span class="text-primary me-1">{{ formatRupiah($item->harga_produk) }}</span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="{{ route('furnitur.detail', $item->id) }}">
                                            <i class="fa fa-eye text-primary me-2"></i>Detail
                                        </a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href=""><i
                                                class="fab fa-whatsapp text-primary me-2"></i>Whatsapp</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

        </div>
    </div>
    <!-- Product End -->
@endsection