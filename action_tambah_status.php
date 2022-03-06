<?php
		include 'koneksi.php';
		if (isset($_POST['submit'])) {
			$idPelanggan = $_POST['id-pelanggan'];
			$prosesLaundry = $_POST['status'];
			$idnama = $_POST['id-nama'];

			echo $idPelanggan;
			echo $prosesLaundry;
			echo $idnama;


			/*$databaru = mysqli_query($conn, "SELECT pelanggan.nama AS nama, pesan_laundry.id AS id_pesan, pesan_laundry.berat AS berat, pesan_laundry.biaya AS biaya, pesan_laundry.id_pelanggan AS id_pelanggan FROM pesan_laundry LEFT JOIN pelanggan ON pelanggan.id = pesan_laundry.id_pelanggan WHERE pesan_laundry.id_pelanggan = $idPelanggan");

			$pesan = mysqli_fetch_assoc($databaru);

			//echo "Error: " . $databaru . "<br>" . mysqli_error($conn);
			echo "Error: " . $pesan . "<br>" . mysqli_error($conn);

			$namaPelanggan = $pesan['nama'];
			$beratPesan = $pesan['berat'];
			$biayaPesan = $pesan['biaya'];
			$idNama = $pesan['id_pelanggan'];
			echo $idNama;
			echo $pesan['id_pelanggan'];
			$idPesan = $pesan['id_pesan'];*/

			$tambahDataStatus = mysqli_query($conn, "INSERT INTO `proses_laundry` (`id_pelanggan`, `id_pesanan`, `status`) VALUES ('$idnama', '$idPelanggan', '$prosesLaundry')");


			if ($tambahDataStatus == true) {
				header('location: status.php');
			} 

			else {
				echo "<script>alert('Error')</script>";
			}
		}

		else{
			echo"<script>alert('Belum ada data yang dimasukkan');</script>";
		}

		mysqli_close($conn);
?>