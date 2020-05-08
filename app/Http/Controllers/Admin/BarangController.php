<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Barang;
use App\Kategori;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::paginate(10);
        return view('admin.barang.index')->with('barang', $barang);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('admin.barang.create')->with('kategori', $kategori);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'nullable',
            'image' => 'image|nullable'
        ]);

        // Handle file
        if ($request->hasFile('image')) {
            // Get filename
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
        }else {
            $fileNameToStore = 'noImage.png';
        }

        $barang = new Barang();
        $barang->nama = $request->input('nama');
        $barang->harga = $request->input('harga');
        $barang->stok = $request->input('stok');
        $barang->id_kategori = $request->input('kategori');
        $barang->deskripsi = $request->input('deskripsi');
        $barang->image = $fileNameToStore;
        $barang->save();

        return redirect('/admin/barang')->with('success', 'Barang baru ditambahkan');
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
        $kategori = Kategori::all();
        $barang = Barang::findOrFail($id);
        return view('admin.barang.edit', [
            'kategori' => $kategori,
            'barang' => $barang
        ]);
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
        $this->validate($request,[
            'nama' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'nullable',
            'image' => 'image|nullable'
        ]);

        // Handle file
        if ($request->hasFile('image')) {
            // Get filename
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
        }else {
            $fileNameToStore = 'noImage.png';
        }

        $barang = Barang::findOrFail($id);
        $barang->nama = $request->input('nama');
        $barang->harga = $request->input('harga');
        $barang->stok = $request->input('stok');
        $barang->id_kategori = $request->input('kategori');
        $barang->deskripsi = $request->input('deskripsi');
        $barang->image = $fileNameToStore;
        $barang->save();

        return redirect('/admin/barang')->with('success', 'Barang berhasil di perbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);

        if ($barang->image != 'noImage.png') {
            Storage::delete('public/images/'.$barang->image);
        }

        $barang->delete();
        return redirect('/admin/barang')->with('success', 'Barang berhasil dihapus');
    }
}
