FROM php:7.2-apache
COPY index.php /var/www/html/
COPY init_container.sh /bin/

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        openssh-server \
        vim \
        curl \
        wget \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install mysqli \
    && chmod 755 /bin/init_container.sh \
    && echo "root:Docker!" | chpasswd \
    && echo "cd /home" >> /etc/bash.bashrc 

COPY sshd_config /etc/ssh/
EXPOSE 2222 80
ENV PORT 80
WORKDIR /var/www/html

ENTRYPOINT ["/bin/init_container.sh"]
