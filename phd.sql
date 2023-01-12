-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2023 at 07:52 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phd`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_intro` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `name`, `title`, `short_intro`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Sadia Shad', 'Web Developer', 'Hi, my name is Adriano Smith and I began using WordPress when it first began. I’ve spent most of my waking hours for the last ten years designing, programming and operating WordPress sites.Hi, my name is Adriano Smith and I began using WordPress when it first began. I’ve spent most of my waking hours for the last ten years designing, programming and operating WordPress sites.', 'Hi, my name is Adriano Smith and I began using WordPress when it first began. I’ve spent most of my waking hours for the last ten years designing, programming and operating WordPress sites.\r\n\r\nOne of my specialties is taking an idea from scratch and creating a full-fledged platform. I go beyond to produce sites with a unique, outstanding, contemporary look-and-feel. With extensive knowledge of web mechanics, I’m able to optimize complex integrations to require little-to-no maintenance while running on their own for years.\r\n\r\nOne of my specialties is taking an idea from scratch and creating a full-fledged platform. I go beyond to produce sites with a unique, outstanding, contemporary look-and-feel. With extensive knowledge of web mechanics, I’m able to optimize complex integrations to require little-to-no maintenance while running on their own for years.\r\n\r\nOne of my specialties is taking an idea from scratch and creating a full-fledged platform. I go beyond to produce sites with a unique, outstanding, contemporary look-and-feel. With extensive knowledge of web mechanics, I’m able to optimize complex integrations to require little-to-no maintenance while running on their own for years.', 'backEnd/upload/profile-image/2070024920.jpg', NULL, '2023-01-11 02:36:57');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_title`, `slug`, `created_at`, `updated_at`) VALUES
(20, 'Research', 'research', '2023-01-08 08:59:56', '2023-01-08 08:59:56'),
(21, 'Conferences', 'conferences', '2023-01-08 09:00:00', '2023-01-08 09:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Durjay Ghosh', 'admin@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2023-01-07 11:47:05', '2023-01-07 11:47:05'),
(9, 'Hi, I’m Durjay', 'admin@gmail.com', 'The description must be at least 100 characters.The description must be at least 100 characters.\r\n\r\nThe description must be at least 100 characters.The description must be at least 100 characters.\r\n\r\nThe description must be at least 100 characters.The description must be at least 100 characters.', '2023-01-07 12:28:47', '2023-01-07 12:28:47'),
(13, 'Durjay Ghosh', 'admin@gmail.com', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', '2023-01-11 02:14:25', '2023-01-11 02:14:25');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'this is demo post', 'this is demo post', '2023-01-09 17:50:29', '2023-01-09 17:50:29');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_01_02_154633_create_sessions_table', 1),
(7, '2023_01_03_154332_create_categories_table', 2),
(9, '2023_01_05_070359_create_posts_table', 3),
(11, '2023_01_05_143447_create_abouts_table', 4),
(13, '2023_01_05_183352_create_socials_table', 5),
(15, '2023_01_06_060610_create_news_table', 6),
(16, '2023_01_07_141543_create_photos_table', 7),
(17, '2023_01_07_171604_create_contacts_table', 8),
(18, '2023_01_07_194828_create_settings_table', 9),
(19, '2023_01_09_135357_create_teachings_table', 10),
(20, '2023_01_09_171849_create_courses_table', 11),
(21, '2023_01_09_171922_create_philosophies_table', 11),
(22, '2023_01_09_172005_create_professionals_table', 11),
(23, '2023_01_10_054700_create_profiles_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `blog_title`, `slug`, `description`, `image`, `created_at`, `updated_at`) VALUES
(8, 'the freedom revolution, awakened ancestral roots of a new generation', 'the-freedom-revolution-awakened-ancestral-roots-of-a-new-generation', '<p>&nbsp;In many ways, Gen Z Iranians are a combination of the very best and the most important learning experiences of their previous generations. They are marked by their perseverance and their refusal to use old modes of protective denial in order to navigate the impact of the paradoxes of life in, as their parents and grandparents did before them. They will continue to form a collective self through their agentic, adversarial approach to effecting change. For all these reasons, “The Women of Iran” are the right choice for Time Magazine’s 2022 Heroes of The Year&nbsp; In many ways, Gen Z Iranians are a combination of the very best and the most important learning experiences of their previous generations. They are marked by their perseverance and their refusal to use old modes of protective denial in order to navigate the impact of the paradoxes of life in, as their parents and grandparents did before them. They will continue to form a collective self through their agentic, adversarial approach to effecting change. For all these reasons, “The Women of Iran” are the right choice for Time Magazine’s 2022 Heroes of The Year&nbsp;<br></p>', NULL, '2023-01-08 13:29:18', '2023-01-08 13:29:18'),
(9, 'facial difference, social disability (or, why i didn’t mind masking)', 'facial-difference-social-disability-or-why-i-didnt-mind-masking', '<p style=\"margin-right: 0px; margin-left: 0px;\"><font color=\"#333333\" face=\"Open Sans, Helvetica Neue, Arial, sans-serif\"><span style=\"font-size: 16px;\">Finalizing my divorce, searching for a new place to live, re-evaluating the possibility of a family—I was stressed out in November of 2009. Then my face stopped working.</span></font><span style=\"color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Finalizing my divorce, searching for a new place to live, re-evaluating the possibility of a family—I was stressed out in November of 2009. Then my face stopped working.</span></p><p style=\"margin-right: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">The diagnosis? Bell’s Palsy, or damage to the 7<span style=\"font-size: 12px; line-height: 0; position: relative; vertical-align: baseline; top: -0.5em;\">th</span>&nbsp;cranial nerve (similar to what&nbsp;<a href=\"https://www.cnn.com/2022/06/14/entertainment/justin-bieber-paralysis-update/index.html\" style=\"color: rgb(211, 0, 98); text-decoration-line: underline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Justin Bieber is experiencing</a>&nbsp;with Ramsay Hunt Syndrome). Though it’s technically “reversible,” 10-20% of people develop a movement disorder called synkinesis. Effectively, as the nerve heals, it regrows to too many places; more “frozen” than paralyzed, those of us in this unlucky group end up mis-wired. It affects our facial expressions and movement, and it can impact tear ducts, salivary glands, the sense of taste, and the ability to filter light and noise. For me, it also meant adjusting to an array of very different social reactions to my face and enduring years of frustratingly inappropriate medical treatment. Like any good social scientist, and as I sought ongoing treatment and support, I was ready to do some research.</p><p style=\"margin-right: 0px; margin-left: 0px;\"><font color=\"#333333\" face=\"Open Sans, Helvetica Neue, Arial, sans-serif\"><span style=\"font-size: 16px;\"><br></span></font></p><p style=\"margin-right: 0px; margin-left: 0px;\"><font color=\"#333333\" face=\"Open Sans, Helvetica Neue, Arial, sans-serif\"><span style=\"font-size: 16px;\">The diagnosis? Bell’s Palsy, or damage to the 7th cranial nerve (similar to what Justin Bieber is experiencing with Ramsay Hunt Syndrome). Though it’s technically “reversible,” 10-20% of people develop a movement disorder called synkinesis. Effectively, as the nerve heals, it regrows to too many places; more “frozen” than paralyzed, those of us in this unlucky group end up mis-wired. It affects our facial expressions and movement, and it can impact tear ducts, salivary glands, the sense of taste, and the ability to filter light and noise. For me, it also meant adjusting to an array of very different social reactions to my face and enduring years of frustratingly inappropriate medical treatment. Like any good social scientist, and as I sought ongoing treatment and support, I was ready to do some research.</span></font></p>', NULL, '2023-01-08 13:30:09', '2023-01-08 13:30:09'),
(10, 'Thanksgiving is almost upon our U.S. readers', 'thanksgiving-is-almost-upon-our-us-readers', '<p>Thanksgiving is almost upon our U.S. readers, and whether it’s the long drives, visiting a childhood home, couch dozing after a winter walk, or getting plain old turkey-tuckered, we’re already dreaming of the glorious cat-naps that so often accompany the holiday.Thanksgiving is almost upon our U.S. readers, and whether it’s the long drives, visiting a childhood home, couch dozing after a winter walk, or getting plain old turkey-tuckered, we’re already dreaming of the glorious cat-naps that so often accompany the holiday.</p><p>In our Winter 2011 issue, Simon J. Williams invited us to “sleep on this: sleep is a highly social endeavor, posing a puzzle and a prism through which to view life in the wired era” in his article, “Our Hard Days’ Nights.” He wrote, “How we sleep, when we sleep, where we sleep, with whom we sleep, and the meanings we accord our sleep are all social, cultural, and historical matters that demand (and repay) our attention. …[Sleep] constitutes a prime example of how we might profitably link the private realm of “personal troubles” to broader public issues of “social structure,” particularly at a time when the notion of a “well-slept” society appears to be an increasingly distant era.”</p><p><br></p><p>In our Winter 2011 issue, Simon J. Williams invited us to “sleep on this: sleep is a highly social endeavor, posing a puzzle and a prism through which to view life in the wired era” in his article, “Our Hard Days’ Nights.” He wrote, “How we sleep, when we sleep, where we sleep, with whom we sleep, and the meanings we accord our sleep are all social, cultural, and historical matters that demand (and repay) our attention. …[Sleep] constitutes a prime example of how we might profitably link the private realm of “personal troubles” to broader public issues of “social structure,” particularly at a time when the notion of a “well-slept” society appears to be an increasingly distant era.”</p>', NULL, '2023-01-08 13:32:46', '2023-01-08 13:32:46');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `philosophies`
--

CREATE TABLE `philosophies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `philosophies`
--

INSERT INTO `philosophies` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'this is demo post', 'this is a demo post', '2023-01-09 17:50:31', '2023-01-11 01:16:18');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Cupidatat nulla volu', 'backEnd/upload/blog-image/1164031938.jpg', '2023-01-07 10:07:43', '2023-01-07 10:07:43'),
(2, 'Maxime laborum Cill', 'backEnd/upload/blog-image/1606655477.jpg', '2023-01-07 10:07:55', '2023-01-07 10:07:55'),
(3, 'Nisi vel ad itaque q', 'backEnd/upload/blog-image/367136999.jpg', '2023-01-07 10:08:04', '2023-01-07 10:08:04');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_title`, `slug`, `category_id`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry', 13, 'backEnd/upload/post-image/2140454322.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br></p>', '2023-01-05 04:26:43', '2023-01-07 01:45:58'),
(2, 'Laborum reiciendis mdfsfdsf s', 'laborum-reiciendis-mdfsfdsf-s', 10, 'backEnd/upload/post-image/174342235.png', 'Nihil sunt non enim .fg sdfs dd', '2023-01-05 06:55:42', '2023-01-05 08:01:07'),
(4, 'Aperiam rerum dolore', 'aperiam-rerum-dolore', 13, 'backEnd/upload/post-image/739685578.jpg', 'Accusamus hic offici.&nbsp;', '2023-01-06 14:17:40', '2023-01-07 01:46:04'),
(13, 'Lima Bean Spinach Dressing Recipe', 'lima-bean-spinach-dressing-recipe', 19, NULL, '<p><span style=\"color: rgb(51, 51, 51); font-family: Montserrat, Arial, Helvetica, sans-serif; font-size: 16px;\">Need a healthy yet tasty dressing for your salad? Try this easy-to-make Lima Bean Spinach Dressing that can be prepared with just a handful of ingredients. Lima Beans give a creamy texture to the dressing, while other ingredients like spinach, onion, garlic, olive oil, lemon juice, mayo, yeast and salt add a variety of flavours to the dressing. You can also use this dressing as a dip with fried, chips, nachos etc. This healthy dressing tastes amazing with carrot and cucumber sticks. You can enjoy it as an evening snack and even serve it at parties and get-togethers. Be it kids or adults, everyone will love this recipe for sure. Do try this recipe, rate it and let us know how it turned out to be by leaving a comment in the section below. Happy Cooking!</span></p><div id=\"tab_search-96617504\" class=\"tab_search clearfix\" style=\"border-bottom: 1px solid rgb(228, 228, 228); height: 36px; color: rgb(153, 153, 153); padding-top: 25px; font-family: Montserrat, Arial, Helvetica, sans-serif; font-size: 13px;\"><span class=\"spanul\" style=\"float: left;\"><h2 style=\"display: block; margin: 0px; padding: 0px; font-weight: 700; line-height: 28px; font-size: 20px;\"><a id=\"tabrecipe1\" class=\"recipetabs\" style=\"text-decoration: none; color: rgb(255, 57, 74) !important; cursor: pointer;\">Ingredients of Lima Bean Spinach Dressing</a></h2><h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 28px; font-size: 20px;\"><div id=\"tab_search-96617504\" class=\"tab_search clearfix\" style=\"border-bottom: 1px solid rgb(228, 228, 228); height: 36px; color: rgb(153, 153, 153); padding-top: 25px; font-size: 13px; font-weight: 400;\"><span class=\"spanul\" style=\"float: left;\"></span><div class=\"servingselect\" style=\"float: left; position: relative; width: 110px; color: rgb(40, 40, 40); margin-left: 20px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 15px; line-height: normal;\"><select data-msid=\"96617504\" name=\"\" data-plugin=\"convert\" style=\"width: 103.391px; border-width: 0px; border-style: none; border-color: initial; color: rgb(85, 85, 85); font: 15px Montserrat, Arial, Helvetica, sans-serif; margin-top: 10px; margin-bottom: 10px; appearance: none; position: relative; z-index: 5; cursor: pointer; outline: 0px; letter-spacing: 0.5px;\"><option value=\"1\">1 Serving</option><option value=\"2\">2 Servings</option><option value=\"3\">3 Servings</option><option value=\"4\">4 Servings</option><option value=\"5\">5 Servings</option><option value=\"6\">6 Servings</option><option value=\"7\">7 Servings</option><option value=\"8\">8 Servings</option><option value=\"9\">9 Servings</option><option value=\"10\">10 Servings</option><option value=\"11\">11 Servings</option><option value=\"12\">12 Servings</option><option value=\"13\">13 Servings</option><option value=\"14\">14 Servings</option><option value=\"15\">15 Servings</option><option value=\"16\">16 Servings</option><option value=\"17\">17 Servings</option><option value=\"18\">18 Servings</option><option value=\"19\">19 Servings</option><option value=\"20\">20 Servings</option></select></div></div><div class=\"recipetabsdata ingredients_lilsting clearfix\" id=\"ingredata\" style=\"margin: 15px 0px; font-size: 15px; color: rgb(51, 51, 51); line-height: 20px; font-weight: 400;\"><ul data-convert=\"mainingriedient\" style=\"margin-right: 0px; margin-left: 0px; list-style: none; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; float: left; width: 340px;\"><li class=\"clearfix\" quantity=\"2\" unit=\"cup\" displayname=\"lima beans\" suffix=\"\" style=\"margin: 0px 0px 15px; list-style: none; padding: 0px; line-height: 1.2em; display: inline-block; width: 340px; overflow-wrap: break-word;\"><label class=\"clearfix\" for=\"1\" style=\"display: block; margin-left: 15px;\">2 cup lima beans</label></li><li class=\"clearfix\" quantity=\"1\" unit=\"Numbers\" displayname=\"onion\" suffix=\"\" style=\"margin: 0px 0px 15px; list-style: none; padding: 0px; line-height: 1.2em; display: inline-block; width: 340px; overflow-wrap: break-word;\"><label class=\"clearfix\" for=\"3\" style=\"display: block; margin-left: 15px;\">1 onion</label></li><li class=\"clearfix\" quantity=\"2\" unit=\"tablespoon\" displayname=\"veg mayonnaise\" suffix=\"\" style=\"margin: 0px 0px 15px; list-style: none; padding: 0px; line-height: 1.2em; display: inline-block; width: 340px; overflow-wrap: break-word;\"><label class=\"clearfix\" for=\"5\" style=\"display: block; margin-left: 15px;\">2 tablespoon veg mayonnaise</label></li><li class=\"clearfix\" quantity=\"2\" unit=\"tablespoon\" displayname=\"virgin olive oil\" suffix=\"\" style=\"margin: 0px 0px 15px; list-style: none; padding: 0px; line-height: 1.2em; display: inline-block; width: 340px; overflow-wrap: break-word;\"><label class=\"clearfix\" for=\"7\" style=\"display: block; margin-left: 15px;\">2 tablespoon virgin olive oil</label></li><li class=\"clearfix\" quantity=\"0\" unit=\"As required\" displayname=\"salt\" suffix=\"\" style=\"margin: 0px 0px 15px; list-style: none; padding: 0px; line-height: 1.2em; display: inline-block; width: 340px; overflow-wrap: break-word;\"><label class=\"clearfix\" for=\"9\" style=\"display: block; margin-left: 15px;\">salt as required</label></li></ul></div></h2></span></div><div class=\"recipetabsdata ingredients_lilsting clearfix\" id=\"ingredata\" style=\"margin: 15px 0px; font-size: 15px; color: rgb(51, 51, 51); line-height: 20px; font-family: Montserrat, Arial, Helvetica, sans-serif;\"><div><br></div><ul data-convert=\"mainingriedient\" style=\"margin-right: 0px; margin-left: 0px; list-style: none; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; float: left; width: 340px;\"><li class=\"clearfix\" quantity=\"0\" unit=\"As required\" displayname=\"salt\" suffix=\"\" style=\"margin: 0px 0px 15px; list-style: none; padding: 0px; line-height: 1.2em; display: inline-block; width: 340px; overflow-wrap: break-word;\"><label class=\"clearfix\" for=\"9\" style=\"display: block; margin-left: 15px;\"><br></label></li><li class=\"clearfix\" quantity=\"0\" unit=\"As required\" displayname=\"salt\" suffix=\"\" style=\"margin: 0px 0px 15px; list-style: none; padding: 0px; line-height: 1.2em; display: inline-block; width: 340px; overflow-wrap: break-word;\"><label class=\"clearfix\" for=\"9\" style=\"display: block; margin-left: 15px;\"><br></label></li></ul></div><h3 data-msid=\"96617504\" class=\"methodheading\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; font-weight: 600; line-height: 38px; height: 38px; background-color: rgb(245, 245, 245); border: 1px solid rgb(234, 234, 234); text-align: center; color: rgb(0, 0, 0); font-size: 18px; font-family: Montserrat, Arial, Helvetica, sans-serif;\">How to make Lima Bean Spinach Dressing</h3><div class=\"steps_listings clearfix\" style=\"padding-top: 18px; color: rgb(51, 51, 51); font-family: Montserrat, Arial, Helvetica, sans-serif; font-size: 13px;\"><ul style=\"margin-right: 0px; margin-left: 0px; list-style: none; padding-top: 0px; padding-right: 0px; padding-bottom: 0px;\"><li style=\"margin: 0px 0px 18px; list-style: none; padding: 0px; line-height: 1.2em; display: flex; flex-direction: column-reverse; width: 680px; clear: both; overflow: hidden;\"><span class=\"story_right\" style=\"float: left; width: 680px; font-size: 16px; line-height: 24px; margin-bottom: 15px;\"><h4 class=\"stephead\" style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 1.2em; font-size: 16px;\">Step 1 Boil the lima beans</h4><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\">Wash the lima beans well and add them to a pot of water. Boil until fully cooked. You can also pressure cook the beans until soft.</p></span></li><li style=\"margin: 0px 0px 18px; list-style: none; padding: 0px; line-height: 1.2em; display: flex; flex-direction: column-reverse; width: 680px; clear: both; overflow: hidden;\"><span class=\"story_right\" style=\"float: left; width: 680px; font-size: 16px; line-height: 24px; margin-bottom: 15px;\"><h5 class=\"stephead\" style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 1.2em;\">Step 2 Blend the ingredients</h5><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\">Add the boiled lima beans, spinach leaves, chopped onion, garlic cloves, mayo, lemon juice, olive oil, nutritional yeast and salt as per taste to a food processor. Blend until all the ingredients are combined.</p></span></li><li style=\"margin: 0px 0px 18px; list-style: none; padding: 0px; line-height: 1.2em; display: flex; flex-direction: column-reverse; width: 680px; clear: both; overflow: hidden;\"><span class=\"story_right\" style=\"float: left; width: 680px; font-size: 16px; line-height: 24px; margin-bottom: 15px;\"><h6 class=\"stephead\" style=\"line-height: 1.2em; font-size: 16px; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px;\">Step 3 Dip is ready</h6><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\">Once the ingredients turn into a smooth and creamy mixture. Take it out in a bowl. Your dip is ready.</p></span></li><li style=\"margin: 0px 0px 18px; list-style: none; padding: 0px; line-height: 1.2em; display: flex; flex-direction: column-reverse; width: 680px; clear: both; overflow: hidden;\"><span class=\"story_right\" style=\"float: left; width: 680px; font-size: 16px; line-height: 24px; margin-bottom: 15px;\"><h6 class=\"stephead\" style=\"line-height: 1.2em; font-size: 16px; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px;\">Step 4 Ready to be served</h6><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\">Lima Bean Spinach Dressing is now ready to be served. Pair up with chips, nachos, fries etc and serve.</p></span></li></ul></div>', '2023-01-08 09:03:30', '2023-01-08 09:03:30'),
(16, 'Chicken Sausage Sandwich Recipe', 'chicken-sausage-sandwich-recipe', 20, NULL, '<p><span style=\"color: rgb(51, 51, 51); font-family: Montserrat, Arial, Helvetica, sans-serif; font-size: 16px;\">With just a handful of ingredients, you can make a scrumptious sandwich recipe that is filling and tasty at the same time. Chicken Sausage Sandwich is prepared using baguette, mustard sauce, onion, bell pepper, sausages and olive oil. Baguette is used to make this sandwich, however, you can use regular bread slices if you can\'t find a baguette. You can pack these sandwiches for road trips or picnics and even tiffin. Be it kids or adults, everyone will love it for sure. To make the sandwich richer and more flavourful, you can add a cheese slice to it. Adding a slice of lettuce to the sandwich will add a fresh taste to the snack. Within 10-15 minutes, you can make such a delicious snack that will definitely become one of your favourites. Do try this recipe, rate it and let us know how it turned out to be by leaving a comment in the section below. Happy Cooking!</span><br></p><p><br></p><p>How to make Chicken Sausage Sandwich</p><p>Step 1 Cook the sausages</p><p>Preheat the grill to medium. On the grill, cook the sausage by turning it occasionally until cooked through. It will take about 10 to 12 minutes. Remove from heat and place on a plate.</p><p><br></p><p>Step 2 Toast the Baguette</p><p>If desired, toss the Baguette slices on the grill for a few minutes to toast them.</p><p><br></p><p>Step 3 Saute the onions and bell peppers</p><p>Heat the olive oil in a skillet over very low heat. Add thinly sliced onions and bell peppers and cook slowly for about 15 minutes until the onions are tender and brown.</p><p><br></p><p>Step 4 Make the sandwich</p><p>Split the sausage in half (lengthwise), so that it forms two thinner pieces of equal length. Place the sausages on one slice of bread. On the other slice, spread mustard sauce. Top the sausage with sauteed bell peppers and onions. Place one bread slice on another to close the sandwich.</p><p><br></p><p>Step 5 Ready to be served</p><p>Your Chicken Sausage Sandwich is now ready to be served. Enjoy!</p>', '2023-01-08 13:18:25', '2023-01-08 13:18:25'),
(17, 'This Conference Post', 'this-conference-post', 21, NULL, '<p dir=\"ltr\" style=\"line-height:1.38;margin-left: -0.75pt;margin-right: -1.5pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline;\"><font color=\"#999999\" face=\"Roboto Condensed, sans-serif\"><span style=\"font-size: 12px; white-space: pre-wrap;\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</span></font></span><span style=\"background-color: transparent; color: rgb(153, 153, 153); font-family: &quot;Roboto Condensed&quot;, sans-serif; font-size: 12px; white-space: pre-wrap;\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</span></p><p dir=\"ltr\" style=\"line-height:1.38;margin-left: -0.75pt;margin-right: -1.5pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"color: rgb(102, 102, 102); font-family: &quot;Source Code Pro&quot;, monospace; font-size: 12px; white-space: pre-wrap;\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</span></p><p dir=\"ltr\" style=\"line-height:1.38;margin-left: -0.75pt;margin-right: -1.5pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:9pt;font-family:\'Roboto Condensed\',sans-serif;color:#999999;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><br></span></p><p dir=\"ltr\" style=\"line-height:1.38;margin-left: -0.75pt;margin-right: -1.5pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:9pt;font-family:\'Roboto Condensed\',sans-serif;color:#999999;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><br></span></p><p dir=\"ltr\" style=\"line-height:1.38;margin-left: -0.75pt;margin-right: -1.5pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:9pt;font-family:\'Roboto Condensed\',sans-serif;color:#999999;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><br></span></p><p dir=\"ltr\" style=\"line-height:1.38;margin-left: -0.75pt;margin-right: -1.5pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:9pt;font-family:\'Roboto Condensed\',sans-serif;color:#999999;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><br></span></p><p dir=\"ltr\" style=\"line-height:1.38;margin-left: -0.75pt;margin-right: -1.5pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:9pt;font-family:\'Roboto Condensed\',sans-serif;color:#999999;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><br></span></p><p dir=\"ltr\" style=\"line-height:1.38;margin-left: -0.75pt;margin-right: -1.5pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:9pt;font-family:\'Roboto Condensed\',sans-serif;color:#999999;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><br></span></p><p dir=\"ltr\" style=\"line-height:1.38;margin-left: -0.75pt;margin-right: -1.5pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:9pt;font-family:\'Roboto Condensed\',sans-serif;color:#999999;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><br></span></p><p dir=\"ltr\" style=\"line-height:1.38;margin-left: -0.75pt;margin-right: -1.5pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:9pt;font-family:\'Roboto Condensed\',sans-serif;color:#999999;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><br></span></p><p dir=\"ltr\" style=\"line-height:1.38;margin-left: -0.75pt;margin-right: -1.5pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:9pt;font-family:\'Roboto Condensed\',sans-serif;color:#999999;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">123 YOUR STREET</span></p><p dir=\"ltr\" style=\"line-height:1.38;margin-left: -0.75pt;margin-right: -1.5pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:9pt;font-family:\'Roboto Condensed\',sans-serif;color:#999999;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">YOUR CITY, ST 12345</span></p><p dir=\"ltr\" style=\"line-height:1.38;margin-left: -0.75pt;margin-right: -1.5pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:9pt;font-family:\'Roboto Condensed\',sans-serif;color:#e91d63;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">(123) 456-7890</span></p><p dir=\"ltr\" style=\"line-height:1.38;margin-left: -0.75pt;margin-right: -1.5pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:9pt;font-family:\'Roboto Condensed\',sans-serif;color:#e91d63;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">NO_REPLY@EXAMPLE.COM</span></p><p dir=\"ltr\" style=\"line-height:1.2;margin-left: -0.75pt;margin-top:16pt;margin-bottom:0pt;\"><span style=\"font-size:24pt;font-family:Oswald,sans-serif;color:#424242;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">YOUR NAME</span><span style=\"font-size:9pt;font-family:\'PT Mono\',monospace;color:#999999;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><span style=\"border:none;display:inline-block;overflow:hidden;width:576px;height:4px;\"><img alt=\"A long, thin rectangle to divide sections of the document\" title=\"Divider Line\" src=\"https://lh3.googleusercontent.com/JWm53aMUqEDBl5KrywMTu-capjoK_4kJR7py9_KPsUfXLy9FT1bRcp_D6uLBZFEattlaWTlcTUDSS-dEl2nUJnNgZimYAe0xnPFHMtL1uaxluHAZvAYCKnSmIoGs9QiUGqv36VMhC3yKFKyvX3U1m2Gj54V7ncv15YFSJ3PWG4SKzXrCr4iVtphD2ZTzJQ\" width=\"576\" height=\"4\" style=\"margin-left:0px;margin-top:0px;\"></span></span></p><p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-5247f44e-7fff-a7c7-ba03-63cae761ec2d\"><br></b></p><h1 dir=\"ltr\" style=\"line-height:1.44;margin-left: -0.75pt;margin-top:24pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Oswald,sans-serif;color:#424242;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">SKILLS</span></h1><p dir=\"ltr\" style=\"line-height:1.44;margin-left: -0.75pt;margin-top:6pt;margin-bottom:0pt;\"><span style=\"font-size:9pt;font-family:\'Source Code Pro\',monospace;color:#666666;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.&nbsp;</span></p><h1 dir=\"ltr\" style=\"line-height:1.44;margin-left: -0.75pt;margin-top:24pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Oswald,sans-serif;color:#424242;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">EXPERIENCE</span></h1><h2 dir=\"ltr\" style=\"line-height:1.2;margin-left: -0.75pt;margin-top:14pt;margin-bottom:0pt;\"><span style=\"font-size:11pt;font-family:\'Source Code Pro\',monospace;color:#e91d63;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Company Name, Location</span><span style=\"font-size:11pt;font-family:\'Source Code Pro\',monospace;color:#2e4440;background-color:transparent;font-weight:400;font-style:italic;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"> — Job Title</span></h2><p dir=\"ltr\" style=\"line-height:1.44;margin-left: -0.75pt;margin-top:6pt;margin-bottom:0pt;\"><span style=\"font-size:9pt;font-family:\'Source Code Pro\',monospace;color:#666666;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">MONTH 20XX - PRESENT</span></p><ul style=\"margin-top:0;margin-bottom:0;padding-inline-start:48px;\"><li dir=\"ltr\" style=\"list-style-type:disc;font-size:9pt;font-family:\'Source Code Pro\',monospace;color:#666666;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.44;margin-top:6pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:9pt;font-family:\'Source Code Pro\',monospace;color:#666666;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.&nbsp;</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:9pt;font-family:\'Source Code Pro\',monospace;color:#666666;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.44;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:9pt;font-family:\'Source Code Pro\',monospace;color:#666666;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Aenean ac interdum nisi. Sed in consequat mi.</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:9pt;font-family:\'Source Code Pro\',monospace;color:#666666;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.44;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:9pt;font-family:\'Source Code Pro\',monospace;color:#666666;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Sed in consequat mi, sed pulvinar lacinia felis eu finibus.&nbsp;</span></p></li></ul><h2 dir=\"ltr\" style=\"line-height:1.2;margin-left: -0.75pt;margin-top:14pt;margin-bottom:0pt;\"><span style=\"font-size:11pt;font-family:\'Source Code Pro\',monospace;color:#e91d63;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Company Name, Location</span><span style=\"font-size:11pt;font-family:\'Source Code Pro\',monospace;color:#2e4440;background-color:transparent;font-weight:400;font-style:italic;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"> — Job Title</span></h2><p dir=\"ltr\" style=\"line-height:1.44;margin-left: -0.75pt;margin-top:6pt;margin-bottom:0pt;\"><span style=\"font-size:9pt;font-family:\'Source Code Pro\',monospace;color:#666666;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">MONTH 20XX - MONTH 20XX</span></p><ul style=\"margin-top:0;margin-bottom:0;padding-inline-start:48px;\"><li dir=\"ltr\" style=\"list-style-type:disc;font-size:9pt;font-family:\'Source Code Pro\',monospace;color:#666666;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.44;margin-top:6pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:9pt;font-family:\'Source Code Pro\',monospace;color:#666666;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.&nbsp;</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:9pt;font-family:\'Source Code Pro\',monospace;color:#666666;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.44;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:9pt;font-family:\'Source Code Pro\',monospace;color:#666666;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Aenean ac interdum nisi. Sed in consequat mi.&nbsp;</span></p></li></ul><h2 dir=\"ltr\" style=\"line-height:1.2;margin-left: -0.75pt;margin-top:14pt;margin-bottom:0pt;\"><span style=\"font-size:11pt;font-family:\'Source Code Pro\',monospace;color:#e91d63;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Company Name, Location</span><span style=\"font-size:11pt;font-family:\'Source Code Pro\',monospace;color:#2e4440;background-color:transparent;font-weight:400;font-style:italic;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"> — Job Title</span></h2><p dir=\"ltr\" style=\"line-height:1.44;margin-left: -0.75pt;margin-top:6pt;margin-bottom:0pt;\"><span style=\"font-size:9pt;font-family:\'Source Code Pro\',monospace;color:#666666;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">MONTH 20XX - MONTH 20XX</span></p><ul style=\"margin-top:0;margin-bottom:0;padding-inline-start:48px;\"><li dir=\"ltr\" style=\"list-style-type:disc;font-size:9pt;font-family:\'Source Code Pro\',monospace;color:#666666;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.44;margin-top:6pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:9pt;font-family:\'Source Code Pro\',monospace;color:#666666;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.&nbsp;</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:9pt;font-family:\'Source Code Pro\',monospace;color:#666666;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.44;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:9pt;font-family:\'Source Code Pro\',monospace;color:#666666;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Aenean ac interdum nisi. Sed in consequat mi.&nbsp;</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:9pt;font-family:\'Source Code Pro\',monospace;color:#666666;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.44;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:9pt;font-family:\'Source Code Pro\',monospace;color:#666666;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Sed pulvinar lacinia felis eu finibus.&nbsp;</span></p></li></ul><h1 dir=\"ltr\" style=\"line-height:1.44;margin-left: -0.75pt;margin-top:24pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Oswald,sans-serif;color:#424242;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">EDUCATION</span></h1><h2 dir=\"ltr\" style=\"line-height:1.2;margin-left: -0.75pt;margin-top:14pt;margin-bottom:0pt;\"><span style=\"font-size:11pt;font-family:\'Source Code Pro\',monospace;color:#e91d63;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">School Name, Location</span><span style=\"font-size:11pt;font-family:\'Source Code Pro\',monospace;color:#2e4440;background-color:transparent;font-weight:400;font-style:italic;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"> — Degree</span></h2><p dir=\"ltr\" style=\"line-height:1.44;margin-left: -0.75pt;margin-top:6pt;margin-bottom:0pt;\"><span style=\"font-size:9pt;font-family:\'Source Code Pro\',monospace;color:#666666;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">MONTH 20XX - MONTH 20XX, LOCATION</span></p><p dir=\"ltr\" style=\"line-height:1.44;margin-left: -0.75pt;margin-top:6pt;margin-bottom:0pt;\"><span style=\"font-size:9pt;font-family:\'Source Code Pro\',monospace;color:#666666;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</span></p><h1 dir=\"ltr\" style=\"line-height:1.44;margin-left: -0.75pt;margin-top:24pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Oswald,sans-serif;color:#424242;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">AWARDS</span></h1><p dir=\"ltr\" style=\"line-height:1.44;margin-left: -0.75pt;margin-top:6pt;margin-bottom:0pt;\"><span style=\"font-size:9pt;font-family:\'PT Mono\',monospace;color:#666666;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></p><p></p><p dir=\"ltr\" style=\"line-height:1.44;margin-left: -0.75pt;margin-top:6pt;margin-bottom:0pt;\"><span style=\"font-size:9pt;font-family:\'PT Mono\',monospace;color:#666666;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Aenean ac interdum nisi.&nbsp;</span></p><div><span style=\"font-size:9pt;font-family:\'PT Mono\',monospace;color:#666666;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><br></span></div>', '2023-01-08 13:22:06', '2023-01-09 13:44:15');

-- --------------------------------------------------------

--
-- Table structure for table `professionals`
--

CREATE TABLE `professionals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `professionals`
--

INSERT INTO `professionals` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'this is demo post professional', 'this is demo pos tprofessional', '2023-01-09 17:50:28', '2023-01-09 13:38:26');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'backEnd/upload/profile-image/951234003.png', NULL, '2023-01-10 00:18:42');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('ej3UiSbj2XmNavIeqMyWPpKcghgoQWB8fz44C2AO', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiOElVSG5Hc3VpbkxYVU1GbDRvaTQzck1JbEh6N3kzZE5aM0NERmFiYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjE6Imh0dHA6Ly9sb2NhbGhvc3QvcGhkL3B1YmxpYy90ZWFjaGluZy9wcm9mZXNzaW9uYWwtZGV2ZWxvcG1lbnQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyYSQxMiRrLnlVVVBkSkFFTy81NDlzNGNDSGZlMWdHTE1JbVlYWVA0anpUcy5ta0JCa0Y5LmNJOVQyQyI7fQ==', 1673461451);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `description`, `google`, `author`, `tags`, `image`, `footer`, `cv`, `created_at`, `updated_at`) VALUES
(1, 'this is website title', 'Author: A.N. Author, Illustrator: P. Picture, Category: Books, Price:  £9.24, Length: 784 pages', 'google', 'Author Islam', 'Author, Picture,  Books, £9.24, Length, 784 pages, wgfsf', 'backEnd/upload/profile-image/1218263194.png', '© 2023 Your Footer Text', 'https://drive.google.com/file/d/1Mp96oqq5FniYFrbwZzdy-n80JYU65d5k/preview', '2023-01-11 05:00:32', '2023-01-11 11:45:16');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `social_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `social_title`, `social_icon`, `social_link`, `created_at`, `updated_at`) VALUES
(4, 'Facebook', 'icon-facebook-squared', 'https://facebook.com/', '2023-01-06 05:42:54', '2023-01-06 05:42:54'),
(5, 'Twitter', 'icon-twitter-squared', 'https://twitter.com/', '2023-01-06 05:43:30', '2023-01-06 06:04:04'),
(7, 'Linkedin', 'icon-linkedin-squared', 'https://www.linkedin.com/', '2023-01-06 05:44:59', '2023-01-06 05:44:59');

-- --------------------------------------------------------

--
-- Table structure for table `teachings`
--

CREATE TABLE `teachings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachings`
--

INSERT INTO `teachings` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'this is title gag dghhhgs', 'this is descriptionfcgfdxg', '2023-01-09 16:47:34', '2023-01-09 11:04:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Sadia Shad', 'admin@gmail.com', NULL, '$2a$12$k.yUUPdJAEO/549s4cCHfe1gGLMImYXYP4jzTs.mkBBkF9.cI9T2C', NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-02 09:51:40', '2023-01-09 08:33:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_category_title_unique` (`category_title`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_blog_title_unique` (`blog_title`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `philosophies`
--
ALTER TABLE `philosophies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professionals`
--
ALTER TABLE `professionals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachings`
--
ALTER TABLE `teachings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `philosophies`
--
ALTER TABLE `philosophies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `professionals`
--
ALTER TABLE `professionals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `teachings`
--
ALTER TABLE `teachings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
