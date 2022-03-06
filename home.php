<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Laundry</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<!--- Bootstrap icon --->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	<!--- Font awesome ---->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!--- Data tables ---->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
</head>
<body>
	<?php
	include 'koneksi.php';
	$pelanggans = mysqli_query($conn, "SELECT * FROM pelanggan");
	?>
	<header>
		<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #276678;">
		  <div class="container-sm p-2">
		    <a class="navbar-brand text-white" href="home.php">MyLaundry</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation" style="border: 1px solid white;">
		      <span class="fa fa-reorder"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
		      <ul class="navbar-nav ms-auto">
		        <li class="nav-item">
		          <a class="nav-link text-white" href="home.php">Pelanggan</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link text-white" href="pesan.php">Pesan</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link text-white" href="status.php">Status</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link text-white" href="index.php">Keluar</a>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>
	</header>
	<main>
		<br><br><br>
		<div class="container-sm my-5">
			<h1 class="text-center">Data Pelanggan</h1>
			<br>
			<div class="d-grid col-sm-2 mx-auto">
				<a class="btn btn-lg tombol-hover" href="tambah_pelanggan.php" role="button">Tambah</a>
			</div>
			<br><br>
			<table id="tabel-pelanggan" class="hover text-center" style="width: 100%;">
				<thead>
					<tr>
						<td>No</td>
						<td>ID pelanggan</td>
						<td>Nama</td>
						<td>Alamat</td>
						<td>No. WhatsApp</td>
						<td>Edit</td>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					while ($pelanggan = mysqli_fetch_array($pelanggans)) {
					echo "
					<tr>
						<td>".$no."</td>
						<td>".$pelanggan['id']."</td>
						<td>".$pelanggan['nama']."</td>
						<td>".$pelanggan['alamat']."</td>
						<td>".$pelanggan['nowa']."</td>
						<td>
							<div>
								<a class='btn tombol-hover m-2' href='edit_pelanggan.php?idPelanggan=".$pelanggan['id']."' role='button'><i class='bi bi-pencil-square'></i></a>
								<a class='btn btn-danger' href='#' role='button' name='hapus' onclick='confirmation(".$pelanggan['id'].")'><i class='bi bi-trash-fill'></i></a>
							</div>
						</td>
					</tr>
					";
					$no++;
					}
					?>
					
				</tbody>
			</table>
		</div>
		<br><br><br>	
	</main>
	<footer style="background-color: #276678; color: white; text-align: center;" class="p-3">
		&copy; 2021 by Diyastri Khotimatul Huda
	</footer>


	<script type="text/javascript">
		$(document).ready( function () {
			$('#tabel-pelanggan').DataTable({
				"scrollX": true,
				"scrollCollapse": true,
				"language": {
					"url": "http://cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
					"sEmptyTable": "Tidak ada data yang bisa ditampilkan."
				}
			});			
		});
	</script>

	<script src="js.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<?php mysqli_close($conn); ?>
</body>
</html>