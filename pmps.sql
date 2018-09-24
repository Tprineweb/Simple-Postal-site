-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 18, 2018 at 07:12 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmps`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_packages`
--

DROP TABLE IF EXISTS `customer_packages`;
CREATE TABLE IF NOT EXISTS `customer_packages` (
  `Package_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Package_ID',
  `Supplier` varchar(200) NOT NULL COMMENT 'Supplier_Info',
  `Package_Info` varchar(200) NOT NULL COMMENT 'Package_Information',
  `Last_Location` varchar(200) NOT NULL COMMENT 'Last_Known_Location',
  `Destination` varchar(200) NOT NULL COMMENT 'Package_Final_Destination',
  PRIMARY KEY (`Package_ID`),
  UNIQUE KEY `Package_ID` (`Package_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_packages`
--

INSERT INTO `customer_packages` (`Package_ID`, `Supplier`, `Package_Info`, `Last_Location`, `Destination`) VALUES
(1, 'Bob\'s Toys 132 Main St. Cents, NY 54865', '3 Barbies', 'PMPS #3 4887 Shell Rd. Melon, Fl 45628', 'Clara Marson 45 Markson St. Carson, TX 12548'),
(2, 'Bob\'s Toys 132 Main St. Cents, NY 54865', '2 Trucks, 1 hat', 'PMPS #2 2 Ralph St. Blueberry, NC 45287', 'Steve Nelson 4568 Mercy Ln. Carp, SC 74102'),
(3, 'Sandwich Go 200 Wheatland St. Fronk, FL 10467', '1 Turkey Sub, Nacho Doritos', 'PMPS #1 22 Purple Pl. Walton, FL 10454', 'PMPS #1 22 Purple Pl. Walton, FL 10454'),
(4, 'Ron\'s Stationary 22 Purple Pl. Walton, FL 10454', '30 Medium boxes, 10 notepads, 1 pencil', 'PMPS #5 222 Melting Ln. Marsh, NM 11111', 'PMPS #7 123 Default St. Common, WA 58246'),
(5, 'Pat\'s Pots 818 River Rd. Green, CO 12121', '1 medium vase, 1 large green pot,  1 \"I <3 Pots\" t-shirt', 'Supplier', 'Larry Johnson 8524 Merica Dr. Parson, NY 85213'),
(6, 'Ron\'s Stationary 22 Purple Pl. Walton, FL 10454', '320 small boxes', 'PMPS #10 5 Chestnut Ln. Marcus, TX 85216', 'Ron\'s Stationary 22 Purple Pl. Walton, FL 10454'),
(7, 'Cool Shoes 123 Target St. Warsaw, WA 12356', '1 pair of Jordans', 'Supplier', 'Felix Jones 1002 Mission St. Place, NM 44454');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
