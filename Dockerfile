FROM php:8.1-apache-buster

RUN apt update && \
    apt upgrade -y

