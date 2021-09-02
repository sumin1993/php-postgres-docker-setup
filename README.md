# PHP + postgres + Docker

## Description
Start developing a fresh php application with `docker` using `docker-compose`.

The images used in this repo is `php:5.4` and `postgres:12.5`.
The goal is to make setting up the development as simple as possible.

## 1. Setup development environment
<!-- /TOC -->
### Prerequisites
In order to use this compose file (docker-compose.yml) you must have:

1. [docker](https://docs.docker.com/engine/installation/)
1. [docker-compose](https://docs.docker.com/compose/install/)

## 2. Start Up
* Go to Project Directory
```
cd [proj-path]
```

* Up docker-compose
```
docker-compose build

docker-compose up -d
```

* access url 
```
1. for web
http://localhost:8110/

2. for postgres adminer
http://localhost:4444/
username: user
password: user123
db_name: testdb

3. for db connection
http://localhost:8110/connection.php


```