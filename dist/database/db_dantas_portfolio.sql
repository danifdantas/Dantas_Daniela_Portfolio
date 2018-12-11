-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 09, 2018 at 09:19 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dantas_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_projects`
--

CREATE TABLE `tbl_projects` (
  `project_id` int(10) UNSIGNED NOT NULL,
  `project_title` varchar(100) NOT NULL,
  `project_thumb` varchar(45) NOT NULL,
  `project_desc` text NOT NULL,
  `project_big_img_path` varchar(60) NOT NULL,
  `project_small_img_path` varchar(60) NOT NULL,
  `project_challenge` text NOT NULL,
  `project_solution` text NOT NULL,
  `project_vid` varchar(60) NOT NULL,
  `project_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_projects`
--

INSERT INTO `tbl_projects` (`project_id`, `project_title`, `project_thumb`, `project_desc`, `project_big_img_path`, `project_small_img_path`, `project_challenge`, `project_solution`, `project_vid`, `project_url`) VALUES
(1, 'Agency X', 'agencyx_thumb.jpg', 'The objective of this project is to build a modern 1-page app for a web agency. ', 'agencyx_big.jpg', 'agencyx_small.jpg', 'I was the front-end developer of this project. It was a great opportunity to put a great design into a webpage. I used CSS Grid for a more fluid and responsive page, SASS to accomplish more powerful results with CSS, Gulp to compress SASS and a combination of CSS and Javascript for light animations and a gallery Lightbox.', 'For future implementation : I want to populate the page from a database.', '', 'https://danifdantas.github.io/AgencyX/'),
(2, 'JE Bearing', 'je_bearing_thumb.jpg', 'This project is an online training module created with Laravel. The application was specifically built for a part manufacturing company, called JE Bearing and Machine. ', 'je_bearing_big.jpg', 'je_bearing_small.jpg', 'This Project is a web-based application for a manufacturing company called JE Bearings that will help increase productivity, accuracy, and employee to employee communication.\r\nThe company had a complex, multi-step manufacturing workflow and needed a solution that would clarify the process into an interactive application with easy-to-follow steps. \r\n\r\n', 'I am part of the second-phase team of this project and I’m working on the back-end to continue to build more functionality into the application and making changes to fit the company’s needs. \r\nThe application is being developed with Laravel, a PHP framework, which provides easy ways to implement common tasks such as: authentication, routing, and view templating. Laravel also has a standardized work-flow which makes it easier for a team to work simultaneously.</br>\r\nIn addition, we are using Javascript and Ajax to enhance user experience and to quickly load data.', '', ''),
(3, 'LEDC - London Economic Development Corporation', 'ledc_scavenger_thumb.jpg', 'This Project is PHP based project. It is a website for a scavenger hunt challenge offered by LEDC. #discoverldnont', 'ledc_scavenger_big.jpg', 'ledc_scavenger_small.jpg', 'This project is a website for a scavenger hunt challenge offered by LEDC (London Economic Development Corporation) for domestic and international students at London, Ontario. \r\nThe main idea was to stimulate students to get to know the city by finding historical sites and local charms.', 'I participated in the second phase of this project, when an admin implementation was necessary. The objective was to create a login functionality providing access to an admin page where the supervisor could have edit, save and delete capabilities. As well as, a styled page to accompany the teams\'s progress.\r\n\r\nThis project was implemented using PHP and CodeIgniter, a PHP framework. It was my first contact with the language and with an MVC framework. It was a great learning experience.', '', ''),
(4, 'Starship Troopers ', 'starship_troopers_thumb.jpg', 'This project is the commemorative relaunching of the movie Starship Troopers. To celebrate the 20th anniversary of it\'s premiere.', 'starship_troopers_big.jpg', 'starship_troopers_small.jpg', 'This project was created to be a responsive multi-page website to engage with Starship Troopers fans around the globe. It showcases a new Teaser and Trailer for the movie, a image gallery with scenes and behind the scenes moments and a page that talks about the movie storyline and the cast.  ', 'From illustrator to sublime text, this project is the complete process from designing all the visuals to the front-end building of the website. I used foundation for a consistent and responsive layout, CSS to custom foundation classes and Javascript to build video controls and a image gallery.', '', ''),
(5, 'Tidal - Infuser Bottle (3D / Branding)', 'tidal_thumb.jpg', 'The purpose of this project was to create, brand and model in cinema 4D  a Infuser Bottle.', 'tidal_big.jpg', 'tidal_small.jpg', 'Project partner: Danielle Butters. \r\nWe both participated in every part of building this project. From the logo and bottle design to the final marketing plan and video. \r\nThe brand: \r\nOur mission is to foster a world where our busy lives can harmonize with the earth. We are equally driven by the wellbeing of our bodies and the planet, because after all, water is essential for life.\r\nWe want to bring the Tidal philosophy to life and create an awareness that brings forth a solution that will impact the world. \r\nOur demographic is the middle class working individual who is health conscious. This group of people are aware of environmental and health issues, but do not want to compromise style and the function of their bottle. Our goal is to provide and implement these essential aspects into our product so our consumer has a simple solution to a complex problem.', 'We want to encompass much more than the features that our competitors incorporate. We want all these basic features to be implied and synonymous with our product. We want to focus on what it means to own a Tidal Infuser Bottle and the allure of a healthy, conscious, and productive lifestyle.\r\n\r\nTidal is for the busy person on the go. How ever they are trying to conquer the world, we want to ease their mind by removing the conscious planning and effort of drinking water. We can achieve this by being synonymous with sustainability and health, by providing a product that works for their lifestyle.', 'tidal_promo.mp4', ''),
(6, 'Pure Volume', 'pure_volume_thumb.jpg', 'PUREVOLUME is a media platform that delivers a diverse range of content. ', 'pure_volume_big.jpg', 'pure_volume_small.jpg', 'We are committed to bringing the latest in pop culture, entertainment, and music that can be shared among friends and family. Our aim is to not just deliver content, but connect with our audience and the world.', 'Motivation The objective of this project is to take the existing purevolume platform and give it a makeover. We aspire to deliver a media platform that maximizes the user’s ability to seamlessly engage in the constant influx of daily media content. By creating and maintaining an engaging user experience and interface, we want users to comfortably indulge, connect and share.\r\n\r\nTech/framework used No Framework used. Use SASS, a preprocessor scripting to intemperate CSS styles\r\n\r\nBuild SASS plug-in for Visual Studio Code to compile CSS\r\nCredits: Danielle Butters - Project Manager; Daniela Dantas - Video; Patricia Garcia - Designer; Deep Panchal - Developer; Maxim Portianoi - Developer.', 'pure_volume_promo.mp4', 'https://danifdantas.github.io/purevolume.project/');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_projects_roles`
--

CREATE TABLE `tbl_projects_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_id` tinyint(3) UNSIGNED NOT NULL,
  `role_id` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_projects_roles`
--

INSERT INTO `tbl_projects_roles` (`id`, `project_id`, `role_id`) VALUES
(1, 1, 2),
(2, 2, 1),
(3, 3, 1),
(4, 4, 2),
(5, 5, 3),
(6, 6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`role_id`, `role`) VALUES
(1, 'Back-End Developer'),
(2, 'Front-End Developer'),
(3, 'Video / Film  Editor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_projects`
--
ALTER TABLE `tbl_projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `tbl_projects_roles`
--
ALTER TABLE `tbl_projects_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_projects`
--
ALTER TABLE `tbl_projects`
  MODIFY `project_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_projects_roles`
--
ALTER TABLE `tbl_projects_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `role_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
