-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2017 at 09:29 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posts`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `ID` int(4) NOT NULL,
  `Title` varchar(40) NOT NULL,
  `Textarea` varchar(10000) NOT NULL,
  `Image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`ID`, `Title`, `Textarea`, `Image`) VALUES
(1, 'Snakes', 'Snakes are elongated, legless, carnivorous reptiles of the suborder Serpentes[2] that can be distinguished from legless lizards by their lack of eyelids and external ears. Like all squamates, snakes are ectothermic, amniote vertebrates covered in overlapping scales. Many species of snakes have skulls with several more joints than their lizard ancestors, enabling them to swallow prey much larger than their heads with their highly mobile jaws', '1.jpg'),
(2, 'iPhone', ' An iPhone can shoot video (though this was not a standard feature until the iPhone 3GS), take photos, play music, send and receive email, browse the web, send and receive text messages, follow GPS navigation, record notes, perform mathematical calculations, and receive visual voicemail.[18] Other functionality, such as video games, reference works, and social networking, can be enabled by downloading mobile apps ijabsfkjbasfa', '2.jpg'),
(3, 'BMW 7 series', 'The first generation 7 Series was powered by straight-6 petrol engines, and following generations have been powered by straight-6, V8 and V12 engines with both natural aspiration and turbocharging. Since 1995, diesel engines have been included in the 7 Series range. Its main rivals include the Mercedes Benz S Class, Audi A8, Jaguar XJ, Maserati Quattroporte, and the Lexus LS.', '3.jpg'),
(6, 'Jack Nicholson', 'John Joseph \"Jack\" Nicholson (born April 22, 1937) is an American actor and filmmaker, who has performed for over 60 years. Nicholson is known for playing a wide range of starring or supporting roles, including satirical comedy, romance and dark portrayals of antiheroes and psychopathic characters. In many of his films, he has played the \"eternal outsider, the sardonic drifter\", someone who rebels against the social structure', '7.jpg'),
(7, 'Anthony Hopkins', 'Sir Philip Anthony Hopkins CBE (born 31 December 1937), is a Welsh actor of film, stage, and television.[1] After graduating from the Royal Welsh College of Music & Drama in 1957, he trained at the Royal Academy of Dramatic Art in London, and was then spotted by Laurence Olivier who invited him to join the Royal National Theatre. In 1968, he got his break in film in The Lion in Winter, playing Richard the Lionheart.', '8.jpg'),
(8, 'Al Pacino', 'Alfredo James \"Al\" Pacino (/pÉ™ËˆtÊƒiËnoÊŠ/; born April 25, 1940) is an American actor of stage and screen, filmmaker, and screenwriter. Pacino has had a career spanning more than fifty years, during which time he has received numerous accolades and honors both competitive and honorary, among them an Academy Award, two Tony Awards, two Primetime Emmy Awards, a British Academy Film Award, four Golden Globe Awards', '9.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
