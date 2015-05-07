-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2015 at 11:13 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ion_auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE IF NOT EXISTS `absensi` (
`id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time NOT NULL,
  `ip_address_masuk` varchar(20) NOT NULL,
  `ip_address_keluar` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE IF NOT EXISTS `agama` (
`id` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id`, `nama`) VALUES
(1, 'Islam'),
(2, 'Kristen Protestan'),
(3, 'Kristen Katolik'),
(4, 'Hindu'),
(5, 'Budha'),
(6, 'Konghucu');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
`id_berita` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `username`, `id_kategori`, `judul`, `isi`, `tanggal`) VALUES
(1, 'admin@gmail.com', 0, 'Pendaftaran Bagi Siswa/Mahasiswa SMK/SMA, S1, S2, S3 yang akan PKL dan TA di PPF - LIPI', '<p>Selamat Datang Siswa/Mahasiswa PKL / TA.</p>\n\n<p>Bagi siswa/mahasiswa yang akan melaksanakan Praktik Kerja Lapangan atau Tugas Akhir pada Pusat Penelitian Fisika - LIPI. Setiap siswa/mahasiswa harus melakukan pendaftaran menjadi mahasiswa TA/PKL di PPF - LIPI dan mengajukan topik serta memilih Pembimbing Instansi PPF - LIPI melalui aplikasi online yang telah disediakan ini. Untuk melakukan pendaftaran&nbsp;silahkan&nbsp;<em>login </em>terlebih dahulu di web ini, dan jika belum mempunyai akun, silahkan mendaftar terlebih dahulu pada link <strong>Buat Akun Baru?</strong></p>\n\n<blockquote>\n<p><strong>Selamat Bergabung siswa/mahasiswa Praktik Kerja Lapangan atau Tugas Akhir</strong></p>\n</blockquote>\n\n<p><b><span style="color:#FF0000;"><span style="font-size:16px;">Perhatian! Sistem Informasi Penerimaan Mahasiswa PKL/TA ini lebih baik menggunakan browser Google Chrome</span></span>.</b></p>\n', '2014-05-08'),
(2, 'admin@gmail.com', 6, 'Peningkatan Peran Riset dan Edukasi Fisika untuk Mewujudkan Kemandirian IPTEK Nasional', '<p><font color="#000000" face="Helvetica" size="2"><font color="#000000" face="Helvetica" size="2">Seminar Nasional Fisika adalah salah satu agenda tahunan Pusat Penelitian Fisika LIPI yang diselenggarakan sejak tahun 1980. Pada tahun 2013, Pusat Penelitian Fisika LIPI bekerjasama dengan Himpunan Fisika Indonesia (HFI), cabang Jakarta akan mengadakan seminar dengan tema &quot;Peningkatan Peran Riset dan Edukasi Fisika untuk Meningkatkan Kemandirian Iptek Nasional&quot;. Seminar akan dihadiri oleh Pembicara dari berbagai lembaga riset, industri, dan universitas. Seminar ini diharapkan dapat menjadi sarana pertukaran informasi antara peneliti, peneliti dengan industri yang dapat menjadi inspirasi untuk meningkatkan penerapan Sistem Inovasi Nasional dan Implementasi MP3EI.</font></font></p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;- http://situs.opi.lipi.go.id/snf2013/</p>\n', '2014-05-08'),
(3, 'admin@gmail.com', 1, 'Penerimaan Mahasiswa Tugas Akhir S3 Bidang Fisika Theory ', '<p>Kami beritahukan bahwa telah dibuka penerimaan mahasiswa S3 di bidang Fisika Teori untuk melakukan penelitian mengenai Tomography.</p>\n\n<p>Pendataran kami tutup sampai dengan Bulan Juni 2014.</p>\n\n<p>&nbsp;</p>\n', '2014-05-08'),
(4, 'admin@gmail.com', 1, 'Penerimaan Mahasiswa TA/PKL S1 dan S2  untuk Bidang Magnet dan Baterai', '<p>Peluang PKL/TA di PPF - LIPI di bidang baterai magnet bagi mahasiswa S1 dan S2 di seluruh wilayah Indonesia. Silahkan melakukan pendaftaran. Pendaftaran ditutup pada akhir Agustus 2014. Pelaksanaan PKL/TA dilakukan pada Bulan September 2014.</p>\n', '2014-05-08'),
(8, 'kerjasamafisikalipi@gmail.com', 1, 'Pendaftaran PKL/TA di PPF - LIPI sementara ditutup Bulan Maret - Juni 2015', '<p>Sehubungan dengan proses penggabungan satuan kerja Pusat Penelitian Fisika dengan Bidang Fisika Bahan Baru LIPI, dengan ini kami umumkan bahwa proses penerimaan sementara ini ditutup untuk pendaftaran Bulan Maret - Juni 2015. Pembukaan pendaftaran akan dibuka kembali pada bulan Mei 2015. Demikian informasi ini kami sampaikan. Atas perhatian saudar/i kami ucapkan terima kasih.</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n', '2015-02-27'),
(6, 'kerjasamafisikalipi@gmail.com', 2, 'Beasiswa Penelitian Tugas Akhir', '<p>Kabar gembira untuk mahasiswa seluruh Indonesia....</p>\n\n<p>PPF - LIPI membuka lebar kesempatan bagi para mahasiswa D3/S1 yang ingin melakukan kegiatan penelitian Tugas Akhirnya dengan fasilitas beasiswa hingga 5 juta rupiah. Adapun beasiswa ini diperuntukkan kepada mahasiswa berprestasi yang memiliki minat tinggi akan penelitian di bidang Fisika. Informasi lebih lanjut silahkan menghubungi no telp atau email yang ada di kontak kami.</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n', '2015-02-01'),
(7, 'kerjasamafisikalipi@gmail.com', 6, 'International Symposium on Frontier Applied Physics', '<p style="text-align: center;"><font color="#000000" face="Helvetica" size="2"><font color="#000000" face="Helvetica" size="2"><b><font color="#000090" face="Helvetica" size="5">International Symposium on Frontier Applied Physics</font></b></font></font></p>\n\n<p style="text-align: center;">&nbsp;</p>\n\n<p style="text-align: center;">&nbsp;</p>\n\n<p><font color="#000000" face="Helvetica" size="2"><font color="#000000" face="Helvetica" size="2"><font color="#00008B"><font size="5"><b><i>CALL FOR PAPER</i></b></font></font></font></font></p>\n\n<p align="justify">We are pleased to invite you to participate in International Symposium on Frontier Applied Physics 2015 (ISFAP 2015). The symposium is supported by Indonesian Physical Society (HFI) and Research Center for Physics - Indonesian Institute of Sciences. This symposium will be held on 5<sup>th</sup> - 7<sup>th</sup> October 2015 in Bandung, Indonesia.</p>\n\n<p align="justify">The scope of the symposium includes all scientific and technical activities from theoretical physics to the advanced application of physics in material sciences, geophysics, lasers, photonics, biophysics, instrumentation and much more. All contributed papers will be published through the <a href="http://scitation.aip.org/content/aip/proceeding/aipcp/" style="text-decoration:none" target="baru"> <u>American Institute of Physics (AIP) Conference Proceeding</u>.</a></p>\n\n<p align="justify">&nbsp;</p>\n\n<p align="justify"><font color="#00008B"><font size="5"><b><i>PAPER TOPIC:</i></b></font></font></p>\n\n<ul>\n	<li>Laser and Optoelectronics</li>\n	<li>Magnetism and Superconductivity</li>\n	<li>Geophysics</li>\n	<li>Biomedical Physics, and Environmental Physics</li>\n	<li>Hybrid, Ceramics, and Composite Materials</li>\n	<li>Advanced Materials, Materials for Energy, and Device and Nanotechnology</li>\n	<li>Surface and Corrosion Science</li>\n	<li>Extractive Metallurgy and Materials Process Engineering</li>\n	<li>Advanced Characterization of Materials</li>\n</ul>\n\n<p>&nbsp;</p>\n\n<p><font color="#00008B"><font size="5"><b><i>INVITED SPEAKERS:</i></b></font></font></p>\n\n<ul>\n	<li>Prof. Yong-Hoon Cho <sup>*</sup> (KAIST, South Korea)</li>\n	<li>Prof. Dr. Allard P. Mosk <sup>*</sup> (University of Twente, Netherland)</li>\n	<li>Prof. Dr. Martin Winter <sup>*</sup> (University of M&uuml;nster, Germany)</li>\n	<li>Prof. Paul Jennings <sup>*</sup> (University of Warwick, UK)</li>\n	<li>Prof. Shigenari Hayashi <sup>*</sup> (TIT, Japan)</li>\n	<li>Dr. Dhannie Hidayat <sup>*</sup> (NTU, Singapore)</li>\n</ul>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>http://situs.opi.lipi.go.id/isfap2015/</p>\n', '2015-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
`id` mediumint(8) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'Pembimbing', 'Pembimbing Lapangan LIPI'),
(3, 'Pemohon', 'Mahasiswa PKL/TA'),
(4, 'Pejabat', 'Pejabat'),
(5, 'Bendahara', 'Bendahara'),
(6, 'Operator', 'Operator');

