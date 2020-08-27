Après avoir cloner le projet il faut suivez les étapes suiveantes

composer install

nmp install

//copier .env.example vers .env 

cp .env.example .env

//Generate app encryption key

php artisan key:generate

//modifier la base de donnees

//modifier l'email driver
//modifier par l'email de votre domaine ...
MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=imad.motanabbi19@gmail.com
MAIL_PASSWORD=jhttodwsazgzsinh
MAIL_ENCRYPTION=tls

//migrate database
php artisan migrate

//rest à modifier l'email message detail
