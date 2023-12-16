@extends('layouts.app_home')

@section('content')
    <div>
        <img src="/{{ settings()->get('foto') }}" width="100%" class="img-fluid" alt="...">
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">Detail Produk</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                @if ($produk->gambar)
                                    <img src="/{{ $produk->gambar }}" class="img-fluid rounded" alt="Gambar Produk">
                                @else
                                    <img src="/img/default.jpg" class="img-fluid rounded" alt="Default Image">
                                @endif
                            </div>
                            <div class="col-md-8">
                                <h3 class="text-primary">{{ $produk->nama_produk }}</h3>
                                <p><strong>Kategori:</strong> {{ $produk->kategori }}</p>
                                <p><strong>Harga:</strong> {{ formatRupiah($produk->harga_produk) }}</p>
                                <p><strong>Diskon:</strong> {{ $produk->diskon }}%</p>
                                <hr>
                                <p>{{ $produk->deskripsi }}</p>
                                <!-- Tampilkan detail lainnya sesuai kebutuhan -->

                                <!-- Tombol Kembali -->
                                <a href="{{ route('furnitur.index') }}" class="btn btn-secondary mt-3">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
