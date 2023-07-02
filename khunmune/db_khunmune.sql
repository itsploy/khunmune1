-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 22, 2023 at 02:59 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ablbotco_bamee`
--

-- --------------------------------------------------------

--
-- Table structure for table `drink`
--

CREATE TABLE `drink` (
  `pk` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` text NOT NULL,
  `typedata` text NOT NULL,
  `total` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `drink`
--

INSERT INTO `drink` (`pk`, `name`, `price`, `typedata`, `total`, `img`) VALUES
(1, 'ชาเย็น', '55', 'แก้ว', '86', 'SGrimg294img664106.png');

-- --------------------------------------------------------

--
-- Table structure for table `drop_eat`
--

CREATE TABLE `drop_eat` (
  `pk` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `drop_eat`
--

INSERT INTO `drop_eat` (`pk`, `name`) VALUES
(1, 'อยู่ในระหว่างทำ'),
(2, 'ทำการเสริฟแล้ว');

-- --------------------------------------------------------

--
-- Table structure for table `drop_postion`
--

CREATE TABLE `drop_postion` (
  `pk` int(11) NOT NULL,
  `status` text NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `drop_postion`
--

INSERT INTO `drop_postion` (`pk`, `status`, `name`) VALUES
(1, 'ST', 'พนักงาน'),
(2, 'A', 'แอดมิน');

-- --------------------------------------------------------

--
-- Table structure for table `member_all`
--

CREATE TABLE `member_all` (
  `pk` int(11) NOT NULL,
  `name` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `status` text NOT NULL,
  `telphone` text NOT NULL,
  `line` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member_all`
--

INSERT INTO `member_all` (`pk`, `name`, `username`, `password`, `status`, `telphone`, `line`) VALUES
(1, 'admin', 'admin', '1234', 'A', '', ''),
(2, 'นาย วันเฉลิม', 'staff', '1234', 'ST', '0848964685', 'sdaf');

-- --------------------------------------------------------

--
-- Table structure for table `member_order`
--

CREATE TABLE `member_order` (
  `pk` int(11) NOT NULL,
  `bill_no` text NOT NULL,
  `bill_no2` text NOT NULL,
  `member` text NOT NULL,
  `menu` text NOT NULL,
  `total` text NOT NULL,
  `eattype` text NOT NULL,
  `create_date` text NOT NULL,
  `create_date2` text NOT NULL,
  `create_time` text NOT NULL,
  `status` text NOT NULL,
  `topping1` text NOT NULL,
  `topping2` text NOT NULL,
  `note` text NOT NULL,
  `typedata` text NOT NULL,
  `price` text NOT NULL,
  `tablein` text NOT NULL,
  `date_start` text NOT NULL,
  `date_start2` text NOT NULL,
  `date_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member_order`
--

INSERT INTO `member_order` (`pk`, `bill_no`, `bill_no2`, `member`, `menu`, `total`, `eattype`, `create_date`, `create_date2`, `create_time`, `status`, `topping1`, `topping2`, `note`, `typedata`, `price`, `tablein`, `date_start`, `date_start2`, `date_time`) VALUES
(16, 'CLW-210520232-1', 'LW-200520232-1', '2', '5', '1', 'พิเศษ', '20-05-2023', '2023-05-20', '15:03', 'อยู่ในระหว่างทำ', '9', '10', '', 'ก๋วยเตี๋ยว', '55', '1', '21-05-2023', '2023-05-21', '18:47'),
(17, 'CLW-210520232-1', 'LW-200520232-2', '2', '1', '1', 'พิเศษ', '20-05-2023', '2023-05-20', '15:04', 'อยู่ในระหว่างทำ', '10', '', '', 'ก๋วยเตี๋ยว', '65', '1', '21-05-2023', '2023-05-21', '18:47'),
(18, 'CLW-210520232-1', 'LW-200520232-3', '2', '6', '1', 'ธรรมดา', '20-05-2023', '2023-05-20', '15:05', 'อยู่ในระหว่างทำ', '', '2', '', 'จานเดียว', '45', '1', '21-05-2023', '2023-05-21', '18:47'),
(19, 'CLW-210520232-1', 'LW-200520232-4', '2', '5', '4', 'ธรรมดา', '20-05-2023', '2023-05-20', '15:05', 'อยู่ในระหว่างทำ', '10', '', '', 'ก๋วยเตี๋ยว', '40', '1', '21-05-2023', '2023-05-21', '18:47'),
(20, 'CLW-210520232-1', 'LW-200520232-4', '2', '1', '4', 'ธรรมดา', '20-05-2023', '2023-05-20', '15:05', 'อยู่ในระหว่างทำ', '', '', '', 'เครื่องดื่ม', '55', '1', '21-05-2023', '2023-05-21', '18:47'),
(21, 'CLW-210520232-1', 'LW-200520232-4', '2', '6', '4', 'ธรรมดา', '20-05-2023', '2023-05-20', '15:05', 'อยู่ในระหว่างทำ', '', '2', '', 'จานเดียว', '45', '1', '21-05-2023', '2023-05-21', '18:47'),
(22, '', 'LW-200520233-5', '3', '5', '1', 'ธรรมดา', '20-05-2023', '2023-05-20', '15:06', 'อยู่ในระหว่างทำ', '9', '10', '', 'ก๋วยเตี๋ยว', '40', '2', '', '', ''),
(23, 'CLW-210520234-2', 'LW-210520234-6', '4', '5', '1', 'พิเศษ', '21-05-2023', '2023-05-21', '18:52', 'ทำการเสริฟแล้ว', '9', '', '', 'ก๋วยเตี๋ยว', '55', '1', '21-05-2023', '2023-05-21', '18:52'),
(24, 'CLW-210520235-3', 'LW-210520235-7', '5', '1', '10', 'พิเศษ', '21-05-2023', '2023-05-21', '18:55', 'อยู่ในระหว่างทำ', '10', '', '', 'ก๋วยเตี๋ยว', '65', '1', '21-05-2023', '2023-05-21', '18:55'),
(25, '', 'LW-200520233-5', '3', '5', '1', 'ธรรมดา', '20-05-2023', '2023-05-20', '15:06', 'อยู่ในระหว่างทำ', '9', '10', '', 'ก๋วยเตี๋ยว', '40', '2', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `member_table`
--

CREATE TABLE `member_table` (
  `pk` int(11) NOT NULL,
  `name` text NOT NULL,
  `telphone` text NOT NULL,
  `timein` text NOT NULL,
  `create_date` text NOT NULL,
  `create_date2` text NOT NULL,
  `tablein` text NOT NULL,
  `closebill` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member_table`
--

INSERT INTO `member_table` (`pk`, `name`, `telphone`, `timein`, `create_date`, `create_date2`, `tablein`, `closebill`) VALUES
(1, 'เเมว มาเเล้ว', '0786563453', '14:13', '15-05-2023', '2023-05-15', '3', 'หมดเวลา'),
(2, 'นาย มาพน  มาลองกิน', '0984846551', '14:03', '17-05-2023', '2023-05-17', '1', 'เช็คบิลแล้ว'),
(3, 'นาย วันดี ขอกินหน่อย', '0889465151', '15:05', '20-05-2023', '2023-05-20', '2', 'กำลังทาน'),
(4, 'มานพ แล้วทำไหม', '0878948651', '18:50', '21-05-2023', '2023-05-21', '1', 'เช็คบิลแล้ว'),
(5, 'มารวย', '0848561513', '18:53', '21-05-2023', '2023-05-21', '1', 'เช็คบิลแล้ว');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pk` int(11) NOT NULL,
  `name` text NOT NULL,
  `price1` text NOT NULL,
  `price2` text NOT NULL,
  `img` text NOT NULL,
  `bill_no` text NOT NULL,
  `typedata` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pk`, `name`, `price1`, `price2`, `img`, `bill_no`, `typedata`) VALUES
(1, 'ก๋วยเตี๋ยว', '55', '65', 'SGrimgbamee92img350890.png', 'PDBAMEE20231305-1', 'ก๋วยเตี๋ยว'),
(5, 'ก๋วยเตี๋ยว', '40', '55', 'SGrimgbamee463img662222.png', 'PDBAMEE20231305-2', 'ก๋วยเตี๋ยว'),
(6, 'กระเพรา', '45', '65', 'SGrimgbameeR439img931265.png', 'PDBAMEE20231305-3', 'จานเดียว');

-- --------------------------------------------------------

--
-- Table structure for table `run_bill2`
--

CREATE TABLE `run_bill2` (
  `pk` int(11) NOT NULL,
  `bill_no` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `run_bill2`
--

INSERT INTO `run_bill2` (`pk`, `bill_no`) VALUES
(4, 'LW-200520232-1'),
(5, 'LW-200520232-2'),
(6, 'LW-200520232-3'),
(7, 'LW-200520232-4'),
(8, 'LW-200520233-5'),
(9, 'LW-210520234-6'),
(10, 'LW-210520235-7');

-- --------------------------------------------------------

--
-- Table structure for table `run_bill3`
--

CREATE TABLE `run_bill3` (
  `pk` int(11) NOT NULL,
  `bill_no` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `run_bill3`
--

INSERT INTO `run_bill3` (`pk`, `bill_no`) VALUES
(1, 'CLW-210520232-1'),
(2, 'CLW-210520234-2'),
(3, 'CLW-210520235-3');

-- --------------------------------------------------------

--
-- Table structure for table `run_product`
--

CREATE TABLE `run_product` (
  `pk` int(11) NOT NULL,
  `bill_no` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `run_product`
--

INSERT INTO `run_product` (`pk`, `bill_no`) VALUES
(1, 'PDBAMEE20231305-1'),
(2, 'PDBAMEE20231305-2'),
(3, 'PDBAMEE20231305-3');

-- --------------------------------------------------------

--
-- Table structure for table `table_data`
--

CREATE TABLE `table_data` (
  `pk` int(11) NOT NULL,
  `name` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_data`
--

INSERT INTO `table_data` (`pk`, `name`, `status`) VALUES
(1, 'โต๊ะหมายเลข 1', 'ว่าง'),
(2, 'โต๊ะหมายเลข 2', 'ไม่ว่าง'),
(3, 'โต๊ะหมายเลข 3', 'ว่าง'),
(4, 'โต๊ะหมายเลข 4', 'ว่าง'),
(5, 'โต๊ะหมายเลข 5', 'ว่าง'),
(6, 'โต๊ะหมายเลข 6', 'ว่าง'),
(7, 'โต๊ะหมายเลข 7', 'ว่าง'),
(8, 'โต๊ะหมายเลข 8', 'ว่าง'),
(9, 'โต๊ะหมายเลข 9', 'ว่าง'),
(10, 'โต๊ะหมายเลข 10', 'ว่าง');

-- --------------------------------------------------------

--
-- Table structure for table `topping_bamee1`
--

CREATE TABLE `topping_bamee1` (
  `pk` int(11) NOT NULL,
  `name` text NOT NULL,
  `bill_no` text NOT NULL,
  `create_by` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `topping_bamee1`
--

INSERT INTO `topping_bamee1` (`pk`, `name`, `bill_no`, `create_by`) VALUES
(9, 'เส้นเล็ก', 'PDBAMEE20231305-1', '1'),
(10, 'เส้นใหญ่', 'PDBAMEE20231305-1', '1'),
(11, 'หมี่ขาว', 'PDBAMEE20231305-2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `topping_bamee2`
--

CREATE TABLE `topping_bamee2` (
  `pk` int(11) NOT NULL,
  `name` text NOT NULL,
  `bill_no` text NOT NULL,
  `create_by` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `topping_bamee2`
--

INSERT INTO `topping_bamee2` (`pk`, `name`, `bill_no`, `create_by`) VALUES
(10, 'หมูชิ้น', 'PDBAMEE20231305-2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `topping_bamee3`
--

CREATE TABLE `topping_bamee3` (
  `pk` int(11) NOT NULL,
  `name` text NOT NULL,
  `bill_no` text NOT NULL,
  `create_by` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `topping_bamee3`
--

INSERT INTO `topping_bamee3` (`pk`, `name`, `bill_no`, `create_by`) VALUES
(2, 'ไข่ดาว', 'PDBAMEE20231305-3', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drink`
--
ALTER TABLE `drink`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `drop_eat`
--
ALTER TABLE `drop_eat`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `drop_postion`
--
ALTER TABLE `drop_postion`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `member_all`
--
ALTER TABLE `member_all`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `member_order`
--
ALTER TABLE `member_order`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `member_table`
--
ALTER TABLE `member_table`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `run_bill2`
--
ALTER TABLE `run_bill2`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `run_bill3`
--
ALTER TABLE `run_bill3`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `run_product`
--
ALTER TABLE `run_product`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `table_data`
--
ALTER TABLE `table_data`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `topping_bamee1`
--
ALTER TABLE `topping_bamee1`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `topping_bamee2`
--
ALTER TABLE `topping_bamee2`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `topping_bamee3`
--
ALTER TABLE `topping_bamee3`
  ADD PRIMARY KEY (`pk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drink`
--
ALTER TABLE `drink`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `drop_eat`
--
ALTER TABLE `drop_eat`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `drop_postion`
--
ALTER TABLE `drop_postion`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `member_all`
--
ALTER TABLE `member_all`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `member_order`
--
ALTER TABLE `member_order`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `member_table`
--
ALTER TABLE `member_table`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `run_bill2`
--
ALTER TABLE `run_bill2`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `run_bill3`
--
ALTER TABLE `run_bill3`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `run_product`
--
ALTER TABLE `run_product`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `table_data`
--
ALTER TABLE `table_data`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `topping_bamee1`
--
ALTER TABLE `topping_bamee1`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `topping_bamee2`
--
ALTER TABLE `topping_bamee2`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `topping_bamee3`
--
ALTER TABLE `topping_bamee3`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
