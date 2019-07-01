-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2019 at 12:58 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `logo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`id`, `name`, `email`, `password`, `logo`) VALUES
(18, 'Ivan Pantelic', 'ivanpantelic996@gmail.com', 'ivan123', '1.png');

-- --------------------------------------------------------

--
-- Table structure for table `jobsapplied`
--

CREATE TABLE `jobsapplied` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `pid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobsapplied`
--

INSERT INTO `jobsapplied` (`id`, `date`, `pid`, `sid`, `status`) VALUES
(22, '2019-02-15', 5, 6, 'Odbijeno'),
(23, '2019-02-15', 11, 6, 'Odbijeno'),
(24, '2019-02-15', 11, 7, 'Prihvaceno');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `from` int(11) NOT NULL,
  `to` int(11) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `eid` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `category` varchar(500) NOT NULL,
  `minexp` varchar(100) NOT NULL,
  `desc` varchar(5000) NOT NULL,
  `salary` varchar(200) NOT NULL,
  `industry` varchar(500) NOT NULL,
  `role` varchar(500) NOT NULL,
  `employmentType` varchar(500) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `date`, `eid`, `name`, `category`, `minexp`, `desc`, `salary`, `industry`, `role`, `employmentType`, `status`) VALUES
(4, '2018-10-03 14:30:00', 18, 'Software Engineer', 'IT Jobs', '5', 'Software engineer with java skills', '500000-700000', 'IT-Software , Software Services', 'Software Engineer', 'Trajno', 'open'),
(5, '2018-10-03 14:30:00', 18, 'Network engineer', 'IT Jobs', '2', 'Engineer having skills of configuring routers and switches', '300000-400000', 'IT-Hardware & Networking', 'L1 engineer', 'Trajno', 'open'),
(6, '2018-10-04 14:30:00', 18, 'Team Lead', 'IT Jobs', '8', 'Lead team of 10 developers', '1000000-1500000', 'IT-Software , Software Services', 'Team Lead', 'Trajno', 'open'),
(11, '2019-02-14 22:00:00', 18, 'Scrum master', 'Accounting Jobs', '2', 'Guiding the team and organisation on how to use Agile/Scrum practices and values to delight customers.', '40000-60000', 'Accounting , Finance', 'Scrum managaer', 'Trajno', 'closed');

-- --------------------------------------------------------

--
-- Table structure for table `seeker`
--

CREATE TABLE `seeker` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `qualification` varchar(500) NOT NULL,
  `dob` date NOT NULL,
  `skills` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seeker`
--

INSERT INTO `seeker` (`id`, `name`, `email`, `password`, `qualification`, `dob`, `skills`) VALUES
(6, 'Marko Markovic', 'marko@gmail.com', 'marko123', 'good', '1996-02-15', 'JavaScript, HTML, CSS'),
(7, 'Nikola Nikolic', 'nikola@gmail.com', 'nikola123', 'good', '1995-12-02', 'Java');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobsapplied`
--
ALTER TABLE `jobsapplied`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobapplied_seekerFK` (`sid`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `employer_postFK` (`eid`);

--
-- Indexes for table `seeker`
--
ALTER TABLE `seeker`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `jobsapplied`
--
ALTER TABLE `jobsapplied`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `seeker`
--
ALTER TABLE `seeker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jobsapplied`
--
ALTER TABLE `jobsapplied`
  ADD CONSTRAINT `jobapplied_seekerFK` FOREIGN KEY (`sid`) REFERENCES `seeker` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `employer_postFK` FOREIGN KEY (`eid`) REFERENCES `employer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
