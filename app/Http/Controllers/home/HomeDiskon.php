<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\Diskon;
use App\Models\Produk;
use Illuminate\Http\Request;

class HomeDiskon extends Controller
{
    public function index(Request $request)
    {
        $kategori = $request->input('kategori');

        $diskonQuery = Diskon::query();

        if ($kategori && $kategori !== 'all') {
            $diskonQuery->where('kategori', $kategori);
        }

        $diskon = $diskonQuery->get();

        $data = [
            'diskon' => $diskon,
            'content' => 'home.sale.index' // Sesuaikan dengan path view yang benar
        ];

        return view('home.sale.index', $data);
    }

    public function diskon($id)
    {
        $diskon = Diskon::find($id);

        $data = [
            'diskon' => $diskon,
            'content' => 'home.sale.info' // Sesuaikan dengan path view yang benar
        ];

        return view('home.sale.info', $data);
    }
}
