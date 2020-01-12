CREATE TABLE Role(
    role int(11) NOT NULL AUTO_INCREMENT,
    name varchar(22) NOT NULL,
    PRIMARY KEY (role)
);
INSERT INTO Role (role, name) VALUES (1, 'admin'), (2, 'user');

CREATE TABLE Users(
    id int(11) NOT NULL AUTO_INCREMENT,
    email varchar(50) NOT NULL,
    password varchar(50) NOT NULL,
    name varchar(22) NOT NULL,
    surname varchar(22) NOT NULL,
    role int(11) NOT NULL,
    PRIMARY KEY (id),
    KEY FK_RolesOrder (role),
    CONSTRAINT FK_RolesOrder FOREIGN KEY (role) REFERENCES Role(role)
)AUTO_INCREMENT=1;
INSERT INTO Users (id, email, password, name, surname, role) VALUES (1, 'admin@admin.pl', 'beer', 'admin', 'admin', 1);

CREATE TABLE League(
    id_league int(11),
    name varchar(22),
    PRIMARY KEY (id_league)
);
INSERT INTO League (id_league, name) VALUES (1, 'LaLiga'), (2, 'PremierLeague'), (3, 'SerieA'), (4, 'Ligue1'), (5, 'Bundesliga');

CREATE TABLE Team(
    id_team int(11),
    id_league int(11),
    name varchar(22),
    PRIMARY KEY (id_team),
    KEY ID_League(id_league),
    CONSTRAINT ID_League FOREIGN KEY (id_league) REFERENCES League(id_league)
);
INSERT INTO Team (id_team, id_league, name) VALUES (1, 1, 'FC Barcelona'), (2, 1, 'Real Madrid'), (3, 3, 'Juventus FC'), (4, 4, 'PSG'), (5, 4, 'LOSC'), (6, 4, 'Olympique Lyonnais'), (7, 1, 'Atletico Madrid'), (8, 2, 'Arsenal FC'), (9, 2, 'Chelsea FC'), (10, 2, 'Manchester United'), (11, 2, 'Manchester City'), (12, 2, 'Liverpool FC'), (13, 2, 'Tottenham Hotspur'), (14, 5, 'Bayern Munchen'), (15, 5, 'Borussia Dortmund'), (16, 3, 'AC Milan'), (17, 3, 'FC Inter Milan'), (18, 3, 'AS Roma'), (19, 3, 'SSC Napoli'), (20, 4, 'Olympique Marsilie'), (21, 4, 'AS Monaco'), (22, 1, 'Athletic Bilbao'), (23, 1, 'Villarreal'), (24, 2, 'Leicester City FC'), (25, 5, 'Bayer 04 Leverkusen'), (26, 5, 'Borussia Monchengl'), (27, 5, 'FC Schalke 04'), (28, 1, 'Valencia'), (29, 1, 'Sevilla'), (30, 1, 'Real Sociedad');

CREATE TABLE Player(
    id_player int(11),
    name varchar(22),
    surname varchar(22),
    id_team int(11),
    PRIMARY KEY (id_player),
    KEY ID_Team(id_team),
    CONSTRAINT ID_Team FOREIGN KEY(id_team) REFERENCES Team(id_team)
);
INSERT INTO Player (id_player, name, surname, id_team) VALUES (1, 'Lionel', 'Messi', 1), (2, 'Cristiano', 'Ronaldo', 2), (3, 'Mohamed', 'Salah', 12);

CREATE TABLE Rating(
    id_star int(11) AUTO_INCREMENT,
    id_player int(11),
    id int(11),
    rating int(11),
    PRIMARY KEY (id_star),
    KEY ID_Player (id_player),
    CONSTRAINT ID_Player FOREIGN KEY (id_player) REFERENCES Player(id_player),
    KEY id (id),
    CONSTRAINT id FOREIGN KEY (id) REFERENCES Users(id)
);
INSERT INTO Rating (id_star, id_player, id, rating) VALUES (1, 1, 1, 5);
