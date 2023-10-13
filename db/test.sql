-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2023 at 01:50 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `pic` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `name`, `pic`) VALUES
(3, 'Honey singh', 'honey.jpg'),
(4, 'atif aslam', 'atif.jpg'),
(6, 'Badshah', 'badshah.jpg'),
(7, 'Neha kakkar', 'neha.jpg'),
(8, 'Ali zaffer', 'ali.jpg'),
(9, 'Zayn Malik', 'zayn.jpg'),
(10, 'Justin Biber', 'justin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pic` varchar(300) NOT NULL,
  `description` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `name`, `pic`, `description`) VALUES
(1, 'Zayn Malik', 'zayn.jpg', 'https://starsunfolded.com/zayn-malik/'),
(2, 'Justin biber', 'justin.jpg', 'https://wikibio.in/justin-bieber/'),
(3, 'Atif Aslam', 'atif.jpg', 'https://wikibio.in/atif-aslam/'),
(4, 'Neha Kakkar', 'Neha-Kakkar-4.jpg', 'https://wikibio.in/neha-kakkar/'),
(5, 'Ali Zafar', 'ali.jpg', 'https://wikibio.in/ali-zafar/'),
(6, 'Badshah', 'badshaha.jpg', 'https://wikibio.in/badshah-rapper/'),
(7, 'Yo Yo Honey Singh', 'yoyo.jpg', 'https://wikibio.in/yo-yo-honey-singh/');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pic` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `name`, `pic`) VALUES
(5, 'Blues', 'jazzmusic.jpg'),
(6, 'Jazz', 'jazz.jpg'),
(7, 'Rhythm', 'rhy.jpg'),
(8, 'Rock & Roll', 'rock.jpg'),
(9, 'Rock', 'rock-2.jpg'),
(10, 'Country', 'contry.jpg'),
(11, 'Soul', 'soul.jpg'),
(12, 'Dance', 'dance.jpg'),
(13, 'Hip Hop', 'hip.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `pic` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `name`, `pic`) VALUES
(1, 'hindi', 'hindisongs.jpg'),
(2, 'english', 'en.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `latesthomepage`
--

CREATE TABLE `latesthomepage` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `cover` varchar(300) NOT NULL,
  `year` int(11) NOT NULL,
  `file` varchar(400) NOT NULL,
  `video` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `latesthomepage`
--

INSERT INTO `latesthomepage` (`id`, `name`, `artist`, `cover`, `year`, `file`, `video`) VALUES
(1, 'AAJ PHIR ', 'shrey singhal', 'aaj.jpg', 2022, 'y2mate.com - AAJ PHIR  Shrey Singhal  Akaisha Vats  Anshul Garg  Latest Hindi Song 2022.mp3', 'y2mate.com - AAJ PHIR  Shrey Singhal  Akaisha Vats  Anshul Garg  Latest Hindi Song 2022_v720P.mp4'),
(3, 'Mousam', 'Nikk', 'nikk.jpg', 2022, 'y2mate.com - Mousam By NIKK Official Video  Latest Hindi Songs 2022  New Hindi Song 2022.mp3', 'Mousam By NIKK (Official Video) - Latest Hindi Songs 2022 - New Hindi Song 2022.mp4'),
(4, 'Manika Thank God', 'yohani', 'mani.jpg', 2022, 'y2mate.com - ManikeThank God  Nora Fatehi Sidharth M  TanishkYohaniJubinSurya R  Rashmi Virag  Bhushan K.mp3', 'y2mate.com - ManikeThank God  Nora Fatehi Sidharth M  TanishkYohaniJubinSurya R  Rashmi Virag  Bhushan K_480p.mp4'),
(5, 'Shayad love aj kal', 'Arjit singh', 'shayad.jpg', 2022, 'y2mate.com - Shayad  Love Aaj Kal  Kartik  Sara  Arushi  Pritam  Arijit Singh.mp3', 'y2mate.com - Shayad  Love Aaj Kal  Kartik  Sara  Arushi  Pritam  Arijit Singh_720p.mp4'),
(6, 'Tumhe Dil Paras ', 'Raj berman', 'tum.jpg', 2022, 'y2mate.com - Tumhe Dil  Paras Arora  Sanchi Rai  Raj Barman  Danish Sabri  Zee Music Originals.mp3', 'y2mate.com - Tumhe Dil  Paras Arora  Sanchi Rai  Raj Barman  Danish Sabri  Zee Music Originals_480p.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `id` int(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`id`, `name`, `rate`) VALUES
(1, 'kn', 2.9);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Confirmpassword` varchar(40) NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `Name`, `Email`, `Password`, `Confirmpassword`, `role`) VALUES
(32, 'ahmed', 'ahmed@gmil.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', 'admin'),
(33, 'raza', 'raza@gmil.com', '7815696ecbf1c96e6894b779456d330e', '7815696ecbf1c96e6894b779456d330e', 'visitor');

