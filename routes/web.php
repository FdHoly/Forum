<?php

use App\Http\Controllers\aorgController;
use App\Http\Controllers\apostController;
use App\Http\Controllers\areportController;
use App\Http\Controllers\auserController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\loginControllers;
use App\Http\Controllers\orgControllers;
use App\Http\Controllers\PengumumanController;
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
// Route::get('/profile', [UserController::class, "listdata"])->name("profile");

Route::middleware('auth')->group(function () {

    Route::get('/', [postController::class, "listpost"])->name("index");
    Route::post('/', [postController::class, "createPost"])->name("createpost");

    // Route::get('/filter', [postController::class, "listpost"])->name("filterHome");

    Route::put('utas/{utas}', [postController::class, 'editPost'])->name('utasUpdate');


    Route::post('/report', [postController::class, 'reportPost'])->name('reportPost');
    Route::delete('/delete/{id}', [postController::class, 'deletePost'])->name('deletePost');
    Route::delete('/deleteOrganisasi/{id}', [orgControllers::class, 'deleteOrg'])->name('deleteOrg');
    Route::delete('/leave/{id}', [orgControllers::class, 'leaveOrg'])->name('leaveOrg');

    Route::get('/pengumuman', [PengumumanController::class, "pengumumanIndex"])->name("pengumuman");
    Route::post('/pengumuman', [PengumumanController::class, "store"])->name("createPengumuman");

    Route::get('/profile', [profileController::class, "profileIndex"])->name("profile");
    Route::get('/profile/{nama}', [profileController::class, "profileShow"])->name("profileID");
    Route::get('/laporan', [profileController::class, "reportShow"])->name("laporan");
    Route::get('/editprofile', [profileController::class, "profileMe"])->name("editprofile");
    Route::put('/editprofile', [profileController::class, "editProfile"])->name("editprofile.update");

    Route::get('/about', function () {
        return view('user.views.about');
    })->name("about");
    Route::get('/organisasiku', [profileController::class, "MyOrg"])->name("organisasiku");
    Route::get('/profile/{nama}/organisasi', [profileController::class, "HisOrg"])->name("organisasiNya");

    Route::get('/organisasi/kbmti', function () {
        return view('user.views.proforganisasi');
    });
    // Route::get('/editprofile', function () {
    //     return view('user.views.editprofile');
    // })->name("editprofile");

    Route::get('/organisasi/{id}', [orgControllers::class, "detailOrg"])->name("detailOrg");
    Route::post('/organiasi/{id}/join', [orgControllers::class, "joinOrg"])->name("join");
    Route::get('/organisasi', [orgControllers::class, "listorg"])->name("listorg");

    // Route::post('/replySend', $baseController . "\postController@replyPost")->name("replyPost")->middleware('auth');
    Route::post('/replySend/{id}', [postController::class, "replyPost"])->name("replyPost");

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
