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
                                @if ($diskon->gambar)
                                    <img src="/{{ $diskon->gambar }}" class="img-fluid rounded" alt="Gambar Produk">
                                @else
                                    <img src="/img/default.jpg" class="img-fluid rounded" alt="Default Image">
                                @endif
                            </div>
                            <div class="col-md-8">
                                <h3 class="text-primary">{{ $diskon->nama_barang }}</h3>
                                <p><strong>Kategori:</strong> {{ $diskon->kategori }}</p>
                                <p><strong>Harga:</strong> {{ formatRupiah($diskon->harga_barang) }}</p>
                                <p><strong>Diskon:</strong> {{ $diskon->diskon }}%</p>
                                <hr>
                                <p>{{ $diskon->deskripsi }}</p>
                                <!-- Tampilkan detail lainnya sesuai kebutuhan -->

                                <!-- Tombol Kembali -->
                                <a href="{{ route('sale.index') }}" class="btn btn-secondary mt-3">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-lg-12">
                <article class="blog-post">
                    <h1 class="blog-post-title">{{ $diskon->nama_barang }}</h1>
                    <p class="blog-post-meta text-muted">Tanggal Posting: 13 Desember 2023 / Kategori: Kesehatan</p>
                    <img src="/{{ $diskon->gambar }}" class="img-fluid mb-4 rounded" alt="Gambar Apel">
                    <p class="blog-post-content">{{ $diskon->deskripsi }}</p>
                    {{-- <ul class="blog-post-content">
                        <li>Meningkatkan kesehatan jantung</li>
                        <li>Menurunkan risiko diabetes</li>
                        <li>Membantu sistem pencernaan</li>
                        <li>Menjaga berat badan yang sehat</li>
                        <li>Meningkatkan kekebalan tubuh</li>
                    </ul>
                    <p class="blog-post-content">Apel juga mengandung vitamin C yang membantu tubuh dalam menyerap zat
                        besi.</p>
                    <blockquote class="blockquote">
                        <p class="blog-post-content">"Satu apel sehari dapat menjauhkan dokter dari Anda."</p>
                        <footer class="blockquote-footer">Kata Bijak</footer>
                    </blockquote> --}}

                </article>
            </div>
            <!-- Sidebar -->

        </div>
    </div>
@endsection
