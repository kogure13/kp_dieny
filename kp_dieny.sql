/*
Navicat MySQL Data Transfer

Source Server         : server128
Source Server Version : 50522
Source Host           : 192.168.0.128:3306
Source Database       : kp_dieny

Target Server Type    : MYSQL
Target Server Version : 50522
File Encoding         : 65001

Date: 2017-06-03 12:48:41
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for info_data
-- ----------------------------
DROP TABLE IF EXISTS `info_data`;
CREATE TABLE `info_data` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `info_judul` varchar(255) DEFAULT NULL,
  `info_isi` text,
  `aktif` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of info_data
-- ----------------------------

-- ----------------------------
-- Table structure for mhs_data
-- ----------------------------
DROP TABLE IF EXISTS `mhs_data`;
CREATE TABLE `mhs_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(15) DEFAULT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `alamat_asal` text,
  `alamat_sekarang` text,
  `telp_rumah` varchar(20) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `no_bb` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `program_studi` int(11) DEFAULT NULL,
  `angkatan` int(11) DEFAULT NULL,
  `nama_perusahaan` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `alamat_perusahaan` text,
  `no_tlp_perusahaan` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of mhs_data
-- ----------------------------

-- ----------------------------
-- Table structure for mhs_login
-- ----------------------------
DROP TABLE IF EXISTS `mhs_login`;
CREATE TABLE `mhs_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `aktif` enum('Y','T') DEFAULT NULL,
  `kode` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of mhs_login
-- ----------------------------
