-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 20, 2019 at 10:11 PM
-- Server version: 10.1.41-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mine2184_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_nama` varchar(100) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `admin_foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_nama`, `admin_username`, `admin_password`, `admin_foto`) VALUES
(1, 'berupilihen', 'admmkk', '00516eb69e438089a2687d583e497f9c', '1352025327_avatar.png'),
(8, 'Ira Baeha', 'irabaeha', 'c5fde9de2d29789a81d1bc0f16292048', ''),
(9, 'Martin Franklyn Aritonang', 'martin', '925d7518fc597af0e43f5606f9a51512', ''),
(10, 'mkkbersinar234', 'bersinar234', '2013d2c7aa86d05bda9c687f9a49fa44', ''),
(11, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_nama` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_hp` varchar(20) NOT NULL,
  `customer_alamat` text NOT NULL,
  `customer_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_nama`, `customer_email`, `customer_hp`, `customer_alamat`, `customer_password`) VALUES
(3, 'Sardo Septima Lia Simbolon', 'sardoss76@gmail.com', '082168236398', 'Jalan Lingga Raya Gg Harapan Baru ', '4c6700b62d78cc52b32d66f2f7a3b7d3'),
(4, 'Idayanti', 'idayanti27@gmail.com', '082276420327', 'Medan tuntungan ', '4424ba4cb54313cc7a905e41caf0b504'),
(5, 'Daniel', 'berupilihenbrginting@yahoo.com', '081262110476', 'Komplek Belaka Asri No 1', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'Olivia sembiring ', 'oliviasembiring24@gmail.com', '083198894412', 'Jln. Jahe 11 no 7 ', '9474fbcce2ebd22850f1057c59fdf182'),
(7, 'Pinalti Ginting', 'sardoseptimalia18@gmail.com', '081397293216', 'jalan paranggas', '3a4280f0d2ceb042d9451b7fd34f7d64'),
(8, 'Marliana Sari', 'marliana.sari77@gmail.com', '081281988877', 'Abd. Hakim Ujung No. 20', '827ccb0eea8a706c4c34a16891f84e7b'),
(9, '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(10, 'Josua ', 'josuaginting6@gmail.com', '082366057716', 'Medan', 'ff2892a2160ae534f4c9d32b50cc930e'),
(11, 'Marliana Sari', 'marliana.sari77@gmail.com', '081281988877', 'Abd. Hakim Ujung No. 20', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` int(11) NOT NULL,
  `invoice_tanggal` date NOT NULL,
  `invoice_customer` int(11) NOT NULL,
  `invoice_nama` varchar(255) NOT NULL,
  `invoice_hp` varchar(255) NOT NULL,
  `invoice_alamat` text NOT NULL,
  `invoice_provinsi` varchar(255) NOT NULL,
  `invoice_kabupaten` varchar(255) NOT NULL,
  `invoice_kurir` varchar(255) NOT NULL,
  `invoice_berat` int(11) NOT NULL,
  `invoice_ongkir` int(11) NOT NULL,
  `invoice_total_bayar` int(11) NOT NULL,
  `invoice_status` int(11) NOT NULL,
  `invoice_resi` varchar(255) NOT NULL,
  `invoice_bukti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_id`, `invoice_tanggal`, `invoice_customer`, `invoice_nama`, `invoice_hp`, `invoice_alamat`, `invoice_provinsi`, `invoice_kabupaten`, `invoice_kurir`, `invoice_berat`, `invoice_ongkir`, `invoice_total_bayar`, `invoice_status`, `invoice_resi`, `invoice_bukti`) VALUES
