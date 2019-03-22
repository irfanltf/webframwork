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



// Route::get('/index', function () {
//     echo "Uji Coba route dengan methode GET";
// });

Route::get('/show/{id?}', function ($id=1) {
	echo "Nilai Parameter yang barusan dimasukan melalui URL adalah = ".$id;
});


Route::get('/edit/{nama}', function ($nama){
	echo "Nilai Parameter yang barusan dimasukan melalui URL adalah = ".$nama;
})->where('nama','[A-Za-z]+');


Route::get('/index', function () {
echo "<a href='".route('create')."'>Akses Route dengan nama </a>";
});

Route::get('/create', function () {
echo "Route diakses menggunakan nama";
})->name('create');


Route::get('/produk', 'barangsController@index');