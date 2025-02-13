# webDevContainer

## Development Environment

1. Viruality using CodeSpaces

[Introduction to dev containers](https://docs.github.com/en/codespaces/setting-up-your-project-for-codespaces/adding-a-dev-container-configuration/introduction-to-dev-containers)

4. Partially Locally by Connecting codespace to Visual studio Code

5. Totally Locally by Downloading the repo

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

# Codespace: SETUP: ROUTE forwarding to DEPLOYED SERVER [not to default local host] 

## Setup .Env

```
APP_URL=https://animated-dollop-wr7v5464g9xc9j9-8002.app.github.dev/
CODESPACE_NAME=animated-dollop-wr7v5464g9xc9j9
```
## Change config in the vite.config.js to Correct SERVER

Change the Vite config so that when you open the Laravel website your web client will find assets at the correct Vite instanace host/port.

```
vite.config.js:


    plugins: [
      ...
    ],
    server: {
        hmr: {
            host: process.env.CODESPACE_NAME ? process.env.CODESPACE_NAME + '-8002.app.github.dev' : null,
            clientPort: process.env.CODESPACE_NAME ? 443 : null,
            protocol: process.env.CODESPACE_NAME ? 'wss' : null
        },
    }
```    
### Change Config for trustProxies in bootstrap/app.php

```
 ->withMiddleware(function (Middleware $middleware) {
    
        if (env('APP_ENV') == 'production') {
            $middleware->trustProxies(at: '*');
        }
})
```

# Reference

1. [Route to deployed Server in Codespaces](https://github.com/JonoHall/Laravel-Vite-Codespaces
)
2. [Route to Server of  Codespace](https://laracasts.com/discuss/channels/devops/laravel-10-vite-and-codespaces)
