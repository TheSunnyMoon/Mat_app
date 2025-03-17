# backend/Dockerfile
FROM php:8.1-apache

# Mettre à jour les paquets et installer git, unzip, libzip-dev et zip
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip pdo pdo_mysql

# Activer le module mod_rewrite pour Apache
RUN a2enmod rewrite

# Copier Composer depuis l'image officielle Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copier les fichiers de configuration Composer et installer les dépendances
COPY composer.json composer.lock* ./
RUN composer install --no-interaction --prefer-dist

# Copier le code de l'application
COPY . /var/www/html/

# Configure Apache to use the public directory as the document root
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/default-ssl.conf

# Configure Apache properly for API access and set ServerName
RUN echo 'ServerName localhost' >> /etc/apache2/apache2.conf
RUN echo '<Directory /var/www/html/public/>\n\
    Options Indexes FollowSymLinks\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>' > /etc/apache2/conf-available/api-directory.conf
RUN a2enconf api-directory

# Donner les permissions appropriées au dossier
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80