FROM php:8.2-apache

# Habilitar soporte para MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiar todo el código de tu proyecto al servidor
COPY . /var/www/html/

# Decirle al servidor que tu página principal está en la carpeta /public
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|g' /etc/apache2/sites-available/000-default.conf
RUN echo '<Directory /var/www/html/public>' >> /etc/apache2/sites-available/000-default.conf
RUN echo '    AllowOverride All' >> /etc/apache2/sites-available/000-default.conf
RUN echo '</Directory>' >> /etc/apache2/sites-available/000-default.conf

# Asignar permisos correctos
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html