<?php

require_once __DIR__ . '/vendor/autoload.php';

\Application\Core\Connection::connect();

new \Application\Core\Route;

