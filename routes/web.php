<?php
use App\Core\Routing\Route;
use App\Middlewares\BlockFirefox;
use App\Middlewares\BlockChrome;
use App\Middlewares\BlockIE;

Route::get('/', 'HomeController@index');
Route::get('/todo/list', 'TodoController@list',[BlockChrome::class, BlockFirefox::class,BlockIE::class,]);
Route::get('/todo/add', 'TodoController@add'); 
Route::get('/archive', 'ArchiveController@index');
Route::get('/archive/articles', 'ArchiveController@articles');
Route::get('/archive/products', 'ArchiveController@products');
// Route::get('/archive', 'ArchiveController@index');
Route::add(['get', 'post'], '/a',function(){
    echo "welcome";
});
Route::get('/b',function(){
    echo "from save form";
});
Route::put('/c', ['Controller'], ['Method']);
Route::get('/d', 'Controller@Method');