FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    git unzip curl libpq-dev libzip-dev libonig-dev libicu-dev zlib1g-dev \
    && docker-php-ext-install pdo_pgsql pgsql zip intl bcmath

RUN curl -sS https://getcomposer.org/installer | php -- \
    --install-dir=/usr/local/bin --filename=composer

RUN curl -fsSL https://deb.nodesource.com/setup_22.x | bash - \
    && apt-get install -y nodejs

WORKDIR /var/www/html

RUN chown -R www-data:www-data /var/www/html

CMD ["php-fpm"]
