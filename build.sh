#!/bin/bash

# Exit on any error
set -e

echo "Starting Laravel build process..."

# Install PHP dependencies
echo "Installing PHP dependencies..."
composer install --no-dev --optimize-autoloader

# Install Node.js dependencies and build assets
echo "Installing Node.js dependencies..."
npm ci

echo "Building frontend assets..."
npm run production

# Generate application key if not exists
echo "Generating application key..."
php artisan key:generate --force

# Clear and cache configuration
echo "Caching configuration..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Run database migrations
echo "Running database migrations..."
php artisan migrate --force

# Create storage link
echo "Creating storage link..."
php artisan storage:link

echo "Build completed successfully!"
