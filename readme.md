# Cyberfusion Knowledgebase [![Build Status](https://travis-ci.org/namelivia/Knowledgebase.svg?branch=master)](https://travis-ci.org/namelivia/Knowledgebase) [![codecov](https://codecov.io/gh/namelivia/Knowledgebase/branch/master/graph/badge.svg)](https://codecov.io/gh/namelivia/Knowledgebase)

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
git clone git@github.com:CyberfusionNL/Knowledgebase.git /path/to/docroot
cd /path/to/docroot
composer install --no-dev
```

### Modify .env
```dotenv
APP_NAME= # optional
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
git clone git@github.com:CyberfusionNL/Knowledgebase.git
cd Knowledgebase/
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
