-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 12, 2022 at 11:34 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `useraccounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `cuisine` varchar(100) NOT NULL,
  `diet` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `carbohydrates` int(11) NOT NULL,
  `protein` int(11) NOT NULL,
  `fat` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `chefid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`name`, `description`, `cuisine`, `diet`, `price`, `carbohydrates`, `protein`, `fat`, `id`, `image`, `chefid`) VALUES
('Noodles', 'Noodles', 'chinese', 'vegetarian', 120000, 14, 23, 21, 36, 'ramen-noodles-featured.jpg', 'rissal'),
('Spaghetti', 'Spaghetti', 'italian', 'vegan', 150000, 12, 32, 2, 37, 'Spaghetti-with-Meat-Sauce-Recipe-1-1200.jpg', 'rissal'),
('Pizza', 'Pizza', 'italian', 'keto', 50000, 50, 10, 10, 38, 'Eq_it-na_pizza-margherita_sep2005_sml.jpg', 'rissal'),
('Knefe', 'Knefe', 'turkish', 'vegetarian', 80000, 60, 13, 20, 39, 'knefe_cheese_plate_2.jpg', 'kamil'),
('Farrouj', 'Farrouj', 'none', 'none', 300000, 12, 20, 10, 40, '241929befd768760c624685185ff10f8_featured_v2.avif', 'kamil'),
('Chicken Tenders', '6-piece Chicken Tenders', 'none', 'keto', 200000, 5, 20, 10, 41, '3973d54d-0004-4c06-a9d1-0843f3bf3efa.jpg', 'rissal'),
('Spaghetti Monster', 'An Amazing Dish Tbh', 'italian', 'vegetarian', 120000, 12, 3, 21, 46, 'spaghettimonster.png', 'chef'),
('Hommos', 'Hommos, Lemon, Thine, Zet.', 'middleeastern', 'vegetarian', 150000, 30, 10, 1, 48, 'Lebanese_style_hummus.jpg', 'jana');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `chefname` varchar(100) NOT NULL,
  `dishid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `request` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Pending',
  `price` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `dishname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customerid`, `chefname`, `dishid`, `quantity`, `request`, `status`, `price`, `image`, `dishname`) VALUES
(24, 143, 'chef', 46, 4, 'No specific request', 'Fulfilled', 120000, 'spaghettimonster.png', 'Spaghetti Monster'),
(25, 143, 'chef', 46, 1, 'No specific request', 'Fulfilled', 120000, 'spaghettimonster.png', 'Spaghetti Monster'),
(26, 143, 'chef', 46, 1, 'No specific request', 'Fulfilled', 120000, 'spaghettimonster.png', 'Spaghetti Monster'),
(27, 143, 'rissal', 37, 1, 'No specific request', 'Fulfilled', 150000, 'Spaghetti-with-Meat-Sauce-Recipe-1-1200.jpg', 'Spaghetti'),
(28, 143, 'rissal', 38, 1, 'No specific request', 'Fulfilled', 50000, 'Eq_it-na_pizza-margherita_sep2005_sml.jpg', 'Pizza'),
(29, 143, 'rissal', 38, 1, 'No specific request', 'Fulfilled', 50000, 'Eq_it-na_pizza-margherita_sep2005_sml.jpg', 'Pizza'),
(30, 143, 'chef', 46, 1, 'No specific request', 'Fulfilled', 120000, 'spaghettimonster.png', 'Spaghetti Monster'),
(31, 146, 'jana', 51, 1, 'No specific request', 'Fulfilled', 30000, 'Lebanese_style_hummus.jpg', 'Hommos'),
(32, 146, 'jana', 51, 2, 'bala zeit', 'Fulfilled', 30000, 'Lebanese_style_hummus.jpg', 'Hommos');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `address`, `district`, `city`, `phone`) VALUES
(133, 'jamil', 'jamil@gmail.com', '5c2dd944dde9e08881bef0894fe7b22a5c9c4b06', '', '', '', '0'),
(134, 'mehdi', 'mehdi@gmail.com', 'd8932fd49bb05ff0670c3545d15547cb7baaf208', '', '', '', '0'),
(135, 'younes', 'younes@gmail.com', 'c7329b36a0495cf910391ad2e5f975504b63b59e', '', '', '', '0'),
(136, 'rissalhedna', 'riss@riss.com', '5cb138284d431abd6a053a56625ec088bfb88912', '', '', '', '0'),
(137, 'Hanine', 'hanne@gmail.om', '5a95d36bea3ca992bc8f3449d3d530ab83cc60de', '', '', '', '0'),
(138, 'khalil', 'khalil@gmail.com', '8c6617dbddaf5ee6d4dd0a91108429ecf6018408', '', '', '', '0'),
(139, 'kamil', 'kamil@gmail.com', 'ab239c5a26a103f02214f1ae199f6dad0108e000', '', '', '', '0'),
(140, 'hgj', 'fjg@ghvb.h', '1041179cbdda366fd7b0347f09255f775170e103', '', '', '', '0'),
(141, 'ak', 'chayef@hotmail.com', 'f887114c19eb09b0e6f0f43c850313bde711bd73', '', '', '', '0'),
(142, 'chef', 'chef@gmail.com', 'd5f2e5c77054c44c2c72a1b017deca06fc637c99', '', '', '', '0'),
(143, 'Rissal', 'rissalhedna@gmail.com', '12dea96fec20593566ab75692c9949596833adc9', 'Santona Residance', 'beirut', 'beirut', '88888888'),
(144, 'jmm', 'jmm@gmail.com', '03809e0aec2c8e8a3f7fdb60ec4269937485984c', '', '', '', ''),
(145, 'jana', 'jana@dsds.com', 'a2468f28b1edfae3e0a0ca3842941d5601441434', '', '', '', ''),
(146, 'user', 'user@gmail.com', '12dea96fec20593566ab75692c9949596833adc9', 'Hamra', 'beirut', 'beirut', '11111111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
