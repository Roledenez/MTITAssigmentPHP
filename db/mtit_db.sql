-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2016 at 05:37 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mtit_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `elements`
--

CREATE TABLE `elements` (
  `id` int(11) NOT NULL,
  `label` varchar(250) NOT NULL,
  `code` text NOT NULL,
  `page_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elements`
--

INSERT INTO `elements` (`id`, `label`, `code`, `page_number`) VALUES
(77, 'textBox', '<div class="form-group"><label class="col-md-4 control-label" for="textinput">{text}</label><div class="col-md-4"><input id="textinput" name="textinput" type="text" placeholder="text" class="form-control input-md"></div>{button}</div>', 0),
(78, 'button', '<div class="form-group"><div class="col-md-4"><button id="singlebutton" name="singlebutton" class="btn btn-primary">Button</button></div></div>', 0),
(79, 'link', '<div class="form-group"><div class="col-md-4"><a href="add.php" class="btn btn-primary">Button</a></div></div>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `element_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(250) NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `element_id`, `name`, `code`) VALUES
(1, 0, 'firstpage', 'fafda'),
(4, 0, '', ''),
(5, 0, 'hello form', ''),
(6, 0, 'yo yo form', ''),
(7, 0, '', ''),
(8, 0, '', ''),
(9, 0, '', ''),
(10, 0, 'heo', ''),
(11, 0, 'test', 'test'),
(12, 0, '11', '<div class="form-group"><label class="col-md-4 control-label" for="textinput">{text}</label><div class="col-md-4"><input id="textinput" name="textinput" type="text" placeholder="text" class="form-control input-md"></div>{button}</div><div class="form-group"><label class="col-md-4 control-label" for="textinput">{text}</label><div class="col-md-4"><input id="textinput" name="textinput" type="text" placeholder="text" class="form-control input-md"></div>{button}</div><div class="form-group"><label class="col-md-4 control-label" for="textinput">{text}</label><div class="col-md-4"><input id="textinput" name="textinput" type="text" placeholder="text" class="form-control input-md"></div>{button}</div><div class="form-group"><label class="col-md-4 control-label" for="textinput">{text}</label><div class="col-md-4"><input id="textinput" name="textinput" type="text" placeholder="text" class="form-control input-md"></div>{button}</div><div class="form-group"><label class="col-md-4 control-label" for="textinput">{text}</label><div class="col-md-4"><input id="textinput" name="textinput" type="text" placeholder="text" class="form-control input-md"></div>{button}</div>'),
(13, 0, 'hello form', '<div class="form-group"><label class="col-md-4 control-label" for="textinput">{text}</label><div class="col-md-4"><input id="textinput" name="textinput" type="text" placeholder="text" class="form-control input-md"></div>{button}</div><div class="form-group"><label class="col-md-4 control-label" for="textinput">{text}</label><div class="col-md-4"><input id="textinput" name="textinput" type="text" placeholder="text" class="form-control input-md"></div>{button}</div><div class="form-group"><label class="col-md-4 control-label" for="textinput">{text}</label><div class="col-md-4"><input id="textinput" name="textinput" type="text" placeholder="text" class="form-control input-md"></div>{button}</div><div class="form-group"><label class="col-md-4 control-label" for="textinput">{text}</label><div class="col-md-4"><input id="textinput" name="textinput" type="text" placeholder="text" class="form-control input-md"></div>{button}</div>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elements`
--
ALTER TABLE `elements`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `label` (`label`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `elements`
--
ALTER TABLE `elements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
