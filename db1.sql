/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.31-MariaDB : Database - scholar
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `application` */

DROP TABLE IF EXISTS `application`;

CREATE TABLE `application` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middle_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mit_id` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `team_members` longtext COLLATE utf8_unicode_ci,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `province` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal_code` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `goals` int(11) DEFAULT NULL,
  `qualification` int(11) DEFAULT NULL,
  `jury_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `score` float DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `sdg_goals` int(11) DEFAULT NULL,
  `phone1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `application` */

insert  into `application`(`id`,`user_id`,`first_name`,`last_name`,`middle_name`,`mit_id`,`phone`,`birthday`,`team_members`,`email`,`address1`,`address2`,`city`,`province`,`postal_code`,`goals`,`qualification`,`jury_id`,`status`,`score`,`created_at`,`updated_at`,`sdg_goals`,`phone1`,`phone2`) values (11,1,'tom','jameson','222','1212','7757660144','2019-02-13','tom||hello@my-loans.co.uk||0||0##tom||hello@my-loans.co.uk||0||0','ariapathirana@gmail.com','130 Old Street','345435345','London','London1','EC1V9BD',NULL,0,2,1,67,'2019-02-02 13:56:05','2019-02-06 07:03:59',3,'+447757660144','234234324'),(12,2,'tom11','jameson22','222','1212','7757660144','2019-02-15',NULL,'hello@my-loans.co.uk','130 Old Street','12313123123123','London','London1','EC1V9BD',NULL,NULL,5,0,56,'2019-02-02 13:56:05','2019-02-03 13:32:11',4,NULL,NULL);

/*Table structure for table `email_templates` */

DROP TABLE IF EXISTS `email_templates`;

CREATE TABLE `email_templates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fixed_content` longtext COLLATE utf8_unicode_ci,
  `variable_content` longtext COLLATE utf8_unicode_ci,
  `signature` longtext COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `email_templates` */

