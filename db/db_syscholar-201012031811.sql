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
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acos`
--

LOCK TABLES `acos` WRITE;
/*!40000 ALTER TABLE `acos` DISABLE KEYS */;
INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES (1,NULL,NULL,NULL,'controllers',1,122),(2,1,NULL,NULL,'Pages',2,7),(3,2,NULL,NULL,'display',3,4),(4,1,NULL,NULL,'Groups',8,17),(5,4,NULL,NULL,'build_acl',9,10),(6,1,NULL,NULL,'Home',18,23),(7,6,NULL,NULL,'index',19,20),(8,1,NULL,NULL,'Materias',24,37),(9,8,NULL,NULL,'cadastrarMateria',25,26),(10,1,NULL,NULL,'Provas',38,49),(11,1,NULL,NULL,'Tarefas',50,57),(12,1,NULL,NULL,'Users',58,69),(13,12,NULL,NULL,'login',59,60),(14,12,NULL,NULL,'logout',61,62),(15,12,NULL,NULL,'cadastrar',63,64),(16,1,NULL,NULL,'Trabalhos',70,81),(17,16,NULL,NULL,'cadastrar',71,72),(18,16,NULL,NULL,'index',73,74),(19,1,NULL,NULL,'Compromissos',82,93),(20,19,NULL,NULL,'cadastrar',83,84),(21,19,NULL,NULL,'index',85,86),(22,1,NULL,NULL,'Arquivos',94,107),(23,22,NULL,NULL,'cadastrar',95,96),(24,22,NULL,NULL,'index',97,98),(25,8,NULL,NULL,'cadastrar',27,28),(26,8,NULL,NULL,'index',29,30),(27,11,NULL,NULL,'cadastrar',51,52),(28,11,NULL,NULL,'index',53,54),(29,12,NULL,NULL,'editar',65,66),(30,10,NULL,NULL,'cadastrar',39,40),(31,10,NULL,NULL,'index',41,42),(32,4,NULL,NULL,'cadastrar',11,12),(33,4,NULL,NULL,'initDB',13,14),(34,1,NULL,NULL,'Calendario',108,115),(35,34,NULL,NULL,'cadastrar',109,110),(36,34,NULL,NULL,'index',111,112),(37,8,NULL,NULL,'excluir',31,32),(38,8,NULL,NULL,'editar',33,34),(39,1,NULL,NULL,'Lookup',116,121),(40,39,NULL,NULL,'listarMaterias',117,118),(41,2,NULL,NULL,'converteData',5,6),(42,16,NULL,NULL,'converteData',75,76),(43,19,NULL,NULL,'converteData',87,88),(44,39,NULL,NULL,'converteData',119,120),(45,22,NULL,NULL,'converteData',99,100),(46,8,NULL,NULL,'converteData',35,36),(47,11,NULL,NULL,'converteData',55,56),(48,12,NULL,NULL,'converteData',67,68),(49,10,NULL,NULL,'excluir',43,44),(50,10,NULL,NULL,'converteData',45,46),(51,6,NULL,NULL,'converteData',21,22),(52,4,NULL,NULL,'converteData',15,16),(53,34,NULL,NULL,'converteData',113,114),(54,10,NULL,NULL,'editar',47,48),(55,22,NULL,NULL,'buscarArquivo',101,102),(56,22,NULL,NULL,'deletarArquivo',103,104),(57,16,NULL,NULL,'excluir',77,78),(58,16,NULL,NULL,'editar',79,80),(59,22,NULL,NULL,'excluir',105,106),(60,19,NULL,NULL,'excluir',89,90),(61,19,NULL,NULL,'editar',91,92);
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
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros`
--

LOCK TABLES `aros` WRITE;
/*!40000 ALTER TABLE `aros` DISABLE KEYS */;
INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES (1,NULL,'User',3,NULL,1,2),(2,NULL,'Group',3,NULL,3,4),(3,NULL,'Group',4,NULL,5,6),(4,NULL,'Group',1,NULL,7,8),(5,NULL,'Group',2,NULL,9,30),(6,5,'User',1,NULL,10,11),(7,5,'User',2,NULL,12,13),(8,5,'User',3,NULL,14,15),(9,5,'User',4,NULL,16,17),(10,5,'User',1,NULL,18,19),(11,5,'User',2,NULL,20,21),(12,5,'User',1,NULL,22,23),(13,5,'User',1,NULL,24,25),(14,5,'User',1,NULL,26,27),(15,5,'User',2,NULL,28,29);
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
-- Table structure for table `arquivos`
--

DROP TABLE IF EXISTS `arquivos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `arquivos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `observacao` varchar(256) NOT NULL,
  `arquivo` varchar(256) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `arquivos`
--

LOCK TABLES `arquivos` WRITE;
/*!40000 ALTER TABLE `arquivos` DISABLE KEYS */;
/*!40000 ALTER TABLE `arquivos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compromissos`
--

DROP TABLE IF EXISTS `compromissos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `compromissos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `local` varchar(50) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `observacao` varchar(256) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compromissos`
--

LOCK TABLES `compromissos` WRITE;
/*!40000 ALTER TABLE `compromissos` DISABLE KEYS */;
INSERT INTO `compromissos` (`id`, `local`, `data`, `observacao`, `user_id`) VALUES (2,'asdasdsa','1986-12-26 13:00:00','dsadsadsadasd',1);
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `professor` varchar(50) NOT NULL,
  `tipo` int(2) NOT NULL,
  `curso` varchar(256) NOT NULL,
  `ano` year(4) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materias`
--

LOCK TABLES `materias` WRITE;
/*!40000 ALTER TABLE `materias` DISABLE KEYS */;
INSERT INTO `materias` (`id`, `nome`, `professor`, `tipo`, `curso`, `ano`, `user_id`) VALUES (1,'Qualidade de Software','Debora',0,'Analise de Sistemas',2010,1);
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
  `nota` float DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provas`
--

LOCK TABLES `provas` WRITE;
/*!40000 ALTER TABLE `provas` DISABLE KEYS */;
INSERT INTO `provas` (`id`, `materia_id`, `data`, `nota`, `user_id`) VALUES (9,7,'2010-12-20 22:00:00',10,0),(10,8,'1986-12-26 13:00:00',1,0);
/*!40000 ALTER TABLE `provas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trabalhos`
--

DROP TABLE IF EXISTS `trabalhos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trabalhos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `descricao` text NOT NULL,
  `nota` float NOT NULL,
  `assunto` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trabalhos`
--

LOCK TABLES `trabalhos` WRITE;
/*!40000 ALTER TABLE `trabalhos` DISABLE KEYS */;
INSERT INTO `trabalhos` (`id`, `user_id`, `materia_id`, `data`, `descricao`, `nota`, `assunto`) VALUES (2,1,1,'1986-12-26 00:00:00','testes',10,'teste');
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
  `telefone` varchar(16) NOT NULL,
  `email` varchar(50) NOT NULL,
  `endereco` varchar(256) NOT NULL,
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
INSERT INTO `users` (`id`, `nome`, `telefone`, `email`, `endereco`, `data_nascimento`, `sexo`, `group_id`, `senha`) VALUES (1,'Otavio','(67) 8415-3329','otaviodigital@gmail.com','Geraldo Jaques Monteiro Leite','1986-12-26 00:00:00','0',2,'a617ce2b870f4a92af1e762f8f702c70'),(2,'Flavio','(88) 8888-8888','flavio@live.com','Agencia','2010-12-20 00:00:00','0',2,'a617ce2b870f4a92af1e762f8f702c70');
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

-- Dump completed on 2010-12-03 18:11:58
