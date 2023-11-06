-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Oct 05, 2022 at 10:15 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `db_qrcode`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_qr`
-- 

CREATE TABLE `tbl_qr` (
  `id` int(12) NOT NULL,
  `teks` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `tbl_qr`
-- 

