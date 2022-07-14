/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50736
 Source Host           : localhost:3306
 Source Schema         : quotation

 Target Server Type    : MySQL
 Target Server Version : 50736
 File Encoding         : 65001

 Date: 14/07/2022 18:05:06
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 19 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('Bản Quyền', 2, 1, '2017-10-20 17:16:40', '2022-07-12 09:10:33');
INSERT INTO `categories` VALUES ('Sản xuất và sáng tạo content', 3, 1, '2022-07-12 08:59:08', '2022-07-12 08:59:08');
INSERT INTO `categories` VALUES ('PR Solution', 1, 1, '2022-07-12 06:57:44', '2022-07-12 06:57:44');
INSERT INTO `categories` VALUES ('MCV Ads', 5, 1, '2021-03-10 01:17:41', '2022-07-12 09:11:01');
INSERT INTO `categories` VALUES ('Thể Thao', 7, 1, '2006-07-01 13:18:06', '2022-07-12 09:11:21');
INSERT INTO `categories` VALUES ('Y Tế', 8, 1, '2020-05-19 16:30:49', '2022-07-12 09:11:31');
INSERT INTO `categories` VALUES ('Seeding', 9, 1, '2021-10-01 16:54:06', '2022-07-12 09:11:40');
INSERT INTO `categories` VALUES ('Phim Trường', 10, 1, '2022-07-12 06:20:57', '2022-07-12 09:11:48');
INSERT INTO `categories` VALUES ('Event', 11, 1, '2022-07-12 06:21:31', '2022-07-12 09:11:55');
INSERT INTO `categories` VALUES ('Google Ads - TikTok Ads', 12, 1, '2022-07-12 06:57:44', '2022-07-12 09:12:08');
INSERT INTO `categories` VALUES ('KOLs', 4, 1, '2022-07-12 08:59:08', '2022-07-12 08:59:08');
INSERT INTO `categories` VALUES ('Tin Tức - Báo Đài', 6, 1, '2022-07-12 08:59:08', '2022-07-12 08:59:08');

