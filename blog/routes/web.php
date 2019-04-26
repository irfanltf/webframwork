<?php



Route::get('/', function () {
    $title = 'Pemrograman Web Framework';
	$konten = '';
	return view('welcome',compact('title','konten'));
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


Route::get('/barangs', 'barangsController@index');


Route::get('/barangs/show','barangsController@show');


Route::get('/halaman', function(){

	$title = 'Harri Puter';
	$konten = 'hari rabu dan kamis : adalah nama hari';
	return view('konten.halaman',compact('title','konten'));
});

Route::get('/pelanggan','pelangganController@index');

Route::resource('produk', 'produkController');

Route::get('/store', 'produkController@store');

Route::get('/update', 'produkController@update');

Route::get('/delete', 'produkController@delete');

//minggu 7
Route::get('/kategori','kategoriController@index');

Route::get('/kategori/store', 'kategoriController@store');

Route::get('/kategori/update', 'kategoriController@update');

Route::get('/kategori/delete', 'kategoriController@delete');
