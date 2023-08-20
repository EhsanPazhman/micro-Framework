<?php
use App\Core\Routing\Route;
Route::get('/', 'HomeController@index');
Route::get('/archive', 'ArchiveController@index');
Route::add(['get', 'post'], '/a',function(){
    echo "welcome";
});
Route::get('/b',function(){
    echo "from save form";
});
Route::put('/c', ['Controller'], ['Method']);
Route::get('/d', 'Controller@Method');
