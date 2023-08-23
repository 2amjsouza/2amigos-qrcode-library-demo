This is a demo for [2amigos/qrcode-library](https://github.com/2amigos/qrcode-library) library.

In order to execute it, your system should follow the following requirements:

* PHP 7.3+
* Imagick
* GD

A docker image was provided meeting the requirements.

To install the dependencies:

```bash
$ composer install

# or using docker
$ docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```

To run the application:

```bash
$ php artisan serve

# or using docker
$ ./vendor/bin/sail php artisan serve
```
