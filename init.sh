#!/bin/bash
docker compose up
docker exec -it laravel-laravel-1 /bin/bash


composer --version
composer global require laravel/installer
export PATH="$HOME/.composer/vendor/bin:$PATH"
export PATH="$HOME/.config/composer/vendor/bin:$PATH"
source ~/.bashrc
laravel --version
echo ya

#docker compose down
