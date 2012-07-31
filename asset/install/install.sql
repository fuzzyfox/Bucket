-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 30, 2012 at 08:44 pm
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `mozillauk`
--

CREATE DATABASE %DATABASE% IF NOT EXISTS;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(40) NOT NULL,
  `event_description` text NOT NULL,
  `event_url` varchar(255) DEFAULT NULL,
  `start_date` int(4) unsigned DEFAULT NULL COMMENT 'event start timestamp',
  `finish_date` int(4) unsigned DEFAULT NULL COMMENT 'event finish timestamp',
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_name`, `event_description`, `event_url`, `start_date`, `finish_date`) VALUES
(6, 'Awesome Meetup', 'This is an awesome chance to meet up with some amazing people!', 'http://www.awesomemeetup.com', 1342742400, 1343433600);

-- --------------------------------------------------------

--
-- Table structure for table `event_tag`
--

CREATE TABLE IF NOT EXISTS `event_tag` (
  `tag_name` varchar(40) NOT NULL,
  `event_id` int(11) NOT NULL,
  PRIMARY KEY (`tag_name`,`event_id`),
  KEY `event_id` (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_tag`
--

INSERT INTO `event_tag` (`tag_name`, `event_id`) VALUES
('awsome', 6),
('example', 6),
('here', 6),
('tags', 6);

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE IF NOT EXISTS `feed` (
  `email` varchar(254) DEFAULT NULL,
  `feed_url` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`feed_url`),
  KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`email`, `feed_url`) VALUES
('', 'http://blog.mozilla.org/about_mozilla/feed'),
('', 'http://blog.mozilla.org/feed');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `tag_name` varchar(40) NOT NULL,
  `tag_description` text,
  PRIMARY KEY (`tag_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`tag_name`, `tag_description`) VALUES
('awsome', NULL),
('camp', NULL),
('conference', NULL),
('disscussion', NULL),
('example', NULL),
('here', NULL),
('mozilla', NULL),
('remo', NULL),
('remocamp2012', NULL),
('tags', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `email` varchar(254) NOT NULL DEFAULT '',
  `password` char(128) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`, `status`, `name`) VALUES
('j.doe@example.com', 'b62f1bfe50184fbc0898c8ffef5ad26d469f2dd452b98c103cf3a21436aeaf9fc988b75f644cf0136b3a2401c16a16a0218849509e86dbaf75d34fe79976b37a', 0, 'John Doe');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event_tag`
--
ALTER TABLE `event_tag`
  ADD CONSTRAINT `event_tag_ibfk_1` FOREIGN KEY (`tag_name`) REFERENCES `tag` (`tag_name`),
  ADD CONSTRAINT `event_tag_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE;
