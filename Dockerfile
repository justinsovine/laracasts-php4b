# syntax=docker/dockerfile:1.4

FROM --platform=$BUILDPLATFORM php:8.0.9-apache as builder
# Enable necessary PHP extensions
RUN docker-php-ext-install pdo pdo_mysql
# Enable Apache Rewrite
RUN a2enmod rewrite

# Copy the custom Apache configuration file into the sites-available directory,
# allowing .htaccess files to override settings in /var/www/html
COPY 000-default.conf /etc/apache2/sites-available/
#RUN ln -s /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-enabled/000-default.conf

#CMD ["apache2-foreground"]

FROM builder as dev-envs

# Update the package list and install Git without any recommended additional packages
RUN <<EOF
apt-get update
apt-get install -y --no-install-recommends git
EOF

# Create a new user called 'vscode' with bash as the default shell
# Add a new group called 'docker' and add 'vscode' user to this group
RUN <<EOF
useradd -s /bin/bash -m vscode
groupadd docker
usermod -aG docker vscode
EOF

# install Docker tools (cli, buildx, compose)
COPY --from=gloursdocker/docker / /

CMD ["apache2-foreground"]

