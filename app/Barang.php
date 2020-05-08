<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public function kategori(){
        return $this->hasOne('App\Kategori', 'id', 'id_kategori');
    }

    public function pesanan(){
        return $this->belongsTo('App\Pesanan');
    }
}
