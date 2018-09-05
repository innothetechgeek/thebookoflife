-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.14 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for hackersjotter
CREATE DATABASE IF NOT EXISTS `hackersjotter` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `hackersjotter`;


-- Dumping structure for table hackersjotter.category
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `hck_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`cat_id`),
  KEY `hck_id` (`hck_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Dumping data for table hackersjotter.category: 11 rows
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`cat_id`, `cat_name`, `created_at`, `updated_at`, `hck_id`) VALUES
	(2, 'SRA recruitment Portal', '2018-08-26 12:40:25', '2018-08-26 12:40:25', 3),
	(3, 'Affiliate Landing Page Instegration', '2018-08-26 12:45:47', '2018-08-26 12:45:47', 3),
	(4, 'Payfast Integration', '2018-08-26 14:14:21', '2018-08-26 14:14:21', 4),
	(5, 'Payment Options', '2018-09-01 23:42:04', '2018-09-01 23:42:04', 4),
	(6, 'The Basics', '2018-09-02 19:01:27', '2018-09-02 19:01:27', 2),
	(7, 'Backend', '2018-09-02 19:01:58', '2018-09-02 19:01:58', 2),
	(8, 'Frontend', '2018-09-02 19:02:12', '2018-09-02 19:02:12', 2),
	(9, 'Security', '2018-09-02 19:02:49', '2018-09-02 19:02:49', 2),
	(10, 'Database', '2018-09-02 19:03:26', '2018-09-02 19:03:26', 2),
	(11, 'Views', '2018-09-02 19:45:23', '2018-09-02 19:45:23', 6),
	(16, 'Code Snippets', '2018-09-05 20:14:52', '2018-09-05 20:14:52', 2);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;


