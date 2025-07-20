FROM php:8.3-fpm-alpine

RUN apk add --no-cache \
    bash \
    shadow \
    icu-libs \
    oniguruma-dev \
    libzip \
    zip \
    unzip \
    nginx \
    postgresql-libs \
    libpq \
    curl

RUN apk add --no-cache --virtual .build-deps \
    icu-dev \
    libzip-dev \
    postgresql-dev \
    && docker-php-ext-install pdo pdo_pgsql intl zip opcache \
    && apk del .build-deps

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/symfony

COPY . .

RUN composer install

# Copy nginx config (make sure this exists and is correct)
COPY ./docker/nginx.conf /etc/nginx/nginx.conf

CMD ["sh", "-c", "php-fpm & nginx -g 'daemon off;'"]
