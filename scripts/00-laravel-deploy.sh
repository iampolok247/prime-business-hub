#!/usr/bin/env bash

# Exit immediately if a command exits with a non-zero status
set -e

echo "Starting Laravel deployment tasks..."

# Run database migrations
echo "Running migrations..."
php artisan migrate --force

# Optimize configurations, routes, and views for production
echo "Caching configuration..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Caching views..."
php artisan view:cache

echo "Laravel deployment tasks completed successfully!"
