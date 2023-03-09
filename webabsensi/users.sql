-- Active: 1677341939354@@127.0.0.1@3306@test
CREATE TABLE users (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL ,
  nis INT(10) NOT NULL,
  password VARCHAR(50) NOT NULL
);
INSERT INTO users(id, username, nis , password)
VALUES(1,tet,5442212642,tit);
