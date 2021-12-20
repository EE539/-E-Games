-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: localhost    Database: web_schema
-- ------------------------------------------------------
-- Server version	8.0.27

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `kutuphane`
--

DROP TABLE IF EXISTS `kutuphane`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kutuphane` (
  `oid` varchar(10) COLLATE utf8_turkish_ci DEFAULT NULL,
  `oname` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kaid` varchar(10) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kutuphane`
--

LOCK TABLES `kutuphane` WRITE;
/*!40000 ALTER TABLE `kutuphane` DISABLE KEYS */;
INSERT INTO `kutuphane` VALUES ('Id15','Control','elif'),('Id11','Among Us','ecenaz'),('Id16','At Dead Of Night','ecenaz'),('Id14','Genshin Impact','ecenaz'),('Id10','Code Vein','ecenaz'),('Id03','It Takes Two','wekrj'),('Id01','Beyond Two Souls','wekrj'),('Id11','Among Us','wekrj'),('Id07','Crash Bandicoot N.sane Trilogy','wekrj');
/*!40000 ALTER TABLE `kutuphane` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oyunlar`
--

DROP TABLE IF EXISTS `oyunlar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oyunlar` (
  `oid` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `oname` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `ofiyat` int DEFAULT NULL,
  `opopularity` int DEFAULT NULL,
  `oyapimici` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `otarih` varchar(10) COLLATE utf8_turkish_ci DEFAULT NULL,
  `oaciklama` varchar(1000) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oyunlar`
--

LOCK TABLES `oyunlar` WRITE;
/*!40000 ALTER TABLE `oyunlar` DISABLE KEYS */;
INSERT INTO `oyunlar` VALUES ('Id01','Beyond Two Souls',79,2,'Quantic Dream','8.10.2013','Beyond: Two Souls is about the 15 years of Jodie Holmes (Ellen Page). He points to the user/viewer to interpret it, as he plans to be asked a lot about his life and youth, from a project about the 8-year-old being 23 years old.'),('Id02','Detroit Become Human',110,1,'Quantic Dream','24.04.2018','The game focuses on the three stories of the android named Kara, Connor and Markus. The service android Black has evolved into consciousness as his master, devoted to the androids\' struggle to escape from the android\'s owner, Markus, while Connor is designed to prey on task androids.'),('Id03','It Takes Two',260,2,'EA Games','26.03.2021','Rose creates two toys that represent mother and herself, and these toys control May and Cody, which can be mysteriously brought to life. May and Cody find it difficult to find a way back and an interesting adventure awaits them in the process.'),('Id04','Apex Legends',10,1,'EA Games','4.02.2019','Having class separation is done in groups of three. Teamwork Apex Legends to finish a Battle Royale game. In groups of three, you get your gas in the game, accompanied by a musical accompaniment. One person becomes the leader and can take down the whole team on the map.'),('Id05','Spyro Reignited Trilogy',164,1,'Vicarious Visions','13.11.2018','Spyro the Dragon, Spyro 2: Ripto\'s Rage! and Spyro: Year of the Dragon. The developer team, which has improved the gameplay mechanics of the game, has been successfully adapted graphically. Adding new animations to Spyro, the team has compared the game in detail to a trained beast of Pix.'),('Id06','Shadow Of The Tomb Raider',120,1,'Square Enix','12.09.2018','As Lara Croft races to save the world from Mayan apocalypse, she must be the Tomb Raider destined to be destined.'),('Id07','Crash Bandicoot N.sane Trilogy',164,2,'Vicarious Visions','30.06.2017','The most affectionate marsupial Crash Bandicoot is back! She is ecstatic and ready to dance with N. Sane Trilogy game collection. Now it may seem like the Crash Bandicoot will never end before. Navigate, jump, wump and jump through epic challenges and adventures across the three games that started it all: Crash Bandicoot, Crash Bandicoot 2: Cortex Strikes Back and Crash Bandicoot 3: Warped. Retry your favorite Skirmish moments with the overall revamped and get ready to put some UMPH in your WUMP!\n'),('Id08','A Plague Tale: Innocence',62,1,'Asobo Studio','14.05.2019','Follow the story of Amicia and Hugo, the most historic heartbreaking journey in history.'),('Id09','Sword Art Online Fatal Bullet',73,1,'Bandai Namco','23.02.2018','Experience the original story of the main character of the Gun Gale Online story. Create your avatar and explore devastated regions as you experience the exciting game-play in this action RPG game.'),('Id10','Code Vein',260,2,'Bandai Namco','27.09.2019','Build your own Ghost, assemble your team and portray into the furthest reaches of hell to illuminate your past and escape your true nightmare in Code Vein.'),('Id11','Among Us',12,3,'Innersloth','15.06.2018','You\'re talking about 4-15 players getting ready to race in space, or when local WiFi is going, the profits they\'ll be able to keep racing with one or more players from the Crew yet!'),('Id12','Honkai Impact 3rd',25,1,'Mihoyo','14.10.2016','Honkai Impact 3rd - The ultimate anime come true! HD kid shading, endless timings, feedback... A next-gen real-time action! Education in the media is a story, immersive preparation, be a voice full of fiction... Be a voice of legend!\n'),('Id13','Scarlet Nexus',250,1,'Bandai Namco','24.06.2021','Choose between the psionics Yuito and Kasane, each with their own psychokinetic ability and reason to fight. Caught between technology and psychic abilities, discover the secrets of Brain Punk\'s future by completing both stories.'),('Id14','Genshin Impact',50,2,'Mihoyo','28.09.2020','An unknown device in the personalities of a land called Teyvat separates 2 devices. While it is a mystery, since it is one of the brothers who came from one of the others, the brother investigates the course of falling from the name of isevat and finding teyvattani and getting out of Teyvat.'),('Id15','Control',123,2,'Remedy Entertainment','27.08.2019','You\'ve got the Federal Bureau of Control in your handâ€¦ You\'re asking me to stop it. Your weapons are now yours in the epic world set for a deep and unintended relentless enemy. Containment failed, endangered. Will you regain control?'),('Id16','At Dead Of Night',66,2,'Baggy Cat Ltd.','19.11.2020','In Dead Of Night, it is an encouraging and encouraging film. It blends live action and graphics to create a unique grouper to create horror.');
/*!40000 ALTER TABLE `oyunlar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sepet`
--

DROP TABLE IF EXISTS `sepet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sepet` (
  `oid` varchar(10) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kaid` varchar(10) COLLATE utf8_turkish_ci DEFAULT NULL,
  `oname` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `ofiyat` varchar(10) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sepet`
--

LOCK TABLES `sepet` WRITE;
/*!40000 ALTER TABLE `sepet` DISABLE KEYS */;
INSERT INTO `sepet` VALUES ('Id07','','Crash Bandicoot N.sane Trilogy','164');
/*!40000 ALTER TABLE `sepet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `kaid` varchar(10) NOT NULL,
  `kmail` varchar(40) NOT NULL,
  `ksifre` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`kaid`,`kmail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('ecenaz','ecenazelverdi@gmail.com','1234'),('elif','elifbeyza99st@gmail.com','12345e'),('mehmet','dentmete@gmail.com','asd'),('rnnskat','crazygirl@gmail.com','pisipisi'),('sad','mirranna@naver.com','456'),('wekrj','mail@mail.com','abd');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-10 23:13:25
