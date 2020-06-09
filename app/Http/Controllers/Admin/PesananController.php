<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\pesanan;

class PesananController extends Controller
{
    public function index(){
        $pesanan = Pesanan::paginate(10);
        return view('admin.pesanan.index')->with('pesanan', $pesanan);
    }

    public function show($id){
        $pesanan = Pesanan::findOrFail($id);
        return view('admin.pesanan.show')->with('pesanan', $pesanan);
    }

    public function update_status(Request $request, $id){
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->status = $request->input('status');
        $pesanan->save();
        return redirect()->back()->with('success', 'Pesanan berhasil diubah');

    }
}
