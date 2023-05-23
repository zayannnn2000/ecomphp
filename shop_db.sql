-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 11:02 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_id`, `admin_name`, `username`, `password`) VALUES
(1, 'admin', 'admin', '0192023a7bbd73250516f069df18b500'),
(2, 'zayan', 'zayan', 'zayan');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(11, 'ZARA'),
(12, 'H&M'),
(13, 'SHEIN'),
(14, 'ASOS'),
(15, 'URBAN OUTFITTERS'),
(16, 'DOLLSKILL'),
(17, 'LEVIS'),
(18, 'MANGO'),
(19, 'BOOHOO'),
(20, 'MARKS&SPENCER'),
(21, 'AMERICAN EAGLE'),
(22, 'MACY\'S');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Men'),
(2, 'Women');

-- --------------------------------------------------------

--
-- Table structure for table `email_info`
--

CREATE TABLE `email_info` (
  `email_id` int(100) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `action` varchar(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `ref_id` varchar(255) NOT NULL,
  `p_status` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0=canelled, 1= pending, 2 =  shipping, 3 =  delivered'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `qty`, `ref_id`, `p_status`, `status`) VALUES
(1, 1, 0, 0, 'IR1MmjuoV1', '', 1),
(2, 2, 0, 0, 'AtyrERf7a0', '', 1),
(3, 3, 0, 0, 'Mtc2d482zU', '', 1),
(4, 4, 0, 0, '0v8ze165XC', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders_info`
--

CREATE TABLE `orders_info` (
  `order_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` int(10) NOT NULL,
  `cardname` varchar(255) NOT NULL,
  `cardnumber` varchar(20) NOT NULL,
  `expdate` varchar(255) NOT NULL,
  `prod_count` int(15) DEFAULT NULL,
  `total_amt` int(15) DEFAULT NULL,
  `cvv` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders_info`
--

INSERT INTO `orders_info` (`order_id`, `user_id`, `f_name`, `email`, `address`, `city`, `state`, `zip`, `cardname`, `cardnumber`, `expdate`, `prod_count`, `total_amt`, `cvv`) VALUES
(1, 1, 'zayan m', 'zayan@gmail.com', 'weeee', '', '', 0, '', '', '', 1, 2500, 0),
(2, 2, 'yeay me', 'yeayme@gmail.com', 'weeee', '', '', 0, '', '', '', 2, 3500, 0),
(3, 3, 'boo yeah', 'booyeah@gmail.com', 'weeee', '', '', 0, '', '', '', 1, 1200, 0),
(4, 4, 'samia chy', 'samiachy@gmail.com', 'weeee', '', '', 0, '', '', '', 3, 3700, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `order_pro_id` int(10) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(15) DEFAULT NULL,
  `amt` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`order_pro_id`, `order_id`, `product_id`, `qty`, `amt`) VALUES
(1, 1, 8, 1, 2500),
(2, 2, 7, 1, 2000),
(3, 2, 1, 1, 1500),
(4, 3, 3, 1, 1200),
(5, 4, 3, 1, 1200),
(6, 4, 1, 1, 1500),
(7, 4, 2, 1, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` varchar(10000) NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 2, 11, 'ZARA PINK TEXTURED CROPPED BLAZER', 1500, 'Long sleeve blazer, lapel collar, shoulder pads, front flap pockets, double-breasted raised metal button', '', 'Blazer'),
(2, 2, 12, 'H&M SAGE GREEN CROP TEE', 1000, 'Drop shoulders, embroidered front, polyester, light-weight, breathable', '', 'T-shirt'),
(3, 2, 13, 'SHEIN ARGYLE PATTERN SWEATER VEST', 1200, 'V neck, regular fit, stretchable', '', 'Vest'),
(4, 2, 14, 'ASOS HOT PINK CORSET TOP', 2000, 'Square neck, zip-back fastening, cropped length, slim fit', '', 'Top'),
(5, 2, 15, 'URBAN OUTFITTERS LAVENDER JEANS\r\n', 2500, 'Retro high-and-wide jean, contrasting corduroy panels, relaxed fit, ankle-length hem\r\n', '', 'Jeans'),
(6, 2, 16, 'DOLLSKILL BABY BLUE DRESS\r\n', 3000, 'Puffy sleeves, cut out detailing, knee-length, cinched waistline\r\n', '', 'Dress'),
(7, 1, 17, 'LEVI’S NUDE CHINO SLIM PANTS\r\n', 2000, 'Soft, comfortable hand-feel, tapers down to the ankle\r\n', '', 'Pants'),
(8, 1, 18, 'MANGO BROWN OVERSIZED SWEATSHIRT\r\n', 2500, 'Crew neck, drop shoulders, contrast print, oversized fit\r\n', '', 'Sweatshirt'),
(9, 1, 19, 'BOOHOO BLAZER JACKET\r\n', 3000, 'Single-breasted jacket, narrow notch lapels, flap pockets\r\n', '', 'Blazer'),
(10, 1, 20, 'MARKS&SPENCER BLACK LINEN SHIRT\r\n', 1500, 'Loose fit, classic collar, buttoned, short sleeves\r\n', '', 'Shirt'),
(11, 1, 21, 'AMERICAN EAGLE WATERCOLOUR PRINT T-SHIRT\r\n', 1000, 'Round neck, short sleeves, drop shoulders, regular fit\r\n', '', 'T-shirt'),
(12, 1, 22, 'MACY\'S MARIO SWEATER VEST\r\n', 1200, 'Pattern sweater vest, classic v-neck style, ribbed knit trims\r\n', '', 'Vest'),
(17, 1, 3, 'lehenga', 1230, 'nice lehenga', 'Screenshot 2023-05-22 215011.png', 'lehnga'),
(18, 2, 1, 'skirt', 1041, 'nicec skirt', 'product04.png', 'nice skirt');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(1, 'zayan', 'm', 'zayan@gmail.com', 'abc', '01234', 'weeee', ''),
(2, 'yeay', 'me', 'yeayme@gmail.com', 'abc', '01234', 'weeee', ''),
(3, 'boo', 'yeah', 'booyeah@gmail.com', 'abc', '123', 'weeee', ''),
(4, 'samia', 'chy', 'samiachy@gmail.com', 'samia', '123', 'weeee', ''),
(19, 'Labib', 'Rahman', 'labibstar@gmail.com', 'dsaeq3e', '+880194280', 'H-13, Ave-2, Block-D, Mirpur-12', 'wtdfd'),
(20, 'Labib', 'Rahman', 'labibstar@gmail.com', 'dqweasd', '+880194280', 'H-13, Ave-2, Block-D, Mirpur-12', 'zxeqw'),
(21, 'Labib', 'Rahman', 'labibstar@gmail.com', 'asdwq3e', '+880194280', 'H-13, Ave-2, Block-D, Mirpur-12', 'wqe'),
(22, 'Labib', 'Rahman', 'labibstar@gmail.com', '243rwe', '+880194280', 'H-13, Ave-2, Block-D, Mirpur-12', 'hxftr'),
(23, 'admin', 'admin', 'admin@admin.com', 'admin123', '0197533412', '32d', '56a');

