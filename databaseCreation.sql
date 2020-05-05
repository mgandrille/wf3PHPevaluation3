CREATE DATABASE IF NOT EXISTS immobilier;

USE immobilier;

CREATE TABLE logement (
	id_logement		INT NOT NULL AUTO_INCREMENT,
    titre			VARCHAR(150),
    adresse			VARCHAR(200),
    ville			VARCHAR(150),
    cp				INT(5) UNSIGNED,
    surface			INT UNSIGNED,
    prix			DECIMAL,
    photo			VARCHAR(50),
    type_logement	VARCHAR(20),
    description		MEDIUMTEXT,
    
    PRIMARY KEY (id_logement)
) ENGINE=INNODB CHARACTER SET=utf8;