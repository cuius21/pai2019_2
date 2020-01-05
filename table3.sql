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
CREATE TABLE Team(
    id_team int(11),
    id_league int(11),
    name varchar(22),
    PRIMARY KEY (id_team),
    KEY ID_League(id_league),
    CONSTRAINT ID_League FOREIGN KEY (id_league) REFERENCES League(id_league)
);
CREATE TABLE Player(
    id_player int(11),
    name varchar(22),
    surname varchar(22),
    id_team int(11),
    PRIMARY KEY (id_player),
    KEY ID_Team(id_team),
    CONSTRAINT ID_Team FOREIGN KEY(id_team) REFERENCES Team(id_team)
);
CREATE TABLE Rating(
    id_star int(11),
    id_player int(11),
    id int(11),
    rating int(11),
    PRIMARY KEY (id_star),
    KEY ID_Player (id_player),
    CONSTRAINT ID_Player FOREIGN KEY (id_player) REFERENCES Player(id_player),
    KEY id (id),
    CONSTRAINT id FOREIGN KEY (id) REFERENCES Users(id)
);

