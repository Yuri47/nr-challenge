Instructions:
With local server and installed composer, just put the project in the "www" folder on your server, open the console within the project folder and type the following command: 

composer dump-autoload

composer install

ren .env.example .env

php artisan key:generate

php artisan serve


Then simply enter the address that appears on the console.
