CREATE DATABASE blog;

CREATE TABLE accounts(
    ID INT(11) AUTO_INCREMENT NOT NULL,
    login varchar(128) NOT NULL,
    password varchar(128) NOT NULL,
    PRIMARY KEY(ID)
);

CREATE TABLE posts(
    ID INT(11) AUTO_INCREMENT NOT NULL,
    title varchar(128) NOT NULL,
    content varchar(1000) NOT NULL,
    author varchar(128) NOT NULL,
    PRIMARY KEY(ID)
);