-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15-03-17 12:55
-- 서버 버전: 5.6.21
-- PHP 버전: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 데이터베이스: `lant`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `car`
--

CREATE TABLE IF NOT EXISTS `car` (
`idx` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `fuel` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `car`
--

INSERT INTO `car` (`idx`, `name`, `color`, `fuel`, `number`) VALUES
(1, '에쿠스/Equss', '검정', '휘발유', '82허2252'),
(2, '에쿠스/Equss', '검정', '경유', '96허3780'),
(3, '에쿠스/Equss', '검정', '하이브리드', '68허8185'),
(4, '에쿠스/Equss', '흰색', '휘발유', '72허6271'),
(5, '에쿠스/Equss', '흰색', '경유', '72허8020'),
(6, '에쿠스/Equss', '흰색', '하이브리드', '72허1268'),
(7, '에쿠스/Equss', '회색', '휘발유', '85허5271'),
(8, '에쿠스/Equss', '회색', '경유', '36허2555'),
(9, '에쿠스/Equss', '회색', '하이브리드', '35허3917'),
(10, '에쿠스/Equss', '빨간색', '휘발유', '30허5299'),
(11, '에쿠스/Equss', '빨간색', '경유', '67허9945'),
(12, '에쿠스/Equss', '빨간색', '하이브리드', '72허2238'),
(13, '제네시스/Genesis', '검정', '휘발유', '85허3774'),
(14, '제네시스/Genesis', '검정', '경유', '76허4542'),
(15, '제네시스/Genesis', '검정', '하이브리드', '86허7072'),
(16, '제네시스/Genesis', '흰색', '휘발유', '76허3299'),
(17, '제네시스/Genesis', '흰색', '경유', '41허1575'),
(18, '제네시스/Genesis', '흰색', '하이브리드', '55허5657'),
(19, '제네시스/Genesis', '회색', '휘발유', '25허3751'),
(20, '제네시스/Genesis', '회색', '경유', '78허9257'),
(21, '제네시스/Genesis', '회색', '하이브리드', '32허7543'),
(22, '제네시스/Genesis', '빨간색', '휘발유', '49허5150'),
(23, '제네시스/Genesis', '빨간색', '경유', '19허3356'),
(24, '제네시스/Genesis', '빨간색', '하이브리드', '25허7658'),
(25, '그랜져/Grandeur', '검정', '휘발유', '79허5942'),
(26, '그랜져/Grandeur', '검정', '경유', '18허5982'),
(27, '그랜져/Grandeur', '검정', '하이브리드', '97허6702'),
(28, '그랜져/Grandeur', '흰색', '휘발유', '26허8016'),
(29, '그랜져/Grandeur', '흰색', '경유', '31허7676'),
(30, '그랜져/Grandeur', '흰색', '하이브리드', '76허1211'),
(31, '그랜져/Grandeur', '회색', '휘발유', '38허4826'),
(32, '그랜져/Grandeur', '회색', '경유', '13허7679'),
(33, '그랜져/Grandeur', '회색', '하이브리드', '99허6962'),
(34, '그랜져/Grandeur', '빨간색', '휘발유', '99허2587'),
(35, '그랜져/Grandeur', '빨간색', '경유', '77허4582'),
(36, '그랜져/Grandeur', '빨간색', '하이브리드', '53허8621'),
(37, '소나타/Sonata', '검정', '휘발유', '44허1104'),
(38, '소나타/Sonata', '검정', '경유', '11허2294'),
(39, '소나타/Sonata', '검정', '하이브리드', '66허5300'),
(40, '소나타/Sonata', '흰색', '휘발유', '26허7422'),
(41, '소나타/Sonata', '흰색', '경유', '46허8355'),
(42, '소나타/Sonata', '흰색', '하이브리드', '20허2861'),
(43, '소나타/Sonata', '회색', '휘발유', '21허4481'),
(44, '소나타/Sonata', '회색', '경유', '97허6343'),
(45, '소나타/Sonata', '회색', '하이브리드', '20허1819'),
(46, '소나타/Sonata', '빨간색', '휘발유', '32허8166'),
(47, '소나타/Sonata', '빨간색', '경유', '14허5386'),
(48, '소나타/Sonata', '빨간색', '하이브리드', '68허4801'),
(49, '싼타페/Santafe', '검정', '휘발유', '75허9312'),
(50, '싼타페/Santafe', '검정', '경유', '28허8286'),
(51, '싼타페/Santafe', '검정', '하이브리드', '34허7402'),
(52, '싼타페/Santafe', '흰색', '휘발유', '35허3916'),
(53, '싼타페/Santafe', '흰색', '경유', '11허4061'),
(54, '싼타페/Santafe', '흰색', '하이브리드', '29허5695'),
(55, '싼타페/Santafe', '회색', '휘발유', '75허8323'),
(56, '싼타페/Santafe', '회색', '경유', '40허3502'),
(57, '싼타페/Santafe', '회색', '하이브리드', '23허5834'),
(58, '싼타페/Santafe', '빨간색', '휘발유', '64허4850'),
(59, '싼타페/Santafe', '빨간색', '경유', '40허1419'),
(60, '싼타페/Santafe', '빨간색', '하이브리드', '42허1024'),
(61, '그랜드 스타렉스/Grand Starex', '검정', '휘발유', '99허5624'),
(62, '그랜드 스타렉스/Grand Starex', '검정', '경유', '73허1414'),
(63, '그랜드 스타렉스/Grand Starex', '검정', '하이브리드', '97허4989'),
(64, '그랜드 스타렉스/Grand Starex', '흰색', '휘발유', '33허1821'),
(65, '그랜드 스타렉스/Grand Starex', '흰색', '경유', '18허8533'),
(66, '그랜드 스타렉스/Grand Starex', '흰색', '하이브리드', '83허6699'),
(67, '그랜드 스타렉스/Grand Starex', '회색', '휘발유', '73허2185'),
(68, '그랜드 스타렉스/Grand Starex', '회색', '경유', '41허1236'),
(69, '그랜드 스타렉스/Grand Starex', '회색', '하이브리드', '92허3852'),
(70, '그랜드 스타렉스/Grand Starex', '빨간색', '휘발유', '68허4771'),
(71, '그랜드 스타렉스/Grand Starex', '빨간색', '경유', '26허7908'),
(72, '그랜드 스타렉스/Grand Starex', '빨간색', '하이브리드', '69허7439');

-- --------------------------------------------------------

--
-- 테이블 구조 `reserve`
--

CREATE TABLE IF NOT EXISTS `reserve` (
`idx` int(11) NOT NULL,
  `id` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `fuel` varchar(100) NOT NULL,
  `car` varchar(100) NOT NULL,
  `s_date` varchar(100) NOT NULL,
  `e_date` varchar(100) NOT NULL,
  `type` varchar(122) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `reserve`
--

INSERT INTO `reserve` (`idx`, `id`, `color`, `fuel`, `car`, `s_date`, `e_date`, `type`) VALUES
(1, 'admin', 'black', 'gas', 'car1', '2015-03-30', '2015-03-31', 'return'),
(2, 'admin', 'black', 'gas', 'car1', '2015-03-30', '2015-03-31', ''),
(3, 'admin', 'black', 'gas', 'car2', '2015-03-24', '2015-04-21', '');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `car`
--
ALTER TABLE `car`
 ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `reserve`
--
ALTER TABLE `reserve`
 ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `car`
--
ALTER TABLE `car`
MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=73;
--
-- 테이블의 AUTO_INCREMENT `reserve`
--
ALTER TABLE `reserve`
MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
