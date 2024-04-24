FROM adminer

USER root
COPY login-password-less.php /var/www/html/plugins-enabled/login-password-less.php
COPY auto-set-db.php /var/www/html/plugins-enabled/auto-set-db.php
USER adminer