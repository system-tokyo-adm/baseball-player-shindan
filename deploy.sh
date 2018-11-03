#!/bin/bash

PJ_NAME=$1

# 引数のチェック

if [ "$1" = "" ]
then

    echo "プロジェクト名を指定して下さい。"
    exit 1

fi

if [ -e ./$PJ_NAME ]; then
    echo "delete local pj!"
    sudo rm -rf $PJ_NAME/
else
    echo "OK! local pj is not exist!"
fi

git clone git@github.com:system-tokyo-adm/$PJ_NAME.git

cp ./$PJ_NAME/.env.example ./$PJ_NAME/.env

cd ./$PJ_NAME
git remote set-url origin git@github.com:system-tokyo-adm/$PJ_NAME.git

composer install
php artisan key:generate
cd ../

if [ -e /var/www/html/$PJ_NAME ]; then
    echo "delete /var/www/html $PJ_NAME!"
    sudo rm -rf /var/www/html/$PJ_NAME/
else
    echo "OK! /var/www/html/$PJ_NAME is not exist!"
fi

sudo cp -r $PJ_NAME/ /var/www/html/
sudo chmod -R 777 /var/www/html/$PJ_NAME/
sudo service httpd restart
