FROM debian:buster

RUN apt-get update
RUN apt-get install -y openssl php-gd php-xml vim nginx

EXPOSE 443

COPY ./conf/ /var/www/

RUN chmod +x /var/www/startnginx.sh

ENTRYPOINT ["/var/www/startnginx.sh"]

CMD ["nginx", "-g", "daemon off;"]