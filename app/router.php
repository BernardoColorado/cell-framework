<?php

$app->get('/', App\Infrastructure\Framework\Controllers\HomeController::class.':index');
$app->get('/bigquery-sample/iris', App\Infrastructure\Framework\Controllers\IrisController::class.':index');