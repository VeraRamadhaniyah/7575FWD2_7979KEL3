<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\transaksi;

use App\konsumen;


class transaksiController extends Controller
{
     public function awal()
   {  
         $data = transaksi::all();
         return view('transaksi.awal',compact('data'));
         //return view('transaksi.awal',['data'=>transaksi::paginate(5)]);//batasan kalau mau semua gunakan all
   }
      public function tambah()
   {
         $konsumen = new konsumen;
         $transaksi = new transaksi;
         
         return view('transaksi.tambah',compact('transaksi','konsumen'));
   }
      public function simpan(Request $input)
   {
         $this->validate($input,[
               // 'nama_transaksi'=>'required|unique:transaksi|max:5',
               'nama_transaksi'=>'required|unique:transaksi|max:30',
               'tgl_transaksi'=>'required|max:30',
               'total_bayar'=>'required|max:30',
            ]);
         $transaksi = new transaksi;
         $transaksi->nama_transaksi = $input->nama_transaksi;
         $transaksi->tgl_transaksi = $input->tgl_transaksi;
         $transaksi->total_bayar = $input->total_bayar;
         $transaksi->id_konsumen = $input->id_konsumen;
         $informasi = $transaksi->save() ? 'berhasil simpan data':'gagal simpan data';
         return redirect('transaksi')->with(['informasi'=>$informasi]);
   }
      public function edit($id)
   {
         $konsumen = new konsumen;
         $transaksi = new transaksi;
         
         return view('transaksi.tambah',compact('transaksi','konsumen'));
   }
      public function lihat($id)
   {
         $transaksi=transaksi::find($id);
         return view('transaksi.lihat')->with(array('transaksi' =>$transaksi));
   }
      public function update($id, Request $input)
   {     $this->validate($input,[
               'nama_transaksi'=>'required|max:30',
               'tgl_transaksi'=>'required|max:30',
               'total_bayar'=>'required|max:30',
            ]);
         $transaksi = transaksi::find($id);
         $transaksi->nama_transaksi = $input->nama_transaksi;
         $transaksi->tgl_transaksi = $input->tgl_transaksi;
         $transaksi->total_bayar = $input->total_bayar;
         $transaksi->id_konsumen = $input->id_konsumen;
         $informasi = $transaksi->save() ? 'berhasil update data':'gagal update data';
         return redirect('transaksi')->with(['informasi'=>$informasi]);
   }
      public function hapus($id)
   {
         $transaksi= transaksi::find($id);
         $informasi = $transaksi->delete() ? 'berhasil hapus data':'gagal hapus data';
         return redirect('transaksi')->with(['informasi'=>$informasi]);
   }
}
