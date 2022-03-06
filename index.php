<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MyLaundry</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	<style type="text/css">
		.background {
	      background-image: url('background.jpg');
	      background-repeat: no-repeat;
	      background-attachment: fixed;
	      background-size: cover;
	      background-blend-mode: luminosity;
	    }
	</style>
</head>
<body class="background">
	<main>
		<div class="row">
			<div class="col-sm-4 position-fixed top-50 start-50 translate-middle p-4" style="background-color: white; box-shadow: 1px 1px 5px 1px rgba(0, 0, 0, 0.23);">
				<h4 style="font-family: arial, sans-serif; font-weight: bold; text-align: center;">LOG IN</h4>
				<br>
				<form>
					<div>
						<!---- Input data --->
						<div>
						    <input type="text" class="form-control" placeholder="Username" aria-label="Username" id="username">
						  </div>
						  <br>
						  <div>
						    <input type="password" class="form-control" placeholder="Password" aria-label="Password" id="password"> 
						  </div>
						</div>
						<br>
						<!--- Show password ---->
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" onclick="showpassword()">
							<label class="form-check-label" for="flexCheckDefault">
							    Tampilkan password
							</label>
						</div>
						<br>
						<!--- Button --->
						<div class="d-grid col-sm-6 mx-auto">
							<button type="button" class="btn" type="submit" style="background-color: #1687A7; color: white;" onclick="validate()">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</main>
	<footer style="background-color: #276678; color: white; text-align: center; width: 100%;" class="p-3 position-fixed bottom-0">
		&copy; 2022 by Diyastri Khotimatul Huda
	</footer>

	<script src="js.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>