@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
			<strong>Seluruh Data barang</strong>
			<a href="{{ url('barang/tambah') }}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i>Barang</a>
				<div class="clearfix"></div>
			</div>
			<table class="table">
						<thead>
							<tr>
									<th>No.</th>
									<th>Nama</th>
									<th>Kategori</th>
									<th>Stok</th>
									<th>Harga Jual</th>
									<th>Harga Beli</th>
									<th>Kategori Kode</th>
									<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
								<?php $x=1?>
								@foreach ($data as $barang)
									<tr>
									<td>{{ $x++ }}</td>
									<td>{{ $barang->nama_barang or 'nama_barang kosong'}}</td>
									<td>{{ $barang->nama_kategori or 'nama_kategori kosong'}}</td>
									<td>{{ $barang->Stok or 'Stok kosong'}}</td>
									<td>{{ $barang->harga_beli or 'harga beli kosong'}}</td>
									<td>{{ $barang->harga_jual or 'harga jual kosong'}}</td>
									<td>{{ $barang->id_kategori or 'kosong'}}</td>
									
									<td>
										<div class="btn-group" role-"group">
											<a href="{{url('barang/edit/'.$barang->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
											<i class="fa fa-pencil"></i></a>
											<a href="{{url('barang/'.$barang->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
											<a href="{{url('barang/hapus/'.$barang->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
											</div>
										</td>
									</tr> 
									@endforeach
								</tbody>
							</table>
					</div>
					@stop