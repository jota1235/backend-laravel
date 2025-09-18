# Imagen base de PHP con Composer
FROM php:8.2-cli

# Instalar dependencias del sistema y extensiones necesarias
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    libpq-dev \
    libzip-dev \
    zip \
    && docker-php-ext-install pdo pdo_mysql zip

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Establecer directorio de trabajo
WORKDIR /app

# Copiar archivos del proyecto
COPY . .

# Instalar dependencias de Laravel (sin dev para producción)
RUN composer install --no-dev --optimize-autoloader


RUN mkdir -p /app/storage /app/bootstrap/cache \
    && chmod -R 775 /app/storage /app/bootstrap/cache

# Exponer puerto 10000 (Render usa este por defecto)
EXPOSE 10000

# Comando de inicio (usamos artisan serve para exponer Laravel)
CMD php artisan serve --host=0.0.0.0 --port=10000
