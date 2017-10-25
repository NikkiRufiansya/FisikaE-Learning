<?php
include "connect/koneksi.php";
$nama = $_POST['nama'];
	if(empty($_FILES['pdf1']['tmp_name'])){
	echo"<script>alert('Mohon isi dengan lengkap!!')</script>";
	echo"<script>document.location='uploadMateri.php'</script>";
	}
	else{
		if(empty($_FILES['tmp_name'])){
			$tmp_file = $_FILES['pdf1']['tmp_name'];
			$rand = (rand()%99999999);			
			$rand2 = (rand()%99999999);
			$direktori = "data/$rand2.pdf";

			move_uploaded_file($tmp_file,$direktori);
			

		$tambah = "INSERT INTO materi VALUES ('$rand', '$nama')";
		mysqli_query($db , $tambah);
		$tambah2 = "INSERT INTO subMateri VALUES ('$rand2', '$rand','$direktori')";
		mysqli_query($db , $tambah2);
		echo"<script>alert('Berhasil Menambah!!')</script>";
		echo"<script>document.location='uploadMateri.php'</script>";
		}
		else{
			$tmp_file = $_FILES['pdf1']['tmp_name'];
			$rand = (rand()%99999999);			
			$rand2 = (rand()%99999999);
			$direktori = "data/$rand2.pdf";

			move_uploaded_file($tmp_file,$direktori);
			
			

		$tambah = "INSERT INTO materi VALUES ('$rand', '$nama')";
		mysqli_query($db , $tambah);
		$tambah2 = "INSERT INTO subMateri VALUES ('', '$rand','$direktori')";
		mysqli_query($db , $tambah2);
		echo"<script>alert('Berhasil Menambahb!!')</script>";
		echo"<script>document.location='uploadMateri.php'</script>";
		}
	}
?>