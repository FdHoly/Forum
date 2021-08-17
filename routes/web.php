<?php

use App\Http\Controllers\aorgController;
use App\Http\Controllers\apostController;
use App\Http\Controllers\areportController;
use App\Http\Controllers\auserController;
use App\Http\Controllers\loginControllers;
use App\Http\Controllers\orgControllers;
use App\Http\Controllers\postController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\UserController;
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

// Route::get('/{id}', [postController::class, "reply"])->name("index");
// Route::get('/profile', [UserController::class, "listdata"])->name("profile");

// Route::get('/profile', function () {
//     return view('user.views.profile');
// })->name("profile");

// Route::get('/signin', function () {
//     return view('user.views.login10');
// })->name("signin");

Route::middleware('auth')->group(function () {

    Route::get('/', [postController::class, "listpost"])->name("index");

    Route::get('/profile', [UserController::class, "listdata"])->name("profile");
    Route::get('/profile/{id}', [UserController::class, "detailprofile"])->name("profileID");

    Route::get('/about', function () {
        return view('user.views.about');
    })->name("about");
    Route::get('/organisasiku', [profileController::class, "MyOrg"])->name("organisasiku");

    // Route::get('/organisasiku', function () {
    //     return view('user.views.organisasiku');
    // })->name("organisasiku");

    Route::get('/pengumuman', function () {
        return view('user.views.pengumuman');
    })->name("pengumuman");

    Route::get('/organisasi/kbmti', function () {
        return view('user.views.proforganisasi');
    });
    Route::get('/editprofile', function () {
        return view('user.views.editprofile');
    })->name("editprofile");

    Route::get('/laporan', function () {
        return view('user.views.reportview');
    })->name("laporan");

    Route::get('/organisasi/{id}', [orgControllers::class, "detailOrg"])->name("listorg");

    Route::get('/organisasi', [orgControllers::class, "listorg"])->name("listorg");

    // Route::post('/replySend', $baseController . "\postController@replyPost")->name("replyPost")->middleware('auth');
    Route::post('/replySend', [postController::class, "replyPost"])->name("replyPost");

    Route::get('organisasibaru', [orgControllers::class, "viewCreate"])->name("grupbaru");

    Route::post('organisasi/create', [orgControllers::class, "createOrg"])->name("createOrg");
});




// =========================================
Route::get('/adm', function () {
    return view('admin.views.admindex');
})->name("admindex");

Route::get('admPost', [apostController::class, "allpost"])->name("admPost");
Route::get('admUser', [auserController::class, "alluser"])->name("admUser");
Route::get('admOrg', [aorgController::class, "allorg"])->name("admOrg");
Route::get('admReport', [areportController::class, "allreport"])->name("admReport");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
