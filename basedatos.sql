-- modelo de base de datos usada xdxd
CREATE DATABASE IF NOT EXISTS pixels;
USE pixels;
CREATE TABLE IF NOT EXISTS pixel (
    id INT NOT NULL AUTO_INCREMENT,
    color VARCHAR(20) NOT NULL,
    x INT NOT NULL,
    y INT NOT NULL,
    PRIMARY KEY (id)
);


