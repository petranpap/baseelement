ECHO OFF
ECHO Welcome to the Laravel - Base Element Project
PAUSE

ECHO Install the Web Server
PAUSE


ECHO Install the Composer
PAUSE


composer global require “laravel/installer”

cd C:\wamp64\bin\mysql\mysql5.7.31\bin

mysql -u root -p

mysql -uroot -p < /Users/{YOUR WINDOWS USERNAME}/Downloads/baseelement-app/installation/baseelemnt.sql

cd C:\Users/{YOUR WINDOWS USERNAME}/Downloads\baseelement-app

php artisan serve
