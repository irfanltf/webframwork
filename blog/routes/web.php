<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return '<center><h1>hello world</h1>
  
    ini adalah cara menampilkan hello world menggunakan framwork laravel di minggu pertama hehehehhehehe
    </center>
    ';
});

Route::get('/blog', 'BlogController@index ');
