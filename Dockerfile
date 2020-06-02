FROM debian:buster

RUN apt update
RUN apt upgrade
RUN apt install nginx -y
CMD service nginx start && tail -F /var/log/mysql/error.log
