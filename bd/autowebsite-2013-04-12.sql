CREATE DATABASE  IF NOT EXISTS `autowebsite` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `autowebsite`;
-- MySQL dump 10.13  Distrib 5.1.67, for debian-linux-gnu (i486)
--
-- Host: localhost    Database: autowebsite
-- ------------------------------------------------------
-- Server version	5.1.67-0ubuntu0.10.04.1

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
-- Table structure for table `datos`
--

DROP TABLE IF EXISTS `datos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `datos` (
  `dat_id_datos` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dat_nombre` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dat_direccion` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dat_telefono` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dat_email` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dat_facebook` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dat_twitter` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dat_gplus` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dat_localidad` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dat_coordenadas` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dat_descripcion` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`dat_id_datos`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `imagenes`
--

DROP TABLE IF EXISTS `imagenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imagenes` (
  `im_id_imagen` int(10) unsigned NOT NULL,
  `im_descripcion` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `im_tipo` enum('general','slider') COLLATE utf8_spanish_ci NOT NULL DEFAULT 'general',
  PRIMARY KEY (`im_id_imagen`,`im_tipo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `usu_id_usuario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usu_nombre` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usu_nick` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usu_clave` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usu_rol` enum('admin','user') COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`usu_id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `variables`
--

DROP TABLE IF EXISTS `variables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `variables` (
  `var_id_variable` int(11) NOT NULL AUTO_INCREMENT,
  `var_nombre` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `var_descripcion` text COLLATE utf8_spanish_ci,
  PRIMARY KEY (`var_id_variable`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-04-12 19:54:39
