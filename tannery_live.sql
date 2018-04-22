-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2017 at 01:04 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tannery_live`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `stock_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `supplier_id` int(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `mrp` int(10) NOT NULL,
  `discount_price` int(10) NOT NULL,
  `vat` int(10) NOT NULL,
  `mrp_total` int(10) NOT NULL,
  `sales_rate` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `rate` int(100) NOT NULL,
  `allocate_piece` int(10) DEFAULT NULL,
  `allocate_price` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `prod_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `prod_name`) VALUES
(1, 'Belt'),
(2, 'Bearing'),
(3, 'Pully');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `Purchase_id` int(11) NOT NULL,
  `product_id` int(100) NOT NULL,
  `supplier_id` int(10) NOT NULL,
  `brand` varchar(15) NOT NULL,
  `billno` int(15) NOT NULL,
  `size` text NOT NULL,
  `mrp` int(20) NOT NULL,
  `discountprice` int(20) NOT NULL,
  `vat` int(10) NOT NULL,
  `mrp_total` int(11) NOT NULL,
  `sales_rate` int(11) NOT NULL,
  `quantity` int(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`Purchase_id`, `product_id`, `supplier_id`, `brand`, `billno`, `size`, `mrp`, `discountprice`, `vat`, `mrp_total`, `sales_rate`, `quantity`, `created_at`) VALUES
(1, 1, 2, 'Poly Plus', 111, '123', 897, 89, 789, 789, 78, 7897897, '2017-03-29 05:54:07'),
(2, 1, 3, 'Poly Plus', 67675, '123', 567, 576, 567, 5, 675, 756, '2017-03-29 05:57:41'),
(3, 1, 2, 'Poly Plus', 5455, '123', 233, 33344, 335, 345, 456, 12, '2017-03-29 06:44:32'),
(4, 1, 2, 'Poly Plus', 646, '123', 4343, 434, 545, 43, 434, 4, '2017-03-29 06:46:01'),
(5, 1, 2, 'Poly Plus', 897897, '987897', 789, 789, 798, 798, 7, 789, '2017-03-29 06:58:55'),
(6, 2, 1, 'SKF', 689, '79878', 68, 76, 876, 786, 688, 68, '2017-03-29 06:58:55'),
(7, 2, 3, 'SKF', 676, '686787', 876, 786, 76, 786, 786, 786, '2017-03-29 06:58:55'),
(8, 2, 3, 'NBC', 765, '767575765', 765, 76, 576, 567, 56, 765, '2017-03-29 06:58:55'),
(9, 1, 2, 'PolyF', 9, '09798', 789, 7, 987, 89, 79, 789, '2017-03-29 06:58:55'),
(10, 1, 3, 'Poly Plus', 456, '12345678', 56, 56, 5, 6, 6, 89, '2017-03-29 06:58:55'),
(11, 3, 2, '', 43, '78575', 4455434, 97984, 354, 34, 43, 43, '2017-03-29 06:58:55'),
(12, 1, 2, 'PolyF', 7897, '09798', 789, 79, 79, 87, 98, 89789, '2017-03-29 10:35:58');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_cart`
--

CREATE TABLE `purchase_cart` (
  `id` int(11) NOT NULL,
  `purchase_id` int(15) NOT NULL,
  `product_id` int(15) NOT NULL,
  `supplier_id` int(15) NOT NULL,
  `brand` varchar(15) NOT NULL,
  `billno` int(15) NOT NULL,
  `size` text NOT NULL,
  `mrp` int(15) NOT NULL,
  `discountprice` int(15) NOT NULL,
  `vat` int(15) NOT NULL,
  `mrp_total` int(15) NOT NULL,
  `sales_rate` int(15) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_cart`
--

INSERT INTO `purchase_cart` (`id`, `purchase_id`, `product_id`, `supplier_id`, `brand`, `billno`, `size`, `mrp`, `discountprice`, `vat`, `mrp_total`, `sales_rate`, `quantity`, `created_at`) VALUES
(6, 0, 2, 3, 'SKF', 79, '07979', 78, 97, 89, 7897, 7987, 8789, '2017-03-29 10:19:05'),
(8, 0, 1, 2, 'PolyF', 8787, '79797', 87, 87, 8, 789, 7, 87, '2017-03-29 10:22:37');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `sales_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `supplier_id` int(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `mrp` int(10) NOT NULL,
  `discount_price` int(10) NOT NULL,
  `vat` int(10) NOT NULL,
  `mrp_total` int(10) NOT NULL,
  `sales_rate` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `rate` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `sales_id`, `product_id`, `supplier_id`, `brand`, `size`, `mrp`, `discount_price`, `vat`, `mrp_total`, `sales_rate`, `quantity`, `rate`, `created_at`) VALUES
(1, 1, 2, 3, 'NBC', '767575765', 765, 76, 576, 567, 56, 4, 304, '2017-03-29 10:40:09'),
(2, 2, 1, 2, 'PolyF', '09798', 789, 79, 79, 87, 98, 3, 237, '2017-03-29 10:44:34');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `product_id` int(100) NOT NULL,
  `supplier_id` int(10) NOT NULL,
  `brand` varchar(15) NOT NULL,
  `billno` int(100) NOT NULL,
  `size` text NOT NULL,
  `mrp` int(20) NOT NULL,
  `discountprice` int(20) NOT NULL,
  `vat` int(10) NOT NULL,
  `mrp_total` int(11) NOT NULL,
  `sales_rate` int(11) NOT NULL,
  `quantity` int(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `product_id`, `supplier_id`, `brand`, `billno`, `size`, `mrp`, `discountprice`, `vat`, `mrp_total`, `sales_rate`, `quantity`, `created_at`) VALUES
(1, 1, 2, 'Poly Plus', 111, '123', 4343, 434, 545, 43, 434, 7897913, '2017-03-29 05:54:07'),
(2, 1, 3, 'Poly Plus', 67675, '123', 4343, 434, 545, 43, 434, 772, '2017-03-29 05:57:41'),
(3, 1, 2, 'Poly Plus', 897897, '987897', 789, 789, 798, 798, 7, 789, '2017-03-29 06:58:55'),
(4, 2, 1, 'SKF', 689, '79878', 68, 76, 876, 786, 688, 68, '2017-03-29 06:58:55'),
(5, 2, 3, 'SKF', 676, '686787', 876, 786, 76, 786, 786, 786, '2017-03-29 06:58:55'),
(6, 2, 3, 'NBC', 765, '767575765', 765, 76, 576, 567, 56, 761, '2017-03-29 06:58:55'),
(7, 1, 2, 'PolyF', 9, '09798', 789, 79, 79, 87, 98, 90575, '2017-03-29 06:58:55'),
(8, 1, 3, 'Poly Plus', 456, '12345678', 56, 56, 5, 6, 6, 89, '2017-03-29 06:58:55'),
(9, 3, 2, '', 43, '78575', 4455434, 97984, 354, 34, 43, 43, '2017-03-29 06:58:55');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `name`) VALUES
(1, 'Hari'),
(2, 'Mani'),
(3, 'Dhinesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`Purchase_id`);

--
-- Indexes for table `purchase_cart`
--
ALTER TABLE `purchase_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `Purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `purchase_cart`
--
ALTER TABLE `purchase_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
