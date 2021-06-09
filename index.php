<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contoh Modularisasi</title>
	<link href="style.css" rel="stylesheet" type="text/stylesheet"
media="screen" />
</head>
<body>
	<div class="container">
		<header>
			<h1></h1>
		</header>
		<nav>
			<a href="home.php">Home</a>
			<a href="about.php">Tentang</a>
			<a href="kontak.php">Kontak</a>
			<a href="Galeri.php">Galeri</a>
		</nav>

		<footer>
			<p>&copy; 2021, informatika, Universitas Pelita Bangsa</p>
		</footer>
	</div>
</body>
</html>

<?php require('header.php'); ?>

<div class="content">
	
</div>

<?php require('footer.php'); ?>
<?php require('header.php'); ?>

<div class="content">
	<h2>Ini Halaman About</h2>
	<p>ini adalah bagian content dari halaman.</p>
</div>

<?php require('footer.php'); ?>
