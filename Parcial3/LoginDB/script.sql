CREATE DATABASE IF NOT EXISTS rodriguezma;
USE rodriguezma;

-- TABLA DE USUARIOS

CREATE TABLE IF NOT EXISTS Usuario 
(
    id_usuario TINYINT NOT NULL AUTO_INCREMENT,
    user VARCHAR(20) NOT NULL,
    password VARCHAR(20) NOT NULL
);

-- Usuario de prueba
INSERT INTO Usuario (user, password) VALUES ('jose', 'rodriguez');
