#from
FROM debian:jessie

# maintainer
MAINTAINER Bruno<brunorsantos1@gmail.com>  

# a partir de agora comandos dentro do container

RUN apt -y update

RUN apt install -y mysql-client

ADD my.cnf /etc/mysql/my.cnf