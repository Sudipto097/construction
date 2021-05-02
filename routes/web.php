<?php

use Illuminate\Support\Facades\Route;

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
//==================frontend==================
Route::get('/', [App\Http\Controllers\IndexController::class, 'home'])->name('/');
Route::get('/Galleries', [App\Http\Controllers\IndexController::class, 'index'])->name('Galleries');
Route::get('/Contact', [App\Http\Controllers\IndexController::class, 'Contact'])->name('Contact');
Route::get('/Job-Reference', [App\Http\Controllers\IndexController::class, 'JobReference'])->name('JobReference');
Route::get('/ABOUT-US', [App\Http\Controllers\IndexController::class, 'ABOUTUS'])->name('ABOUTUS');
//==================frontend==================

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//============SidebarController==================
Route::get('/all_sidebar', [App\Http\Controllers\SidebarController::class, 'index'])->name('all_sidebar');
Route::post('/add-image', [App\Http\Controllers\SidebarController::class, 'addimage'])->name('add-image');
Route::get('/view-sidebar', [App\Http\Controllers\SidebarController::class, 'viewSidebar'])->name('view-sidebar');
Route::get('status-update-about/{id}', [App\Http\Controllers\SidebarController::class, 'statusUpdate'])->name('status-update-about');
Route::get('Delete-about/{id}', [App\Http\Controllers\SidebarController::class, 'DeleteImage'])->name('Delete-about');

//==================JobReferenceController=====================
Route::get('Add-Job-Reference', [App\Http\Controllers\JobReferenceController::class, 'index'])->name('Add-Job-Reference');
Route::post('Add-Reference', [App\Http\Controllers\JobReferenceController::class, 'AddReference'])->name('Add-Reference');
Route::get('view-jobreference', [App\Http\Controllers\JobReferenceController::class, 'viewJobreference'])->name('view-jobreference');
Route::get('Edit-jobreference/{id}', [App\Http\Controllers\JobReferenceController::class, 'Editjobreference'])->name('Edit-jobreference');
Route::get('Delete-jobreference/{id}', [App\Http\Controllers\JobReferenceController::class, 'Deletejobreference'])->name('Delete-jobreference');
Route::post('update-jobreference', [App\Http\Controllers\JobReferenceController::class, 'updatejobreference'])->name('update-jobreference');

//==================AboutUsController=====================
Route::get('About-Us', [App\Http\Controllers\AboutUsController::class, 'index'])->name('About-Us');
Route::post('Add-About', [App\Http\Controllers\AboutUsController::class, 'AddAbout'])->name('Add-About');
Route::get('About-view', [App\Http\Controllers\AboutUsController::class, 'Aboutview'])->name('About-view');
Route::get('Edit-About/{id}', [App\Http\Controllers\AboutUsController::class, 'EditAbout'])->name('Edit-About');
Route::post('update-About', [App\Http\Controllers\AboutUsController::class, 'updateAbout'])->name('update-About');
Route::get('Delete-About/{id}', [App\Http\Controllers\AboutUsController::class, 'Delete-About'])->name('Delete-About');

//==================WhyChooseUsUsController=====================
Route::get('Why-Choose-Us', [App\Http\Controllers\WhyChooseUsUsController::class, 'index'])->name('Why-Choose-Us');
Route::post('Add-Choose', [App\Http\Controllers\WhyChooseUsUsController::class, 'AddChoose'])->name('Add-Choose');
Route::get('view-Why-Choose-Us', [App\Http\Controllers\WhyChooseUsUsController::class, 'ViewWhyChooseUs'])->name('view-Why-Choose-Us');
Route::get('WhyChooseUs-Delete/{id}', [App\Http\Controllers\WhyChooseUsUsController::class, 'WhyChooseUsDelete'])->name('WhyChooseUs-Delete');
Route::get('WhyChooseUs-Edit/{id}', [App\Http\Controllers\WhyChooseUsUsController::class, 'WhyChooseUsEdit'])->name('WhyChooseUs-Edit');
Route::post('Update-Choose', [App\Http\Controllers\WhyChooseUsUsController::class, 'UpdateChoose'])->name('Update-Choose');
Route::get('status-Why-Choose-Us/{id}', [App\Http\Controllers\WhyChooseUsUsController::class, 'statusUpdate'])->name('status-update-about');
