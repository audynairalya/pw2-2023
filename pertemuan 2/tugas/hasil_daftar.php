<!DOCTYPE html>
<html>
<head>
	<title>Registrant Data</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>Data Pendaftar</h2>
		<table class="table">
			<thead>
				<tr>
					<th>Number</th>
					<th>Full Name</th>
					<th>Email</th>
					<th>Address</th>
					<th>Telephone</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Audy Naira Alya</td>
					<td>audynaira@gmail.com</td>
					<td>Tangerang</td>
					<td>+6288214453495</td>
				</tr>
				<tr>
					<td>Zahra Naira Alfianti</td>
					<td>dodod@gmail.com</td>
					<td>Depok</td>
					<td>+62895332119592</td>
				</tr>
				<?php
					// Check if the form has been submitted? If yes, then display
					if (isset($_POST['proses'])) {
					// Create variables to capture and store the sent data
					$nama_lengkap = $_POST['nama_lengkap'];
					$email = $_POST['email'];
					$alamat = $_POST['alamat'];
					$telepon = $_POST['telepon'];
					// Show data in a table
					echo "<tr>";
					echo "<td>3</td>"; 
					echo "<td>$nama_lengkap</td>";
					echo "<td>$email</td>";
					echo "<td>$alamat</td>";
					echo "<td>$telepon</td>";
					echo "</tr>";
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>