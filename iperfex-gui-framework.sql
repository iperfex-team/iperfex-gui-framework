-- MySQL dump 10.14  Distrib 5.5.56-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: iperfexpbx
-- ------------------------------------------------------
-- Server version	5.5.56-MariaDB

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

USE iperfexpbx;
--
-- Table structure for table `acl_group`
--

DROP TABLE IF EXISTS `acl_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acl_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `description` text,
  `id_organization` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_group` (`id_organization`,`name`),
  CONSTRAINT `acl_group_ibfk_1` FOREIGN KEY (`id_organization`) REFERENCES `organization` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acl_group`
--

LOCK TABLES `acl_group` WRITE;
/*!40000 ALTER TABLE `acl_group` DISABLE KEYS */;
INSERT INTO `acl_group` VALUES (1,'superadmin','Super iPERFEX admin',1),(2,'administrator','Administrator',1),(3,'supervisor','Supervisor',1),(4,'end_user','End User',1);
/*!40000 ALTER TABLE `acl_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `acl_resource`
--

DROP TABLE IF EXISTS `acl_resource`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acl_resource` (
  `id` varchar(50) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `IdParent` varchar(50) DEFAULT NULL,
  `Link` varchar(250) DEFAULT NULL,
  `Type` varchar(20) DEFAULT NULL,
  `order_no` int(11) DEFAULT NULL,
  `administrative` enum('yes','no') DEFAULT 'yes',
  `organization_access` enum('yes','no') DEFAULT 'yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acl_resource`
--

