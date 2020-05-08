<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    public function barang(){
        return $this->hasOne('App\Barang');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
