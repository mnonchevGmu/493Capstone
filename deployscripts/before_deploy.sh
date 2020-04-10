#! /bin/sh

rm -Rf /home/ec2-user/website_backup/*
mv /var/www/html/* ~/website_backup/
rm -Rf /var/www/html/*