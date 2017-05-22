<div class="form-group">
	<label class="col-sm-2 control-label" id="id_transaksi">Transaksi</label>
	<div class="col-sm-10">
		{!! Form::select('id_transaksi',$transaksi->lists('nama_transaksi','id'),null,['class'=>'form-control','id'=>'id_transaksi','placeholder'=>"Transaksi"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label" id="budidaya_id"> Barang</label>
		<div class="col-sm-10">
			{!! Form::select('id_barang',$barang->lists('nama_barang','id'),null,['class'=>'form-control','id'=>'id_barang','placeholder'=>"Barang"]) !!}
		</div>
	</div>
	