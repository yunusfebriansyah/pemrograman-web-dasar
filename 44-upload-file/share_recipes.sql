-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 19, 2022 at 09:19 PM
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
-- Database: `share_recipes`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `is_active`) VALUES
(1, 'Makanan', 1),
(2, 'Minuman', 1),
(3, 'Cemilan', 1),
(4, 'Sayur', 1);

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `materials` text NOT NULL,
  `procedures` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL DEFAULT 'assets/thumbs/thumb.jpg',
  `is_active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `title`, `user_id`, `category_id`, `materials`, `procedures`, `thumbnail`, `is_active`) VALUES
(1, 'Membuat Pisang Crispy', 1, 3, '<ul><li>5 buah pisang kepok yang sudah matang atau pisang lain sesuai selera</li><li>Minyak goreng secukupnya</li><li>100 gram tepung terigu serbaguna</li><li>2 sendok makan tepung beras</li><li>Air matang secukupnya</li><li>1 butir kuning telur dikocok lepas</li><li>1 sendok makan gula halus</li><li>1/4 sendok teh garam</li><li>1/2 sendok teh baking powder</li></ul>', '<ol><li> bersih pisang dan potong menjadi 2 bagian. Sisihkan.</li><li>Buat bahan kremesan terlebih dahulu dengan mencampurkan tepung sagu, tepung beras, garam, kuning telur, gula halus, dan baking powder.</li><li>Tuang air ke dalam adonan kremesan secukupnya dan aduk hingga larut dan jangan terlalu kental. Sisihkan bahan kremesan.</li><li>Sedangkan untuk membuat bahan pencelup pisang, siapkan mangkuk dan campurkan tepung terigu, tepung beras, gula halus, dan garam.</li><li>Lalu tuang air matang secukupnya dan aduk rata hingga semua bahan larut dan mengental.</li><li>Panaskan minyak yang cukup banyak untuk menggoreng pisang.</li><li>Setelah minyak panas, tuang bahan kremesan ke dalam wajan secara melingkar.</li><li>Ambil 1 buah pisang dan celupkan ke bahan pencelup dan goreng di tengah kremesan dengan api sedang.</li><li>Lipat pisang dengan kremesan dan goreng sampai matang berwarnba kuning keemasan. Angkat dan tiriskan pisang goreng crispy.</li><li>Lakukan proses di atas sampai pisang dan adonan habis.</li><li>Pisang goreng crispy siap disajikan.</li></ol>', 'assets/thumbs/thumb.jpg', 1),
(2, 'Es Pisang Coklat', 1, 2, '<ul><li>10 buah pisang ambon atau pisang jenis lain yang sudah matang, potong menjadi 2 bagian</li><li>20 buah stik es cream atau tusuk sate</li><li>150 gram coklat batangan, potong-potong kecil</li><li>150 gram margarin</li><li>50 gram gula pasir jika coklatnya kurang manis</li><li>Topping sesuai selera (meses warna-warni, irisan kacang almond, kacang tanah cacah)</li></ul>', '<ol><li>Siapkan semua bahan yang dibutuhkan untuk membuat es pisang coklat.</li><li>Kupas pisang dan potong menjadi 2 bagian.</li><li>Lalu tusukkan pisang dengan tusuk sate atau stik es krim. Masukkan pisang ke dalam freezer minimal selama 1 jam. Lebih lama di freezer maka </li>lebih baik. Sisihkan.<li>Sambil menunggu pisang dingin dan agak mengeras, selanjutnya tinggal buat lapisan coklatnya.</li><li>Campurkan potongan coklat batang, margarin, dan gula pasir dalam wadah anti panas. Lalu lelehkan coklat dengan cara di tim di atas air </li>mendidih.<li>Rebus air sampai mendidih dalam panci terlebih dahulu. Setelah mendidih, taruh mangkuk anti panas berisi coklat di atas air mendidih dan </li>aduk-aduk coklat sampai cair. Pastikan tidak ada setetes air atau uap yang masuk ke dalam coklat.<li>Setelah coklat meleleh, sisihkan biar adonan coklat dingin.</li><li>Setelah 1 jam, ambil pisang dari dalam freezer lalu celupkan ke dalam lelehan coklat secara merata. Bisa celupkan berkali-kali agar lapisan </li>coklat tebal.<li>Taruh pisang di atas plastik atau wadah datar lalu taburi dengan topping sesuai selera.</li><li>Masukkan pisang coklat ke dalam freezer lagi dan tunggu hingga coklat beku dan mengeras.</li><li>Jika coklat sudah mengeras, es pisang coklat siap disajikan untuk keluarga tercinta.</li></ol>', 'assets/thumbs/thumb.jpg', 1),
(3, 'Keripik Pisang', 2, 3, '<ul><li>1 sisir pisang kepok muda yang masih hijau</li><li>1 sendok makan garam atau sesuai selera</li><li>5 butir bawang putih yang telah dihaluskan (opsional)</li><li>1/2 sendok teh penyedap rasa</li><li>Minyak goreng secukupnya</li><li>Air secukupnya untuk merendam</li></ul>', '<ol><li>Kupas pisang dan cuci hingga bersih agar tidak lengket karena getahnya. Lalu iris-iris tipis panjang melintang menggunakan pisau atau alat perajang pisang. </li><li>Siapkan air perendam pisang yaitu campurkan air secukupnya dengan penyedap rasa, garam, dan bawang putih yang telah dihaluskan.</li><li>Masukkan pisang ke dalam air rendaman dan diamkan selama 15 menit agar bumbu meresap. Angkat dan tiriskan.</li><li>Panaskan cukup banyak minyak untuk menggoreng.</li><li>Goreng keripik pisang dengan api sedang sampai kering dan berwarna kuning keemasan. Angkat dan tiriskan.</li><li>Simpan keripik ke dalam toples yang kedap udara agar selalu renyah.</li><li>Keripik pisang gurih siap disajikan kapanpun sebagai cemilan.</li></ol>', 'assets/thumbs/thumb.jpg', 1),
(4, 'Molen Pisang', 3, 3, '<ul><li>Pisang kepok atau pisang raja matang secukupnya</li><li>Minyak goreng secukupnya</li><li>250 gram tepung terigu serbaguna</li><li>50 gram gula halus</li><li>1/2 sendok teh garam</li><li>1/2 sendok teh vanili bubuk</li><li>1/2 sendok teh baking powder</li><li>1 butir telur dikocok lepas</li><li>3 sendok makan margarin dicairkan</li><li>Air secukupnya</li></ul>', '<ol><li>Siapkan semua bahan yang dibutuhkan untuk membuat molen pisang.</li><li>Kupas pisang sampai bersih lalu potong-potong sesuai selera untuk isian. sisihkan.</li><li>Siapkan wadah besar dan campurkan tepung terigu, gula halus, garam, vanili bubuk, dan baking powder. aduk rata.</li><li>Masukkan telur kocok dan aduk rata kembali.</li><li>Tuang margarin cair dan uleni adonan hingga kalis dan adonan halus. jika terlalu kering bisa tambahkan sedikit air sampai adonan lentur dan benar-benar kalis.</li><li>Setelah adonan kulit jadi, bentuk bulat dan tutup adonan dengan kain bersih atau plastik wrap. diamkan adonan selama 30 menit.</li><li>Setelah 30 menit, uleni lagi adonan kulit dan bagi menjadi beberapa bagian dan bentuk bulat-bulat kecil.</li><li>Gilas tipis adonan kulit menjadi memanjang lalu ambil 1 potong pisang dan balut pisang secara melingkar dengan adonan yang sudah di gilas tadi.</li><li>Lakukan proses di atas sampai semua bahan habis.</li><li>Panaskan banyak minyak dalam wajan untuk menggoreng dengan api kecil.</li><li>Goreng adonan molen pisang sampai matang kering berwarna kuning kecoklatan. angkat dan tiriskan.</li><li>Molen pisang renyah siap disajikan selagi hangat.</li></ol>', 'assets/thumbs/thumb.jpg', 1),
(5, 'Nasi Goreng Spesial', 3, 1, '<ul><li>3 mangkok nasi putih kalau bisa nasi yang pera</li><li>1 potong daging ayam bagian dada atau paha</li><li>3 butir telur dikocok lepas</li><li>5 buah bakso diiris</li><li>100 gram udang tanpa kulit</li><li>2 batang daun bawang diiris tipis</li><li>Kecap manis secukupnya</li><li>Garam secukupnya</li><li>Penyedap rasa secukupnya (opsional)</li><li>Minyak goreng secukupnya untuk menumis</li><li>Bawang merah goreng secukupnya untuk taburan</li><li>6 butir bawang merah</li><li>3 siung bawang putih</li><li>6 buah cabai rawit merah</li><li>5 buah cabai merah besar atau keriting</li></ul>', '<ol><li>Cuci bersih daging paha atau dada ayam sampai matang dan suwir-suwir halus. Sisihkan.</li><li>Panaskan minyak secukupnya untuk menumis. Tumis bumbu halus sampai benar-benar harum. Sisihkan bumbu di pinggir wajan.</li><li>Goreng telur yang sudah kamu kocok lepas menjadi orak-arik. Baru campurkan telur orak-arik dengan bumbu halus tadi dalam wajan.</li><li>Tambahkan suwiran daging ayam, irisan bakso, dan udang. Tumis semua bahan sampai udang matang dan berubah warna.</li><li>Baru tambahkan nasi putih dan aduk nasi hingga tercampur rata.</li><li>Bumbui dengan kecap manis, garam, dan penyedap rasa secukupnya. Aduk sampai nasi berubah warna menjadi kecoklatan, matang, dan bumbu meresap. Jangan lupa koreksi rasa sampai benar-benar pas.</li><li>Setelah matang, tambahkan potongan daun bawang dan aduk nasi lagi sampai daun bawang layu. Baru angkat dan taruh di piring.</li><li>Taburkan bawang goreng sesuai selera di atasnya. (Kamu juga bisa menambah irisan mentimun, telur ceplok, atau kerupuk).</li><li>Nasi goreng spesial siap disajikan.</li></ol>', 'assets/thumbs/thumb.jpg', 1),
(6, 'abc', 2, 4, '<ul><li>Bahan1</li><li>bahan2</li><li>bahan3</li></ul>', '<ol><li>Langkah1</li><li>langkah2</li><li>langkah3</li></ol>', 'assets/thumbs/thumb.jpg', 1),
(7, 'bcd', 2, 2, '<ul><li>bahan1</li><li>bahan2</li></ul>', '<ul><li>langkah1</li><li>langkah2</li><li>langkah3</li></ul>', 'assets/thumbs/thumb.jpg', 1),
(9, 'Diganti judulnya', 2, 4, '<p>ini adalah bahan yang diperlukan resep ganti judulnya</p>', '<p>ini adalah cara pembuatan ganti judulnya</p>', 'assets/thumbs/thumb.jpg', 1),
(11, 'Resep Nasi Padang', 2, 1, '<ul><li>Ayam - 500 gram</li><li>Serai, memarkan - 2 batang</li><li>Lengkuas - 2 ruas jari</li><li>Daun jeruk purut - 4 lembar</li><li>Santan kental - 500 ml</li><li>Garam - secukupnya</li><li>Gula - secukupnya</li></ul>', '<ol><li>Gulai ayam: Haluskan semua bumbu halus, kemudian tumis bersama serai, lengkuas dan daun jeruk sampai harum.</li><li>Masukkan ayam, aduk rata. Masak sampai ayam berubah warna.</li><li>Masukkan santan, bumbui dengan garam dan gula hingga rasanya pas.</li><li>Masak dengan api kecil sampai ayam matang dan kuah mengental.</li><li>Sambalado Hijau: Rebus semua bahan sambal sampai lunak, cabai, tomat dan bawang merah. Kemudian uleg kasar sambal, tambahkan garam dan gula sesuai selera. Tumis sebentar dengan minyak goreng. Sambal siap disajikan.</li><li>Tata nasi di piring saji, tambahkan daun singkong rebus, telur dadar padang, sambalado hijau dan gulai ayam beserta kuahnya.</li></ol>', 'assets/thumbs/2022121921175663a0729448036.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `photo`, `is_active`) VALUES
(1, 'Yunus Febriansyah', 'yunusaja', 'yunusjuga', NULL, 1),
(2, 'Mbak Siti', 'siti', 'siti', NULL, 1),
(3, 'Pak Budi', 'budi', 'budi', NULL, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_recipes`
-- (See below for the actual view)
--
CREATE TABLE `vw_recipes` (
`id` int(11)
,`title` varchar(255)
,`user_id` int(11)
,`user_name` varchar(255)
,`category_id` int(11)
,`category_name` varchar(255)
,`materials` text
,`procedures` text
,`thumbnail` varchar(255)
);

-- --------------------------------------------------------

--
-- Structure for view `vw_recipes`
--
DROP TABLE IF EXISTS `vw_recipes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_recipes`  AS SELECT `recipes`.`id` AS `id`, `recipes`.`title` AS `title`, `recipes`.`user_id` AS `user_id`, `users`.`name` AS `user_name`, `recipes`.`category_id` AS `category_id`, `categories`.`name` AS `category_name`, `recipes`.`materials` AS `materials`, `recipes`.`procedures` AS `procedures`, `recipes`.`thumbnail` AS `thumbnail` FROM ((`recipes` join `users` on(`recipes`.`user_id` = `users`.`id`)) join `categories` on(`recipes`.`category_id` = `categories`.`id`)) WHERE `recipes`.`is_active` = 1 AND `categories`.`is_active` = 1 AND `users`.`is_active` = 11  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `recipes`
--
ALTER TABLE `recipes`
  ADD CONSTRAINT `recipes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `recipes_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
