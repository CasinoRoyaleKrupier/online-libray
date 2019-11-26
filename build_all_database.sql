CREATE DATABASE IF NOT EXISTS online_libray CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE online_libray;


CREATE TABLE users (
    id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL,
    pass VARCHAR(255) NOT NULL,
    mail VARCHAR(30) NOT NULL,
    is_administrator BOOLEAN
) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ENGINE=InnoDB AUTO_INCREMENT=1;

CREATE TABLE books (
    id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    title VARCHAR(50) NOT NULL,
    series VARCHAR(50),
    author VARCHAR(50) NOT NULL,
    number_of_pages INTEGER,
    borrower VARCHAR(50),
    is_available BOOLEAN
) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ENGINE=InnoDB AUTO_INCREMENT=1;


INSERT INTO users (username, pass, mail, is_administrator) VALUES ('admin', '$2y$10$uxUYIArCKlSDCp7SsnALsuo2rSXhhFMmaokrZqOrjY8e.FA59B8Xe', 'admin@admin.admin', true);
INSERT INTO users (username, pass, mail, is_administrator) VALUES ('user', '$2y$10$IhezyznZGvIIlenrdubZlOkx2lZAQ31UJ77otUgqP.SB/Yt8jEfNm', 'user@user.user', false);



INSERT INTO books (title, series, author, number_of_pages, is_available) VALUES ('Dziedzic Imperium', 'Thrawn', 'Timothy Zahn', 493, true);
INSERT INTO books (title, series, author, number_of_pages, is_available) VALUES ('Dziedzic Imperium', 'Thrawn', 'Timothy Zahn', 557, true);
INSERT INTO books (title, series, author, number_of_pages, is_available) VALUES ('Ostatni Rozkaz', 'Thrawn', 'Timothy Zahn', 604, true);

INSERT INTO books (title, series, author, number_of_pages, is_available) VALUES ('W poszukiwaniu Jedi', 'Akademia Jedi', 'Kevin J. Anderson', 350, true);
INSERT INTO books (title, series, author, number_of_pages, is_available) VALUES ('Uczeń Ciemnej Strony', 'Akademia Jedi', 'Kevin J. Anderson', 335, true);
INSERT INTO books (title, series, author, number_of_pages, is_available) VALUES ('Władcy Mocy', 'Akademia Jedi', 'Kevin J. Anderson', 0, true);

INSERT INTO books (title, series, author, number_of_pages, is_available) VALUES ('Zasadzka na Korelii', 'Trylogia Koreliańska', 'Roger MacBridge Allen', 0, true);
INSERT INTO books (title, series, author, number_of_pages, is_available) VALUES ('Napaść na Selonii', 'Trylogia Koreliańska', 'Roger MacBridge Allen', 0, true);
INSERT INTO books (title, series, author, number_of_pages, is_available) VALUES ('Zwycięstwo na Centerpoint', 'Trylogia Koreliańska', 'Roger MacBridge Allen', 0, true);

INSERT INTO books (title, series, author, number_of_pages, is_available) VALUES ('Widmo Przeszłości', 'Ręka Thrawna', 'Timothy Zahn', 0, true);
INSERT INTO books (title, series, author, number_of_pages, is_available) VALUES ('Wizja Przyszłości', 'Ręka Thrawna', 'Timothy Zahn', 0, true);

INSERT INTO books (title, series, author, number_of_pages, is_available) VALUES ('Władca dwumyślnych', 'Mroczne Gniazdo', 'Troy Denning', 0, true);
INSERT INTO books (title, series, author, number_of_pages, is_available) VALUES ('Niewidzialna królowa', 'Mroczne Gniazdo', 'Troy Denning', 0, true);
INSERT INTO books (title, series, author, number_of_pages, is_available) VALUES ('Wojna rojów', 'Mroczne Gniazdo', 'Troy Denning', 0, true);

INSERT INTO books (title, series, author, number_of_pages, is_available) VALUES ('Wygnaniec', 'Przeznaczenie Jedi', 'Aron Allston', 0, true);
INSERT INTO books (title, series, author, number_of_pages, is_available) VALUES ('Omen', 'Przeznaczenie Jedi', 'Christie Golden', 0, true);
INSERT INTO books (title, series, author, number_of_pages, is_available) VALUES ('Otchłań', 'Przeznaczenie Jedi', 'Troy Denning', 0, true);
INSERT INTO books (title, series, author, number_of_pages, is_available) VALUES ('Odwet', 'Przeznaczenie Jedi', 'Aron Allston', 0, true);
INSERT INTO books (title, series, author, number_of_pages, is_available) VALUES ('Sojusznicy', 'Przeznaczenie Jedi', 'Christie Golden', 0, true);
INSERT INTO books (title, series, author, number_of_pages, is_available) VALUES ('Wir', 'Przeznaczenie Jedi', 'Troy Denning', 0, true);
INSERT INTO books (title, series, author, number_of_pages, is_available) VALUES ('Wyrok', 'Przeznaczenie Jedi', 'Aron Allston', 0, true);
INSERT INTO books (title, series, author, number_of_pages, is_available) VALUES ('Hegemonia', 'Przeznaczenie Jedi', 'Christie Golden', 0, true);
INSERT INTO books (title, series, author, number_of_pages, is_available) VALUES ('Apokalipsa', 'Przeznaczenie Jedi', 'Troy Denning', 0, true);