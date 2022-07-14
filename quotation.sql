/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50736
 Source Host           : 127.0.0.1:3306
 Source Schema         : quotation

 Target Server Type    : MySQL
 Target Server Version : 50736
 File Encoding         : 65001

 Date: 15/07/2022 00:54:42
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
) ENGINE = MyISAM AUTO_INCREMENT = 38 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of credentials
-- ----------------------------
INSERT INTO `credentials` VALUES (30, '202207141717hinh-nen-galaxy-may-tinh-5.jpg', 'Đây là Credential của Thể thao', 1, '2022-07-14 17:17:25', '2022-07-14 17:17:25', 7, 'Cedential', '202207141717document.pdf');
INSERT INTO `credentials` VALUES (31, '202207141718hinh-nen-galaxy-may-tinh-6.jpg', 'Đây là Credential của Y tế', 1, '2022-07-14 17:18:07', '2022-07-14 17:18:07', 8, 'Cedential', '202207141718document.pdf');
INSERT INTO `credentials` VALUES (32, '202207141719hinh-nen-galaxy-may-tinh-7.jpg', 'Đây là Credential của Seeding', 1, '2022-07-14 17:19:55', '2022-07-14 17:19:55', 9, 'Credential', '202207141719document.pdf');
INSERT INTO `credentials` VALUES (33, '202207141720hinh-nen-galaxy-may-tinh-8.jpg', 'Đây là Credential của Phim trường', 1, '2022-07-14 17:20:39', '2022-07-14 17:20:39', 10, 'Credential', '202207141720document.pdf');
INSERT INTO `credentials` VALUES (34, '202207141721hinh-nen-galaxy-may-tinh-9.jpg', 'Đây là Credential của Event', 1, '2022-07-14 17:21:20', '2022-07-14 17:21:20', 11, 'Credential', '202207141721document.pdf');
INSERT INTO `credentials` VALUES (35, '202207141722hinh-nen-galaxy-may-tinh-10.jpg', 'Đây là Credential của Phim trường Google Ads - TikTok ADs', 1, '2022-07-14 17:22:31', '2022-07-14 17:22:31', 12, 'Credentials', '202207141722document.pdf');
INSERT INTO `credentials` VALUES (36, '202207141723hinh-nen-galaxy-may-tinh-11.jpg', 'Đây là Credential của KOLs', 1, '2022-07-14 17:23:02', '2022-07-14 17:23:02', 4, 'Credentials', '202207141723document.pdf');
INSERT INTO `credentials` VALUES (37, '202207141723hinh-nen-galaxy-may-tinh-12.jpg', 'Đây là Credential của Tin Tức - Báo Đài', 1, '2022-07-14 17:23:31', '2022-07-14 17:23:31', 6, 'Credentials', '202207141723document.pdf');
INSERT INTO `credentials` VALUES (29, '202207141718hinh-nen-galaxy-may-tinh-4.jpg', '<p>Đ&acirc;y l&agrave; Credential của MCV Ads</p>', 1, '2022-07-14 17:16:47', '2022-07-14 17:18:44', 5, 'Credential', '202207141718document.pdf');
INSERT INTO `credentials` VALUES (28, '202207141716hinh-nen-galaxy-may-tinh-3.jpg', 'Đây là Credential của Sản xuất và sáng tạo content', 1, '2022-07-14 17:16:14', '2022-07-14 17:16:14', 3, 'Credential', '202207141716document.pdf');
INSERT INTO `credentials` VALUES (27, '202207141713hinh-nen-galaxy-may-tinh-2.jpg', 'Đây là Credential của Bản quyền', 1, '2022-07-14 17:13:48', '2022-07-14 17:13:48', 2, 'Credential', '202207141713s.pdf');
INSERT INTO `credentials` VALUES (26, '202207141712hinh-nen-galaxy-may-tinh.jpg', 'Đây là Credential của PR Solution', 1, '2022-07-14 17:12:14', '2022-07-14 17:12:14', 1, 'Credential', '202207141712document.pdf');

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
) ENGINE = MyISAM AUTO_INCREMENT = 21 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of list_quotations
-- ----------------------------
INSERT INTO `list_quotations` VALUES (19, 'MCV List kênh', NULL, 5, 1, '202207141745test.xlsx', '2022-07-14 17:37:58', '2022-07-14 17:45:06', '<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:1080px\">\r\n	<thead>\r\n		<tr>\r\n			<th scope=\"col\">1</th>\r\n			<th scope=\"col\">2</th>\r\n			<th scope=\"col\">3</th>\r\n			<th scope=\"col\">4</th>\r\n			<th scope=\"col\">5</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>6</td>\r\n			<td>7</td>\r\n			<td>8</td>\r\n			<td>9</td>\r\n			<td>10</td>\r\n		</tr>\r\n		<tr>\r\n			<td>11</td>\r\n			<td>12</td>\r\n			<td>13</td>\r\n			<td>14</td>\r\n			<td>15</td>\r\n		</tr>\r\n	</tbody>\r\n</table>');
INSERT INTO `list_quotations` VALUES (18, 'List KOLs', NULL, 2, 1, '202207141745test.xlsx', '2022-07-14 17:37:22', '2022-07-14 17:37:22', '<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:1080px\">\r\n	<thead>\r\n		<tr>\r\n			<th scope=\"col\">1</th>\r\n			<th scope=\"col\">2</th>\r\n			<th scope=\"col\">3</th>\r\n			<th scope=\"col\">4</th>\r\n			<th scope=\"col\">5</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>6</td>\r\n			<td>7</td>\r\n			<td>8</td>\r\n			<td>9</td>\r\n			<td>10</td>\r\n		</tr>\r\n		<tr>\r\n			<td>11</td>\r\n			<td>12</td>\r\n			<td>13</td>\r\n			<td>14</td>\r\n			<td>15</td>\r\n		</tr>\r\n	</tbody>\r\n</table>');
INSERT INTO `list_quotations` VALUES (17, 'Chi tiết báo giá', NULL, 1, 1, '202207141745test.xlsx', '2022-07-14 17:31:15', '2022-07-14 17:36:05', '<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:1080px\">\r\n	<thead>\r\n		<tr>\r\n			<th scope=\"col\">1</th>\r\n			<th scope=\"col\">2</th>\r\n			<th scope=\"col\">3</th>\r\n			<th scope=\"col\">4</th>\r\n			<th scope=\"col\">5</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>6</td>\r\n			<td>7</td>\r\n			<td>8</td>\r\n			<td>9</td>\r\n			<td>10</td>\r\n		</tr>\r\n		<tr>\r\n			<td>11</td>\r\n			<td>12</td>\r\n			<td>13</td>\r\n			<td>14</td>\r\n			<td>15</td>\r\n		</tr>\r\n	</tbody>\r\n</table>');
INSERT INTO `list_quotations` VALUES (20, 'Chi tiết báo giá', NULL, 6, 1, '202207141745test.xlsx', '2022-07-14 17:38:28', '2022-07-14 17:39:52', '<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:1080px\">\r\n	<thead>\r\n		<tr>\r\n			<th scope=\"col\">1</th>\r\n			<th scope=\"col\">2</th>\r\n			<th scope=\"col\">3</th>\r\n			<th scope=\"col\">4</th>\r\n			<th scope=\"col\">5</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>6</td>\r\n			<td>7</td>\r\n			<td>8</td>\r\n			<td>9</td>\r\n			<td>10</td>\r\n		</tr>\r\n		<tr>\r\n			<td>11</td>\r\n			<td>12</td>\r\n			<td>13</td>\r\n			<td>14</td>\r\n			<td>15</td>\r\n		</tr>\r\n	</tbody>\r\n</table>');

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
