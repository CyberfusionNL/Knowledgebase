# Cyberfusion Knowledgebase

This knowledgebase is used, built and maintained by Cyberfusion.

We provide you with a pretty basic bootstrap template, you can deploy this application within seconds if you follow the steps below.

Features include: 

 - Article managed thru the command line;
 - Twofactor authentication;
 - Article voting (analytics);
 - Theming;
 - Searching;
 - CKEditor;
 - Softdeleting of articles;
 - SEO friendly slugs

## Contributing
Please feel free to contribute to this project, it will help us and others.

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
APP_THEME=<theme-or-default>
```

### Finish installation
```bash
php artisan migrate
```
