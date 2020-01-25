-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 24, 2018 at 02:25 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id6971474_az`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(24) NOT NULL,
  `last_log_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `last_log_date`) VALUES
(1, 'mehran', '1234', '2018-09-27');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `a_id` int(11) NOT NULL,
  `a_title` varchar(256) NOT NULL,
  `a_keyword` text NOT NULL,
  `a_category` text NOT NULL,
  `a_date` date NOT NULL,
  `a_cover` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`a_id`, `a_title`, `a_keyword`, `a_category`, `a_date`, `a_cover`) VALUES
(1, 'Grand Theft Auto V', 'gta, gtav, gta 4, gta v, gta 5, grand, grand theft, grand theft auto, grand theft auto 5, grand theft auto v, grand theft auto 4, grand theft auto san andreas, vice city, action', 'action', '2015-04-15', 'gtava.jpg'),
(2, 'Tekken 7', 'tekken, tekken 7, tekken 6, psp, tekken tag 2, street fight x tekken', 'fighting', '2017-06-02', 't7a.jpg'),
(3, 'Grand Theft Auto IV', 'gta, gtav, gta 4, gta v, gta 5, grand, grand theft, grand theft auto, grand theft auto 5, grand theft auto v, grand theft auto 4, grand theft auto san andreas, vice city', 'action', '0000-00-00', 'gtaiva.jpg'),
(4, 'Grand Theft Auto San Andreas', 'gta, gtav, gta 4, gta v, gta 5, grand, grand theft, grand theft auto, grand theft auto 5, grand theft auto v, grand theft auto 4, grand theft auto san andreas, vice city', 'action', '0000-00-00', 'gtasaa.jpg'),
(5, 'Street Fighter X Tekken', 'tekken, tekken 7, tekken 6, psp, tekken tag 2, street fight x tekken, street fighter, street, fighter', 'fighting', '0000-00-00', 'sfxta.jpg'),
(6, 'Need for Speed Payback', 'nfs payback, nfs p, nfs, need for speed, Need for speed payback, payback', 'racing', '0000-00-00', 'nfspa.jpg'),
(7, 'Need for Speed Rivals', 'nfs, nfs rivals, need for speed, need for speed rivals', 'racing', '0000-00-00', 'nfsra.jpg'),
(8, 'Need for Speed Most Wanted 2', 'nfs, nfs mw, nfs mw 2, need for speed, nfs most wanted, nfs most wanted 2, need for speed most wanted', 'racing', '0000-00-00', 'nfsmw2a.jpg'),
(9, 'Need For Speed The Run', 'nfs run, nfs, need for speed, nfs the run, need for speed run, need for speed the run', 'racing', '0000-00-00', 'nfstra.jpg'),
(10, 'Need For Speed Hot Pursuit', 'nfs, nfs hp, need for speed, nfs hot pursit, nfs hot pursuit, nfs hot pursot', 'racing', '0000-00-00', 'nfshpa.jpg'),
(11, 'Need for Speed Shift 2 Unleashed', 'nfs, nfs s2, nfs shift 2, need for speed shift 2', 'racing', '0000-00-00', 'nfss2a.jpg'),
(12, 'Need For Speed Shift', 'nfs, nfs s, nfs shift, need for speed shift ', 'racing', '0000-00-00', 'nfssa.jpg'),
(13, 'Need For Speed Undercover', 'nfs, nfs under cover, nfs undercover, need for speed', 'racing', '0000-00-00', 'nfsua.jpg'),
(14, 'Need for Speed Carbon', 'nfs, nfs carbon, need for speed, need for speed carbon', 'racing', '0000-00-00', 'nfsca.jpg'),
(15, 'Need For Speed Most Wanted', 'nfs, nfs mw, nfs mw, need for speed, nfs most wanted, nfs most wanted, need for speed most wanted', 'racing', '0000-00-00', 'nfsmwa.jpg'),
(16, 'Need for Speed ProStreet', 'nfs, nfs pro street, nfs prostreet, need for speed, need for speed pro, need for speed pro street, need for speed ps, nfs ps', 'racing', '0000-00-00', 'nfspra.jpg'),
(17, 'Call of Duty WWII', 'cod, call of duty, call of duty ww2, cod ww2, call of duty word war 2', 'shooting', '0000-00-00', 'codww2.jpg'),
(18, 'Call of Duty Infinite Warfare', 'cod, call of duty, call of duty iw, cod iw, call of duty infinite warfare, call of duty infinte warfare, call of duty iw', 'shooting', '0000-00-00', 'codiw.jpg'),
(19, 'Call of Duty Modern Warfare Remastered', 'cod, cod 4, cod 4 r, cod mw 1, cod mw 4, cod remastered, call of duty', 'shooting', '0000-00-00', 'cod4r.jpg'),
(20, 'Call of Duty Black Ops III', 'cod, cod bo3, cod bo series, call of duty black ops, call of duty bloack ops 3, call of duty black ops 3, cod black ops 3', 'shooting', '0000-00-00', 'codbo3.jpg'),
(21, 'Call of Duty Advanced Warfare', 'cod, cod aw, call of duty adavnced warefare, cod advanced warfare, call of suty aw, call of duty aw, advanced, warfare, advanced warfare, aw', 'shooting', '0000-00-00', 'codaw.jpg'),
(22, 'Call of Duty Ghosts', 'cod, cod ghosts, call of duty ghosts, ghosts,call of dutty, call of duty', 'shooting', '0000-00-00', 'codg.jpg'),
(23, 'Call of Duty Black Ops II', 'cod, cad, cod bo2, cod boii, call of duty, call of duty black ops 2, cod black ops series, cod bo series', 'shooting', '0000-00-00', 'codbo2.jpg'),
(24, 'Call of Duty Black Ops', 'cod, cad, cod bo1, cod boi, call of duty, call of duty black ops 1, cod black ops series, cod bo series', 'shooting', '0000-00-00', 'codbo1.jpg'),
(25, 'Call of Duty Modern Warfare 3', 'cod, cod mw3, cod modern warfare, cod modern warfare 3, cod mw series, call of duty', 'shooting', '0000-00-00', 'codmw3.jpg'),
(26, 'Call of Duty Modern Warfare 2', 'cod, cod mw3, cod modern warfare, cod modern warfare 2, cod mw series, call of duty', 'shooting', '0000-00-00', 'codmw2.jpg'),
(27, 'Call of Duty 4 Modern Warfare', 'cod, cod mw, cod modern warfare, cod modern warfare , cod mw series, cod mw 1, cod mw 4, call of duty', 'shooting', '0000-00-00', 'cod4.jpg'),
(28, 'Call of Duty World at War', 'cod, call of duty, call of duty ww, cod ww, call of duty word war, world at war, call of duty world at war, cod 5, cod5, ccall of duty 5, call of duty 5', 'shooting', '0000-00-00', 'codww.jpg'),
(29, 'Call of Duty Deluxe Edition', 'cod 1, cod, cod best games, best, games, cod series, cod 2, call of duty 1, call of duty 2', 'shooting', '0000-00-00', 'cod1.jpg'),
(30, 'Assassins Creed 1', 'ac 1, assassincs creed 1, assassins creed, ac, assassins, creed, 1, assassins creed i, assasins creed, assasssins,assassin\'s creed', 'action', '0000-00-00', 'ac1.jpg'),
(31, 'Assassins Creed II', 'ac 2, assassincs creed 2, assassins creed, ac, assassins, creed, 2, assassins creed ii, assasins creed, assasssins,assassin\'s creed', 'action', '0000-00-00', 'ac2.jpg'),
(32, 'Assassins Creed Brotherhood', 'ac b, assassincs creed brother hood, assassins creed brotherhood, ac, assassins, creed, 1, assassins creed b, assasins creed, assasssins,assassin\'s creed', 'action', '0000-00-00', 'acb.jpg'),
(33, 'Assassins Creed Revelations', 'ac r, assassincs creed revelations, assassins creed, ac, assassins, creed, 1, assassins creed revelation, assasins creed, assasssins,assassin\'s creed', 'action', '0000-00-00', 'acr.jpg'),
(34, 'Assassins Creed III', 'ac 3, assassincs creed 3, assassins creed, ac, assassins, creed, 3, assassins creed iii, assasins creed, assasssins,assassin\'s creed', 'action', '0000-00-00', 'ac3.jpg'),
(35, 'Assassins Creed IV', 'ac 4, assassincs creed 4, assassins creed, ac, assassins, creed, 4, assassins creed iv, assasins creed, assasssins, black flag, ac black flag,assassin\'s creed', 'action', '0000-00-00', 'ac4.jpg'),
(36, 'Assassins Creed Liberation', 'ac l, assassincs creed libration, assassins creed, ac, assassins, creed, libration, assassins creed libration, assasins creed, assasssins,assassin\'s creed', 'action', '0000-00-00', 'acl.jpg'),
(37, 'Assassins Creed Rogue', 'ac r, assassincs creed rogue, assassins creed, ac, assassins, creed, rogue, assassins creed ro, assasins creed, assasssins,assassin\'s creed', 'action', '0000-00-00', 'acro.jpg'),
(38, 'Assassins Creed Unity', 'ac u, assassincs creed unity, assassins creed, ac, assassins, creed, unity, assassins creed unity, assasins creed, assasssins,assassin\'s creed', 'action', '0000-00-00', 'acu.jpg'),
(39, 'Assassins Creed Syndicate', 'ac s, assassincs creed syndicate, assassins creed, ac, assassins, creed, syndicate, assassins creed syndicate, assasins creed, assasssins,assassin\'s creed', 'action', '0000-00-00', 'acs.jpg'),
(40, 'Assassins Creed Chronicles China', 'ac cc, assassincs creed Chronicles, assassins creed, ac, assassins, creed, Chronicles,china, assassins creed Chronicles china, assasins creed, assasssins,assassin\'s creed', 'action', '0000-00-00', 'accc.jpg'),
(41, 'Assassins Creed Chronicles India', 'ac ci, assassincs creed india, assassins creed, ac, assassins, creed, india, assassins creed Chronicles India, assasins creed, assasssins,assassin\'s creed', 'action', '0000-00-00', 'acci.jpg'),
(42, 'Assassins Creed Chronicles Russia', 'ac cr, assassincs creed russia, assassins creed, ac, assassins, creed, russia, assassins creed Chronicles Russia, assasins creed, assasssins,assassin\'s creed', 'action', '0000-00-00', 'accr.jpg'),
(43, 'Assassins Creed Origins', 'ac o, assassincs creed origins, assassins creed, ac, assassins, creed, origins, assassins creed origin, assasins creed, assasssins,assassin\'s creed', 'action', '0000-00-00', 'aco.jpg'),
(44, 'Assassins Creed Odyssey', 'ac o,ac od, assassincs creed Odyssey, assassins creed, ac, assassins, creed, Odyssey, assassins creed Odyssey, assasins creed, assasssins,assassin\'s creed', 'action', '0000-00-00', 'acod.jpg'),
(45, 'Jurassic Park The Game', 'Jurassic park, evalution, ?\r\nJurassic World Evolution, park, game', 'adventure', '0000-00-00', 'jpgCove.jpg'),
(46, 'LEGO Jurassic World', 'lego, Jurassic World, park, Jurassic World park, Jurassic park', 'adventure', '0000-00-00', 'ljwC.jpg'),
(47, 'Jurassic World Evolution', 'Jurassic World Evolution, Jurassic World, Jurassic park, park, evolution', 'adventure', '0000-00-00', 'jwe.jpg'),
(48, 'Hitman 2', 'hitman, hitman 2, action, warner bros, stealth, assassin', 'action', '0000-00-00', 'hitman2.jpg'),
(49, 'Shadow Of The Tomb Raider', 'Shadow Of The Tomb Raider, sotr, tomb raider, shadow, shooting, adventure, action, lara, lara croft, rise of tomb raider', 'adventure', '0000-00-00', 'sotr.jpg'),
(50, 'Pro Evolution Soccer 2019', 'Pro Evolution Soccer 2019, pes 2019, fifa, football, messi, ronaldo, Pro Evolution Soccer, fifa 2018, fifa 2017', 'sports', '0000-00-00', 'pes19.jpg'),
(51, 'BioShock Remastered', 'BioShock Remastered, bioshock, bio, shock, bioshock 1, remastered, BioShock Remastered 2', 'shooting', '0000-00-00', 'bsr1.jpg'),
(52, 'BioShock 2 Remastered', 'BioShock 2 Remastered, bio, shock, bio shock, bioshock, bioshock 2, bio shock 2', 'shooting', '0000-00-00', 'bsr2.jpg'),
(53, 'BioShock Infinite', 'BioShock Infinite Complete, BioShock Infinite, BioShock , bioshock, shock, bio, infinte, shooting, horror, complete', 'shooting', '0000-00-00', 'bsi.jpg'),
(54, 'A Way Out', 'A Way Out, way out, way, out, ea, adventure, coop, co-op', 'adventure', '0000-00-00', 'awo.jpg'),
(55, 'Sunset Overdrive', 'Sunset Overdrive, sunset, overdrive, over, drive, Sun, xbox, xbox one', 'action', '0000-00-00', 'sod.jpg'),
(56, 'Darksiders III', 'Darksiders III, 3, Darksiders, action, fighting, dark, siders, adventure', 'adventure', '0000-00-00', 'ds3.jpg'),
(57, 'Rise Of The Tomb Raider', 'Rise Of The Tomb Raider, tom, raider, romb, tomb, tomb raider, tomb riader, rise, of, rise of', 'adventure', '0000-00-00', 'rotr.jpg'),
(58, 'Battlefield 2142', 'Battlefield 2142, battle, field, battlefield, battlfeild, battlfield, battlefeild', 'shooting', '0000-00-00', 'b2142.jpg'),
(59, 'Battlefield Bad Company 2', 'Battlefield Bad Company 2, battlefeild, baattlefield, bad, company, 2, Battlefield Bad Company , Battlefield, battle, feild, field', 'shooting', '0000-00-00', 'bbc2.jpg'),
(60, 'Battlefield 3', 'Battlefield 3, 3, battle, feild, field, bBattlefield 3, Battlefield ', 'shooting', '0000-00-00', 'bf3.jpg'),
(61, 'Battlefield 4', 'Battlefield 4, battle. field, 4, Battlefield , feild', 'shooting', '0000-00-00', 'bf4.jpg'),
(62, 'Battlefield 1', 'Battlefield 1, battle, feild, field, Battlefield , 1', 'shooting', '0000-00-00', 'bf1.jpg'),
(63, 'Battlefield Hardline', 'Battlefield Hardline, Battlefield, Hardline, battle, feild, field, hard, line', 'shooting', '0000-00-00', 'bfh.jpg'),
(64, 'Fifa 19', 'Fifa 19, 19, fifa, football, fif', 'sports', '0000-00-00', 'fifa19.jpg'),
(65, 'WWE 2K19', 'WWE 2K19, wwe, 2019, 2k19, ww', 'fighting', '0000-00-00', 'wwe19.jpg'),
(66, 'Monster Hunter World', 'Monster Hunter World, monster, hunter, world, monster hunter, monster world', 'action', '0000-00-00', 'mhw.jpg'),
(67, 'Max Payne 3', 'Max Payne 3, max, payne, Max Payne ,3', 'shooting', '0000-00-00', 'maxp3.jpg'),
(68, 'Just Cause 4', 'Just Cause 4, just, cause, just cause, 4, case, vauese, ca, use, jus, just, just casue', 'adventure', '0000-00-00', 'jc4.jpg'),
(69, 'Yakuza 0', 'Yakuza 0, Yakuza , yajuza, yakuza, oak, 0, zua, uza, yakuzua', 'action', '0000-00-00', 'yakuza0.jpg'),
(70, 'Battlefield V', 'Battlefield V, battle, field, feild, Battlefield , v, bar, bat, batt, battl', 'shooting', '0000-00-00', 'bfv.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `software`
--

CREATE TABLE `software` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `software`
--

INSERT INTO `software` (`id`, `title`, `keyword`, `cover`, `link`) VALUES
(1, 'Internet Download Manager (IDM) 6.31 ', 'idm, internet downlaod manager, latest crack, idm crack', 'idm.jpg', 'https://usersdrive.com/sqn83scyutx4.html'),
(2, 'FL Studio Producer Edition 20.0.5 Build 681 With Crack', 'fl, fl studio, studio, fl crack, crack, fl studio 20, fl studio 12, image, imageline, image-line', 'fl.jpg', 'https://usersdrive.com/w6cjlgh4jldf.html');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `software`
--
ALTER TABLE `software`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
