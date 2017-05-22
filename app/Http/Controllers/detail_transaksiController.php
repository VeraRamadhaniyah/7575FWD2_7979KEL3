<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\detail_transaksi;

use App\barang;

use App\transaksi;

class detail_transaksiController extends Controller
{
    public function awal()
   {

         // return view('barang.awal', ['data'=>barang::all()]);
    $semuaDt = detail_transaksi::all();
    return view('detail_transaksi.awal', compact('semuaDt'));
   }
      public function tambah()
   {
        $barang = new barang;
        $transaksi = new transaksi;
        return view('detail_transaksi.tambah',compact('barang','transaksi'));
      // return $this->simpan();
    }
      public function simpan(Request $input)
      {   $this->validate($input,[
                'nama_transaksi'=>'required|max:30',
            ]);
        // dd($input->id_transaksi);
        $detail_transaksi = new detail_transaksi($input->only('id_transaksi','id_barang'));
            if($detail_transaksi->save()) $this->informasi = "Jadwal barang berhasil disimpan";
            return redirect('detail_transaksi')->with(['informasi'=>$this->informasi]);
      }

      public function lihat($id)
   {
         $detail_transaksi=detail_transaksi::find($id);
         return view('detail_transaksi.lihat')->with(array('detail_transaksi' =>$detail_transaksi));
   }
      public function edit($id)
   {
        $detail_transaksi = detail_transaksi::find($id);
        $barang = new barang;
        $transaksi = new transaksi;
        return view('detail_transaksi.edit',compact('barang','transaksi','detail_transaksi'));
   }
      public function update($id, Request $input)
   {
         $detail_transaksi = detail_transaksi::find($id);
        $detail_transaksi->fill($input->only('id_barang','id_transaksi'));
        if($detail_transaksi->save()) $this->informasi = "Jadwal barang berhasil diperbarui";
        return redirect('detail_transaksi')->with(['informasi'=>$this->informasi]);
    }
      public function hapus($id)
   {
         $detail_transaksi = detail_transaksi::find($id);
        if($detail_transaksi->delete()) $this->informasi = "Jadwal barang berhasil dihapus";
        // $informasi = $barang->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('detail_transaksi')-> with(['informasi'=>$this->informasi]);
    }
}
