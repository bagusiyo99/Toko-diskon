{{-- <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="/operator/pesan" class="btn btn-success mb-5">
                    <i class="fas fa-arrow-alt-circle-left">Kembali</i>
                </a>
                <tr>
                    <p> From : {{ $pesan->nama }} </p>
                </tr>
                <h3> {{ $pesan->email }} </h3>
                <p> {{ $pesan->pesan }} </p>

            </div>
        </div>
    </div>
</div>
</div> --}}
@extends('layouts.app_sneat')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <p class="form-control"> {{ $kontak->nama }}</p>
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <p class="form-control"> {{ $kontak->email }}</p>
                    </div>

                    <div class="form-group">
                        <label for="">Alamat</label>
                        <p class="form-control"> {{ $kontak->alamat }}</p>
                    </div>

                    {{-- <div class="form-group">
                        <label for="">Email</label>
                        <p class="form-control"> {{ $kontak->jk }}</p>
                    </div> --}}

                    <div class="form-group" height="300px">
                        <label>Pesan</label>
                        <textarea class="form-control " height="900px"> {{ $kontak->pesan }} </textarea>

                    </div>


                    <a href="/operator/kontak" class="btn btn-primary mb-3">
                        Kembali</a>

                </div>
            </div>
        </div>
    </div>
@endsection
