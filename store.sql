-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 13, 2020 at 04:24 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `Name` varchar(20) DEFAULT NULL,
  `email_id` varchar(40) DEFAULT NULL,
  `message` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`Name`, `email_id`, `message`) VALUES
('Lovish Aggarwal', 'lovishagg@gmail.com', 'hello '),
('Lovish Aggarwal', 'lovishagg1@gmail.com', '@nd Complaint'),
('Lovish Aggarwal', 'lovishagg1@gmail.com', '@nd Complaint'),
('Lovish Aggarwal', 'lovishaggfsev@gmail.com', 'mvpokvwkv nw vy49 ioegfm pwf\r\nf noieatgj ntby8 gpoeecl'),
('Lovish Aggarwal', 'lovishaggmcsov@gmail.com', '5814065350187 /rojg nuigy uahfm,x m, rjghvjen  hogeikn poqa,cla[pwf koiq5 yjgfm lk igjioreh w48ytv8 , gg '),
('Lovish Aggarwal', 'lovishagg@gmail.com', 'vjrsbkvm/rgkbksnhaoi'),
('Lovish Aggarwal', 'lovishagg@gmail.com', 'cjsoicmwn'),
('', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(100) NOT NULL,
  `item_id` int(20) NOT NULL,
  `Price` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `item_id`, `Price`) VALUES
(4, 1, '17,999'),
(4, 2, '1,10,000'),
(5, 1, '17,999'),
(5, 3, '39,999'),
(5, 5, '2,00,000'),
(6, 5, '2,00,000'),
(6, 1, '17,999'),
(8, 2, '1,10,000'),
(8, 1, '17,999'),
(9, 2, '1,10,000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `Name` varchar(25) DEFAULT NULL,
  `Password` varchar(500) DEFAULT NULL,
  `Contact` varchar(20) DEFAULT NULL,
  `City` varchar(15) DEFAULT NULL,
  `Address` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `Name`, `Password`, `Contact`, `City`, `Address`) VALUES
(1, 'lovishagg1fv@gmail.com', 'Lovish Aggarwal', '4786f3282f04de5b5c7317c490c6d922', '7894561230', 'Bhiwani', 'Dhiaggian Gali , Halu Bazar'),
(2, 'lovishagg1vnk@gmail.com', 'Lovish Aggarwal', 'c6ada073f2f149410cbba932d84a9bb9', '7894561230', 'Bhiwani', 'Dhiaggian Gali , Halu Bazar'),
(3, 'abc@gmail.com', 'ABc', '', '7894561230', 'Bhiwani', 'Dhiaggian Gali , Halu Bazar'),
(4, 'vikisheoran2000@gmail.com', 'Lovish Aggarwal', '3d2ca39fb0379c23ff9357e8adc841ad', '7894561230', 'Bhiwani', 'Dhiaggian Gali , Halu Bazar'),
(5, '123@gmail.com', 'Lovish Aggarwal', 'fcea920f7412b5da7be0cf42b8c93759', '7894561230', 'Bhiwani', 'Dhiaggian Gali , Halu Bazar'),
(6, 'abcd@gmail.com', 'Lovish Aggarwal', '3d2ca39fb0379c23ff9357e8adc841ad', '7894561230', 'Bhiwani', 'Dhiaggian Gali , Halu Bazar'),
(7, '456@gmail.com', 'Lovish Aggarwal', '3d2ca39fb0379c23ff9357e8adc841ad', '7894561230', 'Bhiwani', 'Dhiaggian Gali , Halu Bazar'),
(8, 'lovishagg545@gmail.com', 'Lovish Aggarwal', '3d2ca39fb0379c23ff9357e8adc841ad', '7894561230', 'Bhiwani', 'Dhiaggian Gali , Halu Bazar'),
(9, 'lovishagg44@gmail.com', 'Lovish Aggarwal', '3d2ca39fb0379c23ff9357e8adc841ad', '7894561230', 'Bhiwani', 'Dhiaggian Gali , Halu Bazar');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
