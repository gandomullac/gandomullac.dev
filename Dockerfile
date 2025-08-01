# Dockerfile
FROM php:8.4-fpm-alpine

# Install PHP extensions and dependencies
RUN apk add --no-cache \
    zip \
    unzip \
    icu-dev \
    mysql-client \
    libzip-dev \
    # Install Node.js and npm for frontend tasks
    nodejs \
    npm

# Install PHP extensions
RUN docker-php-ext-install -j$(nproc) pdo_mysql intl zip

# Create a non-root user and group
ARG UID
ARG GID
RUN addgroup -g ${GID:-1000} --system appuser \
    && adduser -u ${UID:-1000} --system -G appuser appuser

# Switch to the new user
USER appuser
