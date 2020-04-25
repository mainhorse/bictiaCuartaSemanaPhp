CREATE DATABASE coca_cola;
use coca_cola;
CREATE TABLE empleados(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(128),
    apellido VARCHAR(128),
    direccion VARCHAR(128),
    telefono VARCHAR(128),
    email VARCHAR(128)
);