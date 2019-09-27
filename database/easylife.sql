-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 03 月 27 日 18:12
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `easylife`
--
CREATE DATABASE IF NOT EXISTS `easylife` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `easylife`;

-- --------------------------------------------------------

--
-- 表的结构 `a_user`
--

CREATE TABLE IF NOT EXISTS `a_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `a_user`
--

INSERT INTO `a_user` (`id`, `username`, `password`) VALUES
(1, 'admin', '123@com');

-- --------------------------------------------------------

--
-- 表的结构 `chair_goods`
--

CREATE TABLE IF NOT EXISTS `chair_goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `chair_name` varchar(200) NOT NULL,
  `chair_price` float(20,2) NOT NULL,
  `chair_img` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `chair_goods`
--

INSERT INTO `chair_goods` (`id`, `chair_name`, `chair_price`, `chair_img`) VALUES
(2, '起点椅', 1699.00, 'images/chair01.jpg'),
(3, '神马椅', 1899.00, 'images/chair02.jpg'),
(4, '官帽椅', 2899.00, 'images/chair03.jpg'),
(5, '信凳', 499.00, 'images/chair04.jpg'),
(6, '吧台椅', 1399.00, 'images/chair05.jpg'),
(7, '圆方椅', 899.00, 'images/chair06.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `goods`
--

CREATE TABLE IF NOT EXISTS `goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_name` varchar(200) NOT NULL,
  `goods_price` float(20,2) NOT NULL,
  `goods_img` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- 转存表中的数据 `goods`
--

INSERT INTO `goods` (`id`, `goods_name`, `goods_price`, `goods_img`) VALUES
(1, '小俏皮单人布艺沙发', 2299.00, '../images/list_sofa01.jpg'),
(2, '高领双人沙发', 3999.00, '../images/list_sofa02.jpg'),
(3, '亲子双人布艺沙发', 3599.00, '../images/list_sofa03.jpg'),
(5, '\r\n\r\n暖眠三人沙发床', 5999.00, '../images/list_sofa04.jpg'),
(6, '马卡龙真皮沙发', 3599.00, '../images/list_sofa05.jpg'),
(7, '\r\n\r\n双人抽屉沙发', 2899.00, '../images/list_sofa06.jpg'),
(8, '\r\n\r\n噗町懒人沙发', 399.00, '../images/list_sofa07.jpg'),
(9, '小俏皮三人布艺沙发', 3999.00, '../images/list_sofa08.jpg'),
(10, '\r\n\r\n一起日式咖啡桌', 1299.00, '../images/list_table01.jpg'),
(11, '\r\n\r\n花团圆转盘圆餐桌', 4599.00, '../images/list_table02.jpg'),
(12, '\r\n\r\n达利伸缩吧台桌', 1999.00, '../images/list_table03.jpg'),
(13, '小天地方桌', 1998.00, '../images/list_table05.jpg'),
(14, '\r\n\r\n森叠折叠餐桌', 1999.00, '../images/list_table04.jpg'),
(15, '\r\n\r\n卡瑞丽小圆桌', 998.00, '../images/list_table06.jpg'),
(16, '\r\n\r\n浮云中式茶几', 1599.00, '../images/list_table07.jpg'),
(17, '\r\n\r\n日出梳妆台', 3599.00, '../images/list_table08.jpg'),
(18, '纯实木官帽椅', 2899.00, '../images/list_chair01.jpg'),
(19, '水曲柳木简椅', 799.00, '../images/list_chair02.jpg'),
(20, '\r\n\r\n榉木起点椅', 1699.00, '../images/list_chair03.jpg'),
(21, '\r\n\r\n神马单人椅', 1999.00, '../images/list_chair04.jpg'),
(22, '天圆地方长凳', 1998.00, '../images/list_chair05.jpg'),
(23, '阿童木日系凳', 499.00, '../images/list_chair06.jpg'),
(24, '小芭蕾梳妆凳', 299.00, '../images/list_chair07.jpg'),
(25, '\r\n\r\n日式信凳', 499.00, '../images/list_chair08.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `sofa1_goods`
--

CREATE TABLE IF NOT EXISTS `sofa1_goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sofa1_name` varchar(200) NOT NULL,
  `sofa1_price` float(20,2) NOT NULL,
  `sofa1_img` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `sofa1_goods`
--

INSERT INTO `sofa1_goods` (`id`, `sofa1_name`, `sofa1_price`, `sofa1_img`) VALUES
(1, '双人抽屉沙发', 2899.00, 'images/sofa01.jpg'),
(2, '马卡龙牛皮沙发', 3599.00, 'images/sofa02.jpg'),
(3, '亲子布艺沙发', 2999.00, 'images/sofa03.jpg'),
(4, '小俏皮单人沙发', 2299.00, 'images/sofa04.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `sofa2_goods`
--

CREATE TABLE IF NOT EXISTS `sofa2_goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sofa2_name` varchar(200) NOT NULL,
  `sofa2_price` float(20,2) NOT NULL,
  `sofa2_img` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `sofa2_goods`
--

INSERT INTO `sofa2_goods` (`id`, `sofa2_name`, `sofa2_price`, `sofa2_img`) VALUES
(1, '睡眠三人沙发床', 5999.00, 'images/sofa05.jpg'),
(3, '小俏皮双人沙发', 2999.00, 'images/sofa06.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `table_goods`
--

CREATE TABLE IF NOT EXISTS `table_goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(200) NOT NULL,
  `table_price` float(20,2) NOT NULL,
  `table_img` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `table_goods`
--

INSERT INTO `table_goods` (`id`, `table_name`, `table_price`, `table_img`) VALUES
(8, '达利伸缩吧台', 1999.00, 'images/table03.jpg'),
(9, '笑纳收纳茶台', 3599.00, 'images/table02.jpg'),
(10, '小芭蕾梳妆台', 1699.00, 'images/table04.jpg'),
(11, '日出折叠梳妆台', 3599.00, 'images/table05.jpg'),
(12, '二分之一榻榻米', 1998.00, 'images/table01.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(6, 'NOTHING', 'e10adc3949ba59abbe56e057f20f883e');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
