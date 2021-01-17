
<!DOCTYPE HTML>
<html>
<head>
<title>Indonesia Kita</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
 </head>
<body>
	<div class="header">
		<div class="container">
			<div class="row">
		  <div class="col-md-12">
				 <div class="header-left">
					 <div class="logo">
						<a href="index.php"><img src="images/logoo.png" alt=""/></a>
						
					 </div>
					 
					<div class="teks-header">
						 		<p style="text-align:center"> MEDON SEJARAH DAN BUDAYA</p>	
								</div>
					
					
	    		    <div class="clear"></div>
	    	    </div>
				
				
			
				
	            <div class="header_right">
				
				
	<div id="sideNavigation" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <br>
  <br>
   <a href="/indonesiakita/index.php">Beranda Awal</a>
  <a href="aceh/index.php">Aceh</a>
  <a href="sumut/index.php">Sumatera Utara</a>
  <a href="sumbar/index.php">Sumatera Barat</a>
  <a href="riau/index.php">Riau</a>
  <a href="kepri/index.php">Kepulauan Riau</a>
  <a href="jambi/index.php">Jambi</a>
  <a href="bengkulu/index.php">Bengkulu</a>
  <a href="sumsel/index.php">Sumatera Selatan</a>
  <a href="babel/index.php">Bangka Belitung</a>
  <a href="lampung/index.php">Lampung</a>
 
	<br>
	<br>

</div>
 
<nav class="topnav">
  <a href="#" onclick="openNav()">
    <svg width="20" height="30" id="icoOpen">
        <path d="M0,5 30,5" stroke="#ffffff" stroke-width="5"/>
        <path d="M0,14 30,14" stroke="#ffffff" stroke-width="5"/>
        <path d="M0,23 30,23" stroke="#ffffff" stroke-width="5"/>
    </svg>
  </a>
</nav>
 


<script>
function openNav() {
    document.getElementById("sideNavigation").style.width = "250px";
    document.getElementById("main").style.marginRight = "250px";
}
 
function closeNav() {
    document.getElementById("sideNavigation").style.width = "0";
    document.getElementById("main").style.marginRight = "0";
}
</script>
		

				   
				   
	       </div>
	      </div>
		  
		  
		  
		 </div>
	    </div>
	  </div>
     <div class="main">
      <div class="shop_top">
		<div class="container">
				<div class="tulis" align="center">Quiz Seputar Sejarah & Budaya Indonesia</div>
			<div class="col-md-6">
				
			
					
					<!-- Latihan Soal-->
					
					 <div class="login-page">
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
		  </div>
	  </div>
	  
<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>Berita Terbaru</h4>
							<li><a href="jambi.php">Sejarah Lahirnya Provinsi Jambi</a></li>
							<li><a href="zapin.php">Asal Mula Tarian Zapin</a></li>
							<li><a href="rumahjambi.php">Seputar Rumah Panggung Kajeng Leko (Jambi)</a></li>
							<li><a href="keprimain.php">Permainan Tradisional Kepri</a></li>
						</ul>
					</div>
					
				
				<div class="col-md-3">
						<ul class="footer_box">					
					<h4 align="right">Kritik </h4>
				  <form method="post" action="input.php">
					<div class="to">
					<input type="text" name="nama" placeholder="Nama Anda" class="text" 
					onfocus="window.status='Silahkan Mengisi Nama Anda';" onblur="inama()" onClick="this.value="";">
					

                     	<input type="email" name="email" placeholder="Email Anda" 
						class="text" onfocus="window.status='Silahkan Mengisi Email konfirmasi';" onClick="this.value="";" >
		
	                   <textarea placeholder="Komentar Anda"  cols="66" rows="5" name="pesan" onfocus="this.value = '';" onblur="if (this.value == '') "></textarea>
					   
					   <div class="form-submit">
			           <input name="submit" name="submit" type="submit" id="submit" value="Kirim"><br>
			           </div>
	                </div>
                   </form>
				   </ul>
				   </div>
						
					<div class="col-md-3">
		<ul class="footer_box">					
					<h4 align="left"> Saran</h4>
					</ul>
					</div>
					
				
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>Langganan</h4>
							<div class="footer_search">
				    		   <form>
				    			<input type="text" value="Masukkan Email Mu" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email';}">
				    			<input type="submit" value="Go">
				    		   </form>
					        </div>
							<ul class="social">	
							  <li class="facebook"><a href="https://id-id.facebook.com/"><span> </span></a></li>
							  <li class="twitter"><a href="https://twitter.com/?lang=id"><span> </span></a></li>
							  <li class="instagram"><a href="https://www.instagram.com/?hl=id"><span> </span></a></li>	
							  <li class="pinterest"><a href="https://id.pinterest.com/"><span> </span></a></li>	
							  <li class="youtube"><a href="https://www.youtube.com/"><span> </span></a></li>										  				
						    </ul>
		   					
						</ul>
					</div>
				</div>
				<div class="row footer_bottom">
				    <div class="copy">
			           <p>Copyright© <a href="syafcom.com" target="_blank">Semicolon </a></p>
		            </div>
					 
   				</div>
			</div>
		</div>
		
</body>	
</html>