<?php
	include("ayar.php");


	$serino = $_POST["seri-no"];
	$arizabaslik = $_POST["ariza-baslik"];
	$servisbolumu = $_POST["servis-bolumu"];
	$gelistarihi = $_POST["gelis-tarihi"];
	$cikistarihi = $_POST["cikis-tarihi"];
	$marka = $_POST["marka"];
	$model = $_POST["model"];
	$musteriadi = $_POST["musteri-adi"];
	$musterisoyadi = $_POST["musteri-soyadi"];
	$durum = $_POST["durum"];
	$musteritel = $_POST["musteri-tel"];
	$arizaaciklama = $_POST["ariza-aciklama"];
	$notlar = $_POST["notlar"]; 


	$sorgu=mysql_query("insert into kayitlar
		(arizabaslik,arizaaciklama,servisbolumu,marka,model,serino,
			gelistarihi,musteriadi,musterisoyadi,musteritel,durum,cikistarihi,
			notlar) 
		values ('$arizabaslik','$arizaaciklama','$servisbolumu','$marka',
			'$model','$serino','$gelistarihi','$musteriadi',
			'$musterisoyadi','$musteritel','$durum','$cikistarihi','$notlar')")
	or die("Hata Olustu!".mysql_error());

	if ($sorgu){
        echo "Kayıt E'klendi";
        header('Location: kayitlar.php');
    }else{
	    echo "Kayıt Eklenemedi";
	    header('Location: hata.php');
    }

?>	