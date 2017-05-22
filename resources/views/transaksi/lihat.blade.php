@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('transaksi') }}"><i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i></a> Detail Data transaksi</strong>
			</div>
			<table class="table">
				<tr>
						<td>Nama</td>
						<td>:</td>
						<td>{{ $transaksi->nama }}</td>
				</tr>
				<tr>
						<td>Tanggal</td>
						<td>:</td>
						<td>{{ $transaksi->tgl_transaksi }}</td>
				</tr>
				<tr>
						<td>Total Bayar</td>
						<td>:</td>
						<td>{{ $transaksi->total_bayar }}</td>
				</tr>
				<tr>
						<td>Konsumen</td>
						<td>:</td>
						<td>{{ $transaksi->id_konsumen }}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Dibuat tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$transaksi->created_at}}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Diperbarui Tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$transaksi->updated_at}}</td>
				</tr>
		</table>
</div>
@stop