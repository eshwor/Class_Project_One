-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 25, 2011 at 02:34 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `db_php7am`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_photo`
-- 

CREATE TABLE `tbl_photo` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `tbl_photo`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_user`
-- 

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- 
-- Dumping data for table `tbl_user`
-- 

INSERT INTO `tbl_user` (`id`, `username`, `password`, `fullname`) VALUES 
(1, 'jages', 'konda', '9854678'),
(2, 'sita', 'sita', 'sita'),
(3, 'hari', 'hari', 'HARI'),
(4, 'DINESH', 'DINESH', 'DINESH'),
(5, 'ganesh', 'ganesh', 'ganesh'),
(6, 'kinesh', 'kinesh', 'kinesh'),
(7, 'ramesh', 'ramesh', 'ramesh'),
(8, 'suresh', 'suresh', 'suresh'),
(9, 'babin', 'babin', 'babin'),
(10, 'suresn', 'suersn', 'suersn'),
(11, 'prem', 'prem', 'prem');
