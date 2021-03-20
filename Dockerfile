FROM phpdockerio/php71-fpm:latest

RUN apt-get update \
    && apt-get -y --no-install-recommends install php7.1-mysql php7.1-bz2 php7.1-gd php-imagick php7.1-mbstring php7.1-soap php-ssh2 php7.1-xsl php-yaml locales git \
    && sed -i 's/# en_US.UTF-8 UTF-8/en_US.UTF-8 UTF-8/' /etc/locale.gen \
    && sed -i 's/# ru_RU.UTF-8 UTF-8/ru_RU.UTF-8 UTF-8/' /etc/locale.gen \
    && locale-gen \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

WORKDIR /var/www

RUN git clone https://github.com/webasyst/webasyst-framework.git wa

COPY wa wa
