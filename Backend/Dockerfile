# Utiliser l'image officielle PHP avec Apache
FROM php:8.0-apache

# Installer les extensions nécessaires (ici par exemple pour PDO MySQL)
RUN docker-php-ext-install pdo pdo_mysql

# Installer Composer
RUN apt-get update && apt-get install -y curl \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Activer le module rewrite d'Apache
RUN a2enmod rewrite

# Copier le code source dans le conteneur
COPY . /var/www/html/

# Copier le fichier .env dans le conteneur (ajuste le chemin selon ta structure)
COPY .env /var/www/html/.env

# Installer les dépendances PHP via Composer
WORKDIR /var/www/html
RUN composer install --no-interaction --optimize-autoloader

# Donner les bonnes permissions
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Exposer le port 80
EXPOSE 80

# Démarrer Apache
CMD ["apache2-foreground"]
