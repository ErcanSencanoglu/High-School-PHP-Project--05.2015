<!DOCTYPE html>
<?php
	include("ayar.php");
	$sorgu2=mysql_query("select * from duyurular2");
?>	
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="dizayn.css">
		<title>Anasayfa</title>
		<script type="text/javascript">

			function colorChange(formName,elementName){
				document.forms[formName][elementName].style.color = "white";
				document.forms[formName][elementName].style.backgroundColor = "red";

			}

			function isValid(frm)
			{
				
				var tf = true;
				if (document.getElementsByName("seri-no")[0].value == "") {
					colorChange(frm,"seri-no");
					tf = false;
				}
				if (document.getElementsByName("ariza-baslik")[0].value == "")  {
					colorChange(frm,"ariza-baslik");
					tf =  false;
				}
				if (document.getElementsByName("servis-bolumu")[0].value == "")  {
					colorChange(frm,"servis-bolumu");
					tf =  false;
				}
				if (document.getElementsByName("gelis-tarihi")[0].value == "")  {
					colorChange(frm,"gelis-tarihi");
					tf =  false;
				}
				if (document.getElementsByName("marka")[0].value == "")  {
					colorChange(frm,"marka");
					tf =  false;
				}
				if (document.getElementsByName("model")[0].value == "")  {
					colorChange(frm,"model");
					tf =  false;
				}
				if (document.getElementsByName("musteri-adi")[0].value == "")  {
					colorChange(frm,"musteri-adi");
					tf =  false;
				}
				if (document.getElementsByName("musteri-soyadi")[0].value == "")  {
					colorChange(frm,"musteri-soyadi");
					tf =  false;
				}
				if (document.getElementsByName("musteri-tel")[0].value == "")  {
					colorChange(frm,"musteri-tel");
					tf =  false;
				}
				if (document.getElementsByName("durum")[0].value == "")  {
					colorChange(frm,"durum");
					tf =  false;
				}
				  return tf;
			}

		</script>
		
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
			<table>
				<form action="kayitekle.php" onsubmit="return isValid('ekle')" method="post" name="ekle">
					<tr>
						<td id="hucreBaslik" width="150">Tarih</td>
						<td style="font-weight:bold;font-size:17px;" id="hucreBilgi" width="300">
						<?php echo date('d/m/Y-D'); ?>
						</td>

						<td id="hucreBaslik" width="150">Seri No</td>
						<td id="hucreBilgi" width="300">
						<input id="yaziAlani" type="text" name="seri-no"/>
						</td>
					</tr>

					<tr>
						<td id="hucreBaslik" width="150">Arıza Başlık</td>
						<td id="hucreBilgi" width="300">
						<input id="yaziAlani" type="text" name="ariza-baslik"/>
						</td>

						<td id="hucreBaslik" width="150">Servis Bölümü</td>
						<td id="hucreBilgi" width="300">
						<input id="yaziAlani" type="text" name="servis-bolumu"/>
						</td>

						
					</tr>

					<tr>
						<td id="hucreBaslik" width="150">Geliş Tarihi</td>
						<td id="hucreBilgi" width="300">
						<input id="yaziAlani" type="text" name="gelis-tarihi"/>
						</td>

						<td id="hucreBaslik" width="150">Çıkış Tarihi</td>
						<td id="hucreBilgi" width="300">
						<input id="yaziAlani" type="text" name="cikis-tarihi"/>
						</td>
					</tr>

					<tr>
						<td id="hucreBaslik" width="150">Marka</td>
						<td id="hucreBilgi" width="300">
						<input id="yaziAlani" type="text" name="marka"/>
						</td>

						<td id="hucreBaslik" width="150">Model</td>
						<td id="hucreBilgi" width="300">
						<input id="yaziAlani" type="text" name="model"/>
						</td>
					</tr>

					<tr>
						<td id="hucreBaslik" width="150">Müşteri Adı</td>
						<td id="hucreBilgi" width="300">
						<input id="yaziAlani" type="text" name="musteri-adi"/>
						</td>

						<td id="hucreBaslik" width="150">Müşteri Soyadı</td>
						<td id="hucreBilgi" width="300">
						<input id="yaziAlani" type="text" name="musteri-soyadi"/>
						</td>
					</tr>

					<tr>
						<td id="hucreBaslik" width="150">Durum</td>
						<td id="hucreBilgi" width="300">
						<input id="yaziAlani" type="text" name="durum"/>
						</td>

						<td id="hucreBaslik" width="150">Müşteri İletişim</td>
						<td id="hucreBilgi" width="300">
						<input id="yaziAlani" type="text" name="musteri-tel"/>
					    </td>
					</tr>

					<tr>
						<td id="hucreBaslik" width="150">Arıza Açıklaması</td>
						<td id="hucreBilgi" width="300">
						<textarea  rows="10" cols="25" 
						 type="text" name="ariza-aciklama" ></textarea>
						</td>

						<td id="hucreBaslik" width="150">Notlar</td>
						<td id="hucreBilgi" width="300">
						<textarea rows="10" cols="25" 
						type="text" name="notlar"></textarea>
						</td>
					</tr>

					<tr>
						<td colspan=2 id="hucreBilgi" width="50%"> 
							<input id="gozat2" type="submit" name="ekle" value="Kaydet"/>
						</td>
						<td  colspan=2 id="hucreBilgi" width="50%">
							<input id="sil2" type="reset" name="sil" value="Temizle"/>
						</td>
					</tr>
				</form>
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