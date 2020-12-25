-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 30, 2020 lúc 09:40 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `film`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `actor`
--

CREATE TABLE `actor` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `actor`
--

INSERT INTO `actor` (`id`, `name`, `avt`, `country`, `dob`, `created_at`, `updated_at`) VALUES
(1, 'Tom Holland', '/img/tom.jpg', 'USA', '2000-03-24', NULL, NULL),
(2, 'Michael Keaton ', '/img/michael.jpg', 'USA', '1998-06-19', NULL, NULL),
(3, 'Robert Downey Jr. ', '/img/yuchi.jpg', 'USA', '1998-06-19', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `p_id`, `u_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 1, 7, 'hi', NULL, NULL),
(2, 1, 7, 'how are you', NULL, NULL),
(3, 1, 0, 'Welcome', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `p_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_serie` tinyint(4) NOT NULL,
  `p_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_director` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_nation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_released_year` date NOT NULL,
  `p_sumary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `film`
--

INSERT INTO `film` (`id`, `p_name`, `p_serie`, `p_link`, `p_image`, `p_director`, `p_nation`, `p_released_year`, `p_sumary`, `created_at`, `updated_at`) VALUES
(1, 'Spider-Man: Homecoming', 1, 'https://www.imdb.com/video/vi4175083801?playlistId=tt2250912&ref_=tt_ov_vi', './img/1.jpg', ' Jon Watts', 'USA', '2017-07-07', 'Peter Parker balances his life as an ordinary high school student in Queens with his superhero alter-ego Spider-Man, and finds himself on the trail of a new menace prowling the skies of New York City.', NULL, NULL),
(2, 'Big Hero 6', 1, 'https://www.imdb.com/title/tt2245084/?ref_=nv_sr_srsg_0', './img/2.jpg', 'Don Hall, Chris Williams', 'USA', '2014-11-07', 'The special bond develops between plus-sized inflatable robot Baymax, and prodigy Hiro Hamada. They team up with a group of friends to form a band of high-tech heroes.', NULL, NULL),
(3, 'Antman and the wasp', 1, 'https://www.imdb.com/video/vi4137138969?playlistId=tt5095030&ref_=tt_ov_vi', './img/3.jpg', 'Peyton Reed', 'USA', '2018-11-07', 'As Scott Lang balances being both a superhero and a father, Hope van Dyne and Dr. Hank Pym present an urgent new mission that finds the Ant-Man fighting alongside The Wasp to uncover secrets from their past.', NULL, NULL),
(4, 'Avengers: Age of ultron', 1, 'https://www.imdb.com/title/tt5095030/?ref_=fn_al_tt_1', './img/4.jpg', 'Peyton Reed', 'USA', '2018-11-07', 'When Tony Stark and Bruce Banner try to jump-start a dormant peacekeeping program called Ultron, things go horribly wrong and its up to Earths mightiest heroes to stop the villainous Ultron from enacting his terrible plan.', NULL, NULL),
(5, 'Doctor strange', 1, 'https://www.imdb.com/title/tt5095030/?ref_=fn_al_tt_1', './img/5.jpg', 'Peyton Reed', 'USA', '2018-11-07', 'While on a journey of physical and spiritual healing, a brilliant neurosurgeon is drawn into the world of the mystic arts.', NULL, NULL),
(6, 'Alita: Battle angel', 1, 'https://www.imdb.com/title/tt5095030/?ref_=fn_al_tt_1', './img/6.jpg', 'Peyton Reed', 'USA', '2018-11-07', 'A deactivated cyborg is revived, but cannot remember anything of her past life and goes on a quest to find out who she is.', NULL, NULL),
(7, 'Avengers: IMAX', 1, 'https://www.imdb.com/title/tt5095030/?ref_=fn_al_tt_1', './img/8.jpg', 'Peyton Reed', 'USA', '2018-11-07', 'As Scott Lang balances being both a superhero and a father, Hope van Dyne and Dr. Hank Pym present an urgent new mission that finds the Ant-Man fighting alongside The Wasp to uncover secrets from their past.', NULL, NULL),
(8, 'Antman and the wasp', 1, 'https://www.imdb.com/title/tt5095030/?ref_=fn_al_tt_1', './img/3.jpg', 'Peyton Reed', 'USA', '2018-11-07', 'As Scott Lang balances being both a superhero and a father, Hope van Dyne and Dr. Hank Pym present an urgent new mission that finds the Ant-Man fighting alongside The Wasp to uncover secrets from their past.', NULL, NULL),
(9, 'Ant-Man', 1, 'https://www.imdb.com/title/tt5095030/?ref_=fn_al_tt_1', './img/slide.jpg', 'Peyton Reed', 'USA', '2018-11-07', 'Armed with a super-suit with the astonishing ability to shrink in scale but increase in strength, cat burglar Scott Lang must embrace his inner hero and help his mentor, Dr. Hank Pym, plan and pull off a heist that will save the world.', NULL, NULL),
(10, 'Deadpool 2', 1, 'https://www.imdb.com/title/tt5095030/?ref_=fn_al_tt_1', './img/slide1.jpg', 'Peyton Reed', 'USA', '2018-11-07', 'Foul-mouthed mutant mercenary Wade Wilson (a.k.a. Deadpool), brings together a team of fellow mutant rogues to protect a young boy with supernatural abilities from the brutal, time-traveling cyborg Cable.', NULL, NULL),
(11, 'Avengers: Age of ultron', 1, 'https://www.imdb.com/title/tt5095030/?ref_=fn_al_tt_1', './img/slide2.jpg', 'Peyton Reed', 'USA', '2018-11-07', 'As Scott Lang balances being both a superhero and a father, Hope van Dyne and Dr. Hank Pym present an urgent new mission that finds the Ant-Man fighting alongside The Wasp to uncover secrets from their past.', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `film_actor`
--

CREATE TABLE `film_actor` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `ac_id` int(11) NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `film_actor`
--

INSERT INTO `film_actor` (`id`, `p_id`, `ac_id`, `role`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Peter Parker / Spider-Man', NULL, NULL),
(2, 1, 2, 'Adrian Toomes / Vulture', NULL, NULL),
(3, 1, 3, 'Tony Stark / Iron Man', NULL, NULL),
(4, 2, 1, 'Peter Parker / Spider-Man', NULL, NULL),
(5, 3, 1, 'Peter Parker / Spider-Man', NULL, NULL),
(6, 4, 1, 'Peter Parker / Spider-Man', NULL, NULL),
(7, 5, 1, 'Peter Parker / Spider-Man', NULL, NULL),
(8, 6, 1, 'Peter Parker / Spider-Man', NULL, NULL),
(9, 7, 1, 'Peter Parker / Spider-Man', NULL, NULL),
(10, 8, 1, 'Peter Parker / Spider-Man', NULL, NULL),
(11, 9, 1, 'Peter Parker / Spider-Man', NULL, NULL),
(12, 10, 1, 'Peter Parker / Spider-Man', NULL, NULL),
(13, 11, 1, 'Peter Parker / Spider-Man', NULL, NULL),
(14, 2, 2, 'Peter Parker / Spider-Man', NULL, NULL),
(15, 3, 2, 'Peter Parker / Spider-Man', NULL, NULL),
(16, 4, 2, 'Peter Parker / Spider-Man', NULL, NULL),
(17, 5, 2, 'Peter Parker / Spider-Man', NULL, NULL),
(18, 6, 2, 'Peter Parker / Spider-Man', NULL, NULL),
(19, 2, 2, 'Peter Parker / Spider-Man', NULL, NULL),
(20, 3, 2, 'Peter Parker / Spider-Man', NULL, NULL),
(21, 4, 2, 'Peter Parker / Spider-Man', NULL, NULL),
(22, 5, 2, 'Peter Parker / Spider-Man', NULL, NULL),
(23, 6, 2, 'Peter Parker / Spider-Man', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `film_type`
--

CREATE TABLE `film_type` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `film_type`
--

INSERT INTO `film_type` (`id`, `p_id`, `t_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `like`
--

CREATE TABLE `like` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `like`
--

INSERT INTO `like` (`id`, `p_id`, `u_id`, `created_at`, `updated_at`) VALUES
(2, 2, 0, NULL, NULL),
(3, 3, 0, NULL, NULL),
(4, 11, 0, NULL, NULL),
(5, 5, 0, NULL, NULL),
(8, 1, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_08_02_034211_create_table_phim', 1),
(2, '2020_08_02_134731_create_user_table', 1),
(3, '2020_08_15_081642_create_type_table', 1),
(4, '2020_08_16_080558_create_actor_table', 1),
(5, '2020_08_16_080718_create_phim_type_table', 1),
(6, '2020_08_16_080804_create_film_actor_table', 1),
(7, '2020_08_16_080834_create_comment_table', 1),
(8, '2020_08_16_080852_create_reply_table', 1),
(9, '2020_08_16_080911_create_like_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reply`
--

CREATE TABLE `reply` (
  `id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `re_comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `reply`
--

INSERT INTO `reply` (`id`, `c_id`, `u_id`, `re_comment`, `created_at`, `updated_at`) VALUES
(1, 1, 7, 'haha', NULL, NULL),
(2, 2, 7, 'im fine', NULL, NULL),
(3, 2, 7, 'im fine', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type`
--

INSERT INTO `type` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Action', NULL, NULL),
(2, 'Adventure', NULL, NULL),
(3, 'Sci-Fi', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '/img/unknowavatar.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `phonenumber`, `password`, `avatar`, `created_at`, `updated_at`) VALUES
(0, 'Admin', '01694844753', 'f6766af61a09264dc32a098a098d28e9c5b3e7e9', '/img/unknowavatar.png', NULL, NULL),
(2, 'Ms. Liliana Reilly', '(206) 855-7262', 'u4oDcov6XP', 'C:\\Users\\admin\\AppData\\Local\\Temp\\d968540bc7b18127dd5d5dc391bade7a.jpg', NULL, NULL),
(3, 'Raquel Zboncak', '974.391.8553', 'Gknoq5g7vb', 'C:\\Users\\admin\\AppData\\Local\\Temp\\0927aa3a475caf55975cffe5e59ea02c.jpg', NULL, NULL),
(4, 'Miss Annamarie Lemke', '+12626186447', 'tAzTFOyKAn', 'C:\\Users\\admin\\AppData\\Local\\Temp\\8ee425dcda4a9378e5a9c4d2ba7c5efb.jpg', NULL, NULL),
(5, 'Tyrell Lynch', '231-823-9760 x6518', 'FQmw7zrZx9', 'C:\\Users\\admin\\AppData\\Local\\Temp\\eb004b0706aead6b319e78d83ae2ab51.jpg', NULL, NULL),
(6, 'Paul Schamberger', '0123456789', '1234', '.img/unknowavatar.png', NULL, NULL),
(7, 'ngoc nguyen', '0987709764', 'cd9d379715cccc83fd8c8c2dc0730c6dd081bd35', '/img/unknowavatar.png', '2020-08-28 11:48:17', '2020-08-28 11:48:17');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_p_id_foreign` (`p_id`),
  ADD KEY `comment_u_id_foreign` (`u_id`);

--
-- Chỉ mục cho bảng `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `film_actor`
--
ALTER TABLE `film_actor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `film_actor_p_id_foreign` (`p_id`),
  ADD KEY `film_actor_ac_id_foreign` (`ac_id`);

--
-- Chỉ mục cho bảng `film_type`
--
ALTER TABLE `film_type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `film_type_p_id_foreign` (`p_id`),
  ADD KEY `film_type_t_id_foreign` (`t_id`);

--
-- Chỉ mục cho bảng `like`
--
ALTER TABLE `like`
  ADD PRIMARY KEY (`id`),
  ADD KEY `like_p_id_foreign` (`p_id`),
  ADD KEY `like_u_id_foreign` (`u_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reply_c_id_foreign` (`c_id`),
  ADD KEY `reply_u_id_foreign` (`u_id`);

--
-- Chỉ mục cho bảng `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `actor`
--
ALTER TABLE `actor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `film_actor`
--
ALTER TABLE `film_actor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `film_type`
--
ALTER TABLE `film_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `like`
--
ALTER TABLE `like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `reply`
--
ALTER TABLE `reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_p_id_foreign` FOREIGN KEY (`p_id`) REFERENCES `film` (`id`),
  ADD CONSTRAINT `comment_u_id_foreign` FOREIGN KEY (`u_id`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `film_actor`
--
ALTER TABLE `film_actor`
  ADD CONSTRAINT `film_actor_ac_id_foreign` FOREIGN KEY (`ac_id`) REFERENCES `actor` (`id`),
  ADD CONSTRAINT `film_actor_p_id_foreign` FOREIGN KEY (`p_id`) REFERENCES `film` (`id`);

--
-- Các ràng buộc cho bảng `film_type`
--
ALTER TABLE `film_type`
  ADD CONSTRAINT `film_type_p_id_foreign` FOREIGN KEY (`p_id`) REFERENCES `film` (`id`),
  ADD CONSTRAINT `film_type_t_id_foreign` FOREIGN KEY (`t_id`) REFERENCES `type` (`id`);

--
-- Các ràng buộc cho bảng `like`
--
ALTER TABLE `like`
  ADD CONSTRAINT `like_p_id_foreign` FOREIGN KEY (`p_id`) REFERENCES `film` (`id`),
  ADD CONSTRAINT `like_u_id_foreign` FOREIGN KEY (`u_id`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `reply`
--
ALTER TABLE `reply`
  ADD CONSTRAINT `reply_c_id_foreign` FOREIGN KEY (`c_id`) REFERENCES `comment` (`id`),
  ADD CONSTRAINT `reply_u_id_foreign` FOREIGN KEY (`u_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
