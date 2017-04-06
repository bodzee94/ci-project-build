-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Apr 06, 2017 at 02:01 PM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_chantry`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
`about_id` smallint(5) unsigned NOT NULL,
  `about_section_1_title` text NOT NULL,
  `about_s1_p1` text NOT NULL,
  `about_s1_p2` text NOT NULL,
  `about_section_2_title` text NOT NULL,
  `about_s2_p1` text NOT NULL,
  `about_s2_p2` text NOT NULL,
  `about_section_3_title` text NOT NULL,
  `about_birdText` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`about_id`, `about_section_1_title`, `about_s1_p1`, `about_s1_p2`, `about_section_2_title`, `about_s2_p1`, `about_s2_p2`, `about_section_3_title`, `about_birdText`) VALUES
(1, 'Chantry Island - Southampton, Ontario', 'Chantry Island is a glacial moraine and consists of stone above the water and beneath extending a mile north and a mile south of the island. These underwater shoals of massive granite boulders have made this area one of the most treacherous in the Great Lakes. There are over 50 known shipwrecks around the island and there are many accounts from the 1800''s and early mid 1900''s of these disasters and lost lives. Today, buoys and modern navigational tools safely guide boats through the area.', 'The island varies in size depending on the level of Lake Huron. Today, with a low lake level Chantry Island is about 68 acres. In 1986 when the water level was at the highest of the century, the island was only about 10 acres, causing trees on the west, north and south sides to drown.', 'The Lighthouse History\r\n', 'During the mid 1800''s water traffic on the Great Lakes had substantially increased and the colonial government called for improved navigational tools for the mariners on the Lake Huron. John Brown of Thorold was contracted to build the lighthouse on Chantry Island, as well as 10 other lighthouses to help sailors navigate the Lake. Because of the expense and difficulty of building, only six were completed. The Chantry Island Lighthouse was one of these completed and it was lit on April 1, 1859.', 'The lighthouse stands 86 ft. above water level and is 80 ft. high from its base to the light''s center. The lantern room of the lighthouse was fitted with a Fresnel lens built and transported from Paris, France. The first fuel used was sperm whale oil and the first light was a fixed light, not the familiar flashing one. Other fuels used have been colza oil, coal oil, kerosene, acetylene and electricity. Its present-day flashing light is solar powered!', 'Federal Bird Sanctuary', 'In 1957 the Canadian Wildlife Service declared Chantry Island a Federal Migratory Bird Sanctuary to protect the migratory and nesting birds of the island. It is the largest Federal Migratory Bird Sanctuary between James Bay and Point Pelee. There are approximately fifty thousand birds (including chicks) on the island during the breeding season. It is home to nesting colonies of Great Blue Heron, Great Egret, Black-crowned Night-Heron, Herring Gull, Ring-billed Gull and Double-crested Cormorant. Water fowl such as Mallard, American Black Duck, Gadwall, Blue-winged Teal, Green-winged Teal, Northern Pintail, and American Wigeon are also known nesters on the island.\r\nBecause the island is a migratory bird sanctuary, the number of people on the island on any given day is strictly limited and tours must be booked through the Chantry Island Tour Base.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
`contact_id` smallint(5) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
`event_id` smallint(5) unsigned NOT NULL,
  `event_month` text NOT NULL,
  `event_day` text NOT NULL,
  `event_title` text NOT NULL,
  `event_details` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_footer`
--

CREATE TABLE `tbl_footer` (
`footer_id` smallint(5) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
`gallery_id` smallint(5) unsigned NOT NULL,
  `gallery_title` varchar(200) NOT NULL,
  `gallery_thumb` varchar(50) NOT NULL,
  `gallery_full` varchar(50) NOT NULL,
  `gallery_photographer` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`gallery_id`, `gallery_title`, `gallery_thumb`, `gallery_full`, `gallery_photographer`) VALUES
