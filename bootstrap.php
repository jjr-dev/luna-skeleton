<?php
    require __DIR__ . '/vendor/autoload.php';

    use Luna\Utils\Environment;
    use Luna\Db\Database;

    Environment::set("__DIR__", __DIR__);
    Environment::load(__DIR__);
    
    date_default_timezone_set(Environment::get("DEFAULT_TIMEZONE"));

    Database::boot();