<?php


use App\Http\Controllers\home\Home;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\home\HomeJasa;
use App\Http\Controllers\admin\AdminBlog;
use App\Http\Controllers\admin\AdminJasa;
use App\Http\Controllers\home\HomeDiskon;



use App\Http\Controllers\home\HomeProduk;
use App\Http\Controllers\admin\AdminKomen;
use App\Http\Controllers\home\HomeContact;
use App\Http\Controllers\admin\AdminBanner;
use App\Http\Controllers\admin\AdminBarang;
use App\Http\Controllers\Admin\AdminDiskon;
use App\Http\Controllers\admin\AdminKontak;
use App\Http\Controllers\Admin\AdminProduk;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\home\HomePemesanan;
use App\Http\Controllers\home\HomePortofolio;
use App\Http\Controllers\admin\AdminPemesanan;
use App\Http\Controllers\admin\AdminTransaksi;
use App\Http\Controllers\home\komenController;
use App\Http\Controllers\admin\AdminPengaturan;
use App\Http\Controllers\admin\AdminPortofolio;
use App\Http\Controllers\home\HomeBlogController;
use App\Http\Controllers\admin\BerandaOperatorController;
use App\Http\Controllers\home\HomeKontak;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', [Home::class, 'index']);
Route::get('/detail/{id}', [Home::class, 'detail'])->name('home.detail');
Route::get('/informasi/{id}', [Home::class, 'informasi']);


Route::get('/portofolio', [HomePortofolio::class, 'index'])->name('portofolio.index');
Route::get('/portofolio/{id}', [HomePortofolio::class, 'detail'])->name('portofolio.detail');

Route::get('/jasa', [HomeJasa::class, 'index'])->name('jasa.index');
Route::get('/jasa/{id}', [HomeJasa::class, 'detail'])->name('jasa.detail');


// Route::get('/produk', [HomeProduk::class, 'index'])->name('furnitur.index');
// Route::get('/produk/{id}', [HomeProduk::class, 'produk'])->name('furnitur.detail');

Route::get('/diskon', [HomeDiskon::class, 'index'])->name('sale.index');
Route::get('/produk/lengkap', [HomeDiskon::class, 'lengkap'])->name('sale.lengkap');
Route::get('/produk/detail/{id}', [HomeDiskon::class, 'diskon'])->name('sale.detail');








// Route::get('/pemesanan', [HomePemesanan::class, 'index'])->name('pemesanan.index');
// Route::post('/pemesanan/send', [HomePemesanan::class, 'send'])->name('pemesanan.send');


// komentar blog atau artikel
Route::get('/blog', [HomeBlogController::class, 'blog'])->name('home.blog.index');
// Route to display a specific blog post and its comments
Route::get('/blog/{id}', [HomeBlogController::class, 'detailBlog'])->name('home.blog.detail');
// Rute untuk menampilkan formulir input komentar
Route::get('/komentar', [KomenController::class, 'comen'])->name('komentar.comen');
Route::get('/search', [HomeBlogController::class, 'search'])->name('home.blog.search');


// Rute untuk menyimpan komentar
Route::post('/komentar/send', [KomenController::class, 'send'])->name('komentar.send')->middleware('web');
// akhir komentar blog atau artikel















Route::get('/home', function () {
    $data = [
        'content'=> 'home/home/index'
    ];
    return view('home.layouts.wrapper',$data);
});


Route::get('/alamat', function () {
    $data = [
        'content'=> 'home/alamat/index'
    ];
    return view('home.layouts');
});

Route::get('/alamat', function () {
 return redirect();
});
// Route::view('/alamat', 'home.alamat.index');


Route::get('/home', function () {
 return redirect();
});

Auth::routes();


Route::get('/kontak', [HomeKontak::class, 'index'])->name('home.kontak.index');
Route::post('/kontak/send', [HomeKontak::class, 'send'])->name('home.kontak.send');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('operator')->middleware(['auth', 'auth.operator'])->group(function(){
    
    Route::get('beranda', [BerandaOperatorController::class, 'index'])->name('operator.beranda');


        Route::get('/pengaturan', [AdminPengaturan::class, 'index'])->name('pengaturan.index');
        Route::put('/pengaturan/update', [AdminPengaturan::class, 'update'])->name('pengaturan.update');



    Route::resource('setting', SettingController::class);
    Route::resource('/pemesanan', AdminPemesanan::class);
    Route::resource('/komen', AdminKomen::class);
    Route::resource('/jasa', AdminJasa::class);
    Route::resource('/banner', AdminBanner::class);
    Route::resource('/blog', AdminBlog::class);
    Route::resource('/produk', AdminProduk::class);
    Route::resource('/diskon', AdminDiskon::class);
    Route::resource('/kontak', AdminKontak::class);


    Route::resource('/portofolio', AdminPortofolio::class);

});




Route::get('logout', function () {
    Auth::logout();
    return redirect('login');
})->name('logout');



