<?php
require 'bootstrap.php';

use lithium\net\http\Router;
use lithium\action\Dispatcher;
use lithium\action\Response;

Router::connect('/', array(), function($request) {
	$body = '<h1>Welcome to Sinatrium</h1>';
	return new Response(compact('body'));
});

Router::connect('/hello', array(), function($request) {
	$body = '<h1>Hello World!</h1>';
	return new Response(compact('body'));
});

echo Dispatcher::run(new lithium\action\Request());