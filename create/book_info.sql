-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 2018-11-08 14:19:14
-- 服务器版本： 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- 表的结构 `book_info`
--

DROP TABLE IF EXISTS `book_info`;
CREATE TABLE IF NOT EXISTS `book_info` (
  `book_number` varchar(25) NOT NULL,
  `book_owner` varchar(13) NOT NULL,
  `book_name` text NOT NULL,
  `book_writer` text NOT NULL,
  `book_edition` text NOT NULL,
  `book_publisher` text NOT NULL,
  `book_course` text NOT NULL,
  `book_price` varchar(25) NOT NULL,
  `book_introduction` text NOT NULL,
  `book_picture` text NOT NULL,
  `book_sale` tinyint(1) NOT NULL DEFAULT '1',
  `book_date` text NOT NULL,
  `book_classification` text NOT NULL,
  `sale_or_rent` int(1) NOT NULL,
  PRIMARY KEY (`book_number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `book_info`
--

INSERT INTO `book_info` (`book_number`, `book_owner`, `book_name`, `book_writer`, `book_edition`, `book_publisher`, `book_course`, `book_price`, `book_introduction`, `book_picture`, `book_sale`, `book_date`, `book_classification`, `sale_or_rent`) VALUES
('866605538', '2016141093000', 'xx        ', 'xx', 'xx', 'xx        ', 'xx        ', '500 ', 'verygood', '', 0, '2018-10-30', '', 0),
('187316379', '2016141093000', 'xx', 'xx', 'xx', 'xx', 'xx', '500', 'good', '', 1, '2018-11-03', '', 0),
('642948317', '2016141093000', 'xx', 'xx', 'xx', 'xx', 'xx', '500', 'good', '', 1, '2018-11-04', '', 0),
('643132171', '2016141093000', 'book', 'writer', 'xx', 'xx', 'course', '10', 'verygood', '', 1, '2018-11-04', '', 0),
('843115965', '2016141093000', 'book', 'me', 'edition', 'xx', 'xx', '500', 'good', '', 1, '2018-11-04', '', 0),
('608126571', '2016141093000', 'book', 'me', 'edition', 'xx', 'xx', '111', 'good', '', 1, '2018-11-04', '', 0),
('687892548', '2016141093000', 'book', 'me', 'edition', 'xx', 'course', '500', 'good', '', 1, '2018-11-04', '', 0),
('43381298', '2016141093000', 'xx', 'me', 'edition', 'xx', 'xx', '10', 'good', '', 1, '2018-11-05', '', 0),
('672493275', '2016141093000', '假的', '假人', 'edition', 'xx', '不适合', '500', 'good', '', 1, '2018-11-05', '', 0),
('545919966', '2016141093000', 'aa', 'aa', 'aa', 'aa', 'aa', '22', 'aa', '', 1, '2018-11-05', 'aa', 0),
('582901613', '2016141093000', '假的', '111', 'edition', 'aa', '不适合', '111', 'verygood', '', 1, '2018-11-05', '请选择书籍类别', 0),
('612331443', '2016141093000', '假书', '假人', '假的', 'xx', '不适合', '0', '很好', '', 1, '2018-11-05', '马列主义毛邓思想', 0),
('581149823', '2016141093000', '假书', '111', '111', 'aa', '不适合', '500', 'verygood', '', 1, '2018-11-05', '经济', 0),
('52488605', '2016141093000', '假书', '111', '111', 'aa', '不适合', '500', 'verygood', '', 1, '2018-11-05', '经济', 0),
('730993047', '2016141093000', '假的', '111', '111', 'aa', '不适合', '500', 'good', '', 1, '2018-11-05', '社会科学总论', 0),
('386264497', '2016141093000', '假的', '111', '111', 'aa', '111', '111', 'verygood', '', 1, '2018-11-05', '军事', 1),
('591105744', '2016141093000', '假书', '假人', '假的', 'xx', '不适合', '111', 'verygood', '', 1, '2018-11-06', '政治、法律', 0),
('59266257', '2016141093000', '假的', '111', '111', 'aa', '不适合', '111', 'verygood', '', 1, '2018-11-06', '社会科学总论', 1),
('659887505', '2016141093000', '马克思', '马克', '二', '先', '马列主义', '10', '马列思想', '', 1, '2018-11-07', '马列主义毛邓思想', 0),
('818354111', '2016141093000', '马克思', 'aa', '二', '先', '马列主义', '22', '马列思想', '', 1, '2018-11-07', '马列主义毛邓思想', 0),
('531277831', '2016141093000', '马克思', '111', '二', '先', '马列主义', '111', '马列思想', '', 1, '2018-11-08', '马列主义毛邓思想', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