LOCK TABLES `acl_resource` WRITE;
/*!40000 ALTER TABLE `acl_resource` DISABLE KEYS */;
INSERT INTO `acl_resource` VALUES ('applet_admin','Dashboard Applet Admin','sysdash','','module',2,'yes','yes'),('dashboard','Dashboard','sysdash','','module',1,'yes','yes'),('grouplist','Groups','usermgr','','module',2,'yes','yes'),('group_permission','Group Resource','usermgr','','module',3,'yes','yes'),('home','Home','','','module',1,'no','yes'),('language','Language','preferences','','module',1,'yes','yes'),('manager','Manager','','','',0,'yes','yes'),('mysettings','Settings','','','',2,'no','yes'),('organization','Organization','orgmgr','','module',1,'yes','yes'),('organization_permission','Organization Resource','orgmgr','','module',2,'yes','no'),('orgmgr','Organization','manager','','',2,'yes','yes'),('preferences','Preferences','system','','',5,'yes','yes'),('smtp','Remote SMTP','system','','module',3,'yes','no'),('sysdash','Dashboard','manager','','',1,'yes','yes'),('system','System','','','',1,'yes','yes'),('themes_system','Themes','preferences','','module',2,'yes','yes'),('time_config','Date/Time','preferences','','module',3,'yes','no'),('userlist','Users','usermgr','','module',1,'yes','yes'),('usermgr','User/Group','manager','','',3,'yes','yes');
/*!40000 ALTER TABLE `acl_resource` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `acl_user`
--

DROP TABLE IF EXISTS `acl_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(150) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `md5_password` varchar(100) NOT NULL,
  `id_group` int(11) NOT NULL,
  `extension` varchar(20) DEFAULT NULL,
  `fax_extension` varchar(20) DEFAULT NULL,
  `picture_content` mediumblob,
  `picture_type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `id_group` (`id_group`),
  CONSTRAINT `acl_user_ibfk_1` FOREIGN KEY (`id_group`) REFERENCES `acl_group` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acl_user`
--

LOCK TABLES `acl_user` WRITE;
/*!40000 ALTER TABLE `acl_user` DISABLE KEYS */;
INSERT INTO `acl_user` VALUES (1,'admin','admin','8ddb0cc7f0dd0b87409febbfa420cab3',1,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `acl_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_relay`
--

DROP TABLE IF EXISTS `email_relay`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_relay` (
  `name` varchar(150) NOT NULL,
  `value` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_relay`
--

LOCK TABLES `email_relay` WRITE;
/*!40000 ALTER TABLE `email_relay` DISABLE KEYS */;
/*!40000 ALTER TABLE `email_relay` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `group_resource_action`
--

DROP TABLE IF EXISTS `group_resource_action`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `group_resource_action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_group` int(11) NOT NULL,
  `id_resource_action` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permission_group` (`id_group`,`id_resource_action`),
  KEY `id_resource_action` (`id_resource_action`),
  CONSTRAINT `group_resource_action_ibfk_1` FOREIGN KEY (`id_group`) REFERENCES `acl_group` (`id`) ON DELETE CASCADE,
  CONSTRAINT `group_resource_action_ibfk_2` FOREIGN KEY (`id_resource_action`) REFERENCES `resource_action` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group_resource_action`
--

LOCK TABLES `group_resource_action` WRITE;
/*!40000 ALTER TABLE `group_resource_action` DISABLE KEYS */;
INSERT INTO `group_resource_action` VALUES (1,1,1),(2,1,2),(14,1,5),(18,1,6),(17,1,7),(19,1,8),(16,1,9),(15,1,10),(22,1,11),(23,1,12),(28,1,13),(29,1,14),(30,1,15),(31,1,16),(45,1,18),(46,1,19),(61,1,24),(62,1,25),(67,1,26),(66,1,27),(64,1,28),(65,1,29),(63,1,30),(71,1,31),(72,1,32),(83,1,40),(84,1,41),(86,1,42),(87,1,43),(95,1,44),(96,1,45),(100,1,46),(101,1,47),(102,1,48),(104,1,49),(105,1,50),(103,1,51),(4,2,1),(5,2,2),(21,2,5),(25,2,11),(26,2,12),(35,2,13),(36,2,14),(37,2,15),(38,2,16),(42,2,17),(48,2,18),(49,2,19),(68,2,24),(69,2,25),(70,2,26),(89,2,42),(90,2,43),(98,2,44),(107,2,46),(108,2,47),(109,2,48),(111,2,49),(112,2,50),(110,2,51),(43,3,17),(51,3,18),(52,3,19),(92,3,42),(93,3,43),(99,3,44),(44,4,17);
/*!40000 ALTER TABLE `group_resource_action` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `org_email_template`
--

DROP TABLE IF EXISTS `org_email_template`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `org_email_template` (
  `from_email` varchar(250) NOT NULL,
  `from_name` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `host_ip` varchar(250) DEFAULT '',
  `host_domain` varchar(250) DEFAULT '',
  `host_name` varchar(250) DEFAULT '',
  `category` varchar(250) NOT NULL,
  PRIMARY KEY (`category`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `org_email_template`
--

LOCK TABLES `org_email_template` WRITE;
/*!40000 ALTER TABLE `org_email_template` DISABLE KEYS */;
INSERT INTO `org_email_template` VALUES ('panel@iperfex.com','iPERFEX Admin','Create Company in iPERFEX Server','Your entity {COMPANY_NAME}, associated with the domain {DOMAIN} has been created.\nTo configure you iPERFEX server, please go to https://{HOST_IP} and login into iPERFEX with the following credentials:\nUsername: admin@{DOMAIN}\nPassword: {USER_PASSWORD}','','','','create'),('panel@iperfex.com','iPERFEX Admin','Deleted Company in iPERFEX Server','','','','','delete'),('panel@iperfex.com','iPERFEX Admin','Suspended Company in iPERFEX Server','','','','','suspend');
/*!40000 ALTER TABLE `org_email_template` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `org_history_events`
--

DROP TABLE IF EXISTS `org_history_events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `org_history_events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event` varchar(100) NOT NULL,
  `org_idcode` varchar(50) DEFAULT NULL,
  `event_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `org_history_events`
--

LOCK TABLES `org_history_events` WRITE;
/*!40000 ALTER TABLE `org_history_events` DISABLE KEYS */;
/*!40000 ALTER TABLE `org_history_events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `org_history_register`
--

DROP TABLE IF EXISTS `org_history_register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `org_history_register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `org_domain` varchar(100) NOT NULL,
  `org_code` varchar(20) NOT NULL,
  `org_idcode` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL,
  `delete_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `orgIdcode` (`org_idcode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `org_history_register`
--

LOCK TABLES `org_history_register` WRITE;
/*!40000 ALTER TABLE `org_history_register` DISABLE KEYS */;
/*!40000 ALTER TABLE `org_history_register` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `organization`
--

DROP TABLE IF EXISTS `organization`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `organization` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `domain` varchar(100) NOT NULL,
  `email_contact` varchar(100) DEFAULT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(150) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `code` varchar(20) NOT NULL,
  `idcode` varchar(50) NOT NULL,
  `state` varchar(20) DEFAULT 'active',
  PRIMARY KEY (`id`),
  UNIQUE KEY `domain` (`domain`),
  UNIQUE KEY `code` (`code`),
  UNIQUE KEY `idcode` (`idcode`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organization`
--

LOCK TABLES `organization` WRITE;
/*!40000 ALTER TABLE `organization` DISABLE KEYS */;
INSERT INTO `organization` VALUES (1,'NONE','','','','','','','','active');
/*!40000 ALTER TABLE `organization` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `organization_properties`
--

DROP TABLE IF EXISTS `organization_properties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `organization_properties` (
  `id_organization` int(11) NOT NULL AUTO_INCREMENT,
  `property` varchar(100) NOT NULL,
  `value` text NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_organization`,`property`),
  CONSTRAINT `organization_properties_ibfk_1` FOREIGN KEY (`id_organization`) REFERENCES `organization` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organization_properties`
--

LOCK TABLES `organization_properties` WRITE;
/*!40000 ALTER TABLE `organization_properties` DISABLE KEYS */;
INSERT INTO `organization_properties` VALUES (1,'currency','$','system'),(1,'default_rate','0.50','system'),(1,'default_rate_offset','1','system'),(1,'language','en','system'),(1,'theme','tenant','system');
/*!40000 ALTER TABLE `organization_properties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `organization_resource`
--

DROP TABLE IF EXISTS `organization_resource`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `organization_resource` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_organization` int(11) NOT NULL,
  `id_resource` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permission_org` (`id_organization`,`id_resource`),
  KEY `id_resource` (`id_resource`),
  CONSTRAINT `organization_resource_ibfk_1` FOREIGN KEY (`id_organization`) REFERENCES `organization` (`id`) ON DELETE CASCADE,
  CONSTRAINT `organization_resource_ibfk_2` FOREIGN KEY (`id_resource`) REFERENCES `acl_resource` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organization_resource`
--

LOCK TABLES `organization_resource` WRITE;
/*!40000 ALTER TABLE `organization_resource` DISABLE KEYS */;
INSERT INTO `organization_resource` VALUES (1,1,'applet_admin'),(3,1,'dashboard'),(5,1,'grouplist'),(4,1,'group_permission'),(6,1,'home'),(7,1,'language'),(9,1,'organization'),(10,1,'organization_permission'),(14,1,'smtp'),(15,1,'themes_system'),(16,1,'time_config'),(17,1,'userlist');
/*!40000 ALTER TABLE `organization_resource` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resource_action`
--

DROP TABLE IF EXISTS `resource_action`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resource_action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_resource` varchar(50) NOT NULL,
  `action` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `resource_action` (`id_resource`,`action`),
  CONSTRAINT `resource_action_ibfk_1` FOREIGN KEY (`id_resource`) REFERENCES `acl_resource` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resource_action`
--

LOCK TABLES `resource_action` WRITE;
/*!40000 ALTER TABLE `resource_action` DISABLE KEYS */;
INSERT INTO `resource_action` VALUES (1,'applet_admin','access'),(2,'applet_admin','edit'),(5,'dashboard','access'),(10,'dashboard','disable'),(9,'dashboard','enable'),(7,'dashboard','restart'),(6,'dashboard','start'),(8,'dashboard','stop'),(13,'grouplist','access'),(14,'grouplist','create_group'),(15,'grouplist','delete_group'),(16,'grouplist','edit_group'),(11,'group_permission','access'),(12,'group_permission','edit_permission'),(17,'home','access'),(18,'language','access'),(19,'language','edit'),(24,'organization','access'),(25,'organization','access_DID'),(30,'organization','change_org_status'),(28,'organization','create_org'),(29,'organization','delete_org'),(27,'organization','edit_DID'),(26,'organization','edit_org'),(31,'organization_permission','access'),(32,'organization_permission','edit'),(40,'smtp','access'),(41,'smtp','edit'),(42,'themes_system','access'),(43,'themes_system','edit'),(44,'time_config','access'),(45,'time_config','edit'),(46,'userlist','access'),(47,'userlist','create_user'),(48,'userlist','delete_user'),(51,'userlist','edit_email_quota'),(49,'userlist','edit_user'),(50,'userlist','reconstruct_mailbox');
/*!40000 ALTER TABLE `resource_action` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `property` varchar(32) NOT NULL,
  `value` varchar(32) NOT NULL,
  PRIMARY KEY (`property`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES ('iperfex_version_release','?'),('version_release','3.0.0-11');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sticky_note`
--

DROP TABLE IF EXISTS `sticky_note`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sticky_note` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_resource` varchar(50) NOT NULL,
  `date_edit` datetime NOT NULL,
  `description` text,
  `auto_popup` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  KEY `id_resource` (`id_resource`),
  CONSTRAINT `sticky_note_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `acl_user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `sticky_note_ibfk_2` FOREIGN KEY (`id_resource`) REFERENCES `acl_resource` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sticky_note`
--

LOCK TABLES `sticky_note` WRITE;
/*!40000 ALTER TABLE `sticky_note` DISABLE KEYS */;
/*!40000 ALTER TABLE `sticky_note` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_properties`
--

DROP TABLE IF EXISTS `user_properties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_properties` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `property` varchar(100) NOT NULL,
  `value` text NOT NULL,
  `category` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_user`,`property`,`category`),
  CONSTRAINT `user_properties_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `acl_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_properties`
--

LOCK TABLES `user_properties` WRITE;
/*!40000 ALTER TABLE `user_properties` DISABLE KEYS */;
INSERT INTO `user_properties` VALUES (1,'theme','tenant','system');
/*!40000 ALTER TABLE `user_properties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_resource_action`
--

DROP TABLE IF EXISTS `user_resource_action`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_resource_action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_resource_action` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permission_user` (`id_user`,`id_resource_action`),
  KEY `id_resource_action` (`id_resource_action`),
  CONSTRAINT `user_resource_action_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `acl_user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_resource_action_ibfk_2` FOREIGN KEY (`id_resource_action`) REFERENCES `resource_action` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_resource_action`
--

LOCK TABLES `user_resource_action` WRITE;
/*!40000 ALTER TABLE `user_resource_action` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_resource_action` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_shortcut`
--

DROP TABLE IF EXISTS `user_shortcut`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_shortcut` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_resource` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  KEY `id_resource` (`id_resource`),
  CONSTRAINT `user_shortcut_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `acl_user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_shortcut_ibfk_2` FOREIGN KEY (`id_resource`) REFERENCES `acl_resource` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_shortcut`
--

LOCK TABLES `user_shortcut` WRITE;
/*!40000 ALTER TABLE `user_shortcut` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_shortcut` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-05 12:41:09