-- --------------------------------------------------------

--
-- Table structure for table `sound`
--

CREATE TABLE `sound` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `cover` varchar(300) NOT NULL,
  `year` int(11) NOT NULL,
  `file` varchar(400) NOT NULL,
  `video` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sound`
--

INSERT INTO `sound` (`id`, `name`, `category`, `artist`, `cover`, `year`, `file`, `video`) VALUES
(2, 'Ajnabi song', 'Rock', 'Atif Aslam ', 'ati-ajni-1.jpg', 2021, 'y2mate.com - Ajnabi  Official Music Video  Atif Aslam Ft Mahira Khan.mp3', 'Jee Len De ( Lyrical ) _ Atif Aslam _ R.A.W _ John Abraham _ Mouni Roy _ Latest Punjabi Full Song HQ.mp4'),
(7, 'Baarishein Song', 'Blues', 'Atif Aslam ', 'Baarishein Song.jpg', 2019, 'y2mate.com - BAARISHEIN Song  Arko Feat Atif Aslam   Nushrat Bharucha  New Romantic Song 2019  TSeries.mp3', 'y2mate.com - BAARISHEIN Song  Arko Feat Atif Aslam   Nushrat Bharucha  New Romantic Song 2019  TSeries_v720P.mp4'),
(8, 'Chelo To Kat Hi Jayega Song', 'Rhythm', 'Atif Aslam ', 'Chelo To Kat Hi Jayega Song.jpg', 0, 'y2mate.com - Chale To Kat Hi Jayega  Atif Aslam  Musarrat Nazeer  Sufiscore  Latest Atif Aslam Song Video (1).mp3', 'y2mate.com - Chale To Kat Hi Jayega  Atif Aslam  Musarrat Nazeer  Sufiscore  Latest Atif Aslam Song Video_720p.mp4'),
(9, 'Dill Jalane Ki Baat Song', 'Rock', 'Atif Aslam ', 'Dill Jalane Ki Baat Song.jpg', 0, 'y2mate.com - Dil Jalane Ki Baat  Atif Aslam  Latest Romantic Song 2021  Sufiscore.mp3', 'y2mate.com - Dil Jalane Ki Baat  Atif Aslam  Latest Romantic Song 2021  Sufiscore_v720P.mp4'),
(10, 'Rafta RAfta Song', '', '', 'Rafta RAfta Song.jpg', 2021, 'y2mate.com - Rafta Rafta  Official Music Video  Atif Aslam Ft Sajal Ali  Tarish Music.mp3', 'y2mate.com - Rafta Rafta  Official Music Video  Atif Aslam Ft Sajal Ali  Tarish Music_v720P.mp4'),
(11, 'Jee Len De Song', 'Blues', 'Atif Aslam ', 'Jee Len De Song.jpg', 2019, 'y2mate.com - Jee Len De  Lyrical   Atif Aslam  RAW  John Abraham  Mouni Roy  Latest Punjabi Full Song HQ.mp3', 'Jee Len De ( Lyrical ) _ Atif Aslam _ R.A.W _ John Abraham _ Mouni Roy _ Latest Punjabi Full Song HQ.mp4'),
(12, 'Ehsaan Song', 'Rhythm', 'Atif Aslam ', 'Ehsaan Song.jpg', 2019, 'y2mate.com - Ehsaan Itna saa karde   By Atif Aslam.mp3', 'y2mate.com - Ehsaan Itna saa karde   By Atif Aslam_360p.mp4'),
(13, 'Hona tha pyar', 'Dance', 'Atif Aslam ', 'Hona tha pyar.jpg', 2019, 'y2mate.com - Hona Tha Pyar Full Video  Bol  Atif Aslam  Mahira Khan  Atif Aslam  Hadiqa Kiani.mp3', 'y2mate.com - Hona Tha Pyar Full Video  Bol  Atif Aslam  Mahira Khan  Atif Aslam  Hadiqa Kiani_720p.mp4'),
(14, 'Hum Kis Galli Jaa Rahe Hai', '', 'Atif Aslam ', 'Hum Kis Galli Jaa Rahe Hai.jpg', 2018, 'y2mate.com - Hum Kis Galli Jaa Rahe Hai  Doorie  Feat Atif Aslam Neeru Bajwa  Sachin Gupta  Atif Hits.mp3', 'y2mate.com - Hum Kis Galli Jaa Rahe Hai  Doorie  Feat Atif Aslam Neeru Bajwa  Sachin Gupta  Atif Hits_v720P.mp4'),
(15, 'Jaane Laga Hoon', 'Rock & Roll', 'Atif Aslam ', 'Jaane Laga Hoon.jpg', 2013, 'y2mate.com - Jeene Laga Hoon Lyrical  Ramaiya Vastavaiya  Girish Kumar Shruti Haasan  Atif Aslam.mp3', 'y2mate.com - Jeene Laga Hoon Lyrical  Ramaiya Vastavaiya  Girish Kumar Shruti Haasan  Atif Aslam_720p.mp4'),
(16, 'Kuch Is Tarah ', 'Soul', 'Atif Aslam ', 'Kuch Is Tarah .jpg', 0, 'y2mate.com - Kuch Is Tarah Lyrical  Doorie  Atif Aslam  Mithoon  Atif Aslam.mp3', 'y2mate.com - Kuch Is Tarah Lyrical  Doorie  Atif Aslam  Mithoon  Atif Aslam_480p.mp4'),
(17, 'Paharon KI Qasam', 'Jazz', 'Ali Zafar', 'Paharon KI Qasam.jpg', 2021, 'y2mate.com - Paharon Ki Qasam  Ali Zafar  A Tribute To Ali Sadpara  Official Video.mp3', 'y2mate.com - Paharon Ki Qasam  Ali Zafar  A Tribute To Ali Sadpara  Official Video_720p.mp4'),
(18, 'Allay Munja Mar Wara', 'Rhythm', 'Ali Zafar', 'Allay Munja Mar Wara.jpg', 2021, 'y2mate.com - Allay Munja Mar Wara  Ali Zafar ft Urooj Fatima  Abid Brohi  Lightingale Records.mp3', 'y2mate.com - Allay Munja Mar Wara  Ali Zafar ft Urooj Fatima  Abid Brohi  Lightingale Records_v720P.mp4'),
(19, 'Jee Dhoondta Hai', 'Jazz', 'Ali Zafar', 'Jee Dhoondta Hai.jpg', 2011, 'y2mate.com - Ali Zafar  Jee Dhoondta Hai  Official Music Video.mp3', 'y2mate.com - Ali Zafar  Jee Dhoondta Hai  Official Music Video_480p.mp4'),
(20, 'Jhoom Songs', 'Rock & Roll', 'Ali Zafar', 'Jhoom Songs.jpg', 2010, 'y2mate.com - Ali Zafar  Jhoom  Official Video.mp3', 'y2mate.com - Ali Zafar  Jhoom  Official Video_480p.mp4'),
(21, 'Aik Pal Huqa Pani', 'Rhythm', 'Ali Zafar', 'Aik Pal Huqa.jpg', 2011, 'y2mate.com - Ali Zafar I Aik Pal I Huqa Pani I Ali Zafars Debut album.mp3', 'y2mate.com - Ali Zafar I Aik Pal I Huqa Pani I Ali Zafars Debut album_480p.mp4'),
(22, 'Chonno Song', 'Rock & Roll', 'Ali Zafar', 'Chonno Song.jpg', 2011, 'y2mate.com - Ali Zafar I Channo I Huqa Pani I Ali Zafars Debut album.mp3', 'y2mate.com - Ali Zafar I Channo I Huqa Pani I Ali Zafars Debut album_480p.mp4'),
(23, 'Dekha Jo Teri Aankhon Mein Deewana Ho gaya', 'Blues', 'Ali Zafar', 'Dekha.jpg', 2010, 'y2mate.com - Dekha Jo Teri Aankhon Mein Deewana Ho GayaAli Zafar.mp3', 'y2mate.com - Dekha Jo Teri Aankhon Mein Deewana Ho GayaAli Zafar_480p.mp4'),
(24, 'Teefa In Trouble Sajna Door', 'Dance', 'Ali Zafar', 'Teefa In Trouble Sajna Door.jpg', 2018, 'y2mate.com - Teefa In Trouble  Sajna Door  Video Song  Ali Zafar  Aima Baig  Maya Ali  Faisal Qureshi.mp3', 'y2mate.com - Teefa In Trouble  Sajna Door  Video Song  Ali Zafar  Aima Baig  Maya Ali  Faisal Qureshi_v720P.mp4'),
(25, 'Total Siyapaa Nahin Maloom', 'Hip Hop', 'Ali Zafar', 'Total Siyapaa Nahin Maloom.jpg', 0, 'y2mate.com - Total Siyapaa  Nahin Maloom  Full Video Song  Ali Zafar Yami Gautam.mp3', 'y2mate.com - Total Siyapaa  Nahin Maloom  Full Video Song  Ali Zafar Yami Gautam_v720P.mp4'),
(26, 'Bad Boy x Bad Girl', 'Dance', 'Badshah', 'Bad Boy x Bad Girl.jpg', 2021, 'y2mate.com - Badshah  Bad Boy x Bad Girl Official Video  Mrunal Thakur  Nikhita Gandhi  Trending Song 2021.mp3', 'y2mate.com - Badshah  Bad Boy x Bad Girl Official Video  Mrunal Thakur  Nikhita Gandhi  Trending Song 2021_720p.mp4'),
(27, 'Chamkeela Chehra', 'Hip Hop', 'Badshah', 'Chamkeela Chehra.jpg', 2022, 'y2mate.com - Badshah  Chamkeela Chehra Official Video.mp3', 'y2mate.com - Badshah  Chamkeela Chehra Official Video_v720P.mp4'),
(28, 'Panni Panni Jacqueline', 'Dance', 'Badshah', 'Panni Panni Jacqueline.jpg', 2021, 'y2mate.com - Badshah  Paani Paani  Jacqueline Fernandez  Official Music Video  Aastha Gill  Trending Songs.mp3', 'y2mate.com - Badshah  Paani Paani  Jacqueline Fernandez  Official Music Video  Aastha Gill  Trending Songs_720p.mp4'),
(29, 'X Karan Aujla Players', 'Dance', '', 'X Karan Aujla Players.jpg', 2022, 'y2mate.com - Badshah X Karan Aujla  Players Official Video  300 AM Sessions.mp3', 'y2mate.com - Badshah X Karan Aujla  Players Official Video  300 AM Sessions_720p.mp4'),
(30, 'Halla Halla', 'Dance', 'Badshah', 'Halla Halla.jpg', 2022, 'y2mate.com - HALLA HALLA  Badshah  International League T20 2023 Official Anthem.mp3', 'y2mate.com - HALLA HALLA  Badshah  International League T20 2023 Official Anthem_v720P.mp4'),
(31, 'Tauba Song', 'Dance', 'Badshah', 'Tauba Song.jpg', 2022, 'y2mate.com - Tauba  Offical Music Video  Payal Dev  Badshah  Malavika Mohanan.mp3', 'y2mate.com - Tauba  Offical Music Video  Payal Dev  Badshah  Malavika Mohanan_720p.mp4'),
(32, 'Dj Waley Babu Feat Aastha Gill', 'Dance', 'Badshah', 'Dj Waley Babu Feat Aastha Gill.jpg', 2020, 'y2mate.com - Badshah  DJ Waley Babu  feat Aastha Gill  Party Anthem Of 2015  DJ Wale Babu.mp3', 'y2mate.com - Badshah  DJ Waley Babu  feat Aastha Gill  Party Anthem Of 2015  DJ Wale Babu_720p.mp4'),
(33, 'Bhare Bazaar', 'Rock', 'Badshah', 'Bhare Bazaar.jpg', 2018, 'y2mate.com - Bhare Bazaar  Namaste England Arjun Parineeti Badshah Rishi Rich Vishal Dadlani Payal Dev.mp3', 'y2mate.com - Bhare Bazaar  Namaste England Arjun Parineeti Badshah Rishi Rich Vishal Dadlani Payal Dev_v720P.mp4'),
(34, 'Saiyaan Ji', 'Rock', 'Yo Yo Honey Singh', 'Saiyaan Ji.jpg', 2021, 'y2mate.com - Saiyaan Ji  Yo Yo Honey Singh Neha KakkarNushrratt Bharuccha  Lil G Hommie D Mihir GBhushan K.mp3', 'y2mate.com - Saiyaan Ji  Yo Yo Honey Singh Neha KakkarNushrratt Bharuccha  Lil G Hommie D Mihir GBhushan K_720p.mp4'),
(35, 'ABCD Yaariyan', 'Blues', 'Yo Yo Honey Singh', 'ABCD Yaariyan.jpg', 2015, 'y2mate.com - ABCD Yaariyan Feat Yo Yo Honey Singh Full Video Song  Himansh Kohli Rakul Preet  Pritam.mp3', 'y2mate.com - ABCD Yaariyan Feat Yo Yo Honey Singh Full Video Song  Himansh Kohli Rakul Preet  Pritam_v720P.mp4'),
(36, 'Blue Eyes', 'Rock & Roll', 'Yo Yo Honey Singh', 'Blue Eyes.jpg', 2013, 'y2mate.com - Blue Eyes Full Video Song Yo Yo Honey Singh  Blockbuster Song Of 2013.mp3', 'y2mate.com - Blue Eyes Full Video Song Yo Yo Honey Singh  Blockbuster Song Of 2013_720p.mp4'),
(37, 'Call Aundi', 'Rhythm', 'Yo Yo Honey Singh', 'Call Aundi.jpg', 2013, 'y2mate.com - Call Aundi Video Song  ZORAWAR  Yo Yo Honey Singh  TSeries.mp3', 'y2mate.com - Call Aundi Video Song  ZORAWAR  Yo Yo Honey Singh  TSeries_v720P.mp4'),
(38, '12 Ladke', 'Dance', 'Neha Kakkar', '12.jpg', 2022, 'y2mate.com - 12 Ladke  Tony Kakkar  Neha Kakkar  Official Music Video.mp3', 'y2mate.com - 12 Ladke  Tony Kakkar  Neha Kakkar  Official Music Video_720p.mp4'),
(39, 'Dil ko Karrar aaya', 'Dance', 'Neha Kakkar', 'Dil ko Karrar aaya.jpg', 2021, 'y2mate.com - DIL KO KARRAR AAYA Reprise  Neha Kakkar  Rajat Nagpal  Rana  Anshul Garg  Hindi Song 2021.mp3', 'y2mate.com - DIL KO KARRAR AAYA Reprise  Neha Kakkar  Rajat Nagpal  Rana  Anshul Garg  Hindi Song 2021_720p.mp4'),
(40, 'Do Gallan', 'Hip Hop', 'Neha Kakkar', 'Do Gallan.jpg', 2021, 'y2mate.com - DO GALLAN  Neha Kakkar  Rohanpreet Singh  Garry Sandhu  Anshul Garg  Latest Punjabi Song 2021 .mp3', 'y2mate.com - DO GALLAN  Neha Kakkar  Rohanpreet Singh  Garry Sandhu  Anshul Garg  Latest Punjabi Song 2021 _v720P.mp4'),
(41, 'La La La', 'Rock', 'Neha Kakkar', 'La La La.jpg', 2013, 'y2mate.com - LA LA LA  Neha Kakkar  Rohanpreet Singh  Rajat Nagpal  Anshul Garg  Latest Punjabi Song 2022.mp3', 'y2mate.com - LA LA LA  Neha Kakkar  Rohanpreet Singh  Rajat Nagpal  Anshul Garg  Latest Punjabi Song 2022_v720P.mp4'),
(42, 'O Sajna song', 'Dance', 'Neha Kakkar', 'O Sajna song.jpg', 2022, 'y2mate.com - Neha Kakkar O Sajna  Priyank Sharma Dhanashree Verma  Tanishk Bagchi Jaani  Bhushan Kumar.mp3', 'y2mate.com - Neha Kakkar O Sajna  Priyank Sharma Dhanashree Verma  Tanishk Bagchi Jaani  Bhushan Kumar_720p.mp4'),
(43, 'Baarish Song', 'Jazz', 'Neha Kakkar', 'Baarish Song.jpg', 2020, 'y2mate.com - Baarish  Full Video  Neha Kakkar   Bilal Saeed   Desi Music Factory.mp3', 'y2mate.com - Baarish  Full Video  Neha Kakkar   Bilal Saeed   Desi Music Factory_v720P.mp4'),
(44, 'Ring Song', 'Blues', 'Neha Kakkar', 'Ring.jpg', 2019, 'y2mate.com - Neha Kakkar Ring Song  Jatinder Jeetu  Surjit Khairhwala  New Punjabi Song 2017  TSeries.mp3', 'y2mate.com - Neha Kakkar Ring Song  Jatinder Jeetu  Surjit Khairhwala  New Punjabi Song 2017  TSeries_v720P.mp4'),
(45, 'Chand Mera Naraar Hai', 'Rock & Roll', 'Neha Kakkar', 'Chand Mera Naraar Hai.jpg', 2017, 'y2mate.com - Chaand Mera Naraaz Hai  Tony Kakkar  Neha Kakkar  Tony Kakkar Sessions.mp3', 'y2mate.com - Chaand Mera Naraaz Hai  Tony Kakkar  Neha Kakkar  Tony Kakkar Sessions_v720P.mp4'),
(46, 'Baby baby', 'Rock', 'Justin biber', 'jst.jpg', 2010, 'y2mate.com - Justin Bieber  Baby ft Ludacris.mp3', 'y2mate.com - Justin Bieber  Baby ft Ludacris_480p.mp4'),
(47, 'Beauty and a beat', 'Jazz', 'Justin biber', 'jbt.jpg', 2012, 'y2mate.com - Justin Bieber  Beauty And A Beat ft Nicki Minaj Official Music Video.mp3', 'y2mate.com - Justin Bieber  Beauty And A Beat ft Nicki Minaj Official Music Video_480p.mp4'),
(48, 'Zayn Taylor Swift', 'Blues', 'Zayn Malick', 'zts.jpg', 2017, 'y2mate.com - ZAYN Taylor Swift  I Dont Wanna Live Forever Fifty Shades Darker.mp3', 'y2mate.com - ZAYN Taylor Swift  I Dont Wanna Live Forever Fifty Shades Darker_480p.mp4'),
(49, '', 'Rock & Roll', 'Zayn malick', 'zp.jpg', 2016, 'y2mate.com - ZAYN  PILLOWTALK.mp3', 'y2mate.com - ZAYN  PILLOWTALK_480p.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comments`
--

