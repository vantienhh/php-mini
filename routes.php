<?php

# return view
$app->get('/', ['PagesController', 'home']);
// login
$app->get('/login',['LoginController','showLoginForm']);
$app->post('/login',['LoginController', 'loginSubmit']);

// post
$app->get('/post',['PostsController','index']);
//create
$app->get('/post/create',['PostsController','createFrom']);
$app->post('/post/create',['PostsController','create']);
//update
$app->get('/post/update',['PostsController','edit']);
$app->post('/post/update',['PostsController','update']);

$app->get('/post/delete',['PostsController','delete']);   //delete

$app->get('/post/detail',['PostsController','detail']);   //detail

# return json
$app->post('users', ['UsersController', 'store']);
$app->get('users', ['UsersController', 'index']);

# return plain text
$app->get('status', function ($app) {
	return '<pre> I\'m OK </pre>';
});
