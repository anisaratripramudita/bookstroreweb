-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 05, 2022 at 01:56 AM
-- Server version: 5.7.33
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekbesarweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id`, `gambar`, `judul`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, '1656946824_ATEEZ • THE FELLOWSHIP _ BEGINNING OF THE END.jpg', 'ATEEZ alludes to their comeback concept in new teaser for \'THE WORLD EP.1: MOVEMENT\' album AKP STAFF', 'On July 3 KST, KQ Entertainment unveiled another teaser promoting the group\'s upcoming album \'THE WORLD EP.1: MOVEMENT.\' In the image, the phrases \"Are you seeing this?\" and \"Eyes in the sky\" allude to lyrics fans can expect to hear in the comeback release. These lyrics are layered over a series of other words reflecting the album\'s\r\n\r\n\r\nMeanwhile, ATEEZ is set to make a comeback on July 29.', '2022-07-04 08:00:24', '2022-07-04 08:00:24'),
(4, '1656961985_𝖒𝖆𝖗𝖞 𝖔𝖓 𝖆 𝖈𝖗𝖔𝖘𝖘 on Twitter.jpg', 'Buku yang dilarang pada masa orde baru', '1. Tetralogi Buru, Pramoedya Ananta Toer\r\nSiapa anak muda sekarang yang nggak tahu dengan novel Bumi Manusia, Anak Semua Bangsa, Jejak Langkah, dan Ruamh Kaca? Ya, empat novel karya Pramoedya Ananta Toer termasuk karya yang banyak digandrungi para pecinta sastra. Tapi siapa sangka jika novel apik tersebut dulu pernah dilarang dibaca dan beredar?\r\n\r\nTak hanya empat novel itu, ada puluhan novel Pram yang saat itu juga dicekal seperti Hoakiau di Indonesia, Keluarga Gerilya, Perburuan, Mereka yang Dilumpuhkan, Pertjikan Revolusi, Keluarga Gerilja, Ditepi Kali Bekasi, Bukan Pasar Malam, Tjerita Dari Blora, Midah si Manis Bergigi Emas, Korupsi, Gulat di Djakarta, Tjerita dari Djakarta, Sekali Peristiwa di Banten Selatan, Panggil Aku Kartini Sadja jilid 1 & 2, Hoakiau di Indonesia.\r\n\r\nSebagian karya yang dilarang itu ternyata kini jadi rujukan buku kuliah di Universitas Queen Mary London.\r\n\r\n2. Demokrasi Kita, Mohammad Hatta\r\nBuku karya proklamator Republik Indonesia ini juga dulu dilarang beredar. Buku Demokrasi Kita yang dilarang beredar oleh penguasa militer pada 1960 berisi kritik atas kebijakan Presiden Soekarno yang dinilai otoriter', '2022-07-04 12:13:05', '2022-07-04 12:13:05'),
(5, '1656962589_Library by Dj Bekas.jpg', '10 Benefits of Reading', 'Before the electronic era, everyday reading was a ritual that almost everyone who wanted to gain knowledge adapted. The benefits of reading needed not to be reminded all the time.\r\n\r\nAmongst other things, we have been so preoccupied with social media and the internet that hardly anyone contemplates reading books. While some maybe too busy to read, others merely don’t care to read.\r\n\r\nThere are many benefits to reading, from making you smarter to improve your reading and writing skills. If you want to understand what benefits one could reap from developing the habit of reading, then we have enlisted the top 10 benefits here.', '2022-07-04 12:23:09', '2022-07-04 12:23:09');

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE `barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `genre` enum('dongeng','self-help','edukasi','bisnis','fiksi remaja','sastra') COLLATE utf8mb4_unicode_ci NOT NULL,
  `premis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangs`
--

