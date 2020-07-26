<?php

require_once __DIR__ . './../../vendor/autoload.php';

\Application\Core\Connection::connect();

$images = \Application\Core\File::returnOnlyImages(\Application\Core\File::getFiles());

echo "<pre>";
print_r($images);
echo "</pre>";