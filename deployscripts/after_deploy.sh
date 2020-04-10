#! /bin/sh

cp ~/website_backup/.env /var/www/html/.env
chmod 777 -R /var/www/html/storage
chmod 777 /var/www/html/bootstrap/cache
