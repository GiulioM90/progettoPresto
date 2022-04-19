<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\AnnouncementController;

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

// rotta per homepage
Route::get('/', [PublicController::class ,'welcome'])->name('welcome');
// rotta per form creazione annuncio
Route::get('/announcements/create', [AnnouncementController::class ,'create'])->name('create');
// salvataggio annuncio
Route::post('/announcements/store', [AnnouncementController::class ,'store'])->name('store');
// rotta per indice annunci
Route::get('/announcements/index', [AnnouncementController::class ,'index'])->name('index');
// rotta per dettaglio annunci
Route::get('/announcement/detail/{announcement}', [AnnouncementController::class , 'show'])->name('show');
// rotta per filtro categorie
Route::get('/announcement/categories/{name}/{id}',[PublicController::class,'filterByCategory'])->name('filterByCategory');
// rotta per search
Route::get('/search', [PublicController::class, 'search'])->name('search');
//rotte revision area
Route::get('/home/revisor/index', [RevisorController::class, 'index'])->name('revisorIndex');
Route::post('/revisor/announcement/{id}/accept', [RevisorController::class, 'accept'])->name('accept');
Route::post('/revisor/announcement/{id}/reject', [RevisorController::class, 'reject'])->name('reject');
//rotte per form revisore
Route::post('/revisor/form/sent', [PublicController::class, 'sentRevisorForm'])->name('sentRevisorForm');
Route::get('/revisor/form', [PublicController::class, 'revisorForm'])->name('revisorForm');


//rotte per flag e traduzioni
Route::post('/locale/{locale}', [PublicController::class, 'locale'])->name('locale');

//rotte per immagini
Route::post('/announcement/images/upload', [AnnouncementController::class, 'uploadImage'])->name('uploadImages');
Route::delete('/announcement/images/remove', [AnnouncementController::class, 'removeImage'])->name('removeImages');
Route::get('/announcement/get/images' , [AnnouncementController::class, 'getImages'])->name('getImages');