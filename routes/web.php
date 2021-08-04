<?php

use Illuminate\Support\Facades\Route;

$baseController =  "App\Http\Controllers";
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', $baseController . "\postController@listpost")->name("index");
// Route::get('/', $baseController . "\postController@listPengumuman")->name("index");


Route::get('/profile', function () {
    return view('user.views.profile');
})->name("profile");

Route::get('/signin', function () {
    return view('user.views.login10');
})->name("signin");

Route::get('/register',$baseController . "\loginControllers@registerView" )->name("register");
Route::post('/register',$baseController . "\loginControllers@regist" )->name("register");

Route::get('/about', function () {
    return view('user.views.about');
})->name("about");

Route::get('/friends', function () {
    return view('user.views.friends');
})->name("friends");

Route::get('/pengumuman', function () {
    return view('user.views.pengumuman');
})->name("pengumuman");

Route::get('/editprofile', function () {
    return view('user.views.editprofile');
})->name("editprofile");

Route::get('/laporan', function () {
    return view('user.views.reportview');
})->name("laporan");


Route::get('/organisasi/{id}', $baseController . "\orgControllers@detailOrg");
Route::get('/organisasi/{id}', $baseController . "\orgControllers@detailOrg");


Route::get('/organisasi', $baseController . "\orgControllers@listorg")->name("listorg");

Route::get(
    '/organisasibaru',
    $baseController . "\orgControllers@viewCreate"
)->name("grupbaru");

Route::post('/organisasi/create', $baseController . "\orgControllers@createOrg")->name("createOrg");

// =========================================
Route::get('/adm', function () {
    return view('admin.views.admindex');
})->name("admindex");

Route::get('/admPost', $baseController . "\apostController@allpost")->name("admPost");
Route::get('/admUser', $baseController . "\auserController@alluser")->name("admUser");
Route::get('/admOrg', $baseController . "\aorgController@allorg")->name("admOrg");
Route::get('/admReport', $baseController . "\areportController@allreport")->name("admReport");

// Route::get('/admUser', function () {
//     return view('admin.views.admUser');
// })->name("admUser");
// Route::get('/admPost', function () {
//     return view('admin.views.admPost');
// })->name("admPost");
// Route::get('/admOrg', function () {
//     return view('admin.views.admOrg');
// })->name("admOrg");
// Route::get('/report-user', function () {
//     return view('admin.views.report-user');
// })->name("report-user");
