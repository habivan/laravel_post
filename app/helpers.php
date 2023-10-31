<?php

use Illuminate\Support\Facades\Route;


if(! function_exists('test')){
    function test(){
        return app('test');
    }
}

if(! function_exists('active_link')){
    function active_link( $name, $class = 'active'){
        return Route::is($name) ? $class : '';
    }
}

if(! function_exists('alert')){
    function alert($text){
        session(['alert' => $text]);
    }
}
