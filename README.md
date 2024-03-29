# Prueba de FTT con Laravel, Jquery y Bootstrap por Victoracho

Modelo ER:
https://ibb.co/N78T6Fd

## Instalación
1- Clonar el repositorio ya sea por HTTPS o SSH - Clone the repository either by HTTPS or SSH
```
git clone github.com:victoracho/prueba-ftt-victoracho.git
```

2.- Instalar las dependencias de Composer - Install the Composer dependencies
```bash
composer install
```

3.- Instalar las dependencias de Node.js - Install the dependencies of Node.js
```bash
npm install
```

4.- Ingresar a la carpeta del proyecto y modificar los accesos a base de datos en el archivo .env
```bash
 .env
```

5.- Configurar nombre, usuario y contraseña de la base de datos en el archivo .env - Set name, user and password of the database in the .env file
```bash
DB_DATABASE=name_database
DB_USERNAME=name_user_database
DB_PASSWORD=password_user_database
```

6.- Configurar la clave de aplicación - Configure the application key

```bash
php artisan key:generate
```

7.- Crear la base de datos - To create the database
```sql
CREATE DATABASE name_database;
```

8.- Crear las tablas a través de las migraciones - Create tables through migrations
```bash
php artisan migrate
```

9.- Compilar las hojas de estilo y los archivos JavaScript con Webpack - Compile style sheets and JavaScript files with Webpack
```bash
npm run dev
```

10.- Encender el servidor de artisan y acceder a la URL dada por medio del navegador - Turn on the artisan server and access the given URL through the browser

```bash
php artisan serve --port=8000
```


11.- Correr seeder para crear los cargos

```bash
php artisan db:seed
```


