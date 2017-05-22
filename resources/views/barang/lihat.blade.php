@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('barang') }}"><i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i></a> Detail Data barang</strong>
			</div>
			<table class="table">
				<tr>
						<td>Nama</td>
						<td>:</td>
						<td>{{ $barang->nama_supplier }}</td>
				</tr>
				<tr>
						<td>Merek</td>
						<td>:</td>
						<td>{{ $barang->merek }}</td>
				</tr>
				<tr>
						<td>Stok</td>
						<td>:</td>
						<td>{{ $barang->stok }}</td>
				</tr>
				<tr>
						<td>Harga Beli</td>
						<td>:</td>
						<td>{{ $barang->harga_beli }}</td>
				</tr>
				<tr>
						<td>Harga Jual</td>
						<td>:</td>
						<td>{{ $barang->harga_jual }}</td>
				</tr>
				<tr>
						<td>Id Kategori</td>
						<td>:</td>
						<td>{{ $barang->id_kategori }}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Dibuat tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$barang->created_at}}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Diperbarui Tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$barang->updated_at}}</td>
				</tr>
		</table>
</div>
@stop