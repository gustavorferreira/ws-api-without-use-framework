<?php

const ROOT = "http://localhost/grf-bsb-ws-api-php-composer-datalayer-crud-router";

const DATA_LAYER_CONFIG = [
    "driver" => "pgsql",
    "host" => "localhost",
    "port" => "5432",
    "dbname" => "postgres",
    "username" => "postgres",
    "passwd" => "1040ez",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
];

function url(string $uri = null): string
{
    if ($uri) {
        return ROOT . "/{$uri}";
    }

    return ROOT;
}