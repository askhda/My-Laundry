<?php

include 'koneksi.php';

$idProses = $_GET['idProses'];

$changeProses = "UPDATE proses_laundry SET status ='Proses' WHERE id = '$idProses'";

if (mysqli_query($conn, $changeProses)==true) {
	header("location:status.php");
	
} else {
	echo "Error: " . mysqli_error($conn);
}


mysqli_close($conn);
?>