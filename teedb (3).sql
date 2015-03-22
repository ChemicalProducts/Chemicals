-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2015 at 06:49 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `teedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `Company_Name` varchar(100) NOT NULL,
  `Lequl_State` varchar(50) DEFAULT NULL,
  `Address` varchar(100) NOT NULL,
  `PostCode` int(6) DEFAULT NULL,
  `City` varchar(30) DEFAULT NULL,
  `Telephone` int(10) NOT NULL,
  `Fax` int(10) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `info` varchar(255) DEFAULT NULL,
  `Type` int(1) DEFAULT NULL,
  `Person` int(10) NOT NULL,
  `Commersial_Name` varchar(100) DEFAULT NULL,
  `Other_Name` varchar(100) DEFAULT NULL,
  `CEO` varchar(100) NOT NULL,
  `Country` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`Company_Name`, `Lequl_State`, `Address`, `PostCode`, `City`, `Telephone`, `Fax`, `Email`, `info`, `Type`, `Person`, `Commersial_Name`, `Other_Name`, `CEO`, `Country`) VALUES
('Azax', 'Partnership', 'Φώτη Πίτα 55', 7103, 'Αραδίππου', 96583334, 24532663, 'akkous01@cs.ucy.ac.cy', 'Καθαρίζει Παράθυρα', 0, 96583334, 'Azax', 'Azax', 'Άντρια', 'Κύπρος'),
('Famozo', 'Limited Company', 'Μιχαλάκη Καραολή 36', 7104, 'Δερύνεια ', 24532614, 24532614, 'epapak02@cs.ucy.ac.cy', 'Καθαρίζει Παράθυρα', 0, 96797773, 'Famozo', 'Famozo', 'Ειρήνη', 'Κύπρος'),
('Skip', 'Community Interest Company (CIC)', 'Καντάρας 12', 7105, 'Λευκωσία', 24533064, 24533064, 'dpash01@cs.ucy.ac.cy', 'Καθαρίζει μάρμαρα', 0, 97644466, 'Skip', 'Skip', 'Δημήτρης', 'Κύπρος'),
('Cif', 'Sole Trader', 'Αγίας Σοφίας 5', 7105, 'Δροσιά', 24531336, 24531336, 'afrank01@cs.ucy.ac.cy', 'Καθαρίζει Τουαλέτες', 0, 99564512, 'Cif', 'Cif', 'Αντρέας', 'Κύπρος'),
('Medousa', 'Limited Company', 'Λεοφόρος 1', 2536, 'Αγραντζιά', 22365985, 22365985, 'ppavli01@cs.ucy.ac.cy', 'Προμηθεύει Azax και Skip ', 1, 99663322, 'Medousa', 'Medousa', 'Παναγιώτης', 'Κύπρος'),
('Manowar', 'Limited Company', 'Λόρδου Βύρωνος 8Β', 1041, 'Καϊμακλί', 22536699, 22536699, 'paziz001@cs.ucy.ac.cy', 'Προμηθεύει Azax,Famozo ', 0, 99885566, 'Manowar', 'Manowar', 'Φύλιππος ', 'Κύπρος'),
('Tsada', 'Limited Company', 'Βεργίνας 3', 2025, 'Λευκωσία', 22665544, 22665544, 'tchara02@cs.ucy.ac.cy', ' Προμηθεύει famozo,skip', 1, 99887766, 'Tsada', 'Tsada', 'Θεόδωρος', 'Κύπρος'),
('trial', 'trial', 'trial', 123, 'trial', 123, 123, 'trial', 'trial', 1, 123, 'trial', 'trial', 'trial', 'trial');

-- --------------------------------------------------------

--
-- Table structure for table `comperson`
--

CREATE TABLE IF NOT EXISTS `comperson` (
  `Name` varchar(30) NOT NULL,
  `Surname` varchar(30) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Telephone` int(10) NOT NULL,
  `Fax` int(10) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `PostCode` int(6) NOT NULL,
  `City` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comperson`
--

INSERT INTO `comperson` (`Name`, `Surname`, `Address`, `Telephone`, `Fax`, `Email`, `PostCode`, `City`) VALUES
('Άντρια', 'Κκουσιή', 'Φώτη Πίτα 55', 96583334, 24556633, 'akkous01@cs.ucy.ac.cy', 7103, 'Αραδίππου'),
('Ειρήνη', 'Παπακώστα', 'Μιχαλάκη καραολή 36', 96797773, 24532614, 'epapak02@cs.ucy.ac.cy', 7104, 'Δερύνεια'),
('Δημήτρης', 'Πασχαλίδης', 'Καντάρας 12', 97644466, 24533064, 'dpasch01@cs.ucy.ac.cy', 7105, 'Λευκωσία'),
('Αντρέας', 'Φράγκου', 'Αγίας Σοφιάσ 5', 99564512, 24531336, 'afrang01@cs.ucy.ac.cy', 7105, 'Δροσιά'),
('Παναγιώτης', 'Παυλίδης', 'Λεοφώρος 1', 99663322, 24563984, 'ppavli01@cs.ucy.ac.cy', 2536, 'Αγλαντζιά'),
('Φύλιππος', 'Αζίζ', 'Λόρδος Βύρωνοσ 8Β', 99885566, 25639866, 'paziz001@cs.ucy.ac.cy', 1041, 'Καϊμακλί'),
('Θεόδωρος', 'Χαραλάμπους', 'Βεργίνας3', 99887766, 23659874, 'tchala01@cs.ucy.ac.cy', 2025, 'Λεθκωσία'),
('trial', 'trial', 'trial', 123, 123, 'trial', 123, 'trial');

-- --------------------------------------------------------

--
-- Table structure for table `containschemical`
--

CREATE TABLE IF NOT EXISTS `containschemical` (
  `Name` varchar(30) NOT NULL,
  `Cas` varchar(12) NOT NULL,
  `Quantity` float(8,4) NOT NULL,
  `Saving_Date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `containschemical`