CREATE TABLE `tbl_comments` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `comment_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comments`
--

INSERT INTO `tbl_comments` (`id`, `name`, `comment`, `comment_time`) VALUES
(1, 'Ryan', 'My favourite.\r\n', '2023-01-26 09:55:21'),
(2, 'Rohan', 'a good one.', '2023-01-26 09:57:45'),
(3, 'Sufian', 'Awsome', '2023-01-26 09:58:20'),
(4, 'Jibon', 'Greet work!!!', '2023-01-26 09:59:08'),
(5, 'Sohail', 'I love music', '2023-01-26 09:59:27'),
(6, 'ali', 'good for music', '2023-01-26 09:59:46'),
(7, 'aliyan', 'nice songs', '2023-01-26 07:50:38'),
(8, 'akhter', 'awesome', '2023-01-26 09:20:28'),
(9, 'mehmeer', 'nice', '2023-01-26 09:45:46'),
(10, 'alishan', 'hit songs!!', '2023-01-26 10:06:43'),
(11, 'Atif Aslam', 'love song', '2023-02-07 16:26:03'),
(12, 'ahmed', 'love song\r\n', '2023-02-07 16:41:24'),
(13, 'raza ', 'good for music\r\n', '2023-02-07 16:53:55');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pass`, `phone`, `address`) VALUES
(1, 'Fatima', 'fatima@gmail.com', '12345', 3453252181, 'North Nazimabad'),
(4, 'dania', 'dania@gmail.com', '124', 3453252181, 'north nazimabad');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `id` int(11) NOT NULL,
  `name` varchar(99) NOT NULL,
  `pic` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`id`, `name`, `pic`) VALUES
(7, '2021', '2021.jpg'),
(8, '2020', '2020.jpg'),
(9, '2019', '2019.jpg'),
(10, '2018', '2018.jpg'),
(11, '2017', '2017.jpg'),
(12, '2016', '2016.jpg'),
(13, '2015', '2015.jpg'),
(14, '2014', '2014.jpg'),
(15, '2013', '2013.jpg'),
(16, '2012', '2012.jpg'),
(17, '2011', '2011.jpg'),
(18, '2010', '2010.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latesthomepage`
--
ALTER TABLE `latesthomepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sound`
--
ALTER TABLE `sound`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `latesthomepage`
--
ALTER TABLE `latesthomepage`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `sound`
--
ALTER TABLE `sound`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
