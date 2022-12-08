-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 03:43 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `chefid` varchar(100) NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`name`, `description`, `cuisine`, `diet`, `price`, `carbohydrates`, `protein`, `fat`, `id`, `image`, `chefid`, `rating`) VALUES
('Kebbe', 'Kebbe', 'turkish', 'vegetarian', 120000, 12, 10, 50, 33, 'kebbe-libanaise-3-780x470.jpg.webp', 'rissal', 0),
('Noodles', 'Noodles', 'chinese', 'vegetarian', 120000, 14, 23, 21, 36, 'ramen-noodles-featured.jpg', 'rissal', 0),
('Spaghetti', 'Spaghetti', 'italian', 'vegan', 150000, 12, 32, 2, 37, 'Spaghetti-with-Meat-Sauce-Recipe-1-1200.jpg', 'rissal', 0),
('Pizza', 'Pizza', 'italian', 'keto', 50000, 50, 10, 10, 38, 'Eq_it-na_pizza-margherita_sep2005_sml.jpg', 'rissal', 0),
('Knefe', 'Knefe', 'turkish', 'vegetarian', 80000, 60, 13, 20, 39, 'knefe_cheese_plate_2.jpg', 'kamil', 0),
('Farrouj', 'Farrouj', 'none', 'none', 300000, 12, 20, 10, 40, '241929befd768760c624685185ff10f8_featured_v2.avif', 'kamil', 0),
('Chicken Tenders', '6-piece Chicken Tenders', 'none', 'keto', 200000, 5, 20, 10, 41, '3973d54d-0004-4c06-a9d1-0843f3bf3efa.jpg', 'rissal', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `chefid` int(11) NOT NULL,
  `dishid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `request` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`id`, `name`) VALUES
(1, 'Kebbe'),
(2, 'Pizza'),
(4, 'Farrouj'),
(5, 'Farrouj'),
(6, 'Nos Farrouj'),
(7, 'Pasta'),
(8, 'Spaghetti'),
(9, 'Chicken tenders'),
(10, 'Malfouf'),
(11, 'Malawi'),
(12, 'Chakhchoukha'),
(13, 'Trida'),
(14, 'Farrouj'),
(15, 'Nos Farrouj'),
(16, 'Noodles'),
(17, 'Corn'),
(18, 'Knefe'),
(19, 'Chocolate cookies'),
(20, 'Flan au chocolat'),
(21, 'Chakhchoukha'),
(22, 'Baklava'),
(23, 'Noodles'),
(24, 'Spaghetti'),
(25, 'Pizza'),
(26, 'Knefe'),
(27, 'Farrouj'),
(28, 'Chicken Tenders'),
(29, 'Ddd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `address`, `password`) VALUES
(132, 'rissal', 'rissalhedna@hotmail.com', 'somewhere in the world', '7d1e01499f9a3371c05dc6f28838488ccaa8a441'),
(133, 'jamil', 'jamil@gmail.com', 'somewhere in the world', '5c2dd944dde9e08881bef0894fe7b22a5c9c4b06'),
(134, 'mehdi', 'mehdi@gmail.com', 'somewhere in the world', 'd8932fd49bb05ff0670c3545d15547cb7baaf208'),
(135, 'younes', 'younes@gmail.com', 'somewhere in the world', 'c7329b36a0495cf910391ad2e5f975504b63b59e'),
(136, 'rissalhedna', 'riss@riss.com', 'somewhere in the world', '5cb138284d431abd6a053a56625ec088bfb88912'),
(137, 'Hanine', 'hanne@gmail.om', 'somewhere in the world', '5a95d36bea3ca992bc8f3449d3d530ab83cc60de'),
(138, 'khalil', 'khalil@gmail.com', 'somewhere in the world', '8c6617dbddaf5ee6d4dd0a91108429ecf6018408'),
(139, 'kamil', 'kamil@gmail.com', 'somewhere in the world', 'ab239c5a26a103f02214f1ae199f6dad0108e000'),
(140, 'hgj', 'fjg@ghvb.h', 'somewhere in the world', '1041179cbdda366fd7b0347f09255f775170e103'),
(141, 'passis123', 'passis123@gmail.com', 'somewhere in the world', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

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
-- Indexes for table `search`
--
ALTER TABLE `search`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
