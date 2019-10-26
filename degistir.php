<?php
	include("ayar.php");
	$id=$_POST["id"];
	echo $_POST["id"];

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

	$sorgu=mysql_query("Update kayitlar set serino='$serino',
		arizabaslik='$arizabaslik', servisbolumu='$servisbolumu',
		gelistarihi='$gelistarihi', cikistarihi='$cikistarihi',
		marka='$marka', model='$model' , musteriadi='$musteriadi',
		musterisoyadi='$musterisoyadi', durum='$durum',
		musteritel='$musteritel', arizaaciklama='$arizaaciklama',
		notlar='$notlar'
		where id=".$id)
	or die("Hata Olustu!".mysql_error());

	if ($sorgu){
        echo "Kayıt Güncellendi";
        header('Location: kayitlar.php');
    }else{
	    echo "Kayıt Gücenllenemedi";
	    header('Location: hata.php');
    }

?>	