-- --------------------------------------------------------

--
-- Table structure for table `halaman`
--

CREATE TABLE IF NOT EXISTS `halaman` (
`id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `tag` varchar(50) NOT NULL,
  `posisi` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `halaman`
--

INSERT INTO `halaman` (`id`, `title`, `description`, `tag`, `posisi`, `foto`) VALUES
(2, 'Pembimbingan TA/PKL', '<h3 style="box-sizing: border-box; font-family: Lato, ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-weight: 400; line-height: 1.1; color: rgb(44, 62, 80); margin-top: 21px; margin-bottom: 10.5px; font-size: 26px; font-style: normal; font-variant: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);"><span style="font-size:18px;">Pendaftaran Bagi Siswa/Mahasiswa SMK/SMA, S1, S2, S3 yang akan PKL dan TA di PPF - LIPI</span></h3>\r\n\r\n<p style="box-sizing: border-box; margin: 0px 0px 10.5px; color: rgb(44, 62, 80); font-family: Lato, ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 15.555556297302246px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 23.809524536132813px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">Selamat Datang Siswa/Mahasiswa PKL / TA.</p>\r\n\r\n<p style="box-sizing: border-box; margin: 0px 0px 10.5px; color: rgb(44, 62, 80); font-family: Lato, ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 15.555556297302246px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 23.809524536132813px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">Bagi siswa/mahasiswa yang akan melaksanakan Praktik Kerja Lapangan atau Tugas Akhir pada Pusat Penelitian Fisika - LIPI. Setiap siswa/mahasiswa harus melakukan pendaftaran menjadi mahasiswa TA/PKL di PPF - LIPI dan mengajukan topik serta memilih Pembimbing Instansi PPF - LIPI melalui aplikasi online yang telah disediakan ini. Untuk melakukan pendaftaran&nbsp;silahkan&nbsp;<em style="box-sizing: border-box;">login </em>terlebih dahulu di web ini, dan jika belum mempunyai akun, silahkan mendaftar terlebih dahulu pada link <strong style="box-sizing: border-box; font-weight: bold;">Buat Akun Baru?</strong></p>\r\n\r\n<blockquote style="box-sizing: border-box; padding: 10.5px 21px; margin: 0px 0px 21px; font-size: 18.75px; border-left-width: 5px; border-left-style: solid; border-left-color: rgb(236, 240, 241); color: rgb(44, 62, 80); font-family: Lato, ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">\r\n<p style="box-sizing: border-box; margin: 0px;"><strong style="box-sizing: border-box; font-weight: bold;">Selamat Bergabung siswa/mahasiswa Praktik Kerja Lapangan atau Tugas Akhir</strong></p>\r\n</blockquote>\r\n\r\n<p style="box-sizing: border-box; margin: 0px 0px 10.5px; color: rgb(44, 62, 80); font-family: Lato, ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 15.555556297302246px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 23.809524536132813px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);"><b style="box-sizing: border-box; font-weight: bold;"><span style="box-sizing: border-box; color: rgb(255, 0, 0);"><span style="box-sizing: border-box; font-size: 16px;">Perhatian! Selalu Cek Status Pendaftaran Anda Pada Link &quot;Status Pendaftaran&quot; Sistem Informasi Penerimaan Mahasiswa PKL/TA ini.</span> </span></b></p>\r\n\r\n<p style="box-sizing: border-box; margin: 0px 0px 10.5px; color: rgb(44, 62, 80); font-family: Lato, ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 15.555556297302246px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 23.809524536132813px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">&nbsp;</p>\r\n<a class="btn btn-lg btn-primary pull-right" href="home/status_pendaftaran">Status\r\n				Pendaftaran</a>', 'Pembimbingan', 1, 'pendaftaran1.jpg'),
(3, 'Layanan Jasa Pengujian', '<p>Dengan dukungan SDM (peneliti, perekayasan dan teknisi) di bidang fisika dan SDA (peralatan uji dan analisa) Pusat Penelitian Fisika - LIPI membuka pelayanan jasa pengujian, pengukuran, manufaktur, desain dan analisa.&nbsp;</p>\n\n<p>Pelayanan ini ini terbuka bagi mahasiswa, dosen, peneliti, kalangan indsutri, dan masyarakat umum. Silahkan mendaftar pada pendaftaran akun yang telah tersedia untuk mengajukan permohonan pelayanan jasa. Isi dengan lengkap data anda pada tiap halaman registrasi.</p>\n\n<h4><span style="color:#FF0000;"><strong>Mohon selalu cek status proses pengujian anda pada link &quot;Lihat Status Pengujian&quot;.</strong></span></h4>\n', 'Pengujian', 2, 'pengujian1.jpg'),
(4, 'Pelatihan', '<p style="text-align: justify;">Tujuan dan lingkup Puslit Fisika diarahkan pada usaha untuk mendukung pembangunan nasional melalui riset pengembangan sumber daya alam, terutama yang terkait dengan ilmu fisika, menuju Indonesia sebagai negara industri. Beberapa hal tersebut kemudian dilakukan dengan mengadakan beberapa pelatihan yang terkait dengan bidang fisika dan terapannya. Adapun pelatihan - pelatihan yang diselenggarakan oleh PPF - LIPI diantaranya adalah :</p>\n\n<ol>\n	<li style="text-align: justify;">Pelatihan untuk Teknisi Fiber Optik</li>\n	<li style="text-align: justify;">Pelatihan Uji Tarik Material</li>\n	<li style="text-align: justify;">Pelatihan Penggunaan Alat-alat analisa (DTA, HEM, XRD, SEM, TEM, PSA) dan Analisanya</li>\n	<li style="text-align: justify;">Pelatihan Mikrokontroller, FPGA dan Bahasa Pemrograman.</li>\n	<li style="text-align: justify;">Pelatihan Bengkel Mekanik.</li>\n	<li style="text-align: justify;">Pelatihan Baterai dan Magnet</li>\n</ol>\n\n<p style="text-align: justify;">Peserta pelatihan terdiri mahasiswa, dosen, para peneliti, teknisi, dan masyarakat umum. Silahkan daftar pelatihan yang ingin anda ikuti melalui email yang tertera pada wab ini.</p>\n\n<p style="text-align: justify;">&nbsp;</p>\n', 'Pelatihan', 1, 'Pelatihan.jpg'),
(5, 'Konsultasi Ilmiah', '<p>Konsultasikan masalah anda kepada terkait dengan bidang kajian ilmiah. Adapun bidang kajian untuk konsultasi yang dibuka adalah :</p>\n\n<ol>\n	<li>Fisika Industri dan Lingkungan</li>\n	<li>Fisika teori dan Komputasi</li>\n	<li>Fisika Instrumentasi dan Optoelektronika (fiber optik, laser, elektronika, optoelektronika, fotonik)</li>\n	<li>Material Maju (nanoteknologi, magnet, baterai, fuelcell, keramik, polimer)</li>\n</ol>\n\n<p>Kontak kami melalui email yang tertera pada web ini. Terima kasih.</p>\n', 'konsultasi', 2, 'Konsultasi_Ilmiah_(2)1.JPG'),
(6, 'Kerjasama', '<p>Beberapa kerjasama dalam penelitian telah dilakukan dan difasilitasi oleh Pusat penelitian Fisika sehingga tercipta kerjasama di dalam negeri. Kerjasama di luar negeri pun telah dilakukan oleh PPF &ndash; LIPI dalam mengoptimalkan program pengembangan penelitian yang lebih baik.</p>\n', 'kerjasama', 1, 'Kerjasama2.JPG'),
(13, 'Produk Riset', '<p>Berbagai penelitian yang dilakukan oleh peneliti dan dibantu teknisi menghasilkan berbagai hasil penelitian yang tentunya diharapkan dapat bermanfaat untuk masyarakat. Hasil penelitian tidak hanya dalam bentuk tulisan ilmiah namun dapat juga dalam bentuk prototip, pilot plan, produk contoh, teknologi dan perangkat lunak.</p>\n', 'produk', 2, 'produk-ppf.jpg'),
(7, 'Pameran', '<p>PPF - LIPI selalu berperan aktif untuk melakukan diseminasi hasil penelitian di dalam berbagai event pameran baik lokal maupun manca negara. Beberapa pameran yang telah diikuti adalah :</p>\n\n<ol>\n	<li>Pameran EXPO LIPI</li>\n	<li>Pameran EBTKE Connex</li>\n	<li>Ritech Expo</li>\n	<li>Pameran APMP 2014</li>\n</ol>\n', 'pameran', 1, 'Pameran.jpg'),
(10, 'Perpustakaan Digital', '<p>Dengan berbagai koleksi yang dimiliki PPF - LIPI, diantaranya adalah Jurnal, Laporan Teknis, Buku, Prosiding, Majalah bahkan e-book dapat anda cari melalui e-digital ini untuk membantu anda dalam mencari sumber referensi. Silahkan cari dengan menggunakan kata kunci yang spesifik.</p>\n', 'perpustakaan', 2, 'e-pustaka.jpg'),
(11, 'Kunjungan Laboratorium', '<p>Kami membuka kesempatan kepada pelajar, mahasiswa, guru, dosen dan peneliti yang ingin melakukan kunjungan laboratorium dengan menghubungi kami melalui email atau melalui surat yang ditujukan kepada Kepala Pusat Penelitian Fisika.</p>\r\n', 'kunjungan', 1, 'fisika-lipi_(5).JPG');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_berita`
--

CREATE TABLE IF NOT EXISTS `kategori_berita` (
`id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `kategori_berita`
--

INSERT INTO `kategori_berita` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Informasi PKL/TA'),
(2, 'Beasiswa'),
(6, 'Informasi Kegiatan P2F -  LIPI');

-- --------------------------------------------------------

--
-- Table structure for table `kompetensi`
--

CREATE TABLE IF NOT EXISTS `kompetensi` (
`id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `kompetensi`
--

INSERT INTO `kompetensi` (`id`, `nama`, `deskripsi`) VALUES
(1, 'Rekayasa Material', 'Kompotensi terkait dengan penemuan dan pengembangan bahan baru, serta material cerdik lainnya.'),
(2, 'Material Penyimpan Energi', 'Kompetensi yang terkait dengan material yang memiliki kemampuan untuk menyimpan energi seperi Baterai.'),
(3, 'Fisika Material Ionik dan Elektronik', 'Kompetensi yang terkait dengan material yang berhubungan dengan proses ionik dan elektronik'),
(4, 'Fisika Energi, Lingkungan dan Geofisika', 'Kompetensi yang terkait dengan pengembangan sumber-sumber energi berbasis biogas, geofisika dan penerapan fisika lainnya.'),
(5, 'Aplikasi Laser dan Fisika Teoritik', 'Kompetensi yang terkait dengan bidang laser dan aplikasinya serta fisika teori.'),
(6, 'Optoelektronika', 'Kompetensi yang terkait dengan bidang penelitian dan pengembangan serta penerapan devais berbasis optoelektronika.'),
(7, 'Fisika Energi', 'Kompetensi yang terkait dengan penemuan baru material sebagai sumber energi baru dan terbarukan, seperti Fuelcell, Biofuel dsb.'),
(8, 'Fisika Teori', '-'),
(9, 'Fisika Lingkungan', '-');

-- --------------------------------------------------------

--
-- Table structure for table `kuesioner`
--

CREATE TABLE IF NOT EXISTS `kuesioner` (
`id` int(11) NOT NULL,
  `usia` varchar(2) NOT NULL,
  `pendidikan_terakhir` varchar(15) NOT NULL,
  `tahun_kenal` varchar(5) NOT NULL,
  `unit_kenal` varchar(30) NOT NULL,
  `sumber_informasi` varchar(30) NOT NULL,
  `tahun_kunjung` varchar(4) NOT NULL,
  `media_kunjung` varchar(15) NOT NULL,
  `unit_kunjung` varchar(30) NOT NULL,
  `jenis_jasa` varchar(30) NOT NULL,
  `jenis_jasa_pernah` varchar(30) NOT NULL,
  `alasan_memilih` varchar(50) NOT NULL,
  `ketersediaan_informasi_harapan` int(1) NOT NULL,
  `ketersediaan_informasi_kondisi` int(1) NOT NULL,
  `kemudahan_informasi_harapan` int(1) NOT NULL,
  `kemudahan_informasi_kondisi` int(1) NOT NULL,
  `kejelasan_informasi_harapan` int(1) NOT NULL,
  `kejelasan_informasi_kondisi` int(1) NOT NULL,
  `kelengkapan_informasi_harapan` int(1) NOT NULL,
  `kelengkapan_informasi_kondisi` int(1) NOT NULL,
  `keragaman_informasi_harapan` int(1) NOT NULL,
  `keragaman_informasi_kondisi` int(1) NOT NULL,
  `kemudahan_akses_harapan` int(1) NOT NULL,
  `kemudahan_akses_kondisi` int(1) NOT NULL,
  `kemudahan_prosedur_harapan` int(1) NOT NULL,
  `kemudahan_prosedur_kondisi` int(1) NOT NULL,
  `kemudahan_administrasi_harapan` int(1) NOT NULL,
  `kemudahan_administrasi_kondisi` int(1) NOT NULL,
  `biaya_pelayanan_harapan` int(1) NOT NULL,
  `biaya_pelayanan_kondisi` int(1) NOT NULL,
  `kejelasan_pelayanan_harapan` int(1) NOT NULL,
  `kejelasan_pelayanan_kondisi` int(1) NOT NULL,
  `kedisiplinan_staf_harapan` int(1) NOT NULL,
  `kedisiplinan_staf_kondisi` int(1) NOT NULL,
  `tanggungjawab_staf_harapan` int(1) NOT NULL,
  `tanggungjawab_staf_kondisi` int(1) NOT NULL,
  `kecepatan_pelayanan_harapan` int(1) NOT NULL,
  `kecepatan_pelayanan_kondisi` int(1) NOT NULL,
  `penampilan_kerapihan_harapan` int(1) NOT NULL,
  `penampilan_kerapihan_kondisi` int(1) NOT NULL,
  `menanggapi_keluhan_harapan` int(1) NOT NULL,
  `menanggapi_keluhan_kondisi` int(1) NOT NULL,
  `komitmen_pelayanan_harapan` int(1) NOT NULL,
  `komitmen_pelayanan_kondisi` int(1) NOT NULL,
  `keramahan_pelayanan_harapan` int(1) NOT NULL,
  `keramahan_pelayanan_kondisi` int(1) NOT NULL,
  `ketepatan_pelayanan_harapan` int(1) NOT NULL,
  `ketepatan_pelayanan_kondisi` int(1) NOT NULL,
  `kompetensi_pelayanan_harapan` int(1) NOT NULL,
  `kompetensi_pelayanan_kondisi` int(1) NOT NULL,
  `ketersediaan_ruangan_harapan` int(1) NOT NULL,
  `ketersediaan_ruangan_kondisi` int(1) NOT NULL,
  `kelengkapan_ruangan_harapan` int(1) NOT NULL,
  `kelengkapan_ruangan_kondisi` int(1) NOT NULL,
  `kebersihan_tempat_harapan` int(1) NOT NULL,
  `kebersihan_tempat_kondisi` int(1) NOT NULL,
  `kelengkapan_peralatan_harapan` int(1) NOT NULL,
  `kelengkapan_peralatan_kondisi` int(1) NOT NULL,
  `kenyamanan_ruangan_harapan` int(1) NOT NULL,
  `kenyamanan_ruangan_kondisi` int(1) NOT NULL,
  `ketersediaan_perlengkapan_harapan` int(1) NOT NULL,
  `ketersediaan_perlengkapan_kondisi` int(1) NOT NULL,
  `kemutakhiran_peralatan_harapan` int(1) NOT NULL,
  `kemutakhiran_peralatan_kondisi` int(1) NOT NULL,
  `fasilitas_keselamatan_harapan` int(1) NOT NULL,
  `fasilitas_keselamatan_kondisi` int(1) NOT NULL,
  `fasilitas_kesehatan_harapan` int(1) NOT NULL,
  `fasilitas_kesehatan_kondisi` int(1) NOT NULL,
  `aspek_penyediaan` varchar(50) NOT NULL,
  `aspek_pelayanan` varchar(50) NOT NULL,
  `aspek_fasilitas` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
`id` int(11) unsigned NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `log_harian`
--

CREATE TABLE IF NOT EXISTS `log_harian` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `kegiatan` text NOT NULL,
  `kendala` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pembimbing`
--

CREATE TABLE IF NOT EXISTS `pembimbing` (
`id` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL,
  `alamat` text NOT NULL,
  `Kompetensi` varchar(100) NOT NULL,
  `profil` varchar(50) NOT NULL,
  `foto` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `agama_id` int(1) NOT NULL,
  `kompetensi_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pemohon`
--

CREATE TABLE IF NOT EXISTS `pemohon` (
`id` int(11) NOT NULL,
  `npm` varchar(10) NOT NULL,
  `nama_pemohon` varchar(60) NOT NULL,
  `ttl` varchar(30) NOT NULL,
  `jenis_kelamin` enum('M','F') NOT NULL,
  `perguruan_tinggi` varchar(60) NOT NULL,
  `strata_pendidikan` varchar(50) NOT NULL,
  `alamat_perguruan` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `semester` varchar(2) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `handphone` varchar(15) NOT NULL,
  `dosen_pembimbing` varchar(30) NOT NULL,
  `no_dosen` varchar(15) NOT NULL,
  `CV` varchar(60) NOT NULL,
  `foto` varchar(60) NOT NULL,
  `transkrip_nilai` varchar(60) NOT NULL,
  `kartu_identitas` varchar(60) NOT NULL,
  `proposal` varchar(60) NOT NULL,
  `pelaporan_seminar` varchar(60) NOT NULL,
  `draft_makalah` varchar(60) NOT NULL,
  `draft_laporan` varchar(60) NOT NULL,
  `topik` varchar(100) NOT NULL,
  `jenis_kegiatan` varchar(50) NOT NULL,
  `jadwal_pkl_start` date NOT NULL,
  `jadwal_pkl_end` date NOT NULL,
  `alasan` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `agama_id` int(11) NOT NULL,
  `pembimbing_id` int(11) NOT NULL,
  `status_id` int(1) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pemohon`
--

INSERT INTO `pemohon` (`id`, `npm`, `nama_pemohon`, `ttl`, `jenis_kelamin`, `perguruan_tinggi`, `strata_pendidikan`, `alamat_perguruan`, `jurusan`, `semester`, `alamat`, `handphone`, `dosen_pembimbing`, `no_dosen`, `CV`, `foto`, `transkrip_nilai`, `kartu_identitas`, `proposal`, `pelaporan_seminar`, `draft_makalah`, `draft_laporan`, `topik`, `jenis_kegiatan`, `jadwal_pkl_start`, `jadwal_pkl_end`, `alasan`, `user_id`, `agama_id`, `pembimbing_id`, `status_id`) VALUES
(5, '123', 'asm', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pengujian`
--

CREATE TABLE IF NOT EXISTS `pengujian` (
`id` int(11) NOT NULL,
  `nama_pengujian` varchar(60) NOT NULL,
  `nama_alat` varchar(60) NOT NULL,
  `manfaat_pengujian` text NOT NULL,
  `syarat_pengujian` text NOT NULL,
  `nip_operator` varchar(20) NOT NULL,
  `lama_pengerjaan` int(3) NOT NULL,
  `nama_lab` varchar(30) NOT NULL,
  `spesifikasi_alat` text NOT NULL,
  `harga` int(13) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pengujian`
--

INSERT INTO `pengujian` (`id`, `nama_pengujian`, `nama_alat`, `manfaat_pengujian`, `syarat_pengujian`, `nip_operator`, `lama_pengerjaan`, `nama_lab`, `spesifikasi_alat`, `harga`) VALUES
(1, 'alat', 'alat', 'alat', 'alat', '123412', 1, 'alat', 'sd', 10);

-- --------------------------------------------------------

--
-- Table structure for table `status_verifikasi_pelayanan`
--

CREATE TABLE IF NOT EXISTS `status_verifikasi_pelayanan` (
`id` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `status_verifikasi_pelayanan`
--

INSERT INTO `status_verifikasi_pelayanan` (`id`, `nama`) VALUES
(0, 'VERIFIKASI JAIF'),
(1, 'VERIFIKASI PEMBIMBING'),
(2, 'BELUM AKTIF'),
(3, 'TIDAK LULUS'),
(4, 'LULUS'),
(5, 'NON AKTIF');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) unsigned NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `company`, `phone`, `photo`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', NULL, NULL, NULL, '8jdtu7btYknVG.IwMdULnO', 1268889823, 1425549200, 1, 'ADMIN', '0', ''),
(2, '::1', 'ihsan arif', '$2y$08$3VMneIEloqzqWy5R8BBjcevKha5LK86mUc8Dfnd72RhhwAUV9tMSS', NULL, 'ihsan.android@gmail.com', NULL, 'ldeTFAn-TdJ36MdkEiuu1uf548083f4515013465', 1424925624, NULL, 1424922144, 1424931477, 1, 'Sutsen', '085222828740', ''),
(12, '::1', 'ihsan.mikrotik@gmail.com', '$2y$08$I/rSYTA/JTZvTaZ9ifWg2.laGS.05Uumf0SVMVsS9mssq4jbJaZga', NULL, 'ihsan.mikrotik@gmail.com', NULL, NULL, NULL, NULL, 1425023830, 1425024845, 1, NULL, NULL, 'avatar_male.png');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
`id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(3, 1, 1),
(4, 1, 2),
(8, 2, 2),
(17, 12, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
 ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `halaman`
--
ALTER TABLE `halaman`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
 ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kompetensi`
--
ALTER TABLE `kompetensi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuesioner`
--
ALTER TABLE `kuesioner`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_harian`
--
ALTER TABLE `log_harian`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembimbing`
--
ALTER TABLE `pembimbing`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemohon`
--
ALTER TABLE `pemohon`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengujian`
--
ALTER TABLE `pengujian`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_verifikasi_pelayanan`
--
ALTER TABLE `status_verifikasi_pelayanan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`), ADD KEY `fk_users_groups_users1_idx` (`user_id`), ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `halaman`
--
ALTER TABLE `halaman`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kompetensi`
--
ALTER TABLE `kompetensi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `kuesioner`
--
ALTER TABLE `kuesioner`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log_harian`
--
ALTER TABLE `log_harian`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pembimbing`
--
ALTER TABLE `pembimbing`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pemohon`
--
ALTER TABLE `pemohon`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pengujian`
--
ALTER TABLE `pengujian`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `status_verifikasi_pelayanan`
--
ALTER TABLE `status_verifikasi_pelayanan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
