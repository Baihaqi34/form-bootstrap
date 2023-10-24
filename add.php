<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah data</title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
	<form action="add.php" method="POST">
			<div class="container d-flex justify-content-center p-3">
			<h1>Tambah Data</h1>
			</div>
		<table width="50%" class="mt-4 m-5" cellpadding="10"> 
			<tr>
				<td>Nama lengkap</td>
				<td><input type="text" name="namaguru" class="form-control border-dark"></td>
			</tr>

			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<input type="radio" name="jeniskelamin" value="laki-laki" class="form-check-input border-dark">L
					<input type="radio" name="jeniskelamin" value="perempuan" class="form-check-input border-dark">P
				</td>
			</tr>
			<tr>
				<td>Tempat lahir</td>
				<td><input type="text" name="tempatlahir" class="form-control border-black"></td>
			</tr>

			<tr>
				<td>Tanggal lahir</td>
				<td><input type="date" name="tgllahir" class="form-control border-black"></td>
			</tr>

			<tr>
				<td>Lulusan</td>
				<td><input type="number" name="lulusan" class="form-control border-black"></td>
			</tr>

			<tr>
				<td>Alamat</td>
				<td><textarea name="alamat" class="form-control border-black"></textarea></td>
			</tr>

			<tr>
				<td>No HP</td>
				<td><input type="number" name="nohp" class="form-control border-black"></td>
			</tr>

			<tr>
				
				<td><input type="submit" name="add" value="tambah" class="btn btn-primary"></td>
			</tr>

	
		</table>
		</form>
</body>
</html>  


<?php 
	include "koneksi.php";
	if (isset($_POST['add'])) {

		$nama = $_POST['namaguru'];
		$jeniskelamin = $_POST['jeniskelamin'];
		$tempatlahir = $_POST['tempatlahir'];
		$tgllahir = $_POST['tgllahir'];
		$lulusan = $_POST['lulusan'];
		$alamat = $_POST['alamat'];
		$nohp = $_POST['nohp'];

		
	
		$query = "INSERT INTO tblguru VALUES(
												NULL,
												'$nama',
												'$jeniskelamin',
												'$tempatlahir', 
												'$tgllahir',
												'$lulusan',
												'$alamat',
												'$nohp')";

		$result = mysqli_query($conn,$query);


		if ($result) {
			header("location:index.php");
		}else{
			echo "<b>tambah data gagal</b>";
		}

	}

?>
