-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 
-- 伺服器版本： 8.0.17
-- PHP 版本： 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `vegetables`
--

-- --------------------------------------------------------

--
-- 資料表結構 `farmer`
--

CREATE TABLE `farmer` (
  `farmerID` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` int(10) NOT NULL,
  `origin` varchar(15) NOT NULL,
  `store` varchar(100) NOT NULL,
  `introduction` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `farmer`
--

INSERT INTO `farmer` (`farmerID`, `name`, `email`, `password`, `phone`, `origin`, `store`, `introduction`) VALUES
('farmer01', 'jack', 'farmer01jack@gmail.com', 'farmer01jack', 901234567, '台南', '台南市安平區圈圈路30號', '這是一個種植有機蔬菜並使用有機蔬菜的地方'),
('farmer02', '許農夫', 'famer02@yahoo.com', 'farmer02hahaha', 936846266, '屏東', '屏東縣車城鄉福安路666號', '有機農地');

-- --------------------------------------------------------

--
-- 資料表結構 `inspectors`
--

CREATE TABLE `inspectors` (
  `InspectorsID` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `inspectors`
--

INSERT INTO `inspectors` (`InspectorsID`, `name`, `email`, `password`, `phone`) VALUES
('inspectors01', '蔡檢驗', 'inspectors01@gmail.com', 'inspectors01hahaha', 975231846),
('inspectors02', 'Kevin', 'inspectors02@yahoo.com', 'inspectors02hahaha', 63548721);

-- --------------------------------------------------------

--
-- 資料表結構 `production_info`
--

CREATE TABLE `production_info` (
  `prdinfoID` varchar(20) NOT NULL,
  `productname` varchar(20) NOT NULL,
  `operators` varchar(10) NOT NULL,
  `producer` varchar(10) NOT NULL,
  `origin` varchar(15) NOT NULL,
  `introduction` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `userID` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`userID`, `name`, `email`, `password`, `phone`) VALUES
('user01', 'Lily', 'user01@gmail.com', 'user01hahaha', 947512388),
('user02', '林卷卷', 'user02@yahoo.com', 'user02hahaha', 645879315);

-- --------------------------------------------------------

--
-- 資料表結構 `user_favorite`
--

CREATE TABLE `user_favorite` (
  `userID` varchar(20) NOT NULL,
  `favorite` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `user_historical`
--

CREATE TABLE `user_historical` (
  `userID` varchar(20) NOT NULL,
  `historical` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `user_subscription`
--

CREATE TABLE `user_subscription` (
  `userID` varchar(20) NOT NULL,
  `subscription` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
