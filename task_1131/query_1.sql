SELECT a.NAME,
       COUNT(AUTHOR_ID)
FROM author_book ab
       INNER JOIN author a on ab.AUTHOR_ID = a.ID
GROUP BY a.NAME;