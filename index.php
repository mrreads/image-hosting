<?php

require_once __DIR__ . '/vendor/autoload.php';

$db = new \Application\Core\Connection;

echo $db->query();