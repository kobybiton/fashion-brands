-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2018 at 03:17 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `url`, `article`, `image`, `updated_at`, `created_at`) VALUES
(1, 'Sunglasses', 'sunglasses', 'Things get shady this season in mirrored and metal frames, handmade styles and novelty round sunglasses. We still love the classics though - Ray-Ban Aviators and Quay Eyeware Wayfarers, we\'re looking at you<br>', 'uk5iQcqYC2o7Kuive0AgUd3iJfYFOm.jpg', '2015-07-01 14:15:18', '2015-07-01 14:15:18'),
(2, 'Bags', 'bags', 'Look no further for the bags of the moment. Bags like our retro backpacks, clutches and totes are our essential carry-ons. Choose shiny metallics or feel good textures for a full fashion statement<br>', 'dBNTsSCZgTz5G8Afw1OKVLHnKb5t6e.jpg', '2015-07-01 14:16:04', '2015-07-01 14:16:04'),
(3, 'Shoes', 'shoes', 'Buying Brands shoes is like buying a car. You should have a good idea of what you want when you walk into the store (or onto the lot), and you need to walk away with something you\'ll be comfortable wearing (and being seen in) for at least a few years.', 'NMabc6Sjjrwj98N4eZRukLynNaYX1q.jpg', '2015-07-12 23:51:18', '2015-07-12 23:51:18'),
(4, 'Discounts', 'discounts', '   Play Brand<a class=\"kgtqpgvi\" href=\"#65305851\" title=\"Click to Continue > by DealXplorer\"> Game<img src=\"http://cdncache-a.akamaihd.net/items/it/img/arrow-10x10.png\"></a> and get 50% OFF !!!', 'oT0ezIJVKQycD2NOf0SqpfPqKiRdrp.jpg', '2015-07-13 11:55:16', '2015-07-01 14:16:44');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `article`, `updated_at`, `created_at`) VALUES
(1, 'oshi', 'oshi@walla.com', 'like', 'i lke this website', '2015-07-09 20:14:16', '2015-07-09 20:14:16'),
(2, 'koby', 'kobybiton@gmail.com', 'like', 'i like this website!!!', '2015-07-10 16:48:10', '2015-07-10 16:48:10'),
(3, 'omry', 'zabary@walla.co.il', 'good deals', '<span style=\"line-height: 22.2222232818604px;\">there are very good deals in this website</span><br>', '2015-07-13 14:27:44', '2015-07-13 14:27:44'),
(5, 'rotem', 'weiss@gmail.com', 'ossom game!', 'the game is simple and very cool and also gives you 50% OFF!!!', '2015-07-13 14:30:06', '2015-07-13 14:30:06'),
(6, 'erez', 'asulin@yahoo.com', 'amazing UI', 'everything is very easy tu use and very comfortable, also beatifull !', '2015-07-13 14:32:19', '2015-07-13 14:32:19');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `menu_id`, `title`, `article`, `updated_at`, `created_at`) VALUES
(1, 1, 'About us', 'Check about our company', '2015-06-08 00:00:00', '2015-06-08 00:00:00'),
(2, 1, 'About us in israel', 'Check about us in israel', '2015-06-08 00:00:00', '2015-06-08 00:00:00'),
(3, 2, 'Services', 'Check our services ', '2015-06-08 00:00:00', '2015-06-08 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `update_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `data` text NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `data`, `updated_at`, `created_at`) VALUES
(1, 5, '{\"8\":{\"id\":\"8\",\"name\":\"Silver \",\"price\":280,\"quantity\":1,\"attributes\":{\"img\":\"iHUaILFB5HjBNqsZGvTRnhPrHK2TRi.jpg\",\"url\":\"silver-sunglasses\",\"cat\":1},\"conditions\":[]},\"2\":{\"id\":\"2\",\"name\":\"Dior \",\"price\":440,\"quantity\":1,\"attributes\":{\"img\":\"Z0zNZ2lW9C8xUotR0fFcMMrp3UAALV.jpg\",\"url\":\"dior-bag\",\"cat\":2},\"conditions\":[]},\"9\":{\"id\":\"9\",\"name\":\"Saucony \",\"price\":380,\"quantity\":2,\"attributes\":{\"img\":\"FquORsuq4c1TsHCoLzLNCpc60GhdF0.jpg\",\"url\":\"saucony-shoes\",\"cat\":3},\"conditions\":[]}}', '2015-07-13 15:17:35', '2015-07-13 15:17:35'),
(2, 3, '{\"6\":{\"id\":\"6\",\"name\":\"RayBan \",\"price\":400,\"quantity\":1,\"attributes\":{\"img\":\"59jBbT4gwEWdAjDxzYs2YOcpv6mXMr.jpg\",\"url\":\"rayban-sunglasses\",\"cat\":1},\"conditions\":[]},\"4\":{\"id\":\"4\",\"name\":\"Gucci \",\"price\":690,\"quantity\":1,\"attributes\":{\"img\":\"xuNDUZu970Pejpu43awZARrVqw17uH.jpg\",\"url\":\"gucci-shoes\",\"cat\":3},\"conditions\":[]},\"11\":{\"id\":\"11\",\"name\":\"Boss \",\"price\":450,\"quantity\":2,\"attributes\":{\"img\":\"qq5ocCDApnsNjrDIMaSoJPxgC17rol.jpg\",\"url\":\"boss-sunglasses\",\"cat\":1},\"conditions\":[]}}', '2015-07-13 15:20:34', '2015-07-13 15:20:34'),
(3, 2, '{\"14\":{\"id\":\"14\",\"name\":\"Hogan \",\"price\":620,\"quantity\":1,\"attributes\":{\"img\":\"wnJOhA9NMs5Zs99Dca1tGQEOJG2HCZ.jpg\",\"url\":\"hogan-shoes\",\"cat\":3},\"conditions\":[]},\"8\":{\"id\":\"8\",\"name\":\"Silver \",\"price\":280,\"quantity\":1,\"attributes\":{\"img\":\"iHUaILFB5HjBNqsZGvTRnhPrHK2TRi.jpg\",\"url\":\"silver-sunglasses\",\"cat\":1},\"conditions\":[]},\"4\":{\"id\":\"4\",\"name\":\"Gucci \",\"price\":690,\"quantity\":1,\"attributes\":{\"img\":\"xuNDUZu970Pejpu43awZARrVqw17uH.jpg\",\"url\":\"gucci-shoes\",\"cat\":3},\"conditions\":[]}}', '2015-07-13 15:22:31', '2015-07-13 15:22:31'),
(4, 9, '{\"6\":{\"id\":\"6\",\"name\":\"RayBan \",\"price\":400,\"quantity\":1,\"attributes\":{\"img\":\"59jBbT4gwEWdAjDxzYs2YOcpv6mXMr.jpg\",\"url\":\"rayban-sunglasses\",\"cat\":1},\"conditions\":[]},\"3\":{\"id\":\"3\",\"name\":\"Chanel \",\"price\":470,\"quantity\":1,\"attributes\":{\"img\":\"vkX6VwAePhZEIKXuX1Km5rPagSgbTe.jpg\",\"url\":\"chanel-shoes\",\"cat\":3},\"conditions\":[]},\"12\":{\"id\":\"12\",\"name\":\"Dolce Gabbana\",\"price\":550,\"quantity\":1,\"attributes\":{\"img\":\"FfYaifHE8Hy8DPYNqjiPrNPnou9BIC.jpg\",\"url\":\"Dolce-Gabbana-shoes\",\"cat\":3},\"conditions\":[]}}', '2015-07-13 15:25:00', '2015-07-13 15:25:00'),
(5, 5, '{\"6\":{\"id\":\"6\",\"name\":\"RayBan \",\"price\":400,\"quantity\":1,\"attributes\":{\"img\":\"59jBbT4gwEWdAjDxzYs2YOcpv6mXMr.jpg\",\"url\":\"rayban-sunglasses\",\"cat\":1},\"conditions\":[]},\"8\":{\"id\":\"8\",\"name\":\"Silver \",\"price\":280,\"quantity\":1,\"attributes\":{\"img\":\"iHUaILFB5HjBNqsZGvTRnhPrHK2TRi.jpg\",\"url\":\"silver-sunglasses\",\"cat\":1},\"conditions\":[]},\"11\":{\"id\":\"11\",\"name\":\"Boss \",\"price\":450,\"quantity\":1,\"attributes\":{\"img\":\"qq5ocCDApnsNjrDIMaSoJPxgC17rol.jpg\",\"url\":\"boss-sunglasses\",\"cat\":1},\"conditions\":[]}}', '2015-07-13 15:26:50', '2015-07-13 15:26:50'),
(6, 5, '{\"10\":{\"id\":\"10\",\"name\":\"Gucci \",\"price\":660,\"quantity\":1,\"attributes\":{\"img\":\"asudukT9SrCQjqnSgF3GOdMIOaLrj0.jpg\",\"url\":\"gucci-bag\",\"cat\":2},\"conditions\":[]},\"14\":{\"id\":\"14\",\"name\":\"Hogan \",\"price\":620,\"quantity\":2,\"attributes\":{\"img\":\"wnJOhA9NMs5Zs99Dca1tGQEOJG2HCZ.jpg\",\"url\":\"hogan-shoes\",\"cat\":3},\"conditions\":[]},\"11\":{\"id\":\"11\",\"name\":\"Boss \",\"price\":450,\"quantity\":2,\"attributes\":{\"img\":\"qq5ocCDApnsNjrDIMaSoJPxgC17rol.jpg\",\"url\":\"boss-sunglasses\",\"cat\":1},\"conditions\":[]}}', '2015-07-13 15:28:20', '2015-07-13 15:28:20'),
(7, 9, '{\"6\":{\"id\":\"6\",\"name\":\"RayBan \",\"price\":400,\"quantity\":1,\"attributes\":{\"img\":\"59jBbT4gwEWdAjDxzYs2YOcpv6mXMr.jpg\",\"url\":\"rayban-sunglasses\",\"cat\":1},\"conditions\":[]},\"9\":{\"id\":\"9\",\"name\":\"Saucony \",\"price\":380,\"quantity\":1,\"attributes\":{\"img\":\"FquORsuq4c1TsHCoLzLNCpc60GhdF0.jpg\",\"url\":\"saucony-shoes\",\"cat\":3},\"conditions\":[]},\"26\":{\"id\":\"26\",\"name\":\"Okley\",\"price\":370,\"quantity\":1,\"attributes\":{\"img\":\"uyB3SX8IAyCkrSvtoiDQMxBuH2sXsy.jpg\",\"url\":\"okley-sunglasses\",\"cat\":1},\"conditions\":[]}}', '2015-07-13 21:09:01', '2015-07-13 21:09:01'),
(8, 5, '{\"2\":{\"id\":\"2\",\"name\":\"Dior \",\"price\":440,\"quantity\":1,\"attributes\":{\"img\":\"Z0zNZ2lW9C8xUotR0fFcMMrp3UAALV.jpg\",\"url\":\"dior-bag\",\"cat\":2},\"conditions\":[]}}', '2018-12-17 10:59:50', '2018-12-17 10:59:50'),
(9, 5, '{\"2\":{\"id\":\"2\",\"name\":\"Dior \",\"price\":440,\"quantity\":1,\"attributes\":{\"img\":\"Z0zNZ2lW9C8xUotR0fFcMMrp3UAALV.jpg\",\"url\":\"dior-bag\",\"cat\":2},\"conditions\":[]}}', '2018-12-21 21:46:19', '2018-12-21 21:46:19');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categorie_id`, `title`, `article`, `price`, `url`, `image`, `updated_at`, `created_at`) VALUES
(1, 2, 'Ralf Lauren ', '<span style=\"font-size:10.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;mso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:HE\">Haircalf Ricky Chain Bag</span><span style=\"font-size:10.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;mso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:HE\">Haircalf Ricky Chain Bag</span><br>', '550.00', 'ralf-lauren-bag', 'TXbnh6pXloys933MdkmPNzkGoeB6oi.jpg', '2015-06-25 08:18:30', '2015-06-25 08:18:30'),
(2, 2, 'Dior ', '<span style=\"font-size:10.0pt;line-height:107%;\r\nfont-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;mso-fareast-font-family:\r\nCalibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;\r\nmso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi;mso-ansi-language:\r\nEN-US;mso-fareast-language:EN-US;mso-bidi-language:HE\">&nbsp;552 christian dior handbag and tote 2018 black\r\ngm</span><br>', '440.00', 'dior-bag', 'Z0zNZ2lW9C8xUotR0fFcMMrp3UAALV.jpg', '2015-06-25 08:23:28', '2015-06-25 08:23:28'),
(3, 3, 'Chanel ', '<span style=\"font-size:10.0pt;line-height:107%;\r\nfont-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;mso-fareast-font-family:\r\nCalibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;\r\nmso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi;mso-ansi-language:\r\nEN-US;mso-fareast-language:EN-US;mso-bidi-language:HE\">&nbsp;beige leather heels</span><br>', '470.00', 'chanel-shoes', 'vkX6VwAePhZEIKXuX1Km5rPagSgbTe.jpg', '2015-06-25 08:32:41', '2015-06-25 08:32:41'),
(4, 3, 'Gucci ', '<span style=\"font-size:10.0pt;line-height:107%;\r\nfont-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;mso-fareast-font-family:\r\nCalibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;\r\nmso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi;mso-ansi-language:\r\nEN-US;mso-fareast-language:EN-US;mso-bidi-language:HE\">golden sneakers men shoe</span><br>', '690.00', 'gucci-shoes', 'xuNDUZu970Pejpu43awZARrVqw17uH.jpg', '2015-06-25 08:35:28', '2015-06-25 08:35:28'),
(5, 3, 'Manolo Blahnik ', '<span style=\"font-size:10.0pt;line-height:107%;\r\nfont-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;mso-fareast-font-family:\r\nCalibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;\r\nmso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi;mso-ansi-language:\r\nEN-US;mso-fareast-language:EN-US;mso-bidi-language:HE\">blue luxury label embedded\r\ndiamonds</span><br>', '5800.00', 'manolo-blahnik-shoes', 'V3Kgle0Lt1djYJvn63jGTlaWqI7wfb.jpg', '2015-06-25 08:36:19', '2015-06-25 08:36:19'),
(6, 1, 'RayBan ', '  <span style=\"font-size:10.0pt;line-height:107%;\r\nfont-family:\" calibri\",sans-serif;mso-ascii-theme-font:minor-latin;mso-fareast-font-family:=\"\" calibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;=\"\" mso-bidi-font-family:arial;mso-bidi-theme-font:minor-bidi;mso-ansi-language:=\"\" en-us;mso-fareast-language:en-us;mso-bidi-language:he\"=\"\">RayBan pilot style brownish blacked</span><span style=\"font-family: Calibri, sans-serif; font-size: 13.3333330154419px; line-height: 14.2666664123535px;\">&nbsp;poloryzed</span><span style=\"font-size:10.0pt;line-height:107%;\r\nfont-family:\" calibri\",sans-serif;mso-ascii-theme-font:minor-latin;mso-fareast-font-family:=\"\" calibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;=\"\" mso-bidi-font-family:arial;mso-bidi-theme-font:minor-bidi;mso-ansi-language:=\"\" en-us;mso-fareast-language:en-us;mso-bidi-language:he\"=\"\">&nbsp;sunglasses</span><br>', '400.00', 'rayban-sunglasses', '59jBbT4gwEWdAjDxzYs2YOcpv6mXMr.jpg', '2015-07-13 00:42:17', '2015-06-25 08:39:31'),
(7, 2, 'Celvin Klein ', '<span style=\"font-size:10.0pt;line-height:107%;\r\nfont-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;mso-fareast-font-family:\r\nCalibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;\r\nmso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi;mso-ansi-language:\r\nEN-US;mso-fareast-language:EN-US;mso-bidi-language:HE\">Celvin Klein grey ledder\r\nEb657 collection 2015</span><br>', '350.00', 'celvin-klein-bag', 'qGn4ptp2OR9TGHQkZnVfZifVzuxKXd.jpg', '2015-06-25 08:40:52', '2015-06-25 08:40:52'),
(8, 1, 'Silver ', '   <span style=\"font-size:10.0pt;line-height:107%;\r\nfont-family:\" calibri\",sans-serif;mso-ascii-theme-font:minor-latin;mso-fareast-font-family:=\"\" calibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;=\"\" mso-bidi-font-family:arial;mso-bidi-theme-font:minor-bidi;mso-ansi-language:=\"\" en-us;mso-fareast-language:en-us;mso-bidi-language:he\"=\"\">black squered Silver\r\nsunglasses EGss189 model 2013</span><br>', '280.00', 'silver-sunglasses', 'iHUaILFB5HjBNqsZGvTRnhPrHK2TRi.jpg', '2015-07-13 00:40:00', '2015-06-25 08:41:53'),
(9, 3, 'Saucony ', '<span style=\"font-size:10.0pt;line-height:107%;\r\nfont-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;mso-fareast-font-family:\r\nCalibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;\r\nmso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi;mso-ansi-language:\r\nEN-US;mso-fareast-language:EN-US;mso-bidi-language:HE\">Saucony Kinvara - yellow\r\ngreenish runnig shoes</span><br>', '380.00', 'saucony-shoes', 'FquORsuq4c1TsHCoLzLNCpc60GhdF0.jpg', '2015-06-25 08:43:55', '2015-06-25 08:43:55'),
(10, 2, 'Gucci ', '<span style=\"font-size:10.0pt;line-height:107%;\r\nfont-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;mso-fareast-font-family:\r\nCalibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;\r\nmso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi;mso-ansi-language:\r\nEN-US;mso-fareast-language:EN-US;mso-bidi-language:HE\">metal ledder luxury\r\nGucci bag model ER350 model 2015</span><br>', '660.00', 'gucci-bag', 'asudukT9SrCQjqnSgF3GOdMIOaLrj0.jpg', '2015-06-25 08:45:42', '2015-06-25 08:45:42'),
(11, 1, 'Boss ', '<span style=\"font-size:10.0pt;line-height:107%;\r\nfont-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;mso-fareast-font-family:\r\nCalibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;\r\nmso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi;mso-ansi-language:\r\nEN-US;mso-fareast-language:EN-US;mso-bidi-language:HE\">pilot style blacked Boss\r\nsunglasses</span><br>', '450.00', 'boss-sunglasses', 'qq5ocCDApnsNjrDIMaSoJPxgC17rol.jpg', '2015-06-25 08:46:23', '2015-06-25 08:46:23'),
(12, 3, 'Dolce Gabbana', 'Dolce Gabbana golden luxury brand new2015 collection shoes', '550.00', 'Dolce-Gabbana-shoes', 'FfYaifHE8Hy8DPYNqjiPrNPnou9BIC.jpg', '2015-06-25 08:47:13', '2015-06-25 08:47:13'),
(13, 1, 'Versace ', '<span style=\"font-size:10.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;mso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:HE\">Versace butterfly modelBR500 2010 sunglasses&nbsp;</span><br>', '310.00', 'versace-sunglasses', 'JHgnF1hJcuWIs9D59EsfDiykJmGqxY.jpg', '2015-06-25 08:48:08', '2015-06-25 08:48:08'),
(14, 3, 'Hogan ', '<span style=\"font-size:10.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;mso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:HE\">Hogan snickers men shoes</span><br>', '620.00', 'hogan-shoes', 'wnJOhA9NMs5Zs99Dca1tGQEOJG2HCZ.jpg', '2015-06-25 08:49:47', '2015-06-25 08:49:47'),
(15, 2, 'DNKY', '     DKNY black leather bag', '550.00', 'dnky-bag', 'CMfrshHAvwtIJ1hle5CNB2AmckMqwU.jpg', '2015-06-28 11:33:00', '2015-06-25 09:11:15'),
(20, 4, 'Gucci', '<span style=\"font-family: Calibri, sans-serif; font-size: 13.3333330154419px; line-height: 14.2666664123535px; text-align: center; background-color: rgb(245, 245, 245);\">metal ledder luxury Gucci bag model ER350 model 2015</span><br>', '330.00', 'gucci-bag-discount', 'O1OEdOaqSlB2M2sDSqL40Ud2xOJxBb.jpg', '2015-07-13 00:19:09', '2015-07-13 00:19:09'),
(21, 4, 'Silver', '<span style=\"font-size: 13.3333330154419px; line-height: 14.2666664123535px;\">black squered Silver sunglasses EGss189 model 2013</span><br>', '140.00', 'silver-sunglasses-discount', 'MkEox7PqOEnHup3oqsITPQTPk1rVNa.jpg', '2015-07-13 00:40:42', '2015-07-13 00:40:42'),
(22, 4, 'RayBan', '<span calibri\",sans-serif;mso-ascii-theme-font:minor-latin;mso-fareast-font-family:=\"\" calibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;=\"\" mso-bidi-font-family:arial;mso-bidi-theme-font:minor-bidi;mso-ansi-language:=\"\" en-us;mso-fareast-language:en-us;mso-bidi-language:he\"=\"\" style=\"font-size: 10pt; line-height: 14.2666664123535px;\">RayBan pilot style brownish blacked</span><span style=\"font-family: Calibri, sans-serif; font-size: 13.3333330154419px; line-height: 14.2666664123535px;\">&nbsp;poloryzed</span><span calibri\",sans-serif;mso-ascii-theme-font:minor-latin;mso-fareast-font-family:=\"\" calibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;=\"\" mso-bidi-font-family:arial;mso-bidi-theme-font:minor-bidi;mso-ansi-language:=\"\" en-us;mso-fareast-language:en-us;mso-bidi-language:he\"=\"\" style=\"font-size: 10pt; line-height: 14.2666664123535px;\">&nbsp;sunglasses</span><br>', '200.00', 'ray-ban-sunglasses-discount', 'ZOBsIub6LdgACanCjzV2NImHhQr24X.jpg', '2015-07-13 00:43:16', '2015-07-13 00:43:16'),
(23, 4, 'Saucony', '<span style=\"font-size: 13.3333330154419px; line-height: 14.2666664123535px;\">Saucony Kinvara - yellow greenish runnig shoes</span><br>', '190.00', 'saucony-shoes-discount', 'XuJR5VHwGZzgOCeFoCL3Eh9mU2O4mq.jpg', '2015-07-13 00:46:15', '2015-07-13 00:46:15'),
(24, 4, 'Hogan', '<span style=\"font-size: 13.3333330154419px; line-height: 14.2666664123535px;\">Hogan snickers men shoes</span><br>', '310.00', 'hogan-shoes-discount', '8vFOyWuq7ld3G06ctQ7AAcKeZDUsZQ.jpg', '2015-07-13 00:49:08', '2015-07-13 00:49:08'),
(25, 4, 'Ralf Lauren', '<span calibri\",sans-serif;mso-ascii-theme-font:minor-latin;mso-fareast-font-family:calibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:arial;mso-bidi-theme-font:minor-bidi;mso-ansi-language:en-us;mso-fareast-language:en-us;mso-bidi-language:he\"=\"\" style=\"font-size: 10pt; line-height: 14.2666664123535px;\">Haircalf Ricky Chain Bag</span><span calibri\",sans-serif;mso-ascii-theme-font:minor-latin;mso-fareast-font-family:calibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:arial;mso-bidi-theme-font:minor-bidi;mso-ansi-language:en-us;mso-fareast-language:en-us;mso-bidi-language:he\"=\"\" style=\"font-size: 10pt; line-height: 14.2666664123535px;\">Haircalf Ricky Chain Bag</span><br>', '275.00', 'ralf-lauren-bag-discount', 'NGqnL0mxonXm9EzNvU9tb7ZR4qujmO.jpg', '2015-07-13 00:52:09', '2015-07-13 00:52:09'),
(26, 1, 'Okley', 'Okley&nbsp;<a href=\"https://www.sunglasses-shop.co.uk/oakley/radarlock/grey-smoke-oo9181-48/47405.aspx\" title=\"Oakley Radarlock Path Vented Grey smoke OO9181-48\" style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: normal;\">Radarlock Path Vented Grey smoke OO9181-48</a>', '370.00', 'okley-sunglasses', 'uyB3SX8IAyCkrSvtoiDQMxBuH2sXsy.jpg', '2015-07-13 10:36:00', '2015-07-13 10:36:00'),
(27, 1, 'Dolce Gabbana', 'Dolce Gabbana blueish black sunglasses DOLI collection<br>', '640.00', 'dolce-gabbana-sunglasses', 'SqcuQNIs9qif0PL5zt6O4toF7wMsYP.jpg', '2015-07-13 10:42:28', '2015-07-13 10:42:28'),
(28, 2, 'Prada', 'Prada black leather luxury bag serial nu. E850', '380.00', 'prada-bag', '4Apb8i0wUkcYBYqAaFXxOQMXWnNuuJ.jpg', '2015-07-13 10:45:21', '2015-07-13 10:45:21');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`user_id`, `role_id`) VALUES
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(5, 1),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `updated_at`, `created_at`) VALUES
(2, 'rotem', 'weiss@gmail.com', '$2y$10$42QEdkKNWMuYK/lowF5xCeK2aVTBjyRLKbZY9lXztB31Qo9aRWf3C', '2015-06-10 14:02:31', '2015-06-10 14:02:31'),
(3, 'erez', 'asulin@yahoo.com', '$2y$10$Ct7oUbXuBssFdOXA/Udl3OYj.xca6ACKGjn3NxX.rPZimfSEweUtO', '2015-06-10 14:02:47', '2015-06-10 14:02:47'),
(5, 'koby', 'kobybiton@gmail.com', '$2y$10$8W5QCPIEPYDK5pXjnkupRut.LG6.RzgUNAbwAFa61sWumNR40/3m6', '2015-06-10 00:00:00', '2015-06-10 00:00:00'),
(9, 'omry', 'zabary@walla.co.il', '$2y$10$58Zjj2ZCLUxO9BDuPtQ7.ea5kBaBFTS9kvhfscper95abYJ7IAma.', '2015-07-13 15:23:15', '2015-07-13 15:23:15'),
(10, 'test', 'test@test.test', '$2y$10$hSyScMcFBP9IzkSjFDuSj.P2AaqKp./CZ0NLuIzWYiuM57eQluHCe', '2018-12-13 20:41:14', '2018-12-13 20:41:14'),
(12, 'koby', 'kobybitonamazon@gmail.com', '$2y$10$J2w00Bp8Tg/QLr8iZ/X/zeJL2ba7zTPZyXHOvKgWWB2.lDHYYt8uO', '2018-12-13 20:53:33', '2018-12-13 20:53:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
