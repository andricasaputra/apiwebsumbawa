## Step 1

```sh
clone this repo git@github.com:andricasaputra/apiwebsumbawa.git
```
## Step 2

```sh
composer install or composer update
```
## Step 3

```sh
php artisan key:generate
```
## Step 4 Setup your Database

```sh
--DB_DATABASE=test
--DB_USERNAME=xxx
--DB_PASSWORD=xxx
```

## Step 5 run

```sh
php artisan migrate --seed
```
## Step 6 

```sh
php artisan serve
```
## NOTE FOR INITIAL COMMIT :  :

git init
git add .
git commit -m "first commit"
git branch -M main
git remote add origin git@github.com:andricasaputra/apiwebsumbawa.git
git push -u origin main