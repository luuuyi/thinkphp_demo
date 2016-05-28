-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-05-28 22:14:31
-- 服务器版本： 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thinkphp_project1`
--

-- --------------------------------------------------------

--
-- 表的结构 `think_fileinfo`
--

CREATE TABLE `think_fileinfo` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `file_origin_name` varchar(50) NOT NULL,
  `file_save_name` varchar(50) NOT NULL,
  `file_save_path` varchar(50) NOT NULL,
  `notes` varchar(200) NOT NULL,
  `filetype` varchar(20) NOT NULL,
  `uploadtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `think_fileinfo`
--

INSERT INTO `think_fileinfo` (`id`, `username`, `file_origin_name`, `file_save_name`, `file_save_path`, `notes`, `filetype`, `uploadtime`) VALUES
(1, 'luuuyi', '1.jpeg', '57430c1b681cd.jpeg', 'images/20160523/', '这是个测试', '图片', '2016-05-23 21:56:43'),
(2, 'luuuyi', '1.jpg', '57430e69d3f78.jpg', 'images/20160523/', '这是个测试', '图片', '2016-05-23 22:06:33'),
(3, 'luuuyi', 'test.txt', '57430f402921a.txt', 'texts/20160523/', '这是个测试', '文本', '2016-05-23 22:10:08'),
(4, 'luuuyi', 'doctest.doc', '57430f90d3341.doc', 'texts/20160523/', '这是个测试word', '文本', '2016-05-23 22:11:28'),
(5, 'luyi', '20160511_1.jpg', '5744664a51a31.jpg', 'images/20160524/', '这是luyi的测试', '图片', '2016-05-24 22:33:46'),
(6, 'luyi', '20160511_3.jpg', '5744666342d94.jpg', 'images/20160524/', '这是另外一个luyi的测试', '图片', '2016-05-24 22:34:11');

-- --------------------------------------------------------

--
-- 表的结构 `think_imageprocess`
--