INSERT INTO `barangs` (`id`, `gambar`, `judul`, `harga`, `genre`, `premis`, `created_at`, `updated_at`) VALUES
(1, '1656949104_b1.jpg', 'Hope You Get This Message', 150000, 'fiksi remaja', 'Seven days. Seven days. The Earth might end in seven days.\r\n\r\nWhen news stations start reporting that Earth has been contacted by a planet named Alma, the world is abuzz with rumors that the alien entity is giving mankind only few days to live before they hit the kill switch on civilization.\r\n\r\nFor high school truant Jesse Hewitt, though, nothing has ever felt permanent. Not the guys he hooks up with. Not the jobs his underpaid mom works so hard to hold down. Life has dealt him one bad blow after another — so what does it matter if it all ends now? Cate Collins, on the other hand, is desperate to use this time to find the father she’s never met, the man she grew up hearing wild stories about, most of which she didn’t believe. And then there’s Adeem Khan. While coding and computer programming have always come easily to him, forgiveness doesn’t. He can’t seem to forgive his sister for leaving, even though it’s his last chance.\r\n\r\nWith only seven days to face their truths and right their wrongs, Jesse, Cate, and Adeem’s paths collide even as their worlds are pulled apart.', '2022-07-04 08:38:25', '2022-07-04 08:38:25'),
(2, '1656950294_b2.jpg', 'Sorry For Your Loss', 250000, 'fiksi remaja', 'Printz Honor winner and William Morris Award finalist Jessie Ann Foley’s latest YA novel is a comitragic coming-of-age story about an awkward teenage guy who, after the loss of his brother, finds healing and a sense of self where he least expected to.\r\n\r\nAs the youngest of eight, painfully average Pup Flanagan is used to flying under the radar. He’s barely passing his classes. He lets his longtime crush walk all over him. And he’s in no hurry to decide on a college path. The only person who ever made him think he could be more was his older brother Patrick, the family’s golden child. But that was before Patrick died suddenly, leaving Pup with a family who won’t talk about it and acquaintances who just keep saying, “sorry for your loss.”\r\n\r\nBut when Pup excels at a photography assignment he thought he’d bomb, things start to come into focus. His dream girl shows her true colors. An unexpected friend exposes Pup to a whole new world, right under his nose. And the photograph that was supposed to show Pup a way out of his grief ultimately reveals someone else who is still stuck in their own. Someone with a secret regret Pup never could have imagined.', '2022-07-04 08:58:14', '2022-07-04 08:58:14'),
(3, '1656952794_b3.jpg', 'The Language of Fire: Joan of Arc Reimagined', 300000, 'sastra', 'Jehanne was an illiterate peasant, never quite at home among her siblings and peers. Until one day, she hears a voice call to her, telling her she is destined for important things. She begins to understand that she has been called by God, chosen for a higher purpose — to save France.\r\n\r\nThrough sheer determination and incredible courage, Jehanne becomes the unlikeliest of heroes. She runs away from home, dresses in men’s clothes, and convinces an army that she will lead France to victory.\r\n\r\nAs a girl in a man’s world, at a time when women truly had no power, Jehanne faced constant threats and violence from the men around her. Despite the impossible odds, Jehanne became a fearless warrior who has inspired generations.\r\n\r\nThis extraordinary verse novel from award-winning author Stephanie Hemphill dares to imagine how an ordinary girl became a great leader, and ultimately saved a nation.\r\n\r\nThe Language of Fire is a lyrical, dark, and moving look at the life of Joan of Arc, who as a teen girl in the fifteenth century commanded an army and helped crown a king of France.', '2022-07-04 09:39:54', '2022-07-04 09:39:54'),
(4, '1656954583_b4.jpg', 'Waves', 200000, 'dongeng', 'A young woman and her wife\'s attempts to have a child unfold in this poetic tale that ebbs and flows like the sea.\r\n\r\nAfter years of difficulty trying to have children, a young couple finally announces their pregnancy, only to have the most joyous day of their lives replaced with one of unexpected heartbreak. Their relationship is put to the test as they forge ahead, working together to rebuild themselves amidst the churning tumult of devastating loss, and ultimately facing the soul-crushing reality that they may never conceive a child of their own.\r\n\r\nBased on author Ingrid Chabbert’s own experience, coupled with soft, sometimes dreamlike illustrations by Carole Maurel, Waves is a deeply moving story that poignantly captures a woman’s exploration of her pain in order to rediscover hope.', '2022-07-04 10:09:43', '2022-07-04 10:09:43'),
(5, '1656954768_b5.jpg', 'Harry Potter and the Philosopher\'s Stone', 350000, 'dongeng', 'Harry Potter thinks he is an ordinary boy - until he is rescued by an owl, taken to Hogwarts School of Witchcraft and Wizardry, learns to play Quidditch and does battle in a deadly duel. The Reason ... HARRY POTTER IS A WIZARD!', '2022-07-04 10:12:48', '2022-07-04 10:12:48'),
(6, '1656955058_s2.jpg', 'The Little Prince', 300000, 'dongeng', 'A pilot stranded in the desert awakes one morning to see, standing before him, the most extraordinary little fellow. \"Please,\" asks the stranger, \"draw me a sheep.\" And the pilot realizes that when life\'s events are too difficult to understand, there is no choice but to succumb to their mysteries. He pulls out pencil and paper... And thus begins this wise and enchanting fable that, in teaching the secret of what is really important in life, has changed forever the world for its readers.\r\n\r\nFew stories are as widely read and as universally cherished by children and adults alike as The Little Prince, presented here in a stunning new translation with carefully restored artwork. The definitive edition of a worldwide classic, it will capture the hearts of readers of all ages.', '2022-07-04 10:17:38', '2022-07-04 10:17:38'),
(7, '1656955174_s3.jpg', 'The Sun And Her Flower', 250000, 'sastra', 'As a 21-year-old university student Rupi wrote, illustrated and self-published her first poetry collection, milk and honey. Next came its artistic sibling, the sun and her flowers. These collections have sold over 8 million copies and have been translated into over 42 languages. Her most recent book, home body, debuted #1 on bestsellers lists across the world. Rupi’s work touches on love, loss, trauma, healing, femininity, and migration. She feels most at home when creating art or performing her poetry on stage.', '2022-07-04 10:19:34', '2022-07-04 10:19:34'),
(8, '1656961544_b1.jpg', 'Buku', 300000, 'sastra', 'gftdghv hjfgvbnm bhfgfv', '2022-07-04 12:05:44', '2022-07-04 12:05:44');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_02_042323_create_artikels_table', 1),
(6, '2022_07_04_105059_create_barangs_table', 1);

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','pembeli') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pembeli',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'YUYU FIXON', 'jyuno@ateez.com', NULL, '$2y$10$jJI6I9jMt7vOZop79ola/.nd6dulqtT5H7mhulGYchxWMO5QaZbfu', 'admin', NULL, '2022-07-04 07:58:14', '2022-07-04 07:58:14'),
(2, 'HWABARRY', 'swa@ateez.com', NULL, '$2y$10$SVX2QWOaa37Pksj.7q7zMeT8MnaIiwL5hwfJ18oQhWCkpYhEHQL26', 'pembeli', NULL, '2022-07-04 11:44:55', '2022-07-04 11:44:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
