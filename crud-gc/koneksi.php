<?php
  $host = "localhost";
	$user = "root";
	$pass = "";
	$db = "login_gc";

	$koneksi = mysqli_connect($host, $user, $pass, $db);

	if(!$koneksi) {
		die("Koneksi gagal : ".mysql_connect_error());
	}
  
  $host = "localhost"; 
  $user = "root";
  $pass = "";
  $nama_db = "crud_gc"; //nama database
  $koneksi = mysqli_connect($host,$user,$pass,$nama_db); //pastikan urutan nya seperti ini, jangan tertukar

  if(!$koneksi){ //jika tidak terkoneksi maka akan tampil error
    die ("Koneksi dengan database gagal: ".mysql_connect_error());
  }

?>