insert  into `email_templates`(`id`,`type`,`subject`,`fixed_content`,`variable_content`,`signature`,`created_at`,`updated_at`) values (3,0,'AimScholar-Thank you for your cooperation','Hi , there!','<p>You application has been approved</p><p><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAdQAAAAsCAYAAADckUmsAAAGgklEQVR4Ae3dTahuUxzH8Z93ETFggOJOGIgSZSKlkAGJvOStTBhgJnfqGl6RiRQzKfJWQmEkYkASKSFhglBeQ971zf9fq90+9+xz7n3iHt9VT3s9a6+91t6fyf/81/OcZyUWBRRQQAEFFFBAAQUUUEABBRRYrcCxSU5Y7RSOroACCiigwD8C+ybZJ8k3SV6aQbkiyV9JCE70o75fHalzHS/qH0+uP2rox/n7k+w/6bPKtzckuWWVEzi2AgoooIACLUBApRyR5OyZjO7ROn9AHTkQHA9PcmiSx5I8V/WThz5UD6z39DsuyflJfqvAPOm6krc/JvliJSM7qAIKKKCAAhOBDqg0P5LkweH8WUm+TfLJ0NbVH5L8lOTDJB9UnffTwvW0f5pkW528vI6d/RKg30rS90KmfNuQ3Z4yZMHXDxNQ51peO4b2rhJQr6nMmT531YmDhvFo5zkpjEeW3Rn3TdXeGfzDNRf32mXMwrl2fAbmY3yXnVvLowIKKLDFBXopl2VdAkAvyxJYCDYEEIJC9+ugAQuBby6Yca7HG/kIlvTvQHRizcdcBCxKBzUC3zN1T2ckIbByf8zfYx823BdtYyEg0p/ruj/zHpnk3OrIkT6U7s89jXP1c3Pf3BP9L6prxjpL2twvBTPOMV971ikPCiiggAJbUWAMjp9VNnppkkNqGfiVJMfvwQd/r8YiS325stvfk5yZ5Ko6x/LzaUl+SbKzsuQ3krwz3MfFVb81ye1Vv3o4T5Wl5jvqOjJksuVzKgN9rTLSC+oaHLo/Gfc4Vw/LWNzT9iSnV3Dl3IX1R8IxVacNs5OSfJWE57MooIACCmxxgTGgklFdl4TPTXndvYJnvzHJuxW8CHJdfu3K5Ei2SoClkCl2IfhRyGqfrOB1T7WtdWCcn5OQ7X5ffzQ8tUbnca7uMm3rz4gfqnsguB/dnZOs9UxDF6sKKKCAAltFYAyo1F+tByPrIiPbE4VxWZrtbxE/nuTFykhZfiVQ8Z7PcJeW56vj55VNkglOC5+hkr2y7MqL8mZlkWTH9yU5uNo3c+BzZArPQEb7kdloiXhQQAEF/ocCY0Dl8clSyUzfTtIBY3dZ/qiMkKyQAMYcLOE+kOTrJH8m+S7JtTMT8e1ilmqnhQDGfTIm4zEOQXuufJmEF/ORFd9Z32jmOoL77pRTkzxd98A3mM/bncG8VgEFFFBAgc0KkJ1Ol1I3MtbS6+fmmGvbyNxj3+kfJuM56woooIACCiiggAIKKKCAAgoooIACCiiggAIKKKCAAgoooIACCiiggAIKKKCAAgoooIACCqxOgG+y8vu7/du3S2bqn+hb0tc+CiiggAIK7NUC/PsI/5O53r9+8MMM/HJR/8j8eg/NeEvGXW8czyuggAIKKLBXCCwNqPyA/fQH6Hf1gD3urvp4TgEFFFBAgS0j0IGPjJJ67/xCdtlblfXuKbT1tma9Ewxt7DozLT0uWS19GLd3XumtzWhnlxbKWnNzbrql2xjYOcc4vNgppvv3HG6fVigeFFBAAQVWK9CBrwMqgWm6VRmBkHY+E6V/Byu2MyNgcY4tz8bS4zIW1xNQO3gSlJmvt0MjQI79u70/gx23dGNu3lOod9Dv+2Cc/gPA7dMKyoMCCiigwOoFOpCNAZU2yrjfKQGxs71pACVbJXCOpcftsXqPUfrQRrDsPUgZd9p/rbl7b1PGIbCSoTI3wZr74jm4185Wx3uyroACCiigwEoECD5zpYPg3Dna+MF69gYdC7u77Kp0f8bmB/HZ//T1mQvWm3u8hC3Z2GqObdzuTbKtxqaP26eNUtYVUEABBVYqsFZAXW9SNh5/obJKllXZ7o2gNlfYTJwgSX92fOn9Tdld5v25CzbQxn1cWRuVswPNekF9A0PbVQEFFFBAgeUCmw2ol1VgJNNka7TttTXa3Mw7K2tkWffmWo59Nklv6zZ3zdK2S5KwhRpLvbyeWHqh/RRQQAEFFPgvCSxdnp0L3EuvXfK8jLUnx1syp30UUEABBRRQQAEFFFBAAQUUUEABBRRQQAEFFFBAAQUUUEABBRRQQAEFFFBAAQUUUEABBRRQQAEFFFBAAQUUUEABBRRQQAEFFFBAAQUUUEABBRRQQAEFFFBAAQUUUEABBRRQQAEFFFBAAQUUUEABBRRQQAEFFFBAAQUUUEABBRRQQAEFFFBAAQUUUEABBRRQQAEFFFBAAQUUUEABBRRQQAEF/g2BvwHItya9HAFgFwAAAABJRU5ErkJggg==\" data-filename=\"image (1).png\" style=\"width: 468px;\"><br></p>','<b><u>Thank you so much</u></b>','2019-02-06 02:56:30','2019-02-06 03:25:31'),(4,1,'Receive your application','<h4>Hi , there!</h4><p><u>Thank you so much.</u></p>','<p>We have received your application</p>','<p>Thank you so much.</p><p><b>Regards</b></p>','2019-02-06 03:26:53','2019-02-06 03:26:53'),(5,2,'Acceptance','<p>Hi , there</p>','<p>&nbsp;&nbsp;&nbsp;&nbsp;<u style=\"background-color: rgb(239, 239, 239); color: rgb(0, 0, 255);\">I like your appreciating</u></p><table class=\"table table-bordered\"><tbody><tr><td>sdfsdfsdfsf</td><td>sdfsdfsdf</td><td>sdfsdf</td><td>sdfsdfsfd</td></tr><tr><td>sdfsdf</td><td>sdfsdf</td><td>sfsdf</td><td>sdfsdf</td></tr><tr><td>sdfsdf</td><td>sdf</td><td>sdfdsf</td><td>sfsdf</td></tr></tbody></table><p><u style=\"background-color: rgb(239, 239, 239); color: rgb(0, 0, 255);\"><br></u></p>','<p>Best Regards</p>','2019-02-06 03:27:59','2019-02-06 04:01:12'),(6,3,'Rejected','<h3>Hi , there</h3><p>We are sorry</p>','<p>Unfortuanately your application has been rejected</p><p>We recommend you to submit again</p>','<p>Thank you so much</p>','2019-02-06 03:28:46','2019-02-06 03:28:46'),(7,6,'AimScholar','<h4>Hi , there!</h4>','<p>Your application has been assigned to our Jury</p>','Thank you so much','2019-02-06 03:30:23','2019-02-06 03:30:23'),(8,4,'Application checked','<p><b><u>Hi there</u></b></p>','<p>You application has been accepted</p>','<p><b><u>Thank you so much</u></b></p>','2019-02-06 03:31:14','2019-02-06 03:31:14'),(9,5,'Application','<p>Hi</p>','<p>Application has been reviewed</p>','<p>Thank you</p>','2019-02-06 03:31:33','2019-02-06 03:31:55'),(10,7,'Application Assigned','<p>Hi , there!</p>','<p>Application has been checked</p>','<p>Thank you so much</p>','2019-02-06 03:32:38','2019-02-06 03:32:38');

