CREATE DATABASE IF NOT EXISTS bsps_db;
USE bsps_db;

CREATE TABLE IF NOT EXISTS penerima_bantuan (
    id_penerima INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    nik VARCHAR(20),
    alamat TEXT,
    status ENUM('disetujui','batal','pengganti') NOT NULL,
    id_digantikan INT DEFAULT NULL
);
