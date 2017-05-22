<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\pembelian;

use App\karyawan;

use App\supplier;

class pembelianController extends Controller
{
    public function awal()
   {
    $data = pembelian::all();
         return view('pembelian.awal',compact('data'));
         // return view('pembelian.awal',['data'=>pembelian::paginate(5)]);//batasan kalau mau semua gunakan all
   }
      public function tambah()
   {
         $supplier = new supplier;
         $karyawan = new karyawan;
         $pembelian = new pembelian;
         
         return view('pembelian.tambah',compact('pembelian','supplier','karyawan'));
   }
      public function simpan(Request $input)
   {
         $this->validate($input,[
               // 'nama_supplier'=>'required|unique:pembelian|max:5',
               'nama_supplier'=>'required|unique:pembelian|max:30',
               'tgl_beli'=>'required|max:30',
            ]);
         $pembelian = new pembelian();
         $pembelian->nama_supplier = $input->nama_supplier;
         $pembelian->no_hp = $input->no_hp;
         $pembelian->tgl_beli = $input->tgl_beli;
         $pembelian->total_harga = $input->total_harga;
         $pembelian->id_karyawan = $input->id_karyawan;
         $pembelian->id_supplier = $input->id_supplier;
         $informasi = $pembelian->save() ? 'berhasil simpan data':'gagal simpan data';
         return redirect('pembelian')->with(['informasi'=>$informasi]);
   }
      public function edit($id)
   {
         $pembelian= pembelian::find($id);
         $supplier = new supplier;
         $karyawan = new karyawan;
         return view('pembelian.edit',compact('pembelian','supplier','karyawan'));}
      public function lihat($id)
   {
         $pembelian=pembelian::find($id);
         return view('pembelian.lihat')->with(array('pembelian' =>$pembelian));
   }
      public function update($id, Request $input)
   {     $this->validate($input,[
               'nama_supplier'=>'required|max:30',
               'tgl_beli'=>'required|max:30',
            ]);
         $pembelian = pembelian::find($id);
         $pembelian->nama_supplier = $input->nama_supplier;
         $pembelian->no_hp = $input->no_hp;
         $pembelian->tgl_beli = $input->tgl_beli;
         $pembelian->total_harga = $input->total_harga;
         $pembelian->id_karyawan = $input->id_karyawan;
         $pembelian->id_supplier = $input->id_supplier;
         $informasi = $pembelian->save() ? 'berhasil update data':'gagal update data';
         return redirect('pembelian')->with(['informasi'=>$informasi]);
   }
      public function hapus($id)
   {
         $pembelian= pembelian::find($id);
         $informasi = $pembelian->delete() ? 'berhasil hapus data':'gagal hapus data';
         return redirect('pembelian')->with(['informasi'=>$informasi]);
   }
    // public function awal()
    // {
    // 	return "berhasil";
    // }
    // public function tambah()
    // {
    // 	return $this->simpan();
    // }
    // public function simpan()
    // {
    // 	$pembelian = new pembelian();
    // 	$pembelian->nama_supplier = 'udin';
    // 	$pembelian->no_hp = '082153288611';
    // 	$pembelian->tgl_beli = '15-agustus-2017';
    // 	$pembelian->total_harga = '200000';
    // 	$pembelian->id_karyawan = '1';
    // 	$pembelian->id_supplier = '1';
    // 	$pembelian->save();
    // 	return "data atas nama {$pembelian->nama_supplier} berhasil di tambah";
    // }
}
