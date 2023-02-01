-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2010 年 05 月 29 日 16:00
-- 服务器版本: 5.0.45
-- PHP 版本: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- 数据库: `sgrademangement`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `name` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY  (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 导出表中的数据 `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- 表的结构 `course`
--

CREATE TABLE `course` (
  `cid` int(8) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `ccredit` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 导出表中的数据 `course`
--


-- --------------------------------------------------------

--
-- 表的结构 `customer`
--

CREATE TABLE `customer` (
  `name` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 导出表中的数据 `customer`
--


-- --------------------------------------------------------

--
-- 表的结构 `grade`
--

CREATE TABLE `grade` (
  `sid` int(8) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `cid` int(8) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `sgrade` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 导出表中的数据 `grade`
--

INSERT INTO `grade` (`sid`, `sname`, `cid`, `cname`, `sgrade`) VALUES
(1, '??', 1, '??', 88),
(1, '??', 2, '??', 60),
(1, '??', 3, '????', 77),
(2, 'ÀîËÄ', 1, '¡¤¸ßÊý', 99);

-- --------------------------------------------------------

--
-- 表的结构 `sinfo`
--

CREATE TABLE `sinfo` (
  `sid` int(8) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `sage` int(4) NOT NULL,
  `ssex` varchar(4) NOT NULL,
  `sdept` varchar(40) NOT NULL,
  PRIMARY KEY  (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 导出表中的数据 `sinfo`
--

