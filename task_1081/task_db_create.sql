CREATE TABLE IF NOT EXISTS store
(
    ID int not null auto_increment,
    CITY varchar(500) not null,
    PRIMARY KEY (ID)
);

CREATE TABLE book_store
(
    BOOK_ID int not null,
    STORE_ID int not null,
    PRICE DECIMAL(10, 2),
    QUANTITY int unsigned not null default 0,
    PRIMARY KEY (BOOK_ID, STORE_ID),
    FOREIGN KEY FK_BOOK_STORE_BOOK (BOOK_ID) references book(ID)
        ON UPDATE RESTRICT
        ON DELETE RESTRICT,
    FOREIGN KEY FK_BOOK_STORE_STORE (STORE_ID) references store(ID)
        ON UPDATE RESTRICT
        ON DELETE RESTRICT
);

CREATE TABLE author_book
(
    AUTHOR_ID int not null,
    BOOK_ID int not null,
    PRIMARY KEY (AUTHOR_ID, BOOK_ID),
    INDEX IX_BOOK (BOOK_ID),
    FOREIGN KEY FK_AUTHOR_BOOK_AUTHOR (AUTHOR_ID) references author(ID)
        ON UPDATE RESTRICT
        ON DELETE RESTRICT,
    FOREIGN KEY FK_AUTHOR_BOOK_BOOK (BOOK_ID) references book(ID)
        ON UPDATE RESTRICT
        ON DELETE RESTRICT
);

ALTER TABLE book DROP PRICE;
ALTER TABLE book DROP QUANTITY;