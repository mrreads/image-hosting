<?php

use Application\Core\Route;
use Application\Core\Connection;

Route::home('home');
Route::error('404');

(Connection::query("SELECT * from `images` WHERE images.image_path LIKE '". Route::getURL()[0] ."%';")) ? Route::get(Route::getURL()[0], 'image') : null;


Route::get('gallery', 'gallery');

