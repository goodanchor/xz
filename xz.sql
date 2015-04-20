-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015-04-20 19:12:06
-- 服务器版本: 5.5.41-0ubuntu0.14.04.1
-- PHP 版本: 5.5.9-1ubuntu4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `xz`
--

-- --------------------------------------------------------

--
-- 表的结构 `cases`
--

CREATE TABLE IF NOT EXISTS `cases` (
  `caseid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '商品ｉｄ',
  `casename` varchar(20) NOT NULL COMMENT '商品名',
  `pid` int(10) NOT NULL COMMENT '上级目录',
  `total` int(10) unsigned NOT NULL COMMENT '总数',
  PRIMARY KEY (`caseid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `collect`
--

CREATE TABLE IF NOT EXISTS `collect` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `userid` int(10) NOT NULL COMMENT '用户ｉｄ',
  `proid` int(10) NOT NULL COMMENT '商品ｉｄ',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- 表的结构 `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `proid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '商品ｉｄ',
  `proname` varchar(50) NOT NULL COMMENT '商品名称',
  `pid` int(10) NOT NULL COMMENT '商品类别',
  `wants` varchar(100) NOT NULL COMMENT '想对换',
  `userid` int(10) NOT NULL COMMENT '主人',
  `pic` varchar(500) NOT NULL COMMENT '商品图片',
  `description` varchar(200) NOT NULL COMMENT '描述',
  `time` int(11) NOT NULL COMMENT '上传时间',
  PRIMARY KEY (`proid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `products`
--

INSERT INTO `products` (`proid`, `proname`, `pid`, `wants`, `userid`, `pic`, `description`, `time`) VALUES
(16, 'dhg', 2, '2', 0, '', '', 1429527447),
(17, 'sq', 2, '2', 0, '', '', 1429525650),
(18, 'sq', 2, '2', 0, '', '', 1429525651),
(19, 'sq', 2, '2', 0, '', '', 1429525652);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户ｉｄ',
  `email` varchar(50) NOT NULL COMMENT '邮箱',
  `name` varchar(32) NOT NULL COMMENT '昵称',
  `password` varchar(32) NOT NULL COMMENT '密码',
  `qq` varchar(10) NOT NULL COMMENT 'ｑｑ',
  `phone` varchar(11) NOT NULL COMMENT '电话',
  `avater` varchar(100) NOT NULL COMMENT '头像',
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='用户表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`userid`, `email`, `name`, `password`, `qq`, `phone`, `avater`) VALUES
(2, '112233@qq.com', 'sq', '03b2cb341146988d5cf16a1d6a7925d4', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
