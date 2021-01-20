-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-01-20 20:23:25
-- 伺服器版本： 10.4.17-MariaDB
-- PHP 版本： 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `resume`
--

-- --------------------------------------------------------

--
-- 資料表結構 `experience`
--

CREATE TABLE `experience` (
  `id` int(11) UNSIGNED NOT NULL,
  `work` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `experience`
--

INSERT INTO `experience` (`id`, `work`, `period`, `detail`) VALUES
(1, '仁寶電腦股份有限公司---採購', '八月 2019 ~ 七月 2020', '1. 料號審核\r\n2. MRO系統料號管理及新建分類\r\n3. 申購單審核及向會計請款'),
(2, '宜家貿易股份有限公司---英文助理', '三月 2015 ~ 三月 2018', '1. 國外新舊客戶書信往來聯繫並回報主管\r\n2. 樣品寄送和後續追蹤\r\n3. 海空運運費估價、製作出貨文件依各國客戶的需求\r\n4. 通知客戶船期和寄送出貨文件\r\n5. 管理和更新客戶資料\r\n6. 國外客戶催款\r\n7. 國外參展名片做市場調查'),
(3, 'Starbucks---吧檯人員', '三月 2012 ~ 三月 2013', '1. 點餐/結帳服務\r\n2. 飲品製作\r\n3. 銷售糕點及商品');

-- --------------------------------------------------------

--
-- 資料表結構 `introductions`
--

CREATE TABLE `introductions` (
  `id` int(11) NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `introductions`
--

INSERT INTO `introductions` (`id`, `text`, `sh`) VALUES
(1, '(TEST!!TEST!!TEST!!!)Hi! My name is Lena, a 27 years old girl. I was born in an ordinary family. I have a brother and I am the first child in my family. As my parents were serious about our character so make me become a responsible, honorable, patient personality.', 0),
(2, 'test2test2test2test2test2test2! hello hello  hello', 0),
(3, '嗨! 我是林湘芸，先前的工作經驗讓我接觸到各式各樣的網站，發現自己對網站設計有興趣，因此展開了網站及程式設計的學習之路，目前持續學習中，任何網頁程式設計的工作都歡迎與我聯絡!', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `reqname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `condi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `job`
--

INSERT INTO `job` (`id`, `reqname`, `condi`, `sh`) VALUES
(1, '地區', '台北、新北、桃園', 0),
(4, '休假制度', '周休二日', 0),
(5, '求職條件', '網頁程式設計師、前/後端程式設計師', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `login`
--

CREATE TABLE `login` (
  `id` int(11) UNSIGNED NOT NULL,
  `acc` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `login`
--

INSERT INTO `login` (`id`, `acc`, `pw`, `create_time`) VALUES
(1, 'admin', '888', '2021-01-12 03:35:21');

-- --------------------------------------------------------

--
-- 資料表結構 `myinfo`
--

CREATE TABLE `myinfo` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth` date NOT NULL,
  `hobby` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` tinyint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `myinfo`
--

INSERT INTO `myinfo` (`id`, `name`, `tel`, `email`, `birth`, `hobby`, `sh`) VALUES
(1, '林湘芸', '0911757785', 'lenalin9977@gmail.com', '1993-06-19', '電影、咖啡、爬山...', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `picture`
--

CREATE TABLE `picture` (
  `id` int(11) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(2) NOT NULL,
  `sh` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `picture`
--

INSERT INTO `picture` (`id`, `img`, `type`, `sh`) VALUES
(1, 'IMG_63542.jpg', 1, 1),
(2, 'photo-1610911331371-1cd19301b9e8.jpg', 0, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `profile`
--

CREATE TABLE `profile` (
  `id` int(11) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `descri` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `profile`
--

INSERT INTO `profile` (`id`, `img`, `descri`, `link`) VALUES
(1, 'img1.jpg', 'testtesttesttest', 'https://www.google.com/');

-- --------------------------------------------------------

--
-- 資料表結構 `skills`
--

CREATE TABLE `skills` (
  `id` int(11) UNSIGNED NOT NULL,
  `ski` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `skills`
--

INSERT INTO `skills` (`id`, `ski`, `percentage`) VALUES
(1, 'HTML', '90%'),
(2, 'CSS', '85%'),
(3, 'Javascript', '80%'),
(4, 'jQuery', '80%'),
(5, 'bootstrap', '85%'),
(6, 'PHP', '80%'),
(7, 'mySQL', '80%'),
(8, 'Illustrator', '75%'),
(9, 'Photoshop', '70%');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `introductions`
--
ALTER TABLE `introductions`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `myinfo`
--
ALTER TABLE `myinfo`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `introductions`
--
ALTER TABLE `introductions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `myinfo`
--
ALTER TABLE `myinfo`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `picture`
--
ALTER TABLE `picture`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
