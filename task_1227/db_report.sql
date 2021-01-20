CREATE TABLE IF NOT EXISTS report
(
	ID_TEAM int not null auto_increment,
	PLACE_STANDINGS int not null,
	SCORING int not null,
	AVERAGE_SCORING_PER_MATCH int not null,
	BEST_SCORING_PER_MATCH int not null,
	FOREIGN KEY FKEY_ID_TEAM(ID_TEAM) references teams(ID)
);

INSERT IGNORE INTO report (ID_TEAM)
VALUES (1),
       (2),
       (3),
       (4),
       (5),
       (6),
       (7),
       (8),
       (9),
       (10),
       (11),
       (12),
       (13),
       (14),
       (15),
       (16);

/*SET @id = 1;

UPDATE report
SET PLACE_STANDINGS = (SELECT MIN(ID_STAGE) FROM matches
                       WHERE NUMBER_TEAM_1 = @id OR NUMBER_TEAM_2 = @id),
    SCORING = (SELECT SUM(COUNT_GOALS_SCORED_TEAM_1) from matches
               WHERE NUMBER_TEAM_1 = @id) +
              (SELECT SUM(COUNT_GOALS_SCORED_TEAM_2) from matches
               WHERE NUMBER_TEAM_2 = @id),
    AVERAGE_SCORING_PER_MATCH = SCORING / ((SELECT COUNT(NUMBER_TEAM_1) from matches
                                            WHERE NUMBER_TEAM_1 = @id) +
                                           (SELECT COUNT(NUMBER_TEAM_2) from matches
                                            WHERE NUMBER_TEAM_2 = @id)),
    BEST_SCORING_PER_MATCH = (SELECT MAX(TMP) FROM(
	                                                  SELECT MAX(COUNT_GOALS_SCORED_TEAM_2) AS TMP from matches
	                                                  WHERE NUMBER_TEAM_2 = @id
	                                                  UNION
	                                                  SELECT MAX(COUNT_GOALS_SCORED_TEAM_1) AS TMP from matches
	                                                  WHERE NUMBER_TEAM_1 = @id) A)
WHERE ID_TEAM = @id;*/

