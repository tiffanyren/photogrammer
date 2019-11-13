-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2019 at 08:23 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiffany_ren`
--
CREATE DATABASE IF NOT EXISTS `tiffany_ren` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tiffany_ren`;

-- --------------------------------------------------------

--
-- Table structure for table `data`
--
-- Creation: Nov 12, 2019 at 09:10 AM
-- Last update: Nov 13, 2019 at 05:47 AM
--

DROP TABLE IF EXISTS `data`;
CREATE TABLE IF NOT EXISTS `data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(300) NOT NULL,
  `city` varchar(200) NOT NULL,
  `scenery` varchar(50) NOT NULL,
  `image` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `map` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `data`:
--

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `location`, `city`, `scenery`, `image`, `description`, `map`) VALUES
(1, 'CAMBIE STREET BRIDGE', 'Vancouver, BC', 'citylife', '\"img/kyle-ryan-nIujk826wE0-unsplash.jpg\" alt=\"cambie street bridge\"', 'Right over False Creek, the Cambie Street Bridge provides a beautiful view of downtown, Science World, Fairview, and Burrard Street Bridge.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2603.23434921963!2d-123.11694808493088!3d49.27195647933017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673d84fa50ce5%3A0x8c08cde62bb386e1!2sCambie%20Bridge!5e0!3m2!1sen!2sca!4v1573248078400!5m2!1sen!2sca'),
(2, 'MINORU PARK', 'Vancouver, BC', 'nature', '\"img/antonina-bukowska-9Pq42qFP9vY-unsplash.jpg\" alt=\"cherry blossoms\"', 'Minoru Park is a park located on the site of a former horse-racing track and airstrip in Richmond, British Columbia. The Minoru Park\'s running track is often used by School District 38 Richmond for school competitions, such as track and field.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2608.664294706338!2d-123.14658828431459!3d49.16897997931908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54860ac93e679209%3A0x610d0a0548917262!2sMinoru%20Park!5e0!3m2!1sen!2sca!4v1573546815216!5m2!1sen!2sca'),
(3, 'COAL HARBOUR', 'Vancouver, BC', 'citylife', '\"img/coalharbour.jpg\" alt=\"coal harbour\"', 'Coal Harbour is a downtown area known for its marina, mountain views, and mix of casual and upscale waterside eateries. Seaplanes take off in the shadow of gleaming condo towers near the modern, grass-roofed Vancouver Convention Centre. The paved Seawall walking and cycling path follows the shore to forested Stanley Park, where the Vancouver Aquarium is home to tropical fish and penguins, plus a stingray touch pool.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10409.335350922858!2d-123.13268235827309!3d49.289018869310695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5486718472e36073%3A0x2f6ebe2d4b2aabe9!2sCoal%20Harbour%2C%20Vancouver%2C%20BC!5e0!3m2!1sen!2sca!4v1573546884679!5m2!1sen!2sca'),
(4, 'CANADA PLACE', 'Vancouver, BC', 'citylife', '\"img/canadaplace.jpg\" alt=\"canada place\"', 'Canada Place is a building situated on the Burrard Inlet waterfront of Vancouver, British Columbia. It is the home of the Vancouver Convention Centre, the Pan Pacific Vancouver Hotel, Vancouver\'s World Trade Centre, and the virtual flight ride FlyOver Canada.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2602.3440826260494!2d-123.11330958493!3d49.28882477933202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5486719d24e2e021%3A0xb7057fe085c86109!2sCanada%20Place!5e0!3m2!1sen!2sca!4v1573549400945!5m2!1sen!2sca'),
(5, 'STANLEY PARK', 'Vancouver, BC', 'nature', '\"img/stanleypark.jpg\" alt=\"stanley park\"', 'Stanley Park is a 405-hectare public park that borders the downtown of Vancouver in British Columbia, Canada and is mostly surrounded by waters of Burrard Inlet and English Bay. The park has a long history and was one of the first areas to be explored in the city.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2601.529338301463!2d-123.14644088492926!3d49.304258379333724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5486718cad26e4a3%3A0x364a639db409e216!2sStanley%20Park!5e0!3m2!1sen!2sca!4v1573549500337!5m2!1sen!2sca'),
(6, 'LONSDALE QUAY', 'Vancouver, BC', 'citylife', '\"img/lonsdalequay.jpg\" alt=\"lonsdale quay\"', 'Lonsdale Quay Market is a major public market and tourist destination located in the city of North Vancouver, British Columbia, Canada. The market is located at the foot of Lonsdale Avenue and is adjacent to the Lonsdale Quay transit exchange that serves Metro Vancouver\'s North Shore municipalities.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2601.2067268674787!2d-123.08400018492902!3d49.31036857933432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5486704cd72d5cf5%3A0x396d6df57869e042!2sLonsdale%20Quay%20Market!5e0!3m2!1sen!2sca!4v1573549589410!5m2!1sen!2sca'),
(7, 'CAPILANO SUSPENSION BRIDGE', 'Vancouver, BC', 'nature', '\"img/capilanosuspension.jpg\" alt=\"capilano suspension bridge\"', 'The Capilano Suspension Bridge is a simple suspension bridge crossing the Capilano River in the District of North Vancouver, British Columbia, Canada. The current bridge is 140 metres long and 70 metres above the river.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2599.490674479973!2d-123.11711308492735!3d49.34286087933793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54866fd200dcde49%3A0xf350b3ec85130f5e!2sCapilano%20Suspension%20Bridge!5e0!3m2!1sen!2sca!4v1573549705505!5m2!1sen!2sca'),
(8, 'CYPRESS PROVINCIAL PARK', 'Vancouver, BC', 'nature', '\"img/cypresspark.jpg\" alt=\"cypress provincial park\"', 'Bounded on the west by Howe Sound, on the north and east by the ridgetops of Mount Strachan and Hollyburn Mountain and to the south by West Vancouver, Cypress sits like a ship’s crownest high above Vancouver. To the south is the sprawling metropolitan area of Vancouver, while to the southeast is snowclad Mount Baker in the Cascade Mountain chain. To the west and southwest lie the Gulf Islands and Vancouver Island with Georgia Strait in the foreground.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2596.167136927257!2d-123.21981008492438!3d49.40574487934488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54866860214ca22f%3A0x52ade020b093d2d1!2sCypress%20Provincial%20Park!5e0!3m2!1sen!2sca!4v1573550141074!5m2!1sen!2sca'),
(9, 'GRANVILLE ISLAND', 'Vancouver, BC', 'citylife', '\"img/granvilleisland.png\" alt=\"granville island\"', 'Granville Island is a peninsula and shopping district in Vancouver, British Columbia, Canada. It is located across False Creek from Downtown Vancouver under the south end of the Granville Street Bridge.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5206.587369692909!2d-123.13815262213002!3d49.27083206731992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673ce5224c2db%3A0x36ded25e2da1aeb9!2sGranville%20Island!5e0!3m2!1sen!2sca!4v1573556468066!5m2!1sen!2sca'),
(10, 'GASTOWN', 'Vancouver, BC', 'citylife', '\"img/gastown.jpg\" alt=\"gastown\"', 'Lively Gastown is known for its whistling Steam Clock and mix of souvenir shops, indie art galleries and decor stores in Victorian buildings. A trendy food and drink scene includes chic cocktail lounges and restaurants serving everything from gourmet sandwiches to local seafood. Hip eateries also dot the neighboring Downtown Eastside area, while the up-and-coming Railtown district is home to edgy fashion studios.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5205.275044181024!2d-123.11011307618018!3d49.283265315975335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54867177614ef47b%3A0xd1fea64d6d378461!2sGastown%2C%20Vancouver%2C%20BC!5e0!3m2!1sen!2sca!4v1573556514300!5m2!1sen!2sca'),
(11, 'NATHAN PHILLIPS SQUARE', 'Toronto, ON', 'citylife', '\"img/oldcity.jpg\" alt=\"nathan phillips square\"', 'Nathan Phillips Square is at the centre of the city and is awesome to photograph pretty much all throughout the year. In the winter they have ski skating on the water feature in front and in recent years they have introduced a bright Toronto light sign. For a good perspective of the Old City Hall, it’s good to go up the steps to the upper platform which is directly opposite the Old City Hall across from the pond. Use the pic below as a guide.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.781849068632!2d-79.38560238450226!3d43.65270687912131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfd78ef1b308ab9d4!2sNathan%20Phillips%20Square!5e0!3m2!1sen!2sca!4v1573623198095!5m2!1sen!2sca'),
(12, 'ROYAL ONTARIO MUSEUM', 'Toronto, ON', 'citylife', '\"img/ontariomuseum.jpg\" alt=\"ontario museum\"', 'The front facade of the Royal Ontario Museum is called the Michael Lee-Chin Crystal. It is a very aesthetic Instagram spot and also creative architecture at its best. I personally recommend taking pictures of the Rom at night with light trails from traffic going past. It also looks good during the day.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.060590310233!2d-79.39696578450179!3d43.66770967912083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc98434e11ec5f592!2sRoyal%20Ontario%20Museum!5e0!3m2!1sen!2sca!4v1573623336683!5m2!1sen!2sca'),
(13, 'CASA LOMA', 'Toronto, ON', 'citylife', '\"img/casaloma.jpg\" alt=\"casa loma\"', 'I wouldn’t say Casa Loma is the easiest building to photograph. Few things that may help is to use a wide-angle lens, or visit in the spring/summer and then try and compose your shot with flowers in the foreground such as below.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2885.5639861485342!2d-79.41163258450145!3d43.67803707912046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x617cc8c102d6584f!2sCasa%20Loma!5e0!3m2!1sen!2sca!4v1573623396347!5m2!1sen!2sca'),
(14, 'POLSON PIER', 'Toronto, ON', 'citylife', '\"img/polsonpier.jpg\" alt=\"polson pier\"', 'Polson Pier is one of the classic Toronto spots. It’s somewhat secret as most tourists probably aren’t aware of this location. To get here you take bus #72A from Wellington Street West near King Station and then get off at Cherry Street. You then have a five-minute walk past the Asian supermarket and it’ll be on your right. Check the location (Polson Street) in Google before you go too. Or you could also just jump in an Uber.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2887.338959818464!2d-79.35752938450266!3d43.64111567912171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cb1f269cea3f%3A0xb2a9f06d3ab19519!2s2%20Polson%20St%2C%20Toronto%2C%20ON%20M5A%201A5!5e0!3m2!1sen!2sca!4v1573623431861!5m2!1sen!2sca'),
(15, 'SCARBOROUGH BLUFFS PARK', 'Toronto, ON', 'nature', '\"img/scarbluffs.jpg\" alt=\"scar bluffs\"', 'A little bit East of the City is Scarborough Bluffs Park which is a series of nice beaches, parks, boathouses. The view below is from Scarborough Bluffs Park towards Bluffers Park. To get here and to the park below is not that easy and I recommend an Uber, Taxi, drive or to cycle. The road leading down to the lower park and beaches is Brimley Road South. You can also use public transport (bus 12 or 302) and walk down but it’s not the nicest walk to be honest.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2884.22197260965!2d-79.23167225!3d43.7059359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cfa5d7288f2b%3A0x17e07f069b974d67!2sScarborough%20Bluffs%20Park%2C%20Scarborough%2C%20ON%20M1M%203W3!5e0!3m2!1sen!2sca!4v1573623543756!5m2!1sen!2sca'),
(16, 'BROOKFIELD PLACE', 'Toronto, ON', 'citylife', '\"img/brookfieldplace.jpg\" alt=\"brookfield\"', 'The ceiling at Brookfield Place is a classic Instagrammable spot in Toronto. If you follow any hubs you’ll often see this interior come up. It’s located a short walk up from Bay Street from Union Station.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2887.038454216067!2d-79.37956068450244!3d43.64736827912149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf842c45845a81324!2sBrookfield%20Place!5e0!3m2!1sen!2sca!4v1573623614821!5m2!1sen!2sca'),
(17, 'SUGAR BEACH', 'Toronto, ON', 'nature', '\"img/sugarbeach.jpg\" alt=\"sugar beach\"', 'Not just a great place to relax, Sugar Beach is also a great place to go and take photographs due to the bright pink Parasols. You can even take photographs in the winter such as seen below.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2887.253342822383!2d-79.36958688450261!3d43.642897179121746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd8f4f6e1392b83db!2sSugar%20Beach%20Park!5e0!3m2!1sen!2sca!4v1573623664338!5m2!1sen!2sca'),
(18, 'HIGH PARK', 'Toronto, ON', 'nature', '\"img/highpark.jpg\" alt=\"high park\"', 'High Park is a wonderful place to go all year round and a nice escape from the city. During spring you’ll find Cherry Blossoms in some parts which are fun to photograph. And during the autumn the trees will change into stunning colours!', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23096.711887790694!2d-79.48021200485694!3d43.64631691824592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b35d32336f705%3A0xbe3f90e4cb1dbb25!2s1873%20Bloor%20St%20W%2C%20Toronto%2C%20ON%20M6R%202Z3!5e0!3m2!1sen!2sca!4v1573623717194!5m2!1sen!2sca');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Creation: Nov 13, 2019 at 03:19 AM
-- Last update: Nov 13, 2019 at 05:56 AM
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `users`:
--

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `city`) VALUES
(12, 'a', 'a@b.ca', '92eb5ffee6ae2fec3ad71c777531578f', ''),
(13, 'b', 'a@b.ca', '12eccbdd9b32918131341f38907cbbb5', ''),
(14, 'd', 'a@b.ca', 'e3e84538a1b02b1cc11bf71fe3169958', ''),
(15, 'asd', 'asdf@gwrfw.com', 'facad3d26157a1624543551ba3812040', ''),
(16, 'c', 'c@c.com', '4a8a08f09d37b73795649038408b5f33', ''),
(17, 'tiffany', 'tiffany@sfu.ca', 'tiffany', ''),
(18, 'karen', 'karen@sfu.ca', 'karen', ''),
(19, 'aaron', 'aaron@hotmail.com', 'aaron', ''),
(20, 'deanna', 'deannaz@gmail.com', 'deanna', ''),
(21, 'tubui', 'tubui@gmail.com', 'tu', ''),
(22, 'dakota', 'dakotaj@sfu.ca', 'dakotaj', ''),
(23, 'lillian', 'lillianchen@gmail.com', 'lillian', ''),
(24, 'andychen', 'andy@chen.com', 'andy', ''),
(25, 'andreww', 'aww7@gmail.com', 'aww7', ''),
(26, 'leanney', 'leanne@ua.com', 'anne', ''),
(27, 'billy', 'bill308@hotmail.com', 'bill', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
