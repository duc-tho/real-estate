FROM mcr.microsoft.com/vscode/devcontainers/base:0-ubuntu-20.04
LABEL maintainer ThoNgo <thopko007113@gmail.com>

# Replace shell with bash so we can source files
RUN rm /bin/sh && ln -s /bin/bash /bin/sh

# Install basic dependencies and libraries
RUN apt-get update && \
    apt-get install -y --no-install-recommends \
    zip \
    unzip \
    vim \
    sudo \
    curl \
    tar \
    wget \
    git \
    bzip2 \
    && apt-get clean

RUN apt -y install nginx

RUN apt -y install software-properties-common
RUN add-apt-repository ppa:ondrej/php
RUN apt-get update
RUN apt -y install php7.2 php7.2-fpm php7.2-xdebug
RUN apt -y install openssl php7.2-bcmath php7.2-curl php7.2-json php7.2-mbstring php7.2-mysql php7.2-tokenizer php7.2-xml php7.2-zip php7.2-fileinfo php7.2-ctype

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install NodeJS
RUN curl -sL https://deb.nodesource.com/setup_16.x | sudo bash -
RUN apt -y install nodejs

ENV COMPOSER_ALLOW_SUPERUSER=1
