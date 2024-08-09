<?php

declare(strict_types=1);

//this file is used to load and configure the application

//load application file for the framework
require __DIR__ . '/../../vendor/autoload.php';
use Framework\App;

$app = new App();
return $app;