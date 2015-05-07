-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 04. Mei 2015 jam 16:11
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dompet`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(8) NOT NULL,
  `pass` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `kd_produk` int(11) NOT NULL AUTO_INCREMENT,
  `kd_kategori` varchar(20) NOT NULL,
  `nm_produk` varchar(40) NOT NULL,
  `input_date` datetime NOT NULL,
  `hrg_beli` int(11) NOT NULL,
  `laba` int(11) NOT NULL,
  `hrg_jual` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`kd_produk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kd_produk`, `kd_kategori`, `nm_produk`, `input_date`, `hrg_beli`, `laba`, `hrg_jual`, `gambar`, `deskripsi`) VALUES
(1, 'Dompet cowok', 'Dompet Cowok', '2015-05-04 14:45:03', 100000, 25, 125000, 'produk/IMG-20150401-WA0053.jpeg', '<p>Dompet cowok berasal dari bahan kulit asli</p>'),
(2, 'Dompet cowok', 'Dompet Kulit Kerbau', '2015-05-04 14:54:17', 500000, 25, 625000, 'produk/dompet laki.jpg', '<p>Dompet dengna bahan kulit kerbau alami dari petani</p>'),
(3, 'Dompet cowok', 'Dompet Kulit Sapi', '2015-05-04 14:55:29', 250000, 50, 375000, 'produk/IMG-20150401-WA0053.jpeg', '<p>Dompet dengna bahan kulit sapi asli</p>'),
(4, 'Dompet cowok', 'Dompet Kulit Alir', '2015-05-04 14:56:23', 350000, 10, 353500, 'produk/IMG-20150401-WA0048.jpeg', '<p>Dompet kulit ular dari ufuk timur</p>'),
(5, 'Dompet cewek', 'Dompet Bludru', '2015-05-04 15:06:30', 500000, 50, 750000, 'produk/1449e4e4be460b611fac22c80b654fb1.jpg', '<p>Dompet bludru cocok untuk cewekmuda</p>'),
(6, 'Dompet cewek', 'Dompet cewek', '2015-05-04 14:53:25', 200000, 10, 202000, 'produk/jual dompet hp.jpg', '<p>Dompet cewek sengan bahan kulit alamai guyss</p>'),
(7, 'Dompet cewek', 'Dompet Besar', '2015-05-04 14:57:09', 550000, 10, 555500, 'produk/copy.jpg', '<p>Dompet Cewek Besar keren</p>'),
(8, 'Dompet cewek', 'Dompet Cewek Keren', '2015-05-04 14:58:46', 200000, 25, 250000, 'produk/IMG-20121124-02170.jpg', '<p>Domper cewek terkeren</p>'),
(9, 'Dompet cowok', 'Dompet Biawak', '2015-05-04 15:04:46', 350000, 10, 353500, 'produk/post.jpg', '<p>Dompet dengan bahan biawakDompet dengan bahan biawakDompet dengan bahan biawakDompet dengan bahan biawakDompet dengan bahan biawakDompet dengan bahan biawakDompet dengan bahan biawakDompet dengan bahan biawakDompet dengan bahan biawakDompet dengan bahan biawakDompet dengan bahan biawakDompet dengan bahan biawakDompet dengan bahan biawakDompet dengan bahan biawak</p>'),
(10, 'Dompet cewek', 'Dompet Cewek', '2015-05-04 16:02:12', 1000000, 10, 1010000, 'produk/dompet.jpg', '<p>Dompet cewek ini</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `tgl_post` date NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `contents` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id`, `title`, `tgl_post`, `gambar`, `contents`) VALUES
(3, 'Tips Dompet', '2015-04-08', '', '<p style="text-align: justify;">Tips No 1. Selamat karena anda telah membeli sebuah dompet terbaru yang telah lama anda inginkan. Ini merupakan langkah penting untuk meletakkan barang-barang keperluan anda, misalnya: uang, kartu kredit, organizer, SIM, dan dokumen penting lainnya. Dengan dompet baru, anda juga dapat bergaya dengan beberapa pilihan koleksi dompet model baru dan berkelas yang telah anda beli.\r\nTips 2. Dompet baru anda tampak sangat indah, banyak teman anda memuji selera anda. Lalu apa yang harus anda lakukan sekarang? Langkah yang paling penting dalam perawatan dompet adalah pencegahan. Yah, mencegah tinta pena meluber ke bagian dalam dompet anda. Untuk menyimpan pena, anda seharusnya membeli sebuah dompet hpo organizer yang lebih cocok. Model dompet jenis ini sangat baik untuk menyimpan barang yang lebih besar. Bila anda membeli dompet seharga Rp 200.000, jadi mengapa anda merusaknya dengan pena seharga Rp 10.000? Demikian juga dengan noda yang bisa ditinggalkan oleh peralatan make-up anda. Anda harus memasukkan semua peralatan make-up anda ke dalam sebuah dompet/tas kecil untuk make-up, bukan ke dompet! Salah satu alternatif yang murah dan sederhana adalah dengan tas kecil dengan reslueting/zipper atau penjepit velcro. Tas jenis ini murah harganya dan memberikan proteksi terhadap dompet baru anda.\r\nTips No 3. Selanjutnya Anda perlu mencegah terjadinya tanda lecet, goresan, jamur, dan permen keret menempel pada dompet Anda. Jadi apa yang harus anda lakukan? Jauhkan dompet anda dari lantai! Ada tempat yang jauh lebih aman untuk dompet anda, misalnya di sandaran kursi atau di atas meja atau di lemari, bukan di lantai.\r\nTips No 4. Anda perlu mengetahui perawatan sehari-hari dalam menjaga & memperpanjang masa pakai dompet Anda. Lembab adalah musuh utama dompet, terutama untuk dompet kulit. Keunggulan dompet yang terbuat dari bahan sintetis atau PVC adalah mereka lebih baik dalam mencegah meresapnya cairan dari dompet berbahan alami seperti kulit. Tapi bukan berarti Anda harus pergi menari di tengah hujan dengan tas non-kulit, mereka masih bisa tetap rusak. Ada banyak produk repellant atau penahan air di pasar, belilah satu untuk dompet dan tas kulit Anda. Bila terjadi noda atau air menempel di dompet anda, hapus atau keringkan sesegera mungkin.\r\nTips No 5. Membersihkan bagian luar dompet. Selalu periksa bahan dompet Anda sebelum membersihkannya. Meskipun pembersih sehari-hari mungkin tersedia, hindari menggunakan pembersih rumah tangga ini di dompet Anda karena mereka dapat memperburuk kondisi dompet anda. Gunakan hanya pembersih khusus untuk bahan dompet. Berinvestasi dalam pembersih kulit untuk dompet dan tas kulit, saya percaya Anda tidak akan menyesal. Apakah Anda pernah tahu orang-orang yang menggunakan tisu untuk menghapus riasan dari wajah cantik mereka? Ya, selain tisu muka ada juga loh tisu kulit! Ini bagus untuk membersihkan bagian luar dompet dan tas. Tisu ini bentuknya dalam lembaran juga dan selain membersihkan dompet dan tas kulit dapat juga dipakai untuk membersihkan kulit mebel. Yah, fungsinya jadi 2-in-1! Peringatan: Jangan gunakan pada wajah Anda. Untuk dompet sintetis kain lembab biasanya cukup untuk membersihkan bagian luar dompet. Untuk kotoran yang lebih nyata, bisa dipakai kain lembab dengan sabun ringan, tetapi pastikan untuk menguji pada suatu daerah tidak mencolok sebelum membersihkan seluruh dompet dan tas. Untuk dompet dan dompet berbahan suede, gunakan sikat suede untuk membersihkan serat. Untuk semua bahan lainnya silakan lihat panduan perawatan dompet yang tersedia bersama dompetnya.</p>'),
(6, 'Cara Memilih Dompet', '0000-00-00', 'dompet laki.jpg', '<p style="margin-top: 10px; margin-bottom: 15px; font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 16.2000007629395px; text-align: justify;">Perkembangan model dompet kulit pria dengan beragam pilihan merek dan kualitas dompet kini semakin pesat di Indonesia, seiring dengan tumbuh dan berkembang sentra-sentra industri kerajinan kulit seperti di daerah Bandung &ndash; Jawa Barat dan Magetan di Jawa Timur.</p>\r\n<p style="margin-top: 10px; margin-bottom: 15px; font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 16.2000007629395px; text-align: justify;">Ada baiknya sebelum membeli dan memilih dompet kulit, beberapa hal berikut ini perlu Anda pertimbangkan :<span id="more-1288"></span></p>\r\n<ol style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 16.2000007629395px;">\r\n<li>Belilah dompet kulit pria dengan kualitas dan model dompet yang sesuai dengan karakter Anda. Karakter biasanya diwakili dengan warna. Jika Anda memiliki karakter yang tegas, tentu tepat jika Anda membeli dompet kulit yang berwarna gelap seperti coklat tua atau hitam.</li>\r\n<li>Jangan tergoda oleh merek dompet kulit pria, sebaiknya Anda fokus saja pada kualitas dompet dan kebutuhan Anda. Jika Anda termasuk lelaki yang sibuk, pilihlah dompet kulit yang bisa menampung beberapa kebutuhan Anda, seperti saku-saku untuk menyimpan berbagai kartu atm, kartu kredit, kartu identitas dan lainnya.</li>\r\n<li>Dompet kulit pria yang mahal belum tentu kualitas dompet tersebut bagus, oleh sebab itu pemahaman Anda tentang dompet kulit akan banyak membantu Anda untuk menentukan pilihan dompet pria berbahan kulit yang bagaimana yang menjadi pilihan Anda.</li>\r\n</ol>'),
(7, 'Gajelas', '2015-04-07', 'dompet.jpg', '<p class="MsoNormal" style="text-align: justify; mso-layout-grid-align: none; text-autospace: none;"><span style="font-family: Arial, sans-serif;" lang="EN-US">Menimbang:</span></p>\r\n<p class="MsoNormal" style="margin-left: 36.0pt; text-align: justify; text-indent: -36.0pt; mso-layout-grid-align: none; text-autospace: none;"><span style="font-family: Arial, sans-serif;" lang="EN-US">a.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; bahwa untuk melaksanakan kedaulatan rakyat atas dasar kerakyatan yang dipimpin oleh hikmat kebijaksanaan dalam permusyawaratan/perwakilan, perlu mewujudkan lembaga permusyawaratan rakyat, lembaga perwakilan rakyat, dan lembaga perwakilan daerah yang mampu mengejawantahkan nilai-nilai demokrasi serta menyerap dan memperjuangkan aspirasi rakyat dan daerah sesuai dengan tuntutan perkembangan kehidupan berbangsa dan bernegara;</span></p>\r\n<p class="MsoNormal" style="margin-left: 36.0pt; text-align: justify; text-indent: -36.0pt; mso-layout-grid-align: none; text-autospace: none;"><span style="font-family: Arial, sans-serif;" lang="EN-US">b.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; bahwa untuk mewujudkan lembaga permusyawaratan rakyat, lembaga perwakilan rakyat, dan lembaga perwakilan daerah sebagaimana dimaksud dalam huruf a, perlu menata Majelis Permusyawaratan Rakyat, Dewan Perwakilan Rakyat, Dewan Perwakilan Daerah, dan Dewan Perwakilan Rakyat Daerah;</span></p>\r\n<p class="MsoNormal" style="margin-left: 36.0pt; text-align: justify; text-indent: -36.0pt; mso-layout-grid-align: none; text-autospace: none;"><span style="font-family: Arial, sans-serif;" lang="EN-US">c.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; bahwa untuk mengembangkan kehidupan demokrasi dalam penyelenggaraan pemerintahan daerah, perlu mewujudkan lembaga perwakilan rakyat daerah sebagai penyelenggara pemerintahan daerah bersama-sama dengan pemerintah daerah yang mampu mengatur dan mengurus urusan pemerintahan dan kepentingan masyarakat setempat berdasarkan aspirasi masyarakat dalam system Negara Kesatuan Republik Indonesia;</span></p>\r\n<p class="MsoNormal" style="margin-left: 36.0pt; text-align: justify; text-indent: -36.0pt; mso-layout-grid-align: none; text-autospace: none;"><span style="font-family: Arial, sans-serif;" lang="EN-US">d.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; bahwa dalam rangka peningkatan peran dan tanggung jawab lembaga permusyawaratan rakyat, lembaga perwakilan rakyat, lembaga perwakilan daerah sesuai dengan Undang-Undang Dasar Negara Republik Indonesia Tahun 1945, Undang-Undang Nomor 22 Tahun 2003 tentang Susunan dan Kedudukan Majelis Permusyawaratan Rakyat, Dewan Perwakilan Rakyat, Dewan Perwakilan Daerah, dan Dewan Perwakilan Rakyat Daerah perlu diganti;</span></p>\r\n<p class="MsoNormal" style="margin-left: 36.0pt; text-align: justify; text-indent: -36.0pt; mso-layout-grid-align: none; text-autospace: none;"><span style="font-family: Arial, sans-serif;" lang="EN-US">e.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; bahwa berdasarkan pertimbangan sebagaimana dimaksud dalam huruf a, huruf b, huruf c, dan huruf d, perlu membentuk Undang-Undang tentang Majelis Permusyawaratan Rakyat, Dewan Perwakilan Rakyat, Dewan Perwakilan Daerah, dan Dewan Perwakilan Rakyat Daerah;</span></p>\r\n<p>&nbsp;</p>\r\n<p class="MsoNormal" style="text-align: justify; mso-layout-grid-align: none; text-autospace: none;"><span style="font-family: Arial, sans-serif;" lang="EN-US">&nbsp;</span></p>'),
(8, 'coba', '0000-00-00', 'IMG-20150401-WA0053.', '<p>coba</p>'),
(9, 'senin', '0000-00-00', '2015.jpg', '<p>senin</p>'),
(14, 'selasa', '0000-00-00', 'gadis.jpg', '<p>selasa</p>'),
(15, 'Rabu', '0000-00-00', '308712_6003133066638', '<p>rabu</p>'),
(16, 'coba lagi', '0000-00-00', '18696_10153180389575', '<p>coba lagi</p>'),
(17, 'jjjj', '0000-00-00', '17f3484aae0ea48ec5ea', '<p>jjjjjj</p>'),
(18, 'llll', '2015-04-02', '2015.jpg', '<p>kkkkk</p>'),
(19, 'skak', '2015-04-01', 'gambar/2015.jpg', '<p>dwfhewk</p>'),
(20, '1123', '2015-04-01', 'gambar/Smiley emotic', '<p>123</p>'),
(21, 'www', '2015-04-07', 'gambar/D:xampp	mpphp', '<p>wwwww</p>'),
(22, 'dddd', '2015-04-15', 'gambar/2015.jpg', '<p>wwwww</p>'),
(23, 'rrr', '2015-04-08', 'image/akakom.JPG', '<p>cccc</p>'),
(24, 'Dompet Hp', '2015-05-02', 'gambar/jual dompet h', '<p>Donpet Hp&nbsp;</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `costumer`
--

CREATE TABLE IF NOT EXISTS `costumer` (
  `kd_costumer` varchar(8) NOT NULL,
  `nm_costumer` varchar(40) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `provinsi` varchar(40) NOT NULL,
  `kd_pos` char(5) NOT NULL,
  `no_tlp` char(12) NOT NULL,
  PRIMARY KEY (`kd_costumer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `costumer`
--

INSERT INTO `costumer` (`kd_costumer`, `nm_costumer`, `username`, `password`, `alamat`, `provinsi`, `kd_pos`, `no_tlp`) VALUES
('1', 'Arif', 'arif', 'arif', 'Srandakan', 'Yogyakarta', '55762', '027455762'),
('3', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
('R', 'Ikhsan', 'ikhsan', 'ikhsan', 'Bantul', 'Yogyakarta', '55762', '08199345690');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail pesan`
--

CREATE TABLE IF NOT EXISTS `detail pesan` (
  `no_detpesan` int(11) NOT NULL,
  `no_pesan` varchar(8) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `total` int(11) NOT NULL,
  KEY `No_Pesan` (`no_pesan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `kd_kategori` varchar(8) NOT NULL,
  `nm_kategori` varchar(40) NOT NULL,
  `deskripsi` varchar(40) NOT NULL,
  PRIMARY KEY (`kd_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kd_kategori`, `nm_kategori`, `deskripsi`) VALUES
('1', 'Dompet cowok', 'dompet untuk laki-laki'),
('2', 'Dompet cewek', 'dompet untuk cewek');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kirim`
--

CREATE TABLE IF NOT EXISTS `kirim` (
  `kd_kirim` varchar(8) NOT NULL,
  `kd_konfirm` varchar(8) NOT NULL,
  `tot_kirim` int(11) NOT NULL,
  `tgl_kirim` date NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `kd_provinsi` varchar(8) NOT NULL,
  `kd_pos` varchar(5) NOT NULL,
  `no_tlp` varchar(12) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`kd_kirim`),
  KEY `Kd_Konfirm` (`kd_konfirm`),
  KEY `Kd_Provinsi` (`kd_provinsi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi bayar`
--

CREATE TABLE IF NOT EXISTS `konfirmasi bayar` (
  `kd_konfirm` varchar(8) NOT NULL,
  `no_pesan` varchar(8) NOT NULL,
  `kd_provinsi` varchar(8) NOT NULL,
  `tgl_konfirm` date NOT NULL,
  `tot_bayar` int(11) NOT NULL,
  `status` varchar(12) NOT NULL,
  PRIMARY KEY (`kd_konfirm`),
  KEY `No_Pesan` (`no_pesan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `user`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `no_pesan` varchar(8) NOT NULL,
  `kd_costumer` varchar(8) NOT NULL,
  `kd_produk` varchar(8) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `tot_pesan` int(11) NOT NULL,
  PRIMARY KEY (`no_pesan`),
  KEY `Kd_Costumer` (`kd_costumer`),
  KEY `Kd_Produk` (`kd_produk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE IF NOT EXISTS `provinsi` (
  `kd_provinsi` varchar(8) NOT NULL,
  `nm_provinsi` varchar(40) NOT NULL,
  `ongkos_kirim` int(11) NOT NULL,
  PRIMARY KEY (`kd_provinsi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`kd_provinsi`, `nm_provinsi`, `ongkos_kirim`) VALUES
('JK', 'Jakarta', 10000),
('YK', 'Yogyakarta', 1000);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail pesan`
--
ALTER TABLE `detail pesan`
  ADD CONSTRAINT `detail@0020pesan_ibfk_1` FOREIGN KEY (`No_Pesan`) REFERENCES `pesan` (`No_Pesan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kirim`
--
ALTER TABLE `kirim`
  ADD CONSTRAINT `kirim_ibfk_1` FOREIGN KEY (`Kd_Konfirm`) REFERENCES `konfirmasi bayar` (`Kd_Konfirm`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kirim_ibfk_2` FOREIGN KEY (`Kd_Provinsi`) REFERENCES `provinsi` (`Kd_Provinsi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `konfirmasi bayar`
--
ALTER TABLE `konfirmasi bayar`
  ADD CONSTRAINT `konfirmasi@0020bayar_ibfk_1` FOREIGN KEY (`No_Pesan`) REFERENCES `pesan` (`No_Pesan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`Kd_Costumer`) REFERENCES `costumer` (`Kd_Costumer`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesan_ibfk_2` FOREIGN KEY (`Kd_Produk`) REFERENCES `produk` (`Kd_Produk`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
