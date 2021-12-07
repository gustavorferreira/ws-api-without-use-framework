<?php

const ROOT = "http://localhost/ws-api-without-use-framework";

const DATA_LAYER_CONFIG = [
    "driver" => "pgsql",
    "host" => "localhost",
    "port" => "5432",
    "dbname" => "db_grupoglimg_production",
    "username" => "grf",
    "passwd" => "1040ez",
    "options" => [
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