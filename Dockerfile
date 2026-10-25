# vulnerable on purpose: php 8.3.10 is affected by PHP2Shell
# (CVE-2026-109618, CVE-2026-109619). fixed in php:8.3.36-fpm-alpine.
FROM docker.io/library/php:8.3.10-fpm-alpine
COPY src/ /var/www/html/
EXPOSE 8080
CMD ["php", "-S", "0.0.0.0:8080", "-t", "/var/www/html"]
