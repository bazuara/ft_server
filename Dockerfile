FROM debian:buster
RUN apt-get -qq update
RUN apt-get -qq upgrade
WORKDIR /tmp
# Install Nginx
RUN apt-get install nginx -y > ./container_build.log
RUN rm /etc/nginx/sites-enabled/default
ADD ./srcs/localhost.conf /etc/nginx/sites-enabled/
# Install Php
RUN apt install php7.3 -y >> ./container_build.log
RUN apt install php7.3-cli php7.3-common php7.3-curl php7.3-gd php7.3-json php7.3-mbstring php7.3-mysql php7.3-xml php-fpm -y >> ./container_build.log
ADD ./srcs/php.ini /etc/php/7.3/cli/
# Install SSL
ADD https://github.com/FiloSottile/mkcert/releases/download/v1.4.1/mkcert-v1.4.1-linux-amd64 .
RUN chmod +x mkcert-v1.4.1-linux-amd64 && ./mkcert-v1.4.1-linux-amd64 -install && ./mkcert-v1.4.1-linux-amd64 localhost
# Install Wordpress
ADD https://wordpress.org/latest.tar.gz /tmp/
RUN tar xfp ./latest.tar.gz
RUN mv wordpress /var/www/html/
RUN rm ./latest.tar.gz
COPY ./srcs/wp-config.php /var/www/html/wordpress/
# Install Mysql (MariaDB flavour)
RUN apt-get install mariadb-server -y >> ./container_build.log
# Install phpMyAdmin
ADD https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-english.tar.gz /tmp/
RUN tar xfp phpMyAdmin-5.0.2-english.tar.gz
RUN mv phpMyAdmin-5.0.2-english /var/www/html/phpmyadmin/
#RUN rm MyAdmin-5.0.2-english.tar.gz
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html/
COPY ./srcs/startservices.sh ./
CMD bash /tmp/startservices.sh
