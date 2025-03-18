FROM php:8.1-apache

# Install dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip pdo pdo_mysql

# Enable Apache modules
RUN a2enmod rewrite

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy composer files first for better layer caching
COPY composer.json composer.lock* ./

# Install PHP dependencies
RUN composer install --no-interaction --prefer-dist

# Copy all application files
COPY . /var/www/html/

# Make sure vendor directory exists and has correct permissions
RUN if [ ! -d /var/www/html/vendor ]; then \
        composer install --no-interaction --prefer-dist; \
    fi \
    && chown -R www-data:www-data /var/www/html/vendor

# Configure Apache document root
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf \
    && sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/default-ssl.conf

# Configure Apache server name and directory permissions - FIXED CLOSING TAG
RUN echo 'ServerName env-8708020.jcloud.ik-server.com' >> /etc/apache2/apache2.conf \
    && echo '<Directory /var/www/html/public/>\n\
    Options Indexes FollowSymLinks\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>' > /etc/apache2/conf-available/api-directory.conf \
    && a2enconf api-directory

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80