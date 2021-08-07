#!/bin/bash
#ejecutest -- sudo user please
sudo touch /etc/apache2/conf-available/chia.network.api.local.conf
sudo cp /var/www/html/chia.coins.api/doc/chia.network.api.local.conf  /etc/apache2/conf-available/chia.network.api.local.conf
sudo a2ensite /etc/apache2/conf-available/chia.network.api.local.conf
sudo systemctl restart apache2