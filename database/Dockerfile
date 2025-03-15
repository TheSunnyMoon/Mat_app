# Utilise l'image officielle de MySQL
FROM mysql:8

# Copier le fichier .env pour utiliser les variables dans le container

# Définir les variables d'environnement pour MySQL à partir du fichier .env
ENV MYSQL_ROOT_PASSWORD=${DB_ROOT_PASSWORD}
ENV MYSQL_DATABASE=${DB_NAME}
ENV MYSQL_USER=${DB_USER}
ENV MYSQL_PASSWORD=${DB_PASSWORD}

# Copier le script de création de la base de données
COPY schema.sql /docker-entrypoint-initdb.d/

# Expose le port par défaut pour MySQL
EXPOSE 3306
