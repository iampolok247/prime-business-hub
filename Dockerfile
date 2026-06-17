# Stage 1: Build frontend assets
FROM node:20-alpine AS frontend-builder
WORKDIR /app
COPY package*.json ./
RUN npm ci
COPY . .
RUN npm run build

# Stage 2: PHP & Nginx Runtime
FROM richarvey/nginx-php-fpm:3.1.6
WORKDIR /var/www/html

# Copy codebase
COPY . .

# Copy Vite compiled assets from Stage 1
COPY --from=frontend-builder /app/public/build ./public/build

# Run composer install to install PHP dependencies
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-progress

# Set appropriate permissions for Laravel storage and cache directories
RUN chmod -R 775 storage bootstrap/cache && \
    chown -R www-data:www-data storage bootstrap/cache

# Configure environment variables for the container
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr

# Expose port 80
EXPOSE 80
