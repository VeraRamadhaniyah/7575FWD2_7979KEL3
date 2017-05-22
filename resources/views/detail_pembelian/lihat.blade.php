@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('detail_pembelian') }}"><i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i></a> Detail Data detail_pembelian</strong>
			</div>
			<table class="table">
				<tr>
						<td>Username</td>
						<td>:</td>
						<td>{{ $detail_pembelian->username }}</td>
				</tr>
				<tr>
						<td>Password</td>
						<td>:</td>
						<td>{{ $detail_pembelian->password }}</td>
				</tr>
				<tr>
						<td>Nama</td>
						<td>:</td>
						<td>{{ $detail_pembelian->nama }}</td>
				</tr>
				<tr>
						<td>No Hp</td>
						<td>:</td>
						<td>{{ $detail_pembelian->no_hp }}</td>
				</tr>
				<tr>
						<td>Admin</td>
						<td>:</td>
						<td>{{ $detail_pembelian->id_admin }}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Dibuat tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$detail_pembelian->created_at}}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Diperbarui Tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$detail_pembelian->updated_at}}</td>
				</tr>
		</table>
</div>
@stop