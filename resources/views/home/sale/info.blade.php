@extends('layouts.app_home')

@section('content')
    <div>
        <img src="/{{ settings()->get('foto') }}" width="100%" class="img-fluid" alt="...">
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="card mb-4">
                    <img src="/{{ $diskon->gambar }}" class="card-img-top" alt="Product Image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title text-primary">{{ $diskon->nama_barang }}</h2>
                        <p class="card-text fs-5"><strong>Kategori:</strong> {{ $diskon->kategori }}</p>
                        <p class="card-text fs-5"><strong>Harga:</strong>
                            @if ($diskon->diskon > 0 && $diskon->status === 'aktif')
                                {{ formatRupiah($diskon->harga_barang - ($diskon->harga_barang * $diskon->diskon) / 100) }}
                            @else
                                {{ formatRupiah($diskon->harga_barang) }}
                            @endif
                        </p>
                        @if ($diskon->diskon > 0 && $diskon->status === 'aktif')
                            <p class="card-text fs-5"><strong>Diskon:</strong> {{ $diskon->diskon }}%</p>
                        @endif
                        <hr>
                        <p class="card-text fs-5">{!! $diskon->deskripsi !!}</p>
                        <!-- Tampilkan detail lainnya sesuai kebutuhan -->
                        <!-- Tombol Kembali -->
                        @if ($diskon->diskon > 0 && $diskon->status === 'aktif')
                            <a href="{{ route('sale.index') }}" class="btn btn-secondary mt-3">Kembali</a>
                        @else
                            <a href="{{ route('sale.lengkap') }}" class="btn btn-secondary mt-3">Kembali</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
