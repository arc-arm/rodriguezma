
CREATE DATABASE rodriguezma;
USE rodriguezma;
-- CREACION DE LA TABLA
CREATE TABLE CatalogoBancos
(
    id_banco TINYINT PRIMARY KEY AUTO_INCREMENT, -- primary key column
    razon_social VARCHAR(100) NOT NULL,
    rfc VARCHAR(15) NOT NULL,
    colonia VARCHAR(30),
    calle VARCHAR(20),
    numero_domicilio VARCHAR(10),
    telefono VARCHAR(12)
);

-- Llenado de la tabla
INSERT INTO CatalogoBancos (razon_social, rfc, colonia, calle, numero_domicilio, telefono) 
VALUES('Banco Nacional de México, S.A., Grupo Financiero Banamex', 'ULM7W8SQL18GD', 'Colonia 1', 'Calle 1', '0716', '4462311244'),
('Banco Nacional de Comercio Exterior, Institución de Banca de Desarrollo', 'UUC7HI6X38DW3', 'Colonia 2', 'Calle 2', '8356', '8533355872'),
('BBVA Bancomer, S.A., Grupo Financiero BBVA Bancomer','43YTMKQKV29F0','Colonia 3','Calle 3','0490', '7456109731'),
('Banco Santander (México), S.A., Grupo Financiero Santander','1CU1DKBI4LGNG','Colonia 4','Calle 4','9833','4113922791'),
('HSBC México, S.A., Grupo Financiero HSBC','ZTUO7T265JZQK','Colonia 5','Calle 5','5090','4926328828')
