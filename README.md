## Coding Exercise

## Installation

- Clone this repository on your local computer
- configure .env as needed
- Run the `docker compose up -d`.

```shell
git clone https://github.com/diego2337/coding-exercise.git
cd coding-exercise/
cp sample.env .env
// modify sample.env as needed
docker compose up -d
// visit localhost
```

Your application now ready!! You can access it via `http://localhost`.

## Configuration and Usage

### General Information

This Docker Stack is build for local development and not for production usage.

### Configuration

This package comes with default configuration options. You can modify them by creating `.env` file in your root directory.
To make it easy, just copy the content from `sample.env` file and update the environment variable values as per your need.

### Configuration Variables

There are following configuration variables available and you can customize them by overwritting in your own `.env` file.

#### Connect via SSH

You can connect to web server using `docker compose exec` command to perform various operation on it. Use below command to login to container via ssh.

```shell
docker compose exec webserver bash
```

## PHP

The installed version of php depends on your `.env`file.

#### Extensions

By default following extensions are installed.
May differ for PHP Versions <7.x.x

- mysqli
- pdo_sqlite
- pdo_mysql
- mbstring
- zip
- intl
- mcrypt
- curl
- json
- iconv
- xml
- xmlrpc
- gd

> If you want to install more extension, just update `./bin/webserver/Dockerfile`. You can also generate a PR and we will merge if it seems good for general purpose.
> You have to rebuild the docker image by running `docker compose build` and restart the docker containers.