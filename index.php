<?php

use App\Core\Routing\Route;
include "bootstrap/init.php";
Route::get('/null');
Route::add(['get', 'post'], '/',function(){
    echo "welcome";
});
Route::post('/saveForm',function(){
    echo "from save form";
});
Route::put('/puteUri', ['Controller'], ['Method']);
Route::get('/puteUri', 'Controller@Method');
var_dump(Route::routes());
