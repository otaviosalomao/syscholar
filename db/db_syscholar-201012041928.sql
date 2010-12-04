-- MySQL dump 10.13  Distrib 5.1.49, for debian-linux-gnu (i686)
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
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acos`
--

LOCK TABLES `acos` WRITE;
/*!40000 ALTER TABLE `acos` DISABLE KEYS */;
INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES (1,NULL,NULL,NULL,'controllers',1,136),(2,1,NULL,NULL,'Pages',2,7),(3,2,NULL,NULL,'display',3,4),(4,1,NULL,NULL,'Groups',8,17),(5,4,NULL,NULL,'build_acl',9,10),(6,1,NULL,NULL,'Home',18,23),(7,6,NULL,NULL,'index',19,20),(8,1,NULL,NULL,'Materias',24,39),(9,8,NULL,NULL,'cadastrarMateria',25,26),(10,1,NULL,NULL,'Provas',40,51),(11,1,NULL,NULL,'Tarefas',52,59),(12,1,NULL,NULL,'Users',60,71),(13,12,NULL,NULL,'login',61,62),(14,12,NULL,NULL,'logout',63,64),(15,12,NULL,NULL,'cadastrar',65,66),(16,1,NULL,NULL,'Trabalhos',72,83),(17,16,NULL,NULL,'cadastrar',73,74),(18,16,NULL,NULL,'index',75,76),(19,1,NULL,NULL,'Compromissos',84,95),(20,19,NULL,NULL,'cadastrar',85,86),(21,19,NULL,NULL,'index',87,88),(22,1,NULL,NULL,'Arquivos',96,109),(23,22,NULL,NULL,'cadastrar',97,98),(24,22,NULL,NULL,'index',99,100),(25,8,NULL,NULL,'cadastrar',27,28),(26,8,NULL,NULL,'index',29,30),(27,11,NULL,NULL,'cadastrar',53,54),(28,11,NULL,NULL,'index',55,56),(29,12,NULL,NULL,'editar',67,68),(30,10,NULL,NULL,'cadastrar',41,42),(31,10,NULL,NULL,'index',43,44),(32,4,NULL,NULL,'cadastrar',11,12),(33,4,NULL,NULL,'initDB',13,14),(34,1,NULL,NULL,'Calendario',110,117),(35,34,NULL,NULL,'cadastrar',111,112),(36,34,NULL,NULL,'index',113,114),(37,8,NULL,NULL,'excluir',31,32),(38,8,NULL,NULL,'editar',33,34),(39,1,NULL,NULL,'Lookup',118,123),(40,39,NULL,NULL,'listarMaterias',119,120),(41,2,NULL,NULL,'converteData',5,6),(42,16,NULL,NULL,'converteData',77,78),(43,19,NULL,NULL,'converteData',89,90),(44,39,NULL,NULL,'converteData',121,122),(45,22,NULL,NULL,'converteData',101,102),(46,8,NULL,NULL,'converteData',35,36),(47,11,NULL,NULL,'converteData',57,58),(48,12,NULL,NULL,'converteData',69,70),(49,10,NULL,NULL,'excluir',45,46),(50,10,NULL,NULL,'converteData',47,48),(51,6,NULL,NULL,'converteData',21,22),(52,4,NULL,NULL,'converteData',15,16),(53,34,NULL,NULL,'converteData',115,116),(54,10,NULL,NULL,'editar',49,50),(55,22,NULL,NULL,'buscarArquivo',103,104),(56,22,NULL,NULL,'deletarArquivo',105,106),(57,16,NULL,NULL,'excluir',79,80),(58,16,NULL,NULL,'editar',81,82),(59,22,NULL,NULL,'excluir',107,108),(60,19,NULL,NULL,'excluir',91,92),(61,19,NULL,NULL,'editar',93,94),(62,1,NULL,NULL,'Avaliacoes',124,135),(63,62,NULL,NULL,'cadastrar',125,126),(64,62,NULL,NULL,'index',127,128),(65,62,NULL,NULL,'excluir',129,130),(66,62,NULL,NULL,'editar',131,132),(67,62,NULL,NULL,'converteData',133,134),(68,8,NULL,NULL,'view',37,38);
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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `arquivos`
--

LOCK TABLES `arquivos` WRITE;
/*!40000 ALTER TABLE `arquivos` DISABLE KEYS */;
INSERT INTO `arquivos` (`id`, `nome`, `data`, `observacao`, `arquivo`, `user_id`) VALUES (2,'dasdas','2010-12-04 19:19:30','saddsadas','content.gif',1),(3,'SASAsa','2010-12-04 20:28:34','ADSDADSADAS','test.php',1),(4,'adsadsad','2010-12-04 20:31:22','asdadsada','index.php',1);
/*!40000 ALTER TABLE `arquivos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `avaliacoes`
--

DROP TABLE IF EXISTS `avaliacoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `avaliacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `materia_id` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nota` float DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `descricao` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `avaliacoes`
--

LOCK TABLES `avaliacoes` WRITE;
/*!40000 ALTER TABLE `avaliacoes` DISABLE KEYS */;
INSERT INTO `avaliacoes` (`id`, `materia_id`, `data`, `nota`, `user_id`, `peso`, `descricao`) VALUES (9,7,'2010-12-20 22:00:00',10,0,0,''),(10,8,'1986-12-26 13:00:00',1,0,0,''),(24,2,'2011-12-23 03:00:00',10,1,90,'teste'),(23,1,'2010-12-12 23:00:00',10,1,12,'teste3');
/*!40000 ALTER TABLE `avaliacoes` ENABLE KEYS */;
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
  `formula` varchar(256) NOT NULL,
  `media` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materias`
--

LOCK TABLES `materias` WRITE;
/*!40000 ALTER TABLE `materias` DISABLE KEYS */;
INSERT INTO `materias` (`id`, `nome`, `professor`, `tipo`, `curso`, `ano`, `user_id`, `formula`, `media`) VALUES (1,'Qualidade de Software','Debora',0,'Analise de Sistemas',2010,1,'',0),(2,'Computacao e Sociedade','Animala',0,'Analise de Sistemas',2010,1,'',0);
/*!40000 ALTER TABLE `materias` ENABLE KEYS */;
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

-- Dump completed on 2010-12-04 19:28:48
