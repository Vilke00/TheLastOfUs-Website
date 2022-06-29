-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2020 at 01:06 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thelastofus`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `ID` int(11) NOT NULL,
  `ime` varchar(255) DEFAULT NULL,
  `prezime` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `vrsta` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`ID`, `ime`, `prezime`, `username`, `email`, `password`, `vrsta`) VALUES
(20, 'test', 'test', 'admin369963', 'testasder@gmail.com', '123', 'AD'),
(24, 'Nemanja', 'Vilic', 'test', 'nemanja.vilic@gmail.com', '123', 'KO'),
(29, 'tester', '2', 'tester2', 'tester@gmail.com', '321', 'AD'),
(30, 'Novi', 'Nalog', 'novi', 'novi@gmail.com', '123', 'KO');

-- --------------------------------------------------------

--
-- Table structure for table `narudzbine`
--

CREATE TABLE `narudzbine` (
  `ime` varchar(255) NOT NULL,
  `prezime` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `edition` varchar(25) DEFAULT NULL,
  `adresa` varchar(255) NOT NULL,
  `broj` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `narudzbine`
--

INSERT INTO `narudzbine` (`ime`, `prezime`, `email`, `edition`, `adresa`, `broj`) VALUES
('Nemanja', 'Vilic', 'nemanja.viki@hotmail.com', 'Limited Edition', 'a', 1),
('Nemanja', 'Vilic', 'nemanja.vilic@gmail.com', 'Ellie Edition', 'Adresa 65', 603474095),
('Novi', 'Nalog', 'novi@gmail.com', 'Survival Edition', 'aresa 65', 123312);

-- --------------------------------------------------------

--
-- Table structure for table `pitanja`
--

CREATE TABLE `pitanja` (
  `ID` int(11) NOT NULL,
  `ime` varchar(255) NOT NULL,
  `prezime` varchar(255) NOT NULL,
  `broj` int(11) DEFAULT NULL,
  `naslov` varchar(255) NOT NULL,
  `tekst` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pitanja`
--

INSERT INTO `pitanja` (`ID`, `ime`, `prezime`, `broj`, `naslov`, `tekst`) VALUES
(1, 'Nikola', 'Knezevic', 0, 'Test poruka', 'Ovo je telo test poruke. Nadam se da ce sve proci kako treba!'),
(4, 'Nemanja', 'Vilic', 648222969, 'Poruka', 'Ovo je test poruka da vidim jel sve radi kako treba');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `ID` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ocena` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`ID`, `email`, `ocena`) VALUES
(12, 'nemanja.vilic@gmail.com', 10);

-- --------------------------------------------------------

--
-- Table structure for table `stanje`
--

CREATE TABLE `stanje` (
  `ID` int(11) NOT NULL,
  `edition` varchar(25) DEFAULT NULL,
  `stanje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stanje`
--

INSERT INTO `stanje` (`ID`, `edition`, `stanje`) VALUES
(1, 'Limited Edition', 100),
(2, 'Survival Edition', 150),
(3, 'Post Pandemic Edition', 40),
(4, 'Ellie Edition', 150),
(5, 'Joel Edition', 150);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`ID`,`username`);

--
-- Indexes for table `narudzbine`
--
ALTER TABLE `narudzbine`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pitanja`
--
ALTER TABLE `pitanja`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `stanje`
--
ALTER TABLE `stanje`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `pitanja`
--
ALTER TABLE `pitanja`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `stanje`
--
ALTER TABLE `stanje`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
