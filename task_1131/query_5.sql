SELECT b.NAME,
       SUM(IF(store_id = 1, QUANTITY, 0)) AS QUANTITY_IN_KALININGRAD,
       SUM(IF(store_id = 2, QUANTITY, 0)) AS QUANTITY_IN_CHERNYAKHOVSK,
       SUM(IF(store_id = 1, QUANTITY, 0)) - SUM(IF(store_id = 2, QUANTITY, 0)) AS DIFFERENCE
FROM book_store bs
       INNER JOIN book b on bs.BOOK_ID = b.ID
GROUP BY b.NAME;