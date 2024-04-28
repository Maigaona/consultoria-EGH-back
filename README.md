# consultoria-EGH-back

Back end para sitio web de Consultoria EGH. Aplicación hecha en PHP y Symfony.

## Instrucciones de instalación

Descargar este repositorio a una carpeta en su computadora.

Esta página web necesita PHP 7 o superior, y Symfony. Siga las instrucciones en el siguiente [enlace](https://github.com/symfony-cli/symfony-cli) para instalar Symfony CLI en su computadora.

Una vez dentro de la carpeta del proyecto, instalar las dependencias del proyecto con el comando
```bash
composer update
```

Iniciar el servidor web con el siguiente comando
```bash
symfony start:server
```
Puede ver la página en funcionamiento entrando a http://127.0.0.1:8000.

## Front end

Este repositorio ya cuenta con el front end instalado en la carpeta `public`.

## Base de datos

Instalar MySQL en su computadora, entrar como usuario root y crear la base de datos de la apliación ejecutando los
comandos del archivo `consultoria_egh.sql`.