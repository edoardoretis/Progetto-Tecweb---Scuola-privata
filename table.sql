
SET foreign_key_checks=0;

DROP TABLE IF EXISTS docenti;
DROP TABLE IF EXISTS aule;
DROP TABLE IF EXISTS corsi;
DROP TABLE IF EXISTS lezioni;


CREATE TABLE docenti(
IdDocente varchar(16) PRIMARY KEY,
Nome varchar (20) NOT NULL,
Cognome varchar(20) NOT NULL,
Data di nascita date NOT NULL,
Email varchar(30) NOT NULL,
Indirizzo varchar(40)
Pw varchar(15) NOT NULL,
IdCorso varchar(2) NOT NULL
FOREIGN KEY(IdCorso) REFERENCE corsi(IdCorso)
)engine=innoDB;

CREATE TABLE aule(
IdAula varchar(2) PRIMARY KEY
)engine=innoDB;

CREATE TABLE corsi(
IdCorso varchar(2) PRIMARY KEY
)engine=innoDB;

CREATE TABLE lezioni(
IdDocente varchar(16) PRIMARY KEY,
IdCorso varchar(2) NOT NULL,
IdAula varchar(2) NOT NULL,
OraInizio time,
OraFine time
FOREIGN KEY(IdDocente) REFERENCE docenti(IdDocenti),
FOREIGN KEY(IdCorso) REFERENCE corsi(IdCorso),
FOREIGN KEY(IdAula) REFERENCE aule(IdAula)
)engine=innoDB;



SET foreign_key_checks=1;
