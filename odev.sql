-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 06 May 2015, 18:48:24
-- Sunucu sürümü: 5.5.43-0ubuntu0.14.04.1
-- PHP Sürümü: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `odev`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `duyurular`
--

CREATE TABLE IF NOT EXISTS `duyurular` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `icerik` varchar(2048) CHARACTER SET utf8 DEFAULT NULL,
  `tarih` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `duyurular`
--

INSERT INTO `duyurular` (`id`, `baslik`, `icerik`, `tarih`) VALUES
(1, 'Windows 10', 'Microsoft, Windows''un yeni sürümü Windows 10''un detaylarını bugünkü etkinlikte ortaya çıkardı. Windows 10''un teknik önizleme sürümü, geçtiğimiz sene yayınlanmıştı; bugün ise işletim sisteminin en yeni özellikleri gösterildi.\n\nBugün bahsedilen özelliklerden bazılarından, Microsoft''un verdiği ipuçları ya da sızıntılar sayesinde haberdar olmuştuk. Ancak daha önce sızmayan, şaşırtıcı yenilikler de var. Elbette Windows 10 henüz tamamlanmadığından, bugün anlatılan özelliklerden fazlası da zaman içinde işletim sistemine eklenecek...', '8 May?s 2014'),
(2, 'Raspberry Pi 2', 'Microsoft’un 2015 konferansına kısa bir ara verilmiş olması yeni haberlerin gelmesine engel değil. Windows 10 IoT Core Insider, geliştirici ön izlemesi küçük cihazlar için yayınladı. Bu küçük cihazların içinde Raspberry Pi 2 küçük bilgisayarı da var.\n\nAyrıca yazılım devi Microsoft, Arduino ile iş ortaklığı kurup Arduino sertifikalı ürünlerin yaygın olarak kullanıldığı evlerdeki kartları Windows ailesine katarak, yazılım ve donanım konusunda büyük bir avantaj elde etti.\n\nÖrneğin bulut bilgisayar teknolojisi, alışık olduğumuz kullanıcı arayüzü gibi bir çok teknolojiyi kullanıyor ve geliştirme konusunda Microsoft’un önemli bir avantajı bulunuyor.', '8 May?s 2014');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `duyurular2`
--

CREATE TABLE IF NOT EXISTS `duyurular2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) NOT NULL,
  `icerik` varchar(512) NOT NULL,
  `tarih` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `duyurular2`
--

INSERT INTO `duyurular2` (`id`, `baslik`, `icerik`, `tarih`) VALUES
(1, 'Arduino', 'Arduino bir G/Ç kartı ve Processing/Wiring dilinin bir uygulamasını içeren geliştirme ortamından oluşan bir fiziksel programlama platformudur. ', '8 Mayıs 2014'),
(2, 'Raspberry Pi', 'Raspberry Pi Birleşik Krallık''ta Raspberry Pi Vakfı tarafından okullarda bilgisayar bilimini öğretmek amacılığıyla geliştirilmiş kredi kartı büyüklüğünde tek kartlı bir bilgisayardır[1]. PardusARM Sürümünün İlk Çalıştığı Modeldir.', '8 Mayıs 2014');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kayitlar`
--

CREATE TABLE IF NOT EXISTS `kayitlar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `arizabaslik` varchar(25) DEFAULT NULL,
  `arizaaciklama` varchar(512) NOT NULL,
  `servisbolumu` varchar(25) NOT NULL,
  `marka` varchar(20) DEFAULT NULL,
  `model` varchar(20) NOT NULL,
  `serino` varchar(20) NOT NULL,
  `gelistarihi` varchar(20) NOT NULL,
  `musteriadi` varchar(25) NOT NULL,
  `musterisoyadi` varchar(25) NOT NULL,
  `musteritel` varchar(25) NOT NULL,
  `durum` varchar(20) DEFAULT NULL,
  `cikistarihi` varchar(20) DEFAULT NULL,
  `notlar` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Tablo döküm verisi `kayitlar`
--

INSERT INTO `kayitlar` (`id`, `arizabaslik`, `arizaaciklama`, `servisbolumu`, `marka`, `model`, `serino`, `gelistarihi`, `musteriadi`, `musterisoyadi`, `musteritel`, `durum`, `cikistarihi`, `notlar`) VALUES
(9, 'Ses     ', '																																			ses kart? bozuk																																			', 'donanim    ', 'dell     ', 'inspron     ', 'n5010', '02.12.2014     ', 'ercan     ', '?encano?lu     ', '05321596652     ', 'Verildi', '-     ', '																																			- \r\n							  \r\n							  \r\n							  \r\n							  \r\n							 ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