(6, '2019-11-29', 0, 'Martin Franklyn Aritonang', '33333333333', 'jl. kapiten Purba 3 Komplek Bekala Asri Blok 5 no 10 Medan', 'Kepulauan Riau', 'Karimun', 'Pos Indonesia - Paket Kilat Khusus', 100, 31000, 46000, 1, '', '1111595213.jpeg'),
(9, '2019-11-30', 4, 'Idayanti', '082276420327', 'jl.bunga rampe 4 medan tuntungan', 'Sumatera Utara', 'Medan', ' - ', 0, 0, 0, 0, '', ''),
(10, '2019-11-30', 5, 'Daniel', '081262110476', 'Komplek Belaka Asri No 1', 'Bali', 'Buleleng', 'Pos Indonesia - Paket Kilat Khusus', 100, 48000, 73000, 0, '', ''),
(11, '2019-11-30', 4, 'Yanti', '082276420327', 'Bunga Rampai IV', 'Sumatera Utara', 'Medan', 'Pos Indonesia - Express Next Day Barang', 400, 12000, 32000, 0, '', ''),
(14, '2019-11-30', 1, 'Osvaldo manurung', '788888', 'jl.sei mencirim gang sejahtera', 'Sumatera Utara', 'Nias Barat', 'Pos Indonesia - Paket Kilat Khusus', 100, 19000, 69000, 0, '', ''),
(15, '2019-12-05', 8, 'Marliana Sari', '081384939220', 'Jalan.Sei Serayu nomor 5', 'Sumatera Utara', 'Deli Serdang', 'Pos Indonesia - Paket Kilat Khusus', 200, 7000, 72000, 3, '', ''),
(16, '2019-12-05', 8, 'Drs. Sakti Bangun', '081281988877', 'Jl. Abdul Hakim Ujung lr V No. 20 Medan', 'Sumatera Utara', 'Karo', 'JNE - REG', 200, 15000, 55000, 1, '', '726227640.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_nama`) VALUES
(1, 'Tidak Berkategori'),
(10, 'Minyak Karo'),
(11, 'Kopi'),
(12, 'Param'),
(13, 'Sembur'),
(14, 'Jamu Karo'),
(15, 'Tawar');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `produk_id` int(11) NOT NULL,
  `produk_nama` varchar(255) NOT NULL,
  `produk_kategori` int(11) NOT NULL,
  `produk_harga` int(11) NOT NULL,
  `produk_keterangan` text NOT NULL,
  `produk_jumlah` int(11) NOT NULL,
  `produk_berat` int(11) NOT NULL,
  `produk_foto1` varchar(255) DEFAULT NULL,
  `produk_foto2` varchar(255) DEFAULT NULL,
  `produk_foto3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`produk_id`, `produk_nama`, `produk_kategori`, `produk_harga`, `produk_keterangan`, `produk_jumlah`, `produk_berat`, `produk_foto1`, `produk_foto2`, `produk_foto3`) VALUES
(17, 'MINYAK KARO 600 ML', 10, 70000, '<h4>\r\n\r\nBerkhasiat mengobati :<b></b><br>1. Capek  dan pegal linu<br>2. Masuk angin / kembung<br>3. Terkilir dan salah urat/ saraf terjepit atau bengkak<br>4. Tersengat binatang berbisa<br>5. Terkena luka bakar<br>6. Luka terjatuh dan kena benda tajam<br>7. Ibu melahirkan<br>8. Bayi supaya merasa nyaman dan enak tidur<br>9. Jamur pada kulit dan kelamin\r\n\r\n<br></h4>', 1000, 600, '1465977004_minyak karo 600.jpg', '', ''),
(18, 'MINYAK KARO 1500 ML', 10, 170000, '<p>Berkhasiat mengobati :<br>1. Capek  dan pegal linu<br>2. Masuk angin / kembung<br>3. Terkilir dan salah urat/ saraf terjepit atau bengkak<br>4. Tersengat binatang berbisa<br>5. Terkena luka bakar<br>6. Luka terjatuh dan kena benda tajam<br>7 .Ibu melahirkan<br>8. Bayi supaya merasa nyaman dan enak tidur<br>9. Jamur pada kulit dan kelamin<br></p>', 100, 1500, '61129557_minyak karo 1500.jpg', '', ''),
(19, 'Param Dingin ( Untuk Bayi & Anak )', 12, 20000, '<h4>Param Dingin / BAYI/  Anak ( Berisikan 45 Butir/pcs)<br>Khasiat :<br>1. Tubuh bersih dan mulus<br>2. Nyenyak tidur<br>3. Mengobati batuk, pilek, demam biasa atau krn imunisasi<br>4. Mengobati gatal, alergi atau biduran<br>5.Membuat tubuh bergairah,  segar dan nyaman<br>6. Menambah selera makan<br>7. Menghindari step<br></h4>', 100, 500, '1188416858_param anakdingn.jpg', '', ''),
(20, 'Param Panas', 12, 20000, '<h5>Param Panas/Dewasa/ Ibu Melahirkan (&nbsp;\r\n\r\nBerisikan 45 Butir/pcs )<br>Khasiat Param panas :<br>1. Mengobati batuk/ pilek dan migrain<br>2. Mengencangkan perut dan mengeluarkan angin<br>3. Membuat tidur nyaman dan nyenyak<br>4.  Mengobati sakit kepala<br>5. Mengembalikan kekebalan tubuh stlh melahirkan<br>6. Menambah selera makan<br>7. Menghilangkan letih, lelah, pegal linu dan tdk semangat<br>,â™¥ Cara pakai : Ambil 4 butir dan cara dengan  air hangat dan diolesi ke badan sehabis mandi atau mau tidur<br></h5>', 100, 200, '2052205758_param panas.jpg', '', ''),
(21, 'MINYAK KARO 200 ML', 10, 25000, '<h4>\r\n\r\nBerkhasiat mengobati :<br>1. Capek  dan pegal linu<br>2. Masuk angin / kembung<br>3. Terkilir dan salah urat/ saraf terjepit atau bengkak<br>4. Tersengat binatang berbisa<br>5. Terkena luka bakar<br>6. Luka terjatuh dan kena benda tajam<br>7 .Ibu melahirkan<br>8. Bayi supaya merasa nyaman dan enak tidur<br>9. Jamur pada kulit dan kelamin\r\n\r\n<br></h4>', 100, 200, '1432100283_MINYAK 200ML.jpg', '', ''),
(22, 'Param Susu', 12, 20000, '<h4>Param Makan/ Susu ( 45 Butir/Pcs)<br>Dimakan langsung atau dicampur ke susu bayi/ anak<br>Khasiat :<br>1. Mengobati menceret dan masuk angin<br>2. Membuat daya tahan tubuh kuat<br>3. Membuat selera makan<br>4. Mengobati batuk/ pilek/ demam<br>5. Mengobati panas dalam/ sariawan<br></h4>', 100, 400, '72216055_param susu.jpg', '', ''),
(23, 'Param Super Hot ( Rematik )', 12, 25000, '<p>Didalam Kemasan berisikan 45 Butir/Pcs</p><p>Khasiat mengobati:</p><p>1. REMATIK, <br>2. ASAM URAT, <br>3. NYERI <br>4.  NGILU<br></p><p>Cara pakai : ambil 3 butir Param, tambahkan air secukupnya, larutkan dan oleskan pada tubuh yg sakit. Kami sertakan foto cara pakai<br></p>', 1000, 250, '1041614569_param rematik.jpg', '', ''),
(25, 'Sembur Beltek', 13, 25000, '<h4>Sembur Beltek ( Sembur Perut )<br></h4><h4>Khasiat : <br>1. Mengobati mag/ asam lambung<br>2. Mengobati sakit kepala ( pening, pusing, migrain)<br>3. Mengobati Batuk , sesak nafas dan sakit paru - paru<br>4. Mengobati beri - beri<br>5. Mengobati panas dalam/ sariawan<br><br>Cara pakai : <br>1. Dikunyah lalu di telan<br>2. Dikunyah lalu  di semburkan ( disapukan) ke perut, dada , punggung dan kepala org yg sakit.<br></h4>', 100, 100, '550998042_semburbeltek.jpg', '', ''),
(26, 'Jamu Karo', 14, 15000, '<h4>Khasiat :<br>1. Menyembuhkan MASUK ANGIN, MUAL, MUNTAH &amp; MENCERET<br>2. Menyembuhkan SESAK NAFAS<br>3. Menyembuhkan SENGGUGUT<br>4. Menyembuhkan SAKIT MAG  &amp; ASAM LAMBUNG. <br>5. Membuat SELERA MAKAN utk semua umur<br><br>Cara Pakai : Diseduh dengan air  minum dgn takaran 1/2 sendok teh  2 x sehari atau di makan  langsung dgn takaran yg sama.<br></h4>', 500, 100, '107691782_jamukaro.jpg', '', ''),
(27, 'Daun Sirih Merah Kering', 1, 25000, '<h4>Daun Sirih Merah Kering<br><br>Khasiat :<br>1. Mengobati Tekanan Darah Tinggi<br>2. Mengobati Payudara Bengkak<br>3. Menghilangkan bau Badan, Mulut dan Miss V<br>4. Mengobati Diabetes<br>5. Mengobati Pnuemonia ( Sakit Area Paru2)<br>6. Mengobati Jantung Koroner<br>7. Melancarkan Saluran Kemih</h4><h4><br>Cara pakai : <br>Masak air setengah liter, masukkan 20 lembar daun sirih, tunggu mendidih , angkat dan dinginkan, saring dan minum airnya habiskan diminum dlm 1 hari<br></h4>', 10, 50, '710276817_IMG-20191130-WA0023.jpg', '', ''),
(28, 'Benalu Kopi Kering', 11, 25000, '<h5>Khasiat :<br>Pencegah atau obat bagi yg sakit :<br>1.TUMOR, <br>2.KANKER, <br>3.KELENJAR GETAH BENING, <br>4.MIOM, <br>5.SAKIT PINGGANG,  <br>6. GINJAL, <br>7.DBD dan TIPES<br>8. KURANG  DARAH<br>Dikeringkan dgn cara yg baik dan higienis<br><br>Cara mengkonsumsi : Masak air 1/2 liter , masukkan 1/7 bagian benalu kopi. Mendidik, dinginkan , saring dan minum dan habiskan hari itu juga<br></h5>', 100, 50, '1767160196_IMG-20191130-WA0022.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `transaksi_id` int(11) NOT NULL,
  `transaksi_invoice` int(11) NOT NULL,
  `transaksi_produk` int(11) NOT NULL,
  `transaksi_jumlah` int(11) NOT NULL,
  `transaksi_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`transaksi_id`, `transaksi_invoice`, `transaksi_produk`, `transaksi_jumlah`, `transaksi_harga`) VALUES
(9, 6, 26, 1, 15000),
(12, 10, 28, 1, 25000),
(13, 11, 22, 1, 20000),
(17, 14, 28, 1, 25000),
(18, 14, 27, 1, 25000),
(19, 15, 28, 1, 25000),
(20, 15, 27, 1, 25000),
(21, 15, 26, 1, 15000),
(22, 16, 26, 1, 15000),
(23, 16, 25, 1, 25000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`produk_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`transaksi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
