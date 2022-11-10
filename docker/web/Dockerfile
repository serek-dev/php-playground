FROM ubuntu/apache2

# Configure Apache
COPY docker/web/app.conf /etc/apache2/sites-available
COPY docker/web/app.conf /etc/apache2/apache2
COPY docker/web/remoteip.conf /etc/apache2/mods-available

RUN mkdir /var/www/html/public -p
COPY public/index.html /var/www/html/public

# forward request and error logs to docker log collector
RUN ln -sf /dev/stdout /var/log/apache2/access.log \
&& ln -sf /dev/stdout /var/log/apache2/other_vhosts_access.log \
&& ln -sf /dev/stderr /var/log/apache2/error.log

RUN a2dissite 000-default && a2ensite app
RUN a2enmod proxy proxy_fcgi rewrite actions status remoteip headers
