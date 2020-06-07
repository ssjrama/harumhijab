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
}
