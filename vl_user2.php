<?php
session_start();
include "koneksi.php";

$Username = $_POST["email"];
$Password = $_POST["password"];

$query = mysqli_query ($konek, "SELECT * FROM login WHERE email='$Username'");

// Validasi Login
if ($query){
	
	$queryuser = mysqli_query ($konek,"SELECT * FROM login WHERE email='$Username' and password='$Password'");
		
	$user = mysqli_fetch_array ($queryuser);
	if($user){

				$_SESSION["Username"] 			= $user["email"];
				$_SESSION["Password"] 			= $user["password"];

			echo" <script>
				        alert('Login Approve');
				        window.location = 'http://localhost/landingpage/logged';
				  </script>";

		}
	else
		{
			echo" <script>
				        alert('Login Fail');
				        window.location = 'http://localhost/landingpage/signin';
				  </script>";
		}
	
}
	
?>