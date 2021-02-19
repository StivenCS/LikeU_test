Instalacion del proyecto
Este proyecto requiere de composer para instalar todas las dependencias necesarias para ejecutarse.

Dentro del proyecto ejecutar los siguientes comandos:
composer install
cp .env.example .env
php artisan key:generate
php artisan jwt:secret
Configuracion para la base de datos:
Para poder conectar laravel a la base de datos en el archivo .env generado anteriormente localice las siguientes lineas

DB_DATABASE= DB
DB_USERNAME=root
DB_PASSWORD=

Cree una nueva bases de datos en blanco con el nombre de su preferncia, si quiere seguir la configuracion de esta guia puede usar como nombre para la base de datos el siguiente: likeu-test

DB_DATABASE: En esta linea colocara de su nombre de su base de datos (recuerde haber creado la base de datos con anterioridad en su gestor de base de datos)
DB_USERNAME: En esta linea colocara el usuario de su base de datos
DB_PASSWORD: En esta linea colocara la contraseña para ese usuario de su base de datos
Puede usar la siguiente configuracion para la base de datos en el archivo .env

DB_DATABASE: likeu
DB_USERNAME: root
DB_PASSWORD: (Dejar en blanco si no tiene contraseña, de lo contrario colocar su contraseña para el motor de bases de datos de su maquina)
Para correr y crear todas las tablas en la base de datos ejecute:
php artisan migrate --seed

si presenta problemas con el comando anterio pruebe con:

php artisan migrate:fresh --seed o php artisan migrate:refresh --seed

Por ultimo para correr la aplicacion ejecute el comando: php artisan serve

Documentacion de la API
Para observar la documentacion de la API despues de tener el proyecto corriendo, ingrese desde un navegador web al enlance que le genera el comando php artisan serve añadiendo a ese enlance lo siguiente /api/documentation, Ejemplo: http://localhost:8000/api/documentation

Usuario para probar la aplicacion:

email: like@correo.com
password: 123456
