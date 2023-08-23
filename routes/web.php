<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/post/{id}', function (string $id) {
    //return view('post');//
    return '<h1>Post ID:'.$id.'</h1>';
});

//Optional parameter
Route::get('/post/{id}/comment/{commentid?}', function (string $id = null, string $comment=null) {
    if($id){
        return '<h1>Post ID:'.$id.'</h1><h2>Comment:'.$comment.'</h2>';
    }
    else{
        return '<h1>N ID Found</h1>';
    }
});

//Regular Expression parameter
Route::get('/blog/{id}',function (string $id) {
    if($id){
        return '<h1>Post ID:'.$id.'</h1>';
    }
    else{
        return '<h1>No ID Found</h1>';
    }
})->where('id','[a-zA-Z]+');
//})->where('id','[0-9]+');
//})->whereIn('id',['movie','song','mark']);