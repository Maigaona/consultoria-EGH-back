create database if not exists consultoria_egh;

use consultoria_egh;

CREATE USER 'consultoria'@'127.0.0.1' IDENTIFIED BY 'consultoriadb';

create table if not exists formularios(
      id int auto_increment primary key,
      nombre varchar(50) not null,
      email varchar(50) not null,
      telefono varchar (20) not null,
      mensaje varchar (1000) not null
);

GRANT ALL PRIVILEGES ON consultoria_egh.* TO 'consultoria'@'127.0.0.1';