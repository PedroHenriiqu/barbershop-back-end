FROM webdevops/php-nginx:8.3-alpine

ENV WEB_DOCUMENT_ROOT=/app/public
ENV APP_ENV=production
ENV APP_DEBUG=false

WORKDIR /app
COPY . /app

RUN composer install --no-dev --optimize-autoloader --working-dir=/app \
    && chmod -R 775 storage bootstrap/cache