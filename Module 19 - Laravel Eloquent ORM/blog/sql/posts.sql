-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2023 at 10:01 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
