     @extends('layouts.app_home')
     @section('content')
         <!-- Page Header Start -->
         <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
             <div class="container">
                 <h1 class="display-3 mb-3 animated slideInDown">Contact Us</h1>
                 <nav aria-label="breadcrumb animated slideInDown">
                     <ol class="breadcrumb mb-0">
                         <li class="breadcrumb-item"><a class="text-body" href="#">Home</a></li>
                         <li class="breadcrumb-item"><a class="text-body" href="#">Pages</a></li>
                         <li class="breadcrumb-item text-dark active" aria-current="page">Contact Us</li>
                     </ol>
                 </nav>
             </div>
         </div>
         <!-- Page Header End -->

         <!-- Contact Start -->
         <div class="container-xxl py-6">
             <div class="container">
                 <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                     style="max-width: 500px;">
                     <h1 class="display-5 mb-3">Contact Us</h1>
                     <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.
                     </p>
                 </div>
                 <div class="row g-5 justify-content-center">
                     <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                         <div class="bg-primary text-white d-flex flex-column justify-content-center h-100 p-5">
                             <h5 class="text-white">Call Us</h5>
                             <p class="mb-5"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                             <h5 class="text-white">Email Us</h5>
                             <p class="mb-5"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                             <h5 class="text-white">Office Address</h5>
                             <p class="mb-5"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                             <h5 class="text-white">Follow Us</h5>
                             <div class="d-flex pt-2">
                                 <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i
                                         class="fab fa-twitter"></i></a>
                                 <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i
                                         class="fab fa-facebook-f"></i></a>
                                 <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i
                                         class="fab fa-youtube"></i></a>
                                 <a class="btn btn-square btn-outline-light rounded-circle me-0" href=""><i
                                         class="fab fa-linkedin-in"></i></a>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                         <p class="mb-4">The contact form is currently inactive. Get a functional and working contact
                             form
                             with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're
                             done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                         <div class="row g-3">
                             <form action="{{ route('home.kontak.send') }}" method="POST" class="row g-3">
                                 @csrf
                                 <div class="col-md-6">
                                     <div class="form-floating">
                                         <input type="text" name="nama"
                                             class="form-control                             
                                                    @error('nama')
                                                        is-invalid
                                                    @enderror"
                                             placeholder="Masukkan Nama"
                                             value="{{ isset($daftar_online) ? $daftar_online->nama : old('nama') }}">
                                         @error('nama')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror <label for="name"> Nama</label>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-floating">
                                         <input type="email" name="email"
                                             class="form-control                             
                                                    @error('email')
                                                        is-invalid
                                                    @enderror"
                                             placeholder="Masukkan Email"
                                             value="{{ isset($daftar_online) ? $daftar_online->email : old('email') }}">
                                         @error('email')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror <label for="email"> Email</label>
                                     </div>
                                 </div>
                                 <div class="col-12">
                                     <div class="form-floating">
                                         <textarea type="text" name="alamat" placeholder="Masukkan Alamat Lengkap"
                                             class="form-control                             
                                                    @error('alamat')
                                                        is-invalid
                                                    @enderror"
                                             value="{{ isset($daftar_online) ? $daftar_online->alamat : old('alamat') }}"></textarea>
                                         @error('alamat')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                         <label for="subject">Alamat</label>
                                     </div>
                                 </div>
                                 <div class="col-12">
                                     <div class="form-floating">
                                         <textarea type="text" name="pesan" placeholder="Masukkan Kritik dan Saran"
                                             class="form-control                             
                                                    @error('pesan')
                                                        is-invalid
                                                    @enderror"
                                             value="{{ isset($daftar_online) ? $daftar_online->pesan : old('pesan') }}"></textarea>
                                         @error('pesan')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                         <label for="message">Kritik dan Saran</label>
                                     </div>
                                 </div>
                                 <div class="col-12">
                                     <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Kirim
                                     </button>
                                 </div>
                         </div>
                         </form>
                         <div class="mt-3">
                             @include('flash::message')

                         </div>

                     </div>
                 </div>
             </div>
         </div>
         <!-- Contact End -->
     @endsection
