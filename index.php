<!DOCTYPE html>
<?php
	include("ayar.php");
	$sorgu=mysql_query("select * from duyurular");
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

		<section id="icerik1">
			<?php while($cek=mysql_fetch_array($sorgu)){ ?>
				<h1 id="icerikbaslik"><?php echo $cek["baslik"];?> </h1>	
				<article id="icerik1bolge1">
						<?php echo $cek["icerik"];?> 
				 		<p id="tarih"><?php echo $cek["tarih"];?> </p>
				</article>
			<?php } ?>
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