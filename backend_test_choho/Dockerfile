# start with our base image
FROM php:7.3.2-apache

# install all the system dependencies and enable PHP modules
RUN apt-get update \
	&& apt-get install -y openssl \
	&& apt-get install -y libmcrypt-dev \
	&& apt-get install -y nano \
    && apt-get install -y zip \
    && apt-get install -y unzip \
    && apt-get install libldap2-dev -y \
    && docker-php-ext-configure ldap --with-libdir=lib/x86_64-linux-gnu/ \
    && docker-php-ext-install ldap \
    && apt-get install -y libzip-dev \
    && docker-php-ext-install zip \
	&& pecl install mcrypt-1.0.4 \
	&& docker-php-ext-enable mcrypt
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

#install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer

# Install extensions
RUN docker-php-ext-install pdo mbstring pdo_mysql

#change uid and gid of apache to docker user uid/gid
RUN usermod -u 1000 www-data && groupmod -g 1000 www-data

#change the web_root to laravel /var/www/html/public folder
RUN sed -i -e "s/html/html\/public/g" /etc/apache2/sites-enabled/000-default.conf

# enable apache module rewrite
RUN a2enmod rewrite

RUN a2enmod headers
RUN sed -ri -e 's/^([ \t]*)(<\/VirtualHost>)/\1\tHeader set Access-Control-Allow-Origin "*"\n\1\2/g' /etc/apache2/sites-available/*.conf

#copy source files and run composer
COPY . /var/www/html

# install all PHP dependencies
RUN composer install --no-interaction

#change ownership of our applications
RUN chown -R www-data:www-data /var/www/html

# We didn't explicitly specify the CMD to tell Docker how to run our container.
# But the base-image (FROM php:7.1.5-apache)  has the command to run Apache in the foreground,
# we simply inherit the command.

# Telescope
RUN php artisan telescope:publish
