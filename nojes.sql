-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.35-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table evangel.metadata
CREATE TABLE IF NOT EXISTS `metadata` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `midname` varchar(50) NOT NULL,
  `file` int(11) NOT NULL DEFAULT '0',
  `lastname` varchar(50) NOT NULL,
  `affiliation` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(50) NOT NULL,
  `abstract` varchar(50) NOT NULL,
  `language` varchar(50) NOT NULL,
  `agencies` varchar(50) NOT NULL,
  `references` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table evangel.metadata: ~7 rows (approximately)
/*!40000 ALTER TABLE `metadata` DISABLE KEYS */;
INSERT INTO `metadata` (`id`, `firstname`, `midname`, `file`, `lastname`, `affiliation`, `email`, `url`, `phone`, `location`, `image`, `title`, `abstract`, `language`, `agencies`, `references`) VALUES
	(1, 'damilare', 'lekan', 0, 'arikeusola', 'hyfygugu', 'lekanvgbg@gmail.com', 'https://www.4manifestcleans.com/', '', '', '', '', '', '', '', ''),
	(2, 'damilare', 'lekan', 0, 'arikeusola', 'hyfygugu', 'lekanvgbg@gmail.com', 'https://www.4manifestcleans.com/', '', '', '', 'Project Manager', 'rfwdywwqyu', 'Nigeria', '', 'iwgyefyeogoiuqo'),
	(3, 'damilare', 'lekan', 0, 'arikeusola', 'hyfygugu', 'lekanvgbg@gmail.com', 'https://www.4manifestcleans.com/', '', '', '', 'Project Manager', 'rfwdywwqyu', 'Nigeria', '', 'iwgyefyeogoiuqo'),
	(4, 'damilare', 'lekan', 0, 'arikeusola', 'freeee', 'lekanvgbg@gmail.com', 'https://google.com/', '', '', '', '', '', '', '', ''),
	(5, 'Mickey', 'lekan', 0, 'Mouse', 'gfdr', 'lekanvgbg@gmail.com', 'https://google.com/', '', '', '', '', '', '', '', ''),
	(6, 'damilare', 'lekan', 18, 'Mouse', 'asass', 'lekanvgbg@gmail.com', 'https://ultramediasolution.com/', '', '', '', '', '', '', '', ''),
	(7, 'Mickey', 'lekan', 18, 'arikeusola', 'ft5tr5trt', 'lekanvgbg@gmail.com', 'https://fashionablemenng.com/', '', '', '', '', '', '', '', '');
/*!40000 ALTER TABLE `metadata` ENABLE KEYS */;

-- Dumping structure for table evangel.supplementry
CREATE TABLE IF NOT EXISTS `supplementry` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `file` int(11) NOT NULL,
  `format` varchar(10) NOT NULL,
  `size` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table evangel.supplementry: ~2 rows (approximately)
/*!40000 ALTER TABLE `supplementry` DISABLE KEYS */;
INSERT INTO `supplementry` (`id`, `name`, `file`, `format`, `size`, `date`) VALUES
	(15, 'Annex 30.pdf', 18, 'applicatio', '0.1', '2020-03-21 19:01:21'),
	(16, 'Annex 30.pdf', 18, 'applicatio', '0.1', '2020-03-21 19:02:55');
/*!40000 ALTER TABLE `supplementry` ENABLE KEYS */;

-- Dumping structure for table evangel.upload
CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `user` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `format` varchar(10) NOT NULL,
  `size` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- Dumping data for table evangel.upload: ~10 rows (approximately)
/*!40000 ALTER TABLE `upload` DISABLE KEYS */;
INSERT INTO `upload` (`id`, `name`, `user`, `status`, `format`, `size`, `date`) VALUES
	(9, 'Nigeria mBot Lessons.pdf', 0, 0, 'applicatio', '0.7', '0000-00-00 00:00:00'),
	(10, 'Nigeria mBot Lessons.pdf', 0, 0, '', '0.7', '0000-00-00 00:00:00'),
	(11, 'Nigeria mBot Lessons.pdf', 0, 0, 'applicatio', '0.7', '0000-00-00 00:00:00'),
	(12, 'Annex 30.pdf', 0, 0, 'applicatio', '0.1', '0000-00-00 00:00:00'),
	(13, 'Annex 30.pdf', 0, 0, 'applicatio', '0.1', '2020-03-21 17:02:44'),
	(14, '2015_Plunet_Translation-Management-System_brochure_EN_web.pdf', 27, 0, 'applicatio', '1.5', '2020-03-21 17:13:03'),
	(15, 'Ajax For Dummies.pdf', 27, 0, '', '0.0', '2020-03-21 18:42:29'),
	(16, 'Ajax For Dummies.pdf', 27, 2, '', '0.0', '2020-03-21 19:45:08'),
	(17, 'Ajax For Dummies.pdf', 27, 1, '', '0.0', '2020-03-21 19:35:31'),
	(18, 'Ajax For Dummies.pdf', 27, 1, '', '0.0', '2020-03-21 19:33:14');
/*!40000 ALTER TABLE `upload` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
