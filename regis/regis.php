<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$nama_user = mysqli_real_escape_string($mysqli, $_POST['nama_user']);
	$pass_user = mysqli_real_escape_string($mysqli, $_POST['pass_user']);
	$email_user = mysqli_real_escape_string($mysqli, $_POST['email_user']);
		
	// checking empty fields
	if(empty($nama_user) || empty($pass_user) || empty($email_user)) {
				
		if(empty($user_name)) {
			echo "<font color='red'>Anda Harus mengisi username.</font><br/>";
		}
		
		if(empty($pass)) {
			echo "<font color='red'>Anda Harus mengisi password.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Anda Harus mengisi Email.</font><br/>";
		}
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO regis(nama_user,pass_user,email_user) VALUES('$nama_user','$pass_user','$email_user')");
		
		//display success message
		echo "<font color='green'>Terima Kasih Telah Mendaftar.";
		echo "<br/><a href='../index.php'>Kembali ke Halaman</a>";
	}
}
?>
</body>
</html>