-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2018 at 11:27 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phishingtool`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_phish`
--

CREATE TABLE `add_phish` (
  `ID` int(5) NOT NULL,
  `URL` varchar(250) NOT NULL,
  `Username` varchar(70) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `Website_name` varchar(70) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_phish`
--

INSERT INTO `add_phish` (`ID`, `URL`, `Username`, `Category`, `Website_name`, `message`) VALUES
(10029, 'https://www.youtube.com/watch?v=C9q_haXodDs', 'deepakmalempati@gmail.com', 'Online Services', 'flipkart', 'hi this is deepak coolss'),
(10030, 'https://www.youtube.com/watch?v=C9q_haXodDs', 'deepakmalempati@gmail.com', 'Banking', 'karunya university', 'delete the page'),
(10031, 'https://drive.google.com/drive/u/1/folders/1buN5wGqVRliyFOIsaTIODCaS4fsgqqHO', 'manojpathuri007@gmail.com', 'Banking', 'local host', 'please delete'),
(10032, 'bankingodjoisjda .com', 'mdeepak.work@gmail.com', 'Banking', 'flipkart', 'hi cool'),
(10033, 'https://www.youtube.com/watch?v=C9q_haXodDs', 'manojpathuri007@gmail.com', 'eCommerce', 'sdfdss', 'ssdsdsdsd'),
(10034, 'https://www.youtube.com/watch?v=C9q_haXodDs', 'manojpathuri007@gmail.com', 'eCommerce', 'sdfdss', 'ssdsdsdsd'),
(10035, 'https://drive.google.com/drive/u/1/folders/1buN5wGqVRliyFOIsaTIODCaS4fsgqqHO', 'krishvamsi073@gmail.com', 'eCommerce', 'please', 'tytytytuyuy'),
(10036, 'https://www.youtube.com/watch?v=C9q_haXodDs', 'lucky@kmail.com', 'Banking', 'bank', 'dfsfsddsfsd'),
(10037, 'https://drive.google.com/drive/u/1/folders/1buN5wGqVRliyFOIsaTIODCaS4fsgqqHO', 'lucky@kmail.com', 'eCommerce', 'local host', 'tyrtytrytry'),
(10040, 'http://localhost/phpmyadmin/tbl_structure.php?db=phishingtool&table=add_phish', 'deepak', 'Banking', 'php', 'thats it delete'),
(10041, 'https://www.google.co.in/search?q=facebook&oq=face&aqs=chrome.0.0j69i57j35i39j0l3.1676j0j4&sourceid=chrome&ie=UTF-8', 'varun', 'Crypto Currency', 'defsfe', 'dsfdsfsd'),
(10042, 'http://localhost/phishingTool_dummy/add_phish.php', 'varun', 'Online Services', 'karunya', 'hi this is yashwanth');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Username` varchar(100) NOT NULL,
  `Password` char(40) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Password`, `email`) VALUES
('deepak', 'c522305001f35a2d3a1ff6d08e1ba367daf49d02', 'dm3270@gmail.com'),
('noel', 'bbe28d2184614fa1bb55a6abf6177468cd82f560', 'noel4ver@gmail.com'),
('noelsasi', 'bbe28d2184614fa1bb55a6abf6177468cd82f560', 'noel4ver@gmail.com'),
('prasanna', 'eb77579c1911c89786ab7c4d92f05af038c76297', 'prasannareddytumati@gmail.com'),
('vamsi', '9aec94e5d4ef7fbbc264b19bad3817ac29d5aab1', 'krishvamsi073@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `voting_data`
--

CREATE TABLE `voting_data` (
  `ID` int(5) NOT NULL,
  `URL` varchar(250) NOT NULL,
  `Category` varchar(40) NOT NULL,
  `Vote_count_yes` int(5) NOT NULL,
  `Vote_count_no` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voting_data`
--

INSERT INTO `voting_data` (`ID`, `URL`, `Category`, `Vote_count_yes`, `Vote_count_no`) VALUES
(10001, 'https://www.youtube.com/watch?v=C9q_haXodDs', 'Category', 0, 0),
(10029, 'https://www.youtube.com/watch?v=C9q_haXodDs', 'Category', 6, 16),
(10030, 'https://drive.google.com/drive/u/1/folders/1buN5wGqVRliyFOIsaTIODCaS4fsgqqHO', 'Category', 0, 0),
(10031, 'bankingodjoisjda .com', 'Category', 0, 0),
(10032, 'https://www.youtube.com/watch?v=C9q_haXodDs', 'Category', 1, 1),
(10033, 'https://www.youtube.com/watch?v=C9q_haXodDs', 'Category', 2, 0),
(10034, 'https://drive.google.com/drive/u/1/folders/1buN5wGqVRliyFOIsaTIODCaS4fsgqqHO', 'Category', 0, 0),
(10035, 'https://www.youtube.com/watch?v=C9q_haXodDs', 'Category', 0, 0),
(10036, 'https://drive.google.com/drive/u/1/folders/1buN5wGqVRliyFOIsaTIODCaS4fsgqqHO', 'Category', 0, 0),
(10037, 'https://drive.google.com/drive/u/1/folders/1buN5wGqVRliyFOIsaTIODCaS4fsgqqHO', 'Category', 0, 0),
(10038, 'http://localhost/phpmyadmin/tbl_structure.php?db=phishingtool&table=add_phish', 'Category', 0, 0),
(10039, 'http://localhost/phpmyadmin/tbl_structure.php?db=phishingtool&table=add_phish', 'Category', 0, 0),
(10040, 'https://www.google.co.in/search?q=facebook&oq=face&aqs=chrome.0.0j69i57j35i39j0l3.1676j0j4&sourceid=chrome&ie=UTF-8', 'Category', 0, 0),
(10041, 'http://localhost/phishingTool_dummy/add_phish.php', 'Category', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_phish`
--
ALTER TABLE `add_phish`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `voting_data`
--
ALTER TABLE `voting_data`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_phish`
--
ALTER TABLE `add_phish`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10043;

--
-- AUTO_INCREMENT for table `voting_data`
--
ALTER TABLE `voting_data`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10042;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
