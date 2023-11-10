FROM php:8.1-apache-buster

RUN apt update && \
    apt upgrade -y

RUN apt update && \
    apt install -y \
    vim \
    less
