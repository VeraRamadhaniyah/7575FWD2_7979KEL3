<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
	protected $table = 'karyawan';
	protected $guraded = ['id'];
	protected $fillable = ['id_admin'];
	

    public function admin()
   {
    return $this->belongsTo(admin::class);
   }
  	
}
