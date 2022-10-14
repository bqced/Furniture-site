-- Table structure for table `admin`

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- table `admin`

LOCK TABLES `admin` WRITE;
/*   TABLE `admin` DISABLE KEYS */
INSERT INTO `admin` VALUES (1,'cedric@gmail.com', 'cedric');
/*  TABLE `admin` ENABLE KEYS */
UNLOCK TABLES;

-- table `new_user`

DROP TABLE IF EXISTS `new_user`;
CREATE TABLE `new_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;


--
-- Dumping data for table `new_user`
--

LOCK TABLES `new_user` WRITE;
/*    TABLE `new_user` DISABLE KEYS */
INSERT INTO `new_user` VALUES (4,'aa@gmail.com','aa');
/*   TABLE `new_user` ENABLE KEYS */
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namedt` varchar(255) NOT NULL,
  `pricedt` float DEFAULT NULL,
  `typedt` varchar(255) DEFAULT NULL,
  `infodt` varchar(255) DEFAULT NULL,
  `imagedt` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--table `product`

LOCK TABLES `product` WRITE;
/*   TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (12,'Chair',111111,'Home','Best quality product Material: Wood  Long lasting product','chair1.jpg'),(13,'Couch',111111,'Home','Best quality product Material: Wood  Long lasting product','couch.jpg'),(14,'Dresser',111111,'Home','Home','Best quality product Material: Wood  Long lasting product','dresser.jpg');
/*   TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;