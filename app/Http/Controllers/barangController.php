<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\barang;

use App\kategori;
 
use App\detail_pembelian;

use App\detail_transaksi;

class barangController extends Controller
{
    public function awal()
   {
      $data = barang::all();
         return view('barang.awal',compact('data'));
         // return view('barang.awal',['data'=>barang::paginate(5)]);//batasan kalau mau semua gunakan all
   }
      public function tambah()
   {         
         $barang = new barang;
         $kategori = new kategori;
         $detail_pembelian = new detail_pembelian;
         $detail_transaksi = new detail_transaksi;
         
         return view('barang.tambah',compact('barang','kategori','detail_pembelian','detail_transaksi'));
   }
      public function simpan(Request $input)
   {
         $this->validate($input,[
               // 'nama_barang'=>'required|unique:barang|max:5',
               'nama_barang'=>'required|max:30',
               'nama_kategori'=>'required|max:6',
            ]);
         $barang = new barang;
         $barang->nama_barang = $input->nama_barang;
         $barang->nama_kategori = $input->nama_kategori;
         $barang->stok = $input->stok;
         $barang->harga_beli = $input->harga_beli;
         $barang->harga_jual = $input->harga_jual;
         $barang->id_kategori = $input->id_kategori;
         $informasi = $barang->save() ? 'berhasil simpan data':'gagal simpan data';
         return redirect('barang')->with(['informasi'=>$informasi]);
   }
      public function edit($id)
   {
         $barang= barang::find($id);
         
         $kategori = new kategori;
         $detail_pembelian = new detail_pembelian;
         $detail_transaksi = new detail_transaksi;
         
         return view('barang.tambah',compact('barang','kategori','detail_pembelian','detail_transaksi'));
   }
      public function lihat($id)
   {
         $barang=barang::find($id);
         return view('barang.lihat')->with(array('barang' =>$barang));
   }
      public function update($id, Request $input)
   {     $this->validate($input,[
               'nama_barang'=>'required|max:30',
               'nama_kategori'=>'required|max:6',
            ]);
         $barang = barang::find($id);
         $barang->nama_barang = $input->nama_barang;
         $barang->nama_kategori = $input->nama_kategori;
         $barang->stok = $input->stok;
         $barang->harga_beli = $input->harga_beli;
         $barang->harga_jual = $input->harga_jual;
         $barang->id_kategori = $input->id_kategori;
         $informasi = $barang->save() ? 'berhasil update data':'gagal update data';
         return redirect('barang')->with(['informasi'=>$informasi]);
   }
      public function hapus($id)
   {
         $barang= barang::find($id);
         $informasi = $barang->delete() ? 'berhasil hapus data':'gagal hapus data';
         return redirect('barang')->with(['informasi'=>$informasi]);
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
    // 	$barang = new Barang();
    // 	$barang->nama_barang = 'paramex';
    // 	$barang->nama_kategori = 'obat keras';
    // 	$barang->stok = '25';
    // 	$barang->harga_beli = '2500';
    // 	$barang->harga_jual = '3000';
    // 	$barang->id_kategori = '1';
    // 	$barang->save();
    // 	return "data atas nama {$barang->nama_barang} berhasil di tambah";
    // }
}
