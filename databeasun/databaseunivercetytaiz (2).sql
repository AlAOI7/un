-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11 سبتمبر 2022 الساعة 02:10
-- إصدار الخادم: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databaseunivercetytaiz`
--

-- --------------------------------------------------------

--
-- بنية الجدول `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adminn` varchar(10) CHARACTER SET utf32 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `admin`
--

INSERT INTO `admin` (`id`, `adminn`) VALUES
(1, 'alaoi77');

-- --------------------------------------------------------

--
-- بنية الجدول `adminducument`
--

CREATE TABLE `adminducument` (
  `id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 NOT NULL,
  `passs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `adminducument`
--

INSERT INTO `adminducument` (`id`, `username`, `passs`) VALUES
(1, 'alaoi', 'ala12345'),
(2, 'alaala', 'alaala'),
(3, 'alaala', 'alaala'),
(4, 'a', 'a'),
(5, 'ala', 'e88e6128e26eeff4daf1f5db07372784');

-- --------------------------------------------------------

--
-- بنية الجدول `adminsearch`
--

CREATE TABLE `adminsearch` (
  `id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 NOT NULL,
  `passs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `adminsearch`
--

INSERT INTO `adminsearch` (`id`, `username`, `passs`) VALUES
(1, 'ala', '12345678'),
(2, 'ala123', 'ala123'),
(3, 'amgd', 'd971c353f6f59717d1177f28fd47a95a');

-- --------------------------------------------------------

--
-- بنية الجدول `aplouddd`
--

CREATE TABLE `aplouddd` (
  `id` int(11) NOT NULL,
  `namee` varchar(200) CHARACTER SET utf8 NOT NULL,
  `fname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `nameenglish` varchar(250) NOT NULL,
  `gender` varchar(100) CHARACTER SET utf8 NOT NULL,
  `sixs` varchar(200) CHARACTER SET utf8 NOT NULL,
  `numberunvers` int(20) NOT NULL,
  `placebirth` varchar(50) CHARACTER SET utf8 NOT NULL,
  `datee` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` int(15) NOT NULL,
  `dategraduation` date NOT NULL,
  `yearenrollment` date NOT NULL,
  `college` varchar(100) CHARACTER SET utf8 NOT NULL,
  `departmen` varchar(100) CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) NOT NULL,
  `imageing` varchar(255) NOT NULL,
  `ingala` varchar(255) NOT NULL,
  `ab` varchar(255) NOT NULL,
  `cd` varchar(255) NOT NULL,
  `ef` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT ' ,0=visible,1=hidden,2=delete'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `aplouddd`
--

INSERT INTO `aplouddd` (`id`, `namee`, `fname`, `nameenglish`, `gender`, `sixs`, `numberunvers`, `placebirth`, `datee`, `email`, `phonenumber`, `dategraduation`, `yearenrollment`, `college`, `departmen`, `image`, `imageing`, `ingala`, `ab`, `cd`, `ef`, `status`) VALUES
(42, 'alaa', 'asad', 'asdsa', 'Ø§Ù†Ø«Ù‰ ', 'vcvcv', 765476, 'fwfe', '1111-11-11', 'amged55@gmail.com', 3452346, '0222-02-22', '1111-11-11', 'ÙƒÙ„ÙŠØ© Ø§Ù„Ù‡Ù†Ø¯Ø³Ø© ', 'Ø¹Ù„ÙˆÙ… Ø­Ø§Ø³ÙˆØ¨', 'uploud/2.jpg', 'uploud/3.jpg ', 'uploud/4.jpg', 'uploud/11.jpg', 'uploud/12.jpg', 'uploud/9.jpg', 2),
(47, ' Ø¹Ù„Ø§Ø¡ ÙÙŠØµÙ„ Ø¹Ù„ÙŠ', 'Ø§Ù„Ø­Ø§Ø¬', 'alaa fisal ali alhujj', 'Ø§Ù†Ø«Ù‰ ', 'ÙŠÙ…Ù†ÙŠ', 765768, 'ØªØ¹Ø²', '1999-12-22', 'aloi77alshoga@yaho.nt', 774252137, '2022-12-22', '2016-11-11', 'Ø§Ù„Ø¹Ù„ÙˆÙ… Ø§Ù„ØªØ·Ø¨ÙŠÙ‚ÙŠØ©', 'Ø¹Ù„ÙˆÙ… Ø­Ø§Ø³ÙˆØ¨', 'uploud/â€ª+967 715 456 087â€¬ 20190529_080108.jpg', 'uploud/8af9d131cf8e17a501d1d49462051418.jpg ', 'uploud/â€ª+967 771 636 965â€¬ 20190529_080517.jpg', 'uploud/B612_20191121_064810.jpg', 'uploud/B612_20191118_141618.jpg', 'uploud/B612_20191118_141710.jpg', 0),
(48, 'Ø¬ÙˆØ§Ø¯ ÙÙŠØµÙ„ ', 'Ø§Ù„Ø§Ø¬Ø±Ø¨', 'adsfasdf', 'Ø§Ù†Ø«Ù‰ ', ' Ø§Ù…Ø±ÙŠÙƒÙŠ', 6576, 'ØªØ¹Ø²', '2022-06-23', 'alcol@gmail.com', 765785767, '2022-07-02', '2022-06-29', 'ÙƒÙ„ÙŠØ© Ø§Ù„Ø·Ø¨', 'Ø¨Ø±Ù…Ø¬Ø©', 'uploud/FB_IMG_1552420717468.jpg', 'uploud/FB_IMG_1552472320546.jpg ', 'uploud/FB_IMG_1552478590101.jpg', 'uploud/FB_IMG_1552846728765.jpg', 'uploud/FB_IMG_1552594834047.jpg', 'uploud/FB_IMG_1552594858474.jpg', 0),
(49, 'Ø¬ÙˆØ§Ø¯ ÙÙŠØµÙ„ ', 'Ø§Ù„Ø§Ø¬Ø±Ø¨', 'adsfasdf', 'Ø§Ù†Ø«Ù‰ ', ' Ø§Ù…Ø±ÙŠÙƒÙŠ', 6576, 'ØªØ¹Ø²', '2022-06-23', 'alcol@gmail.com', 765785767, '2022-07-02', '2022-06-29', 'ÙƒÙ„ÙŠØ© Ø§Ù„Ø·Ø¨', 'Ø¨Ø±Ù…Ø¬Ø©', 'uploud/FB_IMG_1552420717468.jpg', 'uploud/FB_IMG_1552472320546.jpg ', 'uploud/FB_IMG_1552478590101.jpg', 'uploud/FB_IMG_1552846728765.jpg', 'uploud/FB_IMG_1552594834047.jpg', 'uploud/FB_IMG_1552594858474.jpg', 0),
(50, 'Ø§Ø­Ù…Ø¯ Ø¹Ù„Ø§Ø¡ ', 'Ø§Ù„Ø­Ø§Ø¬', 'ahmed ala', 'Ø§Ù†Ø«Ù‰ ', 'ÙŠÙ…Ù†ÙŠ', 13213, 'ØªØ¹Ø²', '2018-01-30', 'assssssssssss@df', 32525252, '2022-06-03', '2022-07-01', 'ÙƒÙ„ÙŠØ© Ø§Ù„Ø·Ø¨', 'ØªÙ…Ø±ÙŠØ¶', 'uploud/FB_IMG_1552659371135.jpg', 'uploud/FB_IMG_1552474704766.jpg ', 'uploud/FB_IMG_1552506962765.jpg', 'uploud/FB_IMG_1552680376974.jpg', 'uploud/20190512_172557.jpg', 'uploud/(Ø£Ø®Ø¨Ø§Ø±)Ø¹Ù„ÙˆÙ… Ø§Ù„Ø­Ø§Ø³ÙˆØ¨[Â°_Â°] 20190914_214151.jpg', 0),
(51, 'alaa', 'Ø§Ù„Ø­Ø§Ø¬', 'adsfasdf', 'Ø§Ù†Ø«Ù‰ ', 'asda', 33, 'fwfe', '2022-08-03', 'assssssssssss@df', 3444, '2022-09-10', '2022-08-04', 'Ù…Ø±ÙƒØ² Ø§Ù„Ø­Ø§Ø³Ø¨ Ø§Ù„Ø§Ù„ÙŠ', 'sfs', 'uploud/FB_IMG_1556542276927.jpg', 'uploud/FB_IMG_1559005235055.jpg ', 'uploud/FB_IMG_1560741476079.jpg', 'uploud/Ø¹Ø±ÙØ§Øª 20190825_124711.jpg', 'uploud/FB_IMG_1558919367431.jpg', 'uploud/FB_IMG_1559437498047.jpg', 0),
(52, 'alaa', 'Ø§Ù„Ø­Ø§Ø¬', 'adsfasdf', 'Ø§Ù†Ø«Ù‰ ', 'asda', 33, 'fwfe', '2022-08-05', 'assssssssssss@df', 3444, '2022-08-10', '2022-08-10', 'Ù…Ø±ÙƒØ² Ø§Ù„Ø­Ø§Ø³Ø¨ Ø§Ù„Ø§Ù„ÙŠ', 'sfs', 'uploud/FB_IMG_1556542276927.jpg', 'uploud/FB_IMG_1559005235055.jpg ', 'uploud/FB_IMG_1560741476079.jpg', 'uploud/Ø¹Ø±ÙØ§Øª 20190825_124711.jpg', 'uploud/FB_IMG_1558919367431.jpg', 'uploud/FB_IMG_1559437498047.jpg', 0),
(53, 'ewoi', 'eoifo', 'jnfew ebfowie', 'Ø°ÙƒØ± ', 'ebei ', 387872, 'kjbsfkj', '2022-08-07', 'alalalalalaal@gakd.vkjf', 333333, '2022-08-09', '2022-09-09', 'ÙƒÙ„ÙŠØ© Ø§Ù„Ø·Ø¨', '3iwf ewi', 'uploud/FB_IMG_1561753165346.jpg', 'uploud/FB_IMG_1560624069245.jpg ', 'uploud/FB_IMG_1552474574677.jpg', 'uploud/FB_IMG_1552589621034.jpg', 'uploud/FB_IMG_1552594625283.jpg', 'uploud/FB_IMG_1552848286561.jpg', 0),
(54, 'Ù…Ø­Ù…Ø¯ ØµØ§Ø¯Ù‚ Ø¹Ù„ÙŠ', 'Ø§Ù„Ø­Ù…ÙŠØ¯ÙŠ', 'mohamed sadeq', 'Ø°ÙƒØ± ', 'ÙŠÙ…Ù†ÙŠ', 234325, 'ØµØ¨Ø±', '2015-06-17', 'mohamed@gmai.com', 777887570, '2022-09-01', '2022-09-03', 'Ø§Ù„Ø¹Ù„ÙˆÙ… Ø§Ù„ØªØ·Ø¨ÙŠÙ‚ÙŠØ©', 'ÙƒÙŠÙ…ÙŠØ§Ø¡', 'uploud/al13.jpg', 'uploud/IMG-20220818-WA0015.jpg ', 'uploud/IMG-20220818-WA0018.jpg', 'uploud/al12.jpg', 'uploud/IMG-20220818-WA0014.jpg', 'uploud/IMG-20220819-WA0001.jpg', 0);

-- --------------------------------------------------------

--
-- بنية الجدول `conect_table`
--

CREATE TABLE `conect_table` (
  `id` int(11) NOT NULL,
  `id_stud` int(11) NOT NULL,
  `id_gende` int(11) NOT NULL,
  `id_reser` int(11) NOT NULL,
  `id_datastd` int(11) NOT NULL,
  `id_fami` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `conect_table`
--

INSERT INTO `conect_table` (`id`, `id_stud`, `id_gende`, `id_reser`, `id_datastd`, `id_fami`) VALUES
(1, 4, 45, 6, 2, 15);

-- --------------------------------------------------------

--
-- بنية الجدول `data_student_data`
--

CREATE TABLE `data_student_data` (
  `id` int(11) NOT NULL,
  `homeadress` varchar(150) CHARACTER SET utf8 NOT NULL,
  `homighbord` varchar(100) CHARACTER SET utf8 NOT NULL,
  `hoeighbophon` int(15) NOT NULL,
  `malebrother` int(10) NOT NULL,
  `famlesester` int(10) NOT NULL,
  `orderyou` int(10) NOT NULL,
  `becoussrequest` text CHARACTER SET utf8 NOT NULL,
  `work` varchar(100) CHARACTER SET utf8 NOT NULL,
  `typeworkstud` varchar(100) CHARACTER SET utf8 NOT NULL,
  `incomestudent` varchar(100) CHARACTER SET utf8 NOT NULL,
  `nameparent` varchar(200) CHARACTER SET utf8 NOT NULL,
  `degreekinship` varchar(200) CHARACTER SET utf8 NOT NULL,
  `workparent` varchar(200) CHARACTER SET utf8 NOT NULL,
  `incomeparent` varchar(200) CHARACTER SET utf8 NOT NULL,
  `adressparent` varchar(200) CHARACTER SET utf8 NOT NULL,
  `phoneparent` int(15) NOT NULL,
  `ponenigabhoord` int(15) NOT NULL,
  `namenigabhoord` varchar(200) CHARACTER SET utf8 NOT NULL,
  `phonenearby` int(15) NOT NULL,
  `namenearby` varchar(150) CHARACTER SET utf8 NOT NULL,
  `phonesane` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `data_student_data`
--

INSERT INTO `data_student_data` (`id`, `homeadress`, `homighbord`, `hoeighbophon`, `malebrother`, `famlesester`, `orderyou`, `becoussrequest`, `work`, `typeworkstud`, `incomestudent`, `nameparent`, `degreekinship`, `workparent`, `incomeparent`, `adressparent`, `phoneparent`, `ponenigabhoord`, `namenigabhoord`, `phonenearby`, `namenearby`, `phonesane`) VALUES
(4, 'Ø§Ù„Ù‚Ø±ÙŠØ©', 'Ù…Ø¬Ù…Ø¹ Ø§Ù„Ø´Ù‡ÙŠØ¯Ù…Ø­Ù…Ø¯ Ø¹Ù„ÙŠ Ø¹Ø«Ù…Ø§Ù†', 77262672, 345, 3245, 23523325, 'sjabd aiubsd \r\nb\r\nwjq ', 'Ù„Ø§', '', 'Ù„Ø§Ø´ÙŠØ§Ø¡', '', 'Ø§Ø¨', 'Ù…ÙˆØ¸Ù Ø­ÙƒÙˆÙ…ÙŠ', '', 'ØµØ¨Ø±Ø§Ù„Ù…ÙˆØ§Ø¯Ù…', 34535, 34532, 'Ø§Ø­Ù…Ø¯ Ø§Ø¯Ø±ÙŠØ³ ', 25235, 'Ø¹Ù„ÙˆØ§Ù† Ø§Ù„Ø¯Ù…', 23523),
(26, 'weqrw', 'Ù…Ø·Ø¹Ù… Ø§Ù„Ø§Ø±Ø¯Ù†', 77877887, 12, 3, 3, 'ØªØ«ØµØ®Ù‡Ù„Ù‰Ø¨Ù‡Ø­Ø«Øµ Ø±Ù‡Ø«Øµ Ø¨Ù‡Ø¹Ø¶3Ø«Øµ ', 'Ù„Ø§', '', 'Ù„Ø§Ø´ÙŠØ§Ø¡', '', 'Ø§Ø¨', 'Ø´Ø±Ø·ÙŠ Ù…Ø±ÙˆØ±', '', 'ÙŠØ³Ù„   Ù„Ø³ÙŠ ', 212222, 112121, 'Ø¹Ø¯Ù†Ø§Ù† Ø¯Ø±ÙˆÙŠØ´', 3232, 'Ø¹Ù„ÙˆØ§Ù† Ø§Ù„Ø¯Ù…', 232421424),
(27, 'weqrw', 'Ù…Ø·Ø¹Ù… Ø§Ù„Ø§Ø±Ø¯Ù†', 77877887, 12, 3, 3, 'ØªØ«ØµØ®Ù‡Ù„Ù‰Ø¨Ù‡Ø­Ø«Øµ Ø±Ù‡Ø«Øµ Ø¨Ù‡Ø¹Ø¶3Ø«Øµ ', 'Ù„Ø§', '', 'Ù„Ø§Ø´ÙŠØ§Ø¡', '', 'Ø§Ø¨', 'Ø´Ø±Ø·ÙŠ Ù…Ø±ÙˆØ±', '', 'ÙŠØ³Ù„   Ù„Ø³ÙŠ ', 212222, 112121, 'Ø¹Ø¯Ù†Ø§Ù† Ø¯Ø±ÙˆÙŠØ´', 3232, 'Ø¹Ù„ÙˆØ§Ù† Ø§Ù„Ø¯Ù…', 232421424);

-- --------------------------------------------------------

--
-- بنية الجدول `genderal`
--

CREATE TABLE `genderal` (
  `id` int(11) NOT NULL,
  `uname` varchar(200) CHARACTER SET utf8 NOT NULL,
  `nationality` varchar(60) CHARACTER SET utf8 NOT NULL,
  `email` varchar(150) CHARACTER SET utf8 NOT NULL,
  `placeofbirth` varchar(200) CHARACTER SET utf8 NOT NULL,
  `directoratye` varchar(160) CHARACTER SET utf8 NOT NULL,
  `datebirth` date NOT NULL,
  `studentservices` varchar(100) CHARACTER SET utf8 NOT NULL,
  `maritalstatus` varchar(100) NOT NULL,
  `otherstatus` varchar(20) CHARACTER SET utf8 NOT NULL,
  `numbercheld` int(5) NOT NULL,
  `image` varchar(255) NOT NULL,
  `imageing` varchar(255) NOT NULL,
  `ingala` varchar(255) NOT NULL,
  `ab` varchar(255) NOT NULL,
  `cd` varchar(255) NOT NULL,
  `ef` varchar(255) NOT NULL,
  `gh` varchar(255) NOT NULL,
  `ij` varchar(255) NOT NULL,
  `kl` varchar(255) NOT NULL,
  `mn` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `genderal`
--

INSERT INTO `genderal` (`id`, `uname`, `nationality`, `email`, `placeofbirth`, `directoratye`, `datebirth`, `studentservices`, `maritalstatus`, `otherstatus`, `numbercheld`, `image`, `imageing`, `ingala`, `ab`, `cd`, `ef`, `gh`, `ij`, `kl`, `mn`) VALUES
(45, 'ala fisal', 'ÙŠÙ…Ù†ÙŠ', 'alcol@gmail.com', 'asfasf', 'ØµØ¨Ø± Ø§Ù„Ù…ÙˆØ§Ø¯Ù…', '2022-07-01', 'Ø§Ø¹ÙØ§Ø¡ Ù…Ù† Ø±Ø³ÙˆÙ… Ø§Ù†Ø´Ø·Ø©', '', '', 0, 'uploud/FB_IMG_1552594712838.jpg', 'uploud/FB_IMG_1552589801020.jpg', 'uploud/FB_IMG_1552594858474.jpg', 'uploud/FB_IMG_1552670657462.jpg', 'uploud/FB_IMG_1552659295995.jpg', 'uploud/FB_IMG_1552848298424.jpg', 'uploud/FB_IMG_1561090618145.jpg', 'uploud/FB_IMG_1552900751268.jpg', 'uploud/FB_IMG_1563020447233.jpg', 'uploud/IMG-20190913-WA0003.jpg');

-- --------------------------------------------------------

--
-- بنية الجدول `general_information`
--

CREATE TABLE `general_information` (
  `id` int(11) NOT NULL,
  `uname` varchar(200) CHARACTER SET utf8 NOT NULL,
  `nationality` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(200) NOT NULL,
  `placeofbirth` varchar(100) CHARACTER SET utf8 NOT NULL,
  `directoratye` varchar(190) CHARACTER SET utf8 NOT NULL,
  `datebirth` date NOT NULL,
  `studentservices` varchar(100) CHARACTER SET utf8 NOT NULL,
  `maritalstatus` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `otherstatus` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `ala` varchar(255) NOT NULL,
  `alaa` varchar(255) NOT NULL,
  `alaaa` varchar(255) NOT NULL,
  `abdata` varchar(255) NOT NULL,
  `cddata` varchar(255) NOT NULL,
  `efdata` varchar(255) NOT NULL,
  `ghdata` varchar(255) NOT NULL,
  `ijdata` varchar(255) NOT NULL,
  `kldata` varchar(255) NOT NULL,
  `mndata` varchar(255) NOT NULL,
  `numbercheld` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- بنية الجدول `maass`
--

CREATE TABLE `maass` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `emaill` varchar(50) NOT NULL,
  `phon` int(12) NOT NULL,
  `mesg` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `maass`
--

INSERT INTO `maass` (`id`, `name`, `emaill`, `phon`, `mesg`) VALUES
(2, 'jhdsbc', 'asfjd@gmail.com', 45454, 'bes g'),
(3, 'biuwfguyb nb cyb 4u', 'basuygawuy@uyb.dcjb', 44444, 'iugiy \r\npjp'),
(4, 'biuwfguyb nb cyb 4u', 'basuygawuy@uyb.dcjb', 44444, 'iugiy \r\npjp'),
(5, '', '', 0, ''),
(8, 'Ø§Ù…Ø¬Ø¯ Ø¹Ù„ÙŠ ØºØ§Ù†Ù…', 'amged@hsh.cc', 743874387, 'ØºÙ„Ù‚Ùˆ Ø§Ù„Ø¬Ø§Ù…Ø¹Ù‡ Ø§Ù†Ø§ Ù†ÙˆÙ… ');

-- --------------------------------------------------------

--
-- بنية الجدول `researcher_question`
--

CREATE TABLE `researcher_question` (
  `id` int(11) NOT NULL,
  `difficul` varchar(100) CHARACTER SET utf8 NOT NULL,
  `difficulty` varchar(300) CHARACTER SET utf8 NOT NULL,
  `healthstatusdad` varchar(100) CHARACTER SET utf8 NOT NULL,
  `tydiseasedad` varchar(200) CHARACTER SET utf8 NOT NULL,
  `healthstatusmom` varchar(100) CHARACTER SET utf8 NOT NULL,
  `tydiseasemom` varchar(200) CHARACTER SET utf8 NOT NULL,
  `broyhdiseas` varchar(100) CHARACTER SET utf8 NOT NULL,
  `typedisease` varchar(200) CHARACTER SET utf8 NOT NULL,
  `tyhomestud` varchar(100) CHARACTER SET utf8 NOT NULL,
  `amountpymn` varchar(100) CHARACTER SET utf8 NOT NULL,
  `familyproperty` varchar(100) CHARACTER SET utf8 NOT NULL,
  `otherproprety` varchar(200) CHARACTER SET utf8 NOT NULL,
  `wifeotherdad` varchar(100) CHARACTER SET utf8 NOT NULL,
  `brothses` int(5) DEFAULT NULL,
  `sesterse` int(5) DEFAULT NULL,
  `nobrothses` int(5) DEFAULT NULL,
  `nosesterse` int(5) DEFAULT NULL,
  `brotherschool` int(5) DEFAULT NULL,
  `brotheruniver` int(5) DEFAULT NULL,
  `brothwork` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `brothermarrid` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `researcher_question`
--

INSERT INTO `researcher_question` (`id`, `difficul`, `difficulty`, `healthstatusdad`, `tydiseasedad`, `healthstatusmom`, `tydiseasemom`, `broyhdiseas`, `typedisease`, `tyhomestud`, `amountpymn`, `familyproperty`, `otherproprety`, `wifeotherdad`, `brothses`, `sesterse`, `nobrothses`, `nosesterse`, `brotherschool`, `brotheruniver`, `brothwork`, `brothermarrid`) VALUES
(1, 'Ù„Ø§ Ù„Ù… Ø§ÙˆØ§Ø¬Ø©', 'ÙƒØ«Ø±Ø© Ø§Ù„Ù…ØµØ§Ø±ÙŠÙ ', 'Ù…Ø±ÙŠØ¶', 'Ù„Ø§ ', 'Ù…Ø±ÙŠØ¶Ø©', 'Ù„Ø§', 'Ù†Ø¹Ù…', 'Ù„Ø§', 'Ø§ÙŠØ¬Ø§Ø±', '', 'Ø§Ø±Ø¶', 'Ù„Ø§ ÙŠÙˆØ¬Ø¯', 'Ù†Ø¹Ù…', 4, 4, 1, 1, 2, 32, 'Ù†Ø¹Ù…', 2),
(3, 'Ù„Ø§ Ù„Ù… Ø§ÙˆØ§Ø¬Ø©', 'ÙƒØ«Ø±Ø© Ø§Ù„Ù…ØµØ§Ø±ÙŠÙ ', 'Ù…Ø±ÙŠØ¶', 'Ù„Ø§ ', 'Ù…Ø±ÙŠØ¶Ø©', 'Ù„Ø§', 'Ù†Ø¹Ù…', 'Ù„Ø§', 'Ø§ÙŠØ¬Ø§Ø±', '', 'Ø§Ø±Ø¶', 'Ù„Ø§ ÙŠÙˆØ¬Ø¯', 'Ù†Ø¹Ù…', 4, 4, 1, 1, 2, 32, 'Ù†Ø¹Ù…', 2),
(4, 'Ù„Ø§ Ù„Ù… Ø§ÙˆØ§Ø¬Ø©', 'ÙƒØ«Ø±Ø© Ø§Ù„Ù…ØµØ§Ø±ÙŠÙ ', 'Ù…Ø±ÙŠØ¶', 'Ù„Ø§ ', 'Ù…Ø±ÙŠØ¶Ø©', 'Ù„Ø§', 'Ù†Ø¹Ù…', 'Ù„Ø§', 'Ø§ÙŠØ¬Ø§Ø±', '', 'Ø§Ø±Ø¶', 'Ù„Ø§ ÙŠÙˆØ¬Ø¯', 'Ù†Ø¹Ù…', 4, 4, 1, 1, 2, 32, 'Ù†Ø¹Ù…', 2),
(5, 'Ù„Ø§ Ù„Ù… Ø§ÙˆØ§Ø¬Ø©', 'ÙƒØ«Ø±Ø© Ø§Ù„Ù…ØµØ§Ø±ÙŠÙ ', 'Ù…Ø±ÙŠØ¶', 'Ù„Ø§ ', 'Ù…Ø±ÙŠØ¶Ø©', 'Ù„Ø§', 'Ù†Ø¹Ù…', 'Ù„Ø§', 'Ø§ÙŠØ¬Ø§Ø±', '', 'Ø§Ø±Ø¶', 'Ù„Ø§ ÙŠÙˆØ¬Ø¯', 'Ù†Ø¹Ù…', 4, 4, 1, 1, 2, 32, 'Ù†Ø¹Ù…', 2),
(6, 'Ù„Ø§ Ù„Ù… Ø§ÙˆØ§Ø¬Ø©', 'ÙƒØ«Ø±Ø© Ø§Ù„Ù…ØµØ§Ø±ÙŠÙ ', 'Ù…Ø±ÙŠØ¶', 'Ù„Ø§ ', 'Ù…Ø±ÙŠØ¶Ø©', 'Ù„Ø§', 'Ù†Ø¹Ù…', 'Ù„Ø§', 'Ø§ÙŠØ¬Ø§Ø±', '', 'Ø§Ø±Ø¶', 'Ù„Ø§ ÙŠÙˆØ¬Ø¯', 'Ù†Ø¹Ù…', 4, 4, 1, 1, 2, 32, 'Ù†Ø¹Ù…', 2),
(7, 'Ù„Ø§ Ù„Ù… Ø§ÙˆØ§Ø¬Ø©', 'ÙƒØ«Ø±Ø© Ø§Ù„Ù…ØµØ§Ø±ÙŠÙ ', 'Ù…Ø±ÙŠØ¶', 'Ù„Ø§ ', 'Ù…Ø±ÙŠØ¶Ø©', 'Ù„Ø§', 'Ù†Ø¹Ù…', 'Ù„Ø§', 'Ø§ÙŠØ¬Ø§Ø±', '', 'Ø§Ø±Ø¶', 'Ù„Ø§ ÙŠÙˆØ¬Ø¯', 'Ù†Ø¹Ù…', 4, 4, 1, 1, 2, 32, 'Ù†Ø¹Ù…', 2),
(8, 'Ù„Ø§ Ù„Ù… Ø§ÙˆØ§Ø¬Ø©', 'ÙƒØ«Ø±Ø© Ø§Ù„Ù…ØµØ§Ø±ÙŠÙ ', 'Ù…Ø±ÙŠØ¶', 'Ù„Ø§ ', 'Ù…Ø±ÙŠØ¶Ø©', 'Ù„Ø§', 'Ù†Ø¹Ù…', 'Ù„Ø§', 'Ø§ÙŠØ¬Ø§Ø±', '', 'Ø§Ø±Ø¶', 'Ù„Ø§ ÙŠÙˆØ¬Ø¯', 'Ù†Ø¹Ù…', 4, 4, 1, 1, 2, 32, 'Ù†Ø¹Ù…', 2),
(9, 'Ù„Ø§ Ù„Ù… Ø§ÙˆØ§Ø¬Ø©', 'ÙƒØ«Ø±Ø© Ø§Ù„Ù…ØµØ§Ø±ÙŠÙ ', 'Ù…Ø±ÙŠØ¶', 'Ù„Ø§ ', 'Ù…Ø±ÙŠØ¶Ø©', 'Ù„Ø§', 'Ù†Ø¹Ù…', 'Ù„Ø§', 'Ø§ÙŠØ¬Ø§Ø±', '', 'Ø§Ø±Ø¶', 'Ù„Ø§ ÙŠÙˆØ¬Ø¯', 'Ù†Ø¹Ù…', 4, 4, 1, 1, 2, 32, 'Ù†Ø¹Ù…', 2),
(10, 'Ù„Ø§ Ù„Ù… Ø§ÙˆØ§Ø¬Ø©', 'ØµØ¹ÙˆØ¨Ø© Ø§Ù„Ø­Ø¶ÙˆØ± ÙÙŠ ÙƒÙ„ Ø§Ù„Ù…Ø­Ø§Ø¶Ø±Ø§Øª Ø¨Ø³Ø¨Ø¨ ØªØ¯Ù‡ÙˆØ± Ø§Ù„ÙˆØ¶Ø¹ Ø§Ù„ØµØ­ÙŠ', 'Ø¬ÙŠØ¯Ø©', 'Ù„Ø§ ', 'Ø¬ÙŠØ¯Ø©', 'Ù„Ø§', 'Ù„Ø§', 'Ù„Ø§', 'Ø§ÙŠØ¬Ø§Ø±', '', 'Ø§Ø±Ø¶', 'Ù„Ø§ ÙŠÙˆØ¬Ø¯', 'Ù„Ø§', 3, 3, 2, 2, 2, 5, 'Ù„Ø§', 3),
(11, 'Ù„Ø§ Ù„Ù… Ø§ÙˆØ§Ø¬Ø©', 'ØµØ¹ÙˆØ¨Ø© Ø§Ù„Ø­Ø¶ÙˆØ± ÙÙŠ ÙƒÙ„ Ø§Ù„Ù…Ø­Ø§Ø¶Ø±Ø§Øª Ø¨Ø³Ø¨Ø¨ ØªØ¯Ù‡ÙˆØ± Ø§Ù„ÙˆØ¶Ø¹ Ø§Ù„ØµØ­ÙŠ', 'Ø¬ÙŠØ¯Ø©', 'Ù„Ø§ ', 'Ø¬ÙŠØ¯Ø©', 'Ù„Ø§', 'Ù„Ø§', 'Ù„Ø§', 'Ø§ÙŠØ¬Ø§Ø±', '', 'Ø§Ø±Ø¶', 'Ù„Ø§ ÙŠÙˆØ¬Ø¯', 'Ù„Ø§', 3, 3, 2, 2, 2, 5, 'Ù„Ø§', 3);

-- --------------------------------------------------------

--
-- بنية الجدول `student_data`
--

CREATE TABLE `student_data` (
  `id` int(11) NOT NULL,
  `collegstud` varchar(100) NOT NULL,
  `departstd` varchar(40) NOT NULL,
  `levelstd` varchar(30) NOT NULL,
  `schoolstatus` varchar(80) NOT NULL,
  `feeamount` varchar(60) NOT NULL,
  `previotion` varchar(100) NOT NULL,
  `ecempltionrate` varchar(20) DEFAULT NULL,
  `numbeltion` int(4) NOT NULL,
  `brotherstud` varchar(100) NOT NULL,
  `numberbrotherstd` int(5) NOT NULL,
  `wahtcollege` varchar(100) NOT NULL,
  `nubroxemp` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `student_data`
--

INSERT INTO `student_data` (`id`, `collegstud`, `departstd`, `levelstd`, `schoolstatus`, `feeamount`, `previotion`, `ecempltionrate`, `numbeltion`, `brotherstud`, `numberbrotherstd`, `wahtcollege`, `nubroxemp`) VALUES
(1, 'sda', 'asfdaf', 'asv safsaf', 'safa  safa', ' asfsaf', 'asfsa  safasfg', 'gfeg', 435353, 'dsfb fghhjh', 34563, 'vcbfd43563426', 3246),
(2, 'sdfsd', 'dsfsd', 'dsf', 'dfs', 'sdfsd', 'dsfdsf', 'sdfs4', 2, 'sdg', 2, 'aegea', 11),
(3, 'ÙƒÙ„ÙŠØ© Ø§Ù„Ù‡Ù†Ø¯Ø³Ø© ', 'computer ', '4', 'system ', '20', 'Ù„Ø§', '23', 2, 'Ù„Ø§', 2, 'Ø§Ù„Ù‡Ù†Ø¯Ø³Ø©', 3),
(4, 'ÙƒÙ„ÙŠØ© Ø§Ù„Ù‡Ù†Ø¯Ø³Ø© ', 'computer ', '4', 'system ', '20', 'Ù„Ø§', '23', 2, 'Ù„Ø§', 2, 'Ø§Ù„Ù‡Ù†Ø¯Ø³Ø©', 3),
(5, 'ÙƒÙ„ÙŠØ© Ø§Ù„Ø·Ø¨', 'ØªÙ…Ø±ÙŠØ¶', '4', 'Ù†ÙÙ‚Ø© ', '900000', 'Ù„Ø§', '0', 2, 'Ù„Ø§', 0, '   Ø§Ù„ØªØ¬Ø§Ø±Ø©  ', 0),
(6, 'ÙƒÙ„ÙŠØ© Ø§Ù„Ø·Ø¨', 'ØªÙ…Ø±ÙŠØ¶', '4', 'Ù†ÙÙ‚Ø© ', '900000', 'Ù„Ø§', '0', 2, 'Ù„Ø§', 0, '   Ø§Ù„ØªØ¬Ø§Ø±Ø©  ', 0),
(7, 'ÙƒÙ„ÙŠØ© Ø§Ù„Ø·Ø¨', 'ØªÙ…Ø±ÙŠØ¶', '4', 'Ù†ÙÙ‚Ø© ', '900000', 'Ù„Ø§', '0', 2, 'Ù„Ø§', 0, '   Ø§Ù„ØªØ¬Ø§Ø±Ø©  ', 0),
(8, 'ÙƒÙ„ÙŠØ© Ø§Ù„Ø·Ø¨', 'ØªÙ…Ø±ÙŠØ¶', '4', 'Ù†ÙÙ‚Ø© ', '900000', 'Ù„Ø§', '0', 2, 'Ù„Ø§', 0, '   Ø§Ù„ØªØ¬Ø§Ø±Ø©  ', 0),
(9, 'ÙƒÙ„ÙŠØ© Ø§Ù„Ø·Ø¨', 'ØªÙ…Ø±ÙŠØ¶', '4', 'Ù†ÙÙ‚Ø© ', '900000', 'Ù„Ø§', '0', 2, 'Ù„Ø§', 0, '   Ø§Ù„ØªØ¬Ø§Ø±Ø©  ', 0);

-- --------------------------------------------------------

--
-- بنية الجدول `student_family`
--

CREATE TABLE `student_family` (
  `id` int(11) NOT NULL,
  `homefamily` varchar(200) CHARACTER SET utf8 NOT NULL,
  `typehomfam` varchar(100) CHARACTER SET utf8 NOT NULL,
  `numberrent` varchar(40) CHARACTER SET utf8 NOT NULL,
  `educdad` varchar(100) CHARACTER SET utf8 NOT NULL,
  `educmom` varchar(100) CHARACTER SET utf8 NOT NULL,
  `workdad` varchar(100) CHARACTER SET utf8 NOT NULL,
  `incomdad` varchar(100) CHARACTER SET utf8 NOT NULL,
  `adressworkdad` varchar(200) CHARACTER SET utf8 NOT NULL,
  `workmom` varchar(70) CHARACTER SET utf8 NOT NULL,
  `incommom` varchar(100) CHARACTER SET utf8 NOT NULL,
  `adressworkmom` varchar(100) CHARACTER SET utf8 NOT NULL,
  `guarantee` varchar(100) CHARACTER SET utf8 NOT NULL,
  `familiar` varchar(100) CHARACTER SET utf8 NOT NULL,
  `adressfami` varchar(150) CHARACTER SET utf8 NOT NULL,
  `profession` varchar(120) CHARACTER SET utf8 NOT NULL,
  `incomefamili` varchar(100) CHARACTER SET utf8 NOT NULL,
  `workfamili` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `student_family`
--

INSERT INTO `student_family` (`id`, `homefamily`, `typehomfam`, `numberrent`, `educdad`, `educmom`, `workdad`, `incomdad`, `adressworkdad`, `workmom`, `incommom`, `adressworkmom`, `guarantee`, `familiar`, `adressfami`, `profession`, `incomefamili`, `workfamili`) VALUES
(1, 'Ù‚Ø±Ø§Ø¶Ø©', 'Ø§ÙŠØ¬Ø§Ø±', '0', 'Ø¬Ø§Ù…Ø¹ÙŠ ', 'Ø«Ø§Ù†ÙˆÙŠ', 'Ù…ÙˆØ¸Ù', '60Ø§Ù„Ù', 'fdgghg', 'sjbfdh', 'dsiu', 'ghghgk', 'Ù„Ø§', 'Ø§Ù„Ø§Ø¨', 'ØªØ¹Ø² Ø§Ù„Ø¨Ù„Ø¯ÙŠØ©', 'hghftyyeyt', 'htyrgfdcv', 'jghhghgv'),
(2, 'Ù‚Ø±Ø§Ø¶Ø©', 'Ø§ÙŠØ¬Ø§Ø±', '0', 'Ø¬Ø§Ù…Ø¹ÙŠ ', 'Ø«Ø§Ù†ÙˆÙŠ', 'Ù…ÙˆØ¸Ù', '60Ø§Ù„Ù', 'fdgghg', 'sjbfdh', 'dsiu', 'ghghgk', 'Ù„Ø§', 'Ø§Ù„Ø§Ø¨', 'ØªØ¹Ø² Ø§Ù„Ø¨Ù„Ø¯ÙŠØ©', 'hghftyyeyt', 'htyrgfdcv', 'jghhghgv'),
(3, 'Ù‚Ø±Ø§Ø¶Ø©', 'Ø§ÙŠØ¬Ø§Ø±', '0', 'Ø¬Ø§Ù…Ø¹ÙŠ ', 'Ø«Ø§Ù†ÙˆÙŠ', 'Ù…ÙˆØ¸Ù', '60Ø§Ù„Ù', 'fdgghg', 'sjbfdh', 'dsiu', 'ghghgk', 'Ù„Ø§', 'Ø§Ù„Ø§Ø¨', 'ØªØ¹Ø² Ø§Ù„Ø¨Ù„Ø¯ÙŠØ©', 'hghftyyeyt', 'htyrgfdcv', 'jghhghgv'),
(4, 'asjh', 'Ù…Ù„Ùƒ', 'hfhsaj', 'Ø¬Ø§Ù…Ø¹ÙŠ ', 'Ø«Ø§Ù†ÙˆÙŠ', 'yyyy', 'sudj', 'fdgghg', 'Ø±Ø¨Øª Ù…Ù†Ø²Ù„', 'jhguhfj', 'ghghgk', 'Ù†Ø¹Ù…', 'sed', 'ØªØ¹Ø² Ø§Ù„Ø¨Ù„Ø¯ÙŠØ©', 'hghftyyeyt', '60000Ø§Ù„Ù Ø±ÙŠØ§Ù„', 'Ù…ÙƒØªØ¨'),
(5, 'asjh', 'Ø§ÙŠØ¬Ø§Ø±', 'hfhsaj', 'yhfyrg ', 'Ø«Ø§Ù†ÙˆÙŠ', 'dsgh', '4', 'fdgghg', 'Ø±Ø¨Øª Ù…Ù†Ø²Ù„', 'jhguhfj', 'ghghgk', 'Ù†Ø¹Ù…', 'sed', 'jhjhjh', 'Ù…ÙˆØ¸Ù', 'htyrgfdcv', 'egs'),
(6, 'asjh', 'Ø§ÙŠØ¬Ø§Ø±', 'hfhsaj', 'yhfyrg ', 'Ø«Ø§Ù†ÙˆÙŠ', 'dsgh', '4', 'fdgghg', 'Ø±Ø¨Øª Ù…Ù†Ø²Ù„', 'jhguhfj', 'ghghgk', 'Ù†Ø¹Ù…', 'sed', 'jhjhjh', 'Ù…ÙˆØ¸Ù', 'htyrgfdcv', 'egs'),
(7, '', '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, '', '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, '', '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 'Ù‚Ø±Ø§Ø¶Ø©', 'Ø§ÙŠØ¬Ø§Ø±', '0', 'Ø¬Ø§Ù…Ø¹ÙŠ ', 'Ø«Ø§Ù†ÙˆÙŠ', 'Ù…ÙˆØ¸Ù', '60Ø§Ù„Ù', 'fdgghg', 'Ø±Ø¨Øª Ù…Ù†Ø²Ù„', 'Ù„Ø§Ø´ÙŠØ§Ø¡', 'ghghgk', 'Ù„Ø§', 'sed', 'ØªØ¹Ø² Ø§Ù„Ø¨Ù„Ø¯ÙŠØ©', 'Ù…ÙˆØ¸Ù', '60000Ø§Ù„Ù Ø±ÙŠØ§Ù„', 'Ù…ÙƒØªØ¨'),
(11, 'Ù‚Ø±Ø§Ø¶Ø©', 'Ø§ÙŠØ¬Ø§Ø±', '0', 'Ø¬Ø§Ù…Ø¹ÙŠ ', 'Ø«Ø§Ù†ÙˆÙŠ', 'Ù…ÙˆØ¸Ù', '60Ø§Ù„Ù', 'fdgghg', 'Ø±Ø¨Øª Ù…Ù†Ø²Ù„', 'Ù„Ø§Ø´ÙŠØ§Ø¡', 'ghghgk', 'Ù„Ø§', 'sed', 'ØªØ¹Ø² Ø§Ù„Ø¨Ù„Ø¯ÙŠØ©', 'Ù…ÙˆØ¸Ù', '60000Ø§Ù„Ù Ø±ÙŠØ§Ù„', 'Ù…ÙƒØªØ¨'),
(12, 'Ù‚Ø±Ø§Ø¶Ø©', 'Ø§ÙŠØ¬Ø§Ø±', '0', 'Ø¬Ø§Ù…Ø¹ÙŠ ', 'Ø«Ø§Ù†ÙˆÙŠ', 'Ù…ÙˆØ¸Ù', '60Ø§Ù„Ù', 'fdgghg', 'Ø±Ø¨Øª Ù…Ù†Ø²Ù„', 'Ù„Ø§Ø´ÙŠØ§Ø¡', 'ghghgk', 'Ù„Ø§', 'sed', 'ØªØ¹Ø² Ø§Ù„Ø¨Ù„Ø¯ÙŠØ©', 'Ù…ÙˆØ¸Ù', '60000Ø§Ù„Ù Ø±ÙŠØ§Ù„', 'Ù…ÙƒØªØ¨'),
(13, 'Ù‚Ø±Ø§Ø¶Ø©', 'Ø§ÙŠØ¬Ø§Ø±', '0', 'Ø¬Ø§Ù…Ø¹ÙŠ ', 'Ø«Ø§Ù†ÙˆÙŠ', 'Ù…ÙˆØ¸Ù', '60Ø§Ù„Ù', 'fdgghg', 'Ø±Ø¨Øª Ù…Ù†Ø²Ù„', 'Ù„Ø§Ø´ÙŠØ§Ø¡', 'ghghgk', 'Ù„Ø§', 'sed', 'ØªØ¹Ø² Ø§Ù„Ø¨Ù„Ø¯ÙŠØ©', 'Ù…ÙˆØ¸Ù', '60000Ø§Ù„Ù Ø±ÙŠØ§Ù„', 'Ù…ÙƒØªØ¨'),
(14, 'Ù‚Ø±Ø§Ø¶Ø©', 'Ø§ÙŠØ¬Ø§Ø±', '0', 'Ø¬Ø§Ù…Ø¹ÙŠ ', 'Ø«Ø§Ù†ÙˆÙŠ', 'Ù…ÙˆØ¸Ù', '60Ø§Ù„Ù', 'fdgghg', 'Ø±Ø¨Øª Ù…Ù†Ø²Ù„', 'Ù„Ø§Ø´ÙŠØ§Ø¡', 'ghghgk', 'Ù„Ø§', 'sed', 'ØªØ¹Ø² Ø§Ù„Ø¨Ù„Ø¯ÙŠØ©', 'Ù…ÙˆØ¸Ù', '60000Ø§Ù„Ù Ø±ÙŠØ§Ù„', 'Ù…ÙƒØªØ¨'),
(15, 'Ù‚Ø±Ø§Ø¶Ø©', 'Ø§ÙŠØ¬Ø§Ø±', '0', 'Ø¬Ø§Ù…Ø¹ÙŠ ', 'Ø«Ø§Ù†ÙˆÙŠ', 'Ù…ÙˆØ¸Ù', '60Ø§Ù„Ù', 'fdgghg', 'Ø±Ø¨Øª Ù…Ù†Ø²Ù„', 'Ù„Ø§Ø´ÙŠØ§Ø¡', 'ghghgk', 'Ù„Ø§', 'sed', 'ØªØ¹Ø² Ø§Ù„Ø¨Ù„Ø¯ÙŠØ©', 'Ù…ÙˆØ¸Ù', '60000Ø§Ù„Ù Ø±ÙŠØ§Ù„', 'Ù…ÙƒØªØ¨'),
(16, 'Ù‚Ø±Ø§Ø¶Ø©', 'Ø§ÙŠØ¬Ø§Ø±', '0', 'Ø¬Ø§Ù…Ø¹ÙŠ ', 'Ø«Ø§Ù†ÙˆÙŠ', 'Ù…ÙˆØ¸Ù', '60Ø§Ù„Ù', 'fdgghg', 'Ø±Ø¨Øª Ù…Ù†Ø²Ù„', 'Ù„Ø§Ø´ÙŠØ§Ø¡', 'ghghgk', 'Ù„Ø§', 'sed', 'ØªØ¹Ø² Ø§Ù„Ø¨Ù„Ø¯ÙŠØ©', 'Ù…ÙˆØ¸Ù', '60000Ø§Ù„Ù Ø±ÙŠØ§Ù„', 'Ù…ÙƒØªØ¨'),
(26, 'Ù‚Ø±Ø§Ø¶Ø©', 'Ø§ÙŠØ¬Ø§Ø±', '0', 'Ø¬Ø§Ù…Ø¹ÙŠ ', 'Ø«Ø§Ù†ÙˆÙŠ', 'Ù…ÙˆØ¸Ù', '60Ø§Ù„Ù', 'fdgghg', 'Ø±Ø¨Øª Ù…Ù†Ø²Ù„', 'Ù„Ø§Ø´ÙŠØ§Ø¡', 'ghghgk', 'Ù„Ø§', 'sed', 'ØªØ¹Ø² Ø§Ù„Ø¨Ù„Ø¯ÙŠØ©', 'Ù…ÙˆØ¸Ù', '60000Ø§Ù„Ù Ø±ÙŠØ§Ù„', 'Ù…ÙƒØªØ¨'),
(27, 'Ù‚Ø±Ø§Ø¶Ø©', 'Ø§ÙŠØ¬Ø§Ø±', '0', 'Ø¬Ø§Ù…Ø¹ÙŠ ', 'Ø«Ø§Ù†ÙˆÙŠ', 'Ù…ÙˆØ¸Ù', '60Ø§Ù„Ù', 'fdgghg', 'Ø±Ø¨Øª Ù…Ù†Ø²Ù„', 'Ù„Ø§Ø´ÙŠØ§Ø¡', 'ghghgk', 'Ù„Ø§', 'sed', 'ØªØ¹Ø² Ø§Ù„Ø¨Ù„Ø¯ÙŠØ©', 'Ù…ÙˆØ¸Ù', '60000Ø§Ù„Ù Ø±ÙŠØ§Ù„', 'Ù…ÙƒØªØ¨'),
(28, 'Ù‚Ø±Ø§Ø¶Ø©', 'Ø§ÙŠØ¬Ø§Ø±', '0', 'Ø¬Ø§Ù…Ø¹ÙŠ ', 'Ø«Ø§Ù†ÙˆÙŠ', 'Ù…ÙˆØ¸Ù', '60Ø§Ù„Ù', 'fdgghg', 'Ø±Ø¨Øª Ù…Ù†Ø²Ù„', 'Ù„Ø§Ø´ÙŠØ§Ø¡', 'ghghgk', 'Ù„Ø§', 'sed', 'ØªØ¹Ø² Ø§Ù„Ø¨Ù„Ø¯ÙŠØ©', 'Ù…ÙˆØ¸Ù', '60000Ø§Ù„Ù Ø±ÙŠØ§Ù„', 'Ù…ÙƒØªØ¨'),
(29, 'Ù‚Ø±Ø§Ø¶Ø©', 'Ø§ÙŠØ¬Ø§Ø±', '0', 'Ø¬Ø§Ù…Ø¹ÙŠ ', 'Ø«Ø§Ù†ÙˆÙŠ', 'Ù…ÙˆØ¸Ù', '60Ø§Ù„Ù', 'fdgghg', 'Ø±Ø¨Øª Ù…Ù†Ø²Ù„', 'Ù„Ø§Ø´ÙŠØ§Ø¡', 'ghghgk', 'Ù„Ø§', 'sed', 'ØªØ¹Ø² Ø§Ù„Ø¨Ù„Ø¯ÙŠØ©', 'Ù…ÙˆØ¸Ù', '60000Ø§Ù„Ù Ø±ÙŠØ§Ù„', 'Ù…ÙƒØªØ¨'),
(30, 'Ù‚Ø±Ø§Ø¶Ø©', 'Ø§ÙŠØ¬Ø§Ø±', '0', 'Ø¬Ø§Ù…Ø¹ÙŠ ', 'Ø«Ø§Ù†ÙˆÙŠ', 'Ù…ÙˆØ¸Ù', '60Ø§Ù„Ù', 'fdgghg', 'Ø±Ø¨Øª Ù…Ù†Ø²Ù„', 'Ù„Ø§Ø´ÙŠØ§Ø¡', 'ghghgk', 'Ù„Ø§', 'sed', 'ØªØ¹Ø² Ø§Ù„Ø¨Ù„Ø¯ÙŠØ©', 'Ù…ÙˆØ¸Ù', '60000Ø§Ù„Ù Ø±ÙŠØ§Ù„', 'Ù…ÙƒØªØ¨'),
(31, 'Ù‚Ø±Ø§Ø¶Ø©', 'Ø§ÙŠØ¬Ø§Ø±', '0', 'Ø¬Ø§Ù…Ø¹ÙŠ ', 'Ø«Ø§Ù†ÙˆÙŠ', 'Ù…ÙˆØ¸Ù', '60Ø§Ù„Ù', 'fdgghg', 'Ø±Ø¨Øª Ù…Ù†Ø²Ù„', 'Ù„Ø§Ø´ÙŠØ§Ø¡', 'ghghgk', 'Ù„Ø§', 'sed', 'ØªØ¹Ø² Ø§Ù„Ø¨Ù„Ø¯ÙŠØ©', 'Ù…ÙˆØ¸Ù', '60000Ø§Ù„Ù Ø±ÙŠØ§Ù„', 'Ù…ÙƒØªØ¨'),
(32, 'Ù‚Ø±Ø§Ø¶Ø©', 'Ø§ÙŠØ¬Ø§Ø±', '0', 'Ø¬Ø§Ù…Ø¹ÙŠ ', 'Ø«Ø§Ù†ÙˆÙŠ', 'Ù…ÙˆØ¸Ù', '60Ø§Ù„Ù', 'fdgghg', 'Ø±Ø¨Øª Ù…Ù†Ø²Ù„', 'Ù„Ø§Ø´ÙŠØ§Ø¡', 'ghghgk', 'Ù„Ø§', 'sed', 'ØªØ¹Ø² Ø§Ù„Ø¨Ù„Ø¯ÙŠØ©', 'Ù…ÙˆØ¸Ù', '60000Ø§Ù„Ù Ø±ÙŠØ§Ù„', 'Ù…ÙƒØªØ¨'),
(33, 'Ù‚Ø±Ø§Ø¶Ø©', 'Ø§ÙŠØ¬Ø§Ø±', '0', 'Ø¬Ø§Ù…Ø¹ÙŠ ', 'Ø«Ø§Ù†ÙˆÙŠ', 'Ù…ÙˆØ¸Ù', '60Ø§Ù„Ù', 'fdgghg', 'Ø±Ø¨Øª Ù…Ù†Ø²Ù„', 'Ù„Ø§Ø´ÙŠØ§Ø¡', 'ghghgk', 'Ù„Ø§', 'sed', 'ØªØ¹Ø² Ø§Ù„Ø¨Ù„Ø¯ÙŠØ©', 'Ù…ÙˆØ¸Ù', '60000Ø§Ù„Ù Ø±ÙŠØ§Ù„', 'Ù…ÙƒØªØ¨'),
(34, 'Ù‚Ø±Ø§Ø¶Ø©', 'Ø§ÙŠØ¬Ø§Ø±', '0', 'Ø¬Ø§Ù…Ø¹ÙŠ ', 'Ø«Ø§Ù†ÙˆÙŠ', 'Ù…ÙˆØ¸Ù', '60Ø§Ù„Ù', 'fdgghg', 'Ø±Ø¨Øª Ù…Ù†Ø²Ù„', 'Ù„Ø§Ø´ÙŠØ§Ø¡', 'ghghgk', 'Ù„Ø§', 'sed', 'ØªØ¹Ø² Ø§Ù„Ø¨Ù„Ø¯ÙŠØ©', 'Ù…ÙˆØ¸Ù', '60000Ø§Ù„Ù Ø±ÙŠØ§Ù„', 'Ù…ÙƒØªØ¨'),
(35, 'Ø§Ù„Ø¹Ø¯ÙŠÙ†', 'Ù…Ù„Ùƒ', '0', 'Ø¬Ø§Ù…Ø¹ÙŠ ', 'Ø«Ø§Ù†ÙˆÙŠ', 'Ø´Ø±Ø·ÙŠ Ù…Ø±ÙˆØ± ', '80000', 'Ø§Ù„Ù…Ø±ÙˆØ±', 'Ø±Ø¨Øª Ù…Ù†Ø²Ù„', 'Ù„Ø§Ø´ÙŠØ§Ø¡', 'Ø§Ù„Ø¨ÙŠØª', 'Ù„Ø§', 'Ø§Ù„Ø§Ø¨', 'Ø§Ù„Ù…Ø±ÙˆØ±', 'Ø´Ø±Ø·ÙŠ', '80000', 'Ø´Ø±Ø·ÙŠ'),
(36, 'Ø§Ù„Ø¹Ø¯ÙŠÙ†', 'Ù…Ù„Ùƒ', '0', 'Ø¬Ø§Ù…Ø¹ÙŠ ', 'Ø«Ø§Ù†ÙˆÙŠ', 'Ø´Ø±Ø·ÙŠ Ù…Ø±ÙˆØ± ', '80000', 'Ø§Ù„Ù…Ø±ÙˆØ±', 'Ø±Ø¨Øª Ù…Ù†Ø²Ù„', 'Ù„Ø§Ø´ÙŠØ§Ø¡', 'Ø§Ù„Ø¨ÙŠØª', 'Ù„Ø§', 'Ø§Ù„Ø§Ø¨', 'Ø§Ù„Ù…Ø±ÙˆØ±', 'Ø´Ø±Ø·ÙŠ', '80000', 'Ø´Ø±Ø·ÙŠ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminducument`
--
ALTER TABLE `adminducument`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminsearch`
--
ALTER TABLE `adminsearch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aplouddd`
--
ALTER TABLE `aplouddd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conect_table`
--
ALTER TABLE `conect_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_datastd` (`id_datastd`),
  ADD KEY `id_gende` (`id_gende`),
  ADD KEY `id_reser` (`id_reser`),
  ADD KEY `id_stud` (`id_stud`),
  ADD KEY `id_fami` (`id_fami`);

--
-- Indexes for table `data_student_data`
--
ALTER TABLE `data_student_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genderal`
--
ALTER TABLE `genderal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_information`
--
ALTER TABLE `general_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maass`
--
ALTER TABLE `maass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `researcher_question`
--
ALTER TABLE `researcher_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_family`
--
ALTER TABLE `student_family`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminducument`
--
ALTER TABLE `adminducument`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `adminsearch`
--
ALTER TABLE `adminsearch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `aplouddd`
--
ALTER TABLE `aplouddd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `conect_table`
--
ALTER TABLE `conect_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_student_data`
--
ALTER TABLE `data_student_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `genderal`
--
ALTER TABLE `genderal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `general_information`
--
ALTER TABLE `general_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `maass`
--
ALTER TABLE `maass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `researcher_question`
--
ALTER TABLE `researcher_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `student_data`
--
ALTER TABLE `student_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student_family`
--
ALTER TABLE `student_family`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `conect_table`
--
ALTER TABLE `conect_table`
  ADD CONSTRAINT `conect_table_ibfk_1` FOREIGN KEY (`id_stud`) REFERENCES `data_student_data` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `conect_table_ibfk_2` FOREIGN KEY (`id_reser`) REFERENCES `researcher_question` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `conect_table_ibfk_3` FOREIGN KEY (`id_gende`) REFERENCES `genderal` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `conect_table_ibfk_4` FOREIGN KEY (`id_fami`) REFERENCES `student_family` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `conect_table_ibfk_5` FOREIGN KEY (`id_datastd`) REFERENCES `student_data` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
