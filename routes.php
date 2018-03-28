<?php

# return view
$app->get('/', ['PagesController', 'home']);
// login
$app->get('/login',['LoginController','showLoginForm']);
$app->post('/login',['LoginController', 'loginSubmit']);

$app->get('/post',['PostsController','index']);

# return json
$app->post('users', ['UsersController', 'store']);
$app->get('users', ['UsersController', 'index']);

# return plain text
$app->get('status', function ($app) {
	return '<pre> I\'m OK </pre>';
});
