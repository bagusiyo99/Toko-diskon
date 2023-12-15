<?php

/// dua komponen jika di buat folder
namespace App\Http\Controllers\home;
use App\Http\Controllers\Controller;

use App\Models\Produk;

use Illuminate\Http\Request;

class HomeProduk extends Controller
{
    function index (){
    $data = [
        'produk' => Produk::get(),

        'content'=> 'home/produk/index'
    ];
        return view ('home.produk.index', $data );
    }




        public function produk ($id)
    {
    $data = [
        'produk' => Produk::find($id),
        'content'=> 'home/produk/info'
    ];
        return view ('home.produk.info', $data );
    }



  

}