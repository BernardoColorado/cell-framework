<?php

$app->get('/', App\User\Infrastructure\Slim\Controllers\HomeController::class.':index');