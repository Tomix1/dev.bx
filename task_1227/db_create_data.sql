INSERT INTO stage (ID, NAME)
VALUES (1, 'Final'),
       (2, 'Semi-Final'),
       (3, 'Quarter-Final'),
       (4, 'Round-of-16');

INSERT IGNORE INTO teams (ID, NAME)
VALUES (1, 'France'),
       (2, 'Croatia'),
       (3, 'England'),
       (4, 'Belgium'),
       (5, 'Uruguay'),
       (6, 'Brazil'),
       (7, 'Russia'),
       (8, 'Sweden'),
       (9, 'Portugal'),
       (10, 'Argentina'),
       (11, 'Mexico'),
       (12, 'Japan'),
       (13, 'Spain'),
       (14, 'Denmark'),
       (15, 'Switzerland'),
       (16, 'Colombia');

INSERT INTO matches (ID, ID_STAGE, NUMBER_TEAM_1, NUMBER_TEAM_2)
VALUES (1, 1, 1, 2),
       (2, 2, 1, 3),
       (3, 2, 2, 4),
       (4, 3, 5, 1),
       (5, 3, 6, 4),
       (6, 3, 7, 2),
       (7, 3, 8, 3),
       (8, 4, 5, 9),
       (9, 4, 1, 10),
       (10, 4, 6, 11),
       (11, 4, 4, 12),
       (12, 4, 13, 7),
       (13, 4, 2, 14),
       (14, 4, 8, 15),
       (15, 4, 16, 3);

/*INSERT INTO matches (ID, COUNT_GOALS_SCORED_TEAM_1, COUNT_GOALS_SCORED_TEAM_2)
VALUES (1, 4, 2),
       (2, 1, 0),
       (3, 2, 1),
       (4, 0, 2),
       (5, 1, 2),
       (6, 2, 2),
       (7, 0, 2),
       (8, 2, 1),
       (9, 4, 3),
       (10, 2, 0),
       (11, 3, 2),
       (12, 1, 1),
       (13, 1, 1),
       (14, 1, 0),
       (15, 1, 1);*/

UPDATE matches
SET COUNT_GOALS_SCORED_TEAM_1 = 4,
    COUNT_GOALS_SCORED_TEAM_2 = 2
WHERE ID = 1;

UPDATE matches
SET COUNT_GOALS_SCORED_TEAM_1 = 1,
    COUNT_GOALS_SCORED_TEAM_2 = 0
WHERE ID = 2;

UPDATE matches
SET COUNT_GOALS_SCORED_TEAM_1 = 2,
    COUNT_GOALS_SCORED_TEAM_2 = 1
WHERE ID = 3;

UPDATE matches
SET COUNT_GOALS_SCORED_TEAM_1 = 0,
    COUNT_GOALS_SCORED_TEAM_2 = 2
WHERE ID = 4;

UPDATE matches
SET COUNT_GOALS_SCORED_TEAM_1 = 1,
    COUNT_GOALS_SCORED_TEAM_2 = 2
WHERE ID = 5;

UPDATE matches
SET COUNT_GOALS_SCORED_TEAM_1 = 2,
    COUNT_GOALS_SCORED_TEAM_2 = 2
WHERE ID = 6;

UPDATE matches
SET COUNT_GOALS_SCORED_TEAM_1 = 0,
    COUNT_GOALS_SCORED_TEAM_2 = 2
WHERE ID = 7;

UPDATE matches
SET COUNT_GOALS_SCORED_TEAM_1 = 2,
    COUNT_GOALS_SCORED_TEAM_2 = 1
WHERE ID = 8;

UPDATE matches
SET COUNT_GOALS_SCORED_TEAM_1 = 4,
    COUNT_GOALS_SCORED_TEAM_2 = 3
WHERE ID = 9;

UPDATE matches
SET COUNT_GOALS_SCORED_TEAM_1 = 2,
    COUNT_GOALS_SCORED_TEAM_2 = 0
WHERE ID = 10;

UPDATE matches
SET COUNT_GOALS_SCORED_TEAM_1 = 3,
    COUNT_GOALS_SCORED_TEAM_2 = 2
WHERE ID = 11;

UPDATE matches
SET COUNT_GOALS_SCORED_TEAM_1 = 1,
    COUNT_GOALS_SCORED_TEAM_2 = 1
WHERE ID = 12;

UPDATE matches
SET COUNT_GOALS_SCORED_TEAM_1 = 1,
    COUNT_GOALS_SCORED_TEAM_2 = 1
WHERE ID = 13;

UPDATE matches
SET COUNT_GOALS_SCORED_TEAM_1 = 1,
    COUNT_GOALS_SCORED_TEAM_2 = 0
WHERE ID = 14;

UPDATE matches
SET COUNT_GOALS_SCORED_TEAM_1 = 1,
    COUNT_GOALS_SCORED_TEAM_2 = 1
WHERE ID = 15;

/*INSERT INTO matches (ID, PENALTY_SHOOTOUTS_1, PENALTY_SHOOTOUTS_2)
VALUES (6, 3, 4),
       (12, 3, 4),
       (13, 3, 2),
       (15, 3, 4);*/

UPDATE matches
SET PENALTY_SHOOTOUTS_1 = 3,
    PENALTY_SHOOTOUTS_2 = 4
WHERE ID = 6;

UPDATE matches
SET PENALTY_SHOOTOUTS_1 = 3,
    PENALTY_SHOOTOUTS_2 = 4
WHERE ID = 12;

UPDATE matches
SET PENALTY_SHOOTOUTS_1 = 3,
    PENALTY_SHOOTOUTS_2 = 2
WHERE ID = 13;

UPDATE matches
SET PENALTY_SHOOTOUTS_1 = 3,
    PENALTY_SHOOTOUTS_2 = 4
WHERE ID = 15;