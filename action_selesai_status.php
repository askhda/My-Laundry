<?php

include 'koneksi.php';

$idSelesai = $_GET['idSelesai'];

$changeProses = "UPDATE proses_laundry SET status ='Selesai' WHERE id = '$idSelesai'";

if (mysqli_query($conn, $changeProses)==true) {
	header("location:status.php");
	
} else {
	echo "Error: " . mysqli_error($conn);
}


mysqli_close($conn);
?>