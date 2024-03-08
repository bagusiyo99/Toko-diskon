<?php

/// dua komponen jika di buat folder
namespace App\Http\Controllers\home;
use App\Http\Controllers\Controller;

use App\Models\Banner;
use App\Models\Barang;
use App\Models\Blog;
use App\Models\Diskon;
use App\Models\Pengaturan;
use App\Models\Setting;

use Illuminate\Http\Request;

class Home extends Controller
{
    function index (){
    $data = [
        'pengaturan' => Pengaturan::get(),
        'blog' => Blog::paginate(3),
        // 'informasi' => Informasi::paginate(4),
        'banner' => Banner::get(),
        'diskon' => Diskon::where('diskon', '>', 0)->latest()->take(4)->get(),

        



        'content'=> 'home/home/index'
    ];
        return view ('home.home.index', $data );
    }




    //     public function informasi($id)
    // {
    // $data = [
    //     'informasi' => Informasi::find($id),
    //     'content'=> 'home/home/informasi'
    // ];
    // return view('home.layouts.wrapper',$data);
    // }




  

}