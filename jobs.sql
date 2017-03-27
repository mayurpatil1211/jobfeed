-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 27, 2017 at 11:27 AM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngo`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(3) NOT NULL,
  `job_headline` text NOT NULL,
  `job_headline_b` text NOT NULL,
  `company_name` text NOT NULL,
  `company_website` text NOT NULL,
  `company_mail` text NOT NULL,
  `job_type` text NOT NULL,
  `job_category` text NOT NULL,
  `job_location` text NOT NULL,
  `job_description` text NOT NULL,
  `job_how_to_apply` text NOT NULL,
  `posted_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `job_headline`, `job_headline_b`, `company_name`, `company_website`, `company_mail`, `job_type`, `job_category`, `job_location`, `job_description`, `job_how_to_apply`, `posted_date`) VALUES
(6, 'Full-stack Engineer', 'TEsting HEadline 2', 'Infosys', 'http://www.ocalhost/ngo/index.php/Welcome', 'mayur.patil1211@gmail.com', 'Full-time Employment', 'Testing', 'Bangalore', '“Include your LinkedIn and GitHub profiles.” We now require candidates to apply through the job board only. Do not include any contact information here. Candidates CANNOT attach resumes or other documents, so do not ask for tha', '“Include your LinkedIn and GitHub profiles.” We now require candidates to apply through the job board only. Do not include any contact information here. Candidates CANNOT attach resumes or other documents, so do not ask for tha', '2017-03-27 01:02:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
