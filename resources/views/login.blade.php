<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <style type="text/css">
			body {
					padding-top: 70px;
					padding-bottom: 70px;
			}
			.starter-template {
					padding: 40px 15px;
					text-align: center;
			}
			.form-horizontal{
					padding: 15px 10px;
			}
			footer{
					padding-top: 15px;
					text-align: right;
			}
	</style>

    <title>Klinik Kimia Farma</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset ('bootstrap/css/bootstrap.min.css')}}">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset ('bootstrap/css/modern-business.css')}} ">

    <!-- Custom Fonts -->
    <link href="bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-targer="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{url('/')}}">PESAN BARANG DI KIMIA FARMA </a>	
			</div>
		</div>
	</nav>
		<div class="clearfix"></div>
			<div class="col-md-4 col-md-offset-4">
			@if(count(Session::get('errors')) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach(Session::get('errors')->all() as $error)
						<li>{{ $error }}</li>
					@endforeach	
				</ul>
			</div>
			@endif
			<div class="panel panel-default">
				<div class="panel-heading">
				<p></p>
				<strong> Masuk Aplikasi </strong>
				</div>
			{!! Form::open(['url'=>'login','class'=>'form-horizontal']) !!}
			<div class="form-group">
				<label class="col-sm-4 control-label"> Username</label>
			<div class="col-sm-8">
			{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"]) !!}	
			</div>	
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label"> Password</label>
			<div class="col-sm-8">
			{!! Form::password('password',['class'=>'form-control','placeholder'=>"Password"]) !!}	
			</div>	
			</div>
			<div style="width: 100%;text-align: right;">
			<button class="btn btn-primary"><i class="fa fa-lock"></i> Masuk </button>
			<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i> Batal</button>	
			</div>
			{!! Form::close() !!}
			</div>	
			</div>

		<nav class="navbar navbar-inverse navbar navbar-fixed-bottom">
		<footer class="container">
			<!-- Please dont delete this-->
			created by <a href="https://twitter.com/Kelompok3"><span><i class="fa fa-twitter" style="color:#1da1f2"></i> @Kelompok3</span></a>
			<!-- Please dont delete this-->
		</footer>	
		</nav>	
			<script type="text/javascript" src="{{asset('component/jquery/dist/jquery.min.js') }}"></script>
			<script type="text/javascript" src="{{asset('component/bootstrap/dist/js/bootstrap.min.js') }}"></script>
			<script type="text/javascript">
				$(function () {
					$('[data-toggle="tooltip"]').tooltip()
				});
			</script>

</body>
</html>