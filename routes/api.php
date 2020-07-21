<?php

Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function () {
	Route::get('me', 'MeController');
	Route::post('signin', 'SignInController');
});