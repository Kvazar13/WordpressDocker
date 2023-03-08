# Wordpress Docker Scaffolding
Very basic Wordpress and Docker base which will help to easily start with our project without losing time installing dependencies or preparing the enviorenment.

## Installation
After cloning the project let's proceed with the installation:
##### SSL in local
To work with SSL certificate in local enviorenment it's necessary to generate our certificates using [mkcert](https://github.com/FiloSottile/mkcert) library. If you don't need it skip this step and remove last server configuration from `default.conf`.
It's possible to install mkcert in several ways, check their documentation to find out the propper way for you. Using brew is possible to do it fallowing next steps:
```sh
brew install mkcert
brew install nss # if you use Firefox
```
Then let's create our certificates:
```sh
cd nginx/certs
mkcert -install
mkcert wordpress-docker wordpress-docker.test localhost 127.0.0.1 ::1
```
##### Build containers
The good part of using Docker is that after the initial setup we don't have to lose more time setting up everything to make it work. Let's build and start our containers:
```sh
#from root folder:
docker-compose up -d --build
```
Remember that for stop our containers we can use:
```sh
docker-compose down
```

## Development
In this Scaffolding you also dispose of [wp-cli](https://wp-cli.org/) command-line interface which will allow us to execute wordpress commands directly from our terminal.
To do it you only have to use `docker-compose run --rm wp` before your command as in the examples below:
```sh
docker-compose run --rm wp plugin activate wordpress-seo
#or
docker-compose run --rm wp user list
```