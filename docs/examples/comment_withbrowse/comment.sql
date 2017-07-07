-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2017-07-07 17:25:35
-- 伺服器版本: 5.7.17-log
-- PHP 版本： 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `comment`
--

-- --------------------------------------------------------

--
-- 資料表結構 `admin`
--

CREATE TABLE `admin` (
  `account` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `admin`
--

INSERT INTO `admin` (`account`, `password`) VALUES
('ian03121997', 'az135790');

-- --------------------------------------------------------

--
-- 資料表結構 `comment`
--

CREATE TABLE `comment` (
  `guestID` int(11) NOT NULL,
  `guestName` varchar(25) NOT NULL,
  `guestEmail` varchar(30) NOT NULL,
  `guestGender` char(1) NOT NULL,
  `guestSubject` varchar(25) NOT NULL,
  `guestTime` datetime NOT NULL,
  `guestContentType` varchar(15) NOT NULL,
  `guestContent` text NOT NULL,
  `guestReply` text NOT NULL,
  `guestReplyTime` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `comment`
--

INSERT INTO `comment` (`guestID`, `guestName`, `guestEmail`, `guestGender`, `guestSubject`, `guestTime`, `guestContentType`, `guestContent`, `guestReply`, `guestReplyTime`) VALUES
(3, 'dew', 'dew@dew', '0', 'dew', '2017-07-06 16:06:09', '', 'dewqdas', 'ekwqopekwqpoekwpoqeq', '2017-07-07 17:04:56'),
(2, 'dsa', 'dsa@dsa', '0', 'das', '2017-07-06 15:42:28', '', 'dsa', '', '0000-00-00 00:00:00'),
(4, 'dew', 'dew@dew', '0', 'dew', '2017-07-06 16:07:18', '', 'dewqdas', '', '0000-00-00 00:00:00'),
(5, 'kopqwe', 'klkodsa@kopdewq', '0', 'kopfewq', '2017-07-06 16:15:02', '', 'ewqfw', 'klmldmwqm', '2017-07-07 16:58:52'),
(6, 'rewq', 'feqw@feqf', '1', 'rewq', '2017-07-06 16:21:22', '', 'kopfkweq\r\nkfopewqkp\r\nkfeopwq', '', '0000-00-00 00:00:00'),
(7, 'jklfds', 'ehwuie@huidsa', '1', 'dsauihfds', '2017-07-06 16:32:13', '', 'fdhsuaihuifds\r\nfjadsiojhuifds\r\nhfudasi', '', '0000-00-00 00:00:00'),
(8, 'jdioqw', 'djewiqo@fjidoqo', '1', 'djewioq', '2017-07-06 16:35:57', '', 'denwqod', '', '0000-00-00 00:00:00'),
(28, '23', '123@3213', '0', 'kp213', '2017-07-07 17:11:30', '', '321', 'dddd', '2017-07-07 17:23:10'),
(19, 'dewq', 'kopopkwepok@koppkopkoqw', '1', 'kopkopd', '2017-07-07 12:21:43', '', 'oopdkoppo', 'kdopqwkd', '2017-07-07 14:04:22'),
(20, 'jdioewq', 'jiodewq@jiodjqoi', '1', 'fewjqio', '2017-07-07 15:05:48', '', 'jiojoipdwq', 'dwqdwqdqqw', '2017-07-07 16:56:09'),
(22, 'kjoiewq', 'kopkdewq@kopfewq', '0', 'kopdkewq', '2017-07-07 16:27:14', '', 'kopdewkq[pkewq', 'mewomqedw', '2017-07-07 16:48:26'),
(25, 'dwedew', 'dwed@kopqwe', '1', 'fewkqop', '2017-07-07 17:00:02', '', 'fewqkopfkepowq', '', '0000-00-00 00:00:00'),
(24, 'kopkopedwq', 'opkoppkowe@kopkoppofkweq', '1', 'pkkopokkpoqwee', '2017-07-07 16:29:05', '', 'ppokfpewoqkpo[kqpowefkpokeq', 'qqqqq', '2017-07-07 16:33:21'),
(26, 'kopdkwq', 'pkpsq@kopkpew', '1', 'kopkdwq', '2017-07-07 17:01:12', '', 'kkopkopdwq', '', '0000-00-00 00:00:00'),
(27, 'kopdwq', 'kookqw@kopopkfew', '1', 'fewkop', '2017-07-07 17:03:46', '', 'fewqopkfewq', '', '0000-00-00 00:00:00'),
(29, 'eeqw', 'wqwq@123', '1', '123', '2017-07-07 17:19:43', '', '123', 'e21e21', '2017-07-07 17:20:28');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`guestID`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `comment`
--
ALTER TABLE `comment`
  MODIFY `guestID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
