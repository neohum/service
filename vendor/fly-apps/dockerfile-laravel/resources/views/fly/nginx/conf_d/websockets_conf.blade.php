
# See https://laravel.com/docs/9.x/octane#serving-your-application-via-nginx
map $http_upgrade $connection_upgrade {
    default upgrade;
    ''      close;
}