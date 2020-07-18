-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2020. Júl 18. 13:43
-- Kiszolgáló verziója: 10.4.13-MariaDB
-- PHP verzió: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `cr10_oliver_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `cr10_oliver_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr10_oliver_biglibrary`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `media_title` char(30) DEFAULT NULL,
  `published_date` date DEFAULT NULL,
  `author_first_name` char(20) DEFAULT NULL,
  `author_last_name` char(20) DEFAULT NULL,
  `available` enum('unavailable','reserved','available') DEFAULT NULL,
  `publisher_name` char(30) DEFAULT NULL,
  `publisher_city` char(40) DEFAULT NULL,
  `publisher_address` char(30) DEFAULT NULL,
  `company_size` enum('small','medium','large') DEFAULT NULL,
  `code_type` enum('ISBN','EAN','UPC','ENEM') DEFAULT NULL,
  `code_num` int(11) DEFAULT NULL,
  `type_item` enum('CD','DVD','BOOK') DEFAULT NULL,
  `discription` text DEFAULT NULL,
  `image_size` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `library`
--

INSERT INTO `library` (`id`, `media_title`, `published_date`, `author_first_name`, `author_last_name`, `available`, `publisher_name`, `publisher_city`, `publisher_address`, `company_size`, `code_type`, `code_num`, `type_item`, `discription`, `image_size`) VALUES
(1, 'Harry Potter and the secret of', '2002-08-20', 'Rowling', 'J.K.', 'reserved', 'Bloomsburry', 'London', ' Everton evn. 34', 'small', 'ISBN', 84613, 'BOOK', 'Fantasy / Advanture', 'https://images-na.ssl-images-amazon.com/images/I/51v1aAlA9xL._SX318_BO1,204,203,200_.jpg'),
(2, 'Jungel Book', '1894-04-18', 'Richar', 'Kipling', 'available', 'Marcimillian', 'London', ' New road 23', 'medium', 'ISBN', 451215, 'BOOK', 'Fantasy / Advanture', 'https://www.dramaticpublishing.com/media/catalog/product/cache/1/image/300x436/9df78eab33525d08d6e5fb8d27136e95/j/u/jungle_book_cover_j24000.jpg'),
(3, 'The girl on the train', '2016-08-18', 'Paula', 'Hawkins', 'reserved', 'Newbooks', 'New York', ' Everton evn. 34', 'small', 'ISBN', 875466, 'BOOK', 'Thriller', 'https://lh3.googleusercontent.com/proxy/RoiuJl5hpoBzSuxTWAMgmQKQpAXTZgTqbjuywcj-C_3D8Xonu_hpTo2z92gU1V_MFxN_H6OE0yTB0ZTsbfpY8ICXj4MyHcA-BMCpj1iyQEN5Cr2TSyU7BLMiVHGPcgAeFP9fNVjNchVrpoR3swb1PK7W'),
(4, 'Star Wars: New hope', '1984-08-15', 'George', 'Lucas', 'available', 'Lucas film', 'Los Angeles', 'Los Angeles evn. 74', 'large', 'UPC', 846365, 'DVD', 'Fantasy / Action', 'https://www.rd.com/wp-content/uploads/2018/05/shutterstock_5886297fa-scaled.jpg'),
(5, 'Bohemian Rhapsody', '1973-06-14', 'Freddie', 'Mercury', 'reserved', 'London records', 'London', 'Everton st. 78', 'large', 'EAN', 988445, 'CD', 'Rock', 'https://www.udiscovermusic.com/wp-content/uploads/2018/09/Queen-Bohemian-Rhapsody-The-Original-Soundtrack-Cover-Art.jpeg.jpg'),
(6, 'Thriller', '1982-05-20', 'Mikel', 'Jackson', 'available', 'Los Angeles recordes', 'Los Angeles', 'Los Angeles hollywood st. 74', 'large', 'ENEM', 943136, 'CD', 'Pop', 'https://i1.cdn.hhv.de/catalog/shop_detail_zoom/00378/378731.jpg'),
(7, 'Iron-Man', '2008-05-20', 'Jon', 'Favreau', 'reserved', 'Marvel', 'Los Angeles', 'Los Angeles marvelous st. 74', 'large', 'UPC', 988465, 'DVD', 'Fantasy / Action', 'https://img7.indafoto.hu/5/7/24927_de9cf7fc237bf2217c1c576e4f026fee/1581205_a9e441c417a56661dc10531674acb0bf_l.jpg'),
(8, 'Captain America : The first Av', '2011-08-20', 'Joe', 'Johnston', 'unavailable', 'Marvel', 'Los Angeles', 'Los Angeles marvelous st. 74', 'large', 'UPC', 895254, 'DVD', 'Fantasy / Action', 'https://image.tmdb.org/t/p/w500/sDRMEqdvnDRVXOjui0YRMl1gRgF.jpg');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
