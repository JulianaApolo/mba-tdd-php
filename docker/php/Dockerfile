FROM php:8.1-fpm

# Set working directory
WORKDIR /var/www

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    iputils-ping \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    libzip-dev \
    libxml2-dev \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    nano \
    git \
    curl

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-install pdo_mysql zip exif pcntl gd

# SSH
RUN mkdir ~/.ssh
RUN echo 'IdentityFile ~/.ssh-local/id_rsa' > ~/.ssh/config
RUN ssh-keyscan -t rsa github.com >> /root/.ssh/known_hosts

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Shellscript
COPY ./docker/php/entrypoint.sh /etc/entrypoint.sh

EXPOSE 80 443
ENTRYPOINT ["sh", "/etc/entrypoint.sh"]