(1, 'Inside Chantry Tour Base', 'gallery1.jpg', 'full1.jpg', 'Misc.'),
(2, 'Peerless Tour Boat', 'gallery2.jpg', 'full2.jpg', 'George Plant'),
(3, 'Inside Lightkeepers Cottage', 'gallery3.jpg', 'full3.jpg', 'James Swartz'),
(4, 'Southampton - Mouth of Saugeen River', 'gallery4.jpg', 'full4.jpg', 'Karen Smith'),
(5, 'Southampton - Mouth of Saugeen Rive', 'gallery5.jpg', 'full5.jpg', 'Karen Smith'),
(6, 'Birds of Chantry Island', 'gallery6.jpg', 'full6.jpg', 'Nancy Calder'),
(7, 'Chantry Island Lighthouse and Cottage', 'gallery7.jpg', 'full7.jpg', 'Vicki Tomori'),
(8, 'Chantry Island Flower', 'gallery8.jpg', 'full8.jpg', 'Vicki Tomori'),
(9, 'Peerless II Tour Boat', 'gallery9.jpg', 'full9.jpg', 'Wayne Macdonald '),
(10, 'Chantry Island Lighthouse', 'gallery10.jpg', 'full10.jpg', 'Vicki Tomori'),
(11, 'Chantry Island Lighthouse', 'gallery11.jpg', 'full11.jpg', 'Vicki Tomori'),
(12, 'Chantry Island Lighthouse', 'gallery12.jpg', 'full12.jpg', 'Vicki Tomori'),
(13, 'Chantry Island Cottage', 'gallery13.jpg', 'full13.jpg', 'Vicki Tomori'),
(14, 'Chantry Island Cottage', 'gallery14.jpg', 'full14.jpg', 'Vicki Tomori'),
(15, 'Chantry Island Tour Base', 'gallery15.jpg', 'full15.jpg', 'Vicki Tomori'),
(16, 'Island Sunset', 'gallery16.jpg', 'full16.jpg', 'Terry Thomas'),
(17, 'Beautiful Sunsets', 'gallery17.jpg', 'full17.jpg', 'Terry Thomas '),
(18, 'Birds Eggs', 'gallery18.jpg', 'full18.jpg', 'Nancy Calder'),
(19, 'Birds of Chantry Island', 'gallery19.jpg', 'full19.jpg', 'Nancy Calder'),
(20, 'Chantry Island Aerial View', 'gallery20.jpg', 'full20.jpg', 'Karen Smith'),
(21, 'Aerial View', 'gallery21.jpg', 'full21.jpg', 'Karen Smith'),
(22, 'Chantry Island', 'gallery22.jpg', 'full22.jpg', 'Karen Smith'),
(23, 'Chantry Cottage', 'gallery23.jpg', 'full23.jpg', 'James Swartz'),
(24, 'Chantry Island - Southampton, ON', 'gallery24.jpg', 'full24.jpg', 'James Swartz'),
(25, 'Cottage Kitchen', 'gallery25.jpg', 'full25.jpg', 'James Swartz'),
(26, 'Peerless Boat Tours', 'gallery26.jpg', 'full26.jpg', 'George Plant'),
(27, 'Peerless Boat Tours', 'gallery27.jpg', 'full27.jpg', 'George Plant'),
(28, 'Peerless II Tour Boat', 'gallery28.jpg', 'full28.jpg', 'Gale Douglass'),
(29, 'Birds of Chantry Island', 'gallery29.jpg', 'full29.jpg', 'Carol Walberg'),
(30, 'Chantry Island - Federal Bird Sanctuary', 'gallery30.jpg', 'full30.jpg', 'Carol Walberg'),
(31, 'Still Functioning Lighthouse', 'gallery31.jpg', 'full31.jpg', 'Carol Walberg'),
(32, 'Chantry Tour Base', 'gallery32.jpg', 'full32.jpg', 'Misc.'),
(33, 'Doug Johnson Displaying His Famous Saying - ''Don''t Give Up The Ship', 'gallery33.jpg', 'full33.jpg', 'Misc.'),
(34, 'Chantry Island Events & Clubs', 'gallery34.jpg', 'full34.jpg', 'Misc.'),
(35, 'Inside Tour Base', 'gallery35.jpg', 'full35.jpg', 'Misc.'),
(36, 'Inside Tour Base', 'gallery36.jpg', 'full36.jpg', 'Misc.'),
(37, 'Inside Tour Base', 'gallery37.jpg', 'full37.jpg', 'Misc.'),
(38, 'Tour Base Interior', 'gallery38.jpg', 'full38.jpg', 'Misc.'),
(39, 'Marine Heritage Society Logo', 'gallery39.jpg', 'full39.jpg', 'Misc.'),
(40, 'Peerless II Docked', 'gallery40.jpg', 'full40.jpg', 'Misc.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_img`
--

CREATE TABLE `tbl_img` (
`img_id` smallint(5) unsigned NOT NULL,
  `img_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
`news_id` smallint(5) unsigned NOT NULL,
  `news_headline` text NOT NULL,
  `news_image` text NOT NULL,
  `news_description` text NOT NULL,
  `news_date` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `news_headline`, `news_image`, `news_description`, `news_date`) VALUES
(1, 'Doug Johnson Proudly Displays the Famous Saying.', 'doug_johnson.jpg', '''''Don''t Give Up the Ship''''', '2017-01-10'),
(2, 'Doug Johnsons 91st Birthday', 'doug_birthday.jpg', 'Doug Johnson is giving a short talk about his history with the Propeller Club. He is one of our strongest supporters.\r\n', '2017-01-10'),
(3, 'Chantry Island Tour Base', 'tour_base_interior.jpg', 'Inside the Chantry Island Tour Base, where tickets can be purchased for the tours to Chantry Island. The Tour Base will open again in June.\r\n', '2017-01-08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_restoration`
--

CREATE TABLE `tbl_restoration` (
`restoration_id` int(5) unsigned NOT NULL,
  `restoration_p1` text NOT NULL,
  `restoration_p2` text NOT NULL,
  `restoration_main_text` text NOT NULL,
  `restoration_partners_text` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_restoration`
--

INSERT INTO `tbl_restoration` (`restoration_id`, `restoration_p1`, `restoration_p2`, `restoration_main_text`, `restoration_partners_text`) VALUES
(1, 'In 1997 the local Marine Heritage Society established specific goals for the island''s restoration. The project was to be funded by donations and fundraising efforts, and the majority of the work was to be done by volunteers.', 'With permission from 5 levels of government, the group of volunteers began to rebuild the light keeper''s cottage, using the original structure plans.', 'The Light Keeper''s Cottage restoration was completed in 2001. Over 250 volunteers put in more than 300,000 hours of labor to finish the restoration and ready the boat for tours. Since 2001 volunteers have restored the staircase of the lighthouse, built a boathouse on the island, constructed a replica of the original boat (which sits in the boathouse) and reconstructed the privy.\r\n\r\nToday the tour is operated with over 125 volunteers, whose jobs include island housekeepers, gardeners, tour boat captains, crew and tour guides, and gift shop sales and service personnel. Volunteers also install the portable walkways and docks every spring and remove them every fall. To date, there have been over 20,538 visitors to the island.\r\n\r\nThe Chantry Island Lightstation Tower was constructed in the years 1855 through to 1859 under the authority of the Board of Works, Canada West, and is recognized as one of the Imperial Towers. The Imperial Towers were six of the earliest lighthouses built by the Canadian government on Lake Huron. The Chantry Island Lightstation Tower is also known as the Lighttower, Tower, Phare de l''île Chantry, Tour de phare, however, most notably as Chantry Island Lighthouse. The wording lightstation is used to refer to the actual lighthouse, the property on which the lighted tower is situated, the tower''s light and refers to any equipment or other buildings located on the island property. The actual island is located approximately a mile off the shores of the town of Southampton, Ontario, and south of the mouth of the Saugeen River on Lake Huron. Surrounded by water, the island is 63-hectare (160-acre) in size.\r\n\r\nChantry Island Lighthouse was first lit on April 1, 1859. Underwater shoals of massive granite boulders made navigation in the area dangerous; there are many accounts from the 1800''s on of disasters and lost lives. The lighthouse was valuable in its day, but now, buoys and modern navigational tools safely guide boats through the area.', 'Partners in the restoration, island maintenance, Chantry Island Tour operation and other Marine Heritage endeavors include the Town of Saugeen Shores, Bruce County Museum and Cultural Centre, Southampton Propeller Club, Chantry Island Chambettes and Saugeen Shores Chamber of Commerce. Their continuous support contributes to the success of the Marine Heritage Society goal to preserve the local marine history.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_signin`
--

CREATE TABLE `tbl_signin` (
`signin_id` smallint(5) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tourinfo`
--

CREATE TABLE `tbl_tourinfo` (
`tourinfo_id` int(10) unsigned NOT NULL,
  `tour_rate` text NOT NULL,
  `tour_info` text NOT NULL,
  `tour_notes` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tourinfo`
--

INSERT INTO `tbl_tourinfo` (`tourinfo_id`, `tour_rate`, `tour_info`, `tour_notes`) VALUES
(1, '$30.00 per person(includes HST) for adults and children.', 'The tour is much like a medium hike and requires a degree of agility and fitness. You can enjoy the tour without climbing the 106 steps in the Lighthouse tower. However, when you do reach the light room, you will always remember the view. \r\n\r\nFor safety, children must be a minimum of 4 feet tall and must be accompanied by an Adult. \r\n\r\nFootwear suitable for hiking is mandatory. For safety reasons, Flip-Flops are not allowed. \r\n\r\nTo Book a Tour Please Call (519)-797-5862 or Toll Free: 1-866-797-5862.', 'The 2 hour tour must be pre-booked and prepaid. \r\n\r\nThere are 9 seats on the boat. The cost is $30.00 per person (includes HST). \r\n\r\nFor refunds, cancellations must be received 24 hours before the scheduled departure. \r\nChantry Island is a Federal Migratory Bird Sanctuary and No Pets allowed on the island. \r\nCancellation can be caused by weather conditions but light rain is fine.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tours`
--

CREATE TABLE `tbl_tours` (
`tour_id` int(10) unsigned NOT NULL,
  `tour_type` text NOT NULL,
  `tour_year` text NOT NULL,
  `tour_month` text NOT NULL,
  `tour_days` text NOT NULL,
  `tour_time` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tours`
--

INSERT INTO `tbl_tours` (`tour_id`, `tour_type`, `tour_year`, `tour_month`, `tour_days`, `tour_time`) VALUES
(1, 'Regular Afternoon Tour', '2017', 'May', '27, 28', '1:00pm - 3:00pm'),
(2, 'Regular Afternoon Tour', '2017', 'June', '3, 4, 10, 11, 17, 18, 24, 25', '1:00pm - 3:00pm'),
(3, 'Regular Afternoon Tour', '2017', 'July', '7 days a week', '1:00pm - 3:00pm'),
(4, 'Regular Afternoon Tour', '2017', 'August', '7 days a week', '1:00pm - 3:00pm'),
(5, 'Regular Afternoon Tour', '2017', 'September', '1,2,3,4', '1:00pm - 3:00pm'),
(6, 'Morning Tour', '2017', 'July', 'Weekends', '9:30am'),
(7, 'Morning Tour', '2017', 'August', 'Weekends', '9:30am'),
(8, 'Tour Base Spring Hours', '2017', 'May and June', 'Weekends', '12:00pm - 5:30pm'),
(9, 'Tour Base Summer Hours', '2017', 'July - September 4', '7 days a week', '12:00pm - 5:30pm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
`user_id` smallint(4) unsigned NOT NULL,
  `user_fname` varchar(50) NOT NULL,
  `user_lname` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(35) NOT NULL,
  `user_hash` varchar(255) NOT NULL,
  `user_level` varchar(25) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `user_lastlogin` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `user_attempts` smallint(1) NOT NULL DEFAULT '0',
  `user_logins` smallint(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_lname`, `user_name`, `user_email`, `user_hash`, `user_level`, `user_ip`, `user_lastlogin`, `user_attempts`, `user_logins`) VALUES
(1, 'Jane', 'Doe', 'admin', 'admin@test.com', 'password', '1', '::1', '2017-04-05 01:46:33', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_volunteers`
--

CREATE TABLE `tbl_volunteers` (
`volunteer_id` int(10) unsigned NOT NULL,
  `volunteer_name` text NOT NULL,
  `volunteer_title` text NOT NULL,
  `volunteer_date_started` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
 ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
 ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
 ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `tbl_footer`
--
ALTER TABLE `tbl_footer`
 ADD PRIMARY KEY (`footer_id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
 ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `tbl_img`
--
ALTER TABLE `tbl_img`
 ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
 ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tbl_restoration`
--
ALTER TABLE `tbl_restoration`
 ADD PRIMARY KEY (`restoration_id`);

--
-- Indexes for table `tbl_signin`
--
ALTER TABLE `tbl_signin`
 ADD PRIMARY KEY (`signin_id`);

--
-- Indexes for table `tbl_tourinfo`
--
ALTER TABLE `tbl_tourinfo`
 ADD PRIMARY KEY (`tourinfo_id`);

--
-- Indexes for table `tbl_tours`
--
ALTER TABLE `tbl_tours`
 ADD PRIMARY KEY (`tour_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_volunteers`
--
ALTER TABLE `tbl_volunteers`
 ADD PRIMARY KEY (`volunteer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
MODIFY `about_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
MODIFY `contact_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
MODIFY `event_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_footer`
--
ALTER TABLE `tbl_footer`
MODIFY `footer_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
MODIFY `gallery_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `tbl_img`
--
ALTER TABLE `tbl_img`
MODIFY `img_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
MODIFY `news_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `tbl_restoration`
--
ALTER TABLE `tbl_restoration`
MODIFY `restoration_id` int(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_signin`
--
ALTER TABLE `tbl_signin`
MODIFY `signin_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_tourinfo`
--
ALTER TABLE `tbl_tourinfo`
MODIFY `tourinfo_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_tours`
--
ALTER TABLE `tbl_tours`
MODIFY `tour_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `user_id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_volunteers`
--
ALTER TABLE `tbl_volunteers`
MODIFY `volunteer_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
