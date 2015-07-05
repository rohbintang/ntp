-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2015 at 06:36 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `akhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('08e34b5a7ddcc66fa726ff7683a3d04f', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.65 Safari/537.36', 1432603683, ''),
('20ddfff28ecae70add911fe6f1f88d7e', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.65 Safari/537.36', 1432611705, 'a:7:{s:9:"user_data";s:0:"";s:7:"user_id";s:2:"21";s:9:"user_name";s:13:"Administrator";s:10:"user_email";s:22:"admin@ngunduhmantu.com";s:13:"user_username";s:5:"admin";s:13:"user_password";s:32:"21232f297a57a5a743894a0e4a801fc3";s:9:"logged_in";b:1;}');

-- --------------------------------------------------------

--
-- Table structure for table `nm_approvals`
--

CREATE TABLE IF NOT EXISTS `nm_approvals` (
`approval_id` int(11) NOT NULL,
  `approval_date` date NOT NULL,
  `approval_total` int(10) NOT NULL,
  `approval_message` text NOT NULL,
  `approval_status` int(1) NOT NULL,
  `request_id` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nm_approvals`
--

INSERT INTO `nm_approvals` (`approval_id`, `approval_date`, `approval_total`, `approval_message`, `approval_status`, `request_id`) VALUES
(8, '2015-05-13', 0, ' ', 1, 'RQ21268261'),
(9, '2015-05-22', 0, ' ', 1, 'RQ21414352'),
(10, '2015-05-24', 0, ' ', 1, 'RQ21431031'),
(11, '2015-05-24', 0, ' ', 1, 'RQ21431052');

-- --------------------------------------------------------

--
-- Table structure for table `nm_customers`
--

