-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2020 at 05:11 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Coughanour_Final`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `catID` int(4) NOT NULL,
  `catName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`catID`, `catName`) VALUES
(1, 'English/Literature'),
(2, 'History'),
(3, 'Geography'),
(4, 'Science');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `gradeID` int(1) NOT NULL,
  `gradeName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`gradeID`, `gradeName`) VALUES
(1, '1st Grade'),
(2, '2nd Grade'),
(3, '3rd Grade'),
(4, '4th Grade'),
(5, '5th Grade');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `gradeID` int(1) NOT NULL,
  `catID` int(1) NOT NULL,
  `quesID` int(2) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `userAnswer` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`gradeID`, `catID`, `quesID`, `question`, `answer`, `userAnswer`) VALUES
(1, 1, 1, 'The plural of moose is?', 'moose', ''),
(1, 1, 2, 'How many letters are in the English alphabet?', '26', ''),
(1, 1, 3, 'In the story about the boy who cried wolf, what was the lesson?', 'tell the truth', ''),
(1, 1, 4, 'What is the term for a word that is similar in meaning to another word?', 'synonym', ''),
(1, 1, 5, 'What type of words should be capitalized?', 'Proper nouns', ''),
(1, 2, 26, 'The first Thanksgiving was celebrated by Native Americans and what other groups of people?', 'pilgrims', ''),
(1, 2, 27, 'From which country did Mexico gain its independence in the 19th century?', 'Spain', ''),
(1, 2, 28, 'Who invented the lighbulb in 1879?', 'Thomas Edison', ''),
(1, 2, 29, 'Which language is the most widely spoken in South America?', 'Spanish', ''),
(1, 2, 30, 'Neil Armstrong and Buzz Aldrin were the first two men in the entire word to do what?', 'walk on the moon', ''),
(1, 3, 51, 'How many continents are there?', '7', ''),
(1, 3, 52, 'What county is Paris the capital of?', 'France', ''),
(1, 3, 53, 'In which country are the famous Pyramids of Giza?', 'Egypt', ''),
(1, 3, 54, 'In what city is the White House located?', 'Washington D.C', ''),
(1, 3, 55, 'How many states are in the United States of America?', '50', ''),
(1, 4, 76, 'What causes tides?', 'The moon', ''),
(1, 4, 77, 'The south pole of the magnet and the north pole of another magnet will do what?', 'stick together', ''),
(1, 4, 78, 'What is the force that causes objects to fall to the ground?', 'gravity', ''),
(1, 4, 79, 'A caterpillar changes and grows into a what? ', 'butterfly', ''),
(1, 4, 80, 'What is the biggest organ in the human body?', 'liver', ''),
(2, 1, 6, 'What type of literature features magical creatures, such as giants, gnomes, and goblins?', 'fairytales', ''),
(2, 1, 7, 'Is “red” an adjective, a noun, or both?', 'both', ''),
(2, 1, 8, 'What is the term for a word that has the opposite meaning of another word?', 'Antonym', ''),
(2, 1, 9, 'What are the five interrogative or question words?', 'who, what, when, where, why', ''),
(2, 1, 10, 'What are the comparative and superlative forms of the word big?', 'bigger and biggest', ''),
(2, 2, 31, 'What are the three branches of the United States government?', 'legislative, judicial, and executive', ''),
(2, 2, 32, 'Which was was fought between the north and south regions in the United States?', 'The Civil War', ''),
(2, 2, 33, 'Italy, Japan, and Germany\'s alliance was called what during WWII?', 'The Axis of Evil', ''),
(2, 2, 34, 'What city was the first to be attacked by an atomic bomb?', 'Hiroshima', ''),
(2, 2, 35, 'What are the first 10 amendments to the Constitution called?', 'The Bill of Rights', ''),
(2, 3, 56, 'Which state is called the Lone Star state?', 'Texas', ''),
(2, 3, 57, 'In what state is the Grand Canyon located?', 'Arizona', ''),
(2, 3, 58, 'What three countries are located in North America?', 'Canada, the United States, and Mexico', ''),
(2, 3, 59, 'To travel from New York to London, one must fly over which ocean?', 'The Atlantic', ''),
(2, 3, 60, 'In what country is the famous Taj Mahal located?', 'India', ''),
(2, 4, 81, 'What is H2O also known as?', 'water', ''),
(2, 4, 82, 'What gas is in the air we breathe?', 'Oxygen', ''),
(2, 4, 83, 'What gas do plants breathe and animals breathe out?', 'Carbon Dioxide', ''),
(2, 4, 84, 'Earth is located in what galaxy?', 'The Milky Way', ''),
(2, 4, 85, 'True or false? Bats are mammals.', 'True', ''),
(3, 1, 11, 'The person in a novel who tells the story from a third-person perspective is called a what?', 'narrator', ''),
(3, 1, 12, 'What is the name of the book about a friendship between a pig name Wilbur and a spider named Charlotte?', 'Charlotte\'s Web', ''),
(3, 1, 13, 'Adding conjunctions such as and or but turns a simple sentence into what type of sentence?', 'compound sentence', ''),
(3, 1, 14, 'Who is the author of James and the Giant Peach?', 'Roald Dahl', ''),
(3, 1, 15, 'The main series of events in a story is called a what?', 'plot', ''),
(3, 2, 36, 'What type of feather, beginning with letter Q, did people write with during the Middle Ages?', 'Quill', ''),
(3, 2, 37, 'Julius Caesar was the emperor of what empire?', 'The Roman Empire', ''),
(3, 2, 38, 'What is Rosa Parks most famous for?', 'Refusing to give her seat up in the front of the bus', ''),
(3, 2, 39, 'The first fireworks were invented in the 7th century in what country?', 'China', ''),
(3, 2, 40, 'Name the American president on the half dollar coin who was assassinated in 1963.', 'John F. Kennedy', ''),
(3, 3, 61, 'What is the longest river in the World?', 'The Amazon', ''),
(3, 3, 62, 'On what continent is the country of Greece located?', 'Europe', ''),
(3, 3, 63, 'What is the name for a body of land that is completely surrounded by water?', 'Island', ''),
(3, 3, 64, 'What is the capital of New York?', 'Albany', ''),
(3, 3, 65, 'How many Great Lakes are there in the United States?', '4', ''),
(3, 4, 86, 'What phenomenon might be felt on the surface when two tectonic plates rub against each other? ', 'Earthquake ', ''),
(3, 4, 87, 'The hardest naturally occurring mineral is?', 'Diamond', ''),
(3, 4, 88, 'What is the closest planet to the sun? ', 'Mercury', ''),
(3, 4, 89, 'The process by which plants eat and make energy is called...', 'Photosynthesis', ''),
(3, 4, 90, 'Does the sun orbit the Earth?', 'No', ''),
(4, 1, 16, 'What is the main character in a story called?', 'protagonist', ''),
(4, 1, 17, 'What type of word is truthfully', 'adverb', ''),
(4, 1, 18, 'In the book titled The Lion, the Witch, and the Wardrobe, what is the last comma called?', 'Oxford comma', ''),
(4, 1, 19, 'A story conveying a moral lesson is called what?', 'fable', ''),
(4, 1, 20, 'What do you call a group of crows?', 'murder', ''),
(4, 2, 41, 'What ancient civilization built the Machu Pichu complex in Peru?', 'The Incas', ''),
(4, 2, 42, 'The ancient Egyptian writing system was called what?', 'Hieroglyphics', ''),
(4, 2, 43, 'From whom did the United States buy territory in the Louisiana Purchase?', 'Napoleon/France', ''),
(4, 2, 44, 'Who wrote the national anthem of the United States of America?', 'Francis Scott Key', ''),
(4, 2, 45, 'The Battle of Gettysburg was fought in which war?', 'The Civil War', ''),
(4, 3, 66, 'Where is the largest desert in the world located?', 'Northern Africa', ''),
(4, 3, 67, 'How many kingdoms are part of the United Kingdom?', '4', ''),
(4, 3, 68, 'Which country is largest in size?', 'Russia', ''),
(4, 3, 69, 'The United States and Mexico are separated by which river?', 'The Rio Grande', ''),
(4, 3, 70, 'What is the southernmost continent called?', 'Antarctica', ''),
(4, 4, 91, 'What is the part of the eye that controls how much light enters?', 'Pupil', ''),
(4, 4, 92, 'What planet is nicknamed the \'Red Planet\'?', 'Mars', ''),
(4, 4, 93, 'Animals that only eat meat are known as?', 'Carnivores', ''),
(4, 4, 94, 'How long does the Earth take to revolve once around the sun?', '365 days ', ''),
(4, 4, 95, 'What is the freezing point of water?', '32 ', ''),
(5, 1, 21, 'Who is the creator of the classic book characters Tom Sawyer and Huckleberry Finn?', 'Mark Twain', ''),
(5, 1, 22, 'The woerds: \'the\', \'an\', and \'a\' are known as what in English grammar?', 'articles', ''),
(5, 1, 23, 'Who is the author of the 1960 novel about social and racial inequality to Kill a Mockingbird?', 'Harper Lee', ''),
(5, 1, 24, 'Often seen at the end of a sentence, the three trailing dots that indicate the omission from speech or writing of a word or words that are superfluous or able to be understood from contextual clues are known as', 'ellipsis', ''),
(5, 1, 25, 'What is the name of the most famous English playwright?', 'William Shakespeare', ''),
(5, 2, 46, 'What was the name of the last Queen of France?', 'Marie Antoinette', ''),
(5, 2, 47, 'The region known as the \'Fertile Crescent\' is located in present day...', 'Middle East', ''),
(5, 2, 48, 'The modern day city of Istanbul was known by what name in the 13th century?', 'Constantinople', ''),
(5, 2, 49, 'The French and Indian war, which began in 1754, became the North American theater of this worldwide was that lasted from 1756 to 1763', 'The Seven Years War', ''),
(5, 2, 50, 'In which decade did Hong Kong rever from British rule?', '1990s', ''),
(5, 3, 71, 'What is the main language spoken in the Canadian province of Quebec?', 'French', ''),
(5, 3, 72, 'Which country is both an island and a continent?', 'Australia ', ''),
(5, 3, 73, 'What is the name of the sea bordered by Europe to the north and North Africa to the south?', 'The Mediterranean Sea', ''),
(5, 3, 74, 'The mountain range that includes Mouth Everest is called', 'The Himalayas ', ''),
(5, 3, 75, 'Imaginary lines traversing the globe from pole to pole are called', 'Meridians', ''),
(5, 4, 96, 'The Earth is at least how many billion years old? ', '4 Billion ', ''),
(5, 4, 97, 'What are the three states of matter?', 'Solid, liquid, and gas', ''),
(5, 4, 98, 'The Earth has 4 layers, the thickest of which is the mantle. What is the thinnest layer called?', 'The crust ', ''),
(5, 4, 99, 'Animals without backbones are known as?', 'Invertebrates', ''),
(5, 4, 100, 'What species can live on both land and water?', 'Amphibians', '');

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `ID` int(3) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `score` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`ID`, `Name`, `score`) VALUES
(1, 'John Wick', 20),
(2, 'Sonic', 5),
(3, 'Rachel Coughanour', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`catID`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`gradeID`),
  ADD KEY `gradeID` (`gradeID`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`gradeID`,`catID`,`quesID`) USING BTREE,
  ADD KEY `catID` (`catID`),
  ADD KEY `gradeID` (`gradeID`);

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `fkcat` FOREIGN KEY (`catID`) REFERENCES `categories` (`catID`),
  ADD CONSTRAINT `fkgrade` FOREIGN KEY (`gradeID`) REFERENCES `grade` (`gradeID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
