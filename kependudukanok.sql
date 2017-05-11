-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 02, 2016 at 11:17 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kependudukanok`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `ID` int(2) NOT NULL,
  `NAMA` varchar(20) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`ID`, `NAMA`, `USERNAME`, `PASSWORD`) VALUES
(1, 'ADMIN', 'ADMIN', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `tb_agama`
--

CREATE TABLE IF NOT EXISTS `tb_agama` (
  `id` int(2) NOT NULL,
  `agama` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_agama`
--

INSERT INTO `tb_agama` (`id`, `agama`) VALUES
(1, 'Islam'),
(2, 'Kristen'),
(3, 'Katholik'),
(4, 'Hindu'),
(5, 'Budha'),
(6, 'Konghucu'),
(7, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_kematian`
--

CREATE TABLE IF NOT EXISTS `tb_detail_kematian` (
  `no_surat_kematian` varchar(20) NOT NULL,
  `no_reg_pend` varchar(10) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status_nikah` varchar(15) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_detail_kematian`
--

INSERT INTO `tb_detail_kematian` (`no_surat_kematian`, `no_reg_pend`, `nik`, `nama`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `agama`, `status_nikah`, `pekerjaan`, `no_kk`, `no_rt`, `no_rw`) VALUES
('474.3/001/2014', 'Reg00035', '3328021109450090', 'DUMISAH', 'Perempuan', 'Tegal', '1945-09-11', ' Islam ', ' Cerai Mati ', ' Petani/Pekebun ', '3328020708080008', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_kk`
--

CREATE TABLE IF NOT EXISTS `tb_detail_kk` (
  `no_reg_kk` varchar(10) NOT NULL,
  `no_reg_pend` varchar(10) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_akta` varchar(20) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status_nikah` varchar(15) NOT NULL,
  `no_akta_nikah` varchar(20) NOT NULL,
  `tanggal_nikah` varchar(12) NOT NULL,
  `no_akta_cerai` varchar(20) NOT NULL,
  `tanggal_cerai` varchar(12) NOT NULL,
  `status_hub` varchar(20) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_detail_kk`
--

INSERT INTO `tb_detail_kk` (`no_reg_kk`, `no_reg_pend`, `nik`, `nama`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `no_akta`, `agama`, `status_nikah`, `no_akta_nikah`, `tanggal_nikah`, `no_akta_cerai`, `tanggal_cerai`, `status_hub`, `pendidikan`, `pekerjaan`, `nama_ayah`, `nama_ibu`, `no_rt`, `no_rw`) VALUES
('KK00001', 'Reg00012', '-', 'MUZAYIN', 'Laki-laki', 'Tegal', '1964-08-12', '-', ' Islam ', ' Kawin ', '437/16/XI/1995', '01-11-1995', '-', '-', ' Kepala Keluarga ', ' Tamat SD/Sederajat ', ' Sopir ', 'AKTIF', 'MAFRUHAH', 3, 1),
('KK00001', 'Reg00013', '-', 'NURNA RUKINI', 'Perempuan', 'Magelang', '1973-07-18', '-', ' Islam ', ' Kawin ', '437/16/XI/1995', '01-11-1995', '-', '-', ' Istri ', ' SLTP/Sederajat ', ' Mengurus Rumah Tangga ', 'MBUH', 'SURANI', 3, 1),
('KK00001', 'Reg00014', '-', 'FADHLIYAH NURZA', 'Perempuan', 'Magelang', '1996-08-19', '4260/1996', ' Islam ', ' Belum Kawin ', '-', '-', '-', '-', ' Anak ', ' SLTP/Sederajat ', ' Pelajar/Mahasiswa ', 'MUZAYIN', 'NURNA RUKINI', 3, 1),
('KK00001', 'Reg00015', '-', 'FAUZIATUNNISA NURZA', 'Perempuan', 'Magelang', '1998-03-19', '3727/TP/2007', ' Islam ', ' Belum Kawin ', '-', '-', '-', '-', ' Anak ', ' SLTP/Sederajat ', ' Pelajar/Mahasiswa ', 'MUZAYIN', 'NURNA RUKINI', 3, 1),
('KK00001', 'Reg00016', '-', 'NAZIHA NABIL NURZA', 'Perempuan', 'Magelang', '2007-01-19', '10355/TP/2007', ' Islam ', ' Belum Kawin ', '-', '-', '-', '-', ' Anak ', ' Belum Tamat SD/Sederajat ', ' Pelajar/Mahasiswa ', 'MUZAYIN', 'NURNA RUKINI', 3, 1),
('KK00002', 'Reg00017', '-', 'SUKAMTO', 'Laki-laki', 'Brebes', '1975-08-14', '-', ' Islam ', ' Kawin ', '132/06/VI/1994', '06-06-1994', '-', '-', ' Kepala Keluarga ', ' Tamat SD/Sederajat ', ' Buruh Harian Lepas ', 'KAPUT SUTIKNO', 'SEKHA', 5, 3),
('KK00002', 'Reg00018', '-', 'TOBIAH', 'Perempuan', 'Tegal', '1975-03-12', '-', ' Islam ', ' Kawin ', '132/06/VI/1994', '06-06-1994', '-', '-', ' Istri ', ' Tamat SD/Sederajat ', ' Mengurus Rumah Tangga ', 'DAHLAN', 'DEMAH', 5, 3),
('KK00002', 'Reg00019', '-', 'WIDIASTUTI', 'Perempuan', 'Tegal', '1996-04-20', '997/TPJB/2002', ' Islam ', ' Belum Kawin ', '-', '-', '-', '-', ' Anak ', ' SLTP/Sederajat ', ' Pelajar/Mahasiswa ', 'SUKAMTO', 'TOBIAH', 5, 3),
('KK00003', 'Reg00017', '-', 'SUKAMTO', 'Laki-laki', 'Brebes', '1975-08-14', '-', ' Islam ', ' Kawin ', '132/06/VI/1994', '06-06-1994', '-', '-', ' Kepala Keluarga ', ' Tamat SD/Sederajat ', ' Buruh Harian Lepas ', 'KAPUT SUTIKNO', 'SEKHA', 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_ktp`
--

CREATE TABLE IF NOT EXISTS `tb_detail_ktp` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status_hub` varchar(20) NOT NULL,
  `status_nikah` varchar(15) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_detail_ktp`
--

INSERT INTO `tb_detail_ktp` (`nik`, `nama`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `agama`, `status_hub`, `status_nikah`, `pendidikan`, `pekerjaan`, `no_kk`, `no_rt`, `no_rw`) VALUES
('3328020201650001', 'ABDILLAH', 'Laki-laki', 'Tegal', '1965-01-02', 'Islam', 'Kepala Keluarga', 'Kawin', 'SLTA/Sederajat', 'Wiraswasta', '3328022703140004', 6, 1),
('', 'ANIP', 'Perempuan', 'Banjarnegara', '1985-12-15', ' Islam ', ' Anak ', ' Kawin ', ' SLTP/Sederajat ', ' Mengurus Rumah Tangga ', '', 1, 4),
('', 'AFRILIANI', 'Perempuan', 'Banjarnegara', '2008-04-20', ' Islam ', ' Cucu ', ' Belum Kawin ', ' Belum Tamat SD/Sederajat ', ' Pelajar/Mahasiswa ', '', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_pend_masuk`
--

CREATE TABLE IF NOT EXISTS `tb_detail_pend_masuk` (
  `no_surat_masuk` varchar(30) NOT NULL,
  `no_reg_pend` varchar(10) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umur` int(2) NOT NULL,
  `no_akta` varchar(20) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status_nikah` varchar(15) NOT NULL,
  `no_akta_nikah` varchar(20) NOT NULL,
  `tanggal_nikah` varchar(12) NOT NULL,
  `no_akta_cerai` varchar(20) NOT NULL,
  `tanggal_cerai` varchar(12) NOT NULL,
  `status_hub` varchar(20) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `no_surat_kelahiran` varchar(20) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `tanggal_input` date NOT NULL,
  PRIMARY KEY (`no_reg_pend`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_detail_pend_masuk`
--

INSERT INTO `tb_detail_pend_masuk` (`no_surat_masuk`, `no_reg_pend`, `nik`, `nama`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `umur`, `no_akta`, `agama`, `status_nikah`, `no_akta_nikah`, `tanggal_nikah`, `no_akta_cerai`, `tanggal_cerai`, `status_hub`, `pendidikan`, `pekerjaan`, `nama_ayah`, `nama_ibu`, `no_kk`, `no_surat_kelahiran`, `no_rt`, `no_rw`, `tanggal_input`) VALUES
('SKPWNI/3304/18082014/0025', 'Reg00028', '3304045612850002', 'ANIP', 'Perempuan', 'Banjarnegara', '1985-12-15', 0, '-', ' Islam ', ' Kawin ', '780/36/XII/2006', '19-12-2006', '-', '-', ' Anak ', ' SLTP/Sederajat ', ' Mengurus Rumah Tangga ', 'SARTONO', 'RUSMIATI', '3304040703054764', '-', 1, 4, '2014-08-18'),
('SKPWNI/3304/18082014/0025', 'Reg00029', '3304046004080003', 'AFRILIANI', 'Perempuan', 'Banjarnegara', '2008-04-20', 0, '-', ' Islam ', ' Belum Kawin ', '-', '-', '-', '-', ' Cucu ', ' Belum Tamat SD/Sederajat ', ' Pelajar/Mahasiswa ', 'KHUSNUL', 'ANIP', '3304040703054764', '-', 1, 4, '2014-08-18');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_pend_pindah`
--

CREATE TABLE IF NOT EXISTS `tb_detail_pend_pindah` (
  `no_surat_pindah` varchar(20) NOT NULL,
  `no_reg_pend` varchar(10) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status_nikah` varchar(15) NOT NULL,
  `status_hub` varchar(20) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_detail_pend_pindah`
--

INSERT INTO `tb_detail_pend_pindah` (`no_surat_pindah`, `no_reg_pend`, `nik`, `nama`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `agama`, `status_nikah`, `status_hub`, `pendidikan`, `pekerjaan`, `no_kk`, `no_rt`, `no_rw`) VALUES
('470/001/2014', 'Reg00035', '3328021111900002', 'A', 'Laki-laki', 'Tegal', '1990-11-11', ' Islam ', ' Cerai Hidup ', ' Kepala Keluarga ', ' Buruh Harian Lepas ', ' SLTA/Sederajat ', '3328021212120004', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_kelamin`
--

CREATE TABLE IF NOT EXISTS `tb_jenis_kelamin` (
  `jenis_kelamin` varchar(10) NOT NULL,
  PRIMARY KEY (`jenis_kelamin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_jenis_kelamin`
--

INSERT INTO `tb_jenis_kelamin` (`jenis_kelamin`) VALUES
('Laki-laki'),
('Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelahiran`
--

CREATE TABLE IF NOT EXISTS `tb_kelahiran` (
  `no_surat_kelahiran` varchar(20) NOT NULL,
  `no_reg_pend` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `hari` varchar(15) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nama_ibu` varchar(25) NOT NULL,
  `nama_ayah` varchar(25) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `tanggal_input` date NOT NULL,
  PRIMARY KEY (`no_surat_kelahiran`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_kelahiran`
--

INSERT INTO `tb_kelahiran` (`no_surat_kelahiran`, `no_reg_pend`, `nama`, `jenis_kelamin`, `hari`, `tempat`, `tanggal_lahir`, `nama_ibu`, `nama_ayah`, `no_kk`, `no_rt`, `no_rw`, `tanggal_input`) VALUES
('474.1/001/2014', 'Reg00033', 'MASKAN DIYAUL MISKI', 'Laki-laki', 'Kamis Pon', 'Tegal', '2014-08-07', 'SUSIAWATI', 'MUHAMMAD LUBSI', '3328021809130018', 6, 1, '2014-09-03'),
('474.1/002/2014', 'Reg00034', 'SAYYIDAH LUTFANIL AULADA', 'Perempuan', 'Kamis Pon', 'Tegal', '2014-08-07', 'SUSIAWATI', 'MUHAMMAD LUBSI', '3328021809130018', 6, 1, '2014-09-03');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kematian`
--

CREATE TABLE IF NOT EXISTS `tb_kematian` (
  `no_surat_kematian` varchar(20) NOT NULL,
  `tanggal_meninggal` date NOT NULL,
  `hari_meninggal` varchar(6) NOT NULL,
  `umur` int(2) NOT NULL,
  `tempat_meninggal` varchar(20) NOT NULL,
  `sebab` varchar(50) NOT NULL,
  `desa` varchar(15) NOT NULL,
  `kota` varchar(15) NOT NULL,
  `oleh` varchar(20) NOT NULL,
  `tanggal_input` date NOT NULL,
  PRIMARY KEY (`no_surat_kematian`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_kematian`
--

INSERT INTO `tb_kematian` (`no_surat_kematian`, `tanggal_meninggal`, `hari_meninggal`, `umur`, `tempat_meninggal`, `sebab`, `desa`, `kota`, `oleh`, `tanggal_input`) VALUES
('474.3/001/2014', '2014-11-21', 'Senin', 69, 'Bukan Rumah Sakit', 'SAKIT', 'CEMPAKA', 'TEGAL', 'Lainnya', '2014-11-21');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kk`
--

CREATE TABLE IF NOT EXISTS `tb_kk` (
  `no_reg_kk` varchar(10) NOT NULL,
  `nama_kk` varchar(25) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `jml_anggota` int(2) NOT NULL,
  `tanggal_input` date NOT NULL,
  PRIMARY KEY (`no_reg_kk`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_kk`
--

INSERT INTO `tb_kk` (`no_reg_kk`, `nama_kk`, `no_rt`, `no_rw`, `jml_anggota`, `tanggal_input`) VALUES
('KK00001', 'dicoba duluu', 3, 1, 5, '2016-01-06'),
('KK00002', 'SUKAMTO', 5, 3, 3, '2016-01-08'),
('KK00003', 'SUKAMTO', 5, 3, 1, '2016-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ktp`
--

CREATE TABLE IF NOT EXISTS `tb_ktp` (
  `nik` varchar(16) NOT NULL,
  `tanggal_input` date NOT NULL,
  `tanggal_berlaku` date NOT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_ktp`
--

INSERT INTO `tb_ktp` (`nik`, `tanggal_input`, `tanggal_berlaku`) VALUES
('', '2014-12-12', '0000-00-00'),
('3328020201650001', '2014-12-08', '2019-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pekerjaan`
--

CREATE TABLE IF NOT EXISTS `tb_pekerjaan` (
  `kd_kerja` int(2) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  PRIMARY KEY (`kd_kerja`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_pekerjaan`
--

INSERT INTO `tb_pekerjaan` (`kd_kerja`, `pekerjaan`) VALUES
(1, 'Belum/Tidak Bekerja'),
(2, 'Mengurus Rumah Tangga'),
(3, 'Pelajar/Mahasiswa'),
(4, 'Pensiunan'),
(5, 'Pegawai Negeri Sipil (PNS)'),
(6, 'Tentara Nasional Indonesia (TNI)'),
(7, 'Kepolisian RI (POLRI)'),
(8, 'Perdagangan'),
(9, 'Petani/Pekebun'),
(10, 'Peternak'),
(11, 'Nelayan/Perikanan'),
(12, 'Industri'),
(13, 'Konstruksi'),
(14, 'Transportasi'),
(15, 'Karyawan Swasta'),
(16, 'Karyawan BUMN'),
(17, 'Karyawan BUMD'),
(18, 'Karyawan Honorer'),
(19, 'Buruh Harian Lepas'),
(20, 'Buruh Tani/Perkebunan'),
(21, 'Buruh Nelayan/Perikanan'),
(22, 'Buruh Peternakan'),
(23, 'Pembantu Rumah Tangga'),
(24, 'Tukang Cukur'),
(25, 'Tukang Listrik'),
(26, 'Tukang Batu'),
(27, 'Tukang Kayu'),
(28, 'Tukang Sol Sepatu'),
(29, 'Tukang Las/Pandai Besi'),
(30, 'Tukang Jahit'),
(31, 'Tukang Gigi'),
(32, 'Penata Rias'),
(33, 'Penata Busana'),
(34, 'Penata Rambut'),
(35, 'Mekanik'),
(36, 'Seniman'),
(37, 'Tabib'),
(38, 'Paraji'),
(39, 'Perancang Busana'),
(40, 'Penterjemah'),
(41, 'Imam Masjid'),
(42, 'Pendeta'),
(43, 'Pastor'),
(44, 'Wartawan'),
(45, 'Ustadz/Mubaligh'),
(46, 'Juru Masak'),
(47, 'Promotor Acara'),
(48, 'Anggota DPR-RI'),
(49, 'Anggota DPD'),
(50, 'Anggota BPK'),
(51, 'Presiden'),
(52, 'Wakil Presiden'),
(53, 'Anggota Mahkamah Konstitusi'),
(54, 'Anggota Kabinet Kementrian'),
(55, 'Duta Besar'),
(56, 'Gubernur'),
(57, 'Wakil Gubernur'),
(58, 'Bupati'),
(59, 'Wakil Bupati'),
(60, 'Walikota'),
(61, 'Wakil Walikota'),
(62, 'Anggota DPRP Prov'),
(63, 'Anggota DPRP Kab/Kota'),
(64, 'Dosen'),
(65, 'Guru'),
(66, 'Pilot'),
(67, 'Pengacara'),
(68, 'Notaris'),
(69, 'Arsitek'),
(70, 'Akuntan'),
(71, 'Konsultan'),
(72, 'Dokter'),
(73, 'Bidan'),
(74, 'Perawat'),
(75, 'Apoteker'),
(76, 'Psikiater/Psikolog'),
(77, 'Penyiar Televisi'),
(78, 'Penyiar Radio'),
(79, 'Pelaut'),
(80, 'Peneliti'),
(81, 'Sopir'),
(82, 'Pialang'),
(83, 'Paranormal'),
(84, 'Pedagang'),
(85, 'Perangkat Desa'),
(86, 'Kepala Desa'),
(87, 'Biarawati'),
(88, 'Wiraswasta');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendidikan`
--

CREATE TABLE IF NOT EXISTS `tb_pendidikan` (
  `kd_pend` int(2) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  PRIMARY KEY (`kd_pend`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_pendidikan`
--

INSERT INTO `tb_pendidikan` (`kd_pend`, `pendidikan`) VALUES
(1, 'Tidak/Belum Sekolah'),
(2, 'Belum Tamat SD/Sederajat'),
(3, 'Tamat SD/Sederajat'),
(4, 'SLTP/Sederajat'),
(5, 'SLTA/Sederajat'),
(6, 'Diploma I/II'),
(7, 'Akademi/Diploma III Sarjana Muda'),
(8, 'Diploma IV/Strata I'),
(9, 'Strata II'),
(10, 'Strata III');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penduduk`
--

CREATE TABLE IF NOT EXISTS `tb_penduduk` (
  `no_reg_pend` varchar(10) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umur` int(2) NOT NULL,
  `no_akta` varchar(20) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status_nikah` varchar(15) NOT NULL,
  `no_akta_nikah` varchar(20) NOT NULL,
  `tanggal_nikah` varchar(12) NOT NULL,
  `no_akta_cerai` varchar(20) NOT NULL,
  `tanggal_cerai` varchar(12) NOT NULL,
  `status_hub` varchar(20) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `no_surat_kelahiran` varchar(20) NOT NULL,
  `no_surat_masuk` varchar(30) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `tanggal_input` date NOT NULL,
  PRIMARY KEY (`no_reg_pend`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_penduduk`
--

INSERT INTO `tb_penduduk` (`no_reg_pend`, `nik`, `nama`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `umur`, `no_akta`, `agama`, `status_nikah`, `no_akta_nikah`, `tanggal_nikah`, `no_akta_cerai`, `tanggal_cerai`, `status_hub`, `pendidikan`, `pekerjaan`, `nama_ayah`, `nama_ibu`, `no_kk`, `no_surat_kelahiran`, `no_surat_masuk`, `no_rt`, `no_rw`, `tanggal_input`) VALUES
('Reg00001', '2013091079', 'NANANG JIMYATI', 'Laki-laki', 'Kuningan', '1995-11-25', 0, '-', 'Islam', 'Kawin', '-', '-', '-', '-', 'Kepala Keluarga', 'Strata III', 'Pegawai Negeri Sipil (PNS)', 'NU''MAN ALHAKIM', 'ENTIN', '3328023101110005', '-', '-', 1, 1, '2016-11-01'),
('Reg00002', '3328024608760002', 'FIFI ARIANTI', 'Perempuan', 'Tegal', '1976-08-06', 0, '-', 'Islam', 'Kawin', '-', '-', '-', '-', 'Istri', 'SLTP/Sederajat', 'Mengurus Rumah Tangga', 'CHAERI', 'WATIAH', '3328023101110005', '-', '-', 1, 1, '2016-09-18'),
('Reg00003', '3328024503070006', 'AMELIA NUR FADHILAH', 'Perempuan', 'Brebes', '2007-03-05', 0, '-', ' Islam ', ' Belum Kawin ', '-', '-', '-', '-', ' Anak ', ' Belum Tamat SD/Sederajat ', ' Pelajar/Mahasiswa ', 'M.ANSORI', 'FIFI ARIANTI', '3328023101110005', '-', '-', 1, 1, '2014-09-18'),
('Reg00004', '3328023108870001', 'SLAMET SUMALI', 'Laki-laki', 'Tegal', '1987-01-31', 0, '-', ' Islam ', ' Kawin ', '-', '', '-', '', ' Kepala Keluarga ', ' Tamat SD/Sederajat ', ' Wiraswasta ', 'JAMIN', 'JUMIRAH', '3328022704140001', '-', '-', 1, 2, '2014-07-04'),
('Reg00005', '3328025601860010', 'ROHANI', 'Laki-laki', 'Tegal', '1986-01-16', 0, '-', ' Islam ', ' Kawin ', '-', '', '-', '', ' Istri ', ' Tamat SD/Sederajat ', ' Mengurus Rumah Tangga ', 'SARIB', 'ARIYAH', '3328022704140001', '-', '-', 1, 1, '2014-07-04'),
('Reg00006', '3320820712750004', 'AHMAD FRIZKI RIVAI', 'Laki-laki', 'Tegal', '1975-12-07', 0, '-', ' Islam ', ' Kawin ', '-', '', '-', '', ' Kepala Keluarga ', ' Diploma IV/Strata I ', ' Peternak ', 'TJASRO SM', 'ZUHAROH', '3328020206140002', '-', '-', 2, 1, '2014-06-02'),
('Reg00007', '3328024907880003', 'LIDIANA', 'Laki-laki', 'Tegal', '1988-07-09', 0, '-', ' Islam ', ' Kawin ', '-', '', '-', '', ' Istri ', ' SLTA/Sederajat ', ' Mengurus Rumah Tangga ', 'ROFI''I', 'DURIPAH', '3328020206140002', '-', '-', 2, 1, '2014-07-09'),
('Reg00008', '3328026001130002', 'CATHLEYA SEKAR AYU LARASATI', 'Perempuan', 'Tegal', '2013-01-10', 0, '-', ' Islam ', ' Belum Kawin ', '-', '-', '-', '-', ' Anak ', ' Tidak/Belum Sekolah ', ' Belum/Tidak Bekerja ', 'AHMAD FRIZKI RIVAI', 'LIDIANA', '3328020206140002', '-', '-', 2, 1, '2014-06-02'),
('Reg00009', '3328021910880008', 'MUKHAMAD YUNUS', 'Laki-laki', 'Tegal', '1988-10-19', 0, '-', ' Islam ', ' Kawin ', '-', '-', '-', '-', ' Kepala Keluarga ', ' SLTA/Sederajat ', ' Wiraswasta ', 'KALYUB', 'RONAH', '3328021909140013', '-', '-', 2, 1, '2014-10-09'),
('Reg00010', '3328024502920003', 'QORINAZMI', 'Perempuan', 'Tegal', '1992-02-05', 0, '-', ' Islam ', ' Kawin ', '-', '-', '-', '-', ' Istri ', ' SLTA/Sederajat ', ' Mengurus Rumah Tangga ', 'ABDURAHMAN', 'KODARIYAH', '3328021909140013', '-', '-', 2, 1, '2014-10-09'),
('Reg00011', '3328022210130002', 'MUHAMMAD YUQO AYUBI', 'Laki-laki', 'Tegal', '2013-08-22', 0, '-', ' Islam ', ' Belum Kawin ', '-', '-', '-', '-', ' Anak ', ' Tidak/Belum Sekolah ', ' Belum/Tidak Bekerja ', 'MUKHAMAD YUNUS', 'QORINAZMI', '3328021909140013', '-', '-', 2, 1, '2014-10-09'),
('Reg00012', '-', 'MUZAYIN', 'Laki-laki', 'Tegal', '1964-08-12', 0, '-', ' Islam ', ' Kawin ', '437/16/XI/1995', '01-11-1995', '-', '-', ' Kepala Keluarga ', ' Tamat SD/Sederajat ', ' Sopir ', 'AKTIF', 'MAFRUHAH', '-', '-', '-', 3, 1, '2014-01-06'),
('Reg00013', '-', 'NURNA RUKINI', 'Perempuan', 'Magelang', '1973-07-18', 0, '-', ' Islam ', ' Kawin ', '437/16/XI/1995', '01-11-1995', '-', '-', ' Istri ', ' SLTP/Sederajat ', ' Mengurus Rumah Tangga ', 'MBUH', 'SURANI', '-', '-', '-', 3, 1, '2014-01-06'),
('Reg00014', '-', 'FADHLIYAH NURZA', 'Perempuan', 'Magelang', '1996-08-19', 0, '4260/1996', ' Islam ', ' Belum Kawin ', '-', '-', '-', '-', ' Anak ', ' SLTP/Sederajat ', ' Pelajar/Mahasiswa ', 'MUZAYIN', 'NURNA RUKINI', '-', '-', '-', 3, 1, '2014-01-06'),
('Reg00015', '-', 'FAUZIATUNNISA NURZA', 'Perempuan', 'Magelang', '1998-03-19', 0, '3727/TP/2007', ' Islam ', ' Belum Kawin ', '-', '-', '-', '-', ' Anak ', ' SLTP/Sederajat ', ' Pelajar/Mahasiswa ', 'MUZAYIN', 'NURNA RUKINI', '-', '-', '-', 3, 1, '2014-01-06'),
('Reg00016', '-', 'NAZIHA NABIL NURZA', 'Perempuan', 'Magelang', '2007-01-19', 0, '10355/TP/2007', ' Islam ', ' Belum Kawin ', '-', '-', '-', '-', ' Anak ', ' Belum Tamat SD/Sederajat ', ' Pelajar/Mahasiswa ', 'MUZAYIN', 'NURNA RUKINI', '-', '-', '-', 3, 1, '2014-01-06'),
('Reg00017', '-', 'SUKAMTO', 'Laki-laki', 'Brebes', '1975-08-14', 0, '-', ' Islam ', ' Kawin ', '132/06/VI/1994', '06-06-1994', '-', '-', ' Kepala Keluarga ', ' Tamat SD/Sederajat ', ' Buruh Harian Lepas ', 'KAPUT SUTIKNO', 'SEKHA', '-', '-', '-', 5, 3, '2014-01-08'),
('Reg00018', '-', 'TOBIAH', 'Perempuan', 'Tegal', '1975-03-12', 0, '-', ' Islam ', ' Kawin ', '132/06/VI/1994', '06-06-1994', '-', '-', ' Istri ', ' Tamat SD/Sederajat ', ' Mengurus Rumah Tangga ', 'DAHLAN', 'DEMAH', '-', '-', '-', 5, 3, '2014-01-08'),
('Reg00019', '-', 'WIDIASTUTI', 'Perempuan', 'Tegal', '1996-04-20', 0, '997/TPJB/2002', ' Islam ', ' Belum Kawin ', '-', '-', '-', '-', ' Anak ', ' SLTP/Sederajat ', ' Pelajar/Mahasiswa ', 'SUKAMTO', 'TOBIAH', '-', '-', '-', 5, 3, '2014-01-08'),
('Reg00020', '3328020201650001', 'ABDILLAH', 'Laki-laki', 'Tegal', '1965-01-02', 0, '-', 'Islam', 'Kawin', '-', '-', '-', '-', 'Kepala Keluarga', 'SLTA/Sederajat', 'Wiraswasta', 'H.JAMIL', 'DUHONAH', '3328022703140004', '-', '-', 6, 1, '2014-03-03'),
('Reg00021', '3328026312720001', 'KHOYIROH', 'Perempuan', 'Tegal', '1972-12-23', 0, '-', ' Islam ', ' Kawin ', '-', '-', '-', '-', ' Istri ', ' Tamat SD/Sederajat ', ' Mengurus Rumah Tangga ', 'SUKRAD', 'SODAH', '3328022703140004', '-', '-', 6, 1, '2014-03-03'),
('Reg00022', '3328020212920007', 'MUHAMMAD FAHMI ABDULLOH', 'Laki-laki', 'Tegal', '1991-12-02', 0, '-', ' Islam ', ' Belum Kawin ', '-', '-', '-', '-', ' Anak ', ' SLTA/Sederajat ', ' Pelajar/Mahasiswa ', 'ABDILLAH', 'KHOYIROH', '3328022703140004', '-', '-', 6, 1, '2014-03-03'),
('Reg00023', '3328024709940011', 'FIFIT ROTILIHYA', 'Perempuan', 'Tegal', '1994-09-07', 0, '-', ' Islam ', ' Belum Kawin ', '-', '-', '-', '-', ' Anak ', ' SLTA/Sederajat ', ' Pelajar/Mahasiswa ', 'ABDILLAH', 'KHOYIROH', '3328022703140004', '-', '-', 6, 1, '2014-03-03'),
('Reg00024', '3328026812960001', 'RO''FA TUNNAIHI', 'Perempuan', 'Tegal', '1996-12-28', 0, '-', ' Islam ', ' Belum Kawin ', '-', '-', '-', '-', ' Anak ', ' SLTP/Sederajat ', ' Pelajar/Mahasiswa ', 'ABDILLAH', 'KHOYIROH', '3328022703140004', '-', '-', 6, 1, '2014-03-03'),
('Reg00025', '3328025402990004', 'FINA SILIYYA', 'Perempuan', 'Tegal', '1999-02-14', 0, '-', ' Islam ', ' Belum Kawin ', '-', '-', '-', '-', ' Anak ', ' Tamat SD/Sederajat ', ' Pelajar/Mahasiswa ', 'ABDILLAH', 'KHOYIROH', '3328022703140004', '-', '-', 6, 1, '2014-03-03'),
('Reg00026', '3328021202020004', 'A.SIFAU NAJAH', 'Laki-laki', 'Tegal', '2002-02-12', 0, '-', ' Islam ', ' Belum Kawin ', '-', '-', '-', '-', ' Anak ', ' Tamat SD/Sederajat ', ' Pelajar/Mahasiswa ', 'ABDILLAH', 'KHOYIROH', '3328022703140004', '-', '-', 6, 1, '2014-03-03'),
('Reg00027', '3328025202040003', 'BUNGA BANATI', 'Perempuan', 'Tegal', '2004-02-12', 0, '-', ' Islam ', ' Belum Kawin ', '-', '-', '-', '-', ' Anak ', ' Belum Tamat SD/Sederajat ', ' Pelajar/Mahasiswa ', 'ABDILLAH', 'KHOYIROH', '3328022703140004', '-', '-', 6, 1, '2014-03-03'),
('Reg00028', '', 'ANIP', 'Perempuan', 'Banjarnegara', '1985-12-15', 0, '-', ' Islam ', ' Kawin ', '780/36/XII/2006', '19-12-2006', '-', '-', ' Anak ', ' SLTP/Sederajat ', ' Mengurus Rumah Tangga ', 'SARTONO', 'RUSMIATI', '', '-', 'SKPWNI/3304/18082014/0025', 1, 4, '2014-08-18'),
('Reg00029', '', 'AFRILIANI', 'Perempuan', 'Banjarnegara', '2008-04-20', 0, '-', ' Islam ', ' Belum Kawin ', '-', '-', '-', '-', ' Cucu ', ' Belum Tamat SD/Sederajat ', ' Pelajar/Mahasiswa ', 'KHUSNUL', 'ANIP', '', '-', 'SKPWNI/3304/18082014/0025', 1, 4, '2014-08-18'),
('Reg00030', '3328020909830002', 'MUHAMMAD LUBSI', 'Laki-laki', 'Tegal', '1983-09-09', 0, '-', ' Islam ', ' Kawin ', '-', '-', '-', '-', ' Kepala Keluarga ', ' Diploma IV/Strata I ', ' Wiraswasta ', 'M.ROJIDIN', 'TOIPAH', '3328021809130018', '-', '-', 6, 1, '2014-01-09'),
('Reg00031', '3328027007840005', 'SUSIAWATI', 'Perempuan', 'Surabaya', '1984-07-30', 0, '-', ' Islam ', ' Kawin ', '-', '-', '-', '-', ' Istri ', ' SLTA/Sederajat ', ' Guru ', 'SUDARMAN', 'SURASMI ASMAIYAH', '3328021809130018', '-', '-', 6, 1, '2014-01-09'),
('Reg00032', '3328025611090004', 'KHAFDANA ITSNAN FI AHLINA', 'Perempuan', 'Tegal', '2009-11-16', 0, '-', ' Islam ', ' Belum Kawin ', '-', '-', '-', '-', ' Anak ', ' Tidak/Belum Sekolah ', ' Belum/Tidak Bekerja ', 'MUHAMMAD LUBSI', 'SUSIAWATI', '3328021809130018', '-', '-', 6, 1, '2014-01-09'),
('Reg00033', '3328020708140002', 'MASKAN DIYAUL MISKI', 'Laki-laki', 'Tegal', '2014-08-07', 0, '-', 'Islam', 'Belum Kawin', '-', '-', '-', '-', 'Anak', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'MUHAMMAD LUBSI', 'SUSIAWATI', '3328021809130018', '474.1/001/2014', '-', 6, 1, '2014-09-03'),
('Reg00034', '3328020708140001', 'SAYYIDAH LUTFANIL AULADA', 'Perempuan', 'Tegal', '2014-08-07', 0, '-', 'Islam', 'Belum Kawin', '-', '-', '-', '-', 'Anak', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', 'MUHAMMAD LUBSI', 'SUSIAWATI', '3328021809130018', '474.1/002/2014', '-', 6, 1, '2014-09-03'),
('Reg00035', '123', 'ASS', 'Laki-laki', 'Tegal', '1990-01-01', 0, '-', ' Islam ', ' Belum Kawin ', '-', '-', '-', '-', ' Anak ', ' SLTP/Sederajat ', ' Pelajar/Mahasiswa ', 'SS', 'CC', '123456', '-', '-', 2, 1, '2014-12-12'),
('Reg00036', '', 'CCCC', 'Laki-laki', '', '1900-01-01', 0, '-', '-', '-', '-', '', '-', '', '-', '-', '-', '', '', '', '-', '-', 0, 0, '2016-11-01');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pend_masuk`
--

CREATE TABLE IF NOT EXISTS `tb_pend_masuk` (
  `no_surat_masuk` varchar(30) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `nama_kk` varchar(25) NOT NULL,
  `alamat_sebelum` varchar(15) NOT NULL,
  `rt_sebelum` int(2) NOT NULL,
  `rw_sebelum` int(2) NOT NULL,
  `kec_sebelum` varchar(15) NOT NULL,
  `kab_sebelum` varchar(15) NOT NULL,
  `prov_sebelum` varchar(15) NOT NULL,
  `alasan` varchar(2) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `klsfksi_pindah` varchar(2) NOT NULL,
  `jenis_pindah` varchar(2) NOT NULL,
  `status_kk_pindah` varchar(2) NOT NULL,
  `tanggal_input` date NOT NULL,
  PRIMARY KEY (`no_surat_masuk`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_pend_masuk`
--

INSERT INTO `tb_pend_masuk` (`no_surat_masuk`, `no_kk`, `nama_kk`, `alamat_sebelum`, `rt_sebelum`, `rw_sebelum`, `kec_sebelum`, `kab_sebelum`, `prov_sebelum`, `alasan`, `no_rt`, `no_rw`, `klsfksi_pindah`, `jenis_pindah`, `status_kk_pindah`, `tanggal_input`) VALUES
('SKPWNI/3304/18082014/0025', '3304040703054764', 'SARKIM', 'SILONGKOK KALIA', 5, 2, 'PURWANEGARA', 'BANJARNEGARA', 'JAWA TENGAH', '6', 1, 4, '4', '4', '1', '2014-08-18');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pend_pindah`
--

CREATE TABLE IF NOT EXISTS `tb_pend_pindah` (
  `no_surat_pindah` varchar(20) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `nama_kk` varchar(25) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `tanggal_pindah` date NOT NULL,
  `alamat_tujuan` varchar(20) NOT NULL,
  `rt_tujuan` int(2) NOT NULL,
  `rw_tujuan` int(2) NOT NULL,
  `kec_tujuan` varchar(15) NOT NULL,
  `kab_tujuan` varchar(15) NOT NULL,
  `prov_tujuan` varchar(15) NOT NULL,
  `klsfksi_pindah` varchar(2) NOT NULL,
  `jenis_pindah` varchar(2) NOT NULL,
  `status_kk_pindah` varchar(2) NOT NULL,
  `status_kk_tdkpindah` varchar(2) NOT NULL,
  `alasan` varchar(2) NOT NULL,
  `tanggal_input` date NOT NULL,
  PRIMARY KEY (`no_surat_pindah`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_pend_pindah`
--

INSERT INTO `tb_pend_pindah` (`no_surat_pindah`, `no_kk`, `nama_kk`, `no_rt`, `no_rw`, `tanggal_pindah`, `alamat_tujuan`, `rt_tujuan`, `rw_tujuan`, `kec_tujuan`, `kab_tujuan`, `prov_tujuan`, `klsfksi_pindah`, `jenis_pindah`, `status_kk_pindah`, `status_kk_tdkpindah`, `alasan`, `tanggal_input`) VALUES
('470/001/2014', '3328021212120004', 'A', 3, 3, '2014-12-15', 'TONJONG', 2, 1, 'TONJONG', 'BREBES', 'JAWA TENGAH', '4', '1', '2', '3', '5', '2014-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rt`
--

CREATE TABLE IF NOT EXISTS `tb_rt` (
  `no` int(2) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `nama_rt` varchar(15) NOT NULL,
  `no_rw` int(2) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_rt`
--

INSERT INTO `tb_rt` (`no`, `no_rt`, `nama_rt`, `no_rw`) VALUES
(1, 1, 'KAIDI', 1),
(2, 2, 'TOPAN', 1),
(3, 3, 'RATNO', 1),
(4, 4, 'TAJRI', 1),
(5, 5, 'DARMO', 1),
(6, 6, 'JAWAWI', 1),
(7, 1, 'TORPUL', 2),
(8, 2, 'NASRO', 2),
(9, 3, 'SUGENG', 2),
(10, 4, 'SAMSUDIN', 2),
(11, 5, 'ROBI', 2),
(12, 6, 'WASAD', 2),
(13, 1, 'ROPI''I', 3),
(14, 2, 'SAEFULLOH', 3),
(15, 3, 'SAKLAN', 3),
(16, 4, 'SOPANUDIN', 3),
(17, 5, 'JUBEDI', 3),
(18, 1, 'JAHIDI', 4),
(19, 2, 'SAEPUDINI', 4),
(20, 3, 'KARIRI', 4),
(21, 4, 'WASRIP', 4),
(22, 5, 'KHARIS', 4),
(23, 6, 'JAHID', 4),
(24, 7, 'DAKRI', 4),
(25, 8, 'RINTO', 4),
(26, 9, 'WALIYO', 4),
(27, 10, 'MUSLIM', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rw`
--

CREATE TABLE IF NOT EXISTS `tb_rw` (
  `no_rw` int(2) NOT NULL,
  `nama_rw` varchar(15) NOT NULL,
  PRIMARY KEY (`no_rw`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_rw`
--

INSERT INTO `tb_rw` (`no_rw`, `nama_rw`) VALUES
(1, 'DIAS'),
(2, 'SUPARJO'),
(3, 'WASTO'),
(4, 'TARIP');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sementarakk`
--

CREATE TABLE IF NOT EXISTS `tb_sementarakk` (
  `no_reg_pend` varchar(10) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_akta` varchar(20) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status_nikah` varchar(15) NOT NULL,
  `no_akta_nikah` varchar(20) NOT NULL,
  `tanggal_nikah` varchar(12) NOT NULL,
  `no_akta_cerai` varchar(20) NOT NULL,
  `tanggal_cerai` varchar(12) NOT NULL,
  `status_hub` varchar(20) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_sementarakk`
--

INSERT INTO `tb_sementarakk` (`no_reg_pend`, `nik`, `nama`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `no_akta`, `agama`, `status_nikah`, `no_akta_nikah`, `tanggal_nikah`, `no_akta_cerai`, `tanggal_cerai`, `status_hub`, `pendidikan`, `pekerjaan`, `nama_ayah`, `nama_ibu`, `no_rt`, `no_rw`) VALUES
('Reg00030', '3328020909830002', 'MUHAMMAD LUBSI', 'Laki-laki', 'Tegal', '1983-09-09', '-', ' Islam ', ' Kawin ', '-', '-', '-', '-', ' Kepala Keluarga ', ' Diploma IV/Strata I ', ' Wiraswasta ', 'M.ROJIDIN', 'TOIPAH', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_sementaramasuk`
--

CREATE TABLE IF NOT EXISTS `tb_sementaramasuk` (
  `no_surat_masuk` varchar(30) NOT NULL,
  `no_reg_pend` varchar(10) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umur` int(2) NOT NULL,
  `no_akta` varchar(20) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status_nikah` varchar(15) NOT NULL,
  `no_akta_nikah` varchar(20) NOT NULL,
  `tanggal_nikah` varchar(12) NOT NULL,
  `no_akta_cerai` varchar(20) NOT NULL,
  `tanggal_cerai` varchar(12) NOT NULL,
  `status_hub` varchar(20) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `no_surat_kelahiran` varchar(20) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `tanggal_input` date NOT NULL,
  PRIMARY KEY (`no_reg_pend`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_sementaramasuk`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_sementarapindah`
--

CREATE TABLE IF NOT EXISTS `tb_sementarapindah` (
  `no_reg_pend` varchar(10) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status_nikah` varchar(15) NOT NULL,
  `status_hub` varchar(20) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_sementarapindah`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_sktm`
--

CREATE TABLE IF NOT EXISTS `tb_sktm` (
  `no_surat` varchar(20) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `tanggal_input` date NOT NULL,
  `oleh` varchar(25) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_sktm`
--

INSERT INTO `tb_sktm` (`no_surat`, `nik`, `nama`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `agama`, `pekerjaan`, `no_rt`, `no_rw`, `tanggal_input`, `oleh`) VALUES
('422.5/001/XII/2014', '3328021202020004', 'A.SIFAU NAJAH', 'Laki-laki', 'Tegal', '2002-02-12', ' Islam ', ' Pelajar/Mahasiswa ', 6, 1, '2014-12-10', 'ABDUL KHAYYI');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_hub`
--

CREATE TABLE IF NOT EXISTS `tb_status_hub` (
  `id` int(2) NOT NULL,
  `status_hub` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_status_hub`
--

INSERT INTO `tb_status_hub` (`id`, `status_hub`) VALUES
(1, 'Kepala Keluarga'),
(2, 'Suami'),
(3, 'Istri'),
(4, 'Anak'),
(5, 'Menantu'),
(6, 'Cucu'),
(7, 'Orangtua'),
(8, 'Mertua'),
(9, 'Famili Lain'),
(10, 'Pembantu'),
(11, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_nikah`
--

CREATE TABLE IF NOT EXISTS `tb_status_nikah` (
  `id` int(2) NOT NULL,
  `status_nikah` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_status_nikah`
--

INSERT INTO `tb_status_nikah` (`id`, `status_nikah`) VALUES
(2, 'Kawin'),
(1, 'Belum Kawin'),
(3, 'Cerai Hidup'),
(4, 'Cerai Mati');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat`
--

CREATE TABLE IF NOT EXISTS `tb_surat` (
  `no_surat` varchar(20) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `ket` varchar(20) NOT NULL,
  `tanggal_input` date NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_surat`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_domisili`
--

CREATE TABLE IF NOT EXISTS `tb_surat_domisili` (
  `no_surat` varchar(20) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status_nikah` varchar(15) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `tanggal_input` date NOT NULL,
  `oleh` varchar(25) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_surat_domisili`
--

INSERT INTO `tb_surat_domisili` (`no_surat`, `nik`, `nama`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `status_nikah`, `pekerjaan`, `no_rt`, `no_rw`, `tanggal_input`, `oleh`) VALUES
('474.4/001/XII/2014', '', 'ANIP', 'Perempuan', 'Banjarnegara', '1985-12-15', ' Kawin ', ' Mengurus Rumah Tangga ', 1, 4, '2014-12-10', 'ABDUL KHAYYI');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_skck`
--

CREATE TABLE IF NOT EXISTS `tb_surat_skck` (
  `no_surat` varchar(20) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `tanggal_input` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `oleh` varchar(25) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_surat_skck`
--

INSERT INTO `tb_surat_skck` (`no_surat`, `nik`, `nama`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `agama`, `pekerjaan`, `no_rt`, `no_rw`, `tanggal_input`, `tanggal_akhir`, `oleh`) VALUES
('331/001/2014', '3328020909830002', 'MUHAMMAD LUBSI', 'Laki-laki', 'Tegal', '1983-09-09', ' Islam ', ' Wiraswasta ', 6, 1, '2014-12-10', '2015-02-10', 'ABDUL KHAYYI');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_usaha`
--

CREATE TABLE IF NOT EXISTS `tb_surat_usaha` (
  `no_surat` varchar(20) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `tanggal_input` date NOT NULL,
  `usaha` varchar(50) NOT NULL,
  `oleh` varchar(25) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_surat_usaha`
--

INSERT INTO `tb_surat_usaha` (`no_surat`, `nik`, `nama`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `agama`, `pekerjaan`, `no_rt`, `no_rw`, `tanggal_input`, `usaha`, `oleh`) VALUES
('500/001/2014', '3328020909830002', 'MUHAMMAD LUBSI', 'Laki-laki', 'Tegal', '1983-09-09', ' Islam ', ' Wiraswasta ', 6, 1, '2014-12-10', 'Warnet dan Kursus Komputer', 'ABDUL KHAYYI');
