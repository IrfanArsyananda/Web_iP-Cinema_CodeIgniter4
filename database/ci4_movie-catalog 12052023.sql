-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2023 at 02:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4_movie-catalog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_data`
--

CREATE TABLE `admin_data` (
  `admin_id` int(11) UNSIGNED NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_avatar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin_data`
--

INSERT INTO `admin_data` (`admin_id`, `admin_username`, `admin_password`, `admin_avatar`, `created_at`, `updated_at`) VALUES
(1, 'keisha.laksita', 'x|~U`G7\'>kIbv*ry', 'default-avatar-image.png', '2002-06-28 10:45:21', '2023-05-12 07:09:09'),
(2, 'uhasanah', '\'(SVfp)!VT', 'default-avatar-image.png', '1992-04-16 01:30:24', '2023-05-12 07:10:32'),
(3, 'vsiregar', '?1ve4#3qYDjD|\"!h', 'default-avatar-image.png', '2009-03-12 00:15:57', '2023-05-12 07:10:32'),
(4, 'mahendra.tantri', 'i\"+mF@vAty`U', 'default-avatar-image.png', '2014-05-09 07:25:17', '2023-05-12 07:10:32'),
(5, 'devi49', '-:%I]@S2`>:Y[ghMgqo.', 'default-avatar-image.png', '2011-07-18 01:23:42', '2023-05-12 07:10:32'),
(6, 'kenzie.widiastuti', 'eA7Y?Zv1n3~>o', 'default-avatar-image.png', '2002-01-15 03:05:22', '2023-05-12 07:10:32'),
(7, 'vwidiastuti', 'A+XMZ{(7zu', 'default-avatar-image.png', '1971-02-24 01:31:51', '2023-05-12 07:10:32'),
(8, 'kartika01', ')Idms;ZAC3~I', 'default-avatar-image.png', '1973-07-24 00:40:13', '2023-05-12 07:10:32'),
(9, 'kasusra.riyanti', 'CP$,]p}tR', 'default-avatar-image.png', '1977-02-14 10:57:05', '2023-05-12 07:10:32'),
(10, 'emin02', ']?{{AP4b5]', 'default-avatar-image.png', '1980-07-24 11:38:13', '2023-05-12 07:10:32'),
(11, 'genta.hariyah', '029ZpG1T|D', 'default-avatar-image.png', '2007-01-12 05:03:47', '2023-05-12 07:10:32'),
(12, 'uriyanti', 'I\'Sq+,kaz&fbw*V)-[', 'default-avatar-image.png', '1977-04-21 00:55:17', '2023-05-12 07:10:32'),
(13, 'farah.kusmawati', 'Mdb*X4?^(O2/9p', 'default-avatar-image.png', '2006-07-27 20:43:54', '2023-05-12 07:10:32'),
(14, 'hani.usada', '$|~,,\\~', 'default-avatar-image.png', '2006-01-15 19:05:23', '2023-05-12 07:10:32'),
(15, 'msalahudin', 'WKo9@#5eR@', 'default-avatar-image.png', '1970-12-11 20:58:14', '2023-05-12 07:10:32'),
(16, 'utami.warsa', '5{Zc5ng@`11,}H', 'default-avatar-image.png', '1987-03-19 03:44:58', '2023-05-12 07:10:32'),
(17, 'legawa.ramadan', 'dKsxK6q', 'default-avatar-image.png', '1978-11-12 13:27:44', '2023-05-12 07:10:32'),
(18, 'kasiyah.prasasta', '(&8La%XyY/bD\\gesp0g', 'default-avatar-image.png', '1986-02-23 17:02:54', '2023-05-12 07:10:32'),
(19, 'melani.janet', '[AniZJn', 'default-avatar-image.png', '2007-04-19 04:24:58', '2023-05-12 07:10:32'),
(20, 'rpurwanti', 'u|%z|e', 'default-avatar-image.png', '2022-06-08 12:37:17', '2023-05-12 07:10:32'),
(21, 'reksa.nuraini', 'UA)g~\'85C>IFtO)U{', 'default-avatar-image.png', '1983-08-25 14:29:02', '2023-05-12 07:10:32'),
(22, 'widya57', 'y!J2=eP=hAVQ=,35uR', 'default-avatar-image.png', '1978-11-22 23:29:36', '2023-05-12 07:10:32'),
(23, 'melani.irsad', '==r]Z;Gc&Lhli|', 'default-avatar-image.png', '2012-03-11 23:37:05', '2023-05-12 07:10:32'),
(24, 'sakura.zulaika', 'q!{.;6P', 'default-avatar-image.png', '2013-06-18 09:10:45', '2023-05-12 07:10:32'),
(25, 'csimanjuntak', 'T,Eyk{r', 'default-avatar-image.png', '2001-05-12 17:29:25', '2023-05-12 07:10:32'),
(26, 'qpratiwi', 'G[^I~lPZ', 'default-avatar-image.png', '1998-03-03 01:48:19', '2023-05-12 07:10:32'),
(27, 'jagapati.damanik', 'sd(\'Uj', 'default-avatar-image.png', '2008-06-23 05:20:49', '2023-05-12 07:10:32'),
(28, 'mulyanto.riyanti', 'lfw)zC,,-[wK', 'default-avatar-image.png', '2011-08-19 08:37:19', '2023-05-12 07:10:32'),
(29, 'amelia.zulkarnain', 'f&D=$Qe', 'default-avatar-image.png', '2001-07-05 19:54:34', '2023-05-12 07:10:32'),
(30, 'zrajasa', 'rpFb6\\F[v', 'default-avatar-image.png', '1995-11-19 02:29:56', '2023-05-12 07:10:32'),
(31, 'sitorus.ilsa', '@>J0[Q\\UC#$dc8', 'default-avatar-image.png', '1971-01-07 23:16:00', '2023-05-12 07:10:32'),
(32, 'ina99', '$#Fk1e3:4dEj', 'default-avatar-image.png', '2003-03-25 04:58:23', '2023-05-12 07:10:32'),
(33, 'jmayasari', '5WTC*B', 'default-avatar-image.png', '1998-01-02 22:25:53', '2023-05-12 07:10:32'),
(34, 'pangestu.alambana', '\"-US=IoP!y>', 'default-avatar-image.png', '1990-07-12 02:11:42', '2023-05-12 07:10:32'),
(35, 'devi72', 'g\"|3D#VozQ`c', 'default-avatar-image.png', '2001-06-03 00:24:12', '2023-05-12 07:10:32'),
(36, 'gasti.prasasta', '|MT~.93$', 'default-avatar-image.png', '1995-09-14 21:05:20', '2023-05-12 07:10:32'),
(37, 'taryani', 'jsQkV0v+`+5}0jDOP\"\'', 'default-avatar-image.png', '1983-01-02 14:04:23', '2023-05-12 07:10:32'),
(38, 'yosef03', '^{E_z7w1B%7$JJ6Y&', 'default-avatar-image.png', '2006-05-02 03:44:55', '2023-05-12 07:10:32'),
(39, 'novi26', 'M>n(gC', 'default-avatar-image.png', '1990-12-29 03:12:13', '2023-05-12 07:10:32'),
(40, 'ghaliyati37', 'k;8%\"1\\Wh3sa!d&-F', 'default-avatar-image.png', '2022-11-14 07:21:44', '2023-05-12 07:10:32'),
(41, 'darmaji.manullang', '[Wwq#!;?o>a]_Qrk9Y', 'default-avatar-image.png', '2000-09-14 14:30:58', '2023-05-12 07:10:32'),
(42, 'almira.novitasari', 'q#7o@A5;k}M|_6FJ', 'default-avatar-image.png', '1993-09-12 10:47:13', '2023-05-12 07:10:32'),
(43, 'haryanto.mumpuni', 'fF^=daG,d2g>d', 'default-avatar-image.png', '2021-06-12 00:28:03', '2023-05-12 07:10:32'),
(44, 'citra85', 'Q1K2K8F2a\\^TCmKy', 'default-avatar-image.png', '2014-05-03 19:01:23', '2023-05-12 07:10:32'),
(45, 'usamah.ophelia', '\'fL2bI;a/\"Q6]n', 'default-avatar-image.png', '1985-11-10 23:09:07', '2023-05-12 07:10:32'),
(46, 'ratih12', 'p:Q{uA1luS^]j{', 'default-avatar-image.png', '1978-06-18 16:29:02', '2023-05-12 07:10:32'),
(47, 'zulfa.budiman', 'O]^.Gli<', 'default-avatar-image.png', '1999-05-02 17:01:23', '2023-05-12 07:10:32'),
(48, 'xsuryono', '9&lloQV[y/x)z){OTx;J', 'default-avatar-image.png', '2020-09-09 23:24:24', '2023-05-12 07:10:32'),
(49, 'uchita.thamrin', '4TW/Y+h.:v;', 'default-avatar-image.png', '1997-07-29 18:35:32', '2023-05-12 07:10:32'),
(50, 'usamah.ophelia', '/(z\"n3w~dm?e%2l~', 'default-avatar-image.png', '1972-09-12 01:12:07', '2023-05-12 07:10:32'),
(51, 'pudjiastuti.eka', 'XZ{m3C]d^_Q%H', 'default-avatar-image.png', '2015-10-16 04:14:37', '2023-05-12 07:10:32'),
(52, 'kurniawan.salimah', ']9[Lc73r7,g6@ZT', 'default-avatar-image.png', '2006-10-04 23:36:06', '2023-05-12 07:10:32'),
(53, 'andriani.unjani', '~`32Ou:(hm@G}', 'default-avatar-image.png', '2000-05-14 09:21:04', '2023-05-12 07:10:32'),
(54, 'msusanti', '2WC]DiJ', 'default-avatar-image.png', '2004-04-10 21:31:47', '2023-05-12 07:10:32'),
(55, 'laksita.sakti', '}O,/V:T', 'default-avatar-image.png', '1976-07-01 12:51:12', '2023-05-12 07:10:32'),
(56, 'gilda.nasyiah', 'U\'9(~t<Rkw1!?}Z#8e', 'default-avatar-image.png', '1971-08-09 13:43:57', '2023-05-12 07:10:32'),
(57, 'ehabibi', 'HdA#s5}^lD.', 'default-avatar-image.png', '1998-01-23 12:48:24', '2023-05-12 07:10:32'),
(58, 'chelsea.hastuti', '+rKp}NtiMx^', 'default-avatar-image.png', '2019-12-24 22:52:17', '2023-05-12 07:10:32'),
(59, 'bnasyiah', 'W>Hgyy)9Vpl-', 'default-avatar-image.png', '2011-03-28 04:44:54', '2023-05-12 07:10:32'),
(60, 'qnarpati', ',$85W\"_', 'default-avatar-image.png', '1995-11-04 03:39:57', '2023-05-12 07:10:32'),
(61, 'melani.galih', 'XW[o#;Ph)', 'default-avatar-image.png', '2005-02-24 00:37:34', '2023-05-12 07:10:32'),
(62, 'maulana.elisa', 'NhJ+PznFOIf/}\"&UI', 'default-avatar-image.png', '2014-08-27 05:05:29', '2023-05-12 07:10:32'),
(63, 'damu96', 'm@/C(Z\\\\G', 'default-avatar-image.png', '1996-09-04 13:17:30', '2023-05-12 07:10:32'),
(64, 'anastasia.nashiruddin', 'kP\"74qnTwC:@|LN(.bCP', 'default-avatar-image.png', '2008-07-02 01:19:04', '2023-05-12 07:10:32'),
(65, 'rahayu.baktianto', 't~4R<7@Ak%Y4ZS;t17Pw', 'default-avatar-image.png', '1994-12-28 22:41:14', '2023-05-12 07:10:32'),
(66, 'yhasanah', ',enn2q?Qd,4(E}^C_u', 'default-avatar-image.png', '1983-01-07 10:03:10', '2023-05-12 07:10:32'),
(67, 'rika.purwanti', '1BHHHds;!+D', 'default-avatar-image.png', '2001-05-23 19:48:51', '2023-05-12 07:10:32'),
(68, 'astuti.taswir', '3x!OX+F8`w\\$`[>&=H<', 'default-avatar-image.png', '2015-11-04 18:26:04', '2023-05-12 07:10:32'),
(69, 'smustofa', '.,i8KC', 'default-avatar-image.png', '1990-05-04 22:41:44', '2023-05-12 07:10:32'),
(70, 'hendra.rahmawati', 'VvJ=1n}', 'default-avatar-image.png', '1997-07-14 23:51:03', '2023-05-12 07:10:32'),
(71, 'namaga.febi', 'pY]ZtuK', 'default-avatar-image.png', '2013-03-08 17:14:12', '2023-05-12 07:10:32'),
(72, 'psetiawan', '\"]$D%b$L5', 'default-avatar-image.png', '1970-07-12 21:30:59', '2023-05-12 07:10:32'),
(73, 'samosir.gandi', 'rvB:,SjDE', 'default-avatar-image.png', '2009-11-07 03:41:25', '2023-05-12 07:10:32'),
(74, 'zalindra29', '@d#E,.YX<FWrr', 'default-avatar-image.png', '2001-01-02 00:35:41', '2023-05-12 07:10:32'),
(75, 'tomi.maryati', '}92Oljz3N^ny|w0u=', 'default-avatar-image.png', '1984-09-13 21:00:54', '2023-05-12 07:10:32'),
(76, 'yolanda.cinta', 'h-!rBU@nn\\', 'default-avatar-image.png', '2010-05-25 08:02:31', '2023-05-12 07:10:32'),
(77, 'prasetyo.elma', 'u+dju^*P{n', 'default-avatar-image.png', '1976-03-11 06:50:54', '2023-05-12 07:10:32'),
(78, 'janet.simbolon', 'v52O8\'zJ[%`', 'default-avatar-image.png', '1995-03-06 01:30:13', '2023-05-12 07:10:32'),
(79, 'pradana.farah', ',7!__`XI}', 'default-avatar-image.png', '1970-08-18 22:14:06', '2023-05-12 07:10:32'),
(80, 'yani84', 'R6Giy:', 'default-avatar-image.png', '1991-09-29 07:47:20', '2023-05-12 07:10:32'),
(81, 'gadang05', '::>Z7;J0t\"J|[JQf0EJ', 'default-avatar-image.png', '2006-02-11 00:57:24', '2023-05-12 07:10:32'),
(82, 'oni61', 'FVD\"NPu!,fn', 'default-avatar-image.png', '1988-05-28 04:04:05', '2023-05-12 07:10:32'),
(83, 'balidin08', 'r@62(=@3BosQ', 'default-avatar-image.png', '2010-03-12 16:59:23', '2023-05-12 07:10:32'),
(84, 'ifujiati', 'Eb:wT(r', 'default-avatar-image.png', '2001-10-13 17:36:42', '2023-05-12 07:10:32'),
(85, 'harjo.natsir', '(n^d69:H])CH\\;$', 'default-avatar-image.png', '2015-05-06 15:19:50', '2023-05-12 07:10:32'),
(86, 'kusmawati.caket', 'e!7%4)>:gFFdKT', 'default-avatar-image.png', '2018-10-03 08:20:36', '2023-05-12 07:10:32'),
(87, 'alika50', 'v6M^9JX~2:yz/V', 'default-avatar-image.png', '2022-06-27 20:52:10', '2023-05-12 07:10:32'),
(88, 'manullang.olivia', 'H:\'I{7XVuuij', 'default-avatar-image.png', '2007-05-28 16:09:09', '2023-05-12 07:10:32'),
(89, 'muni58', '*_;wgW_9', 'default-avatar-image.png', '2010-07-04 06:29:38', '2023-05-12 07:10:32'),
(90, 'usada.mutia', 'w[~D{)X\\C{kE', 'default-avatar-image.png', '2023-01-02 18:19:48', '2023-05-12 07:10:32'),
(91, 'naradi19', 'W9\"!QXsKs5p7~GZ,', 'default-avatar-image.png', '1973-10-17 07:54:01', '2023-05-12 07:10:32'),
(92, 'titin37', '&\\52Emy|m}7{JpO', 'default-avatar-image.png', '1995-06-27 03:14:08', '2023-05-12 07:10:32'),
(93, 'bancar44', 'sS$k3cuCF76v4', 'default-avatar-image.png', '1987-04-06 06:06:43', '2023-05-12 07:10:32'),
(94, 'czulkarnain', 'db^G0[(-|Y[v3_5cg', 'default-avatar-image.png', '1987-02-25 15:46:46', '2023-05-12 07:10:32'),
(95, 'hastuti.nadine', '[&/kG-B5(&\\OtyJ', 'default-avatar-image.png', '1997-01-24 05:03:55', '2023-05-12 07:10:32'),
(96, 'hutasoit.jaga', 'e-0,vH&E+T*+wUKR', 'default-avatar-image.png', '2004-10-31 10:14:36', '2023-05-12 07:10:32'),
(97, 'raina20', '.U%{KUZ-XTS}9h', 'default-avatar-image.png', '2018-05-28 02:33:52', '2023-05-12 07:10:32'),
(98, 'ulva.habibi', 'hQ;DD)2rT]%', 'default-avatar-image.png', '2004-12-10 03:27:26', '2023-05-12 07:10:32'),
(99, 'samosir.zizi', 'Fs.]dZgz)o#t|]s', 'default-avatar-image.png', '1997-06-13 04:43:08', '2023-05-12 07:10:32'),
(100, 'bala.hartati', 'LJpYV&', 'default-avatar-image.png', '2011-03-01 07:57:32', '2023-05-12 07:10:32'),
(101, 'wulandari.puput', 'oLicV<b(y&', 'default-avatar-image.png', '2013-11-01 20:40:54', '2023-05-12 07:10:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-05-12-055004', 'App\\Database\\Migrations\\Account', 'default', 'App', 1683872266, 1);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id_movie` int(11) NOT NULL,
  `title_movie` varchar(255) NOT NULL,
  `slug_movie` varchar(255) NOT NULL,
  `year_movie` year(4) NOT NULL,
  `synopsis_movie` text NOT NULL,
  `cover_movie` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id_movie`, `title_movie`, `slug_movie`, `year_movie`, `synopsis_movie`, `cover_movie`, `created_at`, `updated_at`) VALUES
