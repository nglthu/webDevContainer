# webDevContainer



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

## Setup Database

### Aiven in Laravel Connection

```
DB_HOST=mysql-14737a33-nglthu-4e05.k.aivencloud.com
DB_PORT=17237
DB_DATABASE=defaultdb
DB_USERNAME=avnadmin
DB_PASSWORD=AVNS_2ZlIVz4ACEb86Eu0Exr
DB_URI=mysql://avnadmin:AVNS_2ZlIVz4ACEb86Eu0Exr@mysql-14737a33-nglthu-4e05.k.aivencloud.com:17237/defaultdb?ssl-mode=REQUIRED
AIVEN_API_TOKEN=lM0VEVm35KOL2pcD/L5MOcWMuGiEArWn1Tv0miKgp/YKArLIl1cvgwKAom8WoAqHBHuB2zXdlvi0M7pJ5uLdK9x+oyTUkuw9LIc0b4BUIsqjOrOouKaUFIOAeMndk0vqjARS4xDhPjBpOrNF8AO0BytS28tsEc6kVML1Plros4ShoLoOp7LxRXc4GXBgt5fWVfWVEZBXdmX+y5KB1kos+0ZvxfyqcmtRWQ3Um8NRm+ae566d1E6jYFeeFdtSePE34w0ZKEpdCpA4XS9sT18Ur7/LtAGzX1MBxkh1BCVLhrbZsDzeqnIRnICIq4ZlveerhcG5Mg9YfXoDDVaBxSTHN8yBiSG1WgK1H8qHlRWqfA==
AIVEN_DEFAULT_PROJECT=nglthu-4e05
DATABASE_URL=mysql://avnadmin:AVNS_2ZlIVz4ACEb86Eu0Exr@mysql-14737a33-nglthu-4e05.k.aivencloud.com:17237/defaultdb
sslmode=verify-ca
sslrootcert=webApp/config/ca.pem

```

### Aiven for Laravel Project

Step 1: Install aiven-laravel by composer
```

composer require aiven/aiven-laravel

```

You will need an Aiven account - sign up for a free trial if you don't have one already. Go ahead and create the database(s) you'll be using in your project through the web interface, or investigate the Aiven CLI.

Get an auth token for your Aiven account, and set it as AIVEN_API_TOKEN in your environment.

It's recommended to also set AIVEN_DEFAULT_PROJECT as the project in your Aiven account that you'll be using services from (but you can also supply --project [projectname] for all the commands instead if you like)

```
AIVEN_API_TOKEN=lM0VEVm35KOL2pcD/L5MOcWMuGiEArWn1Tv0miKgp/YKArLIl1cvgwKAom8WoAqHBHuB2zXdlvi0M7pJ5uLdK9x+oyTUkuw9LIc0b4BUIsqjOrOouKaUFIOAeMndk0vqjARS4xDhPjBpOrNF8AO0BytS28tsEc6kVML1Plros4ShoLoOp7LxRXc4GXBgt5fWVfWVEZBXdmX+y5KB1kos+0ZvxfyqcmtRWQ3Um8NRm+ae566d1E6jYFeeFdtSePE34w0ZKEpdCpA4XS9sT18Ur7/LtAGzX1MBxkh1BCVLhrbZsDzeqnIRnICIq4ZlveerhcG5Mg9YfXoDDVaBxSTHN8yBiSG1WgK1H8qHlRWqfA==

AIVEN_DEFAULT_PROJECT=nglthu-4e05

```

Step 2: Get a list of the Aiven services (databases) available:

```
php artisan aiven:list
```

Set an Aiven API token as AIVEN_API_TOKEN in the environment

Step 3: 
Get the environment variables to export or paste into .env for a particular service:
```

php artisan aiven:getconfig --service mysql-14737a33
```

Step 4: Check the status of the service:
```

php artisan aiven:state --service  mysql-14737a33
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
## Development Environment

Only use on port 9999 for the public/build/assets
```
bookManagement/public/build/assets/app-Bf4POITK.js
bookManagement/public/build/assets/app-Dz0AWJyX.css

```
# Reference

1. [Route to deployed Server in Codespaces](https://github.com/JonoHall/Laravel-Vite-Codespaces)
2. [Route to Server of  Codespace](https://laracasts.com/discuss/channels/devops/laravel-10-vite-and-codespaces)
3. [SQL Database Aiven-Laravel](https://github.com/Aiven-Labs/aiven-laravel#getting-started)
