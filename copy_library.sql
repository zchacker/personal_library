-- phpMyAdmin SQL Dump
-- version 4.6.6deb4+deb9u2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 24, 2021 at 02:45 PM
-- Server version: 5.7.32
-- PHP Version: 7.0.33-0+deb9u10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `subject` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `auther_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `nickname` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `death_hijri` int(4) NOT NULL,
  `death_gregorian` int(4) NOT NULL,
  `folders` int(11) NOT NULL,
  `pages` int(11) NOT NULL,
  `publisher_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `publisher_country` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `publisher_address` varchar(700) COLLATE utf8_unicode_ci NOT NULL,
  `edition` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `edition_date` date NOT NULL,
  `notes` varchar(750) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manuscripts`
--

CREATE TABLE `manuscripts` (
  `id` int(11) NOT NULL,
  `registery_number` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `save_number` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `org_art` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `branch_art` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `org_title` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `branch_title` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auther_name` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auther_nickname` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auther_hijri_death` int(11) DEFAULT NULL,
  `auther_gregorian_death` int(11) DEFAULT NULL,
  `auther_hijri_death_century` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auther_gregorian_death_century` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `translate_sources` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_sources` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `book_start` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `book_end` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pages_number` int(11) DEFAULT NULL,
  `compelete_version` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `version_date_hijri` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `version_date_century` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `copy_name` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `copy_location` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `font_type` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8_unicode_ci,
  `custodian_asset` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `save_number_in_asset` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `entry_source` varchar(350) COLLATE utf8_unicode_ci DEFAULT NULL,
  `entry_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `entry_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `manuscripts`
--

INSERT INTO `manuscripts` (`id`, `registery_number`, `save_number`, `org_art`, `branch_art`, `org_title`, `branch_title`, `auther_name`, `auther_nickname`, `auther_hijri_death`, `auther_gregorian_death`, `auther_hijri_death_century`, `auther_gregorian_death_century`, `translate_sources`, `title_sources`, `book_start`, `book_end`, `pages_number`, `compelete_version`, `version_date_hijri`, `version_date_century`, `copy_name`, `copy_location`, `font_type`, `note`, `custodian_asset`, `save_number_in_asset`, `entry_source`, `entry_name`, `entry_date`) VALUES
(6, 'Az000101', '1412', 'تفسير', 'تفسير البيضاوي', 'أنوار التنزيل وأسرار التأويل', 'تفسير البيضاوي', 'عبد الله بن عمر بن محمد البيضاوي', 'البيضاوي', 685, NULL, '07', NULL, 'طبقات الشافعية 59/5', 'كشف الظنون 176/1', 'الحمد لله الذي أنزل الفرقان على عبده ليكون للعالمين نذيرا', 'من قرأ سورة المعوذتين فكأنما قرأ الكتب التي أنزلها الله', 418, 'كاملة', '1247', '13', 'محمد بن الشيخ نور الدين محمود بن ركن الدين العجمي الشافعي', 'القدس الشريف', 'نسخي معتاد', '', 'المكتبة الظاهرية 418', NULL, NULL, 'عبد العزيز الراجحي', '2021-04-18'),
(5, 'Az000100', '1394', 'تفسير', 'تفسير أبي السعود', 'إرشاد العقل السليم إلى مزايا الكتاب الكريم', 'تفسير أبي السعود', 'محمد بن محمد بن مصطفى العمادي', 'أبو السعود', 982, NULL, '10', NULL, 'الأعلام للزركلي', 'كشف الظنون', 'ثم أنتم هؤلاء تقتلون أنفسكم', 'يا أيها الذين آمنوا أنفقوا مما رزقناكم', 49, 'الجزء الثاني', '', '13', '', '', '', 'كتبت بخطين مختلفين ، بالخط الفارسي حتى الورقة 12 ثم بالخط النسخي حتى آخره .', 'المكتبة الظاهرية 7140 ، كما في فهرس دار الكتب الظاهرية ، التفسير 7/3.', '', 'ميم', 'عبد العزيز الراجحي', '2021-04-20'),
(7, 'Az000102', '80051', 'حديث', 'مقدمة ابن الصلاح', 'أقصى الأمل والسول في علوم أحاديث الرسول', 'منظومة الخويي', 'محمد بن أحمد بن خليل الخويي', 'الخويي', 693, NULL, '07', NULL, 'الأعلام للزركلي 324/5', 'كشف الظنون 1162/2', 'الحمد لله الذي هدانا بأحمد أعلى الورى مكانا', 'ما اختلف الليل مع النهار وغردت ورقاء في الأسحار', 59, 'كاملة', '0730', '08', 'علي بن خالد الأدرعي', '', 'نسخي', 'كان في المكتبة العثمانية في حلب برقم حفظ حلب/227', 'مكتبة الأسد الوطنية', '15008', 'فهرس مكتبة الأسد الوطنية ، الحديث الشريف 15/1', 'عبد العزيز الراجحي', '2021-04-22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'مدير',
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `role`, `password`) VALUES
(1, 'عبد العزيز الراجحي', 'Aziz', 'مدير', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manuscripts`
--
ALTER TABLE `manuscripts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `entry_id` (`entry_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `manuscripts`
--
ALTER TABLE `manuscripts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
