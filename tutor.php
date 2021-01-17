<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Belajar Java</title>

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
							<li role="presentation"><a href="index.php"> Beranda</a></li>
							<li role="presentation"><a href="latihan.html">Latihan Java</a></li>
							<li role="presentation"><a href="tutor.html" class="active">Tutorial Java</a></li>
							<li role="presentation"><a href="tentang.html">Tentang</a></li>
							<li role="presentation"><a href="contact.php">Kontak</a></li>						
						</ul>
					</div>
				</div>		
            </div><!--/.container-->
        </nav><!--/nav-->		
    </header><!--/header-->	
	

    <!-- Latihan Soal-->
					
					<?php  

// $s1 = soal 1
// $j1 = jawaban 1
// $k1 = kunci 1

error_reporting(E_ALL ^ E_NOTICE);

if(isset($_POST['submit'])) {
    // nilai awal
    $poin = 0;
    $nilai = 20; //nilai +/- setiap jawaban benar/salah

    // buat variabel u. nampung kunci jawaban 
    $k1 = "k1"; // Soal 1
    $k2 = "k2"; // Soal 2
    $k3 = "k3"; // Soal 3
    $k4 = "k4"; // Soal 4
    $k5 = "k5"; // Soal 5
  
    /************** SOAL 1 ***************/

    // cek apakah user memilih jawaban 
    if(isset($_POST['s1'])) {

        //mengubah array menjadi string
        $j1 = implode($_POST['s1'] ,"");
        if($j1 == $k1) {
            $poin += $nilai;
        }else{
            $poin -= $nilai;
        }
    }else{
	
      
    }

    /************** SOAL 2 ***************/

    if(isset($_POST['s2'])) {
        $j2 = implode($_POST['s2'] ,"");
        if($j2 == $k2) {
            $poin += $nilai;
        }else{
            $poin -= $nilai;
        }
    }else{
		
    }
	
	    /************** SOAL 3 ***************/

    if(isset($_POST['s3'])) {
        $j3 = implode($_POST['s3'] ,"");
        if($j3 == $k3) {
            $poin += $nilai;
        }else{
            $poin -= $nilai;
        }
    }else{
		
    }
	
	    /************** SOAL 4 ***************/

    if(isset($_POST['s4'])) {
        $j4 = implode($_POST['s4'] ,"");
        if($j4 == $k4) {
            $poin += $nilai;
        }else{
            $poin -= $nilai;
        }
    }else{
		
    }
	
	   /************** SOAL 5 ***************/

    if(isset($_POST['s5'])) {
        $j5 = implode($_POST['s5'] ,"");
        if($j5 == $k5) {
            $poin += $nilai;
        }else{
            $poin -= $nilai;
        }
    }else{
		
    }

    echo " Total Score anda : " . $poin;        

}


?>


<form action="" method="post">
<br>
	Kerjakanlah soal dibawah ini, berdasarkan materi yang ada pada website ini.
	<p></p>
    <br>
	
	<div>
    1. Saluang adalah alat musik yang berasal dari daerah? <br>
    <!-- attribute name harus sama dan dikasih[] artinya array karena dari ketiga akan kita ambil 1-->

    <input type="radio" name="s1[]" value="k1"> Sumatra Barat
	<p></p>
    <input type="radio" name="s1[]" value="sb"> Aceh
	<p></p>
    <input type="radio" name="s1[]" value="sk"> Jawa Timur
	<p></p>
    <input type="radio" name="s1[]" value="sk"> Madura
    <br>
	


	
	<div class="jarak"></div>	
    <br>
    2. Ibu kota Provinsi Kepulauan Riau adalah <br>
  <input type="radio" name="s2[]" value="kk"> Pangkal Pinang
	<p></p>
    <input type="radio" name="s2[]" value="k2"> Tanjung Pinang
		<p></p>
    <input type="radio" name="s2[]" value="kg"> Sumatra Utara
	<p></p>
	   <input type="radio" name="s2[]" value="kh"> Nanggro Aceh Darussalam 
    <br>
    <br>
 
 

	
	<div class="jarak"></div>	

	  3. Berapa jumlah kabupaten di Provinsi Sumatra Barat? <br><br>
    <input type="radio" name="s3[]" value="kk"> 11
		<p></p>
    <input type="radio" name="s3[]" value="k3"> 12
		<p></p>
    <input type="radio" name="s3[]" value="kg"> 13
	<p></p>
	<input type="radio" name="s3[]" value="kh"> 10
		<p></p>
    <br>
    <br>
	
	</div>
	
			
					<!-- selesai -->
			
					 <div class="clear"></div>
				  </div>
				</div>
				
				<div class="col-md-6">
				<div class="bawah">
				

				 Kerjakanlah soal dibawah ini, berdasarkan gambar.
				 
				 	
				 <div class="gambar">
				 	<br>
			
		
		<div><table width="600px" >
    <tr>
        <td rowspan="2"> <img src="images/alatmusik/2.jpg"></td>
        <td>4. Panggung Kajeng Leko merupakan rumah adat provinsi? </td>
       
    </tr>
	 <tr>
    <td>	
    <input type="radio" name="s4[]" value="kk"> Sumatra Utara
	<br>
    <input type="radio" name="s4[]" value="k4"> Jami
	<br>
    <input type="radio" name="s4[]" value="kg"> Sumatra Barat
	<br>
	<input type="radio" name="s4[]" value="kh"> Aceh
	</td>
      
    </tr>
	
	</table></div>
	
	<br>
	

	<div><table width="600px"  >
	  <tr>
        <td rowspan="2"> <img src="images/alatmusik/1.jpg"></td>
        <td>5. Tari Gending Sriwijaya berasal dari daerah?  </td>
       
    </tr>
	

	
	 <tr>
  
    <td>	
    <input type="radio" name="s5[]" value="kk"> Sumatra Barat
	<br>
    <input type="radio" name="s5[]" value="k5"> Sumatra Selatan
	<br>
    <input type="radio" name="s5[]" value="kg"> Sumatra Utara
	<br>
	<input type="radio" name="s5[]" value="kh"> Jawa Timur
	</td>
      
    </tr>
	
	
	</div></table>
		
		
		
				
				</div>
				</div>
		 </div>
				  
		<br>
		<br>


		
	<div class="button1"> <input type="submit" name="submit" value="Selesai"></div>
	<div class="button2"> <input type="reset" name="reset" value="Hapus"></div>
	<div class="button"> <input type="button" value="Ulangi Soal" onclick="window.location = 'soal.php';"/>
</form>
	
				  
				 <div class="clear"></div>
				</div>
			</div>
		</form>
	</div>
	
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
			</div>						
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