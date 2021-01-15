<!DOCTYPE html>
<html lang="en">
  <head>
  	<?php include("config.php"); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>BelajarJava</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/style.css" rel="stylesheet" />	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>	
	<header id="header">
        <nav class="navbar navbar-default navbar-static-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   <div class="navbar-brand">
						<a href="index.php"><h1>Belajar Java</h1></a>
					</div>
                </div>				
                <div class="navbar-collapse collapse">							
					<div class="menu">
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation"><a href="index.php" class="active">Beranda</a></li>
							<li role="presentation"><a href="latihan.html">Latihan Java</a></li>
							<li role="presentation"><a href="tutor.html">Tutorial Java</a></li>
							<li role="presentation"><a href="tentang.html">Tentang</a></li>
							<li role="presentation"><a href="contact.php">Kontak</a></li>						
						</ul>
					</div>
				</div>		
            </div><!--/.container-->
        </nav><!--/nav-->		
    </header><!--/header-->	
	
	<div class="slider">		
		<div id="about-slider">
			<div id="carousel-slider" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators visible-xs">
					<li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-slider" data-slide-to="1"></li>
					<li data-target="#carousel-slider" data-slide-to="2"></li>
				</ol>

				<div class="carousel-inner">
					<div class="item active">						
						<img src="img/h2.jpg" class="img-responsive" alt="" width="2000"> 
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">								
								<h2><span>Selamat Datang</span></h2>
							</div>
							<div class="col-md-10 col-md-offset-1">
								<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">								
								</div>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">								
								<form class="form-inline">
									<div class="form-group">
										
									</div>
									<div class="form-group">
										
									</div>
								</form>
							</div>
						</div>
				    </div>
			
				    <div class="item">
						<img src="img/h3.jpg" class="img-responsive" alt="" width="2000"> 
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">								
								
							</div>
							<div class="col-md-10 col-md-offset-1">
								<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">								
								</div>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">								
								<form class="form-inline">
									<div class="form-group">
										
									</div>
									<div class="form-group">
										
									</div>
								</form>
							</div>
						</div>
				    </div> 
				    <div class="item">
						<img src="img/2.jpg" class="img-responsive" alt="" width="2000"> 
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">								
								
							</div>
							<div class="col-md-10 col-md-offset-1">
								<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
								</div>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">								
								<form class="form-inline">
									<div class="form-group">
										
									</div>
									<div class="form-group">
										
									</div>
								</form>
							</div>
						</div>
				    </div> 
				</div>
				
				<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
					<i class="fa fa-angle-left"></i> 
				</a>
				
				<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
					<i class="fa fa-angle-right"></i> 
				</a>
			</div> <!--/#carousel-slider-->
		</div><!--/#about-slider-->
	</div><!--/#slider-->
	
	<div class="about">
		<div class="container">
			<div class="text-center">
				<h2> Premium Member </h2>
				<div class="col-md-10 col-md-offset-1">
					<p>Premium Member merupakan sistem keanggotaan eksklusif bagi pembaca CodePolitan yang ingin secara serius belajar pemrograman. Berbagai konten premium dengan kualitas tinggi telah kami susun untuk mendukung proses belajar para Premium Member. Kami juga memberikan berbagai fasilitas khusus yang hanya bisa diakses oleh Premium Member untuk mendukung proses belajarnya. Fasilitas tersebut antara lain berupa privat chat group, forum diskusi dan tanya Jawab, newsletter rutin, webinar eksklusif dengan nara sumber praktisi dan tokoh dalam bidang IT.</p>
				</div>
		
				<div class="col-md-6 col-sm-6 col-xs-6">
					<div class="btn-gamp"><a href="regis/regis.html">Daftar</a></div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6">
					<div class="gamp-btn"><a href="latihan.html">Pelajari</a></div>
				</div>
				
			</div>	
		</div>			
	</div>
	<hr>
	
	<div class="services">
		<div class="container">
			<div class="text-center">
				<h2></h2>
			</div>
			<div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
				<img src="img/C.png" alt="" width="200" height="200">
				<h3>C ++ </h3>
				<p>C++ adalah bahasa pemrograman komputer yang di buat oleh (Bjarne Stroustrup) merupakan perkembangan dari bahasa C dikembangkan di Bell Labs (Dennis Ritchie) pada awal tahun 1970-an. Bahasa C++ merupakan turunan dari bahasa sebelumnya yaitu BCL.</p>
			</div>
			<div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
				<img src="img/python.png" alt="" width="200" height="200">
				<h3>Python</h3>
				<p>Python adalah bahasa pemrograman interpretatif multiguna dengan filosofi perancangan yang berfokus pada tingkat keterbacaan kode.Python diklaim sebagai bahasa yang menggabungkan kapabilitas, kemampuan, dengan sintaksis kode yang sangat jelas.</p>
			</div>
			<div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
				<img src="img/html.jpg" alt="" width="200" height="200">
				<h3>HTML</h3>
				<p>HTML (Hyper Text MarkUp Language) adalah Bahasa markup standar untuk pembuatan halaman website. Dengan HTML kita dapat membuat halaman website sesuai standar dengan pengkodean tag-tag HTML.</p>
			</div>
			<div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
				<img src="img/java.jpg" alt="" width="200" height="200">
				<h3>Java</h3>
				<p>Java adalah bahasa pemrograman yang dapat dijalankan di berbagai komputer termasuk telepon genggam. Bahasa ini awalnya dibuat oleh James Gosling saat masih bergabung di Sun Microsystems saat ini merupakan bagian dari Oracle dan dirilis tahun 1995.</p>
			</div>
		</div>			
	</div>
	<div class="gallery">
		<div class="text-center">
			<h2>Artikel Terbaru</h2>
		</div>
		<div class="container">		
			<div class="col-md-4">
				<figure class="effect-marley">
					<img src="img/steganografi.jpg" alt="" class="img-responsive" width="500" />
					<figcaption>
						<a href="https://www.codepolitan.com/mengenal-teknik-pengamanan-data-steganografi-5b3b1b32ee8c5"><p>Mengenal Teknik Pengamanan Data Steganografi.</p>				
					</figcaption>			
				</figure>
			</div>
			<div class="col-md-4">
				<figure class="effect-marley">
					<img src="img/teknologi.jpg" alt="" class="img-responsive" width="500" />
					<figcaption>
						<h4></h4>
						<a href="https://www.codepolitan.com/teknologi-pemrograman-yang-perlu-dipelajari-di-tahun-2018-5b39d78db108d"><p>Teknologi Pemrogaman Yang Perlu Dipelajari di Tahun 2018.</p>				
					</figcaption>			
				</figure>
			</div>
			<div class="col-md-4">
				<figure class="effect-marley">
					<img src="img/js1.png" alt="" class="img-responsive" width="500"/>
					<figcaption>
						<h4></h4>
						<a href="https://www.codepolitan.com/membangun-desktop-app-dengan-5-framework-javascript-5b39e0ec3c053"><p>Membangun Desktop App dengan 5 Framework Javascript.</p>				
					</figcaption>			
				</figure>
			</div>
		</div>
		
		
			
			
				</figure>
			</div>
		</div>
	</div>
		<br>
	<footer>
		<div class="container">
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
				<h4>Alamat</h4>					
				<div class="contact-info">
					<ul>
						<li><i class="fa fa-home fa"></i>Politeknik Caltex Riau, Pekanbaru </li>
						<li><i class="fa fa-phone fa"></i> +28281</li>
						<li><i class="fa fa-envelope fa"></i> Pcr@mahasiswa.pcr.ac.id</li>
					</ul>
				</div>
			</div>
			
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">				
				<div class="text-center">
					<h4>Support by</h4>
					<ul class="sidebar-gallery">
						<li><a href="#"><img src="img/C.png" alt="" width="70" /></a></li>
						<li><a href="#"><img src="img/js.png" alt="" width="70" /></a></li>
						<li><a href="#"><img src="img/h4.jpg" alt="" width="100" /></a></li>
						<li><a href="#"><img src="img/java.jpg" alt="" width="70" /></a></li>
						<li><a href="#"><img src="img/android.jpg" alt="" width="100" /></a></li>					
					</ul>
				</div>
			</div>
			
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">				
				<div class="">
					<h4>Daftar Premium</h4>
					<p>Daftar Email Segera !</p>
					<div class="btn-gamp">		
						<input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter Email">
					</div>
					<div class="btn-gamp">
						<a type="submit" class="btn btn-default">Kirim</a>
					</div>
				
			</div>
			
		</div>	
	</footer>
	
	<div class="sub-footer">
		<div class="container">
			<div class="social-icon">
				<div class="col-md-4">
					<ul class="social-network">
						<li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
					</ul>	
				</div>
			</div>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>		
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>	
	<script src="js/wow.min.js"></script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>	
  </body>
</html>