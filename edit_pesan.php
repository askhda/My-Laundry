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
	$idPesan = $_GET['idPesan'];
	$pelanggans = mysqli_query($conn, "SELECT * FROM pelanggan");
	$pesans = mysqli_query($conn, "SELECT pelanggan.nama AS nama, pesan_laundry.id, pesan_laundry.berat AS berat, pesan_laundry.biaya AS biaya, pesan_laundry.id_pelanggan AS id_pelanggan FROM pesan_laundry LEFT JOIN pelanggan ON pelanggan.id = pesan_laundry.id_pelanggan WHERE pesan_laundry.id = '$idPesan'");
	while ($pesan = mysqli_fetch_array($pesans)) {
		$idPelanggan = $pesan['id_pelanggan'];
		$namaPelanggan = $pesan['nama'];
		$beratPesan = $pesan['berat'];
		$biayaPesan = $pesan['biaya'];
		$idNama = $pesan['id_pelanggan'];
	}
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
			<h1 class="text-center">Edit Data Pesanan</h1>
			<br><br>
			<div class="card mx-auto" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px; width: 75%;">
			  <div class="card-body m-4">
			    <form method="POST" name="form-edit-pelanggan" action="">
			    	<div class="sm-3">
					  <label for="exampleFormControlInput1" class="form-label">ID Pesanan</label>
					  <input type="number" class="form-control" id="exampleFormControlInput1" name="id-pesan" value="<?php echo $idPesan;?>" disabled>
					</div>
					<br>
					<div class="sm-3">
					  <label for="exampleFormControlTextarea1" class="form-label">Nama</label>
					  <select class="form-control" name="nama-pelanggan">
					  	<?php
					  	while ($pelanggan = mysqli_fetch_array($pelanggans)) {
					  		echo "
					  		<option ".(($pelanggan['id'] == $idPelanggan) ? 'selected' : '' )." value='".$pelanggan['id']."'>".$pelanggan['nama']."</option>";
					  	}
					  	?>
					  </select>
					</div>
					<br>
					<div class="sm-3">
					  <label for="exampleFormControlTextarea1" class="form-label">Berat (kg)</label>
					  <input type="text" name="berat-pesan" class="form-control" value="<?php echo $beratPesan;?>">
					</div>
					<br>
					<br><br>
					<div class="d-grid col-sm-2 mx-auto">
					   <button type="submit" class="btn btn-lg tombol-hover" name="submit">Submit</button>
					</div>
			    </form>
			  </div>
			</div>
		</div>
		<br><br><br>	
	</main>
	<footer style="background-color: #276678; color: white; text-align: center;" class="p-3">
		&copy; 2021 by Diyastri Khotimatul Huda
	</footer>
	<?php
	if (isset($_POST['submit'])) {
		$idPesan = $_GET['idPesan'];
		$NamaPelanggan = $_POST['nama-pelanggan'];
		$BeratPesan = $_POST['berat-pesan'];
		$BiayaPesan = $BeratPesan*4000;

		$updateDataPesan = "UPDATE pesan_laundry SET id_pelanggan='$NamaPelanggan', berat='$BeratPesan', biaya='$BiayaPesan' WHERE id='$idPesan'";
		if (mysqli_query($conn, $updateDataPesan)==true) {
			?>
			<script type="text/javascript">
				window.location.assign('pesan.php');
			</script>
			<?php
			echo "Sukses";
		} else {
			echo "Error: " . mysqli_error($conn);
		}
		
	}
	?>

	<script src="js.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<?php mysqli_close($conn); ?>
</body>
</html>