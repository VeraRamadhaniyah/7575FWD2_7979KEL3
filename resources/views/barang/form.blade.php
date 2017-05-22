<div class="form-group">
	<label class="col-sm-2 control-label">Nama</label>
	<div class="col-sm-10">
		{!! Form::text('nama_barang',null,['class'=>'form-control','placeholder'=>"Nama"]) !!}
		</div>
	</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Kategori</label>
	<div class="col-sm-10">
		{!! Form::text('nama_kategori',null,['class'=>'form-control','placeholder'=>"Kategori"]) !!}
		</div>
	</div>

	<div class="form-group">
	<label class="col-sm-2 control-label">Stok</label>
	<div class="col-sm-10">
		{!! Form::text('stok',null,['class'=>'form-control','placeholder'=>"Stok"]) !!}
		</div>
	</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Harga Beli</label>
	<div class="col-sm-10">
		{!! Form::text('harga_beli',null,['class'=>'form-control','placeholder'=>"Harga Beli"]) !!}
		</div>
	</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Harga Jual</label>
	<div class="col-sm-10">
		{!! Form::text('harga_jual',null,['class'=>'form-control','placeholder'=>"Harga Jual"]) !!}
		</div>
	</div>

<div class="form-group" >
	<label class="col-sm-2 control-label" id="id_kategori">kategori</label>
		<div class="col-sm-10">
			{!! Form::select('id_kategori',$kategori->lists('nama_kategori','id'),null,['class'=>'form-control','id'=>'id_kategori','placeholder'=>"kategori"]) !!}
		</div>
	</div>
