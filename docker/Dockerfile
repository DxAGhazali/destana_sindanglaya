# Base image
FROM php:8.3-fpm-bullseye

# ----------------------------------------------------
# Install dependencies & PHP extensions
# ----------------------------------------------------
RUN apt-get update && apt-get install -y \
    # Core utils
    unzip git curl \
    # DB & PHP extensions deps
    libpq-dev libzip-dev libgmp-dev libuv1-dev \
    # Image processing deps
    libpng-dev libjpeg-dev libfreetype6-dev libmagickwand-dev \
    # Fonts & rendering deps (for wkhtmltopdf)
    xfonts-75dpi xfonts-base fontconfig libjpeg62-turbo libx11-6 libxcb1 libxext6 libxrender1 \
    # Cleanup
    && rm -rf /var/lib/apt/lists/* \
    \
    # Configure & install PHP extensions
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
    pdo \
    pdo_pgsql \
    pgsql \
    zip \
    opcache \
    exif \
    gd \
    bcmath \
    gmp \
    pcntl \
    \
    # Install imagick via PECL
    && pecl install imagick \
    && docker-php-ext-enable imagick

# ----------------------------------------------------
# Install wkhtmltopdf (buster build, stable di Bullseye)
# ----------------------------------------------------
RUN curl -L https://github.com/wkhtmltopdf/packaging/releases/download/0.12.6-1/wkhtmltox_0.12.6-1.buster_amd64.deb \
    -o /tmp/wkhtmltox.deb \
    && dpkg -i /tmp/wkhtmltox.deb || apt-get -f install -y \
    && rm -rf /var/lib/apt/lists/* /tmp/*

# ----------------------------------------------------
# Install Composer
# ----------------------------------------------------
RUN curl -sS https://getcomposer.org/installer \
    | php -- --install-dir=/usr/local/bin --filename=composer

# ----------------------------------------------------
# Install Node.js & npm (LTS 20.x)
# ----------------------------------------------------
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get update && apt-get install -y nodejs \
    && npm install -g npm \
    && rm -rf /var/lib/apt/lists/*

# ----------------------------------------------------
# Configure OPcache
# ----------------------------------------------------
RUN { \
    echo "opcache.enable=1"; \
    echo "opcache.memory_consumption=1024"; \
    echo "opcache.max_accelerated_files=10000"; \
    echo "opcache.revalidate_freq=2"; \
    echo "opcache.validate_timestamps=1"; \
    } > /usr/local/etc/php/conf.d/docker-php-ext-opcache.ini

# ----------------------------------------------------
# Set working directory
# ----------------------------------------------------
WORKDIR /var/www

# Prepare storage & cache directories
RUN mkdir -p storage bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# ----------------------------------------------------
# Run container as www-data (non-root)
# ----------------------------------------------------
USER www-data
