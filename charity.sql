-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2015 at 03:42 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `charity`
--

-- --------------------------------------------------------

--
-- Table structure for table `charity1`
--

CREATE TABLE IF NOT EXISTS `charity1` (
  `iddcharity` int(11) NOT NULL,
  `namacharity` varchar(100) NOT NULL,
  `ketcharity` text NOT NULL,
  `jumlahskg` int(11) NOT NULL,
  `target` int(11) NOT NULL,
  `jmlhdonatur` int(11) NOT NULL,
  `urlgambar` text NOT NULL,
  `usernameowner` varchar(100) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `rekening` varchar(30) NOT NULL,
  `lokasi` text NOT NULL,
  `Status` int(11) NOT NULL,
  `summary` text NOT NULL,
  `tanggalstart` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `charity1`
--

INSERT INTO `charity1` (`iddcharity`, `namacharity`, `ketcharity`, `jumlahskg`, `target`, `jmlhdonatur`, `urlgambar`, `usernameowner`, `contact`, `rekening`, `lokasi`, `Status`, `summary`, `tanggalstart`) VALUES
(3, 'Blood Donation of HMIK', 'Blood donations save lives every day. They are used in a wide variety of different situations and to treat a large number of different illnesses and conditions.\nwe HMIK proudly present this event. please help and donate :)', 1410000, 3000000, 11, 'https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-xfp1/v/t1.0-9/12360169_1128237893853042_5431610160409399583_n.jpg?oh=b558730fd9fd55c20322f6a901458bb8&oe=57193934&__gda__=1461569892_d5235df9af25169b066e4f656ef85bfd', 'riamay', '+6281234455', '1234567', 'Telkom University', 0, 'Blood donations save lives every day.', '2015-12-01'),
(4, 'Donor Buku', 'Donasi Buku ini digunakan untuk melengkapi buku untuk jurusan ilmu komputasi dikarenakan dari kampus sedikit sekali buku untuk ilmu komputasi', 72454564, 50000000, 10, 'https://pbs.twimg.com/profile_images/3117497286/4b6b14e0501cc6b05246ea63d6bb23a0.jpeg', 'intan', '+62879097876619', '0986687997', 'Institut Telkom Bandung', 0, 'Donasi Buku ini digunakan untuk melengkapi buku untuk jurusan ilmu komputasi dikarenakan dari kampus sedikit sekali buku untuk ilmu komputasi', '0000-00-00'),
(5, 'Panti Yatim Indonesia', 'Di Seluruh Indonesia, jumlah anak terlantar saat ini mencapai 5,4 juta anak (data Kementrian Sosial RI, 2010). Mencermati dan menganalisa data tersebut, membawa kita pada kesimpulan bahwa pemeliharaan dan pendidikan anak terlantar adalah salah satu agenda yang memerlukan Prioritas penanganan pemerintah di masa yang akan datang.', 825000, 900000, 32, 'http://3.bp.blogspot.com/-MWcD5yvGN7I/UqAgHVbAP4I/AAAAAAAAAAY/araxMahv8wI/s1600/logo+pyi.jpg', 'phela', '081-2222-44-222', '346 181 4300', 'Kantor Pusat : Jl. Terusan Buah Batu no.207 Kec.Bojongsoang – Kab. Bandung', 0, 'jumlah anak terlantar saat ini mencapai 5,4 juta anak', '0000-00-00'),
(6, 'Donation for Masjid Syamsul Ulum (MSU) Telkom University', 'the one and only historic mosque in Telkom university needs your help for donation in charge of care and cleanliness cost\nIf you are interested ,  click here\n\n\nSyamsul Ulum Mosque in Telkom University was established on September 28, 1994 which marked the first pole erection by the ministry of Education and Culture – at that time – Prof Dr.Ing. Wardiman Djojonegoro. Mosque Syamsul ''Ulum who stands on the east campus area with an area of 1128.96 m2 with a capacity of 2,000 worshipers. This mosque is an integral part of the campus of the Faculty of Engineering, University of Telkom, in an effort to educate the Indonesian people fully. \n\nWith such spacious area, it’s hard to clean it by one person. Here, we need your help in charge of helping us with paying  the hired cleaning service that will keep the precious mosque to be clean . please help us if you’re interested.', 270000, 30000000, 2, 'http://soc.telkomuniversity.ac.id/wp-content/uploads/2014/08/img_20130320_1100361.jpg', 'intan', '+62 22 7564108', '10020', 'Telkom University', 0, 'the one and only historic mosque in Telkom university needs your help for donation ', '0000-00-00'),
(7, 'Giving older people the opportunity to live fulfilled and respected lives', 'We will support older people especially those in need due to physical or mental frailty, isolation or poverty.\r\nWe will do this by providing high quality caring services, personalised to the needs of the individual and integrated with local communities.\r\nWe are dedicated to ending loneliness and we need your help. There are lots of fantastic ways to raise money and have fun at the same time – the only limitation really is your own imagination! \r\n', 3400000, 10000000, 1, 'http://www.thevalleyclinic.co.uk/wp-content/uploads/2014/08/old_people_group.png', 'intan', '022 7881 1161 ', '789099887', 'Bandung', 0, 'Giving older people the opportunity to live fulfilled and respected lives', '0000-00-00'),
(8, 'World Wide Fund for Nature (WWF) Indonesia', 'WWF Indonesia started planting forests through NewTrees and MyBabytree from 2008 and has planted trees in a forest area of 1016.3 hectares. For this initiative, WWF Indonesia is working with local farmer groups starts from seedling process all the way to monitoring the trees ', 2500000, 10000000, 100, 'http://www.travindy.com/wp-content/uploads/2014/12/wwf-logo.jpg', 'riamay', '+6221 5761076', '2322 4341 1156', 'Simatupang Tower 2 Unit C 7 Floor Jl. Letjen TB. Simatupang Kav. 38 Jakarta Selatan 12540 Indonesia', 0, 'WWF Indonesia started planting forests through NewTrees and MyBabytree', '0000-00-00'),
(9, 'Animal Rescue an Adoption Center', 'please donate\nwe focuses our activities on:\n- Raising assistance to the parties who need (fundraising, adoption, sterilization, publications)\n- Education for the domestic animal population control and improved health\n- Build a network / community of animal lovers\n- Carry out social activities with the purpose of improving the welfare of pet owners\n', 120000, 9876000, 3, 'https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-xfp1/v/t1.0-9/10011321_1128231840520314_2085743604462505560_n.jpg?oh=c55a4e49d460e3578ec467ce827bc8cc&oe=571E0FA7&__gda__=1461536503_22e62e35e0ba2f4456e46787552810ac', 'riamay', '021 5941 0240', '4568 4590 3454', ' Jl. Raya Tajem No.3 Maguwoharjo, Depok, Sleman ', 0, 'Animal Rescue an Adoption Center', '0000-00-00'),
(10, 'Borneo Orang Utan Survival foundation', 'We need your support to preserve the orangutans and their habitat. \nJoin our mailing list to receive regular updates and information from us.\n\nThank you!', 0, 15000000, 0, 'http://www.imperiumcapital.com/SiteAssets/Pages/CSR/BOSF%20logo.png', 'riamay', '+62 (251) 831 4', '134562376', 'Jalan Papandayan No. 10 Bogor 16151', 0, 'We need your support to preserve the orangutans ', '0000-00-00'),
(11, 'Donation for kids cancer YKAKI Indonesia', 'We await your helping hands all together in an effort to tackle childhood cancer in Indonesia, both in the appropriate information regarding early detection, providing a means of accommodation / shelter, education for children who are under treatment in hospital. Similarly, advocacy / assistance of the parents when they need it.', 19435600, 650000000, 28, 'https://pbs.twimg.com/profile_images/612840265980645377/XdKfavHK.png', 'intan', '+62 21 4287255', '042801000045307', 'No.10 A, Jalan Percetakan Negara 9, Cemp. Putih, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10570, Indonesia', 0, 'We await your helping hands..', '0000-00-00'),
(12, 'Donation for Peduli Kucing', 'Cat care is intended for those who are still struggling and prove to others that care about the cat is a noble deed. Every cat of any kind may be man''s best friend, and is entitled to protection of the very best care. For the life is very precious. Let''s together we learn to be a responsible cat owner.', 1500000, 54000000, 4, 'http://2.bp.blogspot.com/-RO6yxhQu-HI/UJsr5HcYKzI/AAAAAAAACEo/gb66Z6r3hF0/s220/logo%2Bkotak.jpg', 'phela', '+62879097876', '143567842', 'Jl. Gajah Mada 19-26. Gajah Mada Plaza 58 Lt 1 021-63862713.', 0, 'Cat care is intended for those who are still struggling and prove to others that care about the cat ', '0000-00-00'),
(13, 'Donation for Ragunan Zoo', 'Ragunan Zoo, a 147 hectares park and home for 2.000 specimen and are covered more than 50.000 trees those become environment are cool and comfort. The lands are designed and are built and some are still developing on lead to a modern zoo as identity of Jakarta city.\nwe need a help with our animals foods funds. please donate', 3400000, 24300000, 12, 'https://upload.wikimedia.org/wikipedia/commons/7/78/Ragunan_Zoo_Gate.jpg', 'phela', '(021) 7884 7114', '780 5280', 'Jl. Harsono RM. No. 1, Ragunan, Pasar Minggu, Jakarta Selatan 12550 Indonesi', 0, 'Ragunan Zoo, a 147 hectares park and home for 2.000 specimen ', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE IF NOT EXISTS `donasi` (
  `usernamedonatur` varchar(100) NOT NULL,
  `jumlahdonasi` double NOT NULL,
  `idcharity` int(11) NOT NULL,
  `statusdonasi` int(11) NOT NULL,
  `iddonasi` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`usernamedonatur`, `jumlahdonasi`, `idcharity`, `statusdonasi`, `iddonasi`) VALUES
('', 1234567, 4, 1, 1),
('phela', 10000000, 4, 1, 2),
('phela', 10000000, 4, 1, 3),
('phela', 10000000, 4, 1, 4),
('phela', 9999999, 4, 1, 5),
('phela', 9999999, 4, 1, 6),
('phela', 88888, 4, 1, 7),
('intan', 35000, 5, 1, 8),
('phela', 1111111, 4, 1, 9),
('riamay', 120000, 6, 1, 10),
('riamay', 340000, 5, 1, 11),
('riamay', 345600, 11, 1, 12),
('riamay', 1110000, 3, 1, 13),
('riamay', 20000, 4, 1, 14),
('riamay', 2500000, 8, 1, 15),
('riamay', 3400000, 7, 1, 16),
('riamay', 10000, 9, 1, 17),
('riamay', 100000, 9, 1, 18),
('riamay', 1200000, 11, 1, 19),
('phela', 10000000, 11, 1, 20),
('phela', 7890000, 11, 1, 21),
('phela', 10000, 3, 0, 22),
('phela', 150000, 6, 1, 23),
('phile', 500000, 6, 0, 24),
('phile', 500000, 10, 0, 25),
('intan', 5000, 3, 0, 26);

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE IF NOT EXISTS `gambar` (
  `idcharity` int(11) NOT NULL,
  `urlgambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`idcharity`, `urlgambar`) VALUES
(10, 'http://www.vico.co.id/sites/ext/Style%20Library/Images/BOS/BOS1.jpg'),
(10, 'http://www.vico.co.id/sites/ext/Style%20Library/Images/BOS/BOS1.jpg'),
(10, 'http://www.vico.co.id/sites/ext/Style%20Library/Images/BOS/BOS1.jpg'),
(10, 'http://www.vico.co.id/sites/ext/Style%20Library/Images/BOS/BOS1.jpg'),
(10, 'http://www.vico.co.id/sites/ext/Style%20Library/Images/BOS/BOS1.jpg'),
(10, 'http://www.vico.co.id/sites/ext/Style%20Library/Images/BOS/BOS1.jpg'),
(10, 'http://www.vico.co.id/sites/ext/Style%20Library/Images/BOS/BOS1.jpg'),
(10, 'http://www.vico.co.id/sites/ext/Style%20Library/Images/BOS/BOS1.jpg'),
(10, 'http://www.vico.co.id/sites/ext/Style%20Library/Images/BOS/BOS1.jpg'),
(10, 'http://www.vico.co.id/sites/ext/Style%20Library/Images/BOS/BOS1.jpg'),
(10, 'http://www.vico.co.id/sites/ext/Style%20Library/Images/BOS/BOS1.jpg'),
(10, 'http://www.vico.co.id/sites/ext/Style%20Library/Images/BOS/BOS1.jpg'),
(10, 'http://www.vico.co.id/sites/ext/Style%20Library/Images/BOS/BOS1.jpg'),
(10, 'http://www.vico.co.id/sites/ext/Style%20Library/Images/BOS/BOS1.jpg'),
(10, 'http://www.vico.co.id/sites/ext/Style%20Library/Images/BOS/BOS1.jpg'),
(10, 'http://www.vico.co.id/sites/ext/Style%20Library/Images/BOS/BOS1.jpg'),
(10, 'http://www.vico.co.id/sites/ext/Style%20Library/Images/BOS/BOS1.jpg'),
(10, 'http://www.vico.co.id/sites/ext/Style%20Library/Images/BOS/BOS1.jpg'),
(10, 'http://www.vico.co.id/sites/ext/Style%20Library/Images/BOS/BOS1.jpg'),
(10, 'http://www.vico.co.id/sites/ext/Style%20Library/Images/BOS/BOS1.jpg'),
(10, 'http://www.vico.co.id/sites/ext/Style%20Library/Images/BOS/BOS1.jpg'),
(12, 'http://eventsid.co/wp-content/uploads/2015/09/POSTER.jpg'),
(12, 'http://d.gr-assets.com/books/1382339331l/18692676.jpg'),
(12, 'http://d22r54gnmuhwmk.cloudfront.net/photos/4/sv/vl/mUSvVLNuyqMLExi-200x200-square.jpg?1433519840'),
(15, 'a'),
(15, 'a'),
(15, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `nama` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `pin` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nama`, `username`, `password`, `pin`, `email`) VALUES
('Intan Raharni Wijaya', 'intan', 'intan', '67890', 'intan.raharni@gmail.com'),
('intan', 'intanraharni', 'intan678901', '67890', 'intan.raharni@gmail.com'),
('Izzatul Ummah', 'izzatul', '1234', '1234', 'izzatul.ummah@gmail.com'),
('Irba Fairuz Thufailah', 'phela', 'phela', '5807', 'phela@gmail.com'),
('Mahadika Philetas R', 'phile', 'phile', '1234', 'phile@phile.com'),
('ria may dewi', 'riamay', 'anakgembala', '5807', 'riamaydewi@gmail.com'),
('aaaaaaa', 'veve', '1234', '', ''),
('Patma Oktaviana', 'vian', 'vian', '1234', 'patma@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `charity1`
--
ALTER TABLE `charity1`
  ADD PRIMARY KEY (`iddcharity`);

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`iddonasi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `charity1`
--
ALTER TABLE `charity1`
  MODIFY `iddcharity` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `iddonasi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
