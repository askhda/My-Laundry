<?php
		include 'koneksi.php';
		if (isset($_POST['submit'])) {
			$namaPelanggan = $_POST['nama-pelanggan'];
			$beratPesanan = $_POST['berat-pesanan'];
			$biayaPesanan = $beratPesanan*4000;

			if (empty($namaPelanggan) OR empty($beratPesanan)) {
				echo"<script>alert('Data belum diisi'); window.location.assign('tambah_pesan.php');</script>";

			}

			else {

				$tambahDataPesan = "INSERT INTO `pesan_laundry` (`id_pelanggan`, `berat`, `biaya`) VALUES ('$namaPelanggan', '$beratPesanan', '$biayaPesanan')";

				if (mysqli_query($conn, $tambahDataPesan)== true) {
					header("location:pesan.php");
				}

				else{
					echo '<script>alert("<?php echo "Error: " . $data_simpan . "<br>" . mysqli_error($conn); ?>"); window.location.assign("tambah_pesan.php");</script>';
				}
			}
		}

		else{
			echo"<script>alert('Belum ada data yang dimasukkan');</script>";
		}

		mysqli_close($conn);
?>