
SET foreign_key_checks=0;

USE Tecweb;
DROP TABLE IF EXISTS lezioni;
DROP TABLE IF EXISTS docenti;
DROP TABLE IF EXISTS aule;
DROP TABLE IF EXISTS corsi;

CREATE TABLE corsi (
    IdCorso int,
    nome varchar (255) NOT NULL,
    prezzo int NOT NULL,
    datainizio date,
    datafine date,

    PRIMARY KEY(IdCorso)
);

CREATE TABLE docenti (
    IdDocente int,
    Nome varchar (255) NOT NULL,
    Cognome varchar(255) NOT NULL,
    dataNascita date NOT NULL,
    Email varchar(255) NOT NULL,
    Indirizzo varchar(255),
    Psw varchar(255) NOT NULL,
    IdCorso int NOT NULL UNIQUE,
    
    PRIMARY KEY(IdDocente),
    FOREIGN KEY(IdCorso) REFERENCES corsi(IdCorso) ON UPDATE CASCADE
);

CREATE TABLE aule (
    IdAula int,

    PRIMARY KEY(IdAula)
);

CREATE TABLE lezioni (
    IdDocente int UNIQUE,
    IdCorso int UNIQUE,
    IdAula int NOT NULL UNIQUE,
    OraInizio datetime,
    OraFine datetime,
    
    PRIMARY KEY(OraInizio, OraFine),
    FOREIGN KEY(IdDocente) REFERENCES docenti(IdDocente) ON UPDATE CASCADE,
    FOREIGN KEY(IdCorso) REFERENCES corsi(IdCorso),
    FOREIGN KEY(IdAula) REFERENCES aule(IdAula)
);

SET foreign_key_checks=1;
