function showpassword() {
	let password = document.getElementById('password');
	if (password.type === "password") {
		password.type = "text";
	} else {
		password.type = "password";
	}
}

function validate() {
	let username = document.getElementById('username').value;
	let password = document.getElementById('password').value;
	if (username === "admin" && password === "mylaundry") {
		sessionStorage.setItem("username", username);
		window.location.assign("home.php");
	} else {
		alert ("Username atau password salah!");
	}
}

function confirmation(idPelanggan) {
	if (confirm("Apakah yakin akan menghapus data tersebut?")) {
		window.location.href = 'action_hapus_pelanggan.php?idPelanggan='+idPelanggan;
	} 
}