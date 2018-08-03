

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE `face` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `face`;

-- --------------------------------------------------------



--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `chat_id` int(11) NOT NULL auto_increment,
  `username` varchar(255) NOT NULL,
  `recipient` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `time` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`chat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;


--
-- Table structure for table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `friend_id` int(11) NOT NULL auto_increment,
  `username` varchar(30) NOT NULL,
  `friend` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL,
  `date_added` varchar(50) NOT NULL,
  PRIMARY KEY  (`friend_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;



--
-- Table structure for table `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `mail_id` int(11) NOT NULL auto_increment,
  `member_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `content` varchar(200) NOT NULL,
  `date_sent` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY  (`mail_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;


--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `member_id` int(11) NOT NULL auto_increment,
  `username` varchar(20) NOT NULL,
  `password` varchar(16) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact_no` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `birthdate` varchar(100) NOT NULL,
  `b_month` varchar(20) NOT NULL,
  `b_day` varchar(20) NOT NULL,
  `b_year` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `relationship` varchar(20) NOT NULL,
  `interest` varchar(200) NOT NULL,
  `quote` text NOT NULL,
  `hometown` varchar(100) NOT NULL,
  `college` varchar(100) NOT NULL,
  `high_school` varchar(100) NOT NULL,
  `aboutme` text NOT NULL,
  `image` mediumtext NOT NULL,
  `type` varchar(20) NOT NULL,
  `course` varchar(100) NOT NULL,
  `yr_sec` varchar(100) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `id_no` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `confirmation` varchar(5) NOT NULL,
  PRIMARY KEY  (`member_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;



CREATE TABLE IF NOT EXISTS `messages` (
  `message_id` int(11) NOT NULL auto_increment,
  `sender` varchar(20) NOT NULL,
  `recipient` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `date_sent` varchar(50) NOT NULL,
  PRIMARY KEY  (`message_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;



-- --------------------------------------------------------

--
-- Table structure for table `photoscomment`
--

CREATE TABLE IF NOT EXISTS `photoscomment` (
  `comment_id` int(11) NOT NULL auto_increment,
  `comment` text NOT NULL,
  `commentby` varchar(100) NOT NULL,
  `PIC` varchar(30) NOT NULL,
  `upload_id` int(11) NOT NULL,
  `date_comment` varchar(50) NOT NULL,
  PRIMARY KEY  (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;


--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(11) NOT NULL auto_increment,
  `username` varchar(20) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `friend` varchar(50) NOT NULL,
  `friend_firstname` varchar(50) NOT NULL,
  `friend_lastname` varchar(50) NOT NULL,
  `content` varchar(100) NOT NULL,
  `date_created` varchar(50) NOT NULL,
  PRIMARY KEY  (`post_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;


--
-- Table structure for table `postcomment`
--

CREATE TABLE IF NOT EXISTS `postcomment` (
  `comment_id` int(11) NOT NULL auto_increment,
  `content` text NOT NULL,
  `commentby` varchar(80) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `post_id` int(40) NOT NULL,
  `date_created` varchar(50) NOT NULL,
  PRIMARY KEY  (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;


--
-- Table structure for table `updates`
--

CREATE TABLE IF NOT EXISTS `updates` (
  `update_id` int(11) NOT NULL auto_increment,
  `member_id` int(11) NOT NULL,
  `status` text character set latin1 NOT NULL,
  `image` mediumtext character set latin1 NOT NULL,
  `friend` text character set latin1 NOT NULL,
  `date` varchar(50) character set latin1 NOT NULL,
  PRIMARY KEY  (`update_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=0 ;


--
-- Table structure for table `uploads`
--

CREATE TABLE IF NOT EXISTS `uploads` (
  `upload_id` int(11) NOT NULL auto_increment,
  `username` varchar(20) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `image_name` varchar(20) NOT NULL,
  `date_created` varchar(50) NOT NULL,
  PRIMARY KEY  (`upload_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;


--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `session_id` int(11) NOT NULL auto_increment,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `modified_date` timestamp NOT NULL default '0000-00-00 00:00:00',
  `image` varchar(255) NOT NULL,
  PRIMARY KEY  (`session_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