(1, 'Black Adam', 'black-adam', 2022, 'Berkisah tentang sosok antihero yang mendapatkan kekuatan dari dewa mesir bernama Adam. Ia datang untuk menciptakan keadilan di dunia saat ini.', 'ba.jpg', NULL, '2023-05-11 08:20:30'),
(2, 'Black Panther', 'black-panther', 2022, 'Sebagai Raja baru dari Wakanda, T’Challa (Chadwick Boseman) masih bergumul mengenai perasaannya atas meninggalnya sang ayah, T’Chaka (John Kani). Namun ia kemudian memutuskan untuk meneruskan perjuangan sang ayah. Ketika Wakanda berada dalam ancaman dua musuh berbahaya yang dapat mengancam keselamatan negara, Black Panther berusaha membuktikan diri sebagai raja sejati Wakanda. Ia harus menggunakan kostum barunya serta kekuatannya untuk membela Wakanda dan negara lainnya.', 'bpwf.jpg', NULL, '2023-05-08 19:17:03'),
(10, 'Ant-man : Quantumania', 'ant-man-quantumania', 2023, 'Scott Lang (Paul Rudd), Hope Van Dyne (Evangeline Lilly) Dr. Hank Pym (Michael Douglas) dan Janet Van Dyne (Michelle Pfeiffer) menjelajahi Alam Kuantum, tempat mereka bertemu dengan makhluk aneh dan memulai petualangan yang melampaui batas yang mereka pikir mungkin.', '1683865353_b565ad6e646fffe02f8c.jpeg', '2023-02-23 09:30:01', '2023-05-12 04:22:33'),
(23, 'Evil Dead Rise', 'evil-dead-rise', 2023, 'Evil Dead Rise menceritakan kisah mengejutkan tentang dua saudara perempuan yang terasing yang reuninya dipersingkat oleh munculnya setan yang merasuki manusia, mendorong mereka ke dalam pertempuran utama untuk bertahan hidup saat mereka menghadapi versi keluarga paling mengerikan yang bisa dibayangkan.', '1683853550_99a4051a8064eaa93798.jpeg', '2023-05-12 01:05:50', '2023-05-12 01:05:50'),
(24, 'Guardian of The Galaxy 3', 'guardian-of-the-galaxy-3', 2023, 'Film ketiga akan melanjutkan kisah petualangan Peter Quill/Star Lord (Chris Pratt) dan teman-temannya sebagai penjaga galaksi.Masih berduka karena kehilangan Gamora (Zoe Saldana), Peter mengumpulkan timnya untuk kembali melindungi alam semesta. Misi kali ini tidaklah mudah, jika tidak berhasil, maka akan menjadi akhir bagi para Guardians.', '1683865363_ce876961924af12f1226.jpeg', '2023-05-12 01:11:11', '2023-05-12 04:22:43'),
(25, 'Buya Hamka', 'buya-hamka', 2023, 'Periode dimana Hamka menjadi pengurus Muhammadiyah di Makassar dan berhasil memberikan kemajuan yang pesat pada organisasi tersebut. Hamka juga mulai menulis sastra koran dan cerita romannya disukai para pembaca. Hamka dan keluarganya pindah ke Medan, karena Hamka diangkat menjadi pemimpin redaksi majalah Pedoman Masyarakat. Posisi ini membuat Hamka mulai berbenturan dengan pihak Jepang hingga harus ditutup karena dianggap berbahaya. Kehidupan keluarga Hamka pun terguncang ketika salah satu anak mereka meninggal karena sakit. Usaha-usaha Hamka untuk melakukan pendekatan pada pihak Jepang malah dianggap sebagai penjilat dan dimusuhi, sehingga Hamka diminta untuk mundur dari jabatannya sebagai pengurus Muhammadiyah.', '1683858504_56268e640a9e54d0f5ef.jpeg', '2023-05-12 02:28:24', '2023-05-12 02:28:24'),
(27, 'Qorin', 'qorin', 2022, 'Satu persatu penghuni asrama putri kerasukan. Zahra dan Yolanda berusaha mengungkap keganjilan yang terjadi pada teman-teman mereka, sampai pada satu malam, semua Jin Qorin penghuni asrama putri bangkit mengancam nyawa.', '1683865494_914df36ff490535b73f4.jpeg', '2023-05-12 04:24:54', '2023-05-12 04:24:54'),
(28, 'Fast X', 'fast-x', 2023, 'Fast X adalah sebuah film aksi asal Amerika tahun 2023 yang disutradarai Louis Leterrier dari skenario Dan Mazeau dan Justin Lin, berdasarkan cerita karangan Mazeau, Lin, dan Zach Dean. Film ini sekuel dari F9, dan seri keseuluh Fast & Furious.', '1683865509_15815ff7d3ce92addad6.jpeg', '2023-05-12 04:25:09', '2023-05-12 04:25:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_data`
--
ALTER TABLE `admin_data`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id_movie`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_data`
--
ALTER TABLE `admin_data`
  MODIFY `admin_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id_movie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