-- Dumping structure for table hackersjotter.hackerthon
CREATE TABLE IF NOT EXISTS `hackerthon` (
  `hck_id` int(11) NOT NULL AUTO_INCREMENT,
  `hck_name` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`hck_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table hackersjotter.hackerthon: 5 rows
/*!40000 ALTER TABLE `hackerthon` DISABLE KEYS */;
INSERT INTO `hackerthon` (`hck_id`, `hck_name`, `created_at`, `updated_at`) VALUES
	(2, 'LE Framework notes', '2018-08-26 00:18:33', '2018-08-26 00:18:33'),
	(3, 'LE Task Docs', '2018-08-26 00:19:22', '2018-08-26 00:19:22'),
	(4, 'Tapandsell Code Docs', '2018-08-26 00:19:50', '2018-08-26 00:19:50'),
	(5, 'General Notes', '2018-08-26 00:20:16', '2018-08-26 00:20:16'),
	(6, 'Laravel Notes', '2018-08-26 12:25:03', '2018-08-26 12:25:03');
/*!40000 ALTER TABLE `hackerthon` ENABLE KEYS */;


-- Dumping structure for table hackersjotter.post
CREATE TABLE IF NOT EXISTS `post` (
  `pst_id` int(11) NOT NULL AUTO_INCREMENT,
  `pst_title` varchar(200) DEFAULT NULL,
  `pst_content` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`pst_id`),
  KEY `fk_cat_id` (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Dumping data for table hackersjotter.post: 16 rows
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` (`pst_id`, `pst_title`, `pst_content`, `created_at`, `updated_at`, `cat_id`) VALUES
	(1, 'URL rewritting', '<p><span style="color: rgb(226, 80, 65);"><strong><span style="font-size: 30px;">Lorem ipsum dolor sit amet</span></strong></span><span style="font-size: 30px;">,</span></p><p style="margin-left: 20px;"><span style="color: rgb(209, 72, 65);">&nbsp;#consectetuer adipiscing elit.</span></p><p style="margin-left: 20px;"><span style="color: rgb(209, 72, 65);">#Curabitur vitae diam non enim&nbsp;</span></p><p style="margin-left: 20px;"><span style="color: rgb(209, 72, 65);">#vestibulum interdum.&nbsp;</span></p><p style="margin-left: 20px;"><span style="color: rgb(209, 72, 65);">#Proin mattis lacinia justo.</span></p><p>&nbsp;Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Duis viverra diam non justo. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Nulla turpis magna, cursus sit amet, suscipit a, interdum id, felis. Fusce suscipit libero eget elit. Donec vitae arcu. Quisque porta. Integer imperdiet lectus quis justo. Donec ipsum massa, ullamcorper in, auctor et, scelerisque sed, est. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor.</p><p><strong><span style="color: rgb(226, 80, 65);">Curabitur sagittis hendrerit ante.</span></strong></p><p>&nbsp;Sed convallis magna eu sem. Praesent in mauris eu tortor porttitor accumsan. Maecenas aliquet accumsan leo. Maecenas libero. Vestibulum erat nulla, ullamcorper nec, rutrum non, nonummy ac, erat. Maecenas lorem. Curabitur vitae diam non enim vestibulum interdum. Maecenas fermentum, sem in pharetra&nbsp;</p><p>pellentesque, velit turpis volutpat ante, in pharetra metus odio a lectus. Nunc dapibus tortor vel mi dapibus sollicitudin. Fusce suscipit libero eget elit. Integer rutrum, orci vestibulum ullamcorper ultricies, lacus quam ultricies odio, vitae placerat pede sem sit amet enim. Nulla turpis magna, cursus sit amet, suscipit a, interdum id, felis.</p><p><span style="color: rgb(226, 80, 65);"><strong>Fusce suscipit libero eget elit.</strong></span></p><p>&nbsp;Maecenas sollicitudin. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Morbi scelerisque luctus velit. Mauris elementum mauris vitae tortor. Mauris dolor felis, sagittis at, luctus sed, aliquam non, tellus. Integer malesuada. Phasellus et lorem id felis nonummy placerat. Morbi scelerisque luctus velit. Fusce suscipit libero eget elit. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Nulla turpis magna, cursus sit amet, suscipit a, interdum id, felis. Duis pulvinar.</p>', '2018-08-25 23:44:08', '2018-08-25 23:44:08', 2),
	(2, 'Payfast return page', 'blah blah', '2018-08-26 15:54:12', '2018-08-26 15:54:12', 4),
	(3, 'I am title', 'I am content', '2018-08-26 16:02:50', '2018-08-26 16:02:50', 4),
	(4, 'Pagination102', '<p><span style="color: rgb(226, 80, 65);"><strong><span style="font-size: 30px;">Lorem ipsum dolor sit amet</span></strong></span><span style="font-size: 30px;">,</span></p><p style="margin-left: 20px;"><span style="color: rgb(209, 72, 65);">&nbsp;#consectetuer adipiscing elit.</span></p><p style="margin-left: 20px;"><span style="color: rgb(209, 72, 65);">#Curabitur vitae diam non enim&nbsp;</span></p><p style="margin-left: 20px;"><span style="color: rgb(209, 72, 65);">#vestibulum interdum.&nbsp;</span></p><p style="margin-left: 20px;"><span style="color: rgb(209, 72, 65);">#Proin mattis lacinia justo.</span></p><p>&nbsp;Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Duis viverra diam non justo. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Nulla turpis magna, cursus sit amet, suscipit a, interdum id, felis. Fusce suscipit libero eget elit. Donec vitae arcu. Quisque porta. Integer imperdiet lectus quis justo. Donec ipsum massa, ullamcorper in, auctor et, scelerisque sed, est. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor.</p><p><strong><span style="color: rgb(226, 80, 65);">Curabitur sagittis hendrerit ante.</span></strong></p><p>&nbsp;Sed convallis magna eu sem. Praesent in mauris eu tortor porttitor accumsan. Maecenas aliquet accumsan leo. Maecenas libero. Vestibulum erat nulla, ullamcorper nec, rutrum non, nonummy ac, erat. Maecenas lorem. Curabitur vitae diam non enim vestibulum interdum. Maecenas fermentum, sem in pharetra&nbsp;</p><p>pellentesque, velit turpis volutpat ante, in pharetra metus odio a lectus. Nunc dapibus tortor vel mi dapibus sollicitudin. Fusce suscipit libero eget elit. Integer rutrum, orci vestibulum ullamcorper ultricies, lacus quam ultricies odio, vitae placerat pede sem sit amet enim. Nulla turpis magna, cursus sit amet, suscipit a, interdum id, felis.</p><p><span style="color: rgb(226, 80, 65);"><strong>Fusce suscipit libero eget elit.</strong></span></p><p>&nbsp;Maecenas sollicitudin. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Morbi scelerisque luctus velit. Mauris elementum mauris vitae tortor. Mauris dolor felis, sagittis at, luctus sed, aliquam non, tellus. Integer malesuada. Phasellus et lorem id felis nonummy placerat. Morbi scelerisque luctus velit. Fusce suscipit libero eget elit. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Nulla turpis magna, cursus sit amet, suscipit a, interdum id, felis. Duis pulvinar.</p>', '2018-08-26 16:17:47', '2018-08-26 16:17:47', 3),
	(5, 'Linking to payfast', 'blah blah', '2018-09-01 23:42:47', '2018-09-01 23:42:47', 5),
	(6, 'Registration Page', 'blah blah', '2018-09-02 00:50:05', '2018-09-02 00:50:05', 3),
	(7, 'NAYHSOSA registration page', '<p><span style="color: rgb(226, 80, 65);"><strong><span style="font-size: 30px;">Lorem ipsum dolor sit amet</span></strong></span><span style="font-size: 30px;">,</span></p><p style="margin-left: 20px;"><span style="color: rgb(209, 72, 65);">&nbsp;#consectetuer adipiscing elit.</span></p><p style="margin-left: 20px;"><span style="color: rgb(209, 72, 65);">#Curabitur vitae diam non enim&nbsp;</span></p><p style="margin-left: 20px;"><span style="color: rgb(209, 72, 65);">#vestibulum interdum.&nbsp;</span></p><p style="margin-left: 20px;"><span style="color: rgb(209, 72, 65);">#Proin mattis lacinia justo.</span></p><p>&nbsp;Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Duis viverra diam non justo. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Nulla turpis magna, cursus sit amet, suscipit a, interdum id, felis. Fusce suscipit libero eget elit. Donec vitae arcu. Quisque porta. Integer imperdiet lectus quis justo. Donec ipsum massa, ullamcorper in, auctor et, scelerisque sed, est. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor.</p><p><strong><span style="color: rgb(226, 80, 65);">Curabitur sagittis hendrerit ante.</span></strong></p><p>&nbsp;Sed convallis magna eu sem. Praesent in mauris eu tortor porttitor accumsan. Maecenas aliquet accumsan leo. Maecenas libero. Vestibulum erat nulla, ullamcorper nec, rutrum non, nonummy ac, erat. Maecenas lorem. Curabitur vitae diam non enim vestibulum interdum. Maecenas fermentum, sem in pharetra&nbsp;</p><p>pellentesque, velit turpis volutpat ante, in pharetra metus odio a lectus. Nunc dapibus tortor vel mi dapibus sollicitudin. Fusce suscipit libero eget elit. Integer rutrum, orci vestibulum ullamcorper ultricies, lacus quam ultricies odio, vitae placerat pede sem sit amet enim. Nulla turpis magna, cursus sit amet, suscipit a, interdum id, felis.</p><p><span style="color: rgb(226, 80, 65);"><strong>Fusce suscipit libero eget elit.</strong></span></p><p>&nbsp;Maecenas sollicitudin. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Morbi scelerisque luctus velit. Mauris elementum mauris vitae tortor. Mauris dolor felis, sagittis at, luctus sed, aliquam non, tellus. Integer malesuada. Phasellus et lorem id felis nonummy placerat. Morbi scelerisque luctus velit. Fusce suscipit libero eget elit. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Nulla turpis magna, cursus sit amet, suscipit a, interdum id, felis. Duis pulvinar.</p>', '2018-09-02 16:11:24', '2018-09-02 16:11:24', 3),
	(8, 'Routing', '<p><span style="color: rgb(226, 80, 65);"><strong><span style="font-size: 30px;">Lorem ipsum dolor</span></strong></span></p><p style="margin-left: 20px;">&nbsp;<span style="color: rgb(226, 80, 65);">#consectetuer adipiscing elit.&nbsp;</span></p><p style="margin-left: 20px;"><span style="color: rgb(226, 80, 65);">#Ut tempus purus at lorem.</span></p><p style="margin-left: 60px;"><span style="color: rgb(226, 80, 65);">#est et expedita</span></p><p style="margin-left: 60px;"><span style="color: rgb(226, 80, 65);">#est et expedita</span></p><p style="margin-left: 20px;"><span style="color: rgb(226, 80, 65);">&nbsp;#Et harum quidem rerum facilis</span></p><p style="margin-left: 20px;">&nbsp;#est et expedita distinctio.&nbsp;</p><p><span style="color: rgb(226, 80, 65); font-size: 24px;"><strong>Donec ipsum massa</strong></span></p><p>&nbsp;ullamcorper in, auctor et, scelerisque sed, est. Quisque porta. Fusce consectetuer risus a nunc. Duis condimentum augue id magna semper rutrum. Vivamus porttitor turpis ac leo. Cras elementum. Mauris dolor felis, sagittis at, luctus sed, aliquam non, tellus. Nullam dapibus fermentum ipsum. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Duis condimentum augue id magna semper rutrum. Duis bibendum, lectus ut viverra rhoncus, dolor nunc faucibus libero, eget facilisis enim ipsum id lacus. Curabitur sagittis hendrerit ante. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Aenean placerat.</p><p><span style="color: rgb(226, 80, 65);"><strong>Mauris elementum</strong></span></p><p><span style="color: rgb(226, 80, 65);"><strong>&nbsp;</strong></span>mauris vitae tortor. In sem justo, commodo ut, suscipit at, pharetra vitae, orci. Curabitur sagittis hendrerit ante. Praesent id justo in neque elementum ultrices. Nunc dapibus tortor vel mi dapibus sollicitudin. Proin in tellus sit amet nibh dignissim sagittis. Vivamus porttitor turpis ac leo. Proin mattis lacinia justo. Integer malesuada. Integer rutrum, orci vestibulum ullamcorper ultricies, lacus quam ultricies odio, vitae placerat pede sem sit amet enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. In convallis. Etiam ligula pede,&nbsp;</p><p><span style="color: rgb(226, 80, 65);"><strong><span style="font-size: 24px;">Fusce nibh. Morbi</span></strong></span>&nbsp;</p><p>imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Curabitur sagittis hendrerit ante. Nullam dapibus fermentum ipsum. Mauris elementum mauris vitae tortor. Suspendisse sagittis ultrices augue. Nulla est. Vestibulum fermentum tortor id mi. Nullam at arcu a est sollicitudin euismod. Nulla quis diam. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo&nbsp;</p><p><br></p>', '2018-09-02 19:10:53', '2018-09-02 19:10:53', 6),
	(9, 'Displaying  WYSIWYG  data in a view', '<p>use <code>{!!</code> <code>!!}</code>&nbsp; -- to be explained</p>', '2018-09-02 19:46:59', '2018-09-02 19:46:59', 11),
	(10, 'Requests', NULL, '2018-09-04 19:15:11', '2018-09-04 19:15:11', 6),
	(11, 'Responses', NULL, '2018-09-04 19:16:42', '2018-09-04 19:16:42', 6),
	(12, 'Validation', NULL, '2018-09-04 19:18:14', '2018-09-04 19:18:14', 6),
	(13, 'Error Handling', NULL, '2018-09-04 19:18:43', '2018-09-04 19:18:43', 6),
	(14, 'Logging', NULL, '2018-09-04 19:19:08', '2018-09-04 19:19:08', 6),
	(15, 'UI design', NULL, '2018-09-04 19:20:18', '2018-09-04 19:20:18', 7),
	(16, 'Sending requests via ajax', NULL, '2018-09-05 20:15:40', '2018-09-05 20:15:40', 16);
/*!40000 ALTER TABLE `post` ENABLE KEYS */;


-- Dumping structure for table hackersjotter.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `surname` text,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `remember_token` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table hackersjotter.users: 4 rows
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `created_at`, `updated_at`, `remember_token`) VALUES
	(1, NULL, NULL, NULL, NULL, '2018-09-04 20:07:14', '2018-09-04 20:07:14', NULL),
	(2, NULL, NULL, NULL, NULL, '2018-09-05 17:21:16', '2018-09-05 17:21:16', NULL),
	(3, NULL, NULL, NULL, NULL, '2018-09-05 17:47:26', '2018-09-05 17:47:26', NULL),
	(4, 'The crazy hacker', NULL, 'hackivist@gmail.com', '$2y$10$Ypf68gToorJbq/fW1/FJ7OvmSlivxTAcJacRae0f.y5PgXCSVCSPC', '2018-09-05 17:54:22', '2018-09-05 17:54:22', 'UixrpyWzIxtAeGaa4OLSoUyWkap3Tk1kTXwgZfhjhjtpxsO57s71l8EC6MvT');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
