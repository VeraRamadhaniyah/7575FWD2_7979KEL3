<div class="form-group">
	<label class="col-sm-2 control-label">Nama</label>
	<div class="col-sm-10">
		{!! Form::text('nama_supplier',null,['class'=>'form-control','placeholder'=>"Nama"]) !!}
		</div>
	</div>

<div class="form-group">
	<label class="col-sm-2 control-label">No Hp</label>
	<div class="col-sm-10">
		{!! Form::text('no_hp',null,['class'=>'form-control','placeholder'=>"No Hp"]) !!}
		</div>
	</div>

	<div class="form-group">
	<label class="col-sm-2 control-label">Tanggal (YYYY-MM-DD)</label>
	<div class="col-sm-10">
		{!! Form::text('tgl_beli',null,['class'=>'form-control','placeholder'=>"YYYY-MM-DD"]) !!}
		</div>
	</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Total Harga</label>
	<div class="col-sm-10">
		{!! Form::text('total_harga',null,['class'=>'form-control','placeholder'=>"Total Harga"]) !!}
		</div>
	</div>

<div class="form-group" >
	<label class="col-sm-2 control-label" id="id_karyawan">Karyawan</label>
		<div class="col-sm-10">
			{!! Form::select('id_karyawan',$karyawan->lists('nama','id'),null,['class'=>'form-control','id'=>'id_karyawan','placeholder'=>"Karyawan"]) !!}
		</div>
	</div>

<div class="form-group" >
	<label class="col-sm-2 control-label" id="id_supplier">supplier</label>
		<div class="col-sm-10">
			{!! Form::select('id_supplier',$supplier->lists('nama_supplier','id'),null,['class'=>'form-control','id'=>'id_supplier','placeholder'=>"supplier"]) !!}
		</div>
	</div>