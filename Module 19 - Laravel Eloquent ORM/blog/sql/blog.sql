-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2023 at 10:02 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 'Nice post!', '2023-07-11 13:48:17', '2023-07-11 13:48:17'),
(2, 2, 1, 'Thanks for sharing!', '2023-07-11 13:48:50', '2023-07-11 13:48:50'),
(3, 7, 6, 'Nice Post Man!', '2023-07-11 20:51:38', '2023-07-11 20:51:38'),
(4, 3, 2, 'Lion is cat!', '2023-07-11 20:51:38', '2023-07-11 20:51:38'),
(5, 2, 4, 'Yes It\'s True!', '2023-07-11 20:51:38', '2023-07-11 20:51:38'),
(6, 5, 4, 'I think so!', '2023-07-11 20:51:38', '2023-07-11 20:51:38'),
(7, 6, 3, 'It\'s a trash anime!', '2023-07-11 20:52:42', '2023-07-11 20:52:42'),
(8, 2, 3, 'It\'s my favorite one!', '2023-07-11 20:52:42', '2023-07-11 20:52:42');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(23, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(24, '2023_07_11_090524_create_users_table', 1),
(25, '2023_07_11_090542_create_profiles_table', 1),
(26, '2023_07_11_090553_create_posts_table', 1),
(27, '2023_07_11_090610_create_comments_table', 1),
(28, '2023_07_11_090704_create_tags_table', 1),
(29, '2023_07_11_090743_create_post_tags_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'What is Laravel Framework and Why is it So Popular?', 'PHP is a general-purpose scripting language for web development and is used by 79.0% of all websites. Additionally, Laravel is on the top of the list of the best MVC-based PHP frameworks. There are numerous reasons why every web development company including BootesNull counts upon Laravel.', 'https://www.tristatetechnology.com/tristate-website/blog/wp-content/uploads/2017/09/Why_Laravel.jpg', '2023-07-11 06:52:32', '2023-07-11 06:52:32'),
(2, 1, 'Why is lion called King of animals?', 'So, why are lions the king of the jungle? It\'s mainly because of their ability to dominate their habitat. For starters, lions are apex predators, being at the top of their habitats\' food chain. And, while hyenas and wild dogs will sometimes eat lion cubs, no animal hunts mature lions.', 'https://www.ourendangeredworld.com/wp-content/uploads/2022/03/Asiatic-lion-close-up.jpg', '2023-07-11 06:57:44', '2023-07-11 06:57:44'),
(3, 3, 'Is \'Kaguya-sama: Love Is War\' A Good Anime To Watch?', 'LIW is not only a good anime to watch, but it is a MUST watch! This anime has a very unique way with its’ words, and it’s so “out there” that you will never find yourself looking away from the screen. It is told from the perspective of Shinomiya and Shirogane as they navigate the “war games” of love. A lot of the show takes place in their respective minds, with the things they want to happen, not exactly happening the way they want them to.It’s fast, and it’s very “in your face.” You are on a rollercoaster as you watch the extreme courtship unfold before your eyes. The characters of LIW only enhance the story, and all of them are nuanced with very distinct personalities that play into the humor of the show.', 'https://images.squarespace-cdn.com/content/v1/5ccabcf60b77bdbb3acaf70a/1585185806276-5N3DD4NH9SGJURAMP6WN/Kaguya-samajpg.jpg?format=1000w', '2023-07-11 07:02:45', '2023-07-11 07:02:45'),
(4, 2, 'Is My Hero Academia Best Anime?', 'The short answer to the question of whether the My Hero Academia manga is ending soon is \'NO. \' Although mangaka Kohei Horikoshi had previously stated that he will be concluding his work in 2022, he has since repealed the statement and said anew that the story will continue and may go beyond 2023 as well.', 'https://media.comicbook.com/2021/03/my-hero-academia-throne-room-1260206.jpeg', '2023-07-11 07:04:25', '2023-07-11 07:19:57'),
(6, 4, 'Is java dead?', 'Emphatically, no. There are several million people learning Java annually. In 2023, there will be more developers who know Java than there were in 2022. Usage of the JVM as a foundation for new languages continues.', 'https://logos-world.net/wp-content/uploads/2022/07/Java-Logo.png', '2023-07-11 15:56:14', '2023-07-11 15:56:14'),
(12, 3, 'test', 'test', 'test', '2023-07-11 15:56:58', '2023-07-11 15:56:58');

-- --------------------------------------------------------

--
-- Table structure for table `post_tags`
--

CREATE TABLE `post_tags` (
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tags`
--

INSERT INTO `post_tags` (`post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-07-11 13:47:05', '2023-07-11 13:47:05'),
(1, 2, '2023-07-11 13:59:47', '2023-07-11 13:59:47'),
(3, 2, '2023-07-11 15:39:09', '2023-07-11 15:39:09'),
(4, 2, '2023-07-11 15:39:09', '2023-07-11 15:39:09'),
(12, 1, '2023-07-11 21:56:58', '2023-07-11 21:56:58');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `bio` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `bio`, `created_at`, `updated_at`) VALUES
(3, 1, 'I am geek!', '2023-07-11 15:02:08', '2023-07-11 15:02:08');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Technology', '2023-07-11 13:46:36', '2023-07-11 13:46:36'),
(2, 'Anime', '2023-07-11 13:46:36', '2023-07-11 13:46:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Saidul', 'saidul@gmail.com', '2023-07-11 06:49:10', '2023-07-11 08:15:20'),
(2, 'Rezaul', 'siam@gmail.com', '2023-07-11 06:53:20', '2023-07-11 06:53:20'),
(3, 'Ratul', 'ratul@gmail.com', '2023-07-11 06:53:54', '2023-07-11 06:53:54'),
(4, 'Mohok', 'mohok@gmail.com', '2023-07-11 06:54:03', '2023-07-11 06:54:03'),
(5, 'Sufian', 'sufian@gmail.com', '2023-07-11 06:54:28', '2023-07-11 06:54:28'),
(6, 'Nadim', 'nadim@gmail.com', '2023-07-11 06:54:37', '2023-07-11 06:54:37'),
(7, 'Anabil', 'rafi@gmail.com', '2023-07-11 06:54:47', '2023-07-11 06:54:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD KEY `post_tags_post_id_foreign` (`post_id`),
  ADD KEY `post_tags_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD CONSTRAINT `post_tags_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `post_tags_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