-- ----------------------------
-- Table structure for credentials
-- ----------------------------
DROP TABLE IF EXISTS `credentials`;
CREATE TABLE `credentials`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `images` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 26 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of credentials
-- ----------------------------
INSERT INTO `credentials` VALUES (1, '202207130813mcv-clm-favicon.png', '<p>dsfasdfasdf&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>ss</td>\r\n			<td>ss</td>\r\n		</tr>\r\n		<tr>\r\n			<td>ss</td>\r\n			<td>ss</td>\r\n		</tr>\r\n		<tr>\r\n			<td>ss</td>\r\n			<td>ss</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, '2004-02-27 12:55:44', '2022-07-14 03:27:39', 1, 'sdfsdf', '202207140327canvas-1.pdf');
INSERT INTO `credentials` VALUES (2, '202207130813mcv-clm-favicon.png', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 1, '2000-09-26 07:02:47', '2022-07-13 08:13:06', 2, 'sdfsdf', NULL);
INSERT INTO `credentials` VALUES (4, '202207130813mcv-clm-favicon.png', 'I may not have gone where I intended to go, but I think I have ended up where I needed to be. To connect to a database or schema, simply double-click it in the pane. The On Startup feature allows you to control what tabs appear when you launch Navicat. I will greet this day with love in my heart. Instead of wondering when your next vacation is, maybe you should set up a life you don’t need to escape from. You must be the change you wish to see in the world. Flexible settings enable you to set up a custom key for comparison and synchronization. All the Navicat Cloud objects are located under different projects. You can share the project to other Navicat Cloud accounts for collaboration. If it scares you, it might be a good thing to try. If opportunity doesn’t knock, build a door. Creativity is intelligence having fun. Sometimes you win, sometimes you learn. Typically, it is employed as an encrypted version of Telnet. The repository database can be an existing MySQL, MariaDB, PostgreSQL, SQL Server, or Amazon RDS instance. Creativity is intelligence having fun. You cannot save people, you can just love them. I will greet this day with love in my heart. Navicat Monitor is a safe, simple and agentless remote server monitoring tool that is packed with powerful features to make your monitoring effective as possible. Such sessions are also susceptible to session hijacking, where a malicious user takes over your session once you have authenticated. Navicat Cloud could not connect and access your databases. By which it means, it could only store your connection settings, queries, model files, and virtual group; your database passwords and data (e.g. tables, views, etc) will not be stored to Navicat Cloud. A man is not old until regrets take the place of dreams. The Synchronize to Database function will give you a full picture of all database differences. Navicat Cloud could not connect and access your databases. By which it means, it could only store your connection settings, queries, model files, and virtual group; your database passwords and data (e.g. tables, views, etc) will not be stored to Navicat Cloud.', 1, '2004-11-06 13:20:47', '2021-03-31 10:54:39', 2, 'sdfsdf', NULL);
INSERT INTO `credentials` VALUES (5, '202207130813mcv-clm-favicon.png', 'Navicat is a multi-connections Database Administration tool allowing you to connect to MySQL, Oracle, PostgreSQL, SQLite, SQL Server, MariaDB and/or MongoDB databases, making database administration to multiple kinds of database so easy. In other words, Navicat provides the ability for data in different databases and/or schemas to be kept up-to-date so that each repository contains the same information. A comfort zone is a beautiful place, but nothing ever grows there. Navicat Data Modeler enables you to build high-quality conceptual, logical and physical data models for a wide variety of audiences. It can also manage cloud databases such as Amazon Redshift, Amazon RDS, Alibaba Cloud. Features in Navicat are sophisticated enough to provide professional developers for all their specific needs, yet easy to learn for users who are new to database server. Navicat Cloud provides a cloud service for synchronizing connections, queries, model files and virtual group information from Navicat, other Navicat family members, different machines and different platforms. It provides strong authentication and secure encrypted communications between two hosts, known as SSH Port Forwarding (Tunneling), over an insecure network. With its well-designed Graphical User Interface(GUI), Navicat lets you quickly and easily create, organize, access and share information in a secure and easy way. Anyone who has ever made anything of importance was disciplined. The On Startup feature allows you to control what tabs appear when you launch Navicat. Navicat Cloud provides a cloud service for synchronizing connections, queries, model files and virtual group information from Navicat, other Navicat family members, different machines and different platforms. To successfully establish a new connection to local/remote server - no matter via SSL, SSH or HTTP, set the database login information in the General tab. Monitored servers include MySQL, MariaDB and SQL Server, and compatible with cloud databases like Amazon RDS, Amazon Aurora, Oracle Cloud, Google Cloud and Microsoft Azure. A man’s best friends are his ten fingers. Navicat allows you to transfer data from one database and/or schema to another with detailed analytical process. Navicat Data Modeler enables you to build high-quality conceptual, logical and physical data models for a wide variety of audiences. To connect to a database or schema, simply double-click it in the pane. You can select any connections, objects or projects, and then select the corresponding buttons on the Information Pane. The Main Window consists of several toolbars and panes for you to work on connections, database objects and advanced tools. In other words, Navicat provides the ability for data in different databases and/or schemas to be kept up-to-date so that each repository contains the same information. A comfort zone is a beautiful place, but nothing ever grows there. Anyone who has never made a mistake has never tried anything new. Navicat Monitor is a safe, simple and agentless remote server monitoring tool that is packed with powerful features to make your monitoring effective as possible. The first step is as good as half over. The past has no power over the present moment. In a Telnet session, all communications, including username and password, are transmitted in plain-text, allowing anyone to listen-in on your session and steal passwords and other information. The Navigation pane employs tree structure which allows you to take action upon the database and their objects through their pop-up menus quickly and easily. Navicat Cloud could not connect and access your databases. By which it means, it could only store your connection settings, queries, model files, and virtual group; your database passwords and data (e.g. tables, views, etc) will not be stored to Navicat Cloud.', 1, '2003-05-21 16:20:43', '2009-02-11 22:38:20', 2, 'sdfsdf', NULL);
INSERT INTO `credentials` VALUES (6, '202207130813mcv-clm-favicon.png', 'aaaaaaaa', 1, '2014-08-01 12:35:49', '2022-07-13 03:15:49', 3, 'sdfsdf', NULL);
INSERT INTO `credentials` VALUES (7, '202207130813mcv-clm-favicon.png', 'asdasfasdgszdvfxczv', 1, '2016-03-29 02:06:20', '2022-07-13 03:58:06', 7, 'sdfsdf', NULL);
INSERT INTO `credentials` VALUES (8, '202207130813mcv-clm-favicon.png', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', 1, '2006-08-23 11:54:41', '2022-07-13 03:58:30', 8, 'sdfsdf', NULL);
INSERT INTO `credentials` VALUES (9, '202207130813mcv-clm-favicon.png', 'It can also manage cloud databases such as Amazon Redshift, Amazon RDS, Alibaba Cloud. Features in Navicat are sophisticated enough to provide professional developers for all their specific needs, yet easy to learn for users who are new to database server. After logged in the Navicat Cloud feature, the Navigation pane will be divided into Navicat Cloud and My Connections sections. Remember that failure is an event, not a person. A comfort zone is a beautiful place, but nothing ever grows there. Anyone who has never made a mistake has never tried anything new. In other words, Navicat provides the ability for data in different databases and/or schemas to be kept up-to-date so that each repository contains the same information. Always keep your eyes open. Keep watching. Because whatever you see can inspire you. Champions keep playing until they get it right. There is no way to happiness. Happiness is the way. Navicat Data Modeler enables you to build high-quality conceptual, logical and physical data models for a wide variety of audiences. Remember that failure is an event, not a person. Actually it is just in an idea when feel oneself can achieve and cannot achieve. The reason why a great man is great is that he resolves to be a great man. Anyone who has ever made anything of importance was disciplined. After comparing data, the window shows the number of records that will be inserted, updated or deleted in the target. Genius is an infinite capacity for taking pains. To start working with your server in Navicat, you should first establish a connection or several connections using the Connection window. Navicat Data Modeler is a powerful and cost-effective database design tool which helps you build high-quality conceptual, logical and physical data models. HTTP Tunneling is a method for connecting to a server that uses the same protocol (http://) and the same port (port 80) as a web server does. Navicat provides a wide range advanced features, such as compelling code editing capabilities, smart code-completion, SQL formatting, and more. Flexible settings enable you to set up a custom key for comparison and synchronization. The On Startup feature allows you to control what tabs appear when you launch Navicat. SQL Editor allows you to create and edit SQL text, prepare and execute selected queries. You can select any connections, objects or projects, and then select the corresponding buttons on the Information Pane. It provides strong authentication and secure encrypted communications between two hosts, known as SSH Port Forwarding (Tunneling), over an insecure network. If it scares you, it might be a good thing to try. All the Navicat Cloud objects are located under different projects. You can share the project to other Navicat Cloud accounts for collaboration. Champions keep playing until they get it right. The On Startup feature allows you to control what tabs appear when you launch Navicat. Sometimes you win, sometimes you learn. If the plan doesn’t work, change the plan, but never the goal. Navicat authorizes you to make connection to remote servers running on different platforms (i.e. Windows, macOS, Linux and UNIX), and supports PAM and GSSAPI authentication. Champions keep playing until they get it right. A comfort zone is a beautiful place, but nothing ever grows there. Anyone who has never made a mistake has never tried anything new. With its well-designed Graphical User Interface(GUI), Navicat lets you quickly and easily create, organize, access and share information in a secure and easy way. The Navigation pane employs tree structure which allows you to take action upon the database and their objects through their pop-up menus quickly and easily.', 1, '2002-11-14 17:12:47', '2010-02-07 03:53:12', 5, 'sdfsdf', NULL);
INSERT INTO `credentials` VALUES (10, '202207130813mcv-clm-favicon.png', 'Instead of wondering when your next vacation is, maybe you should set up a life you don’t need to escape from. After comparing data, the window shows the number of records that will be inserted, updated or deleted in the target. After logged in the Navicat Cloud feature, the Navigation pane will be divided into Navicat Cloud and My Connections sections. It is used while your ISPs do not allow direct connections, but allows establishing HTTP connections. If it scares you, it might be a good thing to try. If opportunity doesn’t knock, build a door. To open a query using an external editor, control-click it and select Open with External Editor. You can set the file path of an external editor in Preferences. Actually it is just in an idea when feel oneself can achieve and cannot achieve. Navicat provides powerful tools for working with queries: Query Editor for editing the query text directly, and Query Builder, Find Builder or Aggregate Builder for building queries visually. A comfort zone is a beautiful place, but nothing ever grows there. The Main Window consists of several toolbars and panes for you to work on connections, database objects and advanced tools. Instead of wondering when your next vacation is, maybe you should set up a life you don’t need to escape from. In the middle of winter I at last discovered that there was in me an invincible summer. Genius is an infinite capacity for taking pains. HTTP Tunneling is a method for connecting to a server that uses the same protocol (http://) and the same port (port 80) as a web server does. The On Startup feature allows you to control what tabs appear when you launch Navicat. Navicat allows you to transfer data from one database and/or schema to another with detailed analytical process. SQL Editor allows you to create and edit SQL text, prepare and execute selected queries. Secure Sockets Layer(SSL) is a protocol for transmitting private documents via the Internet. I will greet this day with love in my heart. Navicat allows you to transfer data from one database and/or schema to another with detailed analytical process. A man is not old until regrets take the place of dreams. You will succeed because most people are lazy. Navicat Cloud provides a cloud service for synchronizing connections, queries, model files and virtual group information from Navicat, other Navicat family members, different machines and different platforms. It collects process metrics such as CPU load, RAM usage, and a variety of other resources over SSH/SNMP. The Synchronize to Database function will give you a full picture of all database differences. Flexible settings enable you to set up a custom key for comparison and synchronization. The reason why a great man is great is that he resolves to be a great man. All journeys have secret destinations of which the traveler is unaware. If your Internet Service Provider (ISP) does not provide direct access to its server, Secure Tunneling Protocol (SSH) / HTTP is another solution. A comfort zone is a beautiful place, but nothing ever grows there. Optimism is the one quality more associated with success and happiness than any other. If your Internet Service Provider (ISP) does not provide direct access to its server, Secure Tunneling Protocol (SSH) / HTTP is another solution. Anyone who has never made a mistake has never tried anything new. It collects process metrics such as CPU load, RAM usage, and a variety of other resources over SSH/SNMP. In other words, Navicat provides the ability for data in different databases and/or schemas to be kept up-to-date so that each repository contains the same information. In the Objects tab, you can use the List List, Detail Detail and ER Diagram ER Diagram buttons to change the object view. All journeys have secret destinations of which the traveler is unaware. Anyone who has never made a mistake has never tried anything new. What you get by achieving your goals is not as important as what you become by achieving your goals. Navicat provides powerful tools for working with queries: Query Editor for editing the query text directly, and Query Builder, Find Builder or Aggregate Builder for building queries visually. What you get by achieving your goals is not as important as what you become by achieving your goals. Navicat authorizes you to make connection to remote servers running on different platforms (i.e. Windows, macOS, Linux and UNIX), and supports PAM and GSSAPI authentication. You must be the change you wish to see in the world. In the middle of winter I at last discovered that there was in me an invincible summer. Anyone who has ever made anything of importance was disciplined. I may not have gone where I intended to go, but I think I have ended up where I needed to be. It wasn’t raining when Noah built the ark. To connect to a database or schema, simply double-click it in the pane. After logged in the Navicat Cloud feature, the Navigation pane will be divided into Navicat Cloud and My Connections sections. Navicat 15 has added support for the system-wide dark mode. In other words, Navicat provides the ability for data in different databases and/or schemas to be kept up-to-date so that each repository contains the same information. Export Wizard allows you to export data from tables, collections, views, or query results to any available formats. Navicat Monitor is a safe, simple and agentless remote server monitoring tool that is packed with powerful features to make your monitoring effective as possible. A man is not old until regrets take the place of dreams. There is no way to happiness. Happiness is the way. Instead of wondering when your next vacation is, maybe you should set up a life you don’t need to escape from. You can select any connections, objects or projects, and then select the corresponding buttons on the Information Pane. Navicat provides powerful tools for working with queries: Query Editor for editing the query text directly, and Query Builder, Find Builder or Aggregate Builder for building queries visually. All journeys have secret destinations of which the traveler is unaware. If you wait, all that happens is you get older. A query is used to extract data from the database in a readable format according to the user\'s request. What you get by achieving your goals is not as important as what you become by achieving your goals. Actually it is just in an idea when feel oneself can achieve and cannot achieve. The Information Pane shows the detailed object information, project activities, the DDL of database objects, object dependencies, membership of users/roles and preview. If your Internet Service Provider (ISP) does not provide direct access to its server, Secure Tunneling Protocol (SSH) / HTTP is another solution. Navicat Monitor is a safe, simple and agentless remote server monitoring tool that is packed with powerful features to make your monitoring effective as possible. Export Wizard allows you to export data from tables, collections, views, or query results to any available formats. Optimism is the one quality more associated with success and happiness than any other. The Information Pane shows the detailed object information, project activities, the DDL of database objects, object dependencies, membership of users/roles and preview. After logged in the Navicat Cloud feature, the Navigation pane will be divided into Navicat Cloud and My Connections sections. You must be the change you wish to see in the world. To connect to a database or schema, simply double-click it in the pane. Monitored servers include MySQL, MariaDB and SQL Server, and compatible with cloud databases like Amazon RDS, Amazon Aurora, Oracle Cloud, Google Cloud and Microsoft Azure. To clear or reload various internal caches, flush tables, or acquire locks, control-click your connection in the Navigation pane and select Flush and choose the flush option. You must have the reload privilege to use this feature. Sometimes you win, sometimes you learn. You must be the change you wish to see in the world. Remember that failure is an event, not a person. The past has no power over the present moment. Such sessions are also susceptible to session hijacking, where a malicious user takes over your session once you have authenticated. Navicat Monitor can be installed on any local computer or virtual machine and does not require any software installation on the servers being monitored. HTTP Tunneling is a method for connecting to a server that uses the same protocol (http://) and the same port (port 80) as a web server does. HTTP Tunneling is a method for connecting to a server that uses the same protocol (http://) and the same port (port 80) as a web server does. The past has no power over the present moment. After logged in the Navicat Cloud feature, the Navigation pane will be divided into Navicat Cloud and My Connections sections.', 1, '2021-01-06 15:45:33', '2021-10-13 22:25:08', 5, 'sdfsdf', NULL);
INSERT INTO `credentials` VALUES (11, '202207130813mcv-clm-favicon.png', 'ddd', 1, '2021-10-10 11:25:37', '2022-07-13 03:16:04', 6, 'sdfsdfffff', NULL);
INSERT INTO `credentials` VALUES (20, '202207130813mcv-clm-favicon.png', 'sdfsdf', 1, '2022-07-13 14:21:05', '2022-07-13 14:21:05', 2, 'sdfsdf', NULL);
INSERT INTO `credentials` VALUES (21, '202207130813mcv-clm-favicon.png', 'bbbbbbbbbbbb', 1, '2022-07-13 14:26:00', '2022-07-13 14:53:15', 5, 'aaaaaaa', '202207131453document.pdf');
INSERT INTO `credentials` VALUES (22, '202207130813mcv-clm-favicon.png', 'ấddf', 1, '2022-07-13 14:49:58', '2022-07-13 14:49:58', 5, 'fsadfsa', '202207131449document.pdf');
INSERT INTO `credentials` VALUES (23, '202207130813mcv-clm-favicon.png', 'ấddf', 1, '2022-07-13 14:50:42', '2022-07-13 14:50:42', 5, 'asdfasdf', '202207131450document.pdf');
INSERT INTO `credentials` VALUES (24, '202207130813mcv-clm-favicon.png', 'vvvvvvvvvv', 1, '2022-07-13 14:52:34', '2022-07-13 14:52:34', 5, 'aaaaaaaa', '202207131452document.pdf');
INSERT INTO `credentials` VALUES (25, '202207130813mcv-clm-favicon.png', 'fasdfasdf', 1, '2022-07-14 07:12:30', '2022-07-14 07:12:30', 11, 'dasfdasfasd', '202207140712canvas-1 (3).pdf');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for list_quotations
-- ----------------------------
DROP TABLE IF EXISTS `list_quotations`;
CREATE TABLE `list_quotations`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `table` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `file` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 17 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of list_quotations
-- ----------------------------
INSERT INTO `list_quotations` VALUES (1, 'Yin Wai Yeeeee', '8kPj4RtIcM', 1, 1, '202207140618canvas-1 (1).pdf', NULL, '2022-07-14 07:23:27', '<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<thead>\r\n		<tr>\r\n			<th scope=\"col\">1</th>\r\n			<th scope=\"col\">2</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>3</td>\r\n			<td>4</td>\r\n		</tr>\r\n		<tr>\r\n			<td>5</td>\r\n			<td>5</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>');
INSERT INTO `list_quotations` VALUES (2, 'Tony Gray', 'dCDZfIbQOx', 11, 1, '', NULL, NULL, NULL);
INSERT INTO `list_quotations` VALUES (3, 'Donald Moreno', '7yBpU7Na1c', 10, 1, '', NULL, NULL, NULL);
INSERT INTO `list_quotations` VALUES (4, 'Lee Chung Yin', '1dQuMtsmUT', 9, 1, '', NULL, NULL, NULL);
INSERT INTO `list_quotations` VALUES (5, 'Sun Shihan', 'bF3o4JfQ2s', 8, 1, '', NULL, NULL, NULL);
INSERT INTO `list_quotations` VALUES (6, 'Cheng Tsz Hin', 'itQy4LZULY', 7, 1, '', NULL, NULL, NULL);
INSERT INTO `list_quotations` VALUES (7, 'Victor Martinez', 'gwkqo2yRDR', 6, 1, '', NULL, NULL, NULL);
INSERT INTO `list_quotations` VALUES (8, 'Okamoto Eita', 'jQsmfGv5rV', 5, 1, '', NULL, NULL, NULL);
INSERT INTO `list_quotations` VALUES (9, 'Pauline Bell', 'A4LG63KmQO', 4, 1, '', NULL, NULL, NULL);
INSERT INTO `list_quotations` VALUES (10, 'Bruce Kennedy', 'cHARf8AX2n', 3, 1, '', NULL, NULL, NULL);
INSERT INTO `list_quotations` VALUES (11, 'Ye Xiaoming', 'acpIxcZJI3', 2, 1, '', NULL, NULL, NULL);
INSERT INTO `list_quotations` VALUES (12, 'Shing Tak Wah', 'zGpc18nC2O', 1, 1, '', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (5, '2022_07_12_034406_create_categories_table', 2);
INSERT INTO `migrations` VALUES (6, '2022_07_12_154702_create_credentials_table', 3);
INSERT INTO `migrations` VALUES (7, '2022_07_13_020235_create_categry_id_field', 4);
INSERT INTO `migrations` VALUES (8, '2022_07_13_020523_create_categry_id_field', 5);
INSERT INTO `migrations` VALUES (10, '2022_07_13_040233_create_quotations_table', 6);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for quotations
-- ----------------------------
DROP TABLE IF EXISTS `quotations`;
CREATE TABLE `quotations`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `services` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(191) NOT NULL,
  `unit_price` int(191) NOT NULL,
  `total` int(191) NOT NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `category_id` int(11) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `demo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `id_list` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 19 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of quotations
-- ----------------------------
INSERT INTO `quotations` VALUES (4, 'asd', '12fsdfsa', 1, 2000000, 1000000, NULL, NULL, '2022-01-01 12:50:00', '2022-07-13 18:00:50', NULL, 1);
INSERT INTO `quotations` VALUES (5, 'cUjrtGZU4i', '2tZYBxoFPy', 1, 1000000, 1000000, NULL, NULL, '2009-05-22 18:54:29', '2016-10-09 04:12:57', NULL, 3);
INSERT INTO `quotations` VALUES (6, 'aa', 'V8Of7AhcOB', 1, 1000000, 1000000, NULL, NULL, '2002-01-28 19:53:21', '2022-07-13 17:10:46', NULL, 3);
INSERT INTO `quotations` VALUES (7, 'tkRNjPTUBB', '7JwRzRoJyL', 1, 1000000, 1000000, NULL, NULL, '2005-12-06 05:38:10', '2018-11-27 08:22:56', NULL, 1);
INSERT INTO `quotations` VALUES (8, '6JoSxlc6emeee', 'HYW3V8DHy5dsfasdf', 2, 1000000, 1000000, NULL, NULL, '2013-05-06 07:14:49', '2022-07-14 02:16:31', NULL, 1);
INSERT INTO `quotations` VALUES (9, '2MRdNDOq0j', '45645e6', 1, 1000000, 1000000, NULL, NULL, '2006-05-18 13:46:53', '2022-07-13 17:14:03', NULL, 1);
INSERT INTO `quotations` VALUES (10, '74dNd3d8ML', 'c4gF5FwuoC', 1, 1000000, 5000000, NULL, NULL, '2020-02-02 23:33:42', '2022-07-13 17:15:53', NULL, 1);
INSERT INTO `quotations` VALUES (11, 'EQ9Qio3vDW', 'wmtKowRgVu', 1, 1000000, 1000000, NULL, NULL, '2003-01-28 15:24:32', '2003-10-22 08:55:41', NULL, 1);
INSERT INTO `quotations` VALUES (12, 'inyVQcdBoH', 'hcwwNOPPfh', 1, 2, 1000000, NULL, NULL, '2017-11-12 21:23:06', '2022-07-13 17:48:28', NULL, 1);
INSERT INTO `quotations` VALUES (18, 'asdfasdf', 'asdfasdf', 300, 255, 76500, NULL, NULL, '2022-07-13 07:53:09', '2022-07-13 08:31:43', NULL, 0);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Admin', 'admin@quotation.com', NULL, '$2y$10$BPf/Ap32VHPRoGPdTnUlC.8V2JPpzflXi/BtgkV3HlgAHPq.tTXy6', NULL, '2022-07-11 06:16:29', '2022-07-13 15:34:31');

SET FOREIGN_KEY_CHECKS = 1;
