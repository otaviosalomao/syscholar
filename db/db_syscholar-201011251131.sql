-- MySQL dump 10.13  Distrib 5.1.49, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: syscholar_development
-- ------------------------------------------------------
-- Server version	5.1.49-1ubuntu8.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `acos`
--

DROP TABLE IF EXISTS `acos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acos`
--

LOCK TABLES `acos` WRITE;
/*!40000 ALTER TABLE `acos` DISABLE KEYS */;
INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES (1,NULL,NULL,NULL,'controllers',1,72),(2,1,NULL,NULL,'Pages',2,5),(3,2,NULL,NULL,'display',3,4),(4,1,NULL,NULL,'Groups',6,13),(5,4,NULL,NULL,'build_acl',7,8),(6,1,NULL,NULL,'Home',14,17),(7,6,NULL,NULL,'index',15,16),(8,1,NULL,NULL,'Materias',18,25),(9,8,NULL,NULL,'cadastrarMateria',19,20),(10,1,NULL,NULL,'Provas',26,31),(11,1,NULL,NULL,'Tarefas',32,37),(12,1,NULL,NULL,'Users',38,47),(13,12,NULL,NULL,'login',39,40),(14,12,NULL,NULL,'logout',41,42),(15,12,NULL,NULL,'cadastrar',43,44),(16,1,NULL,NULL,'Trabalhos',48,53),(17,16,NULL,NULL,'cadastrar',49,50),(18,16,NULL,NULL,'index',51,52),(19,1,NULL,NULL,'Compromissos',54,59),(20,19,NULL,NULL,'cadastrar',55,56),(21,19,NULL,NULL,'index',57,58),(22,1,NULL,NULL,'Arquivos',60,65),(23,22,NULL,NULL,'cadastrar',61,62),(24,22,NULL,NULL,'index',63,64),(25,8,NULL,NULL,'cadastrar',21,22),(26,8,NULL,NULL,'index',23,24),(27,11,NULL,NULL,'cadastrar',33,34),(28,11,NULL,NULL,'index',35,36),(29,12,NULL,NULL,'editar',45,46),(30,10,NULL,NULL,'cadastrar',27,28),(31,10,NULL,NULL,'index',29,30),(32,4,NULL,NULL,'cadastrar',9,10),(33,4,NULL,NULL,'initDB',11,12),(34,1,NULL,NULL,'Calendario',66,71),(35,34,NULL,NULL,'cadastrar',67,68),(36,34,NULL,NULL,'index',69,70);
/*!40000 ALTER TABLE `acos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aros`
--

DROP TABLE IF EXISTS `aros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros`
--

LOCK TABLES `aros` WRITE;
/*!40000 ALTER TABLE `aros` DISABLE KEYS */;
INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES (1,NULL,'User',3,NULL,1,2),(2,NULL,'Group',3,NULL,3,4),(3,NULL,'Group',4,NULL,5,6),(4,NULL,'Group',1,NULL,7,8),(5,NULL,'Group',2,NULL,9,22),(6,5,'User',1,NULL,10,11),(7,5,'User',2,NULL,12,13),(8,5,'User',3,NULL,14,15),(9,5,'User',4,NULL,16,17),(10,5,'User',1,NULL,18,19),(11,5,'User',2,NULL,20,21);
/*!40000 ALTER TABLE `aros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aros_acos`
--

DROP TABLE IF EXISTS `aros_acos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros_acos`
--

LOCK TABLES `aros_acos` WRITE;
/*!40000 ALTER TABLE `aros_acos` DISABLE KEYS */;
INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES (1,4,1,'1','1','1','1'),(2,5,1,'1','1','1','1');
/*!40000 ALTER TABLE `aros_acos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compromissos`
--

DROP TABLE IF EXISTS `compromissos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `compromissos` (
  `id` int(11) NOT NULL,
  `resumo` varchar(256) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `descrição` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compromissos`
--

LOCK TABLES `compromissos` WRITE;
/*!40000 ALTER TABLE `compromissos` DISABLE KEYS */;
/*!40000 ALTER TABLE `compromissos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `alterado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` (`id`, `nome`, `alterado`) VALUES (1,'Administrador','2010-11-23 11:10:55'),(2,'Usuario','2010-11-23 11:11:00');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materias`
--

DROP TABLE IF EXISTS `materias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `nome` varchar(256) NOT NULL,
  `professor` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `curso` varchar(50) NOT NULL,
  `ano` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materias`
--

LOCK TABLES `materias` WRITE;
/*!40000 ALTER TABLE `materias` DISABLE KEYS */;
/*!40000 ALTER TABLE `materias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `provas`
--

DROP TABLE IF EXISTS `provas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `provas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `materia_id` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nota` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provas`
--

LOCK TABLES `provas` WRITE;
/*!40000 ALTER TABLE `provas` DISABLE KEYS */;
/*!40000 ALTER TABLE `provas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tarefas`
--

DROP TABLE IF EXISTS `tarefas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tarefas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_entrega` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `descricao` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tarefas`
--

LOCK TABLES `tarefas` WRITE;
/*!40000 ALTER TABLE `tarefas` DISABLE KEYS */;
/*!40000 ALTER TABLE `tarefas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trabalhos`
--

DROP TABLE IF EXISTS `trabalhos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trabalhos` (
  `id` int(11) NOT NULL,
  `resumo` varchar(256) NOT NULL,
  `materia_id` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `descricao` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trabalhos`
--

LOCK TABLES `trabalhos` WRITE;
/*!40000 ALTER TABLE `trabalhos` DISABLE KEYS */;
/*!40000 ALTER TABLE `trabalhos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(11) NOT NULL,
  `telefone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `endereco` varchar(11) NOT NULL,
  `data_nascimento` datetime NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `group_id` int(11) NOT NULL,
  `senha` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `nome`, `telefone`, `email`, `endereco`, `data_nascimento`, `sexo`, `group_id`, `senha`) VALUES (1,'Otavio',84848484,'otaviodigital@gmail.com','geraldo jaq','2026-12-19 08:00:00','',2,'3b9ec5ec31211b291c331bf48093bb4aa7e952b0'),(2,'teste',1231321,'teste@teste.com','232123','0000-00-00 00:00:00','',2,'3341142fe1a9af7d9a30b2e447bb0667');
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

-- Dump completed on 2010-11-25 11:31:40
