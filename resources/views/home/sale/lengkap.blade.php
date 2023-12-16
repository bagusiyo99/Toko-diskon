@extends('layouts.app_home')

@section('content')
    <div>
        <img src="/{{ settings()->get('foto') }}" width="100%" class="img-fluid" alt="...">
    </div>
    <!-- Product Start -->
    <div class="container-xxl py-5 mt-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <!-- Content similar to index.blade.php -->
                <!-- ... (Content for the selection form and grid layout) ... -->
            </div>

            <div class="row g-4">
                @forelse ($diskon as $item)
                    @if ($item->diskon == 0 || $item->status !== 'aktif')
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="/{{ $item->gambar }}"
                                        style="height: 300px; object-fit: cover;" alt="">
                                    <!-- Check if the item has 0 discount or inactive status -->
                                    @if ($item->diskon == 0)
                                        <div
                                            class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            Tanpa Diskon
                                        </div>
                                    @elseif ($item->status !== 'aktif')
                                        <div
                                            class="bg-danger rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            Tidak Aktif
                                        </div>
                                    @endif
                                </div>
                                <div class="text-center p-4">
                                    <!-- Display product details -->
                                    <!-- ... (Product information display) ... -->
                                </div>
                                <div class="d-flex border-top">
                                    <!-- Links for details and WhatsApp -->
                                    <!-- ... (Links or buttons) ... -->
                                </div>
                            </div>
                        </div>
                    @endif
                @empty
                    <!-- No products found with discount 0 or inactive status -->
                    <div class="col-12 text-center mt-5">
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                                aria-label="Danger:">
                                <use xlink:href="#exclamation-triangle-fill" />
                            </svg>
                            <div>
                                Tidak ada produk dengan diskon 0 atau status tidak aktif yang ditemukan.
                            </div>
                        </div>
                    </div>
                @endforelse

                @if ($diskon->isEmpty())
                    <!-- No products found at all -->
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
                @endif
            </div>
        </div>
    </div>
    <!-- Product End -->
@endsection
