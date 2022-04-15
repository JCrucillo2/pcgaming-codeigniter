-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 14, 2022 at 09:08 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jcrucillo2_ci_2020`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_gaming`
--

CREATE TABLE `ci_gaming` (
  `game` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `game_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `timedate` text NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_gaming`
--

INSERT INTO `ci_gaming` (`game`, `description`, `game_id`, `author_id`, `img_name`, `timedate`) VALUES
('The Witcher 3: Wild Hunt', 'The Witcher 3: Wild Hunt is an action role-playing game developed by Polish developer CD Projekt Red, and first published in 2015. It is the sequel to the 2011 game The Witcher 2: Assassins of Kings and the third game in The Witcher video game series, played in an open world with a third-person perspective. The games are based on The Witcher series of fantasy novels written by Andrzej Sapkowski.\r\n\r\nThe game takes place in a fictional fantasy world based on Slavic mythology. Players control Geralt of Rivia, a monster slayer for hire known as a Witcher, and search for his adopted daughter, who is on the run from the otherworldly Wild Hunt. Players battle the game\'s many dangers with weapons and magic, interact with non-player characters, and complete quests to acquire experience points and gold, which are used to increase Geralt\'s abilities and purchase equipment. The game\'s story has three possible endings, determined by the player\'s choices at key points in the narrative. Development began in 2011 and lasted for three and a half years. Central and Northern European cultures formed the basis of the game\'s world. REDengine 3 enabled the developer to create a complex story without compromising the game\'s open world. The music was primarily composed by Marcin Przyby?owicz and performed by the Brandenburg State Orchestra. ', 41, 4, 'witcher322.jpg', '2022-04-01 15:24:35'),
('Minecraft', 'Minecraft is a sandbox video game developed by Mojang Studios. The game was created by Markus \"Notch\" Persson in the Java programming language. Following several early private testing versions, it was first made public in May 2009 before fully releasing in November 2011, with Notch stepping down and Jens \"Jeb\" Bergensten taking over development. Minecraft has since been ported to several other platforms and is the best-selling video game of all time, with over 238 million copies sold and nearly 140 million monthly active users as of 2021.\r\n\r\nIn Minecraft, players explore a blocky, procedurally generated 3D world with virtually infinite terrain, and may discover and extract raw materials, craft tools and items, and build structures, earthworks and simple machines. Depending on game mode, players can fight computer-controlled mobs, as well as cooperate with or compete against other players in the same world. Game modes include a survival mode, in which players must acquire resources to build the world and maintain health, and a creative mode where players have unlimited resources and access to flight. Players can modify the game to create new gameplay mechanics, items, and assets. ', 42, 2, 'minecraft6.jpg', '2022-04-01 15:25:24'),
('Grand Theft Auto V', 'Grand Theft Auto V is a 2013 action-adventure game developed by Rockstar North and published by Rockstar Games. It is the seventh main entry in the Grand Theft Auto series, following 2008\'s Grand Theft Auto IV, and the fifteenth instalment overall. Set within the fictional state of San Andreas, based on Southern California, the single-player story follows three protagonists—retired bank robber Michael De Santa, street gangster Franklin Clinton, and drug dealer and gunrunner Trevor Philips—and their attempts to commit heists while under pressure from a corrupt government agency and powerful criminals. The open world design lets players freely roam San Andreas\' open countryside and the fictional city of Los Santos, based on Los Angeles.\r\n\r\nThe game is played from either a third-person or first-person perspective, and its world is navigated on foot and by vehicle. Players control the three lead protagonists throughout single-player and switch among them, both during and outside missions. The story is centred on the heist sequences, and many missions involve shooting and driving gameplay. A \"wanted\" system governs the aggression of law enforcement response to players who commit crimes. Grand Theft Auto Online, the game\'s online multiplayer mode, lets up to 30 players engage in a variety of different cooperative and competitive game modes. ', 43, 2, 'gtav21.jpg', '2022-04-01 22:15:37'),
('Elden Ring', 'Elden Ring is an action role-playing game developed by FromSoftware and published by Bandai Namco Entertainment. The game was directed by Hidetaka Miyazaki and made in collaboration with fantasy novelist George R. R. Martin, who provided material for the game\'s setting. It was released for Microsoft Windows, PlayStation 4, PlayStation 5, Xbox One, and Xbox Series X/S on February 25, 2022.\r\n\r\nElden Ring is presented through a third-person perspective, with players freely roaming its interactive open world. Gameplay elements include combat, featuring several types of weapons and magic spells, horseback riding, and crafting. Elden Ring received critical acclaim, with praise for its open world gameplay. The game sold 12 million copies worldwide within three weeks of its release. ', 53, 3, 'eldenring4.jpg', '2022-04-02 00:58:16'),
('Sekiro: Shadows Die Twice', 'Sekiro: Shadows Die Twice is a 2019 action-adventure game developed by FromSoftware and published by Activision. The game follows a shinobi known as Wolf as he attempts to take revenge on a samurai clan who attacked him and kidnapped his lord. It was released for Microsoft Windows, PlayStation 4, and Xbox One in March 2019 and for Stadia in October 2020.\r\n\r\nGameplay is focused on stealth, exploration, and combat, with a particular emphasis on boss battles. The game takes place in a fictionalized Japan during the Sengoku period and makes strong references to Buddhist mythology and philosophy. While making the game, lead director Hidetaka Miyazaki wanted to create a new intellectual property (IP) that marked a departure from the Souls series of games also made by FromSoftware. The developers looked to games such as The Mysterious Murasame Castle and the Tenchu series for inspiration.\r\n\r\nSekiro was praised by critics, who complimented its gameplay and setting, and compared it to the Souls games, although opinions on its difficulty were mixed. It was nominated for various awards and won several, including The Game Award for Game of the Year. The game sold over five million copies by July 2020. ', 54, 5, 'sekiro.jpg', '2022-04-02 16:01:02'),
('Assasin\'s Creed Valhalla', 'Assassin\'s Creed Valhalla is a 2020 action role-playing video game developed by Ubisoft Montreal and published by Ubisoft. It is the twelfth major installment in the Assassin\'s Creed series, and the successor to 2018\'s Assassin\'s Creed Odyssey. Principally set in the years 872–878 AD, the game recounts a fictional story during the Viking expansions into the British Isles. Players control Eivor Varinsdottir, a Viking raider who, while attempting to establish a new Viking clan in England, becomes embroiled in the centuries-old conflict between the Assassin Brotherhood, who fight for peace and liberty, and the Templar Order, who desire peace through control.[c] The modern-day portion of the story is set in the 21st century and follows Layla Hassan, an Assassin who relives Eivor\'s memories so as to find a way to save the Earth from destruction.\r\n\r\nDevelopment of the game began in 2017, around the release of Assassin\'s Creed Origins. Ubisoft Montreal led its three-year development with help from fourteen other Ubisoft studios worldwide, as well as Sperasoft. Numerous people involved in the development of past Assassin\'s Creed games returned for Valhalla, including Ashraf Ismail,[b] who served as the creative director for Assassin\'s Creed IV: Black Flag (2013) and Origins; Darby McDevitt, the lead writer for Black Flag and Assassin\'s Creed: Revelations (2011) and co-writer of Assassin\'s Creed Unity (2014); and composers Jesper Kyd and Sarah Schachner, who composed the game\'s music alongside Einar Selvik. Similarly to Origins and Odyssey, the team conducted extensive research into the time period to make the game world as historically accurate as possible, and drew inspiration from Norse mythology for certain narrative elements. The team also sought to address some issues found by players with Odyssey, such as its overambitiousness, small focus on the Assassin-Templar conflict, and the absence of traditional Assassin\'s Creed gameplay elements like social skills. ', 56, 5, 'acvalhalla.jpg', '2022-04-03 00:07:04'),
('Dark Souls 3', 'Dark Souls III is a 2016 action role-playing video game developed by FromSoftware and published by Bandai Namco Entertainment for PlayStation 4, Xbox One, and Microsoft Windows. It is the fourth overall entry of the Souls series and the final installment of the Dark Souls trilogy.\r\n\r\nIt is an action role-playing game played in a third-person perspective. Players have access to various weapons, armour, magic, and consumables that they can use to fight their enemies. Bonfires serve as checkpoints. The Estus Flask is the consumable used for healing in Dark Souls III. Ashen Estus Flasks restore focus points (FP), which can be used for magic or weapon arts. Hidetaka Miyazaki, the creator of the series, returned to direct the game after handing the development duties of Dark Souls II to others in FromSoftware.\r\n\r\nDark Souls III was critically and commercially successful, with critics calling it a worthy and fitting conclusion to the series. It was the fastest-selling game in Bandai Namco\'s history, shipping over three million copies within its first two months and over 10 million by 2020. Two downloadable content (DLC) expansions, Ashes of Ariandel and The Ringed City, were also made. A complete version containing the base game and both expansions, Dark Souls III: The Fire Fades, was released in April 2017. ', 58, 3, 'ds3.jpg', '2022-04-03 00:24:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_gaming`
--
ALTER TABLE `ci_gaming`
  ADD PRIMARY KEY (`game_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ci_gaming`
--
ALTER TABLE `ci_gaming`
  MODIFY `game_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
