CREATE DATABASE dBform;
USE dBform;
CREATE TABLE Usuario(
Codigo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
Nome VARCHAR (100) NOT NULL,
Sobrenome VARCHAR (100) NOT NULL,
Email VARCHAR (100) NOT NULL,
Idade INT NOT NULL,
CPF VARCHAR (15) NOT NULL,
Sexo VARCHAR(12) NOT NULL,
Usuario VARCHAR(50) NOT NULL,
Senha VARCHAR (20) NOT NULL
);


