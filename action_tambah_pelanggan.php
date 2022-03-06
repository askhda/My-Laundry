<?php
		include 'koneksi.php';
		if (isset($_POST['submit'])) {
			$namaPelanggan = $_POST['nama-pelanggan'];
			$alamatPelanggan = $_POST['alamat-pelanggan'];
			$noWa = $_POST['no-wa'];

			if (empty($namaPelanggan) OR empty($alamatPelanggan) OR empty($noWa)) {
				echo"<script>alert('Data belum diisi'); window.location.assign('tambah_pelanggan.php');</script>";

			}

			else {

				$tambahDataPelanggan = "INSERT INTO `pelanggan` (`nama`, `alamat`, `nowa`) VALUES ('$namaPelanggan', '$alamatPelanggan', '$noWa')";

				if (mysqli_query($conn, $tambahDataPelanggan)== true) {
					header("location:home.php");
				}

				else{
					echo '<script>alert("<?php echo "Error: " . $data_simpan . "<br>" . mysqli_error($conn); ?>"); window.location.assign("tambah_pelanggan.php");</script>';
				}
			}
		}

		else{
			echo"<script>alert('Belum ada data yang dimasukkan');</script>";
		}

		mysqli_close($conn);
?>