FROM php:7.2-apache
COPY index.php /var/www/html/
COPY init_container.sh /bin/

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        openssh-server \
        vim \
        curl \
        wget \
    && chmod 755 /bin/init_container.sh \
    && echo "root:Docker!" | chpasswd \
    && echo "cd /home" >> /etc/bash.bashrc

RUN \
  curl -L https://download.newrelic.com/php_agent/release/newrelic-php5-8.5.0.235-linux.tar.gz | tar -C /tmp -zx && \
    NR_INSTALL_USE_CP_NOT_LN=1 NR_INSTALL_SILENT=1 /tmp/newrelic-php5-*/newrelic-install install && \
      rm -rf /tmp/newrelic-php5-* /tmp/nrinstall* && \
        sed -i -e 's/"REPLACE_WITH_REAL_KEY"/"Your License Key"/' \
        # replace "Your License Key" with the actual key from Newrelic console
     -e 's/newrelic.appname = "PHP Application"/newrelic.appname = "Your Application"/' \
        # repalce "Your Application Name" with actual app name 
         /usr/local/etc/php/conf.d/newrelic.ini

COPY sshd_config /etc/ssh/
EXPOSE 2222 80
ENV PORT 80
WORKDIR /var/www/html

ENTRYPOINT ["/bin/init_container.sh"]

