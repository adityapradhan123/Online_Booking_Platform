-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2024 at 01:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `costumer`
--

-- --------------------------------------------------------

--
-- Table structure for table `costumer`
--

CREATE TABLE `costumer` (
  `Name` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `Date` date NOT NULL,
  `When` time(6) NOT NULL,
  `Pickup_location` varchar(60) NOT NULL,
  `Drop_Location` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `costumer`
--

INSERT INTO `costumer` (`Name`, `phone`, `Date`, `When`, `Pickup_location`, `Drop_Location`) VALUES
('Gulshan Sharma', 1564664151, '2010-07-24', '00:00:10.000000', 'gunupur', 'bbsr'),
('sam', 1564664151, '0000-00-00', '00:00:13.000000', 'UP', 'MP'),
('sam', 1564664151, '0000-00-00', '00:00:12.500000', 'UP', 'MP'),
('papu', 708798519, '2023-07-24', '10:00:00.000000', '', ''),
('jack', 1234567812, '2014-07-24', '12:00:00.000000', 'shivpur', 'kashi'),
('', 0, '0000-00-00', '00:00:00.000000', '', ''),
('rrtbh', 45752785, '0000-00-00', '00:00:00.000000', 'ytyb', 'rtbtr'),
('sam', 2147483647, '0000-00-00', '00:00:00.000000', 'gurugram', 'noida'),
('sam', 2147483647, '0000-00-00', '12:10:00.000000', 'wrtbw', 'wrtbwrb'),
('sam', 2147483647, '0000-00-00', '12:10:00.000000', 'wrtbw', 'wrtbwrb'),
('sam', 2147483647, '2010-07-25', '12:10:00.000000', 'gurugram', 'noida'),
('sam', 2147483647, '2010-07-25', '12:10:00.000000', 'gurugram', 'noida'),
('sam', 2147483647, '2010-07-25', '12:10:00.000000', 'gurugram', 'noida'),
('sam', 2147483647, '2010-07-25', '12:10:00.000000', 'delhi', 'kanpur');

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `From` varchar(40) NOT NULL,
  `To` varchar(20) NOT NULL,
  `departure_date` date NOT NULL,
  `departure_time` time(4) NOT NULL,
  `Preffered_Airline` varchar(20) NOT NULL,
  `Preffered_Seating` varchar(20) NOT NULL,
  `Adult` int(10) NOT NULL,
  `Children` int(5) NOT NULL,
  `infant` int(5) NOT NULL,
  `Full_name` varchar(40) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `Email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`From`, `To`, `departure_date`, `departure_time`, `Preffered_Airline`, `Preffered_Seating`, `Adult`, `Children`, `infant`, `Full_name`, `phone_no`, `Email`) VALUES
('s', 's', '0000-00-00', '00:00:00.0000', '', '', 2, 4, 3, 'aa', 1515, 'gulshansharma4789@gm'),
('s', 's', '0000-00-00', '00:00:00.0000', '', '', 2, 4, 3, 'aa', 1515, 'gulshansharma4789@gm'),
('s', 's', '0000-00-00', '00:00:00.0000', '', '', 2, 4, 3, 'aa', 1515, 'gulshansharma4789@gm'),
('india', 'usa', '0000-00-00', '00:00:19.0000', '', '', 0, 4, 1, 'sam', 2147483647, 'gulshansharma162003@'),
('india', 'londan', '0000-00-00', '00:00:10.0000', '', '', 2, 2, 0, 'papu', 1245787856, 'gulshansharma162003@'),
('india', 'londan', '0000-00-00', '00:00:10.0000', '', '', 2, 2, 0, 'papu', 1245787856, 'gulshansharma162003@'),
('india', 'londan', '2024-08-04', '00:00:10.0000', '', '', 2, 2, 0, 'papu', 1245787856, 'gulshansharma162003@'),
('india', 'londan', '2024-08-04', '00:00:10.0000', '', '', 2, 2, 0, 'papu', 1245787856, 'gulshansharma162003@'),
('india', 'londan', '2024-08-04', '10:30:00.0000', '', '', 2, 2, 0, 'papu', 1245787856, 'gulshansharma162003@'),
('india', 'londan', '2024-08-04', '10:30:00.0000', '', '', 2, 2, 0, 'papu', 1245787856, 'gulshansharma162003@'),
('', '', '0000-00-00', '00:00:00.0000', '', '', 0, 0, 0, '', 0, ''),
('', '', '0000-00-00', '00:00:00.0000', '', '', 0, 0, 0, '', 0, ''),
('', '', '0000-00-00', '00:00:00.0000', '', 'Economy', 0, 0, 0, '', 0, ''),
('', '', '0000-00-00', '00:00:00.0000', '', 'Business', 0, 0, 0, '', 0, ''),
('', '', '0000-00-00', '00:00:00.0000', '', 'Economy', 0, 0, 0, '', 0, ''),
('', '', '0000-00-00', '00:00:00.0000', '', 'Business', 0, 0, 0, '', 0, ''),
('', '', '0000-00-00', '00:00:00.0000', '', 'First', 0, 0, 0, '', 0, ''),
('india', 'Dubai', '2025-11-15', '10:50:00.0000', 'AirIndia', 'Business', 2, 2, 0, 'Joy Singh', 2147483647, 'xyz@gmail.com'),
('', '', '0000-00-00', '00:00:00.0000', 'Vistra', 'Economy', 0, 0, 0, '', 0, ''),
('gunupur', 'berhampur', '2024-12-25', '10:35:00.0000', 'Indigo', 'Economy', 1, 0, 0, 'sampat kumar', 519841648, 'gulshansharma162003@');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `First_name` varchar(20) NOT NULL,
  `Last_name` varchar(20) NOT NULL,
  `phone` int(10) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Departure_Date` date NOT NULL,
  `Arrival_Date` date NOT NULL,
  `No_of_Guest` int(20) NOT NULL,
  `Room_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`First_name`, `Last_name`, `phone`, `Email`, `Departure_Date`, `Arrival_Date`, `No_of_Guest`, `Room_type`) VALUES
('sam', 'sharma', 1564664151, 'gulshansharma4789@gm', '0000-00-00', '0000-00-00', 4, ''),
('sam', 'sharma', 1564664151, 'gulshansharma4789@gm', '0000-00-00', '0000-00-00', 4, ''),
('sam', 'sharma', 1564664151, 'gulshansharma4789@gm', '0000-00-00', '0000-00-00', 4, ''),
('sam', 'sharma', 1564664151, 'gulshansharma4789@gm', '0000-00-00', '0000-00-00', 4, ''),
('sam', 'sharma', 1564664151, 'gulshansharma4789@gm', '0000-00-00', '0000-00-00', 4, ''),
('Gulshan', 'sharma', 2147483647, 'gulshansharma4789@gm', '0000-00-00', '0000-00-00', 2, ''),
('Gulshan', 'sharma', 2147483647, 'gulshansharma4789@gm', '2012-03-25', '2013-03-25', 2, ''),
('Gulshan', 'sharma', 2147483647, 'gulshansharma4789@gm', '2012-03-25', '2013-03-25', 2, ''),
('Gulshan', 'sharma', 2147483647, 'gulshansharma4789@gm', '2012-03-25', '2013-03-25', 2, ''),
('Gulshan', 'sharma', 2147483647, 'gulshansharma4789@gm', '2012-03-25', '2013-03-25', 2, 'AC'),
('Gulshan', 'sharma', 2147483647, 'gulshansharma4789@gm', '2012-03-25', '0000-00-00', 2, ''),
('sameer', 'sharma', 2147483647, 'gulshansharma4789@gm', '0000-00-00', '0000-00-00', 2, ''),
('sameer', 'sharma', 2147483647, 'gulshansharma4789@gm', '0000-00-00', '0000-00-00', 2, ''),
('sameer', 'sharma', 2147483647, 'gulshansharma4789@gm', '0000-00-00', '0000-00-00', 2, ''),
('sameer', 'sharma', 2147483647, 'gulshansharma4789@gm', '0000-00-00', '0000-00-00', 2, ''),
('sameer', 'sharma', 2147483647, 'gulshansharma4789@gm', '0000-00-00', '2019-02-25', 2, ''),
('', '', 0, '', '0000-00-00', '0000-00-00', 0, ''),
('Gulshan', 'sharma', 1564664151, 'gulshansharma4789@gm', '0000-00-00', '2024-09-25', 4, ''),
('Gulshan', 'sharma', 1564664151, 'gulshansharma4789@gm', '2024-09-01', '2024-09-01', 4, ''),
('Gulshan', 'sharma', 1564664151, 'gulshansharma4789@gm', '2023-12-10', '2023-12-11', 4, ''),
('ayush', 'sharma', 1564664151, 'gulshansharma4789@gm', '2024-01-15', '2024-01-15', 5, 'noc-AC'),
('', '', 0, '', '0000-00-00', '0000-00-00', 0, ''),
('', '', 0, '', '0000-00-00', '0000-00-00', 0, 'NON_AC'),
('', '', 0, '', '0000-00-00', '0000-00-00', 0, 'NON AC'),
('', '', 0, '', '0000-00-00', '0000-00-00', 0, 'NON AC');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
