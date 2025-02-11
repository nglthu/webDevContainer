# webDevContainer

## Development Environment

1. Viruality using codeSpaces

2. Partially Locally by Connecting codespace to Visual studio Code

3. Totally Locally by Downloading the repo

# Web Laravel Framework

Using Laravel PhP

```
composer create-project --prefer-dist laravel/laravel myWeb
```

# Authentication

[Using Laravel Breeze](https://laravel.com/docs/11.x/starter-kits#laravel-breeze)

```
composer require laravel/breeze --dev
```
## Install breeze

```
php artisan breeze:install
 
php artisan migrate
npm install
npm run dev
```

# Database

[Using Aiven](https://github.com/nglthu/Database/blob/main/aivenConnection.md)
```
composer require aiven/aiven-laravel

```


# APP_URL

```
APP_URL=https://animated-dollop-wr7v5464g9xc9j9-8000.app.github.dev/
#check
ASSET_URL="${APP_URL}"
```