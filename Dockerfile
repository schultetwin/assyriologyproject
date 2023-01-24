FROM webdevops/php-nginx:7.4-alpine
COPY ./ /app
RUN echo variables_order = EGPCS >> /opt/docker/etc/php/php.ini
ENV fpm.pool.clear_env=false
