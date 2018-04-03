<?php

# return view
$app->get('/', ['PagesController', 'home']);
// login
$app->get('/login',['LoginController','showLoginForm']);
$app->post('/login',['LoginController', 'loginSubmit']);
//logout
$app->post('/logout',['LogoutController','logout']);

$app->get('/admin',['UsersController','index']);

// post
$app->get('/admin/post',['PostsController','index']);
 //chia page
$app->get('/admin/post/page',['PostsController','index']);

//create
$app->get('/admin/post/create',['PostsController','createFrom']);
$app->post('/admin/post/create',['PostsController','create']);
//detail
$app->get('/admin/post/detail',['PostsController','detail']);
//update
$app->get('/admin/post/update',['PostsController','edit']);
$app->post('/admin/post/update',['PostsController','update']);
//delete
$app->get('/admin/post/delete',['PostsController','delete']);


# return json
// $app->post('users', ['UsersController', 'store']);
// $app->get('users', ['UsersController', 'index']);

//user
$app->get('/admin/user',['UsersController','index']);
 //chia page
$app->get('/admin/user/page',['UsersController','index']);
//create
$app->get('/admin/user/create',['UsersController','show']);
$app->post('/admin/user/create',['UsersController','create']);
//detail
$app->get('/admin/user/detail',['UsersController','detail']);
//update
$app->get('/admin/user/update',['UsersController','edit']);
$app->post('/admin/user/update',['UsersController','update']);
//delete
$app->get('/admin/user/delete',['UsersController','delete']);
# return plain text
$app->get('status', function ($app) {
	return '<pre> I\'m OK </pre>';
});
