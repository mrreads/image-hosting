<?php

require_once __DIR__ . './../../vendor/autoload.php';

\Application\Core\Connection::connect();

$allFiles = \Application\Core\File::getFiles();
$imagesFiles = \Application\Core\File::returnOnlyImages($allFiles);

\Application\Core\File::uploadFileToServer($imagesFiles);