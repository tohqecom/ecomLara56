FROM phpdockerio/php73-fpm:latest
WORKDIR "/application"

# Fix debconf warnings upon build
ARG DEBIAN_FRONTEND=noninteractive

# Install selected extensions and other stuff
RUN apt-get update -y && apt-get install -y zip unzip
RUN apt-get update \
    && apt-get -y --no-install-recommends install  php-memcached php7.3-mysql php-redis php7.3-imap \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

#docker run --rm -v $(pwd):/app composer/composer install
