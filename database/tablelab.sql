
SET foreign_key_checks=0;

USE tgranzie;

DROP TABLE IF EXISTS admin;
DROP TABLE IF EXISTS lezioni;
DROP TABLE IF EXISTS docenti;
DROP TABLE IF EXISTS admin;
DROP TABLE IF EXISTS aule;
DROP TABLE IF EXISTS corsi;

CREATE TABLE corsi (
    IdCorso varchar(2),
    Nomecorso varchar (255) NOT NULL,
    Prezzo int NOT NULL,
    Datainizio date,
    Datafine date,

    PRIMARY KEY(IdCorso)
);

CREATE TABLE admin (
    idAdmin varchar(100),
    Psw varchar(100),

    PRIMARY KEY(idAdmin)
);

CREATE TABLE docenti (
    IdDocente varchar(16),
    Nome varchar (255) NOT NULL,
    Cognome varchar(255) NOT NULL,
    dataNascita date NOT NULL,
    Email varchar(255) NOT NULL,
    Indirizzo varchar(255),
    Psw varchar(255) NOT NULL,
    IdCorso varchar(2) NOT NULL,
    
    PRIMARY KEY(IdDocente),
    FOREIGN KEY(IdCorso) REFERENCES corsi(IdCorso) ON UPDATE CASCADE
);

CREATE TABLE aule (
    IdAula varchar(2),
    Capacità int NOT NULL,
    Indirizzo varchar(255),

    PRIMARY KEY(IdAula)
);

CREATE TABLE lezioni (
    IdDocente varchar(16),
    IdCorso varchar(2),
    IdAula varchar(2) NOT NULL,
    OraInizio datetime,
    OraFine datetime,
    
    PRIMARY KEY(OraInizio, OraFine),
    FOREIGN KEY(IdDocente) REFERENCES docenti(IdDocente) ON UPDATE CASCADE,
    FOREIGN KEY(IdCorso) REFERENCES corsi(IdCorso),
    FOREIGN KEY(IdAula) REFERENCES aule(IdAula)
);

SET foreign_key_checks=1;
