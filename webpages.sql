-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.10-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table babygames.admins
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table babygames.admins: ~2 rows (approximately)
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` (`id`, `username`, `password`) VALUES
	(1, 'rami', 'rami'),
	(2, 'test', 'test');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;


-- Dumping structure for table babygames.pages
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `pbody` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table babygames.pages: ~2 rows (approximately)
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` (`id`, `title`, `pbody`) VALUES
	(1, 'Artisanal Narwahls', '<p>Here&#39;s how it is: Earth got used up, so we terraformed a whole new galaxy of Earths, some rich and flush with the new technologies, some not so much. Central Planets, them was formed the Alliance, waged war to bring everyone under their rule; a few idiots tried to fight it, among them myself. I&#39;m Malcolm Reynolds, captain of Serenity. Got a good crew: fighters, pilot, mechanic. We even picked up a preacher, and a bona fide companion. There&#39;s a doctor, too, took his genius sister out of some Alliance camp, so they&#39;re keeping a low profile. You got a job, we can do it, don&#39;t much care what it is.</p>\n\n<p>I am Duncan Macleod, born 400 years ago in the Highlands of Scotland. I am Immortal, and I am not alone. For centuries, we have waited for the time of the Gathering when the stroke of a sword and the fall of a head will release the power of the Quickening. In the end, there can be only one.</p>\n\n<p>From this distant vantage point, the Earth might not seem of any particular interest. But for us, it&#39;s different. Consider again that dot. That&#39;s here. That&#39;s home. That&#39;s us. On it everyone you love, everyone you know, everyone you ever heard of, every human being who ever was, lived out their lives. The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every &quot;superstar,&quot; every &quot;supreme leader,&quot; every saint and sinner in the history of our species lived there&nbsp;&ndash; on a mote of dust suspended in a sunbeam.</p>\n\n<p>Space, the final frontier. These are the voyages of the starship Enterprise. Its five year mission: to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before!</p>'),
	(2, 'Portland Leggings', '<p>From this distant vantage point, the Earth might not seem of any particular interest. But for us, it&#39;s different. Consider again that dot. That&#39;s here. That&#39;s home. That&#39;s us. On it everyone you love, everyone you know, everyone you ever heard of, every human being who ever was, lived out their lives. The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every &quot;superstar,&quot; every &quot;supreme leader,&quot; every saint and sinner in the history of our species lived there&nbsp;&ndash; on a mote of dust suspended in a sunbeam.</p>\n\n<p>Space, the final frontier. These are the voyages of the starship Enterprise. Its five year mission: to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before!</p>\n\n<p>Here&#39;s how it is: Earth got used up, so we terraformed a whole new galaxy of Earths, some rich and flush with the new technologies, some not so much. Central Planets, them was formed the Alliance, waged war to bring everyone under their rule; a few idiots tried to fight it, among them myself. I&#39;m Malcolm Reynolds, captain of Serenity. Got a good crew: fighters, pilot, mechanic. We even picked up a preacher, and a bona fide companion. There&#39;s a doctor, too, took his genius sister out of some Alliance camp, so they&#39;re keeping a low profile. You got a job, we can do it, don&#39;t much care what it is.</p>\n\n<p>Space, the final frontier. These are the voyages of the starship Enterprise. Its five year mission: to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before!</p>');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;


-- Dumping structure for table babygames.plans
CREATE TABLE IF NOT EXISTS `plans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `one_month_price` int(11) NOT NULL,
  `two_month_price` int(11) NOT NULL,
  `three_month_price` int(11) NOT NULL,
  `subsripe_cost` int(11) NOT NULL,
  `nu_of_toys_monthly` int(11) NOT NULL,
  `nu_of_weeks` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf16;

-- Dumping data for table babygames.plans: ~3 rows (approximately)
/*!40000 ALTER TABLE `plans` DISABLE KEYS */;
INSERT INTO `plans` (`id`, `name`, `one_month_price`, `two_month_price`, `three_month_price`, `subsripe_cost`, `nu_of_toys_monthly`, `nu_of_weeks`) VALUES
	(1, '2 Toys Per Month', 24, 22, 20, 50, 2, 4),
	(2, '5 Toys Per Month', 39, 37, 35, 100, 5, 4),
	(3, '5 Toyes Per two Weeks', 75, 73, 71, 150, 5, 2);
/*!40000 ALTER TABLE `plans` ENABLE KEYS */;


-- Dumping structure for table babygames.toys
CREATE TABLE IF NOT EXISTS `toys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gender_type` int(11) NOT NULL DEFAULT '0',
  `image` varchar(64) NOT NULL DEFAULT '0',
  `age_type` int(11) NOT NULL DEFAULT '0',
  `nu_of_items` int(11) NOT NULL,
  `nu_of_out_item` int(11) NOT NULL,
  `product_name` varchar(126) NOT NULL,
  `price` int(11) NOT NULL,
  `details` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf16;

-- Dumping data for table babygames.toys: ~1 rows (approximately)
/*!40000 ALTER TABLE `toys` DISABLE KEYS */;
INSERT INTO `toys` (`id`, `gender_type`, `image`, `age_type`, `nu_of_items`, `nu_of_out_item`, `product_name`, `price`, `details`) VALUES
	(1, 2, '1d3qqt783vy88c4.jpg', 7, 5, 0, 'Baby Doll', 12, '<p>Nice Game</p>');
/*!40000 ALTER TABLE `toys` ENABLE KEYS */;


-- Dumping structure for table babygames.toys_cats
CREATE TABLE IF NOT EXISTS `toys_cats` (
  `toyid` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  PRIMARY KEY (`toyid`,`catid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table babygames.toys_cats: ~2 rows (approximately)
/*!40000 ALTER TABLE `toys_cats` DISABLE KEYS */;
INSERT INTO `toys_cats` (`toyid`, `catid`) VALUES
	(1, 10),
	(1, 11);
/*!40000 ALTER TABLE `toys_cats` ENABLE KEYS */;


-- Dumping structure for table babygames.toys_types
CREATE TABLE IF NOT EXISTS `toys_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filter_by` enum('Gender','Age','cat') NOT NULL,
  `title` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- Dumping data for table babygames.toys_types: ~8 rows (approximately)
/*!40000 ALTER TABLE `toys_types` DISABLE KEYS */;
INSERT INTO `toys_types` (`id`, `filter_by`, `title`) VALUES
	(1, 'Gender', 'Male'),
	(2, 'Gender', 'Female'),
	(7, 'Age', '1-3'),
	(8, 'Age', '3-6'),
	(9, 'cat', 'Lego'),
	(10, 'cat', 'Building Block'),
	(11, 'cat', 'Books'),
	(12, 'cat', 'Art & Craft'),
	(13, 'Gender', 'Unisex');
/*!40000 ALTER TABLE `toys_types` ENABLE KEYS */;


-- Dumping structure for table babygames.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `register_date` datetime NOT NULL,
  `last_login_date` datetime NOT NULL,
  `email` varchar(64) NOT NULL,
  `mobile` varchar(64) NOT NULL,
  `last_login_ip` varchar(32) NOT NULL,
  `subscribe_plan` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- Dumping data for table babygames.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
