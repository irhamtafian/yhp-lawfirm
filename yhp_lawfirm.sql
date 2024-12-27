-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2024 at 11:48 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yhp_lawfirm`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Established in 2017 by %%Yupen Hadi', 'YUPEN HADI & PARTNERS was established in 2017 by Yupen Hadi as a multi-practice law firm in Indonesia. Committed, enthusiastic, and dedicated to providing innovative, strategic, and comprehensive legal services. %%YUPEN HADI & PARTNERS is known for maintaining the highest professional standards in its business. This is achieved by consistently applying the most effective and best legal solutions, ensuring timeliness, and without ignoring commercial aspects.', 'img/about-us/khoSAxGpz1MNphzOh1ttgMyhZx4WAIogt3GPl7aR.png', '2024-05-05 20:29:00', '2024-05-05 20:29:00'),
(2, 'A Great Problem Solver and %%Deal Maker', 'YUPEN HADI & PARTNERS is a great problem solver and dealmaker. We believe that the combination of our lawyers analytical skills and our personalized approach, taking into account the specific requirements of each case, is the key to serving the best interests of our clients. %%YUPEN HADI & PARTNERS specializes in various comprehensive legal services and has offered its expertise in various corporate legal matters and commercial disputes.', 'img/about-us/OpPh7baET6zMkH4i4bcTLd0gAbFGThpxwX9GXRk7.png', '2024-05-05 20:29:00', '2024-05-05 20:29:00'),
(3, 'Superior in Dispute %%Resolution', 'YUPEN HADI & PARTNERS is superior in dispute resolution, including negotiations, debt restructuring, and court litigation. Our respected clients include state-owned enterprises, regional enterprises, government institutions, start-up companies, digital and fin-tech companies, and many others of famous person.', 'img/about-us/OpPh7baET6zMkH4i4bcTLd0gAbFGThpxwX9GXRk7.png', '2024-05-05 20:29:00', '2024-05-05 20:29:00');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `content` text NOT NULL,
  `header_articles` varchar(191) NOT NULL,
  `status` enum('PUBLISH','DRAFT') NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_by` varchar(191) DEFAULT NULL,
  `updated_by` varchar(191) DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `slug`, `content`, `header_articles`, `status`, `category_id`, `created_by`, `updated_by`, `views`, `created_at`, `updated_at`) VALUES
(1, 'Participation as Witness in the Recapitulation of the 2024 National Election Results', 'participation-as-witness-in-the-recapitulation-of-the-2024-national-election-results', 'Agenda for March 2, 2024: Witnessing the presidential and vice-presidential candidates in the recapitulation of the national election vote count and the declaration of the 2024 general election results.', 'thumbnail/yfXFqO42JFO3Gg9PWi6MNmVN2iwT9OxbPplWI5EM.png', 'PUBLISH', 1, NULL, NULL, 0, '2024-05-05 20:29:00', '2024-05-05 20:29:00'),
(2, 'Report on Alleged Election Law Violation by Tapanuli Tengah Regional Secretary', 'report-on-alleged-election-law-violation-by-tapanuli-tengah-regional-secretary', 'On Tuesday, January 16, 2024, the AMPK team reported the Tapanuli Tengah regional secretary to be a civil servant (ASN), known to have made statements directing ASN within his workplace to support the Nasdem party. This action is deemed to have violated electoral laws, including both the Election Law and the KPU regulations.', 'thumbnail/oRicHsepGrNIUQmlxJxFBnmNe1lz9Ygj2SfJ7Wu4.png', 'PUBLISH', 1, NULL, NULL, 0, '2024-05-05 20:29:00', '2024-05-05 20:29:00'),
(3, 'Witness Testimonies and Delayed Proceedings', 'witness-testimonies-and-delayed-proceedings', 'On the agenda of the court session on Monday, February 19, 2024, four out of eight victims who reported the incident were present as witnesses in the Central Jakarta District Court. The scheduled examination agenda, which was supposed to commence around 2:00 PM WIB, could only be conducted starting at 7:00 PM WIB. Currently, the trial proceedings are being held in closed session.', 'thumbnail/iUT6q3IyQ1f8PzsYA7jW0YtkpVUo3V0rhRGBKZoF.png', 'PUBLISH', 2, NULL, NULL, 0, '2024-05-05 20:29:00', '2024-05-05 20:29:00'),
(4, 'Expansion of Witnesses for the Miss Universe Indonesia Victim in the Trial at Central Jakarta District Court', 'expansion-of-witnesses-for-the-miss-universe-indonesia-victim-in-the-trial-at-central-jakarta-district-court', 'Expansion of Witnesses for the Miss Universe Indonesia Victim in the Trial at Central Jakarta District Court', 'thumbnail/Gri9vmfCP3MVfkHEjq1JjiHvJq4Nkkuk5Mpi5tug.png', 'DRAFT', 2, NULL, NULL, 0, '2024-05-05 20:29:00', '2024-05-05 20:29:00');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Event', 'event', '2024-05-05 20:29:00', '2024-05-05 20:29:00'),
(2, 'News', 'news', '2024-05-05 20:29:00', '2024-05-05 20:29:00');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `username` varchar(191) NOT NULL,
  `comment` text NOT NULL,
  `status` enum('DRAFT','PUBLISH') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `article_id`, `parent_id`, `username`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'Irham', 'This is a sample comment.', 'PUBLISH', '2024-05-05 20:29:00', '2024-05-05 20:29:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location` varchar(191) NOT NULL,
  `gmaps` text NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `instagram` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `location`, `gmaps`, `email`, `phone`, `instagram`, `created_at`, `updated_at`) VALUES
