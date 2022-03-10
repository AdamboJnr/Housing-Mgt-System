-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 08, 2022 at 07:39 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `housing_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `booked_properties`
--

CREATE TABLE `booked_properties` (
  `book_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `username` text NOT NULL,
  `p_id` int(20) NOT NULL,
  `p_amount` bigint(20) NOT NULL,
  `date_booked` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booked_properties`
--

INSERT INTO `booked_properties` (`book_id`, `user_id`, `username`, `p_id`, `p_amount`, `date_booked`) VALUES
(3, 6, 'AdamboJnr', 7, 4000000, '2022-03-02 04:53:20pm'),
(10, 6, 'AdamboJnr', 16, 25000000, '2022-03-07 03:46:00pm');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` text NOT NULL,
  `message` longtext NOT NULL,
  `time_posted` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `username`, `email`, `subject`, `message`, `time_posted`) VALUES
(1, 'Allan Adambo', 'AdamboAllan75@gmail.com', 'Acquiring Property', 'Please make the process of Acquiring a property easier.', '2022-02-25 10:41:11am'),
(2, 'Anonymous', 'Anonymous@gmail.com', 'Anonimity', 'Please keep our details private', '2022-03-05 10:33:55am');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `username`, `email`) VALUES
(1, 'AdamboJnr', 'AdamboAllan75@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `property_id` int(20) NOT NULL,
  `owner_name` text NOT NULL,
  `owner_contact` bigint(20) NOT NULL,
  `property_image_name` text NOT NULL,
  `status` text NOT NULL,
  `property_type` text NOT NULL,
  `loacation` text NOT NULL,
  `p_amount` bigint(20) NOT NULL,
  `p_no_bedrooms` int(20) NOT NULL,
  `P_no_kitchen` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`property_id`, `owner_name`, `owner_contact`, `property_image_name`, `status`, `property_type`, `loacation`, `p_amount`, `p_no_bedrooms`, `P_no_kitchen`) VALUES
(4, 'Allan Adambo', 713728748, 'bg-photo-1.jpg', 'Booked', 'Villa', 'Tudor', 2000000, 2, 1),
(5, 'Legend', 723456789, 'property-3.jpg', 'Available', 'Villa', 'Nyali', 10000000, 3, 1),
(7, 'Allan Adambo', 713728748, 'recent-property-4.jpg', 'Booked', 'Appartment', 'Mikindani', 4000000, 2, 1),
(8, 'Adambo Jnr', 731700474, 'property-7.jpg', 'Available', 'Building', 'Vipingo', 10000000, 1, 1),
(9, 'Allan Adambo', 713728748, 'bg-photo-1.jpg', 'Booked', 'Villa', 'Tudor', 5000000, 2, 1),
(10, 'Ann', 798673456, 'property-1.jpg', 'Available', 'Appartment', 'Voi', 5000000, 3, 1),
(11, 'Brayan', 768934563, 'property-6.jpg', 'Available', 'Villa', 'Railways', 2000000, 2, 1),
(12, 'Adambo Jnr', 787904567, 'property-4.jpg', 'Available', 'Villa', 'Magongo', 7500000, 2, 1),
(13, 'Legend', 798654523, 'recent-property-4.jpg', 'Available', 'Appartment', 'Runda', 6000000, 2, 1),
(14, 'John Doe', 789456789, 'property-9.jpg', 'Available', 'Building', 'Makande', 20000000, 1, 1),
(15, 'Bruno', 712345678, 'blog-5.jpg', 'Available', 'Building', 'South B', 25000000, 2, 1),
(16, 'Bruno', 7893456, 'james-mcdonald-nGmVbv6U6Ps-unsplash.jpg', 'Booked', 'Building', 'Konza', 25000000, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `user_id` int(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `gender` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` text NOT NULL,
  `residence` text NOT NULL,
  `user_type` text NOT NULL,
  `id_number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`user_id`, `username`, `user_password`, `gender`, `email`, `contact`, `residence`, `user_type`, `id_number`) VALUES
(6, 'AdamboJnr', 'Adambo75', 'male', 'AdamsAllano@gmail.com', '0731603581', 'London', 'Admin', '33042057'),
(7, 'Legend', 'Legend75', 'male', 'Legend@gmail.com', '0789034565', 'Tudor', 'User', '34567890');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked_properties`
--
ALTER TABLE `booked_properties`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`property_id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booked_properties`
--
ALTER TABLE `booked_properties`
  MODIFY `book_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `property_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
