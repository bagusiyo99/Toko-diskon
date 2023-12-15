@extends('layouts.app_sneat')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if (isset($barang))
                        <form action="/operator/barang/{{ $barang->id }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                        @else
                            <form action="/operator/barang" method="POST" enctype="multipart/form-data">
                    @endif
                    @csrf
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" name="nama_barang"
                            class="form-control
                            @error('nama_barang')
                                is-invalid
                            @enderror"
                            placeholder="Nama Barang"
                            value="{{ isset($barang) ? $barang->nama_barang : old('nama_barang') }}">
                        @error('nama_barang')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mt-3">
                        <label for="harga_barang">Harga Barang</label>
                        <div class="input-group">

                            <input type="text" name="formatted_harga_barang" id="formatted_harga_barang"
                                class="form-control
            @error('formatted_harga_barang')
                is-invalid
            @enderror"
                                placeholder="Harga Barang"
                                value="{{ isset($barang) ? number_format($barang->harga_barang, 0, ',', '.') : old('formatted_harga_barang') }}"
                                data-inputmask-alias="numeric" data-inputmask-group-separator="." data-inputmask-digits="0"
                                data-inputmask-prefix="Rp " data-inputmask-remove-mask-on-submit="true">
                            <input type="hidden" name="harga_barang" id="harga_barang"
                                value="{{ isset($barang) ? $barang->harga_barang : old('harga_barang') }}">
                        </div>
                        @error('formatted_harga_barang')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>



                    <div class="form-group mt-3">
                        <label for="diskon">Diskon Barang %</label>
                        <input type="number" name="diskon" class="form-control @error('diskon') is-invalid @enderror"
                            placeholder="Diskon Barang" value="{{ isset($barang) ? $barang->diskon : old('diskon') }}"
                            step="0.01" min="0.01">
                        @error('diskon')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mt-3">
                        <label for="gambar">Gambar</label>
                        <input type="file" name="gambar" accept="image/png, image/jpg, image/jpeg"
                            class="form-control
                            @error('gambar')
                                is-invalid
                            @enderror"
                            placeholder="Gambar">
                        @error('gambar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        @if (isset($barang))
                            <img src="/{{ $barang->gambar }}" width="10%" class="mt-4" alt="">
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary mt-5">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const formattedHargaInput = document.getElementById('formatted_harga_barang');
            const hargaInput = document.getElementById('harga_barang');

            formattedHargaInput.addEventListener('input', function() {
                let harga = this.value.replace(/\D/g, ''); // Ambil nilai tanpa karakter non-digit
                hargaInput.value = harga; // Simpan nilai angka saja pada input tersembunyi

                if (harga.length > 3) {
                    harga = harga.replace(/\B(?=(\d{3})+(?!\d))/g, '.'); // Format dengan separator ribuan
                }
                this.value = `Rp ${harga}`; // Tampilkan nilai dengan format Rupiah
            });

            // Saat halaman dimuat, format nilai harga barang pada input
            if (formattedHargaInput.value !== '') {
                let harga = formattedHargaInput.value.replace(/\D/g, ''); // Ambil nilai tanpa karakter non-digit
                if (harga.length > 3) {
                    harga = harga.replace(/\B(?=(\d{3})+(?!\d))/g, '.'); // Format dengan separator ribuan
                }
                formattedHargaInput.value = `Rp ${harga}`; // Tampilkan nilai dengan format Rupiah
            }
        });
    </script>
@endsection