(1, 'Jl. Pam Baru Raya No. 1B Bendungan Hilir, Tanah abang, Jakarta Pusat', 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d795.3538284686424!2d106.81110142400064!3d-6.203425158105109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1714577497825!5m2!1sid!2sid', 'yupen78hadi@gmail.com', '+62 811 9877 078', 'yhp_lawfirm', '2024-05-05 20:29:00', '2024-05-05 20:29:00');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f_name` varchar(191) NOT NULL,
  `f_email` varchar(191) NOT NULL,
  `f_subject` varchar(191) NOT NULL,
  `f_message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Committed %%to Legal Service', 'We are committed, enthusiastic, and dedicated to providing %%innovative, strategic, and comprehensive legal services.', 'img/home/iqcQinSMo1Bi155gR4UVEADLYN3zoIhpH1Dse3vR.png', '2024-05-05 20:29:00', '2024-05-05 20:29:00'),
(2, 'Problem Solver and %%Deal Maker', 'Paying attention to the specific requirements of each case %%is key to serving the best interests of our clients.', 'img/home/A5lJwOCXVkIlTfPwfUSGadkH1DnAzXfMF5d5DEn3.png', '2024-05-05 20:29:00', '2024-05-05 20:29:00'),
(3, 'Superior in Dispute %%Resolution', 'We excel in resolving disputes, including negotiations, %%debt restructuring, and court litigation.', 'img/home/RkWfoa0POleisuvQmoa0HZIfCOOhRspiBGamhbIK.png', '2024-05-05 20:29:00', '2024-05-05 20:29:00'),
(4, 'Detailed Chronology', 'Pay attention to the clients chronological explanation of the main issue at hand. Describing the issue as a factor in decision-making.', 'img/home/y6S3K42fA27anTqgTVOAbdw4WxbaK7QjXKnd5SOt.png', '2024-05-05 20:29:00', '2024-05-05 20:29:00'),
(5, 'Discussion', 'This conversation is to decide what the first steps should be in pursuing this matter. In this discussion, step effectiveness is also significantly weighted.', 'img/home/kuC6f3zVxq0TR0v9NA3Awrb4OSzMJ0S2x1faKNYX.png', '2024-05-05 20:29:00', '2024-05-05 20:29:00'),
(6, 'File Preparations', 'Following the equivalence of all senses. In compliance with current legal guidelines, all documentsrequi red for the procedure will be created.', 'img/home/GZDWK2Kf3tJwOSyppMikZbTQxLQe3NITx8Mb5kHx.png', '2024-05-05 20:29:00', '2024-05-05 20:29:00');

-- --------------------------------------------------------

--
-- Table structure for table `mails`
--

CREATE TABLE `mails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mails`
--

INSERT INTO `mails` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Irham', 'irhamtafianazral@gmail.com', 'Impresif!', '2024-05-05 20:29:00', '2024-05-05 20:29:00'),
(2, 'Rivaldi Guci', 'rivaldi@gmail.com', 'Amazing!', '2024-05-05 20:29:00', '2024-05-05 20:29:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_09_27_041513_create_tb_user_table', 1),
(3, '2023_09_27_061535_create_users_table', 1),
(4, '2023_09_28_001800_create_articles_table', 1),
(5, '2023_09_28_003028_create_categories_table', 1),
(6, '2023_09_28_003123_create_comments_table', 1),
(7, '2023_10_15_165813_create_visitors_table', 1),
(8, '2023_10_19_093749_create_contacts_table', 1),
(9, '2024_04_30_004341_create_mails_table', 1),
(10, '2024_04_30_201445_create_about_us_table', 1),
(11, '2024_05_01_112301_create_home_table', 1),
(12, '2024_05_01_131957_create_services_table', 1),
(13, '2024_05_01_141413_create_partners_table', 1),
(14, '2024_05_01_162503_create_our_clients_table', 1),
(15, '2024_05_01_210540_create_contact_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `our_clients`
--

CREATE TABLE `our_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_clients`
--

INSERT INTO `our_clients` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Corporate', '- BSF VENTURE (Malaysia) - PT. Gihon Telekomunikasi Indonesia - PT. Global Barat Digital - PT. Sarana Niaga Jaya - PT. Indomesin Tridaya Bangsa - PT. Bianglala Metro Politan - PT. Alexa Putra Pratama - PT. Saka Ruang Indonesia - PT. Rumah Visual Manta Imaji', '2024-05-05 20:29:00', '2024-05-05 20:29:00'),
(2, 'Pemda', '- Pemda DKI Jakarta - Pemda Provinsi Kalimantan Utara - Pemda Provinsi Kalimantan Selatan - Pemda Provinsi Sulawesi Tenggara - Pemda Kabupaten Konawe.', '2024-05-05 20:29:00', '2024-05-05 20:29:00'),
(3, 'Other', 'And many other clients that we cannot mention for privacy reasons, including individual clients.', '2024-05-05 20:29:00', '2024-05-05 20:29:00');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `position` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `position`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Yupen Hadi, S.H., M.H.', 'Managing Partners', 'Advocate, Corporate Law, Energy and Minning Law, Immigration Law, Risk Assesment, Risk Management, Labour Law.', 'img/partners/RFoLIOPabE1k3jT9ikCQLbiaGxpqfy6sLNsrv5PM.png', '2024-05-05 20:29:00', '2024-05-05 20:29:00'),
(2, 'Rivaldi, S.H., M.H.', 'Senior Partners', 'Receiver and Managers in the field of Bankuptcy, Tax Law, Judicial Reviews, Disputes over General Election Results, Corporations Law, Land law, Environment Law.', 'img/partners/MPnDvPQCPrR84Fy7vlBoorNWIxHoFOtf7Hs867nS.png', '2024-05-05 20:29:00', '2024-05-05 20:29:00'),
(3, 'Deski Satria, S.H.', 'Partners', 'Advocate, Corporate Law, Energy and Minning Law, Immigration Law, Risk Assesment, Risk Management, Labour Law.', 'img/partners/eby1n46WV7162b4XJm5AU5Gtp4XV2Z3qM9jutpnQ.png', '2024-05-05 20:29:00', '2024-05-05 20:29:00'),
(4, 'Feri Irawan, S.H.', 'Partners', 'Advocate, Fintach Law, Customer Finance Law, Labour Law. %% %% %%', 'img/partners/0y5aPzbPQiBKPq5poxvvhG11tAvcm6sZv4rsuI3S.png', '2024-05-05 20:29:00', '2024-05-05 20:29:00'),
(5, 'Erwin Edison, S.H.', 'Partners', 'Advocate, Land Law, Property Law, Construction Law, Labour Law. %% %% %%', 'img/partners/lfpNFMJSp7Mm2ozjOM1ZilT36MP14T2bXZBit5Px.png', '2024-05-05 20:29:00', '2024-05-05 20:29:00');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Civil and Criminal Litigation', 'YUPEN HADI & PARTNERS law firm, place a strong emphasis on enforcement the highest ethical standards when advocating our clients, both in courtrooms and arbitration proceedings in Indonesia. Our experienced litigation team consistently serves as legal representatives, whether our clients are initiating legal actions or responding to legal challenges. Furthermore, we expand our expertise in completion of dispute solution to provide comprehensive guidance for our clients. We are committed to ensuring our clients interests are protected while maintaining the highest integrity throughout the legal process.', '2024-05-05 20:29:00', '2024-05-05 20:29:00'),
(2, 'Debt Restructuring and Bankruptcy', 'Debt restructuring and bankruptcy are crucial practice areas that address financial difficulties, manage debt obligations, and seek solutions for individuals and businesses facing financial challenges. At YUPEN HADI & PARTNERS Law Firm, we specialize in providing strategic legal advice and guidance in debt restructuring and bankruptcy matters, assisting clients in navigating complex financial situations and finding sustainable solutions. Debt Restructuring: Debt restructuring involves renegotiating the terms of existing debt to alleviate financial burdens and provide a pathway for repayment. The aim is to restructure debt obligations, such as loans, bonds, or other financial arrangements, to make them more manageable for the debtor while still considering the interests of creditors. Debt restructuring may involve various strategies, such as extending the repayment period, lowering interest rates, or modifying contract arrangements.', '2024-05-05 20:29:00', '2024-05-05 20:29:00'),
(3, 'Land Dispute', 'The lawyers at YUPEN HADI & PARTNERS specialize in resolving land dispute cases. The innovative concepts and strategies we possess have been proven successful by our clients, ranging from individuals and corporations to state-owned enterprises (BUMN). With the experience and expertise we have in resolving land issues, we believe that your land dispute, under our handling snf resolved optimally using our methods, techniques, and experience.', '2024-05-05 20:29:00', '2024-05-05 20:29:00'),
(4, 'Contract Drafting', 'At YUPEN HADI & PARTNERS, we assist our clients through every stage of their business, from negotiations, preparation, contract drafting, review, to implementation. Our lawyers will ensure that you achieve the best outcomes, whether its a straightforward or a highly complex collaboration agreement.', '2024-05-05 20:29:00', '2024-05-05 20:29:00'),
(5, 'Labor Law', 'YUPEN HADI & PARTNERS has an excellent track record in representing individual and business clients. We handle various issues related to labor law in Indonesia, such as employment contracts, termination of employment, foreign labor, and corporate actions regarding termination of employment. We will draft the best contracts and engage in negotiation, mediation, and court proceedings as needed to address your labor law issues effectively.', '2024-05-05 20:29:00', '2024-05-05 20:29:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `username` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `username` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin YHP Law Firm', 'admin', 'admin@yhp-lawfirm.com', '$2y$10$omEkiTT5zNRaLEy.T3aYweyK3a4L174gyNWXnWSuShnSqZm87prAG', NULL, '2024-05-05 20:29:00', '2024-05-05 20:29:00');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visit_date` date NOT NULL DEFAULT '2024-05-06',
  `count` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `visit_date`, `count`, `created_at`, `updated_at`) VALUES
(1, '2024-05-06', 2, '2024-05-05 20:46:20', '2024-05-05 20:50:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mails`
--
ALTER TABLE `mails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_clients`
--
ALTER TABLE `our_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `tb_user_username_unique` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mails`
--
ALTER TABLE `mails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `our_clients`
--
ALTER TABLE `our_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
