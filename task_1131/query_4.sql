SELECT s.CITY,
       b.NAME,
       AVG(PRICE)
FROM book_store bs
       INNER JOIN book b on bs.BOOK_ID = b.ID
       INNER JOIN store s on bs.STORE_ID = s.ID
WHERE b.PUBLISHER_ID = 3
GROUP BY s.CITY, b.NAME;