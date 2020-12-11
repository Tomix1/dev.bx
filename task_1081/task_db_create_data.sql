INSERT INTO book_store (BOOK_ID, STORE_ID, PRICE, QUANTITY) SELECT ID, 1, PRICE, QUANTITY FROM book;

INSERT INTO store (ID, CITY)
VALUES (1, 'Калининград'),
       (2, 'Черняховск'),
       (3, 'Советск');