<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<title>@yield('page_title','Halaman Awal') | Apotek Kimia Farma</title>

	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css'" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Pemesanan Obat Apotek Kimia Farma</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="services.html">Services</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="portfolio-1-col.html">1 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-2-col.html">2 Column Portfolio</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="blog-home-1.html">Blog Home 1</a>
                            </li>
                            <li>
                                <a href="blog-home-2.html">Blog Home 2</a>
                            </li>
                            <li>
                                <a href="blog-post.html">Blog Post</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="full-width.html">Full Width Page</a>
                            </li>
                            <li>
                                <a href="sidebar.html">Sidebar Page</a>
                            </li>
                            <li>
                                <a href="faq.html">FAQ</a>
                            </li>
                            <li>
                                <a href="404.html">404</a>
                            </li>
                            <li>
                                <a href="pricing.html">Pricing Table</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div align="center" src="img/branda.jpg" ><img align="center" src="img/branda.jpg"></div>
            </div>
            <div class="item">
                <div align="center" src="img/coba.jpg"><img align="center" src="img/coba.jpg"></div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Apotek Kimia Farma
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Tentang Kami</h4>
                    </div>
                    <div class="panel-body">
                        <p>Menurut Peraturan Menteri Kesehatan RI Nomor 922/Menkes/Per/X/1993 tentang Ketentuan dan Tata Cara Pemberian Izin Apotik, memberikan batasan tentang apotik yaitu suatu tempat tertentu tempat dilakukan pekerjaan kefarmasian dan penyaluran perbekalan farmasi kepada masyarakat.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Misi</h4>
                    </div>
                    <div class="panel-body">
                        <p> -Memberikan jasa pelayanan prima atas ritel farmasi dan jasa terkait serta memberikan jasa layanan kefarmasian bagi pelanggan.
                        
                        -Meningkatkan nilai perusahaan untuk pemegang saham dan pihak-pihak yang berkepentingan dengan berdasarkan prinsip Good Corporate Governance (GCG).

                        -Mengembangkan kompetensi dan komitmen sumber daya manusia yang lebih professional untuk meningkatkan nilai perusahaan dan kesejahteraan sumber daya manusia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Visi</h4>
                    </div>
                    <div class="panel-body">
                        <p>Menjadi perusahaan jaringan layanan farmasi yang terkemuka di Indonesia.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <hr>
        <div class="clearfix"></div>
							<div class="container">
									@if (Session::has('informasi'))
											<div class="alert alert-info">
													<strong>Informasi :</strong>
				{{Session::get('informasi')}}
									</div>
							@endif
							@if (count($errors) > 0)
							<div class="alert alert-danger">
								<ul>
									@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
							@endif
							@yield('container')
					</div>
		<hr>
        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Barang Yang Di Jual</h2>
            </div>
            <div class="col-sm-6">
                    <img class="img-responsive img-portfolio img-hover" width="75%" align="center" src="img/21.jpg" alt="">
                <div class="carousel-caption">
                    <h2>Tablet</h2>
                </div>
                </a>
            </div>

            <div class="col-sm-6">
                    <img class="img-responsive img-portfolio img-hover" width="75%" align="center" src="img/31.jpg" alt="">
                <div class="carousel-caption">
                    <h2>Salep</h2>
                </div>
                </a>
            </div>
            <div class="col-sm-6">
                    <img class="img-responsive img-portfolio img-hover" width="75%" align="center" src="img/41.jpg" alt="">
                <div class="carousel-caption">
                    <h2>Kapsul</h2>
                </div>
                </a>
            </div>
            <div class="col-sm-6">
                    <img class="img-responsive img-portfolio img-hover" width="75%" align="center" src="img/11.jpg" alt="">
                <div class="carousel-caption">
                    <h2>Sirup</h2>
                </div>
                </a>
            </div>
        </div>
        <!-- /.row -->
        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Sejarah</h2>
            </div>
            <div class="col-md-6">
                <p>Sejarah PT Kimia Farma Apotek dimulai hampir dua abad yang lalu yaitu tahun 1817 yang kala itu merupakan perusahaan farmasi pertama didirikan Hindia Belanda di Indonesia bernama NV Chemicalien Handle Rathkamp & Co. Kemudian pada awal kemerdekaan dinasionalisasi oleh pemerintah Republik Indonesia dan seterusnya pada tanggal 16 Agustus 1971 menjadi PT (Persero) Kimia Farma, sebuah perusahaan farmasi negara yang bergerak dalam bidang industri farmasi, distribusi, dan apotek. Sampai dengan tahun 2002, apotek merupakan salah satu kegiatan usaha PT Kimia Farma (Persero) Tbk, yang selanjutnya pada awal tahun 2003 di-spin-off menjadi PT Kimia Farma Apotek.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="img/home.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Kelompok 3</p>
                </div>
            </div>
        </footer>

    </div>
		<!-- <nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="{{url('/')}}" class="navbar-brand">Apotek</a>
					</div>
					<div id="navbar" class="collapse navbar-collapse">
						<ul class="nav navbar-nav">
							
							<li class="dropdown active">
								<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Supplier <span class="caret"></span> </a>
								<ul class="dropdown-menu" aria-labelledby="dlabel">
									<li><a href="{{url('supplier')}}">Supplier</a></ul></li>
							<li class="dropdown active">
								<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Pembelian <span class="caret"></span> </a>
								<ul class="dropdown-menu" aria-labelledby="dlabel">
									<li><a href="{{url('pembelian')}}">Pembelian</a></ul></li>

							<li class="dropdown active">
								<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Barang <span class="caret"></span> </a>
								<ul class="dropdown-menu" aria-labelledby="dlabel">
									<li><a href="{{url('barang')}}">Barang</a></ul></li>

							<li class="dropdown active">
								<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Kategori <span class="caret"></span> </a>
								<ul class="dropdown-menu" aria-labelledby="dlabel">
									<li><a href="{{url('kategori')}}">Kategori</a></ul></li>

							<li class="dropdown active">
								<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Konsumen <span class="caret"></span> </a>
								<ul class="dropdown-menu" aria-labelledby="dlabel">
									<li><a href="{{url('konsumen')}}">Konsumen</a></ul></li>

							<li class="dropdown active">
								<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Transaksi <span class="caret"></span> </a>
								<ul class="dropdown-menu" aria-labelledby="dlabel">
								<li><a href="{{url('transaksi')}}">Transaksi</a></li>
								<li class="divider"></li>
								<li><a href="{{url('detail_pembelian')}}">Detail Pembelian</a></li>
								<li class="divider"></li>
								<li><a href="{{url('detail_transaksi')}}">Detail Transaksi</a></li>	
								</ul>
							<li class="dropdown active">
							 	<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Pengaturan <span class="caret"></span> </a>
								<ul class="dropdown-menu" aria-labelledby="dlabel">
								<li><a href="{{url('admin')}}">Bos</a></li>
								<li class="divider"></li>
								<li><a href="{{url('karyawan')}}">Karyawan</a></li>
								</ul>
							</li>
							</ul>
									</div><!--/.nav-collapse-->
								</div>
							</nav> -->
							
					<nav class="navbar navbar-default navbar-fixed-bottom">
					<footer class="container">
                                    </nav>
                                    <script type="text/javascript" src="{{asset('component/jquery/dist/jquery.min.js') }}"></script>
                                    <script type="text/javascript" src="{{asset('component/bootstrap/dist/js/bootstrap.min.js') }}"></script>
                                    <script type="text/javascript">
                                    $(function () {
                                    $('[data-toggle="tooltip"]').tooltip()
                                         });
                                        </script>
                                    </body>