<?php
	session_start();
	if (empty($_SESSION['username'])) {
	header("location:gagal.html");
	}
	?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="wrap">
		<div class="header">			
			<h1>Halaman Admin</h1>
		</div>
</head>
<body>
	<h2> <a href="../login/index.html">Logout</a><br/></h2>
	<h2>
<div id='tampilkan'></div>
	</h2>
<div>
	<div class="navbar-collapse collapse">							
					<div class="menu">
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation"><a href="../admin_komentar/index.php" class="active">Halaman Komentar</a></li>
							<li role="presentation"><a href="../admin_soal/soal1/index.php">Halaman Soal Variable dan Tipe Data</a></li>
							<li role="presentation"><a href="../admin_soal/soal2/index.php">Halaman Soal Pengulangan</a></li>	
							<li role="presentation"><a href="../admin_soal/soal3/index.php">Halaman Soal Operator Aritmatika</a></li>	
							<li role="presentation"><a href="../admin_soal/soal4/index.php">Halaman Soal IF Else IF</a></li>
							<li role="presentation"><a href="../admin_soal/soal5/index.php">Halaman Soal Switch</a></li>
							<li role="presentation"><a href="../admin_soal/soal6/index.php">Halaman Soal Array</a></li>	
							<li role="presentation"><a href="../admin_soal/soal7/index.php">Halaman Soal Perulangan While</a></li>	
							<li role="presentation"><a href="../admin_soal/soal8/index.php">Halaman Soal Perulangan For</a></li>
							<li role="presentation"><a href="../admin_soal/soal9/index.php">Halaman Soal Kontrol</a></li>
							<li role="presentation"><a href="../admin_soal/soal10/index.php">Halaman Soal Exception</a></li>	
							<li role="presentation"><a href="../admin_soal/soal11/index.php">Halaman Soal pewarisan</a></li>	
							<li role="presentation"><a href="../admin_soal/soal12/index.php">Halaman Soal Thereads</a></li>					
						</ul>
					</div>
				</div>		
            </div><!--/.container-->
        </nav><!--/nav-->		
    </header><!--/header-->	

    <h1> <pr> Selamat Datang </pr> </h1>