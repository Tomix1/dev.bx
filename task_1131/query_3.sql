SELECT b.NAME,
       AVG(PRICE)
FROM book_store bs
       INNER JOIN book b on bs.BOOK_ID = b.ID
WHERE b.PUBLISHER_ID = 3
GROUP BY b.NAME;