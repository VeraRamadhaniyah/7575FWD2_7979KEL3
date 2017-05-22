<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
	protected $table = 'admin';
	
    public function karyawan()
   {
    return $this->hasOne(karyawan::class);
   }

   public function ListAdmin()
   {
   		$out=[];
   		foreach ($this->all() as $admin) {
         $out[$admin->id] = "{$admin->nama_admin}";
   		}
   		return $out;
   }
}
