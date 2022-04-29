## Prerequisites

In order to run this project you must have the following installed:

-   PHP ^8.\*
-   Composer

You should also setup a web server in order to host your local domain. For these purposes you can use Laravel Homestead or Valet.

## Installation

Сlone GitHub repository locally:

```bash
git clone
```

cd into the project folder and install Composer dependencies by running:

```sh
$ composer install
```

Install npm dependencies:

```sh
$ npm install
```

Copy the contents of `.env.example` file to new `.env` file:

```sh
$ cp .env.example .env
```

Create an application encryption key:

```sh
$ php artisan key:generate
```

Create an empty database and fill in the `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME` and `DB_PASSWORD` fields in the `.env` file to match the credentials of your newly created database.

Run the migrations:

```sh
$ php artisan migrate
```
