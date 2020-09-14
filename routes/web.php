<?php

// Route::get('/', function () {
//     return redirect('admin');
// });


// Route::view('/', 'layouts.frontend_app')->name('home.page');
Route::get('/', function () {
    return redirect('admin/loginme');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// for storage linked in public folder=======
Route::get('/sym', function () {
    return view('symlinkexample');
});
// cache clear
Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "Cleared!";
});
