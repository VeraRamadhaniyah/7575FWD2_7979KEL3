<div class="form-group">
	<label class="col-sm-2 control-label">Username</label>
	<div class="col-sm-10">
		{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"]) !!}
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label"> Password</label>
		<div class="col-sm-10">
			{!! Form::password('password',['class'=>'form-control','placeholder'=>"Password"]) !!}
		
		</div>
	</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Nama</label>
	<div class="col-sm-10">
		{!! Form::text('nama',null,['class'=>'form-control','placeholder'=>"Nama"]) !!}
		</div>
	</div>
<div class="form-group">
	<label class="col-sm-2 control-label">No Hp</label>
	<div class="col-sm-10">
		{!! Form::text('no_hp',null,['class'=>'form-control','placeholder'=>"No Hp"]) !!}
		</div>
	</div>
<div class="form-group" >
	<label class="col-sm-2 control-label" id="id_admin">admin</label>
		<div class="col-sm-10">
			{!! Form::select('id_admin',$admin->ListAdmin(),null,['class'=>'form-control','id'=>'id_admin','placeholder'=>"admin"]) !!}
		</div>
	</div>