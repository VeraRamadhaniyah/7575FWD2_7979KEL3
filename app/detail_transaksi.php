<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail_transaksi extends Model
{
    protected $table = 'detail_transaksi';

    protected $guarded = ['id'];

    public function transaksi()
    {
    	return $this->belongsToMany(transaksi::class,'id_transaksi');
    }
    public function barang()
    {
    	return $this->belongsToMany(barang::class,'id_barang');
    }
   
}
