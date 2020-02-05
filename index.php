<?php

if (!is_dir(__DIR__ . "/vendor/autoload.php")) {
    print("\"vendor\" directory does not exist. Did you forget to run composer install?");
    die();
}

$loader = require __DIR__ . "/vendor/autoload.php";

try {
    require __DIR__ . "/src/main.php";
} catch (Exception $e) {
    printf("<p>Exception with code %s in file %s :</p>", $e->getCode(), $e->getFile());
    printf("<p>%s</p>", $e->getMessage());
    dump($e->getTrace());
}