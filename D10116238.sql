-- phpMyAdmin SQL Dump
-- version 4.1.1
-- http://www.phpmyadmin.net
--
-- 主機： localhost
-- 產生時間： 2014 年 12 月 27 日 14:44
-- 伺服器版本： 5.1.73
-- PHP 版本： 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `D10116238`
--

-- --------------------------------------------------------

--
-- 資料表結構 `menber`
--

CREATE TABLE IF NOT EXISTS `menber` (
  `No` tinyint(4) NOT NULL AUTO_INCREMENT,
  `ID` varchar(256) DEFAULT NULL COMMENT 'As Email',
  `passwd` varchar(500) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`No`),
  UNIQUE KEY `ID` (`ID`),
  KEY `name` (`name`),
  KEY `mobile` (`mobile`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 資料表的匯出資料 `menber`
--

-- --------------------------------------------------------

--
-- 資料表結構 `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `no` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `formats` varchar(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `img_resorce` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
