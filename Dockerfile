FROM debian:buster

RUN apt update
RUN apt upgrade
RUN apt install nginx -y
RUN apt install wget -y
WORKDIR /tmp
RUN wget https://wordpress.org/latest.tar.gz
COPY ./startservices.sh ./
CMD bash /tmp/startservices.sh
