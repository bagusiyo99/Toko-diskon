<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\Diskon;
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

        if ($diskon->isEmpty()) {
            // Jika tidak ada diskon dan tidak ada input kategori, kembalikan ke halaman lengkap dengan pesan notifikasi
            if (!$kategori) {
                return view('home.sale.lengkap')->with('error', 'Tidak ada kategori yang dipilih.');
            }

            return view('home.sale.index')->with('diskon', $diskon);
        }

        return view('home.sale.index', compact('diskon'));
    }

    public function diskon($id)
    {
        $diskon = Diskon::find($id);

        if (!$diskon) {
            return view('home.sale.info')->with('error', 'Diskon tidak ditemukan.');
        }

        $data = [
            'diskon' => $diskon,
            'content' => 'home.sale.info' // Sesuaikan dengan path view yang benar
        ];

        return view('home.sale.info', $data);
    }
}
