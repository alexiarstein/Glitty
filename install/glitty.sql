CREATE DATABASE glitty;

USE glitty;

CREATE TABLE users (
  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  realname VARCHAR(100) NOT NULL,
  email VARCHAR(255) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  userinfo TEXT
);

CREATE TABLE blog (
    postid INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    body TEXT NOT NULL,
    tag VARCHAR(255) NOT NULL,
    category VARCHAR(255) NOT NULL,
    user_id INT NOT NULL,
    post_date DATE NOT NULL
);

CREATE TABLE settings (
  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  maintenance INT(1) NOT NULL DEFAULT 0,
  register INT(1) NOT NULL DEFAULT 1,
  language VARCHAR(50) NOT NULL DEFAULT 'english',
  theme VARCHAR(50) NOT NULL DEFAULT 'default',
  adsense TEXT,
  analytics TEXT,
  htmltags TEXT
);


