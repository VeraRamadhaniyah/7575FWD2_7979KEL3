<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\detail_pembelian;

use App\barang;

use App\pembelian;

class detail_pembelianController extends Controller
{
    public function awal()
   {

         // return view('barang.awal', ['data'=>barang::all()]);
    $semuaDt = detail_pembelian::all();
    return view('detail_pemfbelian.awal', compact('semuaDt'));
   }
      public function tambah()
   {
        $barang = new barang;
        $pembelian = new pembelian;
        return view('detail_pembelian.tambah',compact('barang','pembelian'));
      // return $this->simpan();
    }
      public function simpan(Request $input)
      {   $this->validate($input,[
                'nama_transaksi'=>'required|unique:detail_pembelian|max:30',
            ]);
        // dd($input->id_pembelian);
        $detail_pembelian = new detail_pembelian($input->only('id_pembelian','id_barang'));
            if($detail_pembelian->save()) $this->informasi = "Jadwal barang berhasil disimpan";
            return redirect('detail_pembelian')->with(['informasi'=>$this->informasi]);
      }

      public function lihat($id)
   {
         $detail_pembelian=detail_pembelian::find($id);
         return view('detail_pembelian.lihat')->with(array('detail_pembelian' =>$detail_pembelian));
   }
      public function edit($id)
   {
        $detail_pembelian = detail_pembelian::find($id);
        $barang = new barang;
        $pembelian = new pembelian;
        return view('detail_pembelian.edit',compact('barang','pembelian','detail_pembelian'));
   }
      public function update($id, Request $input)
   {
         $detail_pembelian = detail_pembelian::find($id);
        $detail_pembelian->fill($input->only('id_barang','id_pembelian'));
        if($detail_pembelian->save()) $this->informasi = "Jadwal barang berhasil diperbarui";
        return redirect('detail_pembelian')->with(['informasi'=>$this->informasi]);
    }
      public function hapus($id)
   {
         $detail_pembelian = detail_pembelian::find($id);
        if($detail_pembelian->delete()) $this->informasi = "Jadwal barang berhasil dihapus";
        // $informasi = $barang->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('detail_pembelian')-> with(['informasi'=>$this->informasi]);
    }
}
