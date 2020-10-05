-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2020 at 10:45 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lexa_lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_cont`
--

CREATE TABLE `about_cont` (
  `id` int(11) NOT NULL,
  `cont` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_cont`
--

INSERT INTO `about_cont` (`id`, `cont`) VALUES
(2, 'Medicine is the science and practice of establishing the diagnosis, prognosis, treatment, and prevention of disease. Medicine encompasses a variety of health care practices evolved to maintain and restore health by the prevention and treatment of illnes.\r\n\r\nMedicines are chemicals or compounds used to cure, halt, or prevent disease; ease symptoms; or help in the diagnosis of illnesses. Advances in medicines have enabled doctors to cure many diseases and save lives. These days, medicines come from a variety of sources.');

-- --------------------------------------------------------

--
-- Table structure for table `about_gallery`
--

CREATE TABLE `about_gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_gallery`
--

INSERT INTO `about_gallery` (`id`, `image`) VALUES
(4, 'capsule-5174159_960_720.jpg'),
(5, 'medicine-2449619_960_720.jpg'),
(6, 'pills-medicine-capsules-wallpaper-preview.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `user_name`, `password`, `email`, `contact`, `address`, `image`, `type`) VALUES
(1, 'Lexa Labs', 'lexalabs', '827ccb0eea8a706c4c34a16891f84e7b', 'laxianinc011@gmail.com', '+91 731-2561626', '55 , Patrakar Colony,Indore (M.P.) – 452018', 'logo.png', 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `datee` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `datee`, `content`, `image`) VALUES
(1, 'latest blog are here', '2020-10-09', 'latest blog content is here', 'pills-medicine-capsules-wallpaper-preview.jpg'),
(2, 'testing blog section', '2020-10-09', 'blog section content', 'medicine-2449619_960_720.jpg'),
(3, 'testing blog section', '2020-10-04', 'testing  blog content', 'capsule-5174159_960_720.jpg'),
(4, 'testing blog sections', '2020-10-15', 'testing blog content section', 'pills-2607338_1920.jpg'),
(5, 'tasted blog', '2020-10-09', 'test blog gggg', 'about-img-03.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `button_room`
--

CREATE TABLE `button_room` (
  `button_id` int(11) NOT NULL,
  `button_name` varchar(255) NOT NULL,
  `room_id` int(11) NOT NULL,
  `isSchedule` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0-off , 1-on',
  `isOn` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0-off, 1-on',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `button_room`
--

INSERT INTO `button_room` (`button_id`, `button_name`, `room_id`, `isSchedule`, `isOn`, `created_at`) VALUES
(1, 'Light 1', 1, 0, 0, '2020-09-23 00:22:20'),
(2, 'test', 2, 0, 1, '2020-09-23 23:59:39');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `corp_add` varchar(255) NOT NULL,
  `admin_add` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `corp_add`, `admin_add`, `email`, `phone`) VALUES
(1, '11-1-864/1&2, Seetaram Bagh,Old Mallepally Road,Hyderabad-500 001', '55 , Patrakar Colony,Indore (M.P.) – 452018', 'laxianinc011@gmail.commm', '+91 731-2561626\r\nToll-Free: 18008906410');

-- --------------------------------------------------------

--
-- Table structure for table `dimar_room`
--

CREATE TABLE `dimar_room` (
  `dimar_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `dimar_name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0-off, 1= 1-speed, 2= 2-speed,3= 3-speed, ',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dimar_room`
--

INSERT INTO `dimar_room` (`dimar_id`, `room_id`, `dimar_name`, `status`, `created_at`) VALUES
(1, 2, '0', 0, '2020-09-23 23:49:05'),
(2, 2, 'test', 0, '2020-09-23 23:55:05');

-- --------------------------------------------------------

--
-- Table structure for table `home_gallery`
--

CREATE TABLE `home_gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_gallery`
--

INSERT INTO `home_gallery` (`id`, `title`, `image`) VALUES
(4, 'Show', 'gellery1.png'),
(5, 'Show', 'gellery2.png'),
(6, 'Show', 'capsules-385949_960_720.jpg'),
(7, 'Show', 'gellery4.png'),
(8, 'Show', 'slide2.jpg'),
(9, 'Show', 'capsule-1079838_1920.jpg'),
(10, 'Show', 'gellery7.png'),
(11, 'Show', 'capsules-385949_960_720.jpg'),
(12, 'showed image dummy', 'about-img-02.jpg'),
(13, 'showed dummy  image', 'pills-medicine-capsules-wallpaper-preview.jpg'),
(14, 'dummy last', 'about-img-03.jpg'),
(15, 'dummy image latest', 'images11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home_slider`
--

CREATE TABLE `home_slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_slider`
--

INSERT INTO `home_slider` (`id`, `title`, `content`, `image`) VALUES
(3, 'Welcome to Lexa Lab', 'Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum', 'medicine-2449619_960_720.jpg'),
(4, 'We are Expert in The Field of Lab', 'Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum', 'images9.jpg'),
(5, 'We are experts', 'We are experts in the medicines', 'slide3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_name`, `created_at`) VALUES
(1, 'Bedroom', '2020-09-22 23:28:12'),
(2, 'Living Room', '2020-09-22 23:50:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `device_token` varchar(255) DEFAULT NULL,
  `device_type` int(10) DEFAULT NULL,
  `login_type` int(10) NOT NULL DEFAULT 0 COMMENT '0-normal, 1-google , 2-fb , 3-other ',
  `social_id` varchar(255) DEFAULT NULL,
  `user_status` tinyint(4) DEFAULT 1 COMMENT '1-active,  2-de_active',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `city`, `mobile`, `password`, `device_token`, `device_type`, `login_type`, `social_id`, `user_status`, `created_at`, `updated_at`) VALUES
(1, 'Rakesh', 'Patel', 'rakeshpatel@gmail.com', 'indore', '8269316557', '202cb962ac59075b964b07152d234b70', NULL, NULL, 0, NULL, 1, '0000-00-00 00:00:00', '2020-09-15 00:00:00'),
(2, 'Rakesh1', 'Patel', 'rakeshpatel0850@gmail.com', NULL, '9131156141', '6c14da109e294d1e8155be8aa4b1ce8e', NULL, NULL, 0, NULL, 1, '2020-09-17 00:00:00', '2020-09-17 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_cont`
--
ALTER TABLE `about_cont`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_gallery`
--
ALTER TABLE `about_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `button_room`
--
ALTER TABLE `button_room`
  ADD PRIMARY KEY (`button_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dimar_room`
--
ALTER TABLE `dimar_room`
  ADD PRIMARY KEY (`dimar_id`);

--
-- Indexes for table `home_gallery`
--
ALTER TABLE `home_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_slider`
--
ALTER TABLE `home_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_cont`
--
ALTER TABLE `about_cont`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `about_gallery`
--
ALTER TABLE `about_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `button_room`
--
ALTER TABLE `button_room`
  MODIFY `button_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dimar_room`
--
ALTER TABLE `dimar_room`
  MODIFY `dimar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_gallery`
--
ALTER TABLE `home_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `home_slider`
--
ALTER TABLE `home_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
