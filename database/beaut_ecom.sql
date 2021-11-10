-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 07:15 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beaut_ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

CREATE TABLE `buyers` (
  `b_id` int(10) NOT NULL COMMENT 'buyer identification',
  `b_firstname` char(50) NOT NULL COMMENT 'buyer first name',
  `b_lastname` char(50) NOT NULL COMMENT 'buyer last name',
  `b_tel` int(10) NOT NULL COMMENT 'buyer contact number',
  `b_address` char(100) NOT NULL COMMENT 'buyer address',
  `b_nic` char(10) NOT NULL COMMENT 'buyer NIC',
  `b_gender` char(6) NOT NULL COMMENT 'buyer gender',
  `b_email` char(50) NOT NULL COMMENT 'buyer email',
  `b_password` char(50) NOT NULL COMMENT 'buyer password',
  `b_postalCode` int(10) NOT NULL,
  `b_city` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyers`
--

INSERT INTO `buyers` (`b_id`, `b_firstname`, `b_lastname`, `b_tel`, `b_address`, `b_nic`, `b_gender`, `b_email`, `b_password`, `b_postalCode`, `b_city`) VALUES
(1, 'Kethmie', 'Perera', 715409658, '12/3A/22 Oval View Residencies, Borella', '986623728V', 'F', 'perera.kethmie@gmail.com', '12345', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `c_id` int(10) NOT NULL COMMENT 'category identification',
  `c_name` varchar(50) NOT NULL COMMENT 'category name',
  `c_descrip` varchar(1000) NOT NULL COMMENT 'category description',
  `c_img1` varchar(255) NOT NULL COMMENT 'category images',
  `c_img2` varchar(255) NOT NULL,
  `c_img3` varchar(255) NOT NULL,
  `c_img4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`c_id`, `c_name`, `c_descrip`, `c_img1`, `c_img2`, `c_img3`, `c_img4`) VALUES
