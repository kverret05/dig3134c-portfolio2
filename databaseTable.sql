CREATE DATABASE contactsList

CREATE TABLE contactsList.book (
contact_id INT(11),
	contact_fName VARCHAR (255),
	contact_lName VARCHAR (255),
	tel VARCHAR (255),
	email VARCHAR (255),
    affiliation VARCHAR (255),
PRIMARY KEY(contact_id)
);
INSERT INTO contactsList.book (contact_id, contact_fName, contact_lName, email, tel, affiliation) VALUES(0, 'Akiyama','Mizuki','amizuki@gmail.com','123-456-7890', 'family');
INSERT INTO contactsList.book (contact_id, contact_fName, contact_lName, email, tel, affiliation) VALUES(1, 'Shinonone','Ena','sena@gmail.com','123-456-7890', 'family');
INSERT INTO contactsList.book (contact_id, contact_fName, contact_lName, email, tel, affiliation) VALUES(2, 'Tenma','Tsukasa','ttsukasa@gmail.com','123-456-7890', 'family');
INSERT INTO contactsList.book (contact_id, contact_fName, contact_lName, email, tel, affiliation) VALUES(3, 'Kusanagi','Nene','knene@gmail.com','123-456-7890', 'family');