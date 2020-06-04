#!/bin/bash
/etc/init.d/php7.3-fpm start
service nginx start
service mysql start
#tail -f /var/log/nginx/*.log
