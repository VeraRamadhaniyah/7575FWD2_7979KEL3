@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
			<strong>Seluruh Data pembelian</strong>
			<a href="{{ url('pembelian/tambah') }}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i>Pembelian</a>
				<div class="clearfix"></div>
			</div>
			<table class="table">
						<thead>
							<tr>
									<th>No.</th>
									<th>Nama</th>
									<th>No Hp</th>
									<th>Tanggal</th>
									<th>Total Harga</th>
									<th>Karyawan</th>
									<th>Supplier</th>
									<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
								<?php $x=1?>
								@foreach ($data as $pembelian)
									<tr>
									<td>{{ $x++ }}</td>
									<td>{{ $pembelian->nama_supplier or 'nama_supplier kosong'}}</td>
									<td>{{ $pembelian->no_hp or 'no hp kosong'}}</td>
									<td>{{ $pembelian->tgl_beli or 'tgl_beli kosong'}}</td>
									<td>{{ $pembelian->total_harga or 'total harga kosong'}}</td>
									<td>{{ $pembelian->id_karyawan or 'kosong'}}</td>
									<td>{{ $pembelian->id_supplier or 'kosong'}}</td>

									<td>
										<div class="btn-group" role-"group">
											<a href="{{url('pembelian/edit/'.$pembelian->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
											<i class="fa fa-pencil"></i></a>
											<a href="{{url('pembelian/'.$pembelian->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
											<a href="{{url('pembelian/hapus/'.$pembelian->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
					</div>
					@stop