# Utilisation d'une image Nginx officielle pour le frontend
FROM nginx:latest

# Copier les fichiers frontend dans le répertoire par défaut de Nginx
COPY ./ /usr/share/nginx/html

# Personnaliser la configuration de Nginx
COPY nginx.conf /etc/nginx/nginx.conf
COPY default.conf /etc/nginx/conf.d/default.conf
COPY stream.conf /etc/nginx/conf.d/stream.conf

# Exposer le port 80 pour Nginx
EXPOSE 80
