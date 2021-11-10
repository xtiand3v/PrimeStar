-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 11:03 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prime_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `emp_id`, `admin_name`, `admin_email`, `admin_username`, `admin_password`, `admin_added`) VALUES
(1, 2091238, 'Administrator', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2021-08-07 03:09:52');

-- --------------------------------------------------------

--
-- Table structure for table `admin_note`
--

CREATE TABLE `admin_note` (
  `note_id` int(11) NOT NULL,
  `added_by` varchar(255) NOT NULL,
  `note_added` datetime NOT NULL DEFAULT current_timestamp(),
  `note_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `announcement_id` int(11) NOT NULL,
  `announcement_name` varchar(255) NOT NULL,
  `announcement_desc` text NOT NULL,
  `announcement_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `client_fullname` varchar(255) NOT NULL,
  `client_contact` varchar(255) NOT NULL,
  `client_email` varchar(255) NOT NULL,
  `client_address` varchar(255) NOT NULL,
  `client_street` varchar(255) NOT NULL,
  `client_country` varchar(255) NOT NULL,
  `client_postcode` varchar(255) NOT NULL,
  `client_password` varchar(255) NOT NULL,
  `client_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `client_fullname`, `client_contact`, `client_email`, `client_address`, `client_street`, `client_country`, `client_postcode`, `client_password`, `client_added`) VALUES
(2021029, 'Test', '09128312882', 'test@gmail.com', 'Test address', '', '', '', '25d55ad283aa400af464c76d713c07ad', '2021-08-07 05:53:06'),
(2021030, 'Sample', '09654831344', 'sample@test.com', 'Sample Address\r\nSample Address', '', '', '', '25d55ad283aa400af464c76d713c07ad', '2021-08-07 09:12:03'),
(2021031, 'Cristian', '09654831344', 'xtian@gmail.com', 'i1 Building\r\nJose Maria del Mar St', '', '', '', '25d55ad283aa400af464c76d713c07ad', '2021-08-07 09:44:46'),
(2021032, 'John', '0912831283', 'john.doe@gmail.com', 'John Doe address', '', '', '', '25d55ad283aa400af464c76d713c07ad', '2021-08-07 10:49:36'),
(2021033, 'Cristian', '9654831343', 'test@reg.com', 'Mabolo', '', '', '', '25d55ad283aa400af464c76d713c07ad', '2021-08-09 15:02:39'),
(2021034, '', '091238213', 'test@test.com', '', '', 'United States', '5200', '25d55ad283aa400af464c76d713c07ad', '2021-09-03 06:42:16'),
(2021035, 'Test 1', '091238213', 'test+1@test.com', '', '', 'United States', '5200', '25d55ad283aa400af464c76d713c07ad', '2021-09-03 06:44:35'),
(2021036, 'Test 2', '091238213', 'test+2@test.com', '', '', 'United States', '5200', '25d55ad283aa400af464c76d713c07ad', '2021-09-03 06:45:01'),
(2021037, 'Test 3', '09123812818', 'test+3@test.com', '', '', 'United States', '2838', '25d55ad283aa400af464c76d713c07ad', '2021-09-03 06:45:34'),
(2021038, 'Test 4', '0912831283', 'test+4@test.com', '', '', 'United States', '5929', '25d55ad283aa400af464c76d713c07ad', '2021-09-03 07:03:28');

-- --------------------------------------------------------

--
-- Table structure for table `client_business`
--

CREATE TABLE `client_business` (
  `business_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `listing_links` varchar(255) NOT NULL,
  `company_type` varchar(255) NOT NULL,
  `listing_platform` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `company_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_business`
--

INSERT INTO `client_business` (`business_id`, `client_id`, `company_name`, `listing_links`, `company_type`, `listing_platform`, `status`, `company_added`) VALUES
(1, 0, 'Test Company', 'www.facebook.com', 'Test Company', 'Google', '1', '2021-09-03 06:52:21'),
(2, 2021037, 'John Doe Corp', 'www.facebook.com', 'John Doe Corp', 'Google', '1', '2021-09-03 06:55:58'),
(3, 2021037, 'Company Test', 'www.facebook.com', 'Company Test', 'Trustpilot', '1', '2021-09-03 06:58:33'),
(4, 2021038, 'Company Test', 'www.facebook.com', 'Company Test', 'Trustpilot', '1', '2021-09-03 07:08:20'),
(5, 2021031, 'Xtian Dev', 'www.facebook.com', 'Xtian Dev', 'Tripadvisor', '1', '2021-09-03 21:04:25');

-- --------------------------------------------------------

--
-- Table structure for table `client_subscription`
--

CREATE TABLE `client_subscription` (
  `subscribed_id` int(11) NOT NULL,
  `client_email` varchar(255) NOT NULL,
  `subscription_id` int(11) NOT NULL,
  `subscription_status` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `review_limit` varchar(255) NOT NULL,
  `remarks` text NOT NULL,
  `subscription_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_subscription`
--

INSERT INTO `client_subscription` (`subscribed_id`, `client_email`, `subscription_id`, `subscription_status`, `payment_status`, `review_limit`, `remarks`, `subscription_added`) VALUES
(8, 'xtian@gmail.com', 2, 'Active', 'Unpaid', '20', '', '2021-08-07 04:32:51'),
(9, 'test@gmail.com', 3, 'Trial', 'Unpaid', '35', '', '2021-08-07 05:56:28'),
(10, 'john.doe@gmail.com', 3, 'Trial', 'Unpaid', '35', '', '2021-08-07 10:49:36'),
(11, 'test@reg.com', 2, 'Trial', 'Unpaid', '20', '', '2021-08-09 15:08:50'),
(12, 'test+4@test.com', 0, 'Trial', 'Unpaid', '3', '', '2021-09-03 07:03:28');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `amount_paid` varchar(255) NOT NULL,
  `type_services` varchar(255) NOT NULL,
  `number_of_orders` int(11) NOT NULL,
  `marketplace` varchar(255) NOT NULL,
  `date_paid` varchar(255) NOT NULL,
  `invoice_file` varchar(255) NOT NULL,
  `show_file` int(11) NOT NULL,
  `invoice_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `platform` varchar(255) NOT NULL,
  `order_amount` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `order_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_comment`
--

CREATE TABLE `order_comment` (
  `comment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `comment_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `subscription_id` int(11) NOT NULL,
  `subscription_name` varchar(255) NOT NULL,
  `subscription_price` varchar(255) NOT NULL,
  `subscription_desc` mediumtext NOT NULL,
  `subscription_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`subscription_id`, `subscription_name`, `subscription_price`, `subscription_desc`, `subscription_added`) VALUES
(1, 'Lite Plan', '99', 'Test', '2021-08-07 04:11:12'),
(2, 'Pro Plan', '179', 'Test', '2021-08-07 04:11:12'),
(3, 'Premium Plan', '249', 'Test', '2021-08-07 04:11:12');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `ticket_no` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `subject_line` varchar(255) NOT NULL,
  `marketplace` varchar(255) NOT NULL,
  `problem` text NOT NULL,
  `ticket_status` varchar(255) NOT NULL,
  `ticket_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_message`
--

CREATE TABLE `ticket_message` (
  `message_id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `sender_name` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `message_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_note`
--
ALTER TABLE `admin_note`
  ADD PRIMARY KEY (`note_id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`announcement_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `client_business`
--
ALTER TABLE `client_business`
  ADD PRIMARY KEY (`business_id`);

--
-- Indexes for table `client_subscription`
--
ALTER TABLE `client_subscription`
  ADD PRIMARY KEY (`subscribed_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_comment`
--
ALTER TABLE `order_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`subscription_id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticket_no`);

--
-- Indexes for table `ticket_message`
--
ALTER TABLE `ticket_message`
  ADD PRIMARY KEY (`message_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_note`
--
ALTER TABLE `admin_note`
  MODIFY `note_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `announcement_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2021039;

--
-- AUTO_INCREMENT for table `client_business`
--
ALTER TABLE `client_business`
  MODIFY `business_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `client_subscription`
--
ALTER TABLE `client_subscription`
  MODIFY `subscribed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_comment`
--
ALTER TABLE `order_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `subscription_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ticket_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket_message`
--
ALTER TABLE `ticket_message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