--

INSERT INTO `containschemical` (`Name`, `Cas`, `Quantity`, `Saving_Date`) VALUES
('Azax', '64-17-5', 31.7886, '2015-03-23'),
('Azax', '74-98-6', 23.4893, '2015-03-23'),
('Azax', '106-97-8', 16.7072, '2015-03-23'),
('Azax', '75-28-5', 12.0083, '2015-03-23'),
('Famozo', '34590-94-8', 3.9564, '2015-03-19'),
('Famozo', '32210-23-4', 0.8000, '2015-03-19'),
('trial', '123', 0.0000, '2015-03-21'),
('Cif', '83926-73-2', 0.7273, '2015-04-16'),
('Cif', '64-17-5', 0.8000, '2015-03-16'),
('Skip', '74-98-6', 0.2000, '2015-03-03'),
('Skip', '75-28-5', 0.3000, '2015-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `Chemical_Name` varchar(30) NOT NULL,
  `Commercial_Name` varchar(30) NOT NULL,
  `Uses` varchar(255) DEFAULT NULL,
  `State` varchar(10) DEFAULT NULL,
  `Volume` varchar(30) DEFAULT NULL,
  `info` varchar(255) DEFAULT NULL,
  `Pdf_ID` int(11) NOT NULL,
  `Image_ID` int(11) NOT NULL,
  `Constructor` varchar(100) NOT NULL,
  `SavingDate` date NOT NULL,
  `Temp` bit(1) NOT NULL,
  `Final` bit(1) NOT NULL,
  `Append` bit(1) NOT NULL,
  `Valid` bit(1) NOT NULL,
  `Sds` varchar(1000) DEFAULT NULL,
  `Clp` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Chemical_Name`, `Commercial_Name`, `Uses`, `State`, `Volume`, `info`, `Pdf_ID`, `Image_ID`, `Constructor`, `SavingDate`, `Temp`, `Final`, `Append`, `Valid`, `Sds`, `Clp`) VALUES
('Azax', 'Azax', 'καθαρισμα', 'Υγρό', NULL, 'Τίποτε', 123456, 123456, 'Azax', '2015-03-23', b'1', b'0', b'0', b'1', NULL, NULL),
('Famozo', 'Famozo', 'καθάρισμα', 'υγρό', NULL, 'Τίποτε', 112233, 112233, 'Famozo', '2015-03-19', b'0', b'0', b'0', b'1', NULL, NULL),
('Skip', 'Skip', 'καθάρισμα', 'Στερεό', NULL, 'Τίποτε', 556644, 556644, 'Skip', '2015-03-20', b'0', b'1', b'1', b'0', NULL, NULL),
('Cif', 'Cif', 'καθάρισμα', 'Υγρό', NULL, 'Τίποτε', 778899, 778899, 'Cif', '2015-04-16', b'0', b'1', b'1', b'1', NULL, NULL),
('trial', 'trial', 'trial', 'trial', 'trial', 'trial', 123, 123, 'trial', '2015-03-21', b'1', b'1', b'1', b'1', 'trial', 'trial');

-- --------------------------------------------------------

--
-- Table structure for table `substance`
--

CREATE TABLE IF NOT EXISTS `substance` (
  `Name` varchar(150) NOT NULL,
  `Cas` varchar(12) NOT NULL,
  `Ec` varchar(9) DEFAULT NULL,
  `Iupac` varchar(255) DEFAULT NULL,
  `Other_Name` varchar(50) DEFAULT NULL,
  `Clp` varchar(100) DEFAULT NULL,
  `Sort` bit(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `substance`
--

INSERT INTO `substance` (`Name`, `Cas`, `Ec`, `Iupac`, `Other_Name`, `Clp`, `Sort`) VALUES
('Ethanol', '64-17-5', NULL, NULL, NULL, 'R11', b'1'),
('Propane', '74-98-6', '', '', NULL, 'R12', b'1'),
('Butane', '106-97-8', NULL, NULL, NULL, 'R12', NULL),
('Isobutane', '75-28-5', NULL, NULL, NULL, 'R12', NULL),
('propanol', '34590-94-8', NULL, NULL, NULL, NULL, NULL),
('acetate', '32210-23-4', NULL, NULL, NULL, 'R51/R53', NULL),
('linalool', '83926-73-2', NULL, NULL, 'R41/R51/R53', NULL, NULL),
('trial', '123', 'trial', 'trial', 'trial', 'trial', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `supply`
--

CREATE TABLE IF NOT EXISTS `supply` (
  `Supplier` varchar(100) NOT NULL,
  `Product` varchar(30) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Saving_Date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supply`
--

INSERT INTO `supply` (`Supplier`, `Product`, `Address`, `Saving_Date`) VALUES
('Medusa', 'Azax', '', '2015-03-23'),
('Medousa', 'Famozo', '', '2015-03-19'),
('Manowar', 'Azax', '', '2015-03-23'),
('Manowar', 'Skip', '', '2015-03-20'),
('Tsada', 'Famozo', '', '2015-03-19'),
('Tsada', 'Skip', '', '2015-03-20'),
('trial', 'trial', 'trial', '2015-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
`id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` int(11) NOT NULL,
  `content` mediumblob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Username` varchar(8) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Company` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Password`, `Company`) VALUES
('akkous01', 'antriak2', 'Azax'),
('epapak02', 'IrenePa2', 'Famozo'),
('dpasch01', 'Dimitris', 'Skip'),
('afrang01', 'Andreas2', 'Cif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
 ADD PRIMARY KEY (`Company_Name`), ADD FULLTEXT KEY `Company_Name` (`Company_Name`);

--
-- Indexes for table `comperson`
--
ALTER TABLE `comperson`
 ADD PRIMARY KEY (`Telephone`);

--
-- Indexes for table `containschemical`
--
ALTER TABLE `containschemical`
 ADD PRIMARY KEY (`Name`,`Cas`,`Saving_Date`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`Commercial_Name`,`SavingDate`), ADD KEY `Pdf_ID` (`Pdf_ID`), ADD KEY `Image_ID` (`Image_ID`), ADD KEY `Constructor` (`Constructor`);

--
-- Indexes for table `substance`
--
ALTER TABLE `substance`
 ADD PRIMARY KEY (`Cas`);

--
-- Indexes for table `supply`
--
ALTER TABLE `supply`
 ADD PRIMARY KEY (`Supplier`,`Product`,`Saving_Date`), ADD KEY `Product` (`Product`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`Username`), ADD KEY `Company` (`Company`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
