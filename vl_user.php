<?php
session_start();
include "koneksi.php";

$Username = $_POST["email"];
$Password = $_POST["password"];

$query = mysqli_query ($konek, "INSERT into login values ('$Username','$Password')");

	echo" <script>
        alert('Register Success');
        window.location = 'http://localhost/landingpage/index';
    </script>";
	
?>