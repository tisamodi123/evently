-- ==========================================================
-- Database Structure & Seed Data for Evently Marketplace
-- Database: `evently`
-- Framework: CodeIgniter 3 (PHP & MySQL)
-- ==========================================================

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Table structure for table `tblstate`
--
CREATE TABLE IF NOT EXISTS `tblstate` (
  `stateid` int(11) NOT NULL AUTO_INCREMENT,
  `statename` varchar(100) NOT NULL,
  PRIMARY KEY (`stateid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblstate`
--
INSERT INTO `tblstate` (`stateid`, `statename`) VALUES
(1, 'Gujarat'),
(2, 'Maharashtra'),
(3, 'Delhi'),
(4, 'Karnataka');

-- --------------------------------------------------------

--
-- Table structure for table `tblcity`
--
CREATE TABLE IF NOT EXISTS `tblcity` (
  `cityid` int(11) NOT NULL AUTO_INCREMENT,
  `cityname` varchar(100) NOT NULL,
  `stateid` int(11) NOT NULL,
  PRIMARY KEY (`cityid`),
  KEY `fk_city_state` (`stateid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcity`
--
INSERT INTO `tblcity` (`cityid`, `cityname`, `stateid`) VALUES
(1, 'Surat', 1),
(2, 'Ahmedabad', 1),
(3, 'Vadodara', 1),
(4, 'Mumbai', 2),
(5, 'Pune', 2),
(6, 'New Delhi', 3),
(7, 'Bengaluru', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--
CREATE TABLE IF NOT EXISTS `tblcategory` (
  `categoryid` int(11) NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(100) NOT NULL,
  PRIMARY KEY (`categoryid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcategory`
--
INSERT INTO `tblcategory` (`categoryid`, `categoryname`) VALUES
(1, 'Wedding & Reception'),
(2, 'Birthday Party'),
(3, 'Corporate & Conference'),
(4, 'Music Festival & Concert'),
(5, 'Exhibition & Trade Show'),
(6, 'Haldi & Sangeet Ceremony'),
(7, 'Sports Tournament');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--
CREATE TABLE IF NOT EXISTS `tbladmin` (
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(150) NOT NULL,
  `profilepic` varchar(255) DEFAULT 'default.png',
  `contactno` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--
INSERT INTO `tbladmin` (`adminid`, `username`, `password`, `email`, `profilepic`, `contactno`) VALUES
(1, 'admin', 'admin123', 'admin@evently.com', 'default.png', '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `tblclient`
--
CREATE TABLE IF NOT EXISTS `tblclient` (
  `clientid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(150) NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `profilepic` varchar(255) DEFAULT 'default.png',
  `bio` text DEFAULT NULL,
  `cityid` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `default` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`clientid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblclient`
--
INSERT INTO `tblclient` (`clientid`, `username`, `password`, `email`, `contactno`, `profilepic`, `bio`, `cityid`, `status`, `default`) VALUES
(1, 'rahul_sharma', '12345678', 'rahul@gmail.com', '9898989898', 'default.png', 'Looking for creative and professional event planners for family occasions and corporate galas.', 1, 0, 0),
(2, 'priya_patel', '12345678', 'priya@gmail.com', '9879879870', 'default.png', 'Enthusiastic event host searching for top tier wedding and birthday decorators.', 2, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbleventmanage`
--
CREATE TABLE IF NOT EXISTS `tbleventmanage` (
  `eventmanagerid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `emailid` varchar(150) NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `image` varchar(255) DEFAULT 'default.png',
  `bio` text DEFAULT NULL,
  `cityid` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `default` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`eventmanagerid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbleventmanage`
--
INSERT INTO `tbleventmanage` (`eventmanagerid`, `username`, `password`, `emailid`, `contactno`, `image`, `bio`, `cityid`, `status`, `default`) VALUES
(1, 'royal_events', '12345678', 'contact@royalevents.com', '9123456780', 'default.png', 'Award-winning event management company with 10+ years of experience in luxury weddings and destination parties.', 1, 0, 0),
(2, 'stellar_celebrations', '12345678', 'info@stellarcelebrations.com', '9876501234', 'default.png', 'Specializing in corporate seminars, product launches, concerts, and vibrant birthday celebrations.', 2, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblproject`
--
CREATE TABLE IF NOT EXISTS `tblproject` (
  `projectid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `clientid` int(11) NOT NULL,
  `coverpage` varchar(255) DEFAULT 'coverimg.jpg',
  `budget` decimal(12,2) NOT NULL,
  `eventdatetime` datetime DEFAULT NULL,
  `categoryid` int(11) NOT NULL,
  `cityid` int(11) NOT NULL,
  `actionstartdate` date DEFAULT NULL,
  `assignedmanagerid` int(11) DEFAULT NULL,
  `addedDT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdDT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`projectid`),
  KEY `fk_project_client` (`clientid`),
  KEY `fk_project_cat` (`categoryid`),
  KEY `fk_project_city` (`cityid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblproject`
--
INSERT INTO `tblproject` (`projectid`, `title`, `description`, `clientid`, `coverpage`, `budget`, `eventdatetime`, `categoryid`, `cityid`, `actionstartdate`, `assignedmanagerid`) VALUES
(1, 'Grand Royal Destination Wedding', 'We require full-scale wedding planning including venue decoration, royal floral entry, catering supervision, and stage lighting for 500 guests.', 1, 'weeding.jpg', 850000.00, '2026-12-15 18:00:00', 1, 1, '2026-11-01', NULL),
(2, 'Superhero Themed 10th Birthday Bash', 'Looking for an exciting and immersive superhero themed birthday party with game stalls, balloon arches, and live animation.', 2, 'birthday.webp', 75000.00, '2026-11-20 16:30:00', 2, 2, '2026-11-05', NULL),
(3, 'Tech Leadership Annual Conference 2026', 'Corporate conference requirement for 300 delegates with audio-visual setups, registration kiosks, and catering arrangements.', 1, 'Seminar.jpg', 350000.00, '2026-11-28 09:00:00', 3, 1, '2026-11-10', NULL),
(4, 'Sunburn EDM Music Night Fest', 'Need complete acoustic stage production, LED screens, pyrotechnics, and crowd management for an open-ground music festival.', 2, 'music_festival.jpg', 1200000.00, '2026-12-31 20:00:00', 4, 1, '2026-12-01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblprojectbid`
--
CREATE TABLE IF NOT EXISTS `tblprojectbid` (
  `projectbidid` int(11) NOT NULL AUTO_INCREMENT,
  `projectid` int(11) NOT NULL,
  `eventmanagerid` int(11) NOT NULL,
  `price` decimal(12,2) NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `createdDT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`projectbidid`),
  KEY `fk_bid_project` (`projectid`),
  KEY `fk_bid_manager` (`eventmanagerid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblprojectbid`
--
INSERT INTO `tblprojectbid` (`projectbidid`, `projectid`, `eventmanagerid`, `price`, `description`, `status`) VALUES
(1, 1, 1, 800000.00, 'Royal Events guarantees a magnificent experience with bespoke themes, imported floral decor, and a dedicated team of 25 coordinators.', 0),
(2, 2, 2, 70000.00, 'Stellar Celebrations will provide customized superhero props, an interactive magic show, and premium sound systems.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblpost`
--
CREATE TABLE IF NOT EXISTS `tblpost` (
  `postid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `eventmanagerid` int(11) NOT NULL,
  `thumbnail` varchar(255) DEFAULT 'default.png',
  `cityid` int(11) DEFAULT NULL,
  `createdDT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`postid`),
  KEY `fk_post_manager` (`eventmanagerid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpost`
--
INSERT INTO `tblpost` (`postid`, `title`, `description`, `eventmanagerid`, `thumbnail`, `cityid`) VALUES
(1, 'Exquisite Heritage Palace Wedding', 'Showcasing our palace setup featuring royal chandeliers, vintage floral arrangements, and classical live instrumental welcome.', 1, 'weeding2.jpg', 1),
(2, 'Vibrant Haldi & Sangeet Extravaganza', 'A colorful yellow and marigold traditional Haldi ceremony curated with custom photo booths and DJ setup.', 1, 'haldi.jpg', 1),
(3, 'Corporate Expo & Trade Summit', 'High-end corporate exhibition stalls designed with digital branding, LED backdrops, and executive lounges.', 2, 'Exhibition.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tblprojectimages`
--
CREATE TABLE IF NOT EXISTS `tblprojectimages` (
  `projectimageid` int(11) NOT NULL AUTO_INCREMENT,
  `projectid` int(11) NOT NULL,
  `imageurl` varchar(255) NOT NULL,
  PRIMARY KEY (`projectimageid`),
  KEY `fk_pimg_project` (`projectid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblprojectimages`
--
INSERT INTO `tblprojectimages` (`projectimageid`, `projectid`, `imageurl`) VALUES
(1, 1, 'weeding3.jpg'),
(2, 1, 'party.jpg'),
(3, 2, 'party2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblprojectvideo`
--
CREATE TABLE IF NOT EXISTS `tblprojectvideo` (
  `projectvideoid` int(11) NOT NULL AUTO_INCREMENT,
  `projectid` int(11) NOT NULL,
  `videourl` varchar(255) NOT NULL,
  PRIMARY KEY (`projectvideoid`),
  KEY `fk_pvid_project` (`projectid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblsave`
--
CREATE TABLE IF NOT EXISTS `tblsave` (
  `saveid` int(11) NOT NULL AUTO_INCREMENT,
  `projectid` int(11) NOT NULL,
  `eventmanagerid` int(11) NOT NULL,
  PRIMARY KEY (`saveid`),
  KEY `fk_save_project` (`projectid`),
  KEY `fk_save_manager` (`eventmanagerid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblreview`
--
CREATE TABLE IF NOT EXISTS `tblreview` (
  `reviewid` int(11) NOT NULL AUTO_INCREMENT,
  `eventmanagerid` int(11) NOT NULL,
  `clientid` int(11) NOT NULL,
  `rating` decimal(2,1) NOT NULL DEFAULT 5.0,
  `review` text NOT NULL,
  `createdDT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`reviewid`),
  KEY `fk_rev_manager` (`eventmanagerid`),
  KEY `fk_rev_client` (`clientid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblreview`
--
INSERT INTO `tblreview` (`reviewid`, `eventmanagerid`, `clientid`, `rating`, `review`) VALUES
(1, 1, 1, 5.0, 'Incredible service! Royal Events handled every single detail with sheer elegance. Highly recommended for premium weddings!'),
(2, 2, 2, 4.5, 'Stellar Celebrations organized an awesome party on short notice. Very responsive and polite team.');

-- --------------------------------------------------------

--
-- Table structure for table `tblcomplaint`
--
CREATE TABLE IF NOT EXISTS `tblcomplaint` (
  `complaintid` int(11) NOT NULL AUTO_INCREMENT,
  `clientid` int(11) NOT NULL,
  `eventmanagerid` int(11) NOT NULL,
  `description` text NOT NULL,
  `createdDT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`complaintid`),
  KEY `fk_cmp_client` (`clientid`),
  KEY `fk_cmp_manager` (`eventmanagerid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