CREATE TABLE IF NOT EXISTS `nm_customers` (
`customer_id` int(4) NOT NULL,
  `customer_name` varchar(32) NOT NULL,
  `customer_uname` varchar(12) NOT NULL,
  `customer_pwd` varchar(32) NOT NULL,
  `customer_phone` varchar(12) NOT NULL,
  `customer_email` varchar(32) NOT NULL,
  `customer_address` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nm_customers`
--

INSERT INTO `nm_customers` (`customer_id`, `customer_name`, `customer_uname`, `customer_pwd`, `customer_phone`, `customer_email`, `customer_address`) VALUES
(1, 'mabrur roh bintang jaya', 'jaya', 'ce9689abdeab50b5bee3b56c7aadee27', '085729353517', 'm.rohbintang@ymail.com', 'sewon,timbuharjo,sewon,bantul');

-- --------------------------------------------------------

--
-- Table structure for table `nm_developers`
--

CREATE TABLE IF NOT EXISTS `nm_developers` (
`developer_id` int(10) NOT NULL,
  `developer_uname` varchar(12) NOT NULL,
  `developer_pwd` varchar(32) NOT NULL,
  `developer_name` varchar(32) NOT NULL,
  `developer_email` varchar(32) NOT NULL,
  `developer_kontak` varchar(32) NOT NULL,
  `developer_address` text NOT NULL,
  `developer_bio` text NOT NULL,
  `developer_image` varchar(32) NOT NULL,
  `developer_theme_collection` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nm_developers`
--

INSERT INTO `nm_developers` (`developer_id`, `developer_uname`, `developer_pwd`, `developer_name`, `developer_email`, `developer_kontak`, `developer_address`, `developer_bio`, `developer_image`, `developer_theme_collection`) VALUES
(2, 'bintang', '801dc3c9e3bcd2a3cf428f3b79b312b6', 'bintang', 'bintang.dev@gmail.com', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nm_orders`
--

CREATE TABLE IF NOT EXISTS `nm_orders` (
  `order_id` varchar(12) NOT NULL,
  `customer_id` int(4) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nm_orders`
--

INSERT INTO `nm_orders` (`order_id`, `customer_id`, `payment_id`, `order_date`) VALUES
('OR11212313', 1, 1, '2015-01-13'),
('OR114134114', 1, 3, '2015-01-15'),
('OR114135617', 1, 4, '2015-01-15'),
('OR11414338', 1, 5, '2015-05-22'),
('OR114152051', 1, 6, '2015-05-22'),
('OR11445038', 1, 7, '2015-05-25'),
('OR11452918', 1, 2, '2015-01-15');

-- --------------------------------------------------------

--
-- Table structure for table `nm_order_detail`
--

CREATE TABLE IF NOT EXISTS `nm_order_detail` (
`id` int(11) NOT NULL,
  `order_id` varchar(12) NOT NULL,
  `theme_id` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nm_order_detail`
--

INSERT INTO `nm_order_detail` (`id`, `order_id`, `theme_id`) VALUES
(1, 'OR11212313', 'TH212682615'),
(2, 'OR114152051', 'TH212682615'),
(3, 'OR11445038', 'TH212682615');

-- --------------------------------------------------------

--
-- Table structure for table `nm_payments`
--

CREATE TABLE IF NOT EXISTS `nm_payments` (
`payment_id` int(11) NOT NULL,
  `payment_date` date NOT NULL,
  `payment_total` int(11) NOT NULL,
  `payment_message` text NOT NULL,
  `payment_status` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nm_payments`
--

INSERT INTO `nm_payments` (`payment_id`, `payment_date`, `payment_total`, `payment_message`, `payment_status`) VALUES
(1, '2015-05-22', 20000, ' ', 2),
(2, '0000-00-00', 20000, '', 0),
(3, '0000-00-00', 80000, '', 0),
(4, '0000-00-00', 130000, '', 0),
(5, '0000-00-00', 1000000, '', 0),
(6, '2015-05-22', 1000000, ' ', 2),
(7, '2015-05-25', 1000000, ' udah ane bayar gan', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nm_requests`
--

CREATE TABLE IF NOT EXISTS `nm_requests` (
  `request_id` varchar(10) NOT NULL,
  `theme_id` varchar(11) NOT NULL,
  `request_date` date NOT NULL,
  `request_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nm_requests`
--

INSERT INTO `nm_requests` (`request_id`, `theme_id`, `request_date`, `request_status`) VALUES
('RQ21268261', 'TH212682615', '2015-05-07', 1),
('RQ21414352', 'TH214143520', '2015-05-22', 1),
('RQ21431031', 'TH214310312', '2015-05-24', 1),
('RQ21431052', 'TH214310523', '2015-05-24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nm_theme`
--

CREATE TABLE IF NOT EXISTS `nm_theme` (
  `theme_id` varchar(11) NOT NULL,
  `theme_name` varchar(32) NOT NULL,
  `theme_description` text NOT NULL,
  `theme_preview` varchar(32) NOT NULL,
  `theme_images` varchar(40) NOT NULL,
  `theme_files` varchar(32) NOT NULL,
  `theme_category` varchar(32) NOT NULL,
  `theme_resolution` varchar(32) NOT NULL,
  `theme_widget` varchar(32) NOT NULL,
  `theme_compatibility` varchar(32) NOT NULL,
  `theme_framework` varchar(32) NOT NULL,
  `theme_wp_version` varchar(32) NOT NULL,
  `theme_files_included` varchar(32) NOT NULL,
  `theme_column` varchar(32) NOT NULL,
  `theme_layout` varchar(32) NOT NULL,
  `theme_demo_url` varchar(32) NOT NULL,
  `theme_usulan_harga` varchar(9) NOT NULL,
  `theme_tags` text NOT NULL,
  `theme_msg_reviewer` text NOT NULL,
  `theme_agrement` varchar(32) NOT NULL,
  `theme_status` int(1) NOT NULL,
  `theme_price` int(9) NOT NULL,
  `developer_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nm_theme`
--

INSERT INTO `nm_theme` (`theme_id`, `theme_name`, `theme_description`, `theme_preview`, `theme_images`, `theme_files`, `theme_category`, `theme_resolution`, `theme_widget`, `theme_compatibility`, `theme_framework`, `theme_wp_version`, `theme_files_included`, `theme_column`, `theme_layout`, `theme_demo_url`, `theme_usulan_harga`, `theme_tags`, `theme_msg_reviewer`, `theme_agrement`, `theme_status`, `theme_price`, `developer_id`) VALUES
('TH212682615', 'karatok', ' lorem ipsum dolor si amet  lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n lorem ipsum dolor si amet \r\n \r\n', '', 'CSS3.jpg', 'InstalasiThemeSandalJepit.zip', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 1000000, 2),
('TH214143520', 'wak wak', 'askdfj kasjfka askdfj aksdjfa ksdfjaksjfd aksjfdaksjfd aksjfdaksjfdaksdfj  askdfj kasjfka askdfj aksdjfa ksdfjaksjfd aksjfdaksjfd aksjfdaksjfdaksdfj  askdfj kasjfka askdfj aksdjfa ksdfjaksjfd aksjfdaksjfd aksjfdaksjfdaksdfj  askdfj kasjfka askdfj aksdjfa ksdfjaksjfd aksjfdaksjfd aksjfdaksjfdaksdfj  askdfj kasjfka askdfj aksdjfa ksdfjaksjfd aksjfdaksjfd aksjfdaksjfdaksdfj  askdfj kasjfka askdfj aksdjfa ksdfjaksjfd aksjfdaksjfd aksjfdaksjfdaksdfj  askdfj kasjfka askdfj aksdjfa ksdfjaksjfd aksjfdaksjfd aksjfdaksjfdaksdfj  askdfj kasjfka askdfj aksdjfa ksdfjaksjfd aksjfdaksjfd aksjfdaksjfdaksdfj  askdfj kasjfka askdfj aksdjfa ksdfjaksjfd aksjfdaksjfd aksjfdaksjfdaksdfj  askdfj kasjfka askdfj aksdjfa ksdfjaksjfd aksjfdaksjfd aksjfdaksjfdaksdfj  askdfj kasjfka askdfj aksdjfa ksdfjaksjfd aksjfdaksjfd aksjfdaksjfdaksdfj  askdfj kasjfka askdfj aksdjfa ksdfjaksjfd aksjfdaksjfd aksjfdaksjfdaksdfj  askdfj kasjfka askdfj aksdjfa ksdfjaksjfd aksjfdaksjfd aksjfdaksjfdaksdfj  askdfj kasjfka askdfj aksdjfa ksdfjaksjfd aksjfdaksjfd aksjfdaksjfdaksdfj  askdfj kasjfka askdfj aksdjfa ksdfjaksjfd aksjfdaksjfd aksjfdaksjfdaksdfj  askdfj kasjfka askdfj aksdjfa ksdfjaksjfd aksjfdaksjfd aksjfdaksjfdaksdfj  askdfj kasjfka askdfj aksdjfa ksdfjaksjfd aksjfdaksjfd aksjfdaksjfdaksdfj  askdfj kasjfka askdfj aksdjfa ksdfjaksjfd aksjfdaksjfd aksjfdaksjfdaksdfj  askdfj kasjfka askdfj aksdjfa ksdfjaksjfd aksjfdaksjfd aksjfdaksjfdaksdfj  askdfj kasjfka askdfj aksdjfa ksdfjaksjfd aksjfdaksjfd aksjfdaksjfdaksdfj  askdfj kasjfka askdfj aksdjfa ksdfjaksjfd aksjfdaksjfd aksjfdaksjfdaksdfj  askdfj kasjfka askdfj aksdjfa ksdfjaksjfd aksjfdaksjfd aksjfdaksjfdaksdfj  askdfj kasjfka askdfj aksdjfa ksdfjaksjfd aksjfdaksjfd aksjfdaksjfdaksdfj  ', '', 'css3-html5-logo-initial.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 1200000, 2),
('TH214310312', 'Theme New', 'New Themes  New Themes  New Themes  New Themes  New Themes  New Themes  New Themes  New Themes  New Themes  New Themes  New Themes  New Themes  New Themes  New Themes  New Themes  New Themes  New Themes  New Themes  New Themes  New Themes  New Themes  New Themes  New Themes  New Themes  ', '', 'blackberry.png', 'mysql-connector-java-5.0.8.zip', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 4000000, 2),
('TH214310523', 'New New', 'Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  Themes New New  ', '', 'ms office.png', 'Abstrak_Buku.docx', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 2100000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `nm_tickets`
--

CREATE TABLE IF NOT EXISTS `nm_tickets` (
`id_ticket` int(10) NOT NULL,
  `ticket_subjects` varchar(32) NOT NULL,
  `ticket_content` text NOT NULL,
  `ticket_date` date NOT NULL,
  `ticket_categories` varchar(65) NOT NULL,
  `developer_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nm_users`
--

CREATE TABLE IF NOT EXISTS `nm_users` (
`user_id` int(10) unsigned NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL DEFAULT '',
  `user_username` varchar(50) NOT NULL,
  `user_password` varchar(60) NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nm_users`
--

INSERT INTO `nm_users` (`user_id`, `user_name`, `user_email`, `user_username`, `user_password`) VALUES
(1, 'chandra1', 'chandra@gmail.com', 'phantom', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'indra', 'indra@gmail.com', 'indransyah', '21232f297a57a5a743894a0e4a801fc3'),
(11, 'mujib', 'mujib@gmail.com', 'iqbal', 'e10adc3949ba59abbe56e057f20f883e'),
(12, 'bintang', 'bintang@gmail.com', 'mabrur', 'e10adc3949ba59abbe56e057f20f883e'),
(13, 'april', 'april@gmail.com', 'shinra', 'e10adc3949ba59abbe56e057f20f883e'),
(14, 'kholiq', 'kholiq@gmail.com', 'ahmad', 'e10adc3949ba59abbe56e057f20f883e'),
(15, 'fahmi', 'fahmi@gmail.com', 'jundardo', 'e10adc3949ba59abbe56e057f20f883e'),
(16, 'hary', 'hary@gmail.com', 'alex', 'e10adc3949ba59abbe56e057f20f883e'),
(17, 'dani', 'dani@gmail.com', 'gendut', 'e10adc3949ba59abbe56e057f20f883e'),
(18, 'daus', 'daus@gmail.com', 'maho', 'e10adc3949ba59abbe56e057f20f883e'),
(19, 'agus', 'agus@gmail.com', 'mahobgt', 'e10adc3949ba59abbe56e057f20f883e'),
(20, 'riza', 'riza@gmail.com', 'samson', 'e10adc3949ba59abbe56e057f20f883e'),
(21, 'Administrator', 'admin@ngunduhmantu.com', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(22, 'karatok', 'karatok@gmail.com', 'karatok', '857cd27627f86e975df99a28c405500f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `nm_approvals`
--
ALTER TABLE `nm_approvals`
 ADD PRIMARY KEY (`approval_id`), ADD KEY `request_id` (`request_id`);

--
-- Indexes for table `nm_customers`
--
ALTER TABLE `nm_customers`
 ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `nm_developers`
--
ALTER TABLE `nm_developers`
 ADD PRIMARY KEY (`developer_id`), ADD UNIQUE KEY `developer_uname` (`developer_uname`);

--
-- Indexes for table `nm_orders`
--
ALTER TABLE `nm_orders`
 ADD PRIMARY KEY (`order_id`), ADD KEY `buyers_id` (`customer_id`), ADD KEY `buy_date` (`order_date`), ADD KEY `payment_id` (`payment_id`), ADD KEY `payment_id_2` (`payment_id`);

--
-- Indexes for table `nm_order_detail`
--
ALTER TABLE `nm_order_detail`
 ADD PRIMARY KEY (`id`), ADD KEY `order_id` (`order_id`), ADD KEY `theme_id` (`theme_id`);

--
-- Indexes for table `nm_payments`
--
ALTER TABLE `nm_payments`
 ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `nm_requests`
--
ALTER TABLE `nm_requests`
 ADD PRIMARY KEY (`request_id`), ADD KEY `invitation_id` (`theme_id`), ADD KEY `invitation_id_2` (`theme_id`);

--
-- Indexes for table `nm_theme`
--
ALTER TABLE `nm_theme`
 ADD PRIMARY KEY (`theme_id`), ADD KEY `developer_id` (`developer_id`);

--
-- Indexes for table `nm_tickets`
--
ALTER TABLE `nm_tickets`
 ADD PRIMARY KEY (`id_ticket`);

--
-- Indexes for table `nm_users`
--
ALTER TABLE `nm_users`
 ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `user_email` (`user_email`), ADD UNIQUE KEY `user_username` (`user_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nm_approvals`
--
ALTER TABLE `nm_approvals`
MODIFY `approval_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `nm_customers`
--
ALTER TABLE `nm_customers`
MODIFY `customer_id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nm_developers`
--
ALTER TABLE `nm_developers`
MODIFY `developer_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nm_order_detail`
--
ALTER TABLE `nm_order_detail`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `nm_payments`
--
ALTER TABLE `nm_payments`
MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `nm_tickets`
--
ALTER TABLE `nm_tickets`
MODIFY `id_ticket` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nm_users`
--
ALTER TABLE `nm_users`
MODIFY `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `nm_approvals`
--
ALTER TABLE `nm_approvals`
ADD CONSTRAINT `nm_approvals_ibfk_1` FOREIGN KEY (`request_id`) REFERENCES `nm_requests` (`request_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nm_orders`
--
ALTER TABLE `nm_orders`
ADD CONSTRAINT `nm_orders_ibfk_4` FOREIGN KEY (`customer_id`) REFERENCES `nm_customers` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `nm_orders_ibfk_5` FOREIGN KEY (`payment_id`) REFERENCES `nm_payments` (`payment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nm_order_detail`
--
ALTER TABLE `nm_order_detail`
ADD CONSTRAINT `nm_order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `nm_orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `nm_order_detail_ibfk_2` FOREIGN KEY (`theme_id`) REFERENCES `nm_theme` (`theme_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nm_requests`
--
ALTER TABLE `nm_requests`
ADD CONSTRAINT `nm_requests_ibfk_4` FOREIGN KEY (`theme_id`) REFERENCES `nm_theme` (`theme_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nm_theme`
--
ALTER TABLE `nm_theme`
ADD CONSTRAINT `nm_theme_ibfk_1` FOREIGN KEY (`developer_id`) REFERENCES `nm_developers` (`developer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
