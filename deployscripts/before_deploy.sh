#! /bin/sh

rm -Rf /home/ec2-user/website_backup/*
shopt -s dotglob nullglob
mv /var/www/html/* /home/ec2-user/website_backup/
rm -Rf /var/www/html/*