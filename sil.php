<?php
	include("ayar.php");
	$id=$_POST["id"];
	$sorgu=mysql_query("delete from kayitlar where id=".$id)
	or die("Hata Olustu!");

	if ($sorgu){
        echo "Kayıt silindi";
        header('Location: kayitlar.php');
    }else{
	    echo "Kayıt Silinemedi";
	    header('Location: hata.php');
    }
?>	