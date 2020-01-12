-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14-08-23 14:38
-- 서버 버전: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rent`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `car`
--

CREATE TABLE IF NOT EXISTS `car` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `carname` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `fuel` varchar(100) NOT NULL,
  `carnum` varchar(100) NOT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=73 ;

--
-- 테이블의 덤프 데이터 `car`
--

INSERT INTO `car` (`idx`, `carname`, `color`, `fuel`, `carnum`) VALUES
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
-- 테이블 구조 `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `sTitle` varchar(100) NOT NULL,
  `mTitle` varchar(100) NOT NULL,
  `mod` int(11) NOT NULL,
  `sod` int(11) DEFAULT NULL,
  `porder` varchar(100) NOT NULL,
  `maxLv` int(11) NOT NULL,
  `minLv` int(11) NOT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 테이블의 덤프 데이터 `menu`
--

INSERT INTO `menu` (`idx`, `sTitle`, `mTitle`, `mod`, `sod`, `porder`, `maxLv`, `minLv`) VALUES
(1, 'intro', '회사소개', 1, NULL, 'intro', 3, 0),
(2, 'guide', '대여가이드', 2, NULL, 'guide', 3, 0),
(3, 'reserve', '온라인예약', 3, NULL, 'reserve', 3, 1),
(4, 'search', '차량검색', 4, NULL, 'search', 3, 0),
(5, 'intro', '회사소개', 1, 1, 'intro', 3, 0),
(6, 'way', '찾아오시는 길', 1, 2, 'intro', 3, 0),
(7, 'guide', '대여안내', 2, 1, 'guide', 3, 0),
(8, 'car', '차량안내', 2, 2, 'guide', 3, 0),
(9, 'reserve', '예약하기', 3, 1, 'reserve', 3, 1),
(10, 'list', '예약목록', 3, 2, 'reserve', 3, 1),
(12, 'search', '차량검색', 4, 1, 'search', 3, 0);

-- --------------------------------------------------------

--
-- 테이블 구조 `reserve`
--

CREATE TABLE IF NOT EXISTS `reserve` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `color` varchar(100) NOT NULL,
  `num` varchar(122) NOT NULL,
  `fuel` varchar(100) NOT NULL,
  `start` varchar(110) NOT NULL,
  `end` varchar(110) NOT NULL,
  `name` varchar(100) NOT NULL,
  `carnum` varchar(100) NOT NULL,
  `src` varchar(111) NOT NULL,
  `chk` int(11) NOT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- 테이블의 덤프 데이터 `reserve`
--

INSERT INTO `reserve` (`idx`, `color`, `num`, `fuel`, `start`, `end`, `name`, `carnum`, `src`, `chk`) VALUES
(15, 'black', '2번차', 'hiv', '2014-08-26', '2014-08-28', 'admin', '12허 2933', '/img/reserve2.jpg', 1),
(16, 'black', '2번차', 'hiv', '2014-08-28', '2014-08-29', 'admin', '30허4315', '/img/reserve2.jpg', 0);

-- --------------------------------------------------------

--
-- 테이블 구조 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `idx` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id` varchar(100) NOT NULL,
  `pw` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 테이블의 덤프 데이터 `user`
--

INSERT INTO `user` (`idx`, `id`, `pw`, `email`, `phone`) VALUES
(1, 'admin', '1234', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
