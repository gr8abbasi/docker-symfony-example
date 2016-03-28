#Dockerized Symfony Project

A symfony project utilizing Docker based on PHP-FPM and nginx.

## Running

You can run the Docker environment using [docker-compose](https://docs.docker.com/compose/):

    $ docker-compose up -d

You can run one-shot command inside the `symfony` service container:

    $ docker-compose run symfony composer install
    $ docker-compose run symfony php app/console cache:clear

## Example Application

The example app implements a simple weather application using Redis.

During the startup of the `fpm` service some fixture data will be generated for
you automatically. If you want to add your own entries you can use the console
command shipped with the example application:

    $ docker-compose run symfony php app/console giantswarm:temperature:add cologne 30
