<?php
namespace App\Http\Controllers\Admin;

use App\Models\Barang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class AdminBarang extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Manajemen Barang',
            'barang' => Barang::get(),
            'content' => 'operator.barang.index',
        ];

        return view('operator.barang.index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Barang',
            'content' => 'operator.barang.add',
        ];

        return view('operator.barang.add', $data);
    }


        public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_barang' => 'required',
            'diskon' => 'required|numeric|min:0|max:100', // Validasi diskon
            'harga_barang' => 'required|numeric|min:0',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:15048',
        ], [
            'nama_barang.required' => 'Nama barang wajib diisi.',
            'diskon.required' => 'Diskon wajib diisi.',
            'diskon.numeric' => 'Diskon harus berupa angka.',
            'diskon.min' => 'Diskon minimal :min.',
            'diskon.max' => 'Diskon maksimal :max.',
            'harga_barang.required' => 'Harga barang wajib diisi.',
            'harga_barang.numeric' => 'Harga barang harus berupa angka.',
            'harga_barang.min' => 'Harga barang minimal :min.',
            'gambar.required' => 'Gambar wajib diunggah.',
            'gambar.image' => 'File harus berupa gambar.',
            'gambar.mimes' => 'File harus memiliki format jpeg, png, jpg, atau gif.',
            'gambar.max' => 'Ukuran gambar maksimal :max kilobytes.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Data wajib diisi');
        }



        $data = $request->all();

        $harga_barang = $data['harga_barang'];
        $diskon = $data['diskon'];

        $harga_setelah_diskon = $harga_barang - ($harga_barang * $diskon) / 100;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $file_name = time() . '-' . $gambar->getClientOriginalName();

            $storage = 'uploads/barang/';
            $gambar->move($storage, $file_name);
            $data['gambar'] = $storage . $file_name;
        }

        Barang::create([
            'nama_barang' => $data['nama_barang'],
            'diskon' => $diskon,
            'harga_barang' => $harga_barang,
            'gambar' => $data['gambar'],
        ]);

        Alert::success('Sukses', 'Data berhasil ditambahkan');

        return redirect('/operator/barang');
    }


    public function edit($id)
    {
        $data = [
            'title' => 'Edit Barang',
            'barang' => Barang::find($id),
            'content' => 'operator.barang.add',
        ];

        return view('operator.barang.add', $data);
    }

    public function update(Request $request, $id)
{
    $validator = Validator::make($request->all(), [
        'nama_barang' => 'required',
        'diskon' => 'required|numeric|min:0|max:100', // Validasi diskon
        'harga_barang' => 'required|numeric|min:0',
        'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:15048',
    ], [
        'nama_barang.required' => 'Nama barang wajib diisi.',
        'diskon.required' => 'Diskon wajib diisi.',
        'diskon.numeric' => 'Diskon harus berupa angka.',
        'diskon.min' => 'Diskon minimal :min.',
        'diskon.max' => 'Diskon maksimal :max.',
        'harga_barang.required' => 'Harga barang wajib diisi.',
        'harga_barang.numeric' => 'Harga barang harus berupa angka.',
        'harga_barang.min' => 'Harga barang minimal :min.',
        'gambar.image' => 'File harus berupa gambar.',
        'gambar.mimes' => 'File harus memiliki format jpeg, png, jpg, atau gif.',
        'gambar.max' => 'Ukuran gambar maksimal :max kilobytes.',
    ]);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput()
            ->with('error', 'Data wajib diisi');
    }


  
    $barang = Barang::find($id);
    $data = $request->all();

    $diskon = $data['diskon'];
    $harga_barang = $data['harga_barang'];

    $harga_setelah_diskon = $harga_barang - ($harga_barang * $diskon) / 100;

    if ($request->hasFile('gambar')) {
        if ($barang->gambar != null) {
            unlink($barang->gambar);
        }

        $gambar = $request->file('gambar');
        $file_name = time() . '-' . $gambar->getClientOriginalName();

        $storage = 'uploads/barang/';
        $gambar->move($storage, $file_name);
        $data['gambar'] = $storage . $file_name;
    } else {
        $data['gambar'] = $barang->gambar;
    }

    $barang->update([
        'nama_barang' => $data['nama_barang'],
        'diskon' => $diskon,
        'harga_barang' => $harga_barang,
        'gambar' => $data['gambar'],
    ]);

    Alert::success('Sukses', 'Data berhasil diupdate');

    return redirect('/operator/barang');
}

    public function destroy($id)
    {
        $barang = Barang::find($id);

        if ($barang->gambar != null) {
            unlink($barang->gambar);
        }

        Alert::success('Sukses', 'Data berhasil dihapus');
        $barang->delete();

        return redirect('/operator/barang');
    }
}
