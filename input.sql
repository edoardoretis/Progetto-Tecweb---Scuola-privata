/*tabella docenti fatta da id docente, psw, nome, cognome,data di nascita, email, residenza, id corso*/
INSERT INTO Docenti VALUES ("BSCCHR75R61C638E", "Chiara", "Boscolo", "21/10/1975", "chiara.boscolo@gmail.com", "Via Marco Polo 45, Sottomarina", "chiara75", "B0");
INSERT INTO Docenti VALUES ("NDRFRR65H10G224S", "Andrea", "Ferro", "10/05/1965", "ferro@gmail.com", "Via Eremitami 123, Padova",  "ferro65","B0");
INSERT INTO Docenti VALUES ("SFOVGN84D43L736I",  "Sofia", "Varagnolo", "03/04/1984", "Sofi@hotmail.com", "Via rosa 45, Mestre","varagnolo34", "B1");
INSERT INTO Docenti VALUES ("NTNRSS93E06L840H",  "Antonio", "Rossi", "06/05/1993", "a.rossi@libero.it", "Campo Marconi 51, Vicenza","anto93", "B1");
INSERT INTO Docenti VALUES ("KTABRN79T44G224P",  "Kate", "Brini", "04/12/1978", "kate@hotmail.com", "Corso Argentina 756, Padova", "kate.b","B2");
INSERT INTO Docenti VALUES ("JRDPNZ90T31H620M",  "Jordan", "Penzo", "31/12/1990", "jordan_d@gmail.com", "Via Adige 21, Rovigo","penzo12", "B2");
INSERT INTO Docenti VALUES ("KVNGBB73M14L407F",  "Kevin", "Gabbo", "14/08/1973", "kevin.gabbo@gmail.com", "Corso Impero 766, Treviso","k.gabbo", "M1");
INSERT INTO Docenti VALUES ("BRNPLO88M08L736Y",  "Braian", "Pol", "08/08/1988", "braian@libero.it", "Lungo Canale 980, Venezia", "brapol","M1");

/*tabella corsi*/
INSERT INTO corsi VALUES("B0");	
INSERT INTO corsi VALUES("B1");
INSERT INTO corsi VALUES("B2");
INSERT INTO corsi VALUES("M1");

/*tabella aule*/
INSERT INTO aule VALUES("A1");
INSERT INTO aule VALUES("A2");
INSERT INTO aule VALUES("A3");
INSERT INTO aule VALUES("A4");
INSERT INTO aule VALUES("A5");
INSERT INTO aule VALUES("A6");
INSERT INTO aule VALUES("A7");
INSERT INTO aule VALUES("A8");

/*TABELLA LEZIONI*/
INSERT INTO lezioni VALUES("BSCCHR75R61C638E", "B0", "A1", "9:00", "10:30");
INSERT INTO lezioni VALUES("NDRFRR65H10G224S", "B0", "A2", "19:30", "21:00");
INSERT INTO lezioni VALUES("SFOVGN84D43L736I", "B1", "A3", "9:30", "11:00");
INSERT INTO lezioni VALUES("NTNRSS93E06L840H", "B1", "A4", "19:00", "20:30");
INSERT INTO lezioni VALUES("KTABRN79T44G224P", "B2", "A5", "10:30", "12:00");
INSERT INTO lezioni VALUES("JRDPNZ90T31H620M", "B2", "A6", "18:00", "19:30");
INSERT INTO lezioni VALUES("KVNGBB73M14L407F", "M1", "A7", "8:00", "11:30");
INSERT INTO lezioni VALUES("BRNPLO88M08L736Y", "M1", "A8", "16:00", "19:30");

