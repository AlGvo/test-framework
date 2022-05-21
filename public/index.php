<?php

ini_set('display_errors', '1');

require_once __DIR__ . '/../vendor/autoload.php';

$config = include __DIR__ . '/../config/main.php';

$app = Aigletter\Framework\Application::getApp($config);



try {
    $app->run();
} catch (Algvo\Router\Exceptions\BadRequestException $exception) {
    echo $exception->getMessage();
} catch (\Algvo\Router\Exceptions\NotFoundException $exception) {
    echo $exception->getMessage();
} catch (\Throwable $exception) {
    echo $exception->getMessage();
}