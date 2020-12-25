<?php

$app->get('/', App\Infrastructure\Http\Controllers\HomeController::class.':index');
$app->get('/bigquery-sample/iris', App\Infrastructure\Http\Controllers\IrisController::class.':index');