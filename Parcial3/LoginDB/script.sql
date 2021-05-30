CREATE DATABASE IF NOT EXISTS rodriguezma;
USE rodriguezma;

/*TABLA DE USUARIOS Nota: el tamaño de la contraseña 
debe coincidir con el encriptado, en mi caso, 129*/

CREATE TABLE IF NOT EXISTS Usuario 
(
    id_usuario TINYINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user VARCHAR(20) NOT NULL,
    password VARCHAR(129) NOT NULL  
);

-- Usuario de prueba
INSERT INTO Usuario (user, password) VALUES ('jose', '55bcedb34c8dc6609f48760ff91cab46c15d6a0c55bc5595e1f74db59bc542ea6f7f2c5befa3136ad8115fa1984e00857abc685d8120d4944fc015827fc70a5b');
