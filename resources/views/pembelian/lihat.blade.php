@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('pembelian') }}"><i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i></a> Detail Data pembelian</strong>
			</div>
			<table class="table">
				<tr>
						<td>Nama</td>
						<td>:</td>
						<td>{{ $pembelian->nama_supplier }}</td>
				</tr>
				<tr>
						<td>No Hp</td>
						<td>:</td>
						<td>{{ $pembelian->no_hp }}</td>
				</tr>
				<tr>
						<td>Tanggal</td>
						<td>:</td>
						<td>{{ $pembelian->tgl_beli }}</td>
				</tr>
				<tr>
						<td>Total Harga</td>
						<td>:</td>
						<td>{{ $pembelian->total_harga }}</td>
				</tr>
				<tr>
						<td>Id pembelian</td>
						<td>:</td>
						<td>{{ $pembelian->id_karyawan }}</td>
				</tr>
				<tr>
						<td>Id Supplier</td>
						<td>:</td>
						<td>{{ $pembelian->id_supplier }}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Dibuat tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$pembelian->created_at}}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Diperbarui Tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$pembelian->updated_at}}</td>
				</tr>
		</table>
</div>
@stop