--
-- Triggers `user_info`
--
DELIMITER $$
CREATE TRIGGER `after_user_info_insert` AFTER INSERT ON `user_info` FOR EACH ROW BEGIN 
INSERT INTO user_info_backup VALUES(new.user_id,new.first_name,new.last_name,new.email,new.password,new.mobile,new.address1,new.address2);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user_info_backup`
--

CREATE TABLE `user_info_backup` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info_backup`
--

INSERT INTO `user_info_backup` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(1, 'zayan', 'm', 'zayan@gmail.com', 'abc', '01234', 'weeee', ''),
(2, 'yeay', 'me', 'yeayme@gmail.com', 'abc', '01234', 'weeee', ''),
(3, 'boo', 'yeah', 'booyeah@gmail.com', 'abc', '123', 'weeee', ''),
(4, 'samia', 'chy', 'samiachy@gmail.com', 'samia', '123', 'weeee', ''),
(19, 'Labib', 'Rahman', 'labibstar@gmail.com', 'dsaeq3e', '+880194280', 'H-13, Ave-2, Block-D, Mirpur-12', 'wtdfd'),
(20, 'Labib', 'Rahman', 'labibstar@gmail.com', 'dqweasd', '+880194280', 'H-13, Ave-2, Block-D, Mirpur-12', 'zxeqw'),
(21, 'Labib', 'Rahman', 'labibstar@gmail.com', 'asdwq3e', '+880194280', 'H-13, Ave-2, Block-D, Mirpur-12', 'wqe'),
(22, 'Labib', 'Rahman', 'labibstar@gmail.com', '243rwe', '+880194280', 'H-13, Ave-2, Block-D, Mirpur-12', 'hxftr'),
(23, 'admin', 'admin', 'admin@admin.com', 'admin123', '0197533412', '32d', '56a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `email_info`
--
ALTER TABLE `email_info`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `orders_info`
--
ALTER TABLE `orders_info`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`order_pro_id`),
  ADD KEY `order_products` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_info_backup`
--
ALTER TABLE `user_info_backup`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `email_info`
--
ALTER TABLE `email_info`
  MODIFY `email_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders_info`
--
ALTER TABLE `orders_info`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `order_pro_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_info_backup`
--
ALTER TABLE `user_info_backup`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
