FROM php:7.2-apache-stretch
# Setup environment
ENV DEBIAN_FRONTEND noninteractive

# Use the default development configuration
#RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

# Use the default production configuration
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Update sources
RUN apt-get update

# install php most common extensions
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
    && docker-php-ext-install -j$(nproc) iconv \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd

# install common packages
RUN apt-get install -y libmcrypt-dev
RUN apt-get install -y libicu-dev
RUN apt-get install -y libxml2-dev
RUN apt-get install -y libldb-dev
RUN apt-get install -y libldap2-dev
RUN apt-get install -y libxml2-dev
RUN apt-get install -y libssl-dev
RUN apt-get install -y libxslt-dev
RUN apt-get install -y libpq-dev
RUN apt-get install -y mysql-client
RUN apt-get install -y libsqlite3-dev
RUN apt-get install -y libsqlite3-0
RUN apt-get install -y libc-client-dev
RUN apt-get install -y libkrb5-dev
RUN apt-get install -y curl
RUN apt-get install -y libcurl3
RUN apt-get install -y libcurl3-dev
RUN apt-get install -y firebird-dev
RUN apt-get install -y libpspell-dev
RUN apt-get install -y aspell-en
RUN apt-get install -y libtidy-dev
RUN apt-get install -y libsnmp-dev
RUN apt-get install -y librecode0
RUN apt-get install -y librecode-dev

# install other php extensions
RUN docker-php-ext-install -j$(nproc) intl
RUN docker-php-ext-install opcache
RUN docker-php-ext-install soap
RUN docker-php-ext-install ftp
RUN docker-php-ext-install xsl
RUN docker-php-ext-install bcmath
RUN docker-php-ext-install calendar
RUN docker-php-ext-install ctype
RUN docker-php-ext-install dba
RUN docker-php-ext-install dom
RUN docker-php-ext-install zip
RUN docker-php-ext-install session
RUN docker-php-ext-configure ldap --with-libdir=lib/x86_64-linux-gnu
RUN docker-php-ext-install ldap
RUN docker-php-ext-install json
RUN docker-php-ext-install hash
RUN docker-php-ext-install sockets
RUN docker-php-ext-install pdo
RUN docker-php-ext-configure mbstring
RUN docker-php-ext-install mbstring
RUN docker-php-ext-configure tokenizer
RUN docker-php-ext-install tokenizer
RUN docker-php-ext-install pgsql
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install pdo_sqlite
RUN pecl install mcrypt-1.0.1
RUN docker-php-ext-enable mcrypt

# install git
RUN apt-get --yes --force-yes install git

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN chmod a+x /usr/local/bin/composer

# Install Codeception
RUN curl -LsS http://codeception.com/codecept.phar -o /usr/local/bin/codecept
RUN chmod a+x /usr/local/bin/codecept

# Add Config
ADD 000-default.conf /etc/apache2/sites-available/

RUN a2enmod rewrite

# Reload config
RUN service apache2 restart

# Add user to make it easier to develop directly inside microservice
RUN useradd -M -p Pa$$w0rd -u 1000 webserver

# Fix terminal
RUN echo "export TERM=xterm" >> ~/.bashrc

EXPOSE 80