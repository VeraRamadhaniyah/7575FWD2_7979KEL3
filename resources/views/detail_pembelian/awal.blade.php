@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
			<strong>Seluruh Data Detail pembelian</strong>
			<a href="{{ url('detail_pembelian/tambah') }}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i>detail pembelian</a>
				<div class="clearfix"></div>
			</div>
			<table class="table">
						<thead>
							<tr>
									<th>No.</th>
									<th>Nama Supplier</th>
									<th>Nama Barang</th>
									<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
								<?php $x=1?>
								@foreach ($semuaDt as $detail)
									<tr>
									<td>{{ $x++ }}</td>
									<td>{{ $detail->barang->nama_barang or 'nip kosong'}}</td>
									<td>{{ $detail->pembelian->nama_supplier or 'nama kosong'}}</td>
									<td>
										<div class="btn-group" role="group">
											<a href="{{url('detail_pembelian/edit/'.$detail_pembelian->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
											<i class="fa fa-pencil"></i></a>
											<a href="{{url('detail_pembelian/'.$detail_pembelian->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
											<a href="{{url('detail_pembelian/hapus/'.$detail_pembelian->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
					</div>
					@stop