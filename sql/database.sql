CREATE DATABASE IF NOT EXISTS online_libray CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE online_libray;


CREATE TABLE administrators (
    id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL,
    pass VARCHAR(255) NOT NULL,
    mail VARCHAR(30) NOT NULL
) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ENGINE=InnoDB AUTO_INCREMENT=1;

CREATE TABLE users (
    id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL,
    pass VARCHAR(255) NOT NULL,
    mail VARCHAR(30) NOT NULL
) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ENGINE=InnoDB AUTO_INCREMENT=1;

CREATE TABLE books (
    id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    title VARCHAR(50) NOT NULL,
    series VARCHAR(50),
    author VARCHAR(50) NOT NULL,
    available INTEGER NOT NULL,
    rental_period INTEGER NOT NULL
) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ENGINE=InnoDB AUTO_INCREMENT=1;


INSERT INTO administrators (username, pass, mail) VALUES ('admin', '$2y$10$uxUYIArCKlSDCp7SsnALsuo2rSXhhFMmaokrZqOrjY8e.FA59B8Xe', 'admin@admin.admin');
INSERT INTO users (username, pass, mail) VALUES ('user', '$2y$10$IhezyznZGvIIlenrdubZlOkx2lZAQ31UJ77otUgqP.SB/Yt8jEfNm', 'user@user.user');