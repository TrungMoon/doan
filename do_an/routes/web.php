<?php
Route::get("", "Controller@layer");

Route::get("view_login", "Controller@view_login")
->name("view_login");
Route::post("process_login", "Controller@process_login")
->name("process_login");


Route::group(['prefix' => 'khach_hang'],function(){
	Route::get('', 'KhachHangController@view_all')
	->name('khach_hang.view_all');
	Route::get('view_insert', 'KhachHangController@view_insert')
	->name('khach_hang.view_insert');
	Route::post('process_insert', 'KhachHangController@process_insert')
	->name('khach_hang.process_insert');
	});

Route::group(["prefix" => "admin", "middleware" => "CheckAdmin"],function(){
	Route::get("welcome", "Controller@welcome")
	->name("welcome");
	Route::get("logout", "Controller@logout")
	->name("logout");
	Route::group(["prefix" => "khach_hang"],function(){
		$group = "khach_hang";
		$controller = "KhachHangController";
		Route::get("", "$controller@view_all")
		->name("$group.view_all");
		Route::get("view_insert", "$controller@view_insert")
		->name("$group.view_insert");
		Route::post("process_insert", "$controller@process_insert")
		->name("$group.process_insert");

		Route::get("view_update/{id}", "$controller@view_update")
		->name("$group.view_update");
		Route::post("process_update/{id}", "$controller@process_update")
		->name("$group.process_update");

		Route::get("delete/{id}", "$controller@delete")
		->name("$group.delete");
	});
});