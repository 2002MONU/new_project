<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ChangePasswordController;
use App\Http\Controllers\Admin\ContactDetailController;
use App\Http\Controllers\Admin\DashboardPageController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\HomeAboutController;
use App\Http\Controllers\Admin\LoginPageController;
use App\Http\Controllers\Admin\MetaTagController;
use App\Http\Controllers\Admin\OurClientAboutController;
use App\Http\Controllers\Admin\OurClientController;
use App\Http\Controllers\Admin\SEOSettingController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ServiceOfferingController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\WhoWeAreController;
use App\Http\Controllers\Website\GalleryPageController;
use App\Http\Controllers\Website\IndexPageController;
use App\Http\Controllers\Website\OurClientPageController;
use App\Http\Controllers\Website\ServicePageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



  Route::get('/',[IndexPageController::class,'indexPage'])->name('website.index');
  Route::get('/about-us',[IndexPageController::class,'AboutUsPage'])->name('website.about');
  Route::get('services',[ServicePageController::class,'servicePage'])->name('website.service');
  Route::get('services-details/{slug}',[ServicePageController::class,'servicePageDetails'])->name('website.service-details');
  Route::get('our-clients',[OurClientPageController::class,'ourClientPage'])->name('website.our-clients'); 
  Route::get('contact-us',[OurClientPageController::class,'contactUs'])->name('website.contact');
  Route::get('gallery',[GalleryPageController::class,'gallery'])->name('website.gallery');
  Route::get('gallery-view/{slug}',[GalleryPageController::class,'galleryView'])->name('website.gallery-view');
   
  //contact Form 
  Route::post('contact-form',[OurClientPageController::class,'contactForm'])->name('website.contact-form');
  Route::post('enquiry-form',[OurClientPageController::class,'EnquiryForm'])->name('website.enquiry-form');

  Route::group(['prefix' => 'admin'], function (){
    Route::get('login', [LoginPageController::class, 'login'])->name('admin.login');
    Route::post('login-post', [LoginPageController::class, 'loginPost'])->name('admin.post-login');
    Route::group(['middleware' => 'is_admin'], function () {
        Route::get('/dashboard', [DashboardPageController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/logout', [LoginPageController::class, 'logout'])->name('admin.logout');
        Route::get('change-passoword', [ChangePasswordController::class, 'changePassword'])->name('admin.change-password');
        Route::post('change-passoword-post', [ChangePasswordController::class, 'changePasswordPost'])->name('admin.change-password-post');
        Route::get('admin-logs', [LoginPageController::class, 'adminLogs'])->name('admin.logs-details');
       
        Route::resource('sliders',SliderController::class);
        Route::resource('home-abouts',HomeAboutController::class);
        Route::resource('galleries',GalleryController::class);
        Route::resource('our-client-abouts',OurClientAboutController::class);
        Route::resource('our-clients', OurClientController::class);
        Route::resource('abouts',AboutController::class);
        Route::resource('who-we-are',WhoWeAreController::class);
        Route::resource('testimonials',TestimonialController::class);
        Route::resource('service-offerings',ServiceOfferingController::class);
        Route::resource('contact-details',ContactDetailController::class);
        Route::resource('seosettings',SEOSettingController::class);
        Route::resource('metatags',MetaTagController::class);
        Route::resource('services',ServiceController::class);
        Route::resource('site-settings', SiteSettingController::class);


        Route::get('contact-details',[OurClientPageController::class,'contactMessage'])->name('admin.contact-details');

        Route::get('contact-delete/{id}',[OurClientPageController::class,'contactMessageDelete'])->name('admin.contact-delete');
        Route::get('enquiry-details',[OurClientPageController::class,'enquiryMessage'])->name('admin.enquiry-details');

        Route::get('enquiry-delete/{id}',[OurClientPageController::class,'enquiryMessageDelete'])->name('admin.enquiry-delete');
    });
});