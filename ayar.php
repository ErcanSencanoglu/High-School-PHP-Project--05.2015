<?php
$host="localhost";
$kadi="root";
$sifre="";
$veritabani="odev";
$tablo="duyurular";

$baglanti=mysql_connect($host,$kadi,$sifre);
	if(baglanti)
	{
	  mysql_select_db("odev");
      mysql_query("SET NAMES UTF8");
	}
	else{echo "Mysql sunucusu ile baglanti kurulamadi. Hata kodu.".mysql_error();}
	@mysql_select_db($veritabani,$baglanti)
	or die ("Veritabanina baglanilmadi");
?>