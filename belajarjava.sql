-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2018 at 09:48 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajarjava`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `pesan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `name`, `email`, `subject`, `pesan`) VALUES
(4, 'rian', 'logammalang@gmail.com', '123', '123123'),
(5, 'fajri', 'logammalang@gmail.com', '123', '21312312'),
(6, 'fajri', 'logammalang@gmail.com', 'qweqw', 'web anda mantab'),
(7, 'fajri', 'hari17ti@mahasiswa.pcr.ac.id', 'jkl', 'kjlkj'),
(8, 'rian', 'logammalang@gmail.com', 'jelek', 'web anda top'),
(9, 'rian', 'logammalang@gmail.com', 'q3eqeqwe', 'wqeqwe123123'),
(10, 'fajri', 'hari17ti@mahasiswa.pcr.ac.id', 'qweqw', '12312'),
(11, 'hari', 'hari17ti@mahasiswa.pcr.ac.id', 'web andaa', 'mantab'),
(12, ' fajri', 'fajri@gmail.com', 'sfsfe', 'vdsvdsgvd'),
(13, 'fajri', 'hari17ti@mahasiswa.pcr.ac.id', 'mantab', '12312312');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `regis`
--

CREATE TABLE `regis` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `pass_user` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `usia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regis`
--

INSERT INTO `regis` (`id`, `nama_user`, `pass_user`, `email_user`, `usia`) VALUES
(1, 'Hari Kusryanto', 'hari123', 'logammalang@gmail.com', 0),
(2, 'Hari Kusryanto', 'a', 'logammalang@gmail.com', 0),
(3, 'Hari Kusryanto', '23123', '12', 0),
(4, 'Hari Kusryanto', '123', '15', 0),
(5, 'Hari Kusryanto', '12321', 'logammalang@gmail.com', 0),
(6, 'a', 'SA', 'logammalang@gmail.com', 0),
(8, 'Hari Kusryanto', '123', 'logammalang@gmail.com', 0),
(9, 'Hari Kusryanto', '123', 'logammalang@gmail.com', 0),
(10, 'Hari Kusryanto', '123', 'logammalang@gmail.com', 0),
(11, 'Hari Kusryanto', '123', 'logammalang@gmail.com', 0),
(12, 'Hari Kusryanto', 'asd', 'logammalang@gmail.com', 0),
(13, 'Hari Kusryanto', 'hari', 'logammalang@gmail.com', 0),
(14, 'Hari Kusryanto', '123', 'logammalang@gmail.com', 0),
(15, 'Hari Kusryanto', '123', 'logammalang@gmail.com', 0),
(16, 'Hari Kusryanto', 'l12321', 'logammalang@gmail.com', 0),
(17, 'Hari Kusryanto', '123', 'logammalang@gmail.com', 0),
(18, 'Hari Kusryanto', '32122', 'logammalang@gmail.com', 0),
(19, 'Hari Kusryanto', '21', 'logammalang@gmail.com', 0),
(20, 'Hari Kusryanto', '12', 'harikusryanto@gmail.com', 0),
(21, 'Hari Kusryanto', '12345', 'harikusryanto@gmail.com', 0),
(22, 'Hari Kusryanto', '12', 'logammalang@gmail.com', 0),
(23, 'Hari Kusryanto', '123', 'logammalang@gmail.com', 0),
(24, 'Hari Kusryanto', '123', 'logammalang@gmail.com', 0),
(25, 'seda', '123', 'harikusryanto@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `soal_aritmatika`
--

CREATE TABLE `soal_aritmatika` (
  `id` int(11) NOT NULL,
  `nomor` int(100) NOT NULL,
  `pertanyaan` varchar(600) NOT NULL,
  `jawab_a` varchar(250) NOT NULL,
  `jawab_b` varchar(250) NOT NULL,
  `jawab_c` varchar(250) NOT NULL,
  `jawab_d` varchar(250) NOT NULL,
  `jawab_e` varchar(250) NOT NULL,
  `jawaban` enum('a','b','c','d','e') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal_aritmatika`
--

INSERT INTO `soal_aritmatika` (`id`, `nomor`, `pertanyaan`, `jawab_a`, `jawab_b`, `jawab_c`, `jawab_d`, `jawab_e`, `jawaban`) VALUES
(1, 1, 'Operator Aritmatika Biner adalah â€¦â€¦â€¦â€¦.', ' Operator aritmatika yang hanya melibatkan 1 operand saja.', ' Operator yang digunakan untuk melakukan operasi-operasi.', 'Perhitungan aritmatika seperti penjumlahan, pengurangan, pembagian, perkalian dll.', 'Operator aritmatika yang melibatkan 2 buah operand.', 'Operator Komputer', 'd'),
(2, 2, 'Untuk menghitung rata-rata, total laba, menghitung besaran diskon dari suatu barang yang dijual        merupakan fungsi dari â€¦â€¦â€¦.', 'Operator Jaringan', ' Operator Aritmatika', 'Operator Relasional', 'Operand', 'Operator Komputer', 'b'),
(3, 3, 'Fungsi aritmatika yang berguna untuk membulatkan angka pecahan menjadi sebuah bilangan bulat      positif adalah â€¦â€¦â€¦..', ' ABS', 'FRAC', 'INT', 'PRED', 'SIN', 'c'),
(4, 4, ' Urutan langkah dalam membuat program yang digunakan untuk menghitung rata-rata maupun total    laba dari suatu perusahaan antara lain, kecuali â€¦â€¦â€¦', ' Menentukan jenis variabel yang digunakan.', ' Menentukan input data yang akan diproses.', ' Merangkai semua kode menjadi satu kesatuan program.', 'Mengubah ekspresi matematika menjadi code yang dapat dipahami oleh pascal .', 'Menentukan tempat yang akan digunakan.', 'e'),
(5, 5, 'Berikut kegunaan fungsi aritmatika, kecuali Berikut kegunaan fungsi aritmatika, kecuali â€¦â€¦â€¦', 'Menentukan relasi atau hubungan dari dua buah operand.', 'Penentuan jarak dua titik.', ' Panjang sisi miring segitiga siku-siku.', 'Menentukan biaya minimum pembuatan jalan tol.', 'Menghitung luas bangunan.', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `soal_array`
--

CREATE TABLE `soal_array` (
  `id` int(100) NOT NULL,
  `nomor` int(100) NOT NULL,
  `pertanyaan` varchar(500) NOT NULL,
  `jawab_a` varchar(500) NOT NULL,
  `jawab_b` varchar(500) NOT NULL,
  `jawab_c` varchar(500) NOT NULL,
  `jawab_d` varchar(500) NOT NULL,
  `jawab_e` varchar(500) NOT NULL,
  `jawaban` enum('a','b','c','d','e') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `soal_exception`
--

CREATE TABLE `soal_exception` (
  `id` int(100) NOT NULL,
  `nomor` int(100) NOT NULL,
  `pertanyaan` varchar(500) NOT NULL,
  `jawab_a` varchar(500) NOT NULL,
  `jawab_b` varchar(500) NOT NULL,
  `jawab_c` varchar(500) NOT NULL,
  `jawab_d` varchar(500) NOT NULL,
  `jawab_e` varchar(500) NOT NULL,
  `jawaban` enum('a','b','c','d','e') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `soal_for`
--

CREATE TABLE `soal_for` (
  `id` int(100) NOT NULL,
  `nomor` int(100) NOT NULL,
  `pertanyaan` varchar(500) NOT NULL,
  `jawab_a` varchar(500) NOT NULL,
  `jawab_b` varchar(500) NOT NULL,
  `jawab_c` varchar(500) NOT NULL,
  `jawab_d` varchar(500) NOT NULL,
  `jawab_e` varchar(500) NOT NULL,
  `jawaban` enum('a','b','c','d','e') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal_for`
--

INSERT INTO `soal_for` (`id`, `nomor`, `pertanyaan`, `jawab_a`, `jawab_b`, `jawab_c`, `jawab_d`, `jawab_e`, `jawaban`) VALUES
(1, 1, 'test', 'int', '123', '1231', '123', '312', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `soal_ifelse`
--

CREATE TABLE `soal_ifelse` (
  `id` int(11) NOT NULL,
  `nomor` int(100) NOT NULL,
  `pertanyaan` varchar(600) NOT NULL,
  `jawab_a` varchar(250) NOT NULL,
  `jawab_b` varchar(250) NOT NULL,
  `jawab_c` varchar(250) NOT NULL,
  `jawab_d` varchar(250) NOT NULL,
  `jawab_e` varchar(250) NOT NULL,
  `jawaban` enum('a','b','c','d','e') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal_ifelse`
--

INSERT INTO `soal_ifelse` (`id`, `nomor`, `pertanyaan`, `jawab_a`, `jawab_b`, `jawab_c`, `jawab_d`, `jawab_e`, `jawaban`) VALUES
(1, 1, 'Perulangan digunakan untuk mengerjakan pernyataan atau sekelompok pernyataan secara berulang di sebut?', 'for', 'while', 'do while', 'if', 'for if', 'a'),
(2, 2, 'Format Logika IF-ENDIF (...) THEN. Untuk melengkapi dalam kurung tersebut maka dilengkapi dengan ...', 'CASE', 'Ekspresi', ' END', ' IF', 'while', 'b'),
(3, 3, 'Percabangan IF merupakan suatu perintah yang berfungsi untuk ...', 'Mengambil keputusan dari beberapa kondisi', 'Menganalisa', 'Mencatat', ' Mengembangkan', 'semua Jawaban salah', 'd'),
(4, 4, ' Dibawah ini yang terdapat perintah-perintah IF adalah...', 'IF-THEN', 'IF-THEN-ELSE', 'IF-THEN-ELSE-IF', 'Semua benar', 'semua Jawaban salah', 'd'),
(5, 5, 'Percabangan CASE digunakan untuk menyederhanakan intruksi ...', 'CASE', 'IF', 'END', 'DO', 'char', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `soal_kontrol`
--

CREATE TABLE `soal_kontrol` (
  `id` int(100) NOT NULL,
  `nomor` int(100) NOT NULL,
  `pertanyaan` varchar(500) NOT NULL,
  `jawab_a` varchar(500) NOT NULL,
  `jawab_b` varchar(500) NOT NULL,
  `jawab_c` varchar(500) NOT NULL,
  `jawab_d` varchar(500) NOT NULL,
  `jawab_e` varchar(500) NOT NULL,
  `jawaban` enum('a','b','c','d','e') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal_kontrol`
--

INSERT INTO `soal_kontrol` (`id`, `nomor`, `pertanyaan`, `jawab_a`, `jawab_b`, `jawab_c`, `jawab_d`, `jawab_e`, `jawaban`) VALUES
(1, 1, 'Siapakah nama saya', 'ga tau', 'saya juga ga tau', 'hehe tau saja', 'hmmm', 'semua Jawaban salah', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `soal_pengulangan`
--

CREATE TABLE `soal_pengulangan` (
  `id` int(11) NOT NULL,
  `nomor` int(100) NOT NULL,
  `pertanyaan` varchar(600) NOT NULL,
  `jawab_a` varchar(250) NOT NULL,
  `jawab_b` varchar(250) NOT NULL,
  `jawab_c` varchar(250) NOT NULL,
  `jawab_d` varchar(250) NOT NULL,
  `jawab_e` varchar(250) NOT NULL,
  `jawaban` enum('a','b','c','d','e') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal_pengulangan`
--

INSERT INTO `soal_pengulangan` (`id`, `nomor`, `pertanyaan`, `jawab_a`, `jawab_b`, `jawab_c`, `jawab_d`, `jawab_e`, `jawaban`) VALUES
(1, 1, 'If di gunakan untuk ?', 'pengulangan', 'percabangan', 'penambahan', 'perkalian', 'pembagian', 'a'),
(2, 2, 'yang tidak termasuk pengulangan adalah?', 'if', 'wile', 'dowhile', 'vim.tiny', 'repeat', 'd'),
(3, 3, 'Berikut ini adalah hak akses yang dapat ditambahkan di depan method Java, kecuali...', 'static', 'public', 'private', 'protected', 'char', 'a'),
(4, 4, 'Modifier yang digunakan bila suatu unsure (kelas/metode/variable) memiliki nilai yang tetap adalahï¿½', 'protected', 'private', 'string', 'public', 'final', 'e'),
(5, 5, 'Berikut ini merupakan contoh tipe data yang menangani bilangan bulat, kecuali:', 'int', 'long', 'float', 'short', 'char', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `soal_pewarisan`
--

CREATE TABLE `soal_pewarisan` (
  `id` int(100) NOT NULL,
  `nomor` int(100) NOT NULL,
  `pertanyaan` varchar(500) NOT NULL,
  `jawab_a` varchar(500) NOT NULL,
  `jawab_b` varchar(500) NOT NULL,
  `jawab_c` varchar(500) NOT NULL,
  `jawab_d` varchar(500) NOT NULL,
  `jawab_e` varchar(500) NOT NULL,
  `jawaban` enum('a','b','c','d','e') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `soal_pilihan`
--

CREATE TABLE `soal_pilihan` (
  `id` int(11) NOT NULL,
  `nomor` int(100) NOT NULL,
  `pertanyaan` varchar(600) NOT NULL,
  `jawab_a` varchar(250) NOT NULL,
  `jawab_b` varchar(250) NOT NULL,
  `jawab_c` varchar(250) NOT NULL,
  `jawab_d` varchar(250) NOT NULL,
  `jawab_e` varchar(250) NOT NULL,
  `jawaban` enum('a','b','c','d','e') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal_pilihan`
--

INSERT INTO `soal_pilihan` (`id`, `nomor`, `pertanyaan`, `jawab_a`, `jawab_b`, `jawab_c`, `jawab_d`, `jawab_e`, `jawaban`) VALUES
(1, 1, 'Untuk menyimpan data nim mahasiswa, tipe data yang paling tepat digunakan adalah... Pernyataan yang sesuai untuk mendefinisikan Tipe data bilangan bulat adalahâ€¦', 'Tipe data yang berfungsi menampung data yang memiliki angka dibelakang koma', 'Tipe data yang mempresentasikan data yang hanya mengandung dua nilai', 'Tipe data yang mempresentasikan data berupa karakter', 'Tipe data yang yang menyimpan lebih dari satu variabel', 'Tipe data yang digunakan untuk angka yang tidak memiliki angka dibelakang koma', 'e'),
(2, 2, 'Tipe data yang cocok untuk menampung nama siswa adalahâ€¦', 'Char', ' Int', 'Boolean', 'Real', 'Byte', 'a'),
(3, 3, 'Berikut ini adalah hak akses yang dapat ditambahkan di depan method Java, kecuali...Tipe-tipe data berikut akan memberi nilai output, kecualiâ€¦', 'Int', 'Float', 'Void', 'Char', 'protectd', 'c'),
(4, 4, 'Contoh bentuk deklarasi variabel bertipe karakter yang benar adalahâ€¦', ' Char return;', 'Void main;', 'Char panjang, a, huruf[30];', 'Panjang char;', 'finalsemua salah', 'c'),
(5, 5, 'Penulisan variabel dalam c++ bersifat case sensitive artinyaâ€¦', 'Huruf besar dan kecil diperhitungkan', 'Tanda spasi diperhitungkan', 'Tanda spasi diubah dengan underscore', 'Tanda spasi diubah dengan tanda strip (minus)', 'charTanda spasi diubah dengan tanda titik.', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `soal_switch`
--

CREATE TABLE `soal_switch` (
  `id` int(100) NOT NULL,
  `nomor` int(100) NOT NULL,
  `pertanyaan` varchar(500) NOT NULL,
  `jawab_a` varchar(500) NOT NULL,
  `jawab_b` varchar(500) NOT NULL,
  `jawab_c` varchar(500) NOT NULL,
  `jawab_d` varchar(500) NOT NULL,
  `jawab_e` varchar(500) NOT NULL,
  `jawaban` enum('a','b','c','d','e') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal_switch`
--

INSERT INTO `soal_switch` (`id`, `nomor`, `pertanyaan`, `jawab_a`, `jawab_b`, `jawab_c`, `jawab_d`, `jawab_e`, `jawaban`) VALUES
(1, 1, 'Mana dari penggalan program dibawah ini yang valid...', 'Switch(n){       case 1; System.out.print(â€œValue 1â€);       break;       case 2; System.out.print(â€œValue 2â€); break;       default; System.out.print(â€œValue 1â€); }', 'switch(n){       case 1: System.out.print(â€œValue 1â€); break;       case 2: System.out.print(â€œValue 2â€); break;       default: System.out.print(â€œValue 1â€);}', 'Switch(n){       case 1; System.out.print(â€œValue 1â€); break;       case 2; System.out.print(â€œValue 2â€); break;       default; System.out.print(â€œValue 1â€); break;}', 'manajemen lalu lintas yang terdapat dijalananswitch(n){       case 1: System.out.print(â€œValue 1â€); break;       case 2: System.out.print(â€œValue 2â€); break;       default: System.out.print(â€œValue 1â€); break; }', 'tidak memiliki fungsi yang', 'd'),
(2, 2, 'Berikut ini pernyataan yang benar berhubungan dengan class dan object dalam Java, kecuali…', 'Setiap class dapat mengandung beberapa method sekaligus', 'Object merupakan instance dari class', 'Object terdiri dari keyword dan method', 'Class merupakan pendefinisian dari object', 'a dan b salah', 'b'),
(3, 3, 'Suatu method yang dapat dijalankan otomatis pada saat object dari class dibuat, dikenal dengan …', 'Constructor', 'Initializer', 'Garbage Collector', 'Inheritance', 'Operator Komputer', 'a'),
(4, 4, 'Mengapa anda sebagai programmer harus menggunakan perintah Switch dalam program!', 'Karena sebagai alternatif keputusan untuk memilih salah satu pernyataan.', 'karena switch lebih efektif', 'karena simple', 'switch sangat sederhana', 'jawaban semua salah', 'a'),
(5, 5, ' Sebutkan dan jelaskan perintah-perintah pendukung perintah Switch!', 'if', 'else', 'do while', 'case', 'Break, untuk keluar dari loop do, for atau while dalam kondisi suatu perulangan yang normal', 'e');

-- --------------------------------------------------------

--
-- Table structure for table `soal_threads`
--

CREATE TABLE `soal_threads` (
  `id` int(100) NOT NULL,
  `nomor` int(100) NOT NULL,
  `pertanyaan` varchar(500) NOT NULL,
  `jawab_a` varchar(500) NOT NULL,
  `jawab_b` varchar(500) NOT NULL,
  `jawab_c` varchar(500) NOT NULL,
  `jawab_d` varchar(500) NOT NULL,
  `jawab_e` varchar(500) NOT NULL,
  `jawaban` enum('a','b','c','d','e') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal_threads`
--

INSERT INTO `soal_threads` (`id`, `nomor`, `pertanyaan`, `jawab_a`, `jawab_b`, `jawab_c`, `jawab_d`, `jawab_e`, `jawaban`) VALUES
(1, 1, 'Siapakah nama saya', 'ga tau', 'saya juga ga tau', 'hehe tau saja', 'hmmm', 'semua Jawaban salah', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `soal_while`
--

CREATE TABLE `soal_while` (
  `id` int(100) NOT NULL,
  `nomor` int(100) NOT NULL,
  `pertanyaan` varchar(500) NOT NULL,
  `jawab_a` varchar(500) NOT NULL,
  `jawab_b` varchar(500) NOT NULL,
  `jawab_c` varchar(500) NOT NULL,
  `jawab_d` varchar(500) NOT NULL,
  `jawab_e` varchar(500) NOT NULL,
  `jawaban` enum('a','b','c','d','e') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regis`
--
ALTER TABLE `regis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal_aritmatika`
--
ALTER TABLE `soal_aritmatika`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal_array`
--
ALTER TABLE `soal_array`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal_exception`
--
ALTER TABLE `soal_exception`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal_for`
--
ALTER TABLE `soal_for`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal_ifelse`
--
ALTER TABLE `soal_ifelse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal_kontrol`
--
ALTER TABLE `soal_kontrol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal_pengulangan`
--
ALTER TABLE `soal_pengulangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal_pewarisan`
--
ALTER TABLE `soal_pewarisan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal_pilihan`
--
ALTER TABLE `soal_pilihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal_switch`
--
ALTER TABLE `soal_switch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal_threads`
--
ALTER TABLE `soal_threads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal_while`
--
ALTER TABLE `soal_while`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `regis`
--
ALTER TABLE `regis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `soal_aritmatika`
--
ALTER TABLE `soal_aritmatika`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `soal_array`
--
ALTER TABLE `soal_array`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `soal_exception`
--
ALTER TABLE `soal_exception`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `soal_for`
--
ALTER TABLE `soal_for`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `soal_ifelse`
--
ALTER TABLE `soal_ifelse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `soal_kontrol`
--
ALTER TABLE `soal_kontrol`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `soal_pengulangan`
--
ALTER TABLE `soal_pengulangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `soal_pewarisan`
--
ALTER TABLE `soal_pewarisan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `soal_pilihan`
--
ALTER TABLE `soal_pilihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `soal_switch`
--
ALTER TABLE `soal_switch`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `soal_threads`
--
ALTER TABLE `soal_threads`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `soal_while`
--
ALTER TABLE `soal_while`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
