-- phpMyAdmin SQL Dump
-- version 2.11.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 11, 2014 at 09:17 PM
-- Server version: 5.5.37
-- PHP Version: 5.3.10-1ubuntu3.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `onlc`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cost` decimal(10,0) NOT NULL,
  `count` int(11) NOT NULL,
  `company` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `source` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `cost`, `count`, `company`, `source`) VALUES
(1, 'Nikon 50mm f/1.8D AF Nikkor', 150, 2, 'Nikkor', 'type A'),
(2, 'Nikon 35mm f/1.8G AF-S DX Nikkor', 250, 1, 'Nikkor', 'type A'),
(3, 'Sigma AF 150-500mm F5-6.3 APO DG OS HSM', 95, 1, 'Sigma ', 'type B'),
(4, 'Гелиос 40-2 85mm f/1.5', 35, 2, 'Гелиос', 'type С'),
(5, ' Tamron SP AF 24-70 mm F/2.8 Di VC USD', 40, 1, ' Tamron', 'type В'),
(6, 'Nikon 10-100mm f/4.5-5.6 VR PD-ZOOM', 25, 1, 'Nikkor 1 ', 'type A');
