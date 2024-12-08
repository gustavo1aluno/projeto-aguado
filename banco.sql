DROP DATABASE IF EXISTS catalogo_jogos;

CREATE DATABASE catalogo_jogos;

USE catalogo_jogos;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL
);