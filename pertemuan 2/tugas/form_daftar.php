<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div>
		<form class="form-horizontal w-50 mt-4 mx-auto p-4 border shadow-sm" method="POST" action="hasil_daftar.php">
		<h1>Form Pendaftaran</h1>
		<div class="container px-4">
			<div class="form-group row mb-4"> 
				<label for="nama_lengkap">Full Name</label>
				<input type="text" class="form-control" id="nama_lengkap">
			</div>
			<div class="form-group row mb-4">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email">
			</div>
			<div class="form-group row mb-4">
				<label for="alamat">Address</label>
				<textarea class="form-control" id="alamat"></textarea>
			</div>
			<div class="form-group row mb-4">
				<label for="telepon">Telephone</label>
				<input type="text" class="form-control" id="telepon">
			</div>
			<button class="btn btn-info">Submit</button>
		</form>
	</div>
</body>
</html>