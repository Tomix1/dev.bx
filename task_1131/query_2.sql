SELECT a.NAME,
       s.CITY,
       SUM(QUANTITY)
FROM book_store bs
       INNER JOIN author_book ab on bs.BOOK_ID = ab.BOOK_ID
       INNER JOIN store s on bs.STORE_ID = s.ID
       INNER JOIN author a on ab.AUTHOR_ID = a.ID
GROUP BY a.NAME, s.CITY;