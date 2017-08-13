-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 26 Tem 2017, 23:14:46
-- Sunucu sürümü: 10.1.24-MariaDB
-- PHP Sürümü: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `m_blog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bolum_tur`
--

CREATE TABLE `bolum_tur` (
  `bolum_tur_id` int(11) NOT NULL,
  `tur` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `etiket`
--

CREATE TABLE `etiket` (
  `id` int(11) NOT NULL,
  `Html` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL,
  `Css` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL,
  `Php` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL,
  `Github` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL,
  `Teknoloji` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `etiket`
--

INSERT INTO `etiket` (`id`, `Html`, `Css`, `Php`, `Github`, `Teknoloji`) VALUES
(1, 'Html', 'Css', 'Php', 'Github', 'Teknoloji'),
(2, 'Html', 'Css', 'Php', 'Github', 'Teknoloji');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gonderiler`
--

CREATE TABLE `gonderiler` (
  `id` int(11) NOT NULL,
  `baslik` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `icerik` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `zaman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `etiketler` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `yazar` varchar(225) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kategori` int(11) NOT NULL,
  `gosterim` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `gonderiler`
--

INSERT INTO `gonderiler` (`id`, `baslik`, `icerik`, `zaman`, `etiketler`, `yazar`, `kategori`, `gosterim`) VALUES
(1, 'HTML NEDİR?', 'HTML’nin bir programlama dili değil bir betik dil olduğunu öğrenildi. Ayrıca HTML web sitesin de arayüz geliştirmemize yaradığı öğrenildi. HTML açılımının Hyper Text Markup language olduğu ve HTML dosyalarının aktarımı için HTTP (Hyper Text Transfer Protocol) kullanılır. HTML dosyaları sunucu bilgisayarın sabit diskinde .html ya da .htm uzantısı ile saklanır. Yazdığımız html dosyaları düz yazı dosyalarından başka bir şey değildir. Bir siteye girdiğimiz zaman bize görüntülenen ilk sayfa index.html, index.htm, index.asp, index.php ya da default.htm dosyalarından birisidir. Html WC3(World Wide Web Consortium) tarafından standartlaştırılmıştır.\r\nhtml’nin dosya uzantısı ise “.html” dir.', '2017-07-23 12:33:00', NULL, 'Mustafa BIKMAZ', 0, 1),
(3, 'CSS NEDİR?', '\r\nDate: 10 Temmuz 2017\r\nAuthor: bil154471030\r\n0 Yorumlar\r\n \r\n\r\n \r\n\r\nHtml’yi bir insanın iskelet yapısını oluşturduğunu düşünürsek css de insanın elbiselerini et ve deri yapısını oluşturur. CSS “Cascading Style Sheets” kelimesinin baş harflerinden oluşmaktadır. Anlamı: basamaklı sitil sayfası demektir. Javascript’in özelleştirilmiş halidir. Css bir programlama dili değil bir markup dilidir. Css html elementlerinin web sayfasında nasıl görüntüleceğini belirleriz. Css dosya uzantısı ise “.ccs” dir. Css üç farklı kullanım şekli vardır.', '2017-07-23 12:55:00', NULL, 'Mustafa BIKMAZ', 0, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `id` int(11) NOT NULL,
  `ad` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`id`, `ad`) VALUES
(1, 'Html'),
(2, 'Html'),
(3, 'Css'),
(4, 'Css'),
(5, 'Php'),
(6, 'Php'),
(7, 'Github'),
(8, 'Github'),
(9, 'Teknoloji'),
(10, 'Teknoloji');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `kad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `parola` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `kad`, `parola`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menüler`
--

CREATE TABLE `menüler` (
  `id` int(11) NOT NULL,
  `anasayfa` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `hakkinda` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `galeri` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `menüler`
--

INSERT INTO `menüler` (`id`, `anasayfa`, `hakkinda`, `iletisim`, `galeri`) VALUES
(1, 'index.php', 'hakkinda.php', 'iletisim.php', 'galeri.php'),
(2, 'index.php', 'hakkinda.php', 'iletisim.php', 'galeri.php');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `site_ayar`
--

CREATE TABLE `site_ayar` (
  `site_ayar_id` int(11) NOT NULL,
  `bolum_turu` varchar(20) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `adi` varchar(200) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `url` varchar(200) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `siralama` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `site_ayar`
--

INSERT INTO `site_ayar` (`site_ayar_id`, `bolum_turu`, `adi`, `aciklama`, `url`, `siralama`) VALUES
(1, 'baslik', 'Mustafa BIKMAZ', 'Amat?r blo?un,profesyonel yazar?', 'index.php', NULL),
(2, 'footer', 'MUSTAFA BIKMAZ', 'This is Photoshop\'s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.\r\n\r\nLorem ipsum Sed nulla deserunt voluptate elit occaecat culpa cupidatat sit irure sint sint incididunt cupidatat esse in Ut sed commodo tempor consequat culpa fugiat incididunt.', NULL, NULL),
(5, 'menu', 'Anasayfa', NULL, 'index.php', 1),
(6, 'menu', 'Hakk?nda', NULL, 'hakkinda.php', 2),
(7, 'menu', 'ILET?SIM', NULL, 'iletisim.php', 3),
(8, 'menu', 'Galeri', NULL, 'galeri.php', 4);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sosyal`
--

CREATE TABLE `sosyal` (
  `id` int(11) NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `g_plus` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `github` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `flickr` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `skype` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `sosyal`
--

INSERT INTO `sosyal` (`id`, `facebook`, `twitter`, `g_plus`, `github`, `instagram`, `flickr`, `skype`) VALUES
(1, 'https://www.facebook.com/', 'https://wwww.twitter.com/', 'https://plus.google.com/', 'https://wwww.github.com/', 'https://wwww.instagaram.com/', 'https://wwww.flickr.com/', 'https://www.skype.com/tr/');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `website`
--

CREATE TABLE `website` (
  `id` int(11) NOT NULL,
  `site_basligi` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_slogani` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `website`
--

INSERT INTO `website` (`id`, `site_basligi`, `site_slogani`) VALUES
(1, 'Mustafa BIKMAZ', 'Amatör bloğun,profesyonel yazarı'),
(2, '', NULL),
(4, '', NULL),
(5, '', NULL),
(6, '', NULL),
(7, '', NULL),
(8, '', NULL),
(9, '', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `id` int(11) NOT NULL,
  `kullanici` int(11) NOT NULL,
  `icerik` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gonderi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `bolum_tur`
--
ALTER TABLE `bolum_tur`
  ADD PRIMARY KEY (`bolum_tur_id`);

--
-- Tablo için indeksler `etiket`
--
ALTER TABLE `etiket`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `gonderiler`
--
ALTER TABLE `gonderiler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kad` (`kad`);

--
-- Tablo için indeksler `menüler`
--
ALTER TABLE `menüler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `site_ayar`
--
ALTER TABLE `site_ayar`
  ADD PRIMARY KEY (`site_ayar_id`);

--
-- Tablo için indeksler `sosyal`
--
ALTER TABLE `sosyal`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `bolum_tur`
--
ALTER TABLE `bolum_tur`
  MODIFY `bolum_tur_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `etiket`
--
ALTER TABLE `etiket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `gonderiler`
--
ALTER TABLE `gonderiler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `menüler`
--
ALTER TABLE `menüler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `site_ayar`
--
ALTER TABLE `site_ayar`
  MODIFY `site_ayar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Tablo için AUTO_INCREMENT değeri `sosyal`
--
ALTER TABLE `sosyal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `website`
--
ALTER TABLE `website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
