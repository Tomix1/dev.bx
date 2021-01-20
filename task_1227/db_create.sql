CREATE TABLE IF NOT EXISTS teams
(
	ID int not null,
	NAME varchar(500) not null,
	COUNT_GOALS_SCORED int not null,
	PRIMARY KEY (ID)
);

CREATE TABLE stage
(
    ID int not null,
    NAME varchar(500) not null,
    PRIMARY KEY (ID)
);

CREATE TABLE IF NOT EXISTS matches
(
    ID int not null,
    ID_STAGE int not null,
	NUMBER_TEAM_1 int not null,
	NUMBER_TEAM_2 int not null,
	COUNT_GOALS_SCORED_TEAM_1 int,
	COUNT_GOALS_SCORED_TEAM_2 int,
	PENALTY_SHOOTOUTS_1 int,
    PENALTY_SHOOTOUTS_2 int,
    PRIMARY KEY (ID),
	FOREIGN KEY FKEY_ID_STAGE(ID_STAGE) references stage(ID)
	    ON UPDATE RESTRICT
	    ON DELETE RESTRICT,
    FOREIGN KEY FKEY_NUMBER_TEAM_1 (NUMBER_TEAM_1) references teams(ID)
	    ON UPDATE RESTRICT
	    ON DELETE RESTRICT,
    FOREIGN KEY FKEY_NUMBER_TEAM_2 (NUMBER_TEAM_2) references teams(ID)
	    ON UPDATE RESTRICT
	    ON DELETE RESTRICT
);

