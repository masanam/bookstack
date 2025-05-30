# Development & Testing

All development on BookStack is currently done on the `development` branch. 
When it's time for a release the `development` branch is merged into release with built & minified CSS & JS then tagged at its version. Here are the current development requirements:

* [Node.js](https://nodejs.org/en/) v20.0+

## Building CSS & JavaScript Assets

This project uses SASS for CSS development and this is built, along with the JavaScript, using a range of npm scripts. The below npm commands can be used to install the dependencies & run the build tasks:

``` bash
# Install NPM Dependencies
npm install

# Build assets for development
npm run build

# Build and minify assets for production
npm run production

# Build for dev (With sourcemaps) and watch for changes
npm run dev
```

Further details about the BookStack JavaScript codebase can be found in the [javascript-code.md document](javascript-code.md).

## Automated App Testing 

BookStack has a large suite of PHP tests to cover application functionality. We try to ensure that all additions and changes to the platform are covered with testing.

For details about setting-up, running and writing tests please see the [php-testing.md document](php-testing.md).

## Code Standards

We use tools to manage code standards and formatting within the project. If submitting a PR, formatting as per our project standards would help for clarity but don't worry too much about using/understanding these tools as we can always address issues at a later stage when they're picked up by our automated tools.

### PHP

PHP code standards are managed by [using PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer).
Static analysis is in place using [PHPStan](https://phpstan.org/) & [Larastan](https://github.com/nunomaduro/larastan).
The below commands can be used to utilise these tools:

```bash
# Run code linting using PHP_CodeSniffer
composer lint

# As above, but show rule names in output
composer lint -- -s

# Auto-fix formatting & lint issues via PHP_CodeSniffer phpcbf
composer format

# Run static analysis via larastan/phpstan
composer check-static
```

### JavaScript

JavaScript code standards use managed using [ESLint](https://eslint.org/).
The ESLint rule configuration is managed within the `package.json` file.
The below commands can be used to lint and format:

```bash
# Run code linting using ESLint
npm run lint

# Fix code where possible using ESLint
npm run fix
```

## Development using Docker

This repository ships with a Docker Compose configuration intended for development purposes. It'll build a PHP image with all needed extensions installed and start up a MySQL server and a Node image watching the UI assets.

To get started, make sure you meet the following requirements:

- Docker and Docker Compose are installed
- Your user is part of the `docker` group

If all the conditions are met, you can proceed with the following steps:

1. **Copy `.env.example` to `.env`**, change `APP_KEY` to a random 32 char string and set `APP_ENV` to `local`.
2. Make sure **port 8080 is unused** *or else* change `DEV_PORT` to a free port on your host.
3. **Run `chgrp -R docker storage`**. The development container will chown the `storage`, `public/uploads` and `bootstrap/cache` directories to the `www-data` user inside the container so BookStack can write to it. You need to change the group to your host's `docker` group here to not lose access to the `storage` directory.
4. **Run `docker-compose up`** and wait until the image is built and all database migrations have been done.
5. You can now login with `admin@admin.com` and `password` as password on `localhost:8080` (or another port if specified).

If needed, You'll be able to run any artisan commands via docker-compose like so:

```bash
docker-compose run app php artisan list
```

The docker-compose setup runs an instance of [MailHog](https://github.com/mailhog/MailHog) and sets environment variables to redirect any BookStack-sent emails to MailHog. You can view this mail via the MailHog web interface on `localhost:8025`. You can change the port MailHog is accessible on by setting a `DEV_MAIL_PORT` environment variable.

### Running tests

After starting the general development Docker, migrate & seed the testing database:

 ```bash
# This only needs to be done once
docker-compose run app php artisan migrate --database=mysql_testing
docker-compose run app php artisan db:seed --class=DummyContentSeeder --database=mysql_testing
```

Once the database has been migrated & seeded, you can run the tests like so:

 ```bash
docker-compose run app php vendor/bin/phpunit
```

### Debugging

The docker-compose setup ships with Xdebug, which you can listen to on port 9090.
NB : For some editors like Visual Studio Code, you might need to map your workspace folder to the /app folder within the docker container for this to work.