/*Table structure for table `files` */

DROP TABLE IF EXISTS `files`;

CREATE TABLE `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `application_id` int(11) DEFAULT NULL,
  `file_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `files` */

insert  into `files`(`id`,`application_id`,`file_name`,`url`,`created_at`,`updated_at`) values (7,11,'1549136216jury.blade.php','/uploads/1549136216jury.blade.php','2019-02-02 19:36:56','2019-02-02 19:36:56'),(8,11,'1549136216readings.blade.php','/uploads/1549136216readings.blade.php','2019-02-02 19:36:56','2019-02-02 19:36:56');

/*Table structure for table `questions` */

DROP TABLE IF EXISTS `questions`;

CREATE TABLE `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `application_id` int(11) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `answer` longtext COLLATE utf8_unicode_ci,
  `feedback` longtext COLLATE utf8_unicode_ci,
  `score` float DEFAULT NULL,
  `custom_value` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `questions` */

insert  into `questions`(`id`,`application_id`,`number`,`answer`,`feedback`,`score`,`custom_value`,`created_at`,`updated_at`) values (23,11,1,'34534','sdfdsfdsfdsf 123123123123123',88,NULL,'2019-02-02 15:20:44','2019-02-05 13:33:38'),(24,11,2,'5345435345','sdfsdfsdfsd',23,NULL,'2019-02-02 15:20:44','2019-02-05 13:33:38'),(25,11,3,'234324',NULL,45,NULL,'2019-02-02 15:20:44','2019-02-06 04:16:47'),(26,11,4,'234234',NULL,99,NULL,'2019-02-02 15:20:44','2019-02-06 04:16:47'),(27,11,5,'234','43534534534534',56,NULL,'2019-02-02 15:20:44','2019-02-06 04:16:47'),(28,11,6,'234',NULL,67,NULL,'2019-02-02 15:20:44','2019-02-06 04:16:47'),(29,11,7,'243',NULL,45,NULL,'2019-02-02 15:20:44','2019-02-06 04:16:47'),(30,11,8,NULL,NULL,96,NULL,'2019-02-02 15:20:44','2019-02-05 13:33:38'),(31,11,10,'534534543535345','sdfsdfsdfsdf',45,NULL,'2019-02-02 15:20:44','2019-02-05 13:33:38'),(32,11,11,'345345345345435345345',NULL,96,NULL,'2019-02-02 15:20:44','2019-02-05 13:33:38'),(33,11,12,NULL,'345345345345',99,'010','2019-02-02 15:20:44','2019-02-05 13:24:51'),(34,11,9,NULL,'121212',34,NULL,'2019-02-02 15:24:12','2019-02-02 18:24:24');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` int(11) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`role`,`created_at`,`updated_at`) values (1,'tom jameson','kkm.str.122@gmail.com','$2y$10$UyeHI44zMUS/.E1uxnqTRO8GfdmQvomFYjFPDoBKHZzRps9FFayAq','KcAIpfinlVqJkJZimxHp855QCLlpQeT5tNVPqpugR94YsBzGPkc0D016jEay',0,'2019-01-30 14:47:13','2019-01-30 14:47:13'),(2,'Juri1','jury@gmail.com','$2y$10$.j7Cpuv2BmYZmIp0eh.qu.p2nW26XNu3YxWpEgLcjT9IAGDYvTF2G','ZiO1OPK2tsuvGtsaDoaGtH0RNLApiOCaASAP6sxoGYRU0D6JM3pc4MQqtSfh',1,'2019-02-02 19:22:09','2019-02-02 19:22:09'),(3,'Administrator','admin@gmail.com','$2y$10$.j7Cpuv2BmYZmIp0eh.qu.p2nW26XNu3YxWpEgLcjT9IAGDYvTF2G','AbnFS4aFKWFLQMBkwkcSiJxHhws9fBLrpcfWvH4ZfDM03uI9iW9SLSwhbjzl',2,'2019-02-02 19:22:09','2019-02-02 19:22:09'),(5,'Kapila','ariapathirana@gmail.com','$2y$10$CU9bXj6h6BRHOfE5Agj11.y/HqPv3EzE.nWl8iRJ9Yd5ES08U3laG',NULL,1,'2019-02-03 13:15:53','2019-02-03 13:15:53'),(6,'Administrator','connect@aimscholar.com','$2y$10$.j7Cpuv2BmYZmIp0eh.qu.p2nW26XNu3YxWpEgLcjT9IAGDYvTF2G','KoIWoBdrihPBUlae5e4qbOMi38qKSt6IdSIDse8uAxtVkabPdrbBiHut2TMJ',2,'2019-02-02 19:22:09','2019-02-02 19:22:09'),(7,'Admin1','222@gmail.com','$2y$10$.j7Cpuv2BmYZmIp0eh.qu.p2nW26XNu3YxWpEgLcjT9IAGDYvTF2G',NULL,3,'2019-02-04 06:42:07','2019-02-04 06:42:07'),(9,'Admin2','admin3@gmail.com','$2y$10$.j7Cpuv2BmYZmIp0eh.qu.p2nW26XNu3YxWpEgLcjT9IAGDYvTF2G','loMtgA290wtjDpRazj5OBFsFJytjyldMw7tnZtpNXWKi2gk5uUjUWEBAEqIX',3,'2019-02-04 06:46:36','2019-02-04 06:46:36');

/*Table structure for table `weightage` */

DROP TABLE IF EXISTS `weightage`;

CREATE TABLE `weightage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(11) DEFAULT NULL,
  `percentage` float DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `weightage` */

insert  into `weightage`(`id`,`number`,`percentage`,`created_at`,`updated_at`) values (1,1,6,NULL,'2019-02-03 10:23:21'),(2,2,6,NULL,'2019-02-03 10:23:25'),(3,3,6,NULL,'2019-02-03 10:23:10'),(4,4,6,NULL,NULL),(5,5,6,NULL,'2019-02-03 10:23:17'),(6,6,10,NULL,NULL),(7,7,10,NULL,NULL),(8,8,10,NULL,NULL),(9,9,10,NULL,NULL),(10,10,10,NULL,NULL),(11,11,10,NULL,NULL),(12,12,10,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
