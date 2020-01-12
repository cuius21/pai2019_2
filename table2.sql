CREATE TABLE Role(
    role int(11) NOT NULL PRIMARY KEY,
    name varchar(22)
);
CREATE TABLE League(
    id_league int(11) PRIMARY KEY,
    name varchar(22)
);
CREATE TABLE Users(
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email varchar(50) NOT NULL,
    password varchar(50) NOT NULL,
    name varchar(22) NOT NULL,
    surname varchar(22) NOT NULL
);


CREATE TABLE Team(
    id_team int(11) PRIMARY KEY,
    id_league int(11),
    name varchar(22)
);

CREATE TABLE Player(
    id_player int(11) PRIMARY KEY,
    name varchar(22),
    surname varchar(22),
    id_team int(11)
);

CREATE TABLE Rating(
    id_star int(11) PRIMARY KEY,
    id_player int(11),
    id int(11),
    rating int(11)
);

ALTER TABLE Users
ADD FOREIGN KEY (role) REFERENCES Role(role);


ALTER TABLE Team
ADD FOREIGN KEY (id_league) REFERENCES League(id_league);

ALTER TABLE Player
ADD FOREIGN KEY (id_team) REFERENCES Team(id_team);

ALTER TABLE Rating
ADD FOREIGN KEY (id_player) REFERENCES Player(id_player),
ADD FOREIGN KEY (id) REFERENCES Users(id);
 
INSERT INTO Users (id, email, password, name, surname, role) VALUES (0, 'admin@admin.pl', 'beer', 'admin', 'admin', 1);
