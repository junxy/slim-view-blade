<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\Slim(
	[
		'view' => new \Slim\Views\Blade(),
		'templates.path' => __DIR__ . '/../templates',
	]);

$view = $app->view();
$view->parserOptions = [
	'debug' => true,
	'cache' => __DIR__ . '/../cache',
];

$app->get('/hello/:name', function ($name) use ($app) {
	$app->render('master', [
		'variable' => "Hello, $name",
	]);
});

$app->run();