CREATE TABLE `think_imageprocess` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `file_origin_name` varchar(50) NOT NULL,
  `file_save_name` varchar(50) NOT NULL,
  `file_save_path` varchar(50) NOT NULL,
  `file_type` varchar(15) NOT NULL,
  `file_detect_result` varchar(200) NOT NULL,
  `uploadtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `think_imageprocess`
--

INSERT INTO `think_imageprocess` (`id`, `username`, `file_origin_name`, `file_save_name`, `file_save_path`, `file_type`, `file_detect_result`, `uploadtime`) VALUES
(7, 'luyi', '5.jpg', '5747b7d7b9c08.jpg', 'images/20160527/', '', '', '2016-05-27 10:58:31'),
(8, 'luyi', '5.jpg', '5747b9948c732.jpg', 'images/20160527/', '', '', '2016-05-27 11:05:56'),
(9, 'luyi', '20160511_1.jpg', '5747bd47ee26e.jpg', 'images/20160527/', '', '', '2016-05-27 11:21:43'),
(10, 'luyi', '20160511_2.jpg', '5747c3170ec6f.jpg', 'images/20160527/', '', '', '2016-05-27 11:46:31'),
(11, 'luyi', '20160511_3.jpg', '5747c5eb078d8.jpg', 'images/20160527/', '', '', '2016-05-27 11:58:35'),
(12, 'luyi', '20160511_4.jpg', '5747c9adb1fa7.jpg', 'images/20160527/', '', '', '2016-05-27 12:14:37'),
(13, 'luyi', '20160511_2.jpg', '5747c9dc5bb73.jpg', 'images/20160527/', '', '', '2016-05-27 12:15:24'),
(14, 'luyi', '20160511_3.jpg', '5747ca20522aa.jpg', 'images/20160527/', '', '', '2016-05-27 12:16:32'),
(15, 'luyi', '5.jpg', '57494b53ebcb9.jpg', 'images/20160528/', '', '', '2016-05-28 15:40:03'),
(16, 'luyi', '1.jpg', '57494c292e63c.jpg', 'images/20160528/', '', '', '2016-05-28 15:43:37'),
(17, 'luyi', '1.jpg', '57494fdd32984.jpg', 'images/20160528/', '二维码', '', '2016-05-28 15:59:25'),
(18, 'luyi', '5.jpg', '574951f473afb.jpg', 'images/20160528/', '二维码', '', '2016-05-28 16:08:20'),
(19, 'luuuyi', '6.jpg', '5749a13a7e5e4.jpg', 'images/20160528/', '二维码', '', '2016-05-28 21:46:34'),
(20, 'luuuyi', '20160511_1.jpg', '5749a26f377bd.jpg', 'images/20160528/', '人脸图像', '', '2016-05-28 21:51:43'),
(21, 'luuuyi', '7.jpg', '5749a40a4ba0e.jpg', 'images/20160528/', '二维码', '', '2016-05-28 21:58:34'),
(22, 'luuuyi', '7.jpg', '5749a4e620113.jpg', 'images/20160528/', '二维码', '', '2016-05-28 22:02:14'),
(23, 'luuuyi', '3.jpg', '5749a6baf372d.jpg', 'images/20160528/', '二维码', 'http://www.lgms.net', '2016-05-28 22:10:03');

-- --------------------------------------------------------

--
-- 表的结构 `think_message`
--

CREATE TABLE `think_message` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(150) NOT NULL,
  `messagetype` varchar(15) NOT NULL,
  `addtime` datetime NOT NULL,
  `addip` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `think_message`
--

INSERT INTO `think_message` (`id`, `username`, `telephone`, `email`, `message`, `messagetype`, `addtime`, `addip`) VALUES
(1, 'luyi', '', '', '这是个测试', 'Job Inquiry', '2016-05-23 00:00:00', '::1'),
(2, 'luuuyi', '14523657854', '3453455@qq.com', '测试另一个MySQL账号', 'Job Inquiry', '2016-05-24 16:31:24', '0.0.0.0'),
(3, 'luyi', '', '', '这还是个测试', 'General Questio', '2016-05-24 21:57:09', '0.0.0.0'),
(4, 'luyi', '15676542344', '2342344@qq.com', '用户测试1', 'Job Inquiry', '2016-05-24 22:02:02', '0.0.0.0');

-- --------------------------------------------------------

--
-- 表的结构 `think_user`
--

CREATE TABLE `think_user` (
  `id` int(11) NOT NULL COMMENT 'id主键',
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `passwordmd5` char(32) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `logintime` datetime NOT NULL,
  `loginip` varchar(30) NOT NULL,
  `lastlogintime` datetime NOT NULL,
  `lastloginip` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `think_user`
--

INSERT INTO `think_user` (`id`, `username`, `password`, `passwordmd5`, `telephone`, `email`, `logintime`, `loginip`, `lastlogintime`, `lastloginip`) VALUES
(1, 'luuuyi', '123456', 'e10adc3949ba59abbe56e057f20f883e', '14523657854', '3453455@qq.com', '2016-05-28 21:45:52', '0.0.0.0', '2016-05-24 16:30:57', '0.0.0.0'),
(3, 'luyi', '1234567', 'fcea920f7412b5da7be0cf42b8c93759', '15676542344', '2342344@qq.com', '2016-05-26 20:23:22', '0.0.0.0', '2016-05-26 16:00:18', '0.0.0.0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `think_fileinfo`
--
ALTER TABLE `think_fileinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `think_imageprocess`
--
ALTER TABLE `think_imageprocess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `think_message`
--
ALTER TABLE `think_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `think_user`
--
ALTER TABLE `think_user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `think_fileinfo`
--
ALTER TABLE `think_fileinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- 使用表AUTO_INCREMENT `think_imageprocess`
--
ALTER TABLE `think_imageprocess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- 使用表AUTO_INCREMENT `think_message`
--
ALTER TABLE `think_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `think_user`
--
ALTER TABLE `think_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id主键', AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
