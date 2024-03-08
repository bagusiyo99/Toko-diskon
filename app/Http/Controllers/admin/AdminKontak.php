<?php

namespace App\Http\Controllers\admin;

use App\Models\Kontak;
use Laracasts\Flash\Flash; // Correct namespace for Flash
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class AdminKontak extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Manajemen Kontak',
            'kontak' => Kontak::latest()->get(),
            'content' => 'operator/kontak/index'
        ];

        return view('operator.kontak.index', $data);
    }

    public function show($id)
    {
        $data = [
            'kontak' => Kontak::find($id),
            'content' => 'operator/kontak/show'
        ];

        return view('operator.kontak.show', $data);
    }

    public function destroy($id)
    {
        $kontak = Kontak::find($id);

        if (!$kontak) {
    Flash::success('Sukses', 'Data berhasil dihapus.');
            return redirect('/operator/kontak');
        }

        $kontak->delete();
    Flash::success('Sukses , Data berhasil dihapus.'); 

        return redirect('/operator/kontak');
    }
}
