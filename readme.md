## Laravel PHP Framework
Base para sistemas en laravel 5.1
Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).
## Contenido
 - Autenticación
 - Cambio de Perfil
 - Cambio de Contraseña
 - Recuperar contraseña por email
 - Middleware con 3 roles de usuarios.
 
## Instalacion
 - git clone https://github.com/huascar24/base.git
 - configurar el .env   renombrar .env.example y configurar los datos de conexión a la bd
 - configurar en .env los datos para el envío de email de recordar contraseña:
            MAIL_DRIVER=smtp
            MAIL_HOST=smtp.gmail.com
            MAIL_PORT=587
            MAIL_USERNAME=tu email
            MAIL_PASSWORD=tu clave
            MAIL_ENCRYPTION=tls
 - composer update
 - php artisan migrate:install
 - php artisan migrate:refresh
 - Lo final es registrarse y seguir desarrollando