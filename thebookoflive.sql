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
  `pst_slug` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`pst_id`),
  KEY `fk_cat_id` (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Dumping data for table hackersjotter.post: 16 rows
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` (`pst_id`, `pst_title`, `pst_content`, `created_at`, `updated_at`, `cat_id`, `pst_slug`) VALUES
	(1, 'URL rewritting', '', '2018-08-25 23:44:08', '2018-08-25 23:44:08', 2, 'url-rewritting'),
	(2, 'Payfast return page', 'blah blah', '2018-08-26 15:54:12', '2018-08-26 15:54:12', 4, 'payfast-return-page'),
	(3, 'I am title', 'I am content', '2018-08-26 16:02:50', '2018-08-26 16:02:50', 4, 'i-am-title'),
	(4, 'Pagination102', '', '2018-08-26 16:17:47', '2018-08-26 16:17:47', 3, 'pagination102'),
	(5, 'Linking to payfast', 'blah blah', '2018-09-01 23:42:47', '2018-09-01 23:42:47', 5, 'linking-to-payfast'),
	(6, 'Registration Page', 'blah blah', '2018-09-02 00:50:05', '2018-09-02 00:50:05', 3, 'registration-page'),
	(7, 'NAYHSOSA registration page sit', 'one two thre one two thre ', '2018-09-02 16:11:24', '2018-09-02 16:11:24', 3, 'nayhsosa-registration-page'),
	(8, 'Routing', '<p style="margin-left:20px;"><span style="color: rgb(87, 184, 70);"><strong><span style="font-size: 18px;">Bacon ipsum dolor<br>&nbsp; &nbsp;#amet kielbasa fatback<br><span style="background-color: initial;">&nbsp; &nbsp;#drumstick bresaola</span><br><span style="background-color: initial;">capicola chicken prosciutto</span><br><span style="background-color: initial;">&nbsp; &nbsp;#landjaeger</span><br></span>&nbsp;</strong>&nbsp;</span><span style="background-color: initial; color: rgb(87, 184, 70); font-size: 18px;"><strong>&nbsp; &nbsp; #brisket&nbsp;</strong></span><br><span style="background-color: initial; font-size: 1rem;">cow ball tip pork chop. Beef hamburger doner turkey. Pastrami bacon boudin filet mignon buffalo. Landjaeger kevin flank, sausage swine meatball prosciutto corned beef spare ribs bacon jerky shank chicken pork chop cupim. Pancetta beef ribs beef doner shankle.</span></p><pre><code><span style="font-size: 14px;">public function createPost(){\r\n    $title = Input::get(&#39;title&#39;);\r\n    $category = Input::get(&#39;category&#39;);\r\n    $content = Input::get(&#39;content&#39;);\r\n\r\n   // dd($title.&quot;-&quot;.$category.&quot;-&quot;.$content);\r\n\r\n    $post =  new Post();\r\n    $post-&gt;pst_title = $title;\r\n    $post-&gt;cat_id = $category;\r\n    $post-&gt;pst_content = $content;\r\n    $post-&gt;save();\r\n    return back();\r\n}\r\npublic function createHackerthon(){\r\n    $hackerthon_name = Input::get(&#39;hackerthon&#39;);\r\n\r\n    $hackerthon = new Hackerthon();\r\n    $hackerthon-&gt;hck_name = $hackerthon_name;\r\n    $hackerthon-&gt;save();\r\n    return back();\r\n}</span></code></pre><p style="margin-left:20px;"><br></p><p>Andouille brisket chuck kevin, kielbasa cupim doner ground round fatback. Beef ribs landjaeger meatball ribeye. Pancetta meatball tail cow sirloin corned beef spare ribs porchetta cupim. Venison fatback jowl ham hock.</p>', '2018-09-02 19:10:53', '2018-09-02 19:10:53', 6, 'routing'),
	(9, 'Displaying  WYSIWYG  data in a view', '', '2018-09-02 19:46:59', '2018-09-02 19:46:59', 11, 'displaying-wysiwyg-data-in-a-view'),
	(10, 'Requests', NULL, '2018-09-04 19:15:11', '2018-09-04 19:15:11', 6, 'requests'),
	(11, 'Responses', NULL, '2018-09-04 19:16:42', '2018-09-04 19:16:42', 6, 'responses'),
	(12, 'Validation', NULL, '2018-09-04 19:18:14', '2018-09-04 19:18:14', 6, 'validation'),
	(13, 'Error Handling', NULL, '2018-09-04 19:18:43', '2018-09-04 19:18:43', 6, 'error-handling'),
	(14, 'Logging', NULL, '2018-09-04 19:19:08', '2018-09-04 19:19:08', 6, 'logging'),
	(15, 'UI design', NULL, '2018-09-04 19:20:18', '2018-09-04 19:20:18', 7, 'ui-design'),
	(16, 'Sending requests via ajax', NULL, '2018-09-05 20:15:40', '2018-09-05 20:15:40', 16, 'sending-requests-via-ajax');
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
  `is_admin` int(11) DEFAULT NULL,
  `remember_token` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table hackersjotter.users: 5 rows
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `created_at`, `updated_at`, `is_admin`, `remember_token`) VALUES
	(1, NULL, NULL, NULL, NULL, '2018-09-04 20:07:14', '2018-09-04 20:07:14', NULL, NULL),
	(2, NULL, NULL, NULL, NULL, '2018-09-05 17:21:16', '2018-09-05 17:21:16', NULL, NULL),
	(3, NULL, NULL, NULL, NULL, '2018-09-05 17:47:26', '2018-09-05 17:47:26', NULL, NULL),
	(4, 'The crazy hacker', NULL, 'hackivist@gmail.com', '$2y$10$Ypf68gToorJbq/fW1/FJ7OvmSlivxTAcJacRae0f.y5PgXCSVCSPC', '2018-09-05 17:54:22', '2018-09-05 17:54:22', NULL, 'hWoXfrNQqCLwkIfPaQFwM0sSs6ubWdDgjdKLowdkez11RgfD6tkaBFlHWKBg'),
	(5, 'Super Admin', NULL, 'innothetechgeek@gmail.com', '$2y$10$ofUWXJqoCMY5NCRMsrvSHeMLeXGI/EYewzFzKK0TR6PXTRgESPvX2', '2018-09-09 00:07:04', '2018-09-09 00:07:04', 1, 'dOMLJd6bBEfQvju6nUhn9NgNhlhOyKFPL4SKrZv6i0dkOgtMWtXpeiej0iqe');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
