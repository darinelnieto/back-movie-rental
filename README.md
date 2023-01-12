<p>Esta es una RestApi hecha en larave, que tiene como finalidad poner a disposición los respectivos endpiond que cunsumirá el front para los CRUDS de películas, clientes, usuarios, y rentas.</p>
<p>En este proyecto se usó la librería de <strong>spatie</strong> para creación de roles y permisos y las <strong>Auth</strong> de bootstrap para las autentificaciones de los endpoind para inicio de sesión.</p>
<p>Estos son los pasos para instalar en local este proyecto de laravel.</p>
<ul>
    <li>git clone https://github.com/darinelnieto/back-movie-rental.git para bajar el repositorio en la ruta que se encuentren desde el cmd.</li>
    <li>Acceder a la carpeta donde se descargó el proyecto bien y correr el comando <strong>composer install</strong></li>
    <li>ccorrer el comando <strong>cp .env.example .env</strong> luego de esto abrir el nuevo archivo .env y agregar el nombre de la base de datos en la línea 14, Agregar el usuario en la línea 15, en caso de tener contraseña se debe agregar en la línea 16</li>
    <li>Correr el comando <strong>php artisan key:generate</strong></li>
    <li>Ir hasta el archivo UserSeerer.php que se encuentra en /database/seeders/UserSeerer.php y cambiar los datos del usuario que se creará al correr el comando <strong>php artisan migrate --seed</strong></li>
    <li>Correr el comando <strong>php artisan migrate --seed</strong></li>
    <li>Por ultimo correr el comando <strong>php artisan serve</strong> para levantar el servior.</li>
</ul>