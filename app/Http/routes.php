<?php
Route::get('/', 'BasicController@index');
Route::get('home', 'BasicController@index');
Route::get('about-us', 'BasicController@about');
Route::get('service', 'BasicController@service');
Route::get('portfolio', 'BasicController@portfolio');
Route::get('blog', 'BasicController@blog');
Route::get('contact', 'BasicController@contact');

Route::get('register', 'BasicController@register'); //โหลดหน้า
Route::post('register', 'BasicController@register_submit'); //กดปุ่ม sumit

Route::get('customers-list', 'BasicController@customers_list');
Route::get('products-list', 'BasicController@products_list');


