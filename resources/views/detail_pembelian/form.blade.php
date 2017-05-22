<div class="form-group">
	<label class="col-sm-2 control-label" id="id_pelanggan">Pelanggan</label>
	<div class="col-sm-10">
		{!! Form::select('id_pelanggan',$pelanggan->lists('nama_supplier','id'),null,['class'=>'form-control','id'=>'id_pelanggan','placeholder'=>"Pelanggan"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label" id="budidaya_id"> Barang</label>
		<div class="col-sm-10">
			{!! Form::select('id_barang',$barang->lists('nama_barang','id'),null,['class'=>'form-control','id'=>'id_barang','placeholder'=>"Barang"]) !!}
		</div>
	</div>
	