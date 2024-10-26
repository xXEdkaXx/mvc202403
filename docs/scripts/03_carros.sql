USE ecommerce;

Create table carros(
	codigo int NOT NULL PRIMARY KEY auto_increment comment 'PRIMARY KEY',
    modelo VARCHAR(128),
    marca VARCHAR(128),
    anio INT,
    kilometraje INT,
    chasis VARCHAR(128),
    color VARCHAR(64),
    registro VARCHAR(64),
    cilindraje INT,
    notas TEXT,
    rodaje VARCHAR(128),
    estado CHAR(3),
    creado DATETIME,
    precioventa DECIMAL(13,2),
    preciominio DECIMAL(13,2),
    actualizado DATETIME
) COMMENT 'Tabla que registra los automotores de un Dealer de Carros Usado';