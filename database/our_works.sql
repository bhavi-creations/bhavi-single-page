-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 29, 2025 at 12:23 PM
-- Server version: 10.6.22-MariaDB-0ubuntu0.22.04.1
-- PHP Version: 8.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bhavicreationspvtltd`
--

-- --------------------------------------------------------

--
-- Table structure for table `our_works`
--

CREATE TABLE `our_works` (
  `id` int(11) NOT NULL,
  `media_type` varchar(100) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `file_path` varchar(255) NOT NULL,
  `media_link` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `our_works`
--

INSERT INTO `our_works` (`id`, `media_type`, `title`, `file_path`, `media_link`) VALUES
(76, 'Logo', NULL, 'work_68777e818869e.png', 'https://www.askoncologist.com/'),
(77, 'Logo', NULL, 'work_68777e90e2d09.png', 'https://bhavicreations.com/'),
(78, 'Logo', NULL, 'work_68777ec52ed7f.png', 'https://neurostarhospital.com/'),
(79, 'Logo', NULL, 'work_68777ee1207b0.png', 'https://bhavicreations.com/'),
(80, 'Logo', NULL, 'work_68777f2277192.png', 'https://renew.bhavicreations.com/index.php'),
(81, 'Logo', NULL, 'work_68777f322b25d.png', 'https://samhitasoilsolutions.com/'),
(82, 'Logo', NULL, 'work_68777f4a67e81.png', 'https://www.loveandcaretrust.com/'),
(83, 'Logo', NULL, 'work_68777f5f5ec11.png', 'https://sreenikaspeechandhearing.in/'),
(84, 'Logo', NULL, 'work_68777f764dfc9.png', 'https://srinivasadentalkakinada.com/'),
(92, 'Posters', NULL, 'work_687780eae6346.png', 'https://www.askoncologist.com/'),
(93, 'Posters', NULL, 'work_6877813ca0b8a.png', 'https://drsubhashplasticsurgeon.com/'),
(94, 'Posters', NULL, 'work_687781738d11c.png', 'https://leeladentalhospital.com/'),
(100, 'Website', NULL, 'work_6878ad3dced0a.png', 'https://leeladentalhospital.com/'),
(101, 'Website', NULL, 'work_6878c2a55bd45.png', 'https://kakinadahub.com/'),
(102, 'Reels', NULL, 'work_6878d45084e86.mp4', ''),
(103, 'Reels', NULL, 'work_6878d79b61082.mp4', 'https://www.instagram.com/reel/DMKLxJupN70/?igsh=ODNkY3ZiMjIyMW13'),
(104, 'Reels', NULL, 'work_6878d907a9253.mp4', 'https://www.instagram.com/reel/DK3hyezByKv/?igsh=MXF5dDdjczgybnA5MQ=='),
(105, 'Videos', NULL, 'work_6878d92f01e05.mp4', ' https://www.instagram.com/p/DLRQM1PBnsT/?igsh=cnVydGF1NGRhcm92 '),
(106, 'Videos', NULL, 'work_6878d94518c1e.mp4', 'https://www.instagram.com/p/DLPDDvrhsSi/?igsh=MXJhaHpuYjQyOThkYw=='),
(107, 'Testimonials', NULL, 'work_6878d98921b70.mp4', 'https://www.instagram.com/reel/DDoBZCwypXY/'),
(108, 'Testimonials', NULL, 'work_6878d9a80ff57.mp4', ' https://www.instagram.com/reel/DL2J3TlJFxF/?igsh=MWRlN2o5cWhyZDV6Zw=='),
(109, 'Testimonials', NULL, 'work_6878d9c1a8652.mp4', ' https://www.instagram.com/p/DKYv3FQB4Ye/'),
(110, 'Reels', NULL, 'work_6878da1f17842.mp4', 'https://www.instagram.com/p/DJ0s0VVSdZV/'),
(111, 'Reels', NULL, 'work_6878da450b47b.mp4', 'https://www.instagram.com/reel/DGxHVEJJa3z/'),
(112, 'Animated Videos', NULL, 'work_6878db47e16d4.mp4', 'https://www.instagram.com/reel/DKbgepapLSI/'),
(113, 'Animated Videos', NULL, 'work_6878db63dd874.mp4', 'https://www.instagram.com/reel/DJ3KR4UhRGN/'),
(114, 'Website', NULL, 'work_6878dbcf40055.png', 'https://leeladentalhospital.com/'),
(115, 'Website', NULL, 'work_6878dbe3063a5.png', 'https://bhavicreations.com/'),
(116, 'Website', NULL, 'work_6878dc12a38a7.png', 'https://cowandcalf.com/'),
(117, 'Website', NULL, 'work_6878dc2ec093e.png', 'https://www.loveandcaretrust.com/'),
(118, 'Website', NULL, 'work_6878dc46734e5.png', 'https://visiondentalguntur.com/'),
(119, 'Website', NULL, 'work_6878dc6546359.png', 'https://samhitasoilsolutions.com/'),
(120, 'Website', NULL, 'work_6878dc78d2c69.png', 'https://drsubhashplasticsurgeon.com/'),
(121, 'Website', NULL, 'work_6878dc8d3d0bd.png', 'https://appledentalvzm.in/'),
(122, 'Website', NULL, 'work_6878dc9f3c53b.png', 'https://www.medeng.in/'),
(123, 'Website', NULL, 'work_6878dcb33600f.png', 'https://neurostarhospital.com/'),
(124, 'Website', NULL, 'work_6878dcc3d44f2.png', 'https://krishnadentacureclinic.com/'),
(125, 'Website', NULL, 'work_6878dcdc54875.png', 'https://revanshdentalclinic.com/'),
(126, 'Website', NULL, 'work_6878dceee0c1f.png', 'https://ratnakarconstructions.com/'),
(127, 'Website', NULL, 'work_6878dd03b8170.png', 'https://nayanagroups.com/'),
(128, 'Website', NULL, 'work_6878dd1a981af.png', 'https://fotondecors.com/'),
(129, 'Website', NULL, 'work_6878dd3022301.png', 'https://kakinadahub.com/'),
(130, 'Website', NULL, 'work_6878dd4c7c274.png', 'https://arunahospital.org/'),
(131, 'Website', NULL, 'work_6878dd64c1302.png', 'https://srihariskinandkidneyclinic.com/'),
(132, 'Website', NULL, 'work_6878dd87682c8.png', 'https://varmagroups.net/'),
(133, 'Website', NULL, 'work_6878dde24c132.png', 'https://srinivasadentalkakinada.com/'),
(134, 'Posters', NULL, 'work_6878deaa98039.jpg', 'https://appledentalvzm.in/'),
(135, 'Posters', NULL, 'work_6878deb5c3b0a.jpg', 'https://appledentalvzm.in/'),
(136, 'Posters', NULL, 'work_6878debfd5f1a.jpg', 'https://appledentalvzm.in/'),
(137, 'Posters', NULL, 'work_6878ded406942.jpg', 'https://appledentalvzm.in/'),
(138, 'Posters', NULL, 'work_6878e07621dbd.jpg', 'https://askoncologist.com/'),
(139, 'Posters', NULL, 'work_6878e0960fe9e.jpg', 'https://krishnadentacureclinic.com/'),
(140, 'Posters', NULL, 'work_6878e0a8ca743.jpg', 'https://krishnadentacureclinic.com/'),
(141, 'Photo Shoot', NULL, 'work_6878eb0c214ee.mp4', 'https://appledentalvzm.in/'),
(142, 'Photo Shoot', NULL, 'work_6878ec33cf894.mp4', 'https://leeladentalhospital.com/'),
(143, 'Photo Shoot', NULL, 'work_6878ec5a1a8c8.mp4', 'https://revanshdentalclinic.com/'),
(144, 'Hoardings', NULL, 'work_6878ef49a3bb0.png', ''),
(145, 'Hoardings', NULL, 'work_6878ef5849e83.png', ''),
(146, 'Hoardings', NULL, 'work_6878ef728cf03.png', 'https://ratnakarconstructions.com/'),
(147, 'Hoardings', NULL, 'work_6878efc911d64.png', 'https://srinivasadentalkakinada.com/'),
(161, 'Logo', NULL, 'work_6879ed808e946.png', 'https://arunahospital.org/'),
(163, 'Logo', NULL, 'work_687a09048b7d5.png', ''),
(164, 'Logo', NULL, 'work_687a092655a30.png', 'https://srihariskinandkidneyclinic.com/'),
(165, 'Logo', NULL, 'work_687a093a5d3c7.png', 'https://cowandcalf.com/'),
(166, 'Logo', NULL, 'work_687a09531a19b.png', 'https://neurostarhospital.com/'),
(167, 'Logo', NULL, 'work_687a09775ff4e.png', 'https://appledentalvzm.in/'),
(168, 'Logo', NULL, 'work_687a098cb9829.png', 'https://askoncologist.com/'),
(169, 'Logo', NULL, 'work_687a09a1a27f9.png', 'https://coupleclinics.in/'),
(170, 'Logo', NULL, 'work_687a09b51d5f1.png', 'https://hindudharmikapeetham.org/'),
(171, 'Logo', NULL, 'work_687a0a142c89a.png', 'https://mythrienterprises.com/index.html'),
(172, 'Logo', NULL, 'work_687a0a270120a.png', 'https://leeladentalhospital.com/'),
(173, 'Logo', NULL, 'work_687a0a38af546.png', 'https://krishnadentacureclinic.com/'),
(174, 'Logo', NULL, 'work_687a0a4be833d.png', 'https://samhitasoilsolutions.com/'),
(175, 'Logo', NULL, 'work_687a0a5ed5a84.png', 'https://revanshdentalclinic.com/'),
(176, 'Logo', NULL, 'work_687a0a766d177.png', 'https://srinivasadentalkakinada.com/'),
(177, 'Logo', NULL, 'work_687a0a890f22b.png', 'https://visiondentalguntur.com/'),
(178, 'Logo', NULL, 'work_687a0a9c20105.png', 'https://preacherstrainingschool.in/'),
(179, 'Logo', NULL, 'work_687a0aac61119.png', 'https://ratnakarconstructions.com/'),
(180, 'Logo', NULL, 'work_687a0abe1c097.png', 'https://nayanagroups.com/'),
(181, 'Logo', NULL, 'work_687a0acb5f5ec.png', ''),
(182, 'Logo', NULL, 'work_687a0ae2cfb4b.png', 'https://www.loveandcaretrust.com/'),
(183, 'Logo', NULL, 'work_687a0c70218a0.png', 'https://varmagroups.net/'),
(192, 'Visiting Cards', NULL, 'work_687f746c0ce2f.png', ''),
(193, 'Visiting Cards', NULL, 'work_687f7486b9b87.png', 'https://samhitasoilsolutions.com/'),
(194, 'Visiting Cards', NULL, 'work_687f7493e304d.png', ''),
(195, 'Visiting Cards', NULL, 'work_687f74a286d6c.png', ''),
(196, 'Visiting Cards', NULL, 'work_687f74c964096.png', 'https://www.fotondecors.com/'),
(197, 'Visiting Cards', NULL, 'work_687f74d61f493.png', ''),
(198, 'Brochures', NULL, 'work_687f7a1f709f0.jpg', 'https://neurostarhospital.com/'),
(199, 'Brochures', NULL, 'work_687f7a3b11568.jpg', 'https://bhavicreations.com/'),
(200, 'Brochures', NULL, 'work_687f7a5d36c96.jpg', 'https://bhavicreations.com/'),
(207, 'Hoardings', NULL, 'work_687f7d82c018c.png', 'https://bhavicreationspvtltd.com/'),
(208, 'Hoardings', NULL, 'work_687f7d8d4c2a5.png', ''),
(209, 'Hoardings', NULL, 'work_687f7d996275f.png', ''),
(210, 'Hoardings', NULL, 'work_687f7daedf89d.png', 'https://drsubhashplasticsurgeon.com/'),
(211, 'Hoardings', NULL, 'work_687f7dbee24c5.png', 'https://neurostarhospital.com/'),
(212, 'Hoardings', NULL, 'work_687f7dd32dfe2.png', 'https://ratnakarconstructions.com/'),
(213, 'Hoardings', NULL, 'work_687f7debc9b05.png', 'https://renew.bhavicreations.com/index.php'),
(214, 'Hoardings', NULL, 'work_687f7df50be6e.png', ''),
(215, 'Hoardings', NULL, 'work_687f7e0c92ac6.png', 'https://srinivasadentalkakinada.com/'),
(216, 'Hoardings', NULL, 'work_687f7e1cc8375.png', 'https://srinivasadentalkakinada.com/'),
(217, 'Pamphlets', NULL, 'work_687f800d43809.png', 'https://neurostarhospital.com/'),
(218, 'Pamphlets', NULL, 'work_687f801ac1efc.png', 'https://neurostarhospital.com/'),
(219, 'Pamphlets', NULL, 'work_687f80246cf9b.png', 'https://neurostarhospital.com/'),
(220, 'Pamphlets', NULL, 'work_687f802f4b9b6.png', 'https://neurostarhospital.com/'),
(221, 'Pamphlets', NULL, 'work_687f80385af4c.png', 'https://neurostarhospital.com/'),
(222, 'Pamphlets', NULL, 'work_687f805968c72.png', 'https://renew.bhavicreations.com/index.php'),
(223, 'Pamphlets', NULL, 'work_687f814e99e42.png', ''),
(224, 'Pamphlets', NULL, 'work_687f8158b4aa4.png', ''),
(225, 'Pamphlets', NULL, 'work_687f81642d7c2.png', 'https://neurostarhospital.com/'),
(226, 'Pamphlets', NULL, 'work_687f818937e66.png', 'https://leeladentalhospital.com/'),
(227, 'Pamphlets', NULL, 'work_687f81a5ec4e6.png', 'https://arunahospital.org/'),
(228, 'Pamphlets', NULL, 'work_687f81cc5ed26.png', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `our_works`
--
ALTER TABLE `our_works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `our_works`
--
ALTER TABLE `our_works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=236;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
