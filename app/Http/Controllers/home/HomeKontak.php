<?php

/// dua komponen jika di buat folder
namespace App\Http\Controllers\home;
use App\Http\Controllers\Controller;

use App\Models\Kontak;
use Flash;
use Illuminate\Http\Request;

class HomeKontak extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index ()
    {
    $data = [
        'content'=> 'home/kontak/index'
    ];
        return view ('home.kontak.index', $data );
    }

        function send(Request $request)
        {
            $data = $request->validate([
                'nama' => 'required',
                'email' => 'required|email|unique:kontaks', // Sesuaikan dengan nama tabel yang benar
                'alamat' => 'required',
                'pesan' => 'required',
            ]);

            Kontak::create($data);
            Flash::success('Sukses, Pesan berhasil dikirim');
            return redirect('/kontak');
        }


}
