<?php

include 'koneksi.php';

$idPelanggan = $_GET['idPelanggan'];

$hapusPelanggan = "DELETE FROM pelanggan WHERE id = '$idPelanggan'";

if (mysqli_query($conn, $hapusPelanggan)==true) {
	header("location:home.php");
} else {
	echo "Error: " . mysqli_error($conn);
}


mysqli_close($conn);
?>