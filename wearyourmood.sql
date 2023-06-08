-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 07:15 PM
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
(2, 1, 2, 3),
(6, 3, 2, 3),
(7, 1, 1, 5),
(8, 1, 3, 1);

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
(14, 2, 'img/products/mousepad/2/7.jpg', ''),
(15, 3, 'img/products/mousepad/3/1.jpg', 'primary'),
(16, 3, 'img/products/mousepad/3/2.jpg', ''),
(17, 3, 'img/products/mousepad/3/3.jpg', ''),
(18, 3, 'img/products/mousepad/3/4.jpg', ''),
(19, 3, 'img/products/mousepad/3/5.jpg', ''),
(20, 3, 'img/products/mousepad/3/6.jpg', ''),
(21, 4, 'img/products/mousepad/4/1.jpg', 'primary'),
(22, 4, 'img/products/mousepad/4/2.jpg', ''),
(23, 4, 'img/products/mousepad/4/3.jpg', ''),
(24, 4, 'img/products/mousepad/4/4.jpg', ''),
(25, 4, 'img/products/mousepad/4/5.jpg', ''),
(26, 5, 'img/products/mousepad/5/1.jpg', 'primary'),
(27, 5, 'img/products/mousepad/5/2.jpg', ''),
(28, 5, 'img/products/mousepad/5/3.jpg', ''),
(29, 5, 'img/products/mousepad/5/4.jpg', NULL);

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
(1, 3, 2, 3, 'BLUE MOUSEPAD COLLECTION', 100, 100, 5, 18),
(2, 3, 1, 3, 'BLACKPINK MOUSEPAD COLLECTION', 100, 125, 5, 10),
(3, 3, 3, 3, 'MOTIVATION MOUSEPAD COLLECTION', 100, 150, 5, 0),
(4, 3, 2, 3, 'BEIGE/BROWN MOUSEPAD COLLECTION', 100, 168, 5, 50),
(5, 3, 2, 3, 'ANIME SKY MOUSEPAD COLLECTION', 100, 136, 5, 25);

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
(1, 1, 1),
(4, 1, 3);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `theme_id` (`theme_id`),
  ADD KEY `details_id` (`details_id`);

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
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`theme_id`) REFERENCES `themes` (`id`),
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`details_id`) REFERENCES `details` (`id`);

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
