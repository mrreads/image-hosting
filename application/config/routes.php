<?php

use Application\Core\Route;
use Application\Core\File;

Route::home('home');
Route::error('404');

(File::imageExist(Route::getURL())) ? Route::get(Route::getURL(), 'image') : null;

Route::get('gallery', 'gallery');

