<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Banner
 *
 * @property int $id
 * @property string $judul
 * @property string $deskripsi
 * @property string|null $gambar
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\BannerFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Banner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Banner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Banner query()
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereDeskripsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereGambar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereJudul($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereUpdatedAt($value)
 */
	class Banner extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Blog
 *
 * @property int $id
 * @property string $judul
 * @property string $deskripsi
 * @property string|null $gambar
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $slug
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Komen> $komentar
 * @property-read int|null $komentar_count
 * @method static \Database\Factories\BlogFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog query()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereDeskripsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereGambar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereJudul($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereUpdatedAt($value)
 */
	class Blog extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Diskon
 *
 * @property int $id
 * @property string $nama_barang
 * @property string $harga_barang
 * @property string|null $gambar
 * @property string $deskripsi
 * @property int $diskon
 * @property string|null $kategori
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\DiskonFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Diskon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Diskon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Diskon query()
 * @method static \Illuminate\Database\Eloquent\Builder|Diskon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diskon whereDeskripsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diskon whereDiskon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diskon whereGambar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diskon whereHargaBarang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diskon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diskon whereKategori($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diskon whereNamaBarang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diskon whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diskon whereUpdatedAt($value)
 */
	class Diskon extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Jasa
 *
 * @property int $id
 * @property string $judul
 * @property string $deskripsi
 * @property string|null $gambar
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\JasaFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Jasa newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Jasa newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Jasa query()
 * @method static \Illuminate\Database\Eloquent\Builder|Jasa whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jasa whereDeskripsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jasa whereGambar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jasa whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jasa whereJudul($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jasa whereUpdatedAt($value)
 */
	class Jasa extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Komen
 *
 * @property int $id
 * @property int $blog_id
 * @property string $nama
 * @property string $isi
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Komen newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Komen newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Komen query()
 * @method static \Illuminate\Database\Eloquent\Builder|Komen whereBlogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Komen whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Komen whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Komen whereIsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Komen whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Komen whereUpdatedAt($value)
 */
	class Komen extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Kontak
 *
 * @property int $id
 * @property string $nama
 * @property string $email
 * @property string $alamat
 * @property string $pesan
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\KontakFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Kontak newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kontak newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kontak query()
 * @method static \Illuminate\Database\Eloquent\Builder|Kontak whereAlamat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kontak whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kontak whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kontak whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kontak whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kontak wherePesan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kontak whereUpdatedAt($value)
 */
	class Kontak extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Pemesanan
 *
 * @property int $id
 * @property string $nama
 * @property string $email
 * @property string $alamat
 * @property string $jk
 * @property string $pesan
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\PemesananFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Pemesanan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pemesanan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pemesanan query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pemesanan whereAlamat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pemesanan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pemesanan whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pemesanan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pemesanan whereJk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pemesanan whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pemesanan wherePesan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pemesanan whereUpdatedAt($value)
 */
	class Pemesanan extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Pengaturan
 *
 * @property int $id
 * @property string $judul
 * @property string $deskripsi
 * @property string $visi
 * @property string $misi
 * @property string $alamat
 * @property string $hp
 * @property string|null $logo
 * @property string|null $gambar
 * @property string|null $vidio
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\PengaturanFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Pengaturan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pengaturan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pengaturan query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pengaturan whereAlamat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengaturan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengaturan whereDeskripsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengaturan whereGambar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengaturan whereHp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengaturan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengaturan whereJudul($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengaturan whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengaturan whereMisi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengaturan whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengaturan whereVidio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengaturan whereVisi($value)
 */
	class Pengaturan extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Portofolio
 *
 * @property int $id
 * @property string $judul
 * @property string $deskripsi
 * @property string|null $gambar
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\PortofolioFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Portofolio newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Portofolio newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Portofolio query()
 * @method static \Illuminate\Database\Eloquent\Builder|Portofolio whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portofolio whereDeskripsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portofolio whereGambar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portofolio whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portofolio whereJudul($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portofolio whereUpdatedAt($value)
 */
	class Portofolio extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Produk
 *
 * @property int $id
 * @property string $nama_produk
 * @property string $harga_produk
 * @property string|null $gambar
 * @property string $deskripsi
 * @property string|null $kategori
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\ProdukFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Produk newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Produk newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Produk query()
 * @method static \Illuminate\Database\Eloquent\Builder|Produk whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produk whereDeskripsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produk whereGambar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produk whereHargaProduk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produk whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produk whereKategori($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produk whereNamaProduk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produk whereUpdatedAt($value)
 */
	class Produk extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $akses
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAkses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

