USE Tecweb;

INSERT INTO admin VALUES("admin", "giovanni85x01");

/*tabella corsi*/
INSERT INTO corsi VALUES("B0", "Base", "50", "2017-10-01", "2017-10-31");
INSERT INTO corsi VALUES("B1", "Intermedio", "100", "2017-10-01", "2018-01-25");
INSERT INTO corsi VALUES("B2", "Avanzato", "200", "2018-02-05", "2018-07-20");
INSERT INTO corsi VALUES("M1", "Madrelingua", "500", "2017-10-01", "2018-09-30");

/*tabella docenti fatta da id docente, psw, nome, cognome,data di nascita, email, residenza, id corso*/
INSERT INTO docenti VALUES ("BSCCHR75R61C638E", "Chiara", "Boscolo", "1975-10-21", "chiara.boscolo@gmail.com", "Via Marco Polo 45, Sottomarina", "chiara75", "B0");
INSERT INTO docenti VALUES ("NDRFRR65H10G224S", "Andrea", "Ferro", "1965-05-10", "ferro@gmail.com", "Via Eremitami 123, Padova",  "ferro65","B0");
INSERT INTO docenti VALUES ("SFOVGN84D43L736I",  "Sofia", "Varagnolo", "1984-04-03", "Sofi@hotmail.com", "Via rosa 45, Mestre","varagnolo34", "B1");
INSERT INTO docenti VALUES ("NTNRSS93E06L840H",  "Antonio", "Rossi", "1993-05-06", "a.rossi@libero.it", "Campo Marconi 51, Vicenza","anto93", "B1");
INSERT INTO docenti VALUES ("KTABRN79T44G224P",  "Kate", "Brini", "1978-12-04", "kate@hotmail.com", "Corso Argentina 756, Padova", "kate.b","B2");
INSERT INTO docenti VALUES ("JRDPNZ90T31H620M",  "Jordan", "Penzo", "1990-12-31", "jordan_d@gmail.com", "Via Adige 21, Rovigo","penzo12", "B2");
INSERT INTO docenti VALUES ("KVNGBB73M14L407F",  "Kevin", "Gabbo", "1973-14-08", "kevin.gabbo@gmail.com", "Corso Impero 766, Treviso","k.gabbo", "M1");
INSERT INTO docenti VALUES ("BRNPLO88M08L736Y",  "Braian", "Pol", "1988-08-08", "braian@libero.it", "Lungo Canale 980, Venezia", "brapol","M1");

/*tabella aule*/
INSERT INTO aule VALUES("A1", "50", "via Aldo Baglio, 23");
INSERT INTO aule VALUES("A2", "50", "via Aldo Baglio, 23");
INSERT INTO aule VALUES("A3", "50", "via Aldo Baglio, 23");
INSERT INTO aule VALUES("A4", "100", "via Schio, 94");
INSERT INTO aule VALUES("A5", "75", "viale dei pioppi, 3");
INSERT INTO aule VALUES("A6", "25", "via del gatto, 9");
INSERT INTO aule VALUES("A7", "25", "via del gatto, 9");
INSERT INTO aule VALUES("A8", "250", "via Lussatti, 25");

/*TABELLA LEZIONI*/
/*controllo con PHP necessario! */
INSERT INTO lezioni VALUES("BSCCHR75R61C638E", "B0", "A1", "2018-09-12 9:00", "2018-09-12 10:30");
INSERT INTO lezioni VALUES("NDRFRR65H10G224S", "B0", "A2", "2018-09-13 19:30", "2018-09-13 21:00");
INSERT INTO lezioni VALUES("SFOVGN84D43L736I", "B1", "A3", "2018-09-14 9:30", "2018-09-14 11:00");
INSERT INTO lezioni VALUES("NTNRSS93E06L840H", "B1", "A4", "2018-09-15 19:00", "2018-09-15 20:30");
INSERT INTO lezioni VALUES("KTABRN79T44G224P", "B2", "A5", "2018-09-12 10:30", "2018-09-12 12:00");
INSERT INTO lezioni VALUES("KTABRN79T44G224P", "B2", "A5", "2018-09-16 10:30", "2018-09-16 12:00");
INSERT INTO lezioni VALUES("JRDPNZ90T31H620M", "B2", "A6", "2018-09-15 18:00", "2018-09-15 19:30");
INSERT INTO lezioni VALUES("KVNGBB73M14L407F", "M1", "A7", "2018-09-16 8:00", "2018-09-16 11:30");
INSERT INTO lezioni VALUES("BRNPLO88M08L736Y", "M1", "A8", "2018-09-17 16:00", "2018-09-17 19:30");


INSERT INTO lezioni VALUES("KVNGBB73M14L407F", "M1", "A7", "2017-09-16 8:00", "2017-09-16 11:30");
INSERT INTO lezioni VALUES("BRNPLO88M08L736Y", "M1", "A8", "2017-09-17 16:00", "2017-09-17 19:30");

