<div class="form-group">
	<label class="col-sm-2 control-label"> Nama</label>
	<div class="col-sm-10">
		{!! Form::text('nama_transaksi',null,['class'=>'form-control','placeholder'=>"Nama"]) !!}
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label"> Tanggal (YYYY-MM-DD)</label>
		<div class="col-sm-10">
			{!! Form::text('tgl_transaksi',null,['class'=>'form-control','placeholder'=>"YYYY-MM-DD"]) !!}
		
		</div>
	</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Total Bayar</label>
	<div class="col-sm-10">
		{!! Form::text('total_bayar',null,['class'=>'form-control','placeholder'=>"Total Bayar"]) !!}
		</div>
	</div>
<div class="form-group" >
	<label class="col-sm-2 control-label" id="id_konsumen">Konsumen</label>
		<div class="col-sm-10">
			{!! Form::select('id_konsumen',$konsumen->lists('nama_konsumen','id'),null,['class'=>'form-control','id'=>'id_konsumen','placeholder'=>"Konsumen"]) !!}
		</div>
	</div>