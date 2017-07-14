-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2017-07-12 08:24:51
-- 伺服器版本: 5.7.17-log
-- PHP 版本： 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `product`
--

-- --------------------------------------------------------

--
-- 資料表結構 `product_introduction`
--

CREATE TABLE `product_introduction` (
  `name` varchar(30) NOT NULL,
  `位移解析度` varchar(15) NOT NULL,
  `溫度解析度` varchar(15) NOT NULL,
  `通訊頻率` varchar(15) NOT NULL,
  `通訊距離` varchar(15) NOT NULL,
  `量測範圍` varchar(15) NOT NULL,
  `量測解析度` varchar(15) NOT NULL,
  `耗電功率` varchar(40) NOT NULL,
  `量測方向` varchar(15) NOT NULL,
  `最高取樣頻率` varchar(15) NOT NULL,
  `最高取樣點數` varchar(15) NOT NULL,
  `模組電源電壓` varchar(15) NOT NULL,
  `最高訊號取樣頻率` varchar(15) NOT NULL,
  `功率` varchar(15) NOT NULL,
  `最高輸出電壓` varchar(15) NOT NULL,
  `電容量` varchar(80) NOT NULL,
  `充放電壽命` varchar(15) NOT NULL,
  `最大瞬間輸出電流` varchar(15) NOT NULL,
  `耐候等級` varchar(15) NOT NULL,
  `操作溫度` varchar(15) NOT NULL,
  `電池_輸出電壓` varchar(15) NOT NULL,
  `電池_容量` varchar(15) NOT NULL,
  `電池_最大瞬間輸出電流` varchar(15) NOT NULL,
  `電池_耐候等級` varchar(15) NOT NULL,
  `電池_操作溫度` varchar(15) NOT NULL,
  `電源電壓` varchar(15) NOT NULL,
  `支援介面` varchar(30) NOT NULL,
  `感測器電壓供應` varchar(15) NOT NULL,
  `溫度量測範圍` varchar(15) NOT NULL,
  `電源供應` varchar(15) NOT NULL,
  `荷重元激力電壓` varchar(15) NOT NULL,
  `激力電壓` varchar(15) NOT NULL,
  `ADC解析度` varchar(15) NOT NULL,
  `ADC輸入最大範圍` varchar(15) NOT NULL,
  `電橋訊號最大放大倍率` varchar(20) NOT NULL,
  `太陽能規格` varchar(15) NOT NULL,
  `電瓶規格` varchar(15) NOT NULL,
  `應變計規格` varchar(20) NOT NULL,
  `PS` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `product_introduction`
--

INSERT INTO `product_introduction` (`name`, `位移解析度`, `溫度解析度`, `通訊頻率`, `通訊距離`, `量測範圍`, `量測解析度`, `耗電功率`, `量測方向`, `最高取樣頻率`, `最高取樣點數`, `模組電源電壓`, `最高訊號取樣頻率`, `功率`, `最高輸出電壓`, `電容量`, `充放電壽命`, `最大瞬間輸出電流`, `耐候等級`, `操作溫度`, `電池_輸出電壓`, `電池_容量`, `電池_最大瞬間輸出電流`, `電池_耐候等級`, `電池_操作溫度`, `電源電壓`, `支援介面`, `感測器電壓供應`, `溫度量測範圍`, `電源供應`, `荷重元激力電壓`, `激力電壓`, `ADC解析度`, `ADC輸入最大範圍`, `電橋訊號最大放大倍率`, `太陽能規格`, `電瓶規格`, `應變計規格`, `PS`) VALUES
('GDACC4UG無線三軸加速度計', '', '', '2405~2480MHz', '1km (開放空間)', '±2g', '3.9µg', '15µW(Standby Mode) 460mW(Active Mode)', 'X、Y、Z', '100Hz', '10000點', '', '', '', '', '', '', '', 'IP66', '-40~80°C', '', '', '', '', '', '5.0VDC~7.0VDC', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('GDTILT6S無線傾度盤', '', '', '2405~2480MHz', '1km (開放空間)', '±90°', '0.00179°', '15µW(Standby Mode) 460mW(Active Mode)', '', '', '', '', '', '', '', '', '', '', 'IP66', '-40~80°C', '', '', '', '', '', '5.0VDC~7.0VDC', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('GDTILTPD無線高精度傾度盤', '', '', '2405~2480MHz', '1km (開放空間)', '±90°', '0.00179°', '15µW(Standby Mode) 460mW(Active Mode)', '', '', '', '', '', '', '', '', '', '', 'IP66', '-40~80°C', '', '', '', '', '', '5.0VDC~7.0VDC', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('GDTILTPS無線高精、角度傾度盤', '', '', '2405~2480MHz', '1km (開放空間)', '±90°', '0.00179°', '15µW(Standby Mode) 460mW(Active Mode)', '', '', '', '', '', '', '', '', '', '', 'IP66', '-40~80°C', '', '', '', '', '', '5.0VDC~7.0VDC', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('GINDER D1UM 位移訊號擷取器', '1um', '', '2405~2480MHz', '', '', '', '15µW(Standby Mode) 460mW(Active Mode)', '', '', '', '5.0V~12.0V', '100Hz', '', '', '', '', '', '', '-40~80°C', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('GINDER WR10HZ無線協調器', '', '', '2405~2480MHz', '1km (開放空間)', '', '', '15µW(Standby Mode) 460mW(Active Mode)', '', '', '', '5.0V', '100Hz', '', '', '', '', '', '', '-40~80°C', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('INDER T01C', '', '0.1°C', '2405~2480MHz', '', '', '', '15µW(Standby Mode) 460mW(Active Mode)', '', '', '', '5.0V~12V', '100Hz', '', '', '', '', '', '', '-40~80°C', '', '', '', '', '', '', '', '', '-40~125°C', '', '', '', '', '', '', '', '', '', ''),
('JD-SP001自充電太陽能模組', '', '', '', '', '', '', '', '', '', '', '', '', '0.5W', '5.4V', '25F 1.日照充足狀況下，5分鐘可充飽。 2.搭配JD-WL001運作，若每分鐘傳輸1筆資料，可在無日照狀況下，可運作120小時以上。', '500,000次 (10年)', '27A', 'IP66', '-40~80°C', '3.6V', '3.6Ah', '130mA', 'IP66', '-40~80°C', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('JD-WL001無線數位型荷重元訊號處理模組', '', '', '2405~2480MHz', '1km (開放空間)', '', '', '15µW(Standby Mode) 460mW(Active Mode)', '', '', '', '5.0V~7.0V', '100Hz', '', '', '', '', '', 'IP66', '-40~80°C', '', '', '', '', '', '', '', '', '', '', '2.5V或5.0V', '', '16-Bit', '5V', 'G = 1000 (可依荷重元規格調整)', '', '', '', ''),
('串接型傾斜計', '', '', '2405~2480MHz', '1km (開放空間)', '±90°', '0.00179°', '15µW(Standby Mode) 460mW(Active Mode)', '', '', '', '', '', '', '', '', '', '', 'IP66', '-40~80°C', '', '', '', '', '', '5.0VDC~7.0VDC', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('單支傾斜計', '', '', '2405~2480MHz', '1km (開放空間)', '±90°', '0.00179°', '15µW(Standby Mode) 460mW(Active Mode)', '', '', '', '', '', '', '', '', '', '', 'IP66', '-40~80°C', '', '', '', '', '', '5.0VDC~7.0VDC', '', '', '', '4顆4號電池', '', '', '', '', '', '', '', '', ''),
('壩體混泥土磨耗擷取器', '', '', '2405~2480MHz', '1km (開放空間)', '', '', '15µW(Standby Mode) 460mW(Active Mode)', '', '', '', '5.0V~12V', '100Hz', '', '', '', '', '', 'IP68', '-40~80°C', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('太陽能自主供電監測模組', '', '', '2405~2480MHz', '1km (開放空間)', '', '', '15µW(Standby Mode) 460mW(Active Mode)', '', '', '', '5.0V~12.0V', '100Hz', '', '', '', '', '', 'IP68', '-40~80°C', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '30W', '12~14V 14Ah', '', '內涵 YUN+4G+無線Coordinator+監測節點'),
('無線應變計', '', '', '2405~2480MHz', '1km (開放空間)', '', '', '15µW(Standby Mode) 460mW(Active Mode)', '', '', '', '5.0~7V', '100Hz', '', '', '', '', '', 'IP66', '-40~80°C', '', '', '', '', '', '', '', '', '', '', '', '', '16-Bit', '', 'G = 1000 (可依應變規格調整)', '', '', '120歐姆(可依使用應變規格作)', ''),
('無線擷取計', '', '', '2405~2480MHz', '1km (開放空間)', '', '', '15µW(Standby Mode) 460mW(Active Mode)', '', '', '', '5.0V~12.0V', '100Hz', '', '', '', '', '', 'IP66', '-40~80°C', '', '', '', '', '', '', 'RS-485、RS232、UART、4~20mA、電壓輸出', '2.5V~12V', '', '', '', '2.5V或5.0V', '16-Bit', '5V', 'G = 1000 (可依荷重元規格調整)', '', '', '', ''),
('無線高精度數位溫度計', '', '0.1°C', '2405~2480MHz', '1km (開放空間)', '', '', '15µW(Standby Mode) 460mW(Active Mode)', '', '', '', '5.0~7V', '100Hz', '', '', '', '', '', '', '-40~80°C', '', '', '', '', '', '', '', '', '-40~125°C', '', '', '', '', '', '', '', '', '', '');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `product_introduction`
--
ALTER TABLE `product_introduction`
  ADD PRIMARY KEY (`name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
