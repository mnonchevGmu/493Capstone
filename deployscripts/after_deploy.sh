#! /bin/sh

cp /home/ec2-user/website_backup/.env /var/www/html/.env
chmod 777 -R /var/www/html/storage
chmod 777 /var/www/html/bootstrap/cache
