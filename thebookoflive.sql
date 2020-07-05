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


-- Dumping structure for table hackersjotter.account
CREATE TABLE IF NOT EXISTS `account` (
  `acc_id` int(11) NOT NULL AUTO_INCREMENT,
  `acc_number` varchar(256) NOT NULL DEFAULT '',
  `acc_holder` varchar(256) NOT NULL DEFAULT '',
  `acc_ref_bank` int(11) DEFAULT NULL,
  `acc_ref_branch` int(11) DEFAULT NULL,
  `acc_derbit_order_date` varchar(256) NOT NULL DEFAULT '',
  `acc_ref_account_type` int(11) DEFAULT NULL,
  PRIMARY KEY (`acc_id`),
  KEY `ix_acc_ref_bank` (`acc_ref_bank`),
  KEY `ix_acc_ref_branch` (`acc_ref_branch`),
  KEY `ix_acc_ref_account_type` (`acc_ref_account_type`),
  CONSTRAINT `account_ibfk_1` FOREIGN KEY (`acc_ref_bank`) REFERENCES `bank` (`bnk_id`),
  CONSTRAINT `account_ibfk_2` FOREIGN KEY (`acc_ref_branch`) REFERENCES `branch_code` (`bra_id`),
  CONSTRAINT `account_ibfk_3` FOREIGN KEY (`acc_ref_account_type`) REFERENCES `account_type` (`act_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table hackersjotter.account: ~0 rows (approximately)
/*!40000 ALTER TABLE `account` DISABLE KEYS */;
/*!40000 ALTER TABLE `account` ENABLE KEYS */;


-- Dumping structure for table hackersjotter.account_type
CREATE TABLE IF NOT EXISTS `account_type` (
  `act_id` int(11) NOT NULL AUTO_INCREMENT,
  `act_type` varchar(256) NOT NULL DEFAULT '',
  PRIMARY KEY (`act_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table hackersjotter.account_type: ~0 rows (approximately)
/*!40000 ALTER TABLE `account_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `account_type` ENABLE KEYS */;


-- Dumping structure for table hackersjotter.bank
CREATE TABLE IF NOT EXISTS `bank` (
  `bnk_id` int(11) NOT NULL AUTO_INCREMENT,
  `bnk_name` varchar(256) NOT NULL DEFAULT '',
  PRIMARY KEY (`bnk_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table hackersjotter.bank: ~0 rows (approximately)
/*!40000 ALTER TABLE `bank` DISABLE KEYS */;
/*!40000 ALTER TABLE `bank` ENABLE KEYS */;


-- Dumping structure for table hackersjotter.branch_code
CREATE TABLE IF NOT EXISTS `branch_code` (
  `bra_id` int(11) NOT NULL AUTO_INCREMENT,
  `bra_code` varchar(256) NOT NULL DEFAULT '',
  `bra_ref_bank` int(11) DEFAULT NULL,
  PRIMARY KEY (`bra_id`),
  KEY `ix_bra_ref_bank` (`bra_ref_bank`),
  CONSTRAINT `branch_code_ibfk_1` FOREIGN KEY (`bra_ref_bank`) REFERENCES `bank` (`bnk_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table hackersjotter.branch_code: ~0 rows (approximately)
/*!40000 ALTER TABLE `branch_code` DISABLE KEYS */;
/*!40000 ALTER TABLE `branch_code` ENABLE KEYS */;


-- Dumping structure for table hackersjotter.category
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `hck_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`cat_id`),
  KEY `hck_id` (`hck_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- Dumping data for table hackersjotter.category: 14 rows
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`cat_id`, `cat_name`, `created_at`, `updated_at`, `hck_id`) VALUES
	(21, 'Introduction', '2020-07-05 19:42:23', '2020-07-05 19:42:23', 2),
	(6, 'The Basics', '2018-09-02 19:01:27', '2018-09-02 19:01:27', 2),
	(7, 'Backend', '2018-09-02 19:01:58', '2018-09-02 19:01:58', 2),
	(8, 'Frontend', '2018-09-02 19:02:12', '2018-09-02 19:02:12', 2),
	(9, 'Security', '2018-09-02 19:02:49', '2018-09-02 19:02:49', 2),
	(10, 'Database', '2018-09-02 19:03:26', '2018-09-02 19:03:26', 2),
	(11, 'Views', '2018-09-02 19:45:23', '2018-09-02 19:45:23', 6),
	(18, 'Preface', '2019-04-19 23:03:14', '2019-04-19 23:03:14', 2),
	(19, 'Preface', '2019-04-19 23:03:37', '2019-04-19 23:03:37', 8);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;


-- Dumping structure for table hackersjotter.country
CREATE TABLE IF NOT EXISTS `country` (
  `con_id` int(11) NOT NULL AUTO_INCREMENT,
  `con_name` varchar(256) NOT NULL DEFAULT '',
  `con_code` varchar(256) NOT NULL DEFAULT '',
  `con_order` int(11) NOT NULL DEFAULT '0',
  `con_nationality` varchar(200) DEFAULT '',
  PRIMARY KEY (`con_id`)
) ENGINE=InnoDB AUTO_INCREMENT=295 DEFAULT CHARSET=latin1;

-- Dumping data for table hackersjotter.country: ~193 rows (approximately)
/*!40000 ALTER TABLE `country` DISABLE KEYS */;
INSERT INTO `country` (`con_id`, `con_name`, `con_code`, `con_order`, `con_nationality`) VALUES
	(1, 'South Africa', 'za', 1, 'South African'),
	(2, 'Germany', 'DE', 0, 'German'),
	(3, 'Canada', 'CA', 0, 'Canadian'),
	(4, 'Afghanistan', 'AF', 0, 'Afghan'),
	(7, 'Albania', 'AL', 0, 'Albanian'),
	(8, 'Algeria', 'DZ', 0, 'Algerian'),
	(10, 'Andorra', 'AD', 0, 'Andorran'),
	(11, 'Angola', 'AO', 0, 'Angolan'),
	(13, 'Antigua and Barbuda', 'AG', 0, 'Antiguan and Barbudan'),
	(14, 'Argentina', 'AR', 0, 'Argentine'),
	(15, 'Armenia', 'AM', 0, 'Armenian'),
	(18, 'Australia', 'AU', 0, 'Australian'),
	(19, 'Austria', 'AT', 0, 'Austrian'),
	(20, 'Azerbaijan', 'AZ', 0, 'Azerbaijani'),
	(21, 'Bahamas', 'BS', 0, 'Bahamian'),
	(22, 'Bahrain', 'BH', 0, 'Bahraini'),
	(23, 'Bangladesh', 'BD', 0, 'Bangladeshi'),
	(24, 'Barbados', 'BB', 0, 'Barbadian'),
	(25, 'Belarus', 'BY', 0, 'Belarusian'),
	(26, 'Belgium', 'BE', 0, 'Belgian'),
	(27, 'Belize', 'BZ', 0, 'Belizean'),
	(28, 'Benin', 'BJ', 0, 'Beninese'),
	(30, 'Bhutan', 'BT', 0, 'Bhutanese'),
	(31, 'Bolivia', 'BO', 0, 'Bolivian'),
	(32, 'Bosnia and Herzegovina', 'BA', 0, 'Bosnian and Herzegovinian'),
	(33, 'Botswana', 'BW', 0, 'Batswana'),
	(34, 'Brazil', 'BR', 0, 'Brazilian'),
	(35, 'Brunei', '', 0, 'Bruneian'),
	(36, 'Bulgaria', 'BG', 0, 'Bulgarian'),
	(37, 'Burkina Faso', 'BF', 0, 'Burkinab&eacute;'),
	(39, 'Burundi', 'BI', 0, 'Burundian'),
	(40, 'Cambodia', 'KH', 0, 'Cambodian'),
	(41, 'Cameroon', 'CM', 0, 'Cameroonian'),
	(46, 'Chad', 'TD', 0, 'Chadian'),
	(47, 'Chile', 'CL', 0, 'Chileans'),
	(48, 'China', 'CN', 0, 'Chinese'),
	(51, 'Colombia', 'CO', 0, 'Colombian'),
	(52, 'Comoros', 'KM', 0, 'Comorian'),
	(55, 'Costa Rica', 'CR', 0, 'Costa Rican'),
	(57, 'Croatia', 'HR', 0, 'Croatian'),
	(58, 'Cuba', 'CU', 0, 'Cuban'),
	(59, 'Cyprus', 'CY', 0, 'Cypriot'),
	(60, 'Czech Republic', 'CZ', 0, 'Czech'),
	(61, 'Denmark', 'DK', 0, 'Danish'),
	(62, 'Djibouti', 'DJ', 0, 'Djiboutian'),
	(63, 'Dominica', 'DM', 0, 'Dominicans&nbsp;(Commonwealth)'),
	(64, 'Dominican Republic', 'DO', 0, 'Dominicans&nbsp;(Republic)'),
	(66, 'Ecuador', 'EC', 0, 'Ecuadorian'),
	(67, 'Egypt', 'EG', 0, 'Egyptian'),
	(68, 'El Salvador', 'SV', 0, 'Salvadoran'),
	(69, 'Equatorial Guinea', 'GQ', 0, 'Equatoguinean'),
	(70, 'Eritrea', 'ER', 0, 'Eritrean'),
	(71, 'Estonia', 'EE', 0, 'Estonian'),
	(72, 'Ethiopia', 'ET', 0, 'Ethiopian'),
	(75, 'Fiji', 'FJ', 0, 'Fijian'),
	(76, 'Finland', 'FI', 0, 'Finn'),
	(77, 'France', 'FR', 0, 'French citizens'),
	(79, 'Gabon', 'GA', 0, 'Gabonese'),
	(80, 'Gambia', 'GM', 0, 'Gambian'),
	(81, 'Georgia', 'GE', 0, 'Georgian'),
	(83, 'Ghana', 'GH', 0, 'Ghanaian'),
	(85, 'Greece', 'GR', 0, 'Greek'),
	(87, 'Grenada', 'GD', 0, 'Grenadian'),
	(89, 'Guatemala', 'GT', 0, 'Guatemalan'),
	(91, 'Guinea', 'GN', 0, 'Guinean'),
	(92, 'Guinea-Bissau', 'GW', 0, 'Guinea-Bissau national'),
	(93, 'Guyana', 'GY', 0, 'Guyanese'),
	(94, 'Haiti', 'HT', 0, 'Haitian'),
	(95, 'Honduras', 'HN', 0, 'Honduran'),
	(97, 'Hungary', 'HU', 0, 'Hungarian'),
	(98, 'Iceland', 'IS', 0, 'Icelander'),
	(99, 'India', 'IN', 0, 'Indian'),
	(100, 'Indonesia', 'ID', 0, 'Indonesian'),
	(101, 'Iran', '', 0, 'Iranian'),
	(102, 'Iraq', 'IQ', 0, 'Iraqi'),
	(103, 'Ireland', 'IE', 0, 'Irish'),
	(105, 'Israel', 'IL', 0, 'Israeli'),
	(106, 'Italy', 'IT', 0, 'Italian'),
	(108, 'Jamaica', 'JM', 0, 'Jamaican'),
	(109, 'Japan', 'JP', 0, 'Japanese'),
	(111, 'Jordan', 'JO', 0, 'Jordanian'),
	(112, 'Kazakhstan', 'KZ', 0, 'Kazakh'),
	(113, 'Kenya', 'KE', 0, 'Kenyan'),
	(114, 'Kiribati', 'KI', 0, 'I-Kiribati'),
	(116, 'Kosovo', '', 0, 'Kosovar'),
	(117, 'Kuwait', 'KW', 0, 'Kuwaiti'),
	(118, 'Kyrgyzstan', 'KG', 0, 'Kyrgyz'),
	(119, 'Laos', '', 0, 'Lao'),
	(120, 'Latvia', 'LV', 0, 'Latvians'),
	(121, 'Lebanon', 'LB', 0, 'Lebanese'),
	(122, 'Lesotho', 'LS', 0, 'Masotho'),
	(123, 'Liberia', 'LR', 0, 'Liberian'),
	(124, 'Libya', '', 0, 'Libyan'),
	(125, 'Liechtenstein', 'LI', 0, 'Liechtensteiner'),
	(126, 'Lithuania', 'LT', 0, 'Lithuanian'),
	(127, 'Luxembourg', 'LU', 0, 'Luxembourger'),
	(129, 'Macedonia', '', 0, 'Macedonian'),
	(130, 'Madagascar', 'MG', 0, 'Malagasy'),
	(131, 'Malawi', 'MW', 0, 'Malawian'),
	(132, 'Malaysia', 'MY', 0, 'Malaysian'),
	(133, 'Maldives', 'MV', 0, 'Maldivian'),
	(134, 'Mali', 'ML', 0, 'Malian'),
	(135, 'Malta', 'MT', 0, 'Maltese'),
	(136, 'Marshall Islands', 'MH', 0, 'Marshallese'),
	(137, 'Mauritania', 'MR', 0, 'Mauritanian'),
	(138, 'Mauritius', 'MU', 0, 'Mauritian'),
	(140, 'Mexico', 'MX', 0, 'Mexican'),
	(141, 'Micronesia', '', 0, 'Micronesian'),
	(142, 'Moldova', '', 0, 'Moldovan'),
	(143, 'Monaco', 'MC', 0, 'Mon&eacute;gasque'),
	(145, 'Montenegro', 'ME', 0, 'Montenegrin'),
	(147, 'Morocco', 'MA', 0, 'Moroccan'),
	(148, 'Mozambique', 'MZ', 0, 'Mozambican'),
	(150, 'Namibia', 'NA', 0, 'Namibian'),
	(151, 'Nauru', 'NR', 0, 'Nauran'),
	(152, 'Nepal', 'NP', 0, 'Nepalese'),
	(153, 'Netherlands', 'NL', 0, 'Dutch'),
	(156, 'New Zealand', 'NZ', 0, 'New Zealander'),
	(157, 'Nicaragua', 'NI', 0, 'Nicaraguan'),
	(158, 'Niger', 'NE', 0, 'Nigerien'),
	(159, 'Nigeria', 'NG', 0, 'Nigerian'),
	(164, 'Norway', 'NO', 0, 'Norwegian'),
	(165, 'Oman', 'OM', 0, 'Omani'),
	(166, 'Pakistan', 'PK', 0, 'Pakistani'),
	(167, 'Palau', 'PW', 0, 'Palauan'),
	(168, 'Palestine', '', 0, 'Palestinian'),
	(169, 'Panama', 'PA', 0, 'Panamanian'),
	(170, 'Papua New Guinea', 'PG', 0, 'Papua New Guinean'),
	(171, 'Paraguay', 'PY', 0, 'Paraguayan'),
	(172, 'Peru', 'PE', 0, 'Peruvian'),
	(175, 'Poland', 'PL', 0, 'Polish'),
	(176, 'Portugal', 'PT', 0, 'Portuguese'),
	(178, 'Qatar', 'QA', 0, 'Qatari'),
	(179, 'Romania', 'RO', 0, 'Romanian'),
	(180, 'Russia', '', 0, 'Russian'),
	(181, 'Rwanda', 'RW', 0, 'Rwandan'),
	(184, 'Saint Kitts and Nevis', 'KN', 0, 'Saint Kitts and Nevis'),
	(185, 'Saint Lucia', 'LC', 0, 'Saint Lucian'),
	(188, 'Saint Vincent and the Grenadines', 'VC', 0, 'Vincentian'),
	(189, 'Samoa', 'WS', 0, 'Samoan'),
	(190, 'San Marino', 'SM', 0, 'Sammarinese'),
	(191, 'Sao Tome and Principe', 'ST', 0, 'S&atilde;o Tom&eacute; and Pr&iacute;ncipe'),
	(192, 'Saudi Arabia', 'SA', 0, 'Saudi'),
	(193, 'Senegal', 'SN', 0, 'Senegalese'),
	(194, 'Serbia', 'RS', 0, 'Serb'),
	(195, 'Seychelles', 'SC', 0, 'Seychelloi'),
	(196, 'Sierra Leone', 'SL', 0, 'Sierra Leonean'),
	(197, 'Singapore', 'SG', 0, 'Singaporean'),
	(198, 'Slovakia', 'SK', 0, 'Slovak'),
	(199, 'Slovenia', 'SI', 0, 'Slovene'),
	(200, 'Solomon Islands', 'SB', 0, 'Solomon Islander'),
	(201, 'Somalia', 'SO', 0, 'Somali'),
	(205, 'Spain', 'ES', 0, 'Spaniard'),
	(206, 'Sri Lanka', 'LK', 0, 'Sri Lankan'),
	(207, 'Sudan', 'SD', 0, 'Sudanese'),
	(208, 'Suriname', 'SR', 0, 'Surinamese'),
	(210, 'Swaziland', 'SZ', 0, 'Swazi'),
	(211, 'Sweden', 'SE', 0, 'Swede'),
	(212, 'Switzerland', 'CH', 0, 'Swiss'),
	(213, 'Syria', '', 0, 'Syrian'),
	(214, 'Taiwan', '', 0, 'Taiwanese'),
	(215, 'Tajikistan', 'TJ', 0, 'Tajik'),
	(216, 'Tanzania', 'TZ', 0, 'Tanzanian'),
	(217, 'Thailand', 'TH', 0, 'Thai'),
	(218, 'Togo', 'TG', 0, 'Togolese'),
	(220, 'Tonga', 'TO', 0, 'Tongan'),
	(222, 'Trinidad and Tobago', 'TT', 0, 'Tobagonian'),
	(224, 'Tunisia', 'TN', 0, 'Tunisian'),
	(225, 'Turkey', 'TR', 0, 'Turk'),
	(226, 'Turkmenistan', 'TM', 0, 'Turkmen'),
	(228, 'Tuvalu', 'TV', 0, 'Tuvaluan'),
	(229, 'Uganda', 'UG', 0, 'Ugandan'),
	(230, 'Ukraine', 'UA', 0, 'Ukrainian'),
	(234, 'Uruguay', 'UY', 0, 'Uruguayan'),
	(235, 'Uzbekistan', 'UZ', 0, 'Uzbek'),
	(236, 'Vanuatu', 'VU', 0, 'Vanuatuan'),
	(238, 'Venezuela', 'VE', 0, 'Venezuelan'),
	(239, 'Vietnam', '', 0, 'Vietnamese'),
	(244, 'Yemen', 'YE', 0, 'Yemeni'),
	(245, 'Zambia', 'ZM', 0, 'Zambian'),
	(246, 'Zimbabwe', 'ZW', 0, 'Zimbabwean'),
	(259, 'Cote D\'ivoire', 'CI', 0, 'Ivoirian&nbsp;'),
	(271, 'Mongolia', 'MN', 0, 'Mongolian'),
	(272, 'Myanmar', 'MM', 0, 'Myanmarese'),
	(281, 'Timor-leste', 'TL', 0, 'Timorese'),
	(287, 'United States of America', '', 0, 'American'),
	(288, 'Central African Republic (CAR)', '', 0, 'Central African'),
	(289, 'Democratic Republic of the&nbsp;Congo', '', 0, 'Congolese'),
	(290, 'North Korea', '', 0, 'Korean'),
	(291, 'South Korea', '', 0, 'Korean'),
	(292, 'South Sudan', '', 0, 'Sudanese'),
	(293, 'United Arab Emirates (UAE)', '', 0, 'Emiratis'),
	(294, 'United Kingdom (UK)', '', 0, 'British');
/*!40000 ALTER TABLE `country` ENABLE KEYS */;


-- Dumping structure for table hackersjotter.hackerthon
CREATE TABLE IF NOT EXISTS `hackerthon` (
  `hck_id` int(11) NOT NULL AUTO_INCREMENT,
  `hck_name` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`hck_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table hackersjotter.hackerthon: 3 rows
/*!40000 ALTER TABLE `hackerthon` DISABLE KEYS */;
INSERT INTO `hackerthon` (`hck_id`, `hck_name`, `created_at`, `updated_at`) VALUES
	(2, 'Titanium Documetation', '2018-08-26 00:18:33', '2018-08-26 00:18:33'),
	(4, 'Tapandsell Code Docs', '2018-08-26 00:19:50', '2018-08-26 00:19:50'),
	(5, 'General Notes', '2018-08-26 00:20:16', '2018-08-26 00:20:16');
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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table hackersjotter.post: 0 rows
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` (`pst_id`, `pst_title`, `pst_content`, `created_at`, `updated_at`, `cat_id`, `pst_slug`) VALUES
	(1, 'Introduction', '<p>Titanium is my php MVC framework that I decided to build to level up my OOP skills. <br>I decided to write this documentation to make sure I understand what I&#39;m doing.<br>I&#39;m amending it when I&#39;m bored or don&#39;t have much to do. <br><br>If you by any chance find this &nbsp;documentation...thanks for readin in advance... haha jk.. I know programmers are lazy to read, they watch tutorials..</p><p>I&#39;m gonna make a video version of this documentation..The goal is to convert this basic framework into something powerful like laravel. Once it gets to that level, I&#39;ll create a course on &#39;How to build a powerful MVC php framework&#39; &nbsp;sell it on youdemy..wish me luck ! :)<br><br><img src="http://127.0.0.1:8000/assets/images/friola_images/titanium_code.PNG" style="width: 829px;" class="fr-fic fr-dib"></p>', '2020-07-05 19:44:00', '2020-07-05 19:44:00', 21, 'preface'),
	(2, 'Routing', '<p><span style="font-family: Impact, Charcoal, sans-serif; color: rgb(26, 188, 156);">URLS</span><span style="color: rgb(26, 188, 156);"><br><span style="font-family: Impact,Charcoal,sans-serif;">INDEX.PHP</span><br><span style="font-family: Impact,Charcoal,sans-serif;">BOOTSTRAP.PHP</span><br></span><span style="font-family: Impact, Charcoal, sans-serif; color: rgb(26, 188, 156);">THE ROUTER CLASS AND THE ROUTE METHOD.</span><br><br><span style="font-family: Impact, Charcoal, sans-serif; color: rgb(0, 0, 0);"><span style="font-family: Impact, Charcoal, sans-serif;">URLS</span></span><br><span style="font-family: Arial,Helvetica,sans-serif;">In a php application that is not powered by a framework..all urls have a .php extenstion. And you run your scripts by typing the script name in the url bar, e.g domain.co.za/add_user.php.</span></p><p><span style="font-family: Arial,Helvetica,sans-serif;">That is not how things work in an mvc application. The .php extension is removed from the urls. And the uri us mapped to a revev<span style="color: rgb(0, 0, 0);">ant route.&nbsp;</span></span></p><p>That is not how things work in an mvc application. The .php extenstion is removed from the urls, and the uri us mapped to a revevant route, and the route is mapped to a relevent class and method.</p><pre><img src="http://127.0.0.1:8000/assets/images/friola_images/1593982324236.png" style="width: 530px;" class="fr-fic fr-dib"></pre><p>All routes are defined in the routes.php file.<br><br><br><br><br></p>', '2020-07-05 20:55:58', '2020-07-05 20:55:58', 6, 'routing');
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
	(4, 'The crazy hacker', NULL, 'hackivist@gmail.com', '$2y$10$EeIIdr2carEui/QJ7LNXTOc0ixTjjSN9mcVPsVVSOvS9WWS1paKRG', '2018-09-05 17:54:22', '2018-09-05 17:54:22', NULL, 'u8YWJQ7jyQC8JZ4OcwFRvVid5HdDvlSjdk7j9gFN3XsnJSWHLNuqYj2zPxAb'),
	(5, 'Super Admin', NULL, 'innothetechgeek@gmail.com', '$2y$10$EeIIdr2carEui/QJ7LNXTOc0ixTjjSN9mcVPsVVSOvS9WWS1paKRG', '2018-09-09 00:07:04', '2018-09-09 00:07:04', 1, 'B0YdsQjq9COQagKbYNPdirdH87SA44JgQ4gFOIFcp68IKaSYcdmuMl8SbVSA');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
