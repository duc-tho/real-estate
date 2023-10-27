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
RUN apt -y install php7.4 php7.4-fpm php7.4-xdebug
RUN apt -y install openssl php7.4-bcmath php7.4-curl php7.4-mbstring php7.4-mysql php7.4-tokenizer php7.4-xml php7.4-zip php7.4-fileinfo php7.4-ctype

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install NodeJS
RUN curl -sL https://deb.nodesource.com/setup_18.x | sudo bash -
RUN apt -y install nodejs

ENV COMPOSER_ALLOW_SUPERUSER=1
