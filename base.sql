CREATE DATABASE escola;
USE escola;

COMMIT;

CREATE TABLE aluno (
id int AUTO_INCREMENT PRIMARY KEY,-- indentificador unico
nome varchar(100) NOT null,
email varchar(100) NOT null UNIQUE,
    idade int NOT null
);