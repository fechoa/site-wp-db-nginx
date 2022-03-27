FROM debian:buster

RUN apt-get update
RUN apt-get install -y default-mysql-server vim

EXPOSE 3306

COPY ./conf /var/www/

RUN chmod +x /var/www/startdb.sh

ENTRYPOINT ["/var/www/startdb.sh"]

CMD ["mysqld"]