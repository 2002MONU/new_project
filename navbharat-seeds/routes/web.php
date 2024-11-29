<?php

use App\Http\Controllers\Admin\AchievementController;
use App\Http\Controllers\Admin\AdvancedSeedController;
use App\Http\Controllers\Admin\AwardController;
use App\Http\Controllers\Admin\AwardImageController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ChangePasswordController;
use App\Http\Controllers\Admin\CommitmentController;
use App\Http\Controllers\Admin\CommunityImageController;
use App\Http\Controllers\Admin\ContactDetailController;
use App\Http\Controllers\Admin\CottonController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ExportController;
use App\Http\Controllers\Admin\ExportImageController;
use App\Http\Controllers\Admin\FarmerOutRichImageController;
use App\Http\Controllers\Admin\FieldCropCategoryController;
use App\Http\Controllers\Admin\FieldCropController;
use App\Http\Controllers\Admin\FutureProspectController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\HeadCorporateController;
use App\Http\Controllers\Admin\HomeAboutController;
use App\Http\Controllers\Admin\HomeFeatureController;
use App\Http\Controllers\Admin\InnovativeController;
use App\Http\Controllers\Admin\LeaderShipController;
use App\Http\Controllers\Admin\LoginPageController;
use App\Http\Controllers\Admin\MetaTagController;
use App\Http\Controllers\Admin\MileStoneController;
use App\Http\Controllers\Admin\MissionController;
use App\Http\Controllers\Admin\NotableAchievementController;
use App\Http\Controllers\Admin\OurCommunityController;
use App\Http\Controllers\Admin\OutrichFarmerController;
use App\Http\Controllers\Admin\OverviewController;
use App\Http\Controllers\Admin\ProcessingPlantController;
use App\Http\Controllers\Admin\ProductionAreaController;
use App\Http\Controllers\Admin\QualityTestingController;
use App\Http\Controllers\Admin\ResearchController;
use App\Http\Controllers\Admin\SeedProductionController;
use App\Http\Controllers\Admin\SeedTestingController;
use App\Http\Controllers\Admin\SeoSettingController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\StateOfTheArtController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\VegetableCropCategoryController;
use App\Http\Controllers\Admin\VegetableCropController;
use App\Http\Controllers\Admin\WorkProcessController;
use App\Http\Controllers\SeedPageController;
use App\Http\Controllers\Website\AboutPageController;
use App\Http\Controllers\Website\BlogPageController;
use App\Http\Controllers\Website\EnquiryFormController;
use App\Http\Controllers\Website\GalleryPageController;
use App\Http\Controllers\Website\IndexPageController;
use App\Http\Controllers\Website\InfrastructureController;
use App\Http\Controllers\Website\OutRichPageController;
use App\Models\MileStone;
use Illuminate\Support\Facades\Route;
use Monolog\Handler\OverflowHandler;

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



  Route::get('/',[IndexPageController::class,'IndexPage'])->name('website.index');
  Route::get('blog',[BlogPageController::class,'blogPage'])->name('website.blog'); 
  Route::get('blog-details/{slug}',[BlogPageController::class,'blogPageDetails'])->name('website.blog-details'); 
  Route::get('cotton-seeds',[SeedPageController::class,'cottonSeed'])->name('website.cotton-seed');
  Route::get('cotton-seeds-details/{slug}',[SeedPageController::class,'cottonSeedDetails'])->name('website.cotton-seed-details');
  // field crop
  Route::get('field-crops',[SeedPageController::class,'fieldCrops'])->name('website.field-crops');
  Route::get('field-crops/{slug}',[SeedPageController::class,'fieldCropsCategory'])->name('website.field-category');
  Route::get('field-crops-details/{slug}',[SeedPageController::class,'fieldCropsDetails'])->name('website.field-category-details');
  // vegetables crop
  Route::get('vegetable-crops',[SeedPageController::class,'vegetableCrops'])->name('website.vegetable-crops');
  Route::get('vegetable-crops/{slug}',[SeedPageController::class,'vegetableCategory'])->name('website.vegetable-category');
  Route::get('vegetable-details/{slug}',[SeedPageController::class,'vegetableDetails'])->name('website.vegetable-details');

  // Infrastructure
  Route::get('infrastructure/head-office',[InfrastructureController::class,'headOffice'])->name('website.head-office');
  Route::get('infrastructure/research',[InfrastructureController::class,'research'])->name('website.research');
  Route::get('infrastructure/processing-plant',[InfrastructureController::class,'processingPlant'])->name('website.processing-plant');
  
  // out rich 
  Route::get('outrich/farmer-outrich',[OutRichPageController::class,'farmerOutrich'])->name('website.farmer-outrich');
  Route::get('outrich/our-community',[OutRichPageController::class,'ourCommmunity'])->name('website.our-community');
  Route::get('outrich/export',[OutRichPageController::class,'exportPage'])->name('website.export');
  
  // clients feedback
  Route::get('farmers-review',[BlogPageController::class,'farmerReview'])->name('website.farmer-reviews');
   // about page 
  Route::get('about-us',[AboutPageController::class,'aboutUs'])->name('website.about-us');
  //gallery page 
  Route::get('gallery',[GalleryPageController::class,'galleryPage'])->name('website.gallery');
  Route::get('gallery-details/{slug}',[GalleryPageController::class,'galleryPageDetails'])->name('website.gallery-details');
  
  // enquiry form submit 

  Route::post('enquiry-forms',[EnquiryFormController::class,'enquiryForm'])->name('website.enquiry-form');

  Route::group(['prefix' => 'admin'], function (){
    Route::get('login', [LoginPageController::class, 'login'])->name('admin.login');
    Route::post('login-post', [LoginPageController::class, 'loginPost'])->name('admin.post-login');
    Route::group(['middleware' => 'is_admin'], function () {
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/logout', [LoginPageController::class, 'logout'])->name('admin.logout');
        Route::get('change-passoword', [ChangePasswordController::class, 'changePassword'])->name('admin.change-password');
        Route::post('change-passoword-post', [ChangePasswordController::class, 'changePasswordPost'])->name('admin.change-password-post');
        Route::get('admin-logs', [LoginPageController::class, 'adminLogs'])->name('admin.logs-details');

        Route::resource('seosettings',SeoSettingController::class);
        Route::resource('metatags',MetaTagController::class);
        Route::resource('sliders',SliderController::class);
        Route::resource('home-abouts',HomeAboutController::class);
        Route::resource('blogs',BlogController::class);
        Route::resource('testimonials',TestimonialController::class);
        Route::resource('galleries',GalleryController::class);
        Route::resource('achievements',AchievementController::class);
        Route::resource('cottons',CottonController::class);
        Route::resource('field-crops',FieldCropController::class);
        Route::resource('field-crops-categories',FieldCropCategoryController::class);
        Route::resource('vegetable-crops',VegetableCropController::class);
        Route::resource('vegetable-crop-categories',VegetableCropCategoryController::class);
        Route::resource('head-corporates',HeadCorporateController::class);
        Route::resource('research',ResearchController::class);
        Route::resource('innovatives',InnovativeController::class);
        Route::resource('notable-achievements',NotableAchievementController::class);
        Route::resource('seed-testing',SeedTestingController::class);
        Route::resource('future-prospects',FutureProspectController::class);
        Route::resource('state-of-centers',StateOfTheArtController::class);
        Route::resource('processing-plant',ProcessingPlantController::class);
        Route::resource('seed-productions',SeedProductionController::class);
        Route::resource('advance-seeds',AdvancedSeedController::class);
        Route::resource('commitments',CommitmentController::class);
        Route::resource('production-areas',ProductionAreaController::class);
        Route::resource('quality-testings',QualityTestingController::class);
        Route::resource('outrich-farmers',OutrichFarmerController::class);

        Route::resource('our-communities',OurCommunityController::class);
        Route::resource('exports',ExportController::class);
        Route::resource('leaderships',LeaderShipController::class);
        Route::resource('overviews',OverviewController::class);
        Route::resource('missions',MissionController::class);
        Route::resource('awards',AwardController::class);
        Route::resource('mile-stones',MileStoneController::class);
        Route::resource('award-images',AwardImageController::class);
        Route::resource('farmer-images',FarmerOutRichImageController::class);
        Route::resource('community-images',CommunityImageController::class);
        Route::resource('export-images',ExportImageController::class);
        Route::resource('contact-details',ContactDetailController::class);
        Route::resource('site-settings',SiteSettingController::class);
        Route::resource('home-features',HomeFeatureController::class);
        Route::resource('work-process',WorkProcessController::class);


        Route::get('enquiry-details',[EnquiryFormController::class,'enquiryMessage'])->name('admin.enquiry-details');
        Route::get('enquiry-delete/{id}',[EnquiryFormController::class,'enquiryMessageDelete'])->name('admin.enquiry-delete');
    });
});