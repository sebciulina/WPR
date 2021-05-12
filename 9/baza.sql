CREATE database szkola;

CREATE TABLE nauczyciele (
    id int NOT NULL,
    imie VARCHAR(20),
    nazwisko VARCHAR(20),
    PRIMARY KEY (id)
);

INSERT INTO `nauczyciele`(`id`, `imie`, `nazwisko`) VALUES (1,'Jan','Kowalski'),(2,'Andrzej','Nowak');

UPDATE `nauczyciele` SET `imie`='Patryk',`nazwisko`='Grzyb' WHERE id=1;

DELETE FROM `nauczyciele` WHERE id=2;