<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Barang;
use App\Pesanan;
use App\User;

class PesananController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $barang = Barang::findOrFail($id);
        return view('pages.pesanan')->with('barang', $barang);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $barang = Barang::findOrFail($id);

        $this->validate($request,[
            'jumlah' => 'required',
            'deskripsi' => 'nullable',
            'alamat' => 'required'
        ]);

        $pesanan = new Pesanan();
        $pesanan->id_barang = $barang->id;
        $pesanan->id_user = Auth::user()->id;
        $pesanan->jumlah = $request->input('jumlah');
        $pesanan->deskripsi = $request->input('deskripsi');
        $pesanan->alamat = $request->input('alamat');
        $pesanan->save();

        return redirect('/')->with('success', 'Pesanan berhasil dibuat');
    }

    public function history(){
        $user_id = auth()->user()->id;
        $user = User::findOrFail($user_id);
        $pesanan = $user->pesanan;
        return view('pages.riwayat')->with('pesanan', $pesanan);
    }

    public function create_bayar($id){
        $pesanan = Pesanan::findOrFail($id);
        return view('pages.bayar')->with('pesanan', $pesanan);
    }

    public function bayar(Request $request, $id){
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->bukti_bayar = $request->input('bukti_bayar');
        $pesanan->save();
        return redirect('/')->with('success', 'Pesanan berhasil dibuat');
    }

    public function delete($id){
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->delete();
        return redirect('/riwayat')->with('success', 'Pesanan berhasil dihapus');
    }
}
