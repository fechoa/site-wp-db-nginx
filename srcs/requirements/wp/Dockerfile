FROM debian:buster

RUN apt-get update
RUN apt-get install -y php-fpm php-mysql php-mbstring php-gd php-xml wget vim

EXPOSE 9000

COPY ./conf/ /var/www/

RUN chmod +x /var/www/startwp.sh

ENTRYPOINT ["/var/www/startwp.sh"]

CMD ["/usr/sbin/php-fpm7.3", "--nodaemonize"]