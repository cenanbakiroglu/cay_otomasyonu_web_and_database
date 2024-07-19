-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 11 Tem 2023, 22:23:43
-- Sunucu sürümü: 8.0.27
-- PHP Sürümü: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `projee`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `adminler`
--

DROP TABLE IF EXISTS `adminler`;
CREATE TABLE IF NOT EXISTS `adminler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ad` varchar(50) NOT NULL,
  `soyad` varchar(50) NOT NULL,
  `kullanici_adi` varchar(50) NOT NULL,
  `sifre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Tablo döküm verisi `adminler`
--

INSERT INTO `adminler` (`id`, `ad`, `soyad`, `kullanici_adi`, `sifre`) VALUES
(1, 'admin', 'admin', 'admin', '1234');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `icerik`
--

DROP TABLE IF EXISTS `icerik`;
CREATE TABLE IF NOT EXISTS `icerik` (
  `id` int NOT NULL AUTO_INCREMENT,
  `hakkimizda` text NOT NULL,
  `iletisim` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Tablo döküm verisi `icerik`
--

INSERT INTO `icerik` (`id`, `hakkimizda`, `iletisim`) VALUES
(1, 'Lorem ipsum dolor sit amet,Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis magni ad rerum cumque ipsa amet quos aliquid modi, voluptatibus recusandae ipsam voluptate corrupti labore voluptatum quod rem nihil! Blanditiis, libero! consectetur adipisicing elit. Debitis magni ad rerum cumque ipsa amet quos aliquid modi, voluptatibus recusandae ipsam voluptate corrupti labore voluptatum quod rem nihil! Blanditiis, libero!', '7777777777');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepet`
--

DROP TABLE IF EXISTS `sepet`;
CREATE TABLE IF NOT EXISTS `sepet` (
  `id` int NOT NULL AUTO_INCREMENT,
  `urun_id` int NOT NULL,
  `adet` int NOT NULL,
  `musteri_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparisler`
--

DROP TABLE IF EXISTS `siparisler`;
CREATE TABLE IF NOT EXISTS `siparisler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `urun_id` int NOT NULL,
  `adet` int NOT NULL,
  `musteri_id` int NOT NULL,
  `durum` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

DROP TABLE IF EXISTS `urunler`;
CREATE TABLE IF NOT EXISTS `urunler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ad` varchar(500) NOT NULL,
  `stok` int NOT NULL,
  `marka` varchar(500) NOT NULL,
  `fiyat` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `ad`, `stok`, `marka`, `fiyat`) VALUES
(1, '2 KG RİZE ÇAYI', 200, 'LİPTON', 107),
(2, '5 KG DEMLİK ÇAY', 47, 'ÇAYKUR', 135),
(3, 'Sallama çay', 216, 'DOĞUŞ ÇAY', 37.5),
(4, 'Ihlamur', 140, 'DOĞUŞ ÇAY', 75.5),
(5, 'Kayısı Çayı', 100, 'DOĞUŞ ÇAY', 50);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

DROP TABLE IF EXISTS `uyeler`;
CREATE TABLE IF NOT EXISTS `uyeler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ad` varchar(50) NOT NULL,
  `soyad` varchar(50) NOT NULL,
  `kullanici_adi` varchar(50) NOT NULL,
  `sifre` varchar(255) NOT NULL,
  `adres` varchar(1000) NOT NULL,
  `telefon` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `ad`, `soyad`, `kullanici_adi`, `sifre`, `adres`, `telefon`) VALUES
(1, 'Üye', 'ÜYE', 'uye1', '1234', 'Rize', '5555555555');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
