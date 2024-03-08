  @extends('layouts.app_home')
  @section('content')
      <style>
          /* Gaya untuk card */
          .card {
              height: 100%;
              /* Mengatur tinggi card agar seragam */
          }

          /* Gaya untuk gambar di dalam card */
          .card img {
              height: 100%;
              /* Mengatur tinggi gambar agar mengisi tinggi card */
              object-fit: cover;
              /* Mengatur agar gambar tidak terdistorsi dan menutupi kotak yang diberikan */
          }

          /* Tambahkan class ini ke gambar agar tingginya seragam */
          .img-uniform-height {
              height: 200px;
              /* Sesuaikan tinggi yang diinginkan */
              object-fit: cover;
              /* Mengatur agar gambar tidak terdistorsi dan menutupi kotak yang diberikan */
          }
      </style>
      <div>
          <img src="/{{ settings()->get('foto') }}" width="100%" class="img-fluid" alt="...">
      </div>
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
                  @if ($blogs->count() > 0)
                      @foreach ($blogs as $blog)
                          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                              <div class="card">
                                  <img class="card-img-top" src="/{{ $blog->gambar }}" alt="">
                                  <div class="bg-light p-4">
                                      <a class="d-block h5 lh-base mb-4"
                                          href="{{ route('home.blog.detail', ['id' => $blog->id]) }}">{!! Str::limit($blog->judul, 40) !!}</a>
                                      <div class="text-muted border-top pt-4">
                                          <a class="me-3" href="{{ route('home.blog.detail', ['id' => $blog->id]) }}">
                                              <i class="fa fa-eye text-primary me-2"></i>Detail
                                          </a> <small class="me-3"><i
                                                  class="fa fa-calendar text-primary me-2"></i>{{ $blog->created_at->format('d F Y ') }}</small>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      @endforeach
                      <div class="d-flex justify-content-center mt-3">
                          <!-- Add pagination links here if needed -->
                          {{ $blogs->links() }}
                      </div>
                  @else
                      <h2>Hasil Pencarian</h2>
                      <div class="alert alert-danger" role="alert">
                          Tidak ada hasil pencarian yang ditemukan.
                      </div>
                  @endif
              </div>
          </div>
      </div>
      <!-- Blog End -->
  @endsection
