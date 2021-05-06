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

//==================ThreeTextController=====================
Route::get('ThreeText', [App\Http\Controllers\ThreeTextController::class, 'index'])->name('ThreeText');
Route::post('Add_ThreeText', [App\Http\Controllers\ThreeTextController::class, 'AddThreeText'])->name('Add_ThreeText');
Route::get('ThreeText-View', [App\Http\Controllers\ThreeTextController::class, 'ThreeTextView'])->name('ThreeText-View');
Route::get('Three_text_Delete/{id}', [App\Http\Controllers\ThreeTextController::class, 'ThreeTextView'])->name('Three_text_Delete');
Route::get('three-update-about/{id}', [App\Http\Controllers\ThreeTextController::class, 'ThreeTextView'])->name('three-update-about');

//==================ThreeTextController=====================
Route::get('What_Other_Say_About_Us', [App\Http\Controllers\WhatOtherSayAboutUsController::class, 'index'])->name('What_Other_Say_About_Us');
Route::post('Add-OTHER', [App\Http\Controllers\WhatOtherSayAboutUsController::class, 'AddOTHER'])->name('Add-OTHER');
Route::get('View_What_Other_Say_About_Us', [App\Http\Controllers\WhatOtherSayAboutUsController::class, 'ViewOTHER'])->name('View_What_Other_Say_About_Us');
Route::get('Other_Say-Delete/{id}', [App\Http\Controllers\WhatOtherSayAboutUsController::class, 'OtherSayDelete'])->name('Other_Say-Delete');
Route::get('Other_Say-Edit/{id}', [App\Http\Controllers\WhatOtherSayAboutUsController::class, 'OtherSayEdit'])->name('Other_Say-Edit');
Route::post('update-OTHER', [App\Http\Controllers\WhatOtherSayAboutUsController::class, 'OtherSayEdit'])->name('update-OTHER');

//==================GalleriesOneController=====================
Route::get('Galleries_One', [App\Http\Controllers\GalleriesOneController::class, 'index'])->name('Galleries_One');
Route::post('Galleries_Add', [App\Http\Controllers\GalleriesOneController::class, 'addGalleries'])->name('Galleries_Add');
Route::get('Show_Galleries_One', [App\Http\Controllers\GalleriesOneController::class, 'ShowGalleriesOne'])->name('Show_Galleries_One');
Route::get('Delete-Galleries/{id}', [App\Http\Controllers\GalleriesOneController::class, 'DeleteGalleries'])->name('Delete-Galleries');

Route::get('Galleries_Two', [App\Http\Controllers\GalleriesOneController::class, 'GalleriesTwo'])->name('Galleries_Two');
Route::post('Galleries_Add_Two', [App\Http\Controllers\GalleriesOneController::class, 'GalleriesAddTwo'])->name('Galleries_Add_Two');
Route::get('Show_Galleries_Two', [App\Http\Controllers\GalleriesOneController::class, 'ShowGalleriesTwo'])->name('Show_Galleries_Two');
Route::get('Delete-Galleries-two/{id}', [App\Http\Controllers\GalleriesOneController::class, 'DeleteGalleriestwo'])->name('Delete-Galleries-two');

Route::get('Galleries_Three', [App\Http\Controllers\GalleriesOneController::class, 'GalleriesThree'])->name('Galleries_Three');
Route::post('Galleries_Add_Three', [App\Http\Controllers\GalleriesOneController::class, 'GalleriesAddThree'])->name('Galleries_Add_Three');
Route::get('Show_Galleries_Three', [App\Http\Controllers\GalleriesOneController::class, 'ShowGalleriesThree'])->name('Show_Galleries_Three');
Route::get('Delete-Galleries-Three/{id}', [App\Http\Controllers\GalleriesOneController::class, 'DeleteGalleriesThree'])->name('Delete-Galleries-Three');

Route::get('Galleries_Four', [App\Http\Controllers\GalleriesOneController::class, 'GalleriesFour'])->name('Galleries_Four');
Route::post('Galleries_Add_Four', [App\Http\Controllers\GalleriesOneController::class, 'GalleriesAddFour'])->name('Galleries_Add_Four');
Route::get('Show_Galleries_Four', [App\Http\Controllers\GalleriesOneController::class, 'ShowGalleriesFour'])->name('Show_Galleries_Four');
Route::get('Delete-Galleries-Four/{id}', [App\Http\Controllers\GalleriesOneController::class, 'DeleteGalleriesFour'])->name('Delete-Galleries-Four');

Route::get('Galleries_Five', [App\Http\Controllers\GalleriesOneController::class, 'GalleriesFive'])->name('Galleries_Five');
Route::post('Galleries_Add_Five', [App\Http\Controllers\GalleriesOneController::class, 'GalleriesAddFive'])->name('Galleries_Add_Five');
Route::get('Show_Galleries_Five', [App\Http\Controllers\GalleriesOneController::class, 'ShowGalleriesFive'])->name('Show_Galleries_Five');
Route::get('Delete-Galleries-Five/{id}', [App\Http\Controllers\GalleriesOneController::class, 'DeleteGalleriesFive'])->name('Delete-Galleries-Five');
