<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    public function barang(){
        return $this->hasOne('App\Barang', 'id', 'id_barang');
    }

    public function user(){
        return $this->belongsTo('App\User', 'id_user', 'id');
    }

    protected $attributes = [
        'bukti_bayar' => '',
        'status' => ''
    ];
}
