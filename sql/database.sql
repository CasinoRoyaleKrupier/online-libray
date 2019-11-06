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
    rental_period INTEGER NOT NULL
) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ENGINE=InnoDB AUTO_INCREMENT=1;


INSERT INTO administrators (username, pass, mail) VALUES ('admin', '$2y$10$uxUYIArCKlSDCp7SsnALsuo2rSXhhFMmaokrZqOrjY8e.FA59B8Xe', 'admin@admin.admin');
INSERT INTO users (username, pass, mail) VALUES ('user', '$2y$10$IhezyznZGvIIlenrdubZlOkx2lZAQ31UJ77otUgqP.SB/Yt8jEfNm', 'user@user.user');

INSERT INTO books (title, series, author, rental_period) VALUES ('Dziedzic Imperium', 'Thrawn', 'Timothy Zahn', 0);
INSERT INTO books (title, series, author, rental_period) VALUES ('Dziedzic Imperium', 'Thrawn', 'Timothy Zahn', 0);
INSERT INTO books (title, series, author, rental_period) VALUES ('Ostatni Rozkaz', 'Thrawn', 'Timothy Zahn', 0);

INSERT INTO books (title, series, author, rental_period) VALUES ('W poszukiwaniu Jedi', 'Akademia Jedi', 'Kevin J. Anderson', 0);
INSERT INTO books (title, series, author, rental_period) VALUES ('Uczeń Ciemnej Strony', 'Akademia Jedi', 'Kevin J. Anderson', 0);
INSERT INTO books (title, series, author, rental_period) VALUES ('Władcy Mocy', 'Akademia Jedi', 'Kevin J. Anderson', 0);

INSERT INTO books (title, series, author, rental_period) VALUES ('Zasadzka na Korelii', 'Trylogia Koreliańska', 'Roger MacBridge Allen', 0);
INSERT INTO books (title, series, author, rental_period) VALUES ('Napaść na Selonii', 'Trylogia Koreliańska', 'Roger MacBridge Allen', 0);
INSERT INTO books (title, series, author, rental_period) VALUES ('Zwycięstwo na Centerpoint', 'Trylogia Koreliańska', 'Roger MacBridge Allen', 0);

INSERT INTO books (title, series, author, rental_period) VALUES ('Widmo Przeszłości', 'Ręka Thrawna', 'Timothy Zahn', 0);
INSERT INTO books (title, series, author, rental_period) VALUES ('Wizja Przyszłości', 'Ręka Thrawna', 'Timothy Zahn', 0);

INSERT INTO books (title, series, author, rental_period) VALUES ('Władca dwumyślnych', 'Mroczne Gniazdo', 'Troy Denning', 0);
INSERT INTO books (title, series, author, rental_period) VALUES ('Niewidzialna królowa', 'Mroczne Gniazdo', 'Troy Denning', 0);
INSERT INTO books (title, series, author, rental_period) VALUES ('Wojna rojów', 'Mroczne Gniazdo', 'Troy Denning', 0);

INSERT INTO books (title, series, author, rental_period) VALUES ('Wygnaniec', 'Przeznaczenie Jedi', 'Aron Allston', 0);
INSERT INTO books (title, series, author, rental_period) VALUES ('Omen', 'Przeznaczenie Jedi', 'Christie Golden', 0);
INSERT INTO books (title, series, author, rental_period) VALUES ('Otchłań', 'Przeznaczenie Jedi', 'Troy Denning', 0);
INSERT INTO books (title, series, author, rental_period) VALUES ('Odwet', 'Przeznaczenie Jedi', 'Aron Allston', 0);
INSERT INTO books (title, series, author, rental_period) VALUES ('Sojusznicy', 'Przeznaczenie Jedi', 'Christie Golden', 0);
INSERT INTO books (title, series, author, rental_period) VALUES ('Wir', 'Przeznaczenie Jedi', 'Troy Denning', 0);
INSERT INTO books (title, series, author, rental_period) VALUES ('Wyrok', 'Przeznaczenie Jedi', 'Aron Allston', 0);
INSERT INTO books (title, series, author, rental_period) VALUES ('Hegemonia', 'Przeznaczenie Jedi', 'Christie Golden', 0);
INSERT INTO books (title, series, author, rental_period) VALUES ('Apokalipsa', 'Przeznaczenie Jedi', 'Troy Denning', 0);
