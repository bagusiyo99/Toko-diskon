<?php
namespace App\Http\Controllers\Admin;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class AdminProduk extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =[
            'title' => 'Manajemen Produk',
            'produk' => Produk::get(),
            'content' => 'operator/produk/index'
        ];
        return view ('operator.produk.index', $data );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data =[
            'title' => 'Tambah Produk',
            'content' => 'operator/produk/add'
        ];
        
        return view ('operator.produk.add', $data );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request -> validate ([
            'nama_produk' => 'required',
            'harga_produk' => 'required ',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:5048',
            'deskripsi' => 'required ',
            'kategori' => 'required',
        ]);

        // upload gambar
        if ($request -> hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $file_name = time ().'-'. $gambar -> getClientOriginalName ();

            $storage = 'uploads/produk/';
            $gambar->move ($storage, $file_name);
            $data ['gambar'] =$storage .$file_name;
        }else {
            $data ['gambar'] = null;
        }

                    Alert::success('sukses', 'data berhasil DITAMBAH');
                    Produk::create ($data);
                    return redirect ('/operator/produk');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =[
            'title' => 'Edit Produk',
            'produk' => Produk::find ($id),
            'content' => 'operator/produk/add'
        ];
        return view ('operator.produk.add', $data ); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $produk = Produk::find($id);
         $data = $request -> validate ([
            'nama_produk' => 'required',
            'harga_produk' => 'required ',
            'kategori' => 'required',
            'deskripsi' => 'required ',


        ]);

        // upload gambar
        if ($request -> hasFile('gambar')) {
            if($produk->gambar  != null){
                unlink($produk->gambar);
            }


            $gambar = $request->file('gambar');
            $file_name = time ().'-'. $gambar -> getClientOriginalName ();

            $storage = 'uploads/produk/';
            $gambar->move ($storage, $file_name);
            $data ['gambar'] =$storage .$file_name;
        }else {
            $data ['gambar'] = $produk ->gambar;
        }

                    Alert::success('sukses', 'data berhasil diupdate');
                    $produk->update($data);
                    return redirect ('/operator/produk');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::find ($id);

            if($produk->gambar != null){
            unlink($produk->gambar);
                }

        Alert::success('sukses', 'data berhasil dihapus');
        $produk->delete();
        return redirect ('/operator/produk');
        
    }
}