-- Active: 1677341939354@@127.0.0.1@3306@phpmyadmin
CREATE TABLE attendance (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  waktu_masuk DATETIME NOT NULL,
  waktu_keluar DATETIME,
  status VARCHAR(20) NOT NULL
);
