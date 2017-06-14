-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- รุ่นของเซิร์ฟเวอร์: 5.0.51
-- รุ่นของ PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- ฐานข้อมูล: `orderss`
-- 

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `admin`
-- 

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- dump ตาราง `admin`
-- 

INSERT INTO `admin` VALUES ('admin', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `detail_p`
-- 

CREATE TABLE `detail_p` (
  `p_id` int(11) NOT NULL auto_increment,
  `p_name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY  (`p_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- dump ตาราง `detail_p`
-- 

INSERT INTO `detail_p` VALUES (1, 'เสื้อยืด', 199);
INSERT INTO `detail_p` VALUES (2, 'กางเกง', 250);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `orders`
-- 

CREATE TABLE `orders` (
  `o_id` int(11) NOT NULL,
  `p_id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `date_o` datetime NOT NULL,
  PRIMARY KEY  (`o_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- dump ตาราง `orders`
-- 


-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `user`
-- 

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `img_user` varchar(50) NOT NULL,
  `date_regis` varchar(50) NOT NULL,
  PRIMARY KEY  (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- dump ตาราง `user`
-- 

INSERT INTO `user` VALUES (1, 'tara', 'ka', 'MDgwMjIyMzM1MA==', 'fda', '1479031906.jpg', '2016-11-13 17:11:46');
INSERT INTO `user` VALUES (2, 'อภิวัฒน์', 'art', 'MTIzNDU2', 'aaa', '1479623089.jpg', '2016-11-20 13:24:49');
