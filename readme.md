# Cyberfusion Knowledgebase

## Install / update production
```bash
git clone  git@vcs.cyberfusion.nl:developers/cfkb-laravel.git /var/www/vhosts/cyberfusionkb/kb.cyberfusion.nl/htdocs
cd /var/www/vhosts/cyberfusionkb/kb.cyberfusion.nl/htdocs
composer install
```

### Modify .env
```dotenv
DB_HOST=<database-host>
DB_DATABASE=<database-name>
DB_USERNAME=<database-user>
DB_PASSWORD=<db-user-pass>
```

### Finish installation
```bash
php artisan migrate
```

## Install dev
```bash
git clone  git@vcs.cyberfusion.nl:developers/cfkb-laravel.git
cd cfkb-laravel/
composer install
```

### Modify .env
```dotenv
DB_HOST=<database-host>
DB_DATABASE=<database-name>
DB_USERNAME=<database-user>
DB_PASSWORD=<db-user-pass>
```

### Finish installation
```bash
php artisan migrate
```

# Setup for load balancing 
## Environment
```dotenv
SESSION_DRIVER=# Set this to 'database' if you are loadbalancing the knowledgebase else use the 'file' driver
...
```

## Application
```bash
php artisan session:table
php artisan migrate
```
