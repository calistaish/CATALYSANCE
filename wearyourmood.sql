-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2023 at 03:36 PM
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
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`item_id`, `cart_id`, `product_id`, `quantity`) VALUES
(1, 1, 1, 6),
(2, 1, 2, 3),
(6, 3, 2, 3);

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
(1, 'Elcarlwen', 'Guirhem', '', 'Philippines', 'No 85 San Pedro St., Pinalad rd', 'Makati', 1000, '09980940491', 'elcarlwenguirhem@gmail.com', 'GCASH', 2);

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
  `picture` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `checkout_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `order_summary`
-- (See below for the actual view)
--
CREATE TABLE `order_summary` (
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `theme_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `details_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` double NOT NULL,
  `original_price` double DEFAULT NULL,
  `description` varchar(250) NOT NULL,
  `reviews` int(11) NOT NULL,
  `stars` int(11) NOT NULL,
  `stocks` int(11) NOT NULL,
  `status` varchar(250) GENERATED ALWAYS AS (case when `stocks` = 0 then 'Out of Stock' when `stocks` < 20 then 'Critical Stocks' else 'In Stock' end) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `theme_id`, `image_id`, `details_id`, `name`, `price`, `original_price`, `description`, `reviews`, `stars`, `stocks`) VALUES
(1, 2, 2, 0, 7, 'KIBUNPH BADDEST ALIVE AESTHETIC MUG', 150, 0, '-C-shaped handle, comfortable to hold,\r\n- Durable ceramic material, safe and healthy for drinking\r\n- Can be used for Hot & Cold beverages\r\n- 100% dishwasher, hand-wash, and microwave proof', 1, 5, 100),
(2, 2, 2, 0, 7, 'KIBUNPH CREATIVE FUEL AESTHETIC MUG', 150, 0, '-C-shaped handle, comfortable to hold,\r\n- Durable ceramic material, safe and healthy for drinking\r\n- Can be used for Hot & Cold beverages\r\n- 100% dishwasher, hand-wash, and microwave proof', 1, 5, 100),
(3, 2, 2, 0, 7, 'KIBUNPH LIQUID PATIENCE AESTHETIC MUG', 150, 0, '-C-shaped handle, comfortable to hold,\r\n- Durable ceramic material, safe and healthy for drinking\r\n- Can be used for Hot & Cold beverages\r\n- 100% dishwasher, hand-wash, and microwave proof', 0, 0, 100),
(4, 2, 2, 0, 7, 'KIBUNPH I WORK HARD SO MY CAT CAN HAVE A GOOD LIFE AESTHETIC MUG', 150, 0, '-C-shaped handle, comfortable to hold,\r\n- Durable ceramic material, safe and healthy for drinking\r\n- Can be used for Hot & Cold beverages\r\n- 100% dishwasher, hand-wash, and microwave proof', 0, 0, 100),
(5, 2, 2, 0, 7, 'KIBUNPH ALL DAY MUG AESTHETIC MUG', 150, 0, '-C-shaped handle, comfortable to hold,\r\n- Durable ceramic material, safe and healthy for drinking\r\n- Can be used for Hot & Cold beverages\r\n- 100% dishwasher, hand-wash, and microwave proof', 0, 0, 100),
(6, 2, 2, 0, 7, 'KIBUNPH FACTS ABOUT TEA AESTHETIC MUG', 150, 0, '-C-shaped handle, comfortable to hold,\r\n- Durable ceramic material, safe and healthy for drinking\r\n- Can be used for Hot & Cold beverages\r\n- 100% dishwasher, hand-wash, and microwave proof', 0, 0, 100),
(7, 2, 2, 0, 7, 'KIBUNPH HAVE A TEA AND LET IT BE AESTHETIC MUG', 150, 0, '-C-shaped handle, comfortable to hold,\r\n- Durable ceramic material, safe and healthy for drinking\r\n- Can be used for Hot & Cold beverages\r\n- 100% dishwasher, hand-wash, and microwave proof', 0, 0, 100),
(8, 2, 2, 0, 7, 'KIBUNPH DONT SPILL THE TEA AESTHETIC MUG', 150, 0, '-C-shaped handle, comfortable to hold,\r\n- Durable ceramic material, safe and healthy for drinking\r\n- Can be used for Hot & Cold beverages\r\n- 100% dishwasher, hand-wash, and microwave proof', 0, 0, 15),
(9, 2, 2, 0, 7, 'KIBUNPH NO SLEEP CLUB AESTHETIC MUG', 150, 0, '-C-shaped handle, comfortable to hold,\r\n- Durable ceramic material, safe and healthy for drinking\r\n- Can be used for Hot & Cold beverages\r\n- 100% dishwasher, hand-wash, and microwave proof', 0, 0, 100),
(10, 2, 2, 0, 7, 'KIBUNPH HAPPY CUP AESTHETIC MUG', 150, 0, '-C-shaped handle, comfortable to hold,\r\n- Durable ceramic material, safe and healthy for drinking\r\n- Can be used for Hot & Cold beverages\r\n- 100% dishwasher, hand-wash, and microwave proof', 0, 0, 100),
(11, 2, 2, 0, 7, 'KIBUNPH TEA TIME AESTHETIC MUG', 150, 0, '-C-shaped handle, comfortable to hold,\r\n- Durable ceramic material, safe and healthy for drinking\r\n- Can be used for Hot & Cold beverages\r\n- 100% dishwasher, hand-wash, and microwave proof', 0, 0, 100),
(12, 2, 2, 0, 7, 'KIBUNPH PEACHES AND CREAM AESTHETIC MUG', 150, 0, '-C-shaped handle, comfortable to hold,\r\n- Durable ceramic material, safe and healthy for drinking\r\n- Can be used for Hot & Cold beverages\r\n- 100% dishwasher, hand-wash, and microwave proof', 0, 0, 15),
(13, 2, 2, 0, 7, 'KIBUNPH MORNING COFFEE AESTHETIC MUG', 150, 0, '-C-shaped handle, comfortable to hold,\r\n- Durable ceramic material, safe and healthy for drinking\r\n- Can be used for Hot & Cold beverages\r\n- 100% dishwasher, hand-wash, and microwave proof', 0, 0, 100),
(14, 2, 2, 0, 7, 'KIBUNPH TAKE A LITTLE COFFEE BREAK AESTHETIC MUG', 150, 0, '-C-shaped handle, comfortable to hold,\r\n- Durable ceramic material, safe and healthy for drinking\r\n- Can be used for Hot & Cold beverages\r\n- 100% dishwasher, hand-wash, and microwave proof', 0, 0, 15),
(15, 2, 2, 0, 7, 'KIBUNPH IS IT FRIDAY YET AESTHETIC MUG', 150, 0, '-C-shaped handle, comfortable to hold,\r\n- Durable ceramic material, safe and healthy for drinking\r\n- Can be used for Hot & Cold beverages\r\n- 100% dishwasher, hand-wash, and microwave proof', 0, 0, 100),
(16, 2, 2, 0, 7, 'KIBUNPH PEACHES AND CREAM AESTHETIC MUG', 150, 0, '-C-shaped handle, comfortable to hold,\r\n- Durable ceramic material, safe and healthy for drinking\r\n- Can be used for Hot & Cold beverages\r\n- 100% dishwasher, hand-wash, and microwave proof', 0, 0, 100),
(17, 2, 2, 0, 7, 'KIBUNPH MORNING COFFEE AESTHETIC MUG', 150, 0, '-C-shaped handle, comfortable to hold,\r\n- Durable ceramic material, safe and healthy for drinking\r\n- Can be used for Hot & Cold beverages\r\n- 100% dishwasher, hand-wash, and microwave proof', 0, 0, 15),
(18, 2, 2, 0, 7, 'KIBUNPH TAKE A LITTLE COFFEE BREAK AESTHETIC MUG', 150, 0, '-C-shaped handle, comfortable to hold,\r\n- Durable ceramic material, safe and healthy for drinking\r\n- Can be used for Hot & Cold beverages\r\n- 100% dishwasher, hand-wash, and microwave proof', 0, 0, 15),
(19, 2, 2, 0, 7, 'KIBUNPH IS IT FRIDAY YET AESTHETIC MUG', 150, 0, '-C-shaped handle, comfortable to hold,\r\n- Durable ceramic material, safe and healthy for drinking\r\n- Can be used for Hot & Cold beverages\r\n- 100% dishwasher, hand-wash, and microwave proof', 0, 0, 100),
(32, 3, 0, 0, 3, 'BEIGE MINIMALIST AESTHETIC COLLECTION MOUSEPAD PART 1', 100, 0, '- Introducing our high-quality rubber backed mousepad\n- The perfect addition to your office or study area. This mousepad offers optimal comfort and control for your mouse movements.\n- Enjoy the minimalist design of this beige themed mouse pad with di', 0, 5, 50),
(33, 3, 0, 0, 3, 'BEIGE MINIMALIST AESTHETIC HIGH QUALITY MOUSEPAD PART 2', 100, 0, '- Introducing our high-quality rubber backed mousepad, the perfect addition to your office or study area.\n- This mousepad offers optimal comfort and control for your mouse movements.\n- Enjoy the minimalist design of this beige themed mouse pad with d', 0, 5, 50),
(34, 3, 0, 0, 3, 'MOTIVATIONAL CUSTOM AESTHETIC HIGH QUALITY RUBBER MOUSEPAD', 100, 0, '- Introducing our high-quality rubber backed mousepad, the perfect addition to your office or study area.\n- Enjoy our motivational themed mouse pads that can help you set the proper mindset in studying or in office work,\n- ranging from different desi', 0, 5, 50),
(35, 3, 0, 0, 3, 'SEVENTEEN CUSTOM MOUSEPAD COLLECTION', 100, 0, '- Introducing our high-quality rubber backed mousepad, the perfect addition to your office or study area.\n- This mousepad offers optimal comfort and control for your mouse movements.\n- Enjoy our custom made mouse pad based on the popular Kpop group S', 0, 5, 100),
(36, 3, 0, 0, 3, 'PINK AESTHETIC HIGH QUALITY MOUSEPAD COLLECTION', 100, 0, '- Introducing our high-quality rubber backed mousepad, the perfect addition to your office or study area.\n- Enjoy our pink themed mouse pads ranging from different themes that represent the color pink the best,\n- ranging from different designs to fit', 0, 5, 25),
(37, 3, 0, 0, 3, 'BLUE AESTHETIC HIGH QUALITY MOUSEPAD COLLECTION', 100, 0, '- Introducing our high-quality rubber backed mousepad, the perfect addition to your office or study area.\r\n- Enjoy our blue themed mouse pads ranging from different themes that represent the color blue the best,\r\n- ranging from different designs to f', 0, 5, 18),
(38, 3, 0, 0, 3, 'IN THE SOOP PAINTING CUSTOM MOUSEPAD', 100, 0, '- Introducing our high-quality rubber backed mousepad, the perfect addition to your office or study area.\r\n- Enjoy our customized mouse pads inspired by the popular South Korean reality series about BTS,\r\n- ranging from different designs and aestheti', 0, 5, 10),
(39, 3, 0, 0, 3, 'BLACKPINK AESTHETIC CUSTOM MOUSEPAD COLLECTION', 100, 0, '- Introducing our high-quality rubber backed mousepad, the perfect addition to your office or study area.\r\n- Enjoy our customized mouse pads inspired by the popular south korean pop group BLACKPINK,\r\n- ranging from different designs and themes from t', 0, 5, 20),
(40, 3, 0, 0, 3, 'GINGHAM TRENDY AESTHETICS 5MM HIGH QUALITY RUBBER MOUSEPAD', 100, 0, '- Introducing our high-quality rubber backed mousepad, the perfect addition to your office or study area.\r\n- Enjoy our customized mouse pads with a gingham inspired design,\r\n- ranging from different colors and patterns to fit your overall aesthetic.', 0, 5, 100),
(41, 3, 0, 0, 3, 'PRINT YOUR MOOD CUSTOMIZED HIGH QUALITY MOUSEPAD', 100, 0, '- Introducing our high-quality rubber backed mousepad, the perfect addition to your office or study area.\r\n- Enjoy your own customized mouse pad with your own design to fit your needs and desired aesthetic.', 0, 5, 30),
(42, 3, 0, 0, 3, 'BTS AESTHETIC HIGH QUALITY RUBBER MOUSEPAD', 100, 0, '- Introducing our high-quality rubber backed mousepad, the perfect addition to your office or study area.\n- Enjoy our customized mouse pads inspired by the South Korean pop group BTS,\n', 0, 5, 30),
(43, 3, 0, 0, 3, 'REPLY 1988 CUSTOM RUBBER MOUSEPAD', 100, 0, '- Introducing our high-quality rubber backed mousepad, the perfect addition to your office or study area.\n- Enjoy our customized mouse pads inspired by the popular South Korean drama series “Reply 1988”,\n', 0, 5, 100),
(44, 3, 0, 0, 3, 'GREEN MINIMALIST AESTHETIC HIGH QUALITY RUBBER MOUSEPAD', 100, 0, '- Introducing our high-quality rubber backed mousepad, the perfect addition to your office or study area.\n- Enjoy our green themed mouse pads ranging from different themes that represent the color green the best,\n', 0, 5, 100),
(45, 3, 0, 0, 3, 'GUTADEMA AESTHETIC HIGH QUALITY MOUSEPAD COLLECTION', 100, 0, '- Introducing our high-quality rubber backed mousepad, the perfect addition to your office or study area.\n- Enjoy our customized mouse pads inspired by the popular Japanese cartoon character “Gudetama”,\n', 0, 5, 100),
(46, 3, 0, 0, 3, 'BT21 AESTHETIC HIGH QUALITY MOUSEPAD COLLECTION', 100, 0, '- Introducing our high-quality rubber backed mousepad, the perfect addition to your office or study area.\n- Enjoy our customized mouse pads inspired by the South Korean pop group BTS, their BT21 iconic characters,\n', 0, 5, 100),
(47, 3, 0, 0, 5, 'CLASSICAL ART VINTAGE MURAL AESTHETIC 5MM HIGH QUALITY RUBBER MOUSEPAD', 100, 0, '- Introducing our high-quality rubber mousepad. Whether you\'re gaming, working, or browsing, this mousepad is the perfect companion for your desk setup, offering both style and functionality.\n- Elevate your workspace with our superior mousepad and en', 0, 5, 100),
(48, 3, 0, 0, 3, 'COWPRINT TRENDY AESTHETICS 5MM HIGH QUALITY MOUSEPAD', 100, 0, '- Introducing our high-quality rubber backed mousepad, the perfect addition to your office or study area.\n- Enjoy our customized mouse pads with a cow print inspired design,\n', 0, 5, 100),
(49, 3, 0, 0, 3, 'IT\'S OKAY NOT TO BE OKAY CUSTOM RUBBER MOUSEPAD', 100, 0, '- Introducing our high-quality rubber backed mousepad, the perfect addition to your office or study area.\n- Enjoy our “its okay not to be okay” themed mouse pads that can help you set the proper mindset in studying or in office work,\n', 0, 5, 100),
(50, 3, 0, 0, 4, '2GETHER THE SERIES AESTHETIC HIGH QUALITY 5MM MOUSEPAD', 100, 0, '- Introducing our high-quality rubber backed mousepad, the perfect addition to your office or study area.\n- Enjoy our customized mouse pads inspired by the popular South Korean comedy, drama and romance series “2GETHER”,\n', 0, 5, 100),
(51, 3, 0, 0, 3, 'WOOD TEXTURE AESTHETIC HIGH QUALITY RUBBER MOUSEPAD', 100, 0, '- Introducing our high-quality rubber backed mousepad, the perfect addition to your office or study area.\n- Enjoy our customized mouse pads with a wood texture inspired design,\n', 0, 4, 100),
(52, 3, 0, 0, 3, 'SAILOR MOON AESTHETIC HIGH QUALITY MOUSEPAD', 100, 0, '- Introducing our high-quality rubber backed mousepad, the perfect addition to your office or study area.\n- Enjoy our customized mouse pads inspired by the popular Japanese anime character “Sailor moon”,\n', 0, 5, 100),
(53, 3, 0, 0, 3, 'TWICE AESTHETIC HIGH QUALITY MOUSEPAD COLLECTION', 100, 0, '- Introducing our high-quality rubber backed mousepad, the perfect addition to your office or study area.\n- Enjoy our customized mouse pads inspired by the South Korean pop group TWICE,\n', 0, 5, 100),
(54, 3, 0, 0, 3, 'ML AESTHETICS HIGH QUALITY MOUSEPAD', 100, 0, '- Introducing our high-quality rubber backed mousepad, the perfect addition to your office or study area.\n- Enjoy our customized mouse pads inspired by the popular mobile game “Mobile Legends: Bang Bang”,\n', 0, 5, 100),
(55, 3, 0, 0, 5, 'CHRISTIAN DIOR LUXURY CUSTOM 5MM HIGH QUALITY MOUSEPAD', 100, 0, '- Introducing our high-quality rubber mousepad. Whether you\'re gaming, working, or browsing, this mousepad is the perfect companion for your desk setup, offering both style and functionality.\n- Elevate your workspace with our superior mousepad and en', 0, 5, 100),
(56, 3, 0, 0, 6, 'BTS DYNAMITE HIGH QUALITY RUBBER MOUSEPAD', 100, 0, '- Introducing our high-quality rubber backed mousepad.\n- Enjoy our customized mouse pads inspired by the popular South Korean kpop group BTS,\n', 0, 5, 100),
(57, 3, 0, 0, 3, 'STRAY KIDS AESTHETICS HIGH QUALITY 5MM MOUSEPAD COLLECTION', 100, 0, '- Introducing our high-quality rubber backed mousepad, the perfect addition to your office or study area.\n- Enjoy our customized mouse pads inspired by the South Korean pop group Stray Kids,\n', 0, 5, 100),
(58, 3, 0, 0, 3, 'LATTER DAY SAINTS LDS MORMON HIGH QUALITY MOUSEPAD', 100, 0, '- Introducing our high-quality rubber backed mousepad,\n- the perfect addition to your office or study area.\n', 0, 5, 100),
(59, 3, 0, 0, 3, 'TINY TAN AESTHETIC HIGH QUALITY CUSTOMIZED MOUSEPAD', 100, 0, '- Introducing our high-quality rubber backed mousepad, the perfect addition to your office or study area.\n- Enjoy our customized mouse pads inspired by the South Korean pop group BTS, their Tiny Tan iconic characters,\n', 0, 5, 100);

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
  `wishlist_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `order_summary`  AS SELECT `c`.`cart_id` AS `cart_id`, `i`.`item_id` AS `item_id`, `p`.`name` AS `name`, `t`.`theme` AS `theme`, `i`.`quantity` AS `quantity`, `p`.`price` AS `price`, `p`.`price`* `i`.`quantity` AS `subtotal` FROM (((`cart` `c` join `cart_items` `i`) join `products` `p`) join `themes` `t`) WHERE `c`.`cart_id` = `i`.`cart_id` AND `p`.`id` = `i`.`product_id` AND `p`.`theme_id` = `t`.`id` ;

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `checkout_id` (`checkout_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

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
  ADD PRIMARY KEY (`wishlist_id`);

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
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `checkoutinfo`
--
ALTER TABLE `checkoutinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `custom`
--
ALTER TABLE `custom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

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
  MODIFY `wishlist_id` int(11) NOT NULL AUTO_INCREMENT;

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
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`checkout_id`) REFERENCES `checkoutinfo` (`id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
