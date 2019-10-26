<!DOCTYPE html>
<?php
	include("ayar.php");
	$sorgu=mysql_query("select * from kayitlar");
	$sorgu2=mysql_query("select * from duyurular2");
?>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="dizayn.css">
		<title>Anasayfa</title>
	</head>

	<body>
	<div id="ana-kisim">
		<header href="index.php">
			<a href="index.php"> 
			<img id="baslikeresim" src="img/logo1.png" width="100" height="100">
			<h1 id="baslikmetin">Zevk-i Teknik</h1>
			<h3 id="baslikmetin2">zevkiteknik.com</h3>
			</a>
		</header>

		<nav id="menu">
			<ul>
				<a href="index.php"><li>Anasayfa</li></a>
				<a href="kayitlar.php"><li>Kayıtlar</li></a>
				<a href="ekle.php"><li>Kayıt Ekle</li></a>
			</ul>
		</nav>

		<section id="icerik1">	﻿
			<table >
	 			<tr >
	 				<td id="baslikHucre" width=35>ID</td>
	 				<td id="baslikHucre" width=100>Baslik</td>
	 				<td id="baslikHucre" width=100>Bolum</td>
	 				<td id="baslikHucre" width=100>Tarih</td>
	 				<td id="baslikHucre" width=100>Durum</td>
	 				<td id="baslikHucre" width=10>Gözat</td>
	 				<td id="baslikHucre" width=10>Düzenle</td>
	 				<td id="baslikHucre" width=10>Sil</td>
	 			</tr>

		 <?php while($cek=mysql_fetch_array($sorgu)){ ?>
				<tr>
					<td><?php echo $cek["id"];?> </td>
					<td><?php echo $cek["arizabaslik"];?> </td>
					<td><?php echo $cek["servisbolumu"];?> </td>
					<td><?php echo $cek["gelistarihi"];?> </td>
					<td><?php echo $cek["durum"];?> </td>

					<form action="gozat.php" method="post" name="gozat">
					<td>
					<input id="gozat" type="submit" name="gonder" value="Gözat"/>
					<input type="hidden" name="id" value="<?php echo $cek["id"] ?>"/>
					</td>
					</form>

					<form action="duzenle.php" method="post" name="duzenle">
					<td>
					<input id="duzenle" type="submit" name="duzenle" value="Düzenle"/>
					<input type="hidden" name="id" value="<?php echo $cek["id"] ?>"/>
					</td>
					</form>
					<form action="sil.php" method="post" name="sil">
					<td>
					<input id="sil" type="submit" name="sil" value="Sil"/>
					<input type="hidden" name="id" value="<?php echo $cek["id"] ?>"/>
					</td>

					</form>
				</tr>
			<?php } ?>
				
	 		</table>
		</section>

		<section id="icerik2">
			<?php while($cek=mysql_fetch_array($sorgu2)){ ?>
				<h1><?php echo $cek["baslik"];?> </h1>	
				<article id="icerik1bolge1">
						<?php echo $cek["icerik"];?> 
				</article>
			<?php } ?>
		</section>

		<footer id="altkisim">
			<h3 id="altaciklama">ercansencan.com-2015</h3>
		</footer>

	</div>
	</body>

</html>