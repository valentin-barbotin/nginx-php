FROM php:5.6-fpm-alpine

WORKDIR /app

EXPOSE 9000

RUN mkdir ./logs
RUN mkdir ./www

COPY ./www ./www