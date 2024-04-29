FROM php:7.4-apache
COPY . /var/www/html/
EXPOSE 80

FROM gcc:latest
COPY program.c .
RUN gcc -o main program.c
CMD [”./main”]