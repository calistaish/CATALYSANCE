-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2023 at 06:32 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wearyourmood`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `country` varchar(250) NOT NULL,
  `region` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `zipcode` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `user_id`, `country`, `region`, `city`, `zipcode`, `address`) VALUES
(1, 2, 'Philippines', 'NCR', 'Makati', '1000', 'No 85 San Pedro St., Pinalad rd');

-- --------------------------------------------------------

--
-- Table structure for table `admincode`
--

CREATE TABLE `admincode` (
  `id` int(11) NOT NULL,
  `code` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admincode`
--

INSERT INTO `admincode` (`id`, `code`) VALUES
(1, '$2y$10$41Y7QmtkoYrb7bj1OQj/M.NhxCd89.cYybNqZnwGpD4yjvEwnQuAa');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`) VALUES
(1, 2),
(3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `item_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `design` int(11) NOT NULL,
  `img` int(11) GENERATED ALWAYS AS (case when `design` = 0 then 1 else `design` end) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`item_id`, `cart_id`, `product_id`, `quantity`, `design`) VALUES
(6, 3, 2, 3, 0),
(13, 1, 1, 5, 2),
(14, 1, 2, 4, 9),
(27, 1, 37, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'Tote Bag'),
(2, 'Mug'),
(3, 'Mousepad');

-- --------------------------------------------------------

--
-- Table structure for table `checkoutinfo`
--