(1, 'Fragrances', 'Fragrances and perfumes have been part of the cosmetic industry', '????\0JFIF\0\0\0\0\0\0??\0;CREATOR: gd-jpeg v1.0 (using IJG JPEG v62), quality = 80\n??\0C\0\n\n\n		\n\Z%\Z# , #&\')*)-0-(0%()(??\0C\n\n\n\n(\Z\Z((((((((((((((((((((((((((((((((((((((((((((((((((??\077\"\0??\0\0\0\0\0\0', '', '', ''),
(2, 'Color Cosmetics', 'This group includes products that remain on the skin and change the color and appearance. It includes products for the face like foundations, lip sticks, blushes, eye shadow, eye liner, and mascara.', '????\0JFIF\0\0\0\0\0\0??\0lPhotoshop 3.0\08BIM\0\0\0\0\0O(\0JFBMD0f000778030000554b00007faa000047b900002cc700004d0b01005592010056a10100\0??ICC_PROFILE\0\0\0lcms\0\0mntrRGB XYZ ?\0\0\0\0)\09acspAPPL\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0??\0\0\0\0\0?-lcms\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '', '', ''),
(3, 'Body & Personal Care products', 'hese include oral care products like tooth paste, mouthwash and whitening products. It also includes deodorants and anti-perspirants', '????\0JFIF\0\0H\0H\0\0??\0C\0\n\n\n		\n\Z%\Z# , #&\')*)-0-(0%()(??\0C\n\n\n\n(\Z\Z((((((((((((((((((((((((((((((((((((((((((((((((((??\088\"\0??\0\0\0\0\0\0\0\0\0\0\0\0\0??\0\Z\0\0\0\0\0\0\0\0\0\0??\0\0\0\0???E?', '', '', ''),
(4, 'Skin Care Products', 'These are products designed to improve the appearance and feel of skin.', '????\0JFIF\0\0`\0`\0\0??\0?\0\n	\n		\n$ &%# #\"(-90(*6+\"#2D26;=@@@&0FKE>J9?@=\r=)#)==================================================??\0??\"\0??\0\0\0\0\0\0\0\0\0\0\0\0\0??\0\0\0\0\0?0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '', '', ''),
(5, 'Hair care products', 'The most frequently purchased hair products are those designed to remove things from the hair.', '????\0JFIF\0,,\0\0??\0?\0		\n\r\Z\Z $.\' \",#(7),01444\'9=82<.342			\r\r2!!22222222222222222222222222222222222222222222222222??\0??\"\0??\0\0\0\0\0\0\0\0\0\0\0\0\0??\0\0\0\0\0??\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '', '', ''),
(6, 'Beauty tools and accessories ', 'Makeup tools, hair styling tools, etc.', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `ig_id` int(10) NOT NULL,
  `ig_name` varchar(50) NOT NULL,
  `ig_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `keywords`
--

CREATE TABLE `keywords` (
  `k_id` int(10) NOT NULL,
  `k_name` varchar(50) NOT NULL,
  `k_desc` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order-details`
--

CREATE TABLE `order-details` (
  `od_unitprice` varchar(10) NOT NULL,
  `od_qty` int(10) NOT NULL,
  `od_o_id` int(10) NOT NULL,
  `od_stubtotal` varchar(10) NOT NULL,
  `od_p_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(10) NOT NULL,
  `o_b_id` int(10) NOT NULL,
  `o_date` datetime NOT NULL,
  `o_status` varchar(25) NOT NULL,
  `o_statusDate` datetime NOT NULL,
  `o_s_id` int(10) NOT NULL COMMENT 'Seller id FK',
  `o_totalPrice` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(10) NOT NULL COMMENT 'product identification',
  `p_s_id` int(10) NOT NULL COMMENT 'seller identification to know which seller''s product this is',
  `p_name` varchar(70) NOT NULL COMMENT 'product name',
  `p_descrip` varchar(1000) NOT NULL COMMENT 'product description',
  `p_stock` int(10) NOT NULL COMMENT 'product quantity',
  `p_price` float NOT NULL COMMENT 'product price',
  `p_vol` float NOT NULL COMMENT 'product volume/weight',
  `p_img1` varchar(255) NOT NULL COMMENT 'product images',
  `p_img2` varchar(255) NOT NULL,
  `p_img3` varchar(255) NOT NULL,
  `p_img4` varchar(255) NOT NULL,
  `p_img5` varchar(255) NOT NULL,
  `p_c_id` int(10) NOT NULL COMMENT 'category identification',
  `p_brand` varchar(20) NOT NULL COMMENT 'product brand',
  `p_ig_id` int(10) NOT NULL,
  `p_k_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `s_id` int(10) NOT NULL COMMENT 'seller identification',
  `s_name` char(100) NOT NULL COMMENT 'seller name',
  `s_shopname` char(50) NOT NULL COMMENT 'shop name',
  `s_nic` char(10) NOT NULL COMMENT 'seller NIC',
  `s_address` char(100) NOT NULL COMMENT 'warehouse address',
  `s_tel` int(10) NOT NULL COMMENT 'seller contact number',
  `s_email` char(50) NOT NULL COMMENT 'seller email',
  `s_password` char(50) NOT NULL COMMENT 'seller password',
  `s_postalCode` int(10) NOT NULL,
  `s_city` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`s_id`, `s_name`, `s_shopname`, `s_nic`, `s_address`, `s_tel`, `s_email`, `s_password`, `s_postalCode`, `s_city`) VALUES
(1, '', '', '', '', 0, '', '', 0, ''),
(2, 'Dilakshi Perera', 'Oriflame Cosmetics', '9999999999', 'No. 10 Lower Circular Road, Horagollawatta, Nittambuwa', 714473197, 'perera.dilakshi.07@gmail.com', '12345', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `website-owners`
--

CREATE TABLE `website-owners` (
  `wo_username` varchar(20) NOT NULL COMMENT 'website-owner username',
  `wo_password` int(50) NOT NULL COMMENT 'website-owner password',
  `wo_firstname` int(20) NOT NULL COMMENT 'website-owner firstname',
  `wo_lastname` int(20) NOT NULL COMMENT 'website-owner lastname',
  `wo_s_id` int(10) NOT NULL,
  `wo_b_id` int(10) NOT NULL,
  `wo_c_id` int(10) NOT NULL,
  `wo_ig_id` int(10) NOT NULL,
  `wo_o_id` int(10) NOT NULL,
  `wo_p_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyers`
--
ALTER TABLE `buyers`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`ig_id`);

--
-- Indexes for table `keywords`
--
ALTER TABLE `keywords`
  ADD PRIMARY KEY (`k_id`);

--
-- Indexes for table `order-details`
--
ALTER TABLE `order-details`
  ADD KEY `ProductOrderDetailsConstraint` (`od_p_id`),
  ADD KEY `OrderOrderDetailsConstraint` (`od_o_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `b_id` (`o_b_id`),
  ADD KEY `s_id` (`o_s_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `c_id` (`p_c_id`),
  ADD KEY `s_id` (`p_s_id`),
  ADD KEY `ProductIngredientConstraint` (`p_ig_id`),
  ADD KEY `ProductKeywordConstraint` (`p_k_id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `website-owners`
--
ALTER TABLE `website-owners`
  ADD PRIMARY KEY (`wo_username`),
  ADD KEY `woBuyer` (`wo_b_id`),
  ADD KEY `woCat` (`wo_c_id`),
  ADD KEY `woIng` (`wo_ig_id`),
  ADD KEY `woOrder` (`wo_o_id`),
  ADD KEY `woProd` (`wo_p_id`),
  ADD KEY `woSeller` (`wo_s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyers`
--
ALTER TABLE `buyers`
  MODIFY `b_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'buyer identification', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'category identification', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `ig_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keywords`
--
ALTER TABLE `keywords`
  MODIFY `k_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'product identification', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `s_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'seller identification', AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order-details`
--
ALTER TABLE `order-details`
  ADD CONSTRAINT `OrderOrderDetailsConstraint` FOREIGN KEY (`od_o_id`) REFERENCES `orders` (`o_id`),
  ADD CONSTRAINT `ProductOrderDetailsConstraint` FOREIGN KEY (`od_p_id`) REFERENCES `products` (`p_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `OrderBuyerConstraint` FOREIGN KEY (`o_b_id`) REFERENCES `buyers` (`b_id`),
  ADD CONSTRAINT `OrderSellerConstraint` FOREIGN KEY (`o_s_id`) REFERENCES `sellers` (`s_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `ProductCategoryConstraint` FOREIGN KEY (`p_c_id`) REFERENCES `categories` (`c_id`),
  ADD CONSTRAINT `ProductIngredientConstraint` FOREIGN KEY (`p_ig_id`) REFERENCES `ingredients` (`ig_id`),
  ADD CONSTRAINT `ProductKeywordConstraint` FOREIGN KEY (`p_k_id`) REFERENCES `keywords` (`k_id`),
  ADD CONSTRAINT `ProductSellerConstraint` FOREIGN KEY (`p_s_id`) REFERENCES `sellers` (`s_id`);

--
-- Constraints for table `website-owners`
--
ALTER TABLE `website-owners`
  ADD CONSTRAINT `woBuyer` FOREIGN KEY (`wo_b_id`) REFERENCES `buyers` (`b_id`),
  ADD CONSTRAINT `woCat` FOREIGN KEY (`wo_c_id`) REFERENCES `categories` (`c_id`),
  ADD CONSTRAINT `woIng` FOREIGN KEY (`wo_ig_id`) REFERENCES `ingredients` (`ig_id`),
  ADD CONSTRAINT `woOrder` FOREIGN KEY (`wo_o_id`) REFERENCES `orders` (`o_id`),
  ADD CONSTRAINT `woProd` FOREIGN KEY (`wo_p_id`) REFERENCES `products` (`p_id`),
  ADD CONSTRAINT `woSeller` FOREIGN KEY (`wo_s_id`) REFERENCES `sellers` (`s_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
