<?php

$loader = require __DIR__ . "/vendor/autoload.php";

try {
    require __DIR__ . "/src/main.php";
} catch (Exception $e) {
    printf("<p>Exception with code %s in file %s :</p>", $e->getCode(), $e->getFile());
    printf("<p>%s</p>", $e->getMessage());
    dump($e->getTrace());
}