CREATE TABLE `checkoutinfo` (
  `id` int(11) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `surname` varchar(250) NOT NULL,
  `companyname` varchar(250) DEFAULT NULL,
  `country` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `modeofpayment` varchar(250) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkoutinfo`
--

INSERT INTO `checkoutinfo` (`id`, `firstname`, `surname`, `companyname`, `country`, `address`, `city`, `zipcode`, `phone`, `email`, `modeofpayment`, `user_id`) VALUES
(1, 'Elcarlwen', 'Guirhem', '', 'Philippines', 'No 85 San Pedro St., Pinalad rd', 'Makati', 1000, '09980940491', 'elcarlwenguirhem@gmail.com', 'GCASH', 2),
(2, 'Elcarlwen', 'Guirhem', '', 'Philippines', 'No 85 San Pedro St., Pinalad rd', 'Makati', 1000, '09980940491', 'elcarlwenguirhem@gmail.com', 'GCASH', 2),
(3, 'Elcarlwen', 'Guirhem', '', 'Philippines', 'No 85 San Pedro St., Pinalad rd', 'Makati', 1000, '09980940491', 'elcarlwenguirhem@gmail.com', 'GCASH', 2),
(4, 'Elcarlwen', 'Guirhem', '', 'Philippines', 'No 85 San Pedro St., Pinalad rd', 'Makati', 1000, '09980940491', 'elcarlwenguirhem@gmail.com', 'GCASH', 2),
(5, 'Elcarlwen', 'Guirhem', '', 'Philippines', 'No 85 San Pedro St., Pinalad rd', 'Makati', 1000, '09980940491', 'elcarlwenguirhem@gmail.com', 'GCASH', 2),
(6, 'Elcarlwen', 'Guirhem', '', 'Philippines', 'No 85 San Pedro St., Pinalad rd', 'Makati', 1000, '09980940491', 'elcarlwenguirhem@gmail.com', 'GCASH', 2),
(7, 'Elcarlwen', 'Guirhem', '', 'Philippines', 'No 85 San Pedro St., Pinalad rd', 'Makati', 1000, '09980940491', 'elcarlwenguirhem@gmail.com', 'GCASH', 2),
(8, 'Elcarlwen', 'Guirhem', '', 'Philippines', 'No 85 San Pedro St., Pinalad rd', 'Makati', 1000, '09980940491', 'elcarlwenguirhem@gmail.com', 'GCASH', 2),
(9, 'Elcarlwen', 'Guirhem', '', 'Philippines', 'No 85 San Pedro St., Pinalad rd', 'Makati', 1000, '09980940491', 'elcarlwenguirhem@gmail.com', 'GCASH', 2),
(10, 'Elcarlwen', 'Guirhem', '', 'Philippines', 'No 85 San Pedro St., Pinalad rd', 'Makati', 1000, '09980940491', 'elcarlwenguirhem@gmail.com', 'GCASH', 2),
(11, 'Elcarlwen', 'Guirhem', '', 'Philippines', 'No 85 San Pedro St., Pinalad rd', 'Makati', 1000, '09980940491', 'elcarlwenguirhem@gmail.com', 'GCASH', 2),
(12, 'Elcarlwen', 'Guirhem', '', 'Philippines', 'No 85 San Pedro St., Pinalad rd', 'Makati', 1000, '09980940491', 'elcarlwenguirhem@gmail.com', 'GCASH', 2),
(13, 'Elcarlwen', 'Guirhem', '', 'Philippines', 'No 85 San Pedro St., Pinalad rd', 'Makati', 1000, '09980940491', 'elcarlwenguirhem@gmail.com', 'GCASH', 2),
(14, 'Elcarlwen', 'Guirhem', '', 'Philippines', 'No 85 San Pedro St., Pinalad rd', 'Makati', 1000, '09980940491', 'elcarlwenguirhem@gmail.com', 'GCASH', 2),
(15, 'Elcarlwen', 'Guirhem', '', 'Philippines', 'No 85 San Pedro St., Pinalad rd', 'Makati', 1000, '09980940491', 'elcarlwenguirhem@gmail.com', 'GCASH', 2),
(16, 'Elcarlwen', 'Guirhem', '', 'Philippines', 'No 85 San Pedro St., Pinalad rd', 'Makati', 1000, '09980940491', 'elcarlwenguirhem@gmail.com', 'GCASH', 2),
(17, 'Elcarlwen', 'Guirhem', '', 'Philippines', 'No 85 San Pedro St., Pinalad rd', 'Makati', 1000, '09980940491', 'elcarlwenguirhem@gmail.com', 'GCASH', 2),
(18, 'Elcarlwen', 'Guirhem', '', 'Philippines', 'No 85 San Pedro St., Pinalad rd', 'Makati', 1000, '09980940491', 'elcarlwenguirhem@gmail.com', 'GCASH', 2),
(19, 'Elcarlwen', 'Guirhem', '', 'Philippines', 'No 85 San Pedro St., Pinalad rd', 'Makati', 1000, '09980940491', 'elcarlwenguirhem@gmail.com', 'GCASH', 2),
(20, 'Elcarlwen', 'Guirhem', '', 'Philippines', 'No 85 San Pedro St., Pinalad rd', 'Makati', 1000, '09980940491', 'elcarlwenguirhem@gmail.com', 'GCASH', 2),
(21, 'Elcarlwen', 'Guirhem', '', 'Philippines', 'No 85 San Pedro St., Pinalad rd', 'Makati', 1000, '09980940491', 'elcarlwenguirhem@gmail.com', 'GCASH', 2),
(22, 'Elcarlwen', 'Guirhem', '', 'Philippines', 'No 85 San Pedro St., Pinalad rd', 'Makati', 1000, '09980940491', 'elcarlwenguirhem@gmail.com', 'GCASH', 2),
(23, 'Elcarlwen', 'Guirhem', '', 'Philippines', 'No 85 San Pedro St., Pinalad rd', 'Makati', 1000, '09980940491', 'elcarlwenguirhem@gmail.com', 'GCASH', 2),
(24, 'Elcarlwen', 'Guirhem', '', 'Philippines', 'No 85 San Pedro St., Pinalad rd', 'Makati', 1000, '09980940491', 'elcarlwenguirhem@gmail.com', 'GCASH', 2),
(25, 'Elcarlwen', 'Guirhem', '', 'Philippines', 'No 85 San Pedro St., Pinalad rd', 'Makati', 1000, '09980940491', 'elcarlwenguirhem@gmail.com', 'GCASH', 2),
(26, 'Elcarlwen', 'Guirhem', '', 'Philippines', 'No 85 San Pedro St., Pinalad rd', 'Makati', 1000, '09980940491', 'elcarlwenguirhem@gmail.com', 'GCASH', 2);

-- --------------------------------------------------------

--
-- Table structure for table `custom`
--

CREATE TABLE `custom` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `details` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `details`) VALUES
(1, '- Reusable, lightweight go-everywhere bag keeps you ready to shop responsibly\r\n- The bag measures 12\" x 14 inches\"\r\n- Lightweight 4.2 oz (145g) 100% canvas fabric\r\n- Straps are 1.2 inches wide and 19 inches long\r\n- One-sided design, digitally printed'),
(2, '- Thick canvas fabric used\r\n- Sturdy. Can carry heavy items\r\n- Reusable, lightweight go-everywhere bag keeps you ready to shop responsibly\r\n- The bag measures 14\" x 16 inches\" / 12 X 14 inches\r\n- Lightweight \r\n- Do not bleach\r\n- Wash in cold water'),
(3, '- High quality\n- Rubber backed mousepad\n- 7.5 x 8 inches\n- 5mm thickness\n- No limitations on color\n- Add logo, pictures, collage, artwork, or any design\n- We can print full color using CMYK and the artwork transferred using 200C heat and pressure.\n- '),
(4, 'SIZE: 5MM\nMATERIAL: RUBBER\nPRINTING METHOD: SUBLIMATION'),
(5, 'SIZE: 7.5 X 8 INCHES\nTHICKNESS: 5MM\nMATERIAL: HIGH-QUALITY RUBBER MOUSEPAD\nPRINTING METHOD: SUBLIMATION'),
(6, 'SIZE: 3MM\nMATERIAL: RUBBER\nPRINTING METHOD: SUBLIMATION'),
(7, 'Material: Ceramic\r\nCapacity: 340ml\r\nDimensions: 8.2x9.6cm');

-- --------------------------------------------------------

--
-- Stand-in structure for view `displayitems`
-- (See below for the actual view)
--
CREATE TABLE `displayitems` (
`cart_id` int(11)
,`item_id` int(11)
,`name` varchar(250)
,`theme` varchar(250)
,`quantity` int(11)
,`price` double
,`subtotal` double
);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `type` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `product_id`, `image`, `type`) VALUES
(1, 1, 'img/products/mousepad/1/1.jpg', 'primary'),
(2, 1, 'img/products/mousepad/1/2.jpg', ''),
(3, 1, 'img/products/mousepad/1/3.jpg', ''),
(4, 1, 'img/products/mousepad/1/4.jpg', ''),
(5, 1, 'img/products/mousepad/1/5.jpg', ''),
(6, 1, 'img/products/mousepad/1/6.jpg', ''),
(7, 1, 'img/products/mousepad/1/7.jpg', ''),
(8, 2, 'img/products/mousepad/2/1.jpg', 'primary'),
(9, 2, 'img/products/mousepad/2/2.jpg', ''),
(10, 2, 'img/products/mousepad/2/3.jpg', ''),
(11, 2, 'img/products/mousepad/2/4.jpg', ''),
(12, 2, 'img/products/mousepad/2/5.jpg', ''),
(13, 2, 'img/products/mousepad/2/6.jpg', ''),
(14, 3, 'img/products/mousepad/3/1.jpg', 'primary'),
(15, 3, 'img/products/mousepad/3/2.jpg', ''),
(16, 3, 'img/products/mousepad/3/3.jpg', ''),
(17, 3, 'img/products/mousepad/3/4.jpg', ''),
(18, 3, 'img/products/mousepad/3/5.jpg', ''),
(19, 3, 'img/products/mousepad/3/6.jpg', ''),
(20, 3, 'img/products/mousepad/3/7.jpg', ''),
(21, 4, 'img/products/mousepad/4/1.jpg', 'primary'),
(22, 4, 'img/products/mousepad/4/2.jpg', ''),
(23, 4, 'img/products/mousepad/4/3.jpg', ''),
(24, 4, 'img/products/mousepad/4/4.jpg', ''),
(25, 4, 'img/products/mousepad/4/5.jpg', ''),
(26, 5, 'img/products/mousepad/5/1.jpg', 'primary'),
(27, 5, 'img/products/mousepad/5/2.jpg', ''),
(28, 5, 'img/products/mousepad/5/3.jpg', ''),
(29, 5, 'img/products/mousepad/5/4.jpg', ''),
(30, 5, 'img/products/mousepad/5/5.jpg', ''),
(31, 5, 'img/products/mousepad/5/6.jpg', ''),
(32, 5, 'img/products/mousepad/5/7.jpg', ''),
(33, 6, 'img/products/mug/1/c.jpg', 'primary'),
(34, 6, 'img/products/mug/1/b.jpg', 'primary'),
(35, 6, 'img/products/mug/1/a.jpg', 'primary'),
(36, 7, 'img/products/mug/2/a.jpg', 'primary'),
(37, 7, 'img/products/mug/2/b.jpg', 'primary'),
(38, 7, 'img/products/mug/2/c.jpg', 'primary'),
(39, 8, 'img/products/mug/3/a.jpg', 'primary'),
(40, 8, 'img/products/mug/3/b.jpg', 'primary'),
(41, 8, 'img/products/mug/3/c.jpg', 'primary'),
(42, 9, 'img/products/mug/4/a.jpg', 'primary'),
(43, 9, 'img/products/mug/4/b.jpg', 'primary'),
(44, 9, 'img/products/mug/4/c.jpg', 'primary'),
(45, 10, 'img/products/mug/5/a.jpg', 'primary'),
(46, 10, 'img/products/mug/5/b.jpg', 'primary'),
(47, 10, 'img/products/mug/5/c.jpg', 'primary'),
(48, 11, 'img/products/mug/6/a.jpg', 'primary'),
(49, 11, 'img/products/mug/6/b.jpg', 'primary'),
(50, 11, 'img/products/mug/6/c.jpg', 'primary'),
(51, 12, 'img/products/mug/7/a.jpg', 'primary'),
(52, 12, 'img/products/mug/7/b.jpg', 'primary'),
(53, 12, 'img/products/mug/7/c.jpg', 'primary'),
(54, 13, 'img/products/mug/8/a.jpg', 'primary'),
(55, 13, 'img/products/mug/8/b.jpg', 'primary'),
(56, 13, 'img/products/mug/8/c.jpg', 'primary'),
(57, 14, 'img/products/mug/9/a.jpg', 'primary'),
(58, 14, 'img/products/mug/9/b.jpg', 'primary'),
(59, 14, 'img/products/mug/9/c.jpg', 'primary'),
(60, 15, 'img/products/mug/10/a.jpg', 'primary'),
(61, 15, 'img/products/mug/10/b.jpg', 'primary'),
(62, 15, 'img/products/mug/10/c.jpg', 'primary'),
(63, 16, 'img/products/mug/11/a.jpg', 'primary'),
(64, 16, 'img/products/mug/11/b.jpg', 'primary'),
(65, 16, 'img/products/mug/11/c.jpg', 'primary'),
(66, 17, 'img/products/mug/12/a.jpg', 'primary'),
(67, 17, 'img/products/mug/12/b.jpg', 'primary'),
(68, 17, 'img/products/mug/12/c.jpg', 'primary'),
(69, 18, 'img/products/mug/13/a.jpg', 'primary'),
(70, 18, 'img/products/mug/13/b.jpg', 'primary'),
(71, 18, 'img/products/mug/13/c.jpg', 'primary'),
(72, 19, 'img/products/mug/14/a.jpg', 'primary'),
(73, 19, 'img/products/mug/14/b.jpg', 'primary'),
(74, 19, 'img/products/mug/14/c.jpg', 'primary'),
(75, 20, 'img/products/mug/15/a.jpg', 'primary'),
(76, 20, 'img/products/mug/15/b.jpg', 'primary'),
(77, 20, 'img/products/mug/15/c.jpg', 'primary'),
(78, 21, 'img/products/mug/16/a.jpg', 'primary'),
(79, 21, 'img/products/mug/16/b.jpg', 'primary'),
(80, 21, 'img/products/mug/16/c.jpg', 'primary'),
(81, 22, 'img/products/mug/17/a.jpg', 'primary'),
(82, 22, 'img/products/mug/17/b.jpg', 'primary'),
(83, 22, 'img/products/mug/17/c.jpg', 'primary'),
(84, 23, 'img/products/mug/18/a.jpg', 'primary'),
(85, 23, 'img/products/mug/18/b.jpg', 'primary'),
(86, 23, 'img/products/mug/18/c.jpg', 'primary'),
(87, 24, 'img/products/mug/19/a.jpg', 'primary'),
(88, 24, 'img/products/mug/19/b.jpg', 'primary'),
(89, 24, 'img/products/mug/19/c.jpg', 'primary'),
(90, 25, 'img/products/mug/20/a.jpg', 'primary'),
(91, 25, 'img/products/mug/20/b.jpg', 'primary'),
(92, 25, 'img/products/mug/20/c.jpg', 'primary'),
(93, 26, 'img/products/mug/21/a.jpg', 'primary'),
(94, 26, 'img/products/mug/21/b.jpg', ''),
(95, 26, 'img/products/mug/21/c.jpg', ''),
(96, 26, 'img/products/mug/21/d.jpg', ''),
(97, 26, 'img/products/mug/21/e.jpg', ''),
(98, 26, 'img/products/mug/21/f.jpg', ''),
(99, 26, 'img/products/mug/21/g.jpg', ''),
(100, 26, 'img/products/mug/21/h.jpg', ''),
(101, 26, 'img/products/mug/21/i.jpg', ''),
(102, 27, 'img/products/tote_bag/1/2.jpg', 'primary'),
(103, 27, 'img/products/tote_bag/1/3.jpg', ''),
(104, 27, 'img/products/tote_bag/1/4.jpg', ''),
(105, 27, 'img/products/tote_bag/1/5.jpg', ''),
(106, 27, 'img/products/tote_bag/1/6.jpg', ''),
(107, 27, 'img/products/tote_bag/1/7.jpg', ''),
(108, 27, 'img/products/tote_bag/1/8.jpg', ''),
(109, 28, 'img/products/tote_bag/2/9.jpg', 'primary'),
(110, 28, 'img/products/tote_bag/2/10.jpg', ''),
(111, 28, 'img/products/tote_bag/2/11.jpg', ''),
(112, 28, 'img/products/tote_bag/2/12.jpg', ''),
(113, 28, 'img/products/tote_bag/2/13.jpg', ''),
(114, 28, 'img/products/tote_bag/2/14.jpg', ''),
(115, 28, 'img/products/tote_bag/2/15.jpg', ''),
(116, 29, 'img/products/tote_bag/3/16.jpg', 'primary'),
(117, 29, 'img/products/tote_bag/3/17.jpg', ''),
(118, 29, 'img/products/tote_bag/3/18.jpg', ''),
(119, 29, 'img/products/tote_bag/3/19.jpg', ''),
(120, 29, 'img/products/tote_bag/3/20.jpg', ''),
(121, 29, 'img/products/tote_bag/3/21.jpg', ''),
(122, 29, 'img/products/tote_bag/3/22.jpg', ''),
(123, 30, 'img/products/tote_bag/4.jpg', 'primary'),
(124, 31, 'img/products/tote_bag/5.jpg', 'primary'),
(125, 32, 'img/products/tote_bag/6.jpg', 'primary'),
(126, 33, 'img/products/tote_bag/7.jpg', 'primary'),
(127, 34, 'img/products/tote_bag/8.jpg', 'primary'),
(128, 35, 'img/products/tote_bag/9.jpg', 'primary'),
(129, 36, 'img/products/tote_bag/10.jpg', 'primary'),
(130, 37, 'img/products/tote_bag/11.jpg', 'primary'),
(131, 38, 'img/products/tote_bag/12.jpg', 'primary'),
(132, 39, 'img/products/tote_bag/13.jpg', 'primary'),
(133, 40, 'img/products/tote_bag/14.jpg', 'primary'),
(134, 41, 'img/products/tote_bag/15.jpg', 'primary'),
(135, 42, 'img/products/tote_bag/16.jpg', 'primary'),
(136, 43, 'img/products/tote_bag/17.jpg', 'primary'),
(137, 44, 'img/products/tote_bag/18.jpg', 'primary'),
(138, 45, 'img/products/tote_bag/19.jpg', 'primary'),
(139, 46, 'img/products/tote_bag/20.jpg', 'primary');

-- --------------------------------------------------------

--
-- Stand-in structure for view `inventory`
-- (See below for the actual view)
--
CREATE TABLE `inventory` (
`id` int(11)
,`name` varchar(250)
,`category` varchar(250)
,`price` double
,`stocks` int(11)
,`status` varchar(250)
);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `checkout_id` int(11) NOT NULL,
  `cart_items` int(11) NOT NULL,
  `status` varchar(250) NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `checkout_id`, `cart_items`, `status`, `total`) VALUES
(1, 1, 6, 'Waiting for approval', 1000),
(2, 1, 13, 'Waiting for approval', 1000);

-- --------------------------------------------------------

--
-- Stand-in structure for view `order_summary`
-- (See below for the actual view)
--
CREATE TABLE `order_summary` (
`cart_id` int(11)
,`item_id` int(11)
,`image` varchar(250)
,`name` varchar(250)
,`theme` varchar(250)
,`quantity` int(11)
,`price` double
,`design` int(11)
,`subtotal` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `productdetails`
-- (See below for the actual view)
--
CREATE TABLE `productdetails` (
`id` int(11)
,`name` varchar(250)
,`theme` varchar(250)
,`category` varchar(250)
,`price` double
,`status` varchar(250)
,`details` varchar(250)
,`reviews` int(11)
,`stars` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `theme_id` int(11) NOT NULL,
  `details_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` double NOT NULL,
  `reviews` int(11) NOT NULL,
  `stars` int(11) NOT NULL,
  `stocks` int(11) NOT NULL,
  `status` varchar(250) GENERATED ALWAYS AS (case when `stocks` = 0 then 'Out of Stock' else 'In Stock' end) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `theme_id`, `details_id`, `name`, `price`, `reviews`, `stars`, `stocks`) VALUES
(1, 3, 2, 3, 'BLUE MOUSEPAD COLLECTION', 100, 100, 5, 50),
(2, 3, 1, 3, 'BLACKPINK MOUSEPAD COLLECTION', 100, 125, 5, 50),
(3, 3, 3, 3, 'MOTIVATION MOUSEPAD COLLECTION', 100, 150, 5, 50),
(4, 3, 2, 3, 'BEIGE/BROWN MOUSEPAD COLLECTION', 100, 168, 5, 50),
(5, 3, 2, 3, 'ANIME SKY MOUSEPAD COLLECTION', 100, 136, 5, 25),
(6, 2, 2, 7, 'Greek Sculpture Line Art Mug', 150, 184, 5, 50),
(7, 2, 2, 7, 'Boho Rainbow Mug', 150, 155, 5, 45),
(8, 2, 2, 7, 'Blue Mountain Mug', 150, 174, 5, 22),
(9, 2, 2, 7, 'Brown Aesthetic Minimalist Mug', 150, 50, 5, 50),
(10, 2, 3, 7, 'Motivational Landscape Mug', 150, 50, 5, 18),
(11, 2, 2, 7, 'Cute Peach Mug', 150, 68, 4, 15),
(12, 2, 2, 7, 'Sailor Moon Mug', 150, 79, 4, 28),
(13, 2, 2, 7, 'Cotton Candy Marble Mug', 150, 84, 5, 50),
(14, 2, 3, 7, 'Blue Waves Motivational Aesthetic  Mug', 150, 15, 4, 14),
(15, 2, 3, 7, 'Pink and Blue Waves Motivational Aesthetic  Mug', 150, 46, 4, 20),
(16, 2, 2, 7, 'Aesthetic Rainbow Mug', 150, 33, 4, 20),
(17, 2, 2, 7, 'Michelangelo Creation Of Adam Mug', 150, 10, 4, 50),
(18, 2, 3, 7, 'Pink Motivational Mug', 150, 69, 4, 16),
(19, 2, 2, 7, 'Aesthetic Plant Mug', 150, 78, 5, 45),
(20, 2, 3, 7, 'Colorful Motivational Mug', 150, 46, 4, 8),
(21, 2, 3, 7, 'You Got This Motivational Mug', 150, 45, 4, 50),
(22, 2, 3, 7, 'Slow Down Motivational Mug', 150, 78, 4, 0),
(23, 2, 2, 7, 'Female Portrait Mug', 150, 87, 5, 46),
(24, 2, 2, 7, 'Cute Animals Paws Mug', 150, 66, 5, 50),
(25, 2, 3, 7, 'Feeling Good Motivational Mug', 150, 32, 4, 35),
(26, 2, 2, 7, 'Minimalist Mug Collection', 150, 32, 4, 35),
(27, 1, 2, 1, 'PURPLE TOTEBAG COLLECTION', 100, 356, 5, 38),
(28, 1, 1, 2, 'NEW JEANS TOTEBAG COLLECTION', 100, 250, 5, 18),
(29, 1, 1, 1, 'ENHYPEN TOTEBAG COLLECTION', 100, 228, 5, 20),
(30, 1, 2, 1, 'TWO WOMEN TOTEBAG', 100, 168, 5, 50),
(31, 1, 3, 1, 'IT IS OKAY NOT TO FEEL OKAY TOTEBAG', 100, 136, 5, 25),
(32, 1, 2, 1, 'HUNGRY SOUL TOTEBAG', 100, 199, 4, 25),
(33, 1, 2, 2, 'REDISCOVER REAL SELF TOTEBAG', 100, 78, 4, 30),
(34, 1, 3, 1, 'GREATFUL FOR IT ALL TOTEBAG', 100, 155, 5, 18),
(35, 1, 3, 1, 'FEEL YOUR FEELINGS TOTEBAG', 100, 168, 4, 20),
(36, 1, 3, 1, 'SHOW YOURSELF SOME LOVE TOTEBAG', 100, 127, 5, 50),
(37, 1, 2, 2, 'QUIET THREATENS TOTEBAG', 100, 165, 5, 45),
(38, 1, 2, 1, 'KEEP FASHION WIERD TOTEBAG', 100, 184, 5, 50),
(39, 1, 3, 2, 'WE ARE ALL IN THIS TOGETHER TOTEBAG', 100, 199, 4, 44),
(40, 1, 2, 2, 'THREE EYES TO SEE TOTEBAG', 100, 123, 4, 50),
(41, 1, 3, 1, 'CHANGE CAN BE A GOOD THING TOTEBAG', 100, 146, 5, 45),
(42, 1, 3, 1, 'GREATFUL FOR EVERY LITTLE THINGS TOTEBAG', 100, 125, 4, 38),
(43, 1, 2, 2, 'SELF LOVE CLUB TOTEBAG', 100, 200, 4, 27),
(44, 1, 2, 1, 'SINGULARITY TOTEBAG', 100, 106, 5, 36),
(45, 1, 1, 1, 'NAMJOON TOTEBAG', 100, 111, 5, 46),
(46, 1, 2, 1, 'HOBICORE TOTEBAG', 100, 125, 5, 49);

-- --------------------------------------------------------

--
-- Table structure for table `securityanswers`
--

CREATE TABLE `securityanswers` (
  `id` int(11) NOT NULL,
  `SQ_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `securityquestions`
--

CREATE TABLE `securityquestions` (
  `id` int(11) NOT NULL,
  `security_question` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `securityquestions`
--

INSERT INTO `securityquestions` (`id`, `security_question`) VALUES
(1, 'What city were you born in?'),
(2, 'What was the first concert you attended?'),
(3, 'What is your first pet\'s name?'),
(4, 'In what city or town did your parents meet?');

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `id` int(11) NOT NULL,
  `theme` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id`, `theme`) VALUES
(1, 'K-Pop'),
(2, 'Aesthetic'),
(3, 'Motivational'),
(4, 'Custom');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `surname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `userpassword` varchar(250) NOT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `birthdate` varchar(250) DEFAULT NULL,
  `SQ_id` int(11) NOT NULL,
  `SA` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `surname`, `email`, `phone`, `username`, `userpassword`, `gender`, `birthdate`, `SQ_id`, `SA`) VALUES
(2, 'Elcarlwen', 'Guirhem', 'elcarlwenguirhem@gmail.com', '09980940491', 'eguirhem', '$2y$10$uSFQ6Mel8.xrULIsx7JYQOQ/zzIzOXj.S8gMQDDQQ5yJRd5sp.G5e', 'male', '2003-02-17', 1, 'CANDON CITY'),
(7, 'Gunther', 'Smith', 'gnthrsmith@gmail.com', '9480940491', 'gunther', '$2y$10$VWPhys/HUCH02FMO3CCPw.bb2lD2w52TqSd0g3y0Z1MxxzoI.xJH6', 'male', NULL, 3, 'KITTY'),
(8, 'Faith Gabrielle', 'Gamboa', 'nneko5451@gmail.com', '09772390823', 'elle1113', '$2y$10$NrbWGAQKjv7PDze/XvFSTO0Z20rz8oFIHbNJO/PwVvMl3548Edf8q', NULL, NULL, 2, 'TAYLOR SWIFT');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Stand-in structure for view `wishlistdisplay`
-- (See below for the actual view)
--
CREATE TABLE `wishlistdisplay` (
`id` int(11)
,`user_id` int(11)
,`product_id` int(11)
,`wishlist_id` int(11)
,`image` varchar(250)
,`name` varchar(250)
,`status` varchar(250)
,`price` double
);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist_items`
--

CREATE TABLE `wishlist_items` (
  `id` int(11) NOT NULL,
  `wishlist_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist_items`
--

INSERT INTO `wishlist_items` (`id`, `wishlist_id`, `product_id`) VALUES
(6, 1, 2);

-- --------------------------------------------------------

--
-- Structure for view `displayitems`
--
DROP TABLE IF EXISTS `displayitems`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `displayitems`  AS SELECT `c`.`cart_id` AS `cart_id`, `i`.`item_id` AS `item_id`, `p`.`name` AS `name`, `t`.`theme` AS `theme`, `i`.`quantity` AS `quantity`, `p`.`price` AS `price`, `p`.`price`* `i`.`quantity` AS `subtotal` FROM (((`cart` `c` join `cart_items` `i`) join `products` `p`) join `themes` `t`) WHERE `c`.`cart_id` = `i`.`cart_id` AND `p`.`id` = `i`.`product_id` AND `p`.`theme_id` = `t`.`id` ;

-- --------------------------------------------------------

--
-- Structure for view `inventory`
--
DROP TABLE IF EXISTS `inventory`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `inventory`  AS SELECT `p`.`id` AS `id`, `p`.`name` AS `name`, `c`.`category` AS `category`, `p`.`price` AS `price`, `p`.`stocks` AS `stocks`, `p`.`status` AS `status` FROM (`products` `p` join `categories` `c`) WHERE `p`.`category_id` = `c`.`id` ;

-- --------------------------------------------------------

--
-- Structure for view `order_summary`
--
DROP TABLE IF EXISTS `order_summary`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `order_summary`  AS SELECT `c`.`cart_id` AS `cart_id`, `i`.`item_id` AS `item_id`, `im`.`image` AS `image`, `p`.`name` AS `name`, `t`.`theme` AS `theme`, `i`.`quantity` AS `quantity`, `p`.`price` AS `price`, `i`.`design` AS `design`, `p`.`price`* `i`.`quantity` AS `subtotal` FROM ((((`cart` `c` join `cart_items` `i`) join `products` `p`) join `themes` `t`) join `images` `im`) WHERE `p`.`id` = `im`.`product_id` AND `c`.`cart_id` = `i`.`cart_id` AND `p`.`id` = `i`.`product_id` AND `p`.`theme_id` = `t`.`id` AND `im`.`type` = 'primary' ;

-- --------------------------------------------------------

--
-- Structure for view `productdetails`
--
DROP TABLE IF EXISTS `productdetails`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `productdetails`  AS SELECT `p`.`id` AS `id`, `p`.`name` AS `name`, `t`.`theme` AS `theme`, `c`.`category` AS `category`, `p`.`price` AS `price`, `p`.`status` AS `status`, `d`.`details` AS `details`, `p`.`reviews` AS `reviews`, `p`.`stars` AS `stars` FROM (((`products` `p` join `themes` `t`) join `categories` `c`) join `details` `d`) WHERE `p`.`category_id` = `c`.`id` AND `p`.`theme_id` = `t`.`id` AND `p`.`details_id` = `d`.`id` ;

-- --------------------------------------------------------

--
-- Structure for view `wishlistdisplay`
--
DROP TABLE IF EXISTS `wishlistdisplay`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `wishlistdisplay`  AS SELECT `wi`.`id` AS `id`, `u`.`user_id` AS `user_id`, `i`.`product_id` AS `product_id`, `wi`.`wishlist_id` AS `wishlist_id`, `i`.`image` AS `image`, `p`.`name` AS `name`, `p`.`status` AS `status`, `p`.`price` AS `price` FROM ((((`wishlist` `w` join `wishlist_items` `wi`) join `images` `i`) join `products` `p`) join `users` `u`) WHERE `w`.`id` = `wi`.`wishlist_id` AND `p`.`id` = `wi`.`product_id` AND `u`.`user_id` = `w`.`user_id` AND `i`.`product_id` = `p`.`id` AND `i`.`type` = 'primary' ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `admincode`
--
ALTER TABLE `admincode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `cart_id` (`cart_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkoutinfo`
--
ALTER TABLE `checkoutinfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `custom`
--
ALTER TABLE `custom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `checkout_id` (`checkout_id`),
  ADD KEY `cart_items` (`cart_items`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `securityanswers`
--
ALTER TABLE `securityanswers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `SQ_id` (`SQ_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `securityquestions`
--
ALTER TABLE `securityquestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `SQ_id` (`SQ_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `wishlist_items`
--
ALTER TABLE `wishlist_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlist_id` (`wishlist_id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admincode`
--
ALTER TABLE `admincode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `checkoutinfo`
--
ALTER TABLE `checkoutinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `custom`
--
ALTER TABLE `custom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=256;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `securityanswers`
--
ALTER TABLE `securityanswers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `securityquestions`
--
ALTER TABLE `securityquestions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wishlist_items`
--
ALTER TABLE `wishlist_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`cart_id`),
  ADD CONSTRAINT `cart_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `checkoutinfo`
--
ALTER TABLE `checkoutinfo`
  ADD CONSTRAINT `checkoutinfo_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`checkout_id`) REFERENCES `checkoutinfo` (`id`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`cart_items`) REFERENCES `cart_items` (`item_id`);

--
-- Constraints for table `securityanswers`
--
ALTER TABLE `securityanswers`
  ADD CONSTRAINT `securityanswers_ibfk_1` FOREIGN KEY (`SQ_id`) REFERENCES `securityquestions` (`id`),
  ADD CONSTRAINT `securityanswers_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`SQ_id`) REFERENCES `securityquestions` (`id`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `wishlist_items`
--
ALTER TABLE `wishlist_items`
  ADD CONSTRAINT `wishlist_items_ibfk_1` FOREIGN KEY (`wishlist_id`) REFERENCES `wishlist` (`id`),
  ADD CONSTRAINT `wishlist_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
