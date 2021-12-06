# grf-bsb-ws-api-php-composer-datalayer-crud-router

## API sem uso de framwork

Pré requisitos para executar o projeto:

- Servidor Web
- PHP >= 7.2.0, com as seguintes extensões:
    - BCMath PHP
    - Ctype PHP
    - JSON PHP
    - Mbstring PHP
    - OpenSSL PHP
    - PDO PHP
    - PGSQL PHP
    - Tokenizer PHP
    - XML PHP
- Composer
- Postgres >= 12

## Instalar projeto via composer

- composer install

## Criar tabela

-- public.users definition
-- Drop table
-- DROP TABLE public.users;

CREATE TABLE public.users (
id serial4 NOT NULL,
first_name varchar NULL,
last_name varchar NULL
);

## Configurara banco de dados

/source/App/Config/core_cfg.php

## Executar projeto via terminal

- http://localhost/ws-api-without-use-framework

## Verificar as rotas da API

- index.php