# laravel-change-calculator
A currency change calculator written with Laravel 8 and Vue.js

## Install and setup database
Install MySQL via the installer or homebrew

```
brew install mysql
```

Ensure the MySQL server is running
```
mysql.server start
```

Open the MySQL prompt (password should be blank or "password" by default)
```
mysql -u root -p
```

Set a password for your desired user
```
ALTER USER 'root'@'localhost' IDENTIFIED BY 'apasswordyouwillremember';
```

Create a database to use for the project and exit
```
create database laravel_change_calculator;
exit;
```

## Install
Clone this repo to your local machine
```
git clone https://github.com/Sensational-Code/laravel-change-calculator
```

Navigate into the project directory
```
cd laravel-change-calculator
```
Install dependencies
```
composer install
npm install
```
Copy the `.env.example` and rename it `.env` within the project directory

Fill in the `DB_` fields within the `.env` file to point to the database you wish to use

Generate an encryption key
```
php artisan key:generate
```

Migrate and seed the database
```
php artisan migrate:fresh --seed
```

Run the webpack build
```
npm run dev
```

## Usage
Ensure you are in the project directory and serve the Laravel project
```
php artisan serve --port=8000
```

Then visit http://localhost:8000 in your web browser of choice

