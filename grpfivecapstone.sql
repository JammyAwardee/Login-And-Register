/*
 Navicat Premium Data Transfer

 Source Server         : MyLocalDB
 Source Server Type    : MariaDB
 Source Server Version : 100427
 Source Host           : localhost:3306
 Source Schema         : grpfivecapstone

 Target Server Type    : MariaDB
 Target Server Version : 100427
 File Encoding         : 65001

 Date: 17/02/2023 08:38:05
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for barangayofficials
-- ----------------------------
DROP TABLE IF EXISTS `barangayofficials`;
CREATE TABLE `barangayofficials`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `resident_id` bigint(20) UNSIGNED NOT NULL,
  `barangayofficial_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `term_start` date NOT NULL,
  `term_end` date NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of barangayofficials
-- ----------------------------
INSERT INTO `barangayofficials` VALUES (1, 25, NULL, 'Chairman', '2018-06-30', NULL, '2023-02-08 19:47:16', '2023-02-08 19:47:23');
INSERT INTO `barangayofficials` VALUES (2, 28, NULL, 'Kagawad', '2018-06-30', NULL, '2023-02-08 19:49:05', '2023-02-08 19:49:11');
INSERT INTO `barangayofficials` VALUES (3, 10, NULL, 'Kagawad', '2018-06-30', NULL, '2023-02-08 19:49:53', '2023-02-08 19:49:57');
INSERT INTO `barangayofficials` VALUES (4, 13, NULL, 'Kagawad', '2018-06-30', NULL, '2023-02-08 19:50:44', '2023-02-08 19:50:47');
INSERT INTO `barangayofficials` VALUES (5, 31, NULL, 'Kagawad', '2018-06-30', NULL, '2023-02-08 19:51:33', '2023-02-08 19:51:37');
INSERT INTO `barangayofficials` VALUES (6, 3, NULL, 'Kagawad', '2018-06-30', NULL, '2023-02-08 19:52:00', '2023-02-08 19:52:02');
INSERT INTO `barangayofficials` VALUES (7, 32, NULL, 'Kagawad', '2018-06-30', NULL, '2023-02-08 19:52:19', '2023-02-08 19:52:21');
INSERT INTO `barangayofficials` VALUES (8, 2, NULL, 'Kagawad', '2018-06-30', NULL, '2023-02-08 19:52:42', '2023-02-08 19:52:45');
INSERT INTO `barangayofficials` VALUES (9, 9, NULL, 'Sanguniang Kabataan', '2018-06-30', NULL, '2023-02-08 19:53:12', '2023-02-08 19:53:16');
INSERT INTO `barangayofficials` VALUES (10, 23, NULL, 'Secretary', '2018-06-30', NULL, '2023-02-08 19:54:47', '2023-02-08 19:54:49');
INSERT INTO `barangayofficials` VALUES (12, 4, NULL, 'Treasurer', '2018-06-30', NULL, '2023-02-08 19:54:04', '2023-02-08 19:54:08');
INSERT INTO `barangayofficials` VALUES (14, 5, 'Waelchi, Samara Jacobson', 'Treasurer', '2023-02-16', NULL, '2023-02-16 19:44:41', '2023-02-16 19:44:41');
INSERT INTO `barangayofficials` VALUES (15, 6, 'Zulauf, Vella Romaguera', 'Secretary', '2023-02-15', NULL, '2023-02-16 19:59:05', '2023-02-16 19:59:05');
INSERT INTO `barangayofficials` VALUES (16, 33, 'Feest, Noemy Grady', 'SK Chairman', '2023-02-12', NULL, '2023-02-16 20:04:43', '2023-02-16 20:04:43');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for households
-- ----------------------------
DROP TABLE IF EXISTS `households`;
CREATE TABLE `households`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `household_head` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `province` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `barangay` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `zone_id` bigint(20) UNSIGNED NOT NULL,
  `street_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ownership_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dwelling_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `water_source` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lighting_source` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `toilet_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` bigint(20) NULL DEFAULT NULL,
  `last_update_by` bigint(20) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 34 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of households
-- ----------------------------
INSERT INTO `households` VALUES (1, 'Haley, Nicole Rohan', 'NCR', 'Kodego', 'SP404', 5, '2494 Bogisich Rte', 'Owned', 'Concrete', 'Deep Well', 'Electric', 'Water Sealed', 2, 2, '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `households` VALUES (2, 'Nader, Nettie Kautzer', 'NCR', 'Kodego', 'SP404', 3, '8677 Bahringer Dale Suite 785', 'Leased', 'Concrete', 'Deep Well', 'Electric', 'Water Sealed', 2, 2, '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `households` VALUES (3, 'Blanda, Leola Gulgowski', 'NCR', 'Kodego', 'SP404', 2, '86887 Isac Ford', 'Leased', 'Light Materials', 'Faucet', 'Electric', 'Water Sealed', 2, 2, '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `households` VALUES (4, 'Waelchi, Samara Jacobson', 'NCR', 'Kodego', 'SP404', 4, '6667 Frederick Villages', 'Leased', 'Concrete', 'Deep Well', 'Electric', 'Water Sealed', 2, 2, '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `households` VALUES (5, 'Thiel, Sofia Huel', 'NCR', 'Kodego', 'SP404', 6, '81435 Bria Common', 'Leased', 'Light Materials', 'Deep Well', 'Electric', 'Water Sealed', 2, 2, '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `households` VALUES (6, 'Orn, Bridie Rohan', 'NCR', 'Kodego', 'SP404', 3, '60535 Beahan Street Apt. 472', 'Rented', 'Light Materials', 'Faucet', 'Electric', 'Water Sealed', 2, 2, '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `households` VALUES (7, 'Kutch, Eriberto Lueilwitz', 'NCR', 'Kodego', 'SP404', 7, '197 Torrance Rest', 'Owned', 'Concrete', 'Deep Well', 'Electric', 'Water Sealed', 2, 2, '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `households` VALUES (8, 'Kunde, Blanche Hauck', 'NCR', 'Kodego', 'SP404', 1, '87927 O\'Reilly Forest Apt. 782', 'Rented', 'Light Materials', 'Deep Well', 'Electric', 'Water Sealed', 2, 2, '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `households` VALUES (9, 'Langosh, Jaunita Davis', 'NCR', 'Kodego', 'SP404', 7, '2167 Koepp Parkway Suite 781', 'Leased', 'Light Materials', 'Faucet', 'Electric', 'Water Sealed', 2, 2, '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `households` VALUES (10, 'Davis, Vinnie Weissnat', 'NCR', 'Kodego', 'SP404', 2, '58404 Sadie Court Suite 203', 'Rented', 'Light Materials', 'Deep Well', 'Electric', 'Water Sealed', 2, 2, '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `households` VALUES (11, 'Rogahn, Keyon Sanford', 'NCR', 'Kodego', 'SP404', 1, '546 Tiara Curve', 'Owned', 'Light Materials', 'Deep Well', 'Electric', 'Water Sealed', 2, 2, '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `households` VALUES (12, 'Bode, Aurelia Jacobson', 'NCR', 'Kodego', 'SP404', 2, '46656 Roob Way Suite 586', 'Rented', 'Light Materials', 'Faucet', 'Electric', 'Water Sealed', 2, 2, '2023-02-08 09:55:43', '2023-02-15 01:33:17');

-- ----------------------------
-- Table structure for logs
-- ----------------------------
DROP TABLE IF EXISTS `logs`;
CREATE TABLE `logs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `action` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `by_userId` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `by_userName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 31 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of logs
-- ----------------------------
INSERT INTO `logs` VALUES (0, 'created', '2', 'Official', 'user profile', 'Ammos', '2023-02-15 20:56:36', '2023-02-15 20:56:36');
INSERT INTO `logs` VALUES (1, 'created', '2', 'Official', 'user profile', 'Ammos', '2023-02-15 20:44:50', '2023-02-15 20:44:50');
INSERT INTO `logs` VALUES (2, 'updated', '2', 'Official', 'user profile', 'Ammos', '2023-02-15 20:45:54', '2023-02-15 20:45:54');
INSERT INTO `logs` VALUES (3, 'deleted', '2', 'Official', 'user profile', 'Ammos', '2023-02-15 20:46:27', '2023-02-15 20:46:27');
INSERT INTO `logs` VALUES (5, 'updated', '2', 'Official', 'user profile', 'Ammos', '2023-02-15 20:56:56', '2023-02-15 20:56:56');
INSERT INTO `logs` VALUES (6, 'deleted', '2', 'Official', 'user profile', 'Ammos', '2023-02-15 20:57:09', '2023-02-15 20:57:09');
INSERT INTO `logs` VALUES (7, 'created', '2', 'Official', 'user profile', 'Ammos', '2023-02-15 21:03:55', '2023-02-15 21:03:55');
INSERT INTO `logs` VALUES (8, 'updated', '2', 'Official', 'user profile', 'Ammos', '2023-02-15 21:04:22', '2023-02-15 21:04:22');
INSERT INTO `logs` VALUES (9, 'updated', '2', 'Official', 'user password', 'Ammos', '2023-02-15 21:04:44', '2023-02-15 21:04:44');
INSERT INTO `logs` VALUES (10, 'deleted', '2', 'Official', 'user profile', 'Ammos', '2023-02-15 21:05:16', '2023-02-15 21:05:16');
INSERT INTO `logs` VALUES (11, 'created', '2', 'Official', 'household', 'Doe, John Miller', '2023-02-15 21:10:59', '2023-02-15 21:10:59');
INSERT INTO `logs` VALUES (12, 'updated', '2', 'Official', 'household', '33', '2023-02-15 21:11:41', '2023-02-15 21:11:41');
INSERT INTO `logs` VALUES (13, 'updated', '2', 'Official', 'household', 'Doe, John Miller', '2023-02-15 21:12:51', '2023-02-15 21:12:51');
INSERT INTO `logs` VALUES (14, 'deleted', '2', 'Official', 'household', 'Doe, John Miller', '2023-02-15 21:14:18', '2023-02-15 21:14:18');
INSERT INTO `logs` VALUES (15, 'deleted', '2', 'Official', 'household', 'Dela Cruz, Juan Ponce', '2023-02-15 21:14:23', '2023-02-15 21:14:23');
INSERT INTO `logs` VALUES (16, 'created', '1', 'Admin User', 'user profile', 'trial', '2023-02-15 21:51:39', '2023-02-15 21:51:39');
INSERT INTO `logs` VALUES (17, 'created', '2', 'Official', 'user profile', 'trial2', '2023-02-15 22:03:59', '2023-02-15 22:03:59');
INSERT INTO `logs` VALUES (18, 'deleted', '2', 'Official', 'user profile', 'trial2', '2023-02-15 22:04:05', '2023-02-15 22:04:05');
INSERT INTO `logs` VALUES (19, 'deleted', '2', 'Official', 'user profile', 'trial', '2023-02-15 22:04:08', '2023-02-15 22:04:08');
INSERT INTO `logs` VALUES (20, 'created', '2', 'Official', 'user profile', 'tria4', '2023-02-15 23:42:04', '2023-02-15 23:42:04');
INSERT INTO `logs` VALUES (21, 'updated', '2', 'Official', 'user profile', 'tria4', '2023-02-15 23:42:49', '2023-02-15 23:42:49');
INSERT INTO `logs` VALUES (22, 'updated', '2', 'Official', 'user password', 'trial4', '2023-02-15 23:43:43', '2023-02-15 23:43:43');
INSERT INTO `logs` VALUES (23, 'deleted', '2', 'Official', 'user profile', 'trial4', '2023-02-15 23:44:04', '2023-02-15 23:44:04');
INSERT INTO `logs` VALUES (24, 'created', '1', 'Admin User', 'user profile', 'trial', '2023-02-15 23:53:19', '2023-02-15 23:53:19');
INSERT INTO `logs` VALUES (25, 'updated', '1', 'Admin User', 'user profile', 'trial', '2023-02-15 23:55:50', '2023-02-15 23:55:50');
INSERT INTO `logs` VALUES (26, 'created', '2', 'Official', 'barangay official profile', '5', '2023-02-16 19:44:41', '2023-02-16 19:44:41');
INSERT INTO `logs` VALUES (27, 'created', '2', 'Official', 'barangay official profile', '6', '2023-02-16 19:59:05', '2023-02-16 19:59:05');
INSERT INTO `logs` VALUES (28, 'created', '2', 'Official', 'barangay official profile', 'Feest, Noemy Grady', '2023-02-16 20:04:43', '2023-02-16 20:04:43');
INSERT INTO `logs` VALUES (29, 'created', '1', 'Admin User', 'user profile', 'Julius Marc Agustin', '2023-02-17 08:22:21', '2023-02-17 08:22:21');
INSERT INTO `logs` VALUES (30, 'updated', '1', 'Admin User', 'user password', 'Julius Marc Agustin', '2023-02-17 08:22:42', '2023-02-17 08:22:42');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (5, '2023_02_08_021928_create_residents_table', 1);
INSERT INTO `migrations` VALUES (6, '2023_02_08_022134_create_households_table', 1);
INSERT INTO `migrations` VALUES (7, '2023_02_08_022634_create_barangay_officials_table', 1);
INSERT INTO `migrations` VALUES (8, '2023_02_08_022734_create_zones_table', 1);
INSERT INTO `migrations` VALUES (9, '2023_02_08_022832_create_news_and_updates_table', 1);
INSERT INTO `migrations` VALUES (10, '2023_02_08_022905_create_projects_table', 1);
INSERT INTO `migrations` VALUES (11, '2018_01_01_100000_create_ph_address_tables', 2);
INSERT INTO `migrations` VALUES (12, '2023_02_15_200143_create_logs_table', 3);

-- ----------------------------
-- Table structure for newsandupdates
-- ----------------------------
DROP TABLE IF EXISTS `newsandupdates`;
CREATE TABLE `newsandupdates`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of newsandupdates
-- ----------------------------
INSERT INTO `newsandupdates` VALUES (1, 2, 'Zone 2 bags the Chairman\'s Cup', 'Zone 2 Basketball Team made history yesterday by winning the prestigious Chairman\'s Cup in the annual Barangay Basketball League. The team, composed of young and talented players, fought hard against their opponents and emerged victorious with a final score of 78-75.\r\n\r\nThe championship game was held at the Barangay Sports Complex and was witnessed by a huge crowd of enthusiastic supporters from both teams. The game was intense from start to finish, with both teams giving their all on the court. However, Zone 2 proved to be the stronger team and managed to secure the win.\r\n\r\nThe team captain, John Doe, who also emerged as the tournament\'s Most Valuable Player, expressed his gratitude for the support they received from their fans. He said, \"We couldn\'t have done it without the support of our family, friends, and fans. This victory is for all of us.\"\r\n\r\nBarangay Chairman, Jane Doe, expressed her delight at the successful outcome of the tournament and commended the players for their hard work and determination. She said, \"This is a testament to the hard work and dedication of our young athletes. I am proud of their achievement and I am sure that they will continue to make our barangay proud in the future.\"\r\n\r\nThe Chairman\'s Cup is one of the most prestigious awards in the Barangay Basketball League, and the victory of Zone 2 marks a new chapter in the history of the league. The team\'s fans are already looking forward to their next win, while the players are already preparing for their next challenge.\r\n\r\nIn conclusion, the victory of Zone 2 Basketball Team in the Chairman\'s Cup is a testament to the power of teamwork and determination. The players, fans, and officials are all proud of this accomplishment, and the barangay is looking forward to more victories from the team in the future.', '2023-02-08 20:08:32', '2023-02-08 20:08:35');
INSERT INTO `newsandupdates` VALUES (2, 2, 'Red Cross\'s successful Blood Letting Activity', 'The Red Cross Society of Barangay SP404 recently held a successful blood letting activity, which saw a high turnout of donors from the community. The event, which was held at the Barangay Hall, aimed to increase the blood supply in local hospitals and provide assistance to those in need.\r\n\r\nThe event was well-organized, with the Red Cross volunteers working hard to ensure that the process was smooth and efficient. The donors were screened to determine their eligibility and those who were cleared were able to make their blood donation.\r\n\r\nBarangay Chairman, Jane Doe, expressed her appreciation for the support received from the community and praised the efforts of the Red Cross Society. She said, \"It is wonderful to see the community coming together to help those in need. The Red Cross Society does an excellent job of organizing these activities and I am proud to be a part of such a caring community.\"\r\n\r\nThe donors, who included both young and old, were given snacks and refreshments as a token of appreciation for their contributions. Many of them expressed their satisfaction with the event and their willingness to participate in future activities of the same nature.\r\n\r\nThe collected blood will be sent to local hospitals and used to treat patients in need. The Red Cross Society is well-known for its efforts in promoting the importance of blood donation and providing assistance to those in need.\r\n\r\nIn conclusion, the successful blood letting activity by the Red Cross Society of Barangay SP404 is a testament to the generosity and kindness of the community. The community\'s support will help to save the lives of many patients and bring hope to those in need. The Red Cross Society is grateful for the support received and is looking forward to future events that will bring the community together.', '2023-02-08 20:13:43', '2023-02-08 20:13:47');
INSERT INTO `newsandupdates` VALUES (3, 1, 'Help Needed to Build the Local Catholic Church', 'Dear Residents of Barangay SP404,\r\n\r\nAs our community continues to grow, it has become evident that we need a larger place of worship to accommodate all of our residents. That is why we are embarking on a fundraising campaign to build our local Roman Catholic Church.\r\n\r\nThis project is a testament to our faith and our commitment to creating a stronger community. But we cannot achieve this goal without your support. Every donation, no matter how small, will help us reach our target and make this dream a reality.\r\n\r\nWe will be holding various fundraising activities in the coming weeks, including a charity run, bake sale, and silent auction. We hope that you will be able to participate and show your support.\r\n\r\nIf you are unable to attend the events, you can still make a difference by making a financial contribution. Donations can be made through bank transfer, cash, or check.\r\n\r\nLet us come together and build a church that will serve as a symbol of our faith and our community\'s strength.\r\n\r\nThank you for your support.\r\n\r\nSincerely,\r\nFundraising Committee, Barangay SP404', '2023-02-08 20:23:46', '2023-02-08 20:23:50');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
INSERT INTO `password_resets` VALUES ('admin@gmail.com', '$2y$10$smeVf/ZgtHJXByem77ml8.Sc1sTGovbrJ8FWcYN2Fo6k6chjH8L9a', '2023-02-10 00:13:25');
INSERT INTO `password_resets` VALUES ('user@gmail.com', '$2y$10$A5C6FWoUXQPidNrrcoJTquOBuZyd6dadQ9wVsZ0GAUFhk55t5hBO.', '2023-02-10 05:01:14');

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for projects
-- ----------------------------
DROP TABLE IF EXISTS `projects`;
CREATE TABLE `projects`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `budget` bigint(20) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of projects
-- ----------------------------
INSERT INTO `projects` VALUES (1, 'Clean Up Drive', 'The Barangay Clean Streets Project aims to improve the cleanliness and overall appearance of our community by removing litter and debris from our streets. This initiative will not only enhance the aesthetic of our neighborhood, but also promote a cleaner and healthier environment for all residents. The project will involve volunteers from the community coming together to pick up trash and properly dispose of it. Join us in making our barangay a better place to live.', '2023-02-04', '2023-02-05', 'Completed', 5000, 2, '2023-02-04 20:27:26', '2023-02-05 20:27:41');
INSERT INTO `projects` VALUES (2, 'Zone 2 Basketball Court Rehabilitation', 'The Zone 2 Basketball Court Rehabilitation Project is aimed at improving the playing conditions and overall safety of our community\'s beloved basketball court. This initiative will involve fixing damaged court surfaces, replacing worn-out equipment, and installing new lights for nighttime play. The upgraded court will not only provide a better playing experience, but also bring the community together for friendly games and events. Join us in bringing new life to this cherished community space.', '2023-02-06', '0000-00-00', 'On Going', 50000, 2, '2023-02-06 20:33:22', '2023-02-08 20:33:36');

-- ----------------------------
-- Table structure for residents
-- ----------------------------
DROP TABLE IF EXISTS `residents`;
CREATE TABLE `residents`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `suffix` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_date` date NOT NULL,
  `b_place` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `citizenship` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `civil_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `has_philhealth` tinyint(1) NOT NULL,
  `occupation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `employment_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `monthly_income` bigint(20) NOT NULL,
  `educational_attainment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mailing_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `household_id` bigint(20) UNSIGNED NOT NULL,
  `relation_to_head` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NULL DEFAULT NULL,
  `contact_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 43 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of residents
-- ----------------------------
INSERT INTO `residents` VALUES (1, 'Murray', 'Emiliano', 'Borer', '', '2019-06-17', 'SP404, Kodego, NCR', 'male', 'Roman Catholic', 'Filipino', 'Filipino', 'Married', 'B', 1, 'Law Clerk', 'Regular', 14300, 'Highschool Graduate', '', 4, 'Son', 2, 'user@gmail.com', '331-272-8021', '2023-02-08 09:55:42', '2023-02-08 09:55:42');
INSERT INTO `residents` VALUES (2, 'Stehr', 'Emmalee', 'Wilderman', '', '1982-04-23', 'SP404, Kodego, NCR', 'female', 'Roman Catholic', 'Filipino', 'Filipino', 'Separated', 'O', 1, 'Freight Agent', 'Regular', 9200, 'College Undergraduate', '', 1, 'Daughter', 2, 'dsenger@example.org', '913-932-8228', '2023-02-08 09:55:42', '2023-02-08 09:55:42');
INSERT INTO `residents` VALUES (3, 'Champlin', 'Devante', 'Kshlerin', '', '1995-07-03', 'SP404, Kodego, NCR', 'male', 'Iglesia Ni Cristo', 'Filipino', 'Filipino', 'Separated', 'A', 1, 'Surveyor', 'Contractual', 1100, 'Highschool Graduate', '', 4, 'Wife', 2, 'blick.aaliyah@example.com', '240-537-4527', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `residents` VALUES (4, 'Wilkinson', 'Albert', 'Keebler', '', '1996-11-10', 'SP404, Kodego, NCR', 'female', 'Roman Catholic', 'Filipino', 'Filipino', 'Separated', 'A', 0, 'Statistical Assistant', 'Unemployed', 27000, 'College Undergraduate', '', 9, 'Daughter', 2, 'sarah27@example.net', '678-566-3676', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `residents` VALUES (5, 'Waelchi', 'Samara', 'Jacobson', '', '2001-12-03', 'SP404, Kodego, NCR', 'female', 'Roman Catholic', 'Filipino', 'Filipino', 'Separated', 'B', 0, 'Floor Finisher', 'Contractual', 19200, 'College Undergraduate', '', 4, 'Head', 2, 'gconsidine@example.org', '+1-435-623-7028', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `residents` VALUES (6, 'Zulauf', 'Vella', 'Romaguera', '', '2013-01-13', 'SP404, Kodego, NCR', 'female', 'Iglesia Ni Cristo', 'Filipino', 'Filipino', 'Widowed', 'O', 1, 'Housekeeping Supervisor', 'Contractual', 28600, 'Highschool Graduate', '', 12, 'Wife', 2, 'gaylord.gertrude@example.com', '1-702-354-6637', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `residents` VALUES (7, 'Volkman', 'Jameson', 'Sawayn', '', '1995-02-11', 'SP404, Kodego, NCR', 'female', 'Roman Catholic', 'Filipino', 'Filipino', 'Married', 'O', 0, 'Social Media Marketing Manager', 'Unemployed', 21100, 'College Graduate', '', 9, 'Son', 2, 'dlangosh@example.com', '+16612954926', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `residents` VALUES (8, 'Ankunding', 'Chauncey', 'Deckow', '', '2005-02-23', 'SP404, Kodego, NCR', 'male', 'Roman Catholic', 'Filipino', 'Filipino', 'Married', 'O', 0, 'Musician', 'Regular', 9800, 'College Graduate', '', 8, 'Wife', 2, 'alessandro65@example.com', '(248) 455-1771', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `residents` VALUES (9, 'Langosh', 'Jaunita', 'Davis', '', '2006-09-27', 'SP404, Kodego, NCR', 'male', 'Roman Catholic', 'Filipino', 'Filipino', 'Married', 'O', 1, 'Personnel Recruiter', 'Contractual', 6100, 'Highschool Graduate', '', 9, 'Head', 2, 'donald.price@example.net', '(321) 288-5461', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `residents` VALUES (10, 'Kling', 'Angelica', 'Graham', '', '1984-09-27', 'SP404, Kodego, NCR', 'female', 'Roman Catholic', 'Filipino', 'Filipino', 'Widowed', 'O', 0, 'Wholesale Buyer', 'Contractual', 13000, 'College Graduate', '', 10, 'Daughter', 2, 'ucasper@example.com', '+1-414-627-0213', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `residents` VALUES (11, 'Nader', 'Nettie', 'Kautzer', '', '2004-12-16', 'SP404, Kodego, NCR', 'male', 'Iglesia Ni Cristo', 'Filipino', 'Filipino', 'Widowed', 'A', 1, 'Legal Support Worker', 'Unemployed', 27200, 'College Graduate', '', 2, 'Head', 2, 'jacquelyn54@example.net', '(716) 844-8198', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `residents` VALUES (12, 'Marvin', 'Kali', 'Pollich', '', '1990-01-10', 'SP404, Kodego, NCR', 'female', 'Roman Catholic', 'Filipino', 'Filipino', 'Single', 'AB', 1, 'Extruding Machine Operator', 'Regular', 13700, 'Elementary Graduate', '', 3, 'Son', 2, 'baumbach.gordon@example.org', '352.263.5626', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `residents` VALUES (13, 'Batz', 'Agustina', 'Nitzsche', '', '1974-07-01', 'SP404, Kodego, NCR', 'female', 'Roman Catholic', 'Filipino', 'Filipino', 'Married', 'AB', 1, 'Production Helper', 'Contractual', 28500, 'Elementary Graduate', '', 2, 'Wife', 2, 'willie06@example.com', '(567) 532-2404', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `residents` VALUES (14, 'Green', 'Destini', 'Parker', '', '2008-05-21', 'SP404, Kodego, NCR', 'male', 'Roman Catholic', 'Filipino', 'Filipino', 'Single', 'O', 1, 'Rail Yard Engineer', 'Unemployed', 20600, 'Elementary Graduate', '', 7, 'Wife', 2, 'michele45@example.net', '1-680-352-6486', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `residents` VALUES (15, 'Denesik', 'Amanda', 'Pacocha', '', '1977-01-28', 'SP404, Kodego, NCR', 'male', 'Roman Catholic', 'Filipino', 'Filipino', 'Separated', 'O', 0, 'Electrical Sales Representative', 'Unemployed', 16900, 'College Graduate', '', 9, 'Son', 2, 'jweimann@example.net', '+1-404-523-1436', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `residents` VALUES (16, 'Haley', 'Nicole', 'Rohan', '', '2019-09-04', 'SP404, Kodego, NCR', 'male', 'Roman Catholic', 'Filipino', 'Filipino', 'Widowed', 'A', 1, 'Respiratory Therapy Technician', 'Contractual', 6700, 'Elementary Graduate', '', 1, 'Head', 2, 'ggoyette@example.com', '714.738.3192', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `residents` VALUES (17, 'Orn', 'Bridie', 'Rohan', '', '1996-07-15', 'SP404, Kodego, NCR', 'male', 'Iglesia Ni Cristo', 'Filipino', 'Filipino', 'Separated', 'O', 0, 'Driver-Sales Worker', 'Unemployed', 26000, 'College Graduate', '', 6, 'Head', 2, 'wilhelm08@example.net', '+1-302-793-3208', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `residents` VALUES (18, 'Jacobs', 'Kurtis', 'Dietrich', '', '2010-04-18', 'SP404, Kodego, NCR', 'female', 'Roman Catholic', 'Filipino', 'Filipino', 'Separated', 'A', 1, 'Sawing Machine Tool Setter', 'Unemployed', 28800, 'Elementary Graduate', '', 9, 'Son', 2, 'oharber@example.org', '336-885-9571', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `residents` VALUES (19, 'Flatley', 'Dane', 'Bogisich', '', '1991-02-26', 'SP404, Kodego, NCR', 'female', 'Roman Catholic', 'Filipino', 'Filipino', 'Single', 'B', 0, 'Tile Setter OR Marble Setter', 'Contractual', 10700, 'College Undergraduate', '', 6, 'Wife', 2, 'delfina05@example.net', '678-249-8410', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `residents` VALUES (20, 'Reilly', 'Avis', 'Padberg', '', '2000-01-17', 'SP404, Kodego, NCR', 'female', 'Roman Catholic', 'Filipino', 'Filipino', 'Widowed', 'B', 0, 'Refractory Materials Repairer', 'Unemployed', 4100, 'College Undergraduate', '', 12, 'Daughter', 2, 'marlon.halvorson@example.com', '+1.740.600.8872', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `residents` VALUES (21, 'Wisoky', 'Jarod', 'Cruickshank', '', '2016-10-17', 'SP404, Kodego, NCR', 'female', 'Roman Catholic', 'Filipino', 'Filipino', 'Separated', 'AB', 1, 'Security Systems Installer OR Fire Alarm Systems Installer', 'Unemployed', 15400, 'College Undergraduate', '', 2, 'Son', 2, 'jessika.green@example.net', '779.960.4933', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `residents` VALUES (22, 'Skiles', 'Elmira', 'Hand', '', '2009-06-07', 'SP404, Kodego, NCR', 'male', 'Roman Catholic', 'Filipino', 'Filipino', 'Single', 'O', 1, 'Marine Oiler', 'Contractual', 24500, 'Highschool Graduate', '', 7, 'Son', 2, 'asa76@example.net', '757-286-7211', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `residents` VALUES (23, 'Rogahn', 'Keyon', 'Sanford', '', '2004-01-13', 'SP404, Kodego, NCR', 'female', 'Roman Catholic', 'Filipino', 'Filipino', 'Separated', 'A', 1, 'Motorcycle Mechanic', 'Contractual', 9600, 'College Undergraduate', '', 11, 'Head', 2, 'official@gmail.com', '+1-801-529-9728', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `residents` VALUES (24, 'Thiel', 'Sofia', 'Huel', '', '2013-12-31', 'SP404, Kodego, NCR', 'female', 'Roman Catholic', 'Filipino', 'Filipino', 'Separated', 'B', 1, 'Nursery Manager', 'Unemployed', 6000, 'Highschool Graduate', '', 5, 'Head', 2, 'mcollier@example.com', '+12066319224', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `residents` VALUES (25, 'Boyer', 'Benny', 'Feest', '', '1988-10-05', 'SP404, Kodego, NCR', 'male', 'Roman Catholic', 'Filipino', 'Filipino', 'Separated', 'O', 0, 'Environmental Scientist', 'Contractual', 19600, 'Elementary Graduate', '', 8, 'Daughter', 2, 'admin@gmail.com', '1-914-837-1996', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `residents` VALUES (26, 'Cole', 'Ivory', 'Schowalter', '', '1995-04-16', 'SP404, Kodego, NCR', 'female', 'Roman Catholic', 'Filipino', 'Filipino', 'Separated', 'O', 1, 'Jewelry Model OR Mold Makers', 'Regular', 27700, 'Elementary Graduate', '', 6, 'Son', 2, 'walker47@example.com', '+19514702047', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `residents` VALUES (27, 'Reinger', 'Granville', 'Smith', '', '1989-11-05', 'SP404, Kodego, NCR', 'male', 'Roman Catholic', 'Filipino', 'Filipino', 'Single', 'B', 1, 'Office and Administrative Support Worker', 'Unemployed', 11000, 'Highschool Graduate', '', 1, 'Wife', 2, 'eraynor@example.net', '+1-573-527-9786', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `residents` VALUES (28, 'Hoppe', 'Zoie', 'Schaden', '', '1981-09-25', 'SP404, Kodego, NCR', 'female', 'Roman Catholic', 'Filipino', 'Filipino', 'Separated', 'O', 0, 'Product Safety Engineer', 'Unemployed', 19100, 'Elementary Graduate', '', 3, 'Son', 2, 'oliver46@example.org', '347-378-1601', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `residents` VALUES (29, 'Davis', 'Vinnie', 'Weissnat', '', '2003-07-16', 'SP404, Kodego, NCR', 'female', 'Iglesia Ni Cristo', 'Filipino', 'Filipino', 'Single', 'A', 1, 'Diagnostic Medical Sonographer', 'Contractual', 6000, 'Elementary Graduate', '', 10, 'Head', 2, 'hintz.baron@example.com', '629-758-9581', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `residents` VALUES (30, 'Blanda', 'Leola', 'Gulgowski', '', '2019-11-14', 'SP404, Kodego, NCR', 'male', 'Roman Catholic', 'Filipino', 'Filipino', 'Separated', 'O', 0, 'Weapons Specialists', 'Regular', 6400, 'Highschool Graduate', '', 3, 'Head', 2, 'ohamill@example.net', '234-367-1592', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `residents` VALUES (31, 'Torphy', 'Maximillia', 'Sauer', '', '1977-03-02', 'SP404, Kodego, NCR', 'male', 'Roman Catholic', 'Filipino', 'Filipino', 'Widowed', 'O', 1, 'Agricultural Technician', 'Contractual', 16700, 'Highschool Graduate', '', 6, 'Son', 2, 'marcella.gusikowski@example.com', '240-928-1446', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `residents` VALUES (32, 'Hettinger', 'Dario', 'Heidenreich', '', '1994-07-27', 'SP404, Kodego, NCR', 'male', 'Iglesia Ni Cristo', 'Filipino', 'Filipino', 'Single', 'A', 1, 'Postal Service Mail Carrier', 'Regular', 26900, 'College Undergraduate', '', 5, 'Daughter', 2, 'maryam86@example.org', '1-479-988-3937', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `residents` VALUES (33, 'Feest', 'Noemy', 'Grady', '', '2013-06-07', 'SP404, Kodego, NCR', 'male', 'Roman Catholic', 'Filipino', 'Filipino', 'Widowed', 'AB', 0, 'Public Relations Manager', 'Regular', 6900, 'Elementary Graduate', '', 11, 'Son', 2, 'lauren61@example.net', '743.874.2560', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `residents` VALUES (34, 'Stiedemann', 'Vito', 'Miller', '', '2018-12-09', 'SP404, Kodego, NCR', 'male', 'Iglesia Ni Cristo', 'Filipino', 'Filipino', 'Single', 'B', 1, 'Rail Car Repairer', 'Regular', 15000, 'Elementary Graduate', '', 4, 'Daughter', 2, 'reichel.roslyn@example.org', '534.509.0335', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `residents` VALUES (35, 'Bradtke', 'Darby', 'Larson', '', '1994-09-05', 'SP404, Kodego, NCR', 'male', 'Roman Catholic', 'Filipino', 'Filipino', 'Separated', 'AB', 1, 'Pressing Machine Operator', 'Unemployed', 24800, 'College Undergraduate', '', 10, 'Daughter', 2, 'elsie86@example.com', '646-810-6076', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `residents` VALUES (36, 'Bode', 'Aurelia', 'Jacobson', '', '2004-11-03', 'SP404, Kodego, NCR', 'female', 'Roman Catholic', 'Filipino', 'Filipino', 'Widowed', 'O', 0, 'Sales Manager', 'Contractual', 17700, 'Highschool Graduate', '', 12, 'Head', 2, 'bednar.branson@example.net', '+1 (631) 259-4030', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `residents` VALUES (37, 'Wunsch', 'Hollie', 'Walker', '', '1992-11-08', 'SP404, Kodego, NCR', 'female', 'Roman Catholic', 'Filipino', 'Filipino', 'Separated', 'AB', 0, 'Electro-Mechanical Technician', 'Regular', 22800, 'Elementary Graduate', '', 1, 'Wife', 2, 'devan06@example.org', '+1 (508) 607-5490', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `residents` VALUES (38, 'Kunde', 'Blanche', 'Hauck', '', '1993-12-03', 'SP404, Kodego, NCR', 'female', 'Iglesia Ni Cristo', 'Filipino', 'Filipino', 'Separated', 'AB', 0, 'Photographer', 'Contractual', 10000, 'Elementary Graduate', '', 8, 'Head', 2, 'hackett.easton@example.net', '484.943.4966', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `residents` VALUES (39, 'Kutch', 'Eriberto', 'Lueilwitz', '', '1978-01-22', 'SP404, Kodego, NCR', 'female', 'Iglesia Ni Cristo', 'Filipino', 'Filipino', 'Widowed', 'B', 1, 'Logistician', 'Unemployed', 21500, 'Elementary Graduate', '', 7, 'Head', 2, 'baumbach.lenore@example.com', '+1 (848) 663-8338', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `residents` VALUES (40, 'Leffler', 'Guadalupe', 'Jacobi', '', '2019-04-10', 'SP404, Kodego, NCR', 'male', 'Iglesia Ni Cristo', 'Filipino', 'Filipino', 'Single', 'B', 1, 'Pantograph Engraver', 'Unemployed', 17800, 'Highschool Graduate', '', 5, 'Daughter', 2, 'jacquelyn.rodriguez@example.org', '1-270-477-3400', '2023-02-08 09:55:43', '2023-02-08 09:55:43');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_by` bigint(20) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'Admin User', 'admin@gmail.com', NULL, '$2y$10$XQGReG5ut3I4O1ztvQXDVOggDt2RqI1av37TBm3wn6kWLjzMSj2n2', 2, NULL, NULL, '2023-02-08 09:55:42', '2023-02-08 09:55:42');
INSERT INTO `user` VALUES (2, 'Official', 'Official@gmail.com', NULL, '$2y$10$NMmA9AWOT3ggtYfQ6OlXXOBTSy8lstAmzzQdxXmR5q0vUiw/6AJWK', 1, NULL, NULL, '2023-02-08 09:55:42', '2023-02-11 01:38:51');
INSERT INTO `user` VALUES (3, 'User', 'user@gmail.com', NULL, '$2y$10$xj.cklkuMzlbpMiqIzgo9OkEV93GXEfk.VPgUyy8httS62/aYsfJq', 0, NULL, NULL, '2023-02-08 09:55:42', '2023-02-11 01:21:37');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_by` bigint(20) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Admin User', 'admin@gmail.com', NULL, '$2y$10$XQGReG5ut3I4O1ztvQXDVOggDt2RqI1av37TBm3wn6kWLjzMSj2n2', 2, NULL, NULL, '2023-02-08 09:55:42', '2023-02-08 09:55:42');
INSERT INTO `users` VALUES (2, 'Official', 'Official@gmail.com', NULL, '$2y$10$0oW7nlBxQ2SBY5wfRU7ZpuIlDo2oAONsNG6g48ADWSZNANMTUcM.a', 1, NULL, NULL, '2023-02-08 09:55:42', '2023-02-15 09:37:10');
INSERT INTO `users` VALUES (3, 'User', 'user@gmail.com', NULL, '$2y$10$xj.cklkuMzlbpMiqIzgo9OkEV93GXEfk.VPgUyy8httS62/aYsfJq', 0, NULL, NULL, '2023-02-08 09:55:42', '2023-02-11 01:21:37');
INSERT INTO `users` VALUES (18, 'trial', 'sfadfa@afdfa.com', NULL, '$2y$10$oVCniKR058fQ6Gv0y4MA7O9Avs1V9PuFnvnrKkObM41FI6X/cX/Te', 2, NULL, NULL, '2023-02-15 23:53:19', '2023-02-15 23:55:50');
INSERT INTO `users` VALUES (19, 'Julius Marc Agustin', 'juliusmarcagustin@gmail.com', NULL, '$2y$10$FPrPt9JW1W40AXoVl5R6/e.No3myClaod3xjMqOyQ7Rf0fJW.bHAe', 2, NULL, NULL, '2023-02-17 08:22:21', '2023-02-17 08:22:42');

-- ----------------------------
-- Table structure for zones
-- ----------------------------
DROP TABLE IF EXISTS `zones`;
CREATE TABLE `zones`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `zone_no` int(11) NOT NULL,
  `barangay_official_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of zones
-- ----------------------------
INSERT INTO `zones` VALUES (1, 7, 8, '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `zones` VALUES (2, 2, 7, '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `zones` VALUES (3, 7, 2, '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `zones` VALUES (4, 7, 6, '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `zones` VALUES (5, 3, 5, '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `zones` VALUES (6, 2, 4, '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `zones` VALUES (7, 3, 3, '2023-02-08 09:55:43', '2023-02-08 09:55:43');

SET FOREIGN_KEY_CHECKS = 1;
