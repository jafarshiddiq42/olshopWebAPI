-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for olshopweb
CREATE DATABASE IF NOT EXISTS `olshopweb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `olshopweb`;

-- Dumping structure for table olshopweb.invoice
CREATE TABLE IF NOT EXISTS `invoice` (
  `id` int NOT NULL AUTO_INCREMENT,
  `userid` int NOT NULL,
  `invoice` text NOT NULL,
  `mPembayaran` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table olshopweb.invoice: ~4 rows (approximately)
INSERT INTO `invoice` (`id`, `userid`, `invoice`, `mPembayaran`, `total`, `status`) VALUES
	(1, 2, '20240109053839', 'COD', '250000', 'Belum Upload Bukti Tranfer'),
	(2, 4, '20240109111921', 'COD', '150000', 'Belum Upload Bukti Tranfer'),
	(3, 4, '20240120083750', 'COD', '160000', 'Belum Upload Bukti Tranfer'),
	(4, 4, '20240120084355', 'COD', '250000', 'Belum Upload Bukti Tranfer');

-- Dumping structure for table olshopweb.invoicedetail
CREATE TABLE IF NOT EXISTS `invoicedetail` (
  `id` int NOT NULL AUTO_INCREMENT,
  `invoice` varchar(255) NOT NULL,
  `produkid` int NOT NULL,
  `qty` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table olshopweb.invoicedetail: ~6 rows (approximately)
INSERT INTO `invoicedetail` (`id`, `invoice`, `produkid`, `qty`, `harga`) VALUES
	(1, '20240109053839', 4, '2', '50000'),
	(2, '20240109053839', 1, '1', '150000'),
	(3, '20240109111921', 4, '3', '50000'),
	(4, '20240120083750', 5, '2', '80000'),
	(5, '20240120084355', 4, '2', '50000'),
	(6, '20240120084355', 1, '1', '150000');

-- Dumping structure for table olshopweb.kategori
CREATE TABLE IF NOT EXISTS `kategori` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table olshopweb.kategori: ~6 rows (approximately)
INSERT INTO `kategori` (`id`, `nama`) VALUES
	(1, 'Baju'),
	(2, 'Celana'),
	(4, 'Kemeja'),
	(5, 'TV'),
	(6, 'Elektronik'),
	(7, 'Komputer');

-- Dumping structure for table olshopweb.keranjang
CREATE TABLE IF NOT EXISTS `keranjang` (
  `id` int NOT NULL AUTO_INCREMENT,
  `userid` int NOT NULL,
  `produkid` int NOT NULL,
  `qty` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table olshopweb.keranjang: ~1 rows (approximately)
INSERT INTO `keranjang` (`id`, `userid`, `produkid`, `qty`, `harga`) VALUES
	(16, 4, 25, '1', '2000000');

-- Dumping structure for table olshopweb.produk
CREATE TABLE IF NOT EXISTS `produk` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kategoriid` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` text NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table olshopweb.produk: ~23 rows (approximately)
INSERT INTO `produk` (`id`, `kategoriid`, `nama`, `harga`, `keterangan`, `gambar`, `tanggal`) VALUES
	(1, 2, 'celana', '150000', 'bagus', 'celana.jpeg', '2023-11-27'),
	(4, 4, 'kemeja bagus', '50000', 'kemeja sangat bagus', 'kemeja2.jpeg', '2023-12-11'),
	(5, 1, 'sweater hitam', '80000', 'baju hitam', '090120241157421000103466.jpg', '2024-01-09'),
	(6, 4, 'Baju Kemeja', '100000', 'Keterangan produk 1', 'kemeja.jpeg', '2024-01-20'),
	(7, 2, 'Celana Jeans', '200000', 'Keterangan produk 2', 'jeans.jpg', '2024-01-20'),
	(8, 1, 'Sepatu Sneakers', '300000', 'Keterangan produk 3', 'sneaker.jpeg', '2024-01-20'),
	(9, 1, 'Kaus Oblong', '400000', 'Keterangan produk 4', 'kaos.jpeg', '2024-01-20'),
	(10, 1, 'Dress', '500000', 'Keterangan produk 5', 'dress.jpeg', '2024-01-20'),
	(11, 1, 'Jaket', '600000', 'Keterangan produk 6', 'jaket.jpeg', '2024-01-20'),
	(12, 1, 'Tas', '700000', 'Keterangan produk 7', 'tas.jpeg', '2024-01-20'),
	(13, 1, 'Sepatu Sandal', '800000', 'Keterangan produk 8', 'sepatusandal.jpg', '2024-01-20'),
	(14, 1, 'Topi', '900000', 'Keterangan produk 9', 'topi.jpeg', '2024-01-20'),
	(15, 1, 'Kacamata', '1000000', 'Keterangan produk 10', 'kacamata.jpg', '2024-01-20'),
	(16, 7, 'Handphone', '1100000', 'Keterangan produk 11', 'handphone.jpg', '2024-01-20'),
	(17, 7, 'Laptop', '1200000', 'Keterangan produk 12', 'laptop.png', '2024-01-20'),
	(18, 5, 'Televisi', '1300000', 'Keterangan produk 13', 'televisi.jpeg', '2024-01-20'),
	(19, 6, 'Kulkas', '1400000', 'Keterangan produk 14', 'kulkas.jpeg', '2024-01-20'),
	(20, 6, 'Mesin Cuci', '1500000', 'Keterangan produk 15', 'mesincuci.jpeg', '2024-01-20'),
	(21, 6, 'Vacuum Cleaner', '1600000', 'Keterangan produk 16', 'vacumcleaner.jpeg', '2024-01-20'),
	(22, 6, 'Setrika', '1700000', 'Keterangan produk 17', 'setrika.jpeg', '2024-01-20'),
	(23, 6, 'Kompor', '1800000', 'Keterangan produk 18', 'kompor.jpeg', '2024-01-20'),
	(24, 6, 'Rice Cooker', '1900000', 'Keterangan produk 19', 'ricecooker.png', '2024-01-20'),
	(25, 6, 'Blender', '2000000', 'Keterangan produk 20', 'blender.jpg', '2024-01-20');

-- Dumping structure for table olshopweb.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `gambar` text NOT NULL,
  `level` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table olshopweb.user: ~3 rows (approximately)
INSERT INTO `user` (`id`, `nama`, `email`, `password`, `alamat`, `gambar`, `level`) VALUES
	(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'banda aceh', 'no-image.png', 1),
	(2, 'jhoni', 'jhoni@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'banda aceh', 'no-image.png', 2),
	(4, 'ver', 'ver@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'alabasta', 'no-image.png', 2);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
