FROM debian:buster

RUN apt update
RUN apt upgrade
# Install Nginx
RUN apt install nginx -y
# Install Wordpress
WORKDIR /tmp
ADD https://wordpress.org/latest.tar.gz /tmp/
RUN tar xfvp ./latest.tar.gz
RUN mv wordpress /var/www/html/
RUN rm ./latest.tar.gz
COPY ./srcs/wp-config.php /var/www/html/wordpress/
# Install Mysql (MariaDB flavour)
RUN apt install mariadb-server -y
# Install phpMyAdmin
ADD https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-english.tar.gz /tmp/
RUN tar xfvp phpMyAdmin-5.0.2-english.tar.gz
RUN mv phpMyAdmin-5.0.2-english /var/www/html/phpmyadmin/

COPY ./srcs/startservices.sh ./
CMD bash /tmp/startservices.sh
