<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\VideosController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\DesignsController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\VideoCategoryController;
use App\Http\Controllers\DesignCategoryController;
use App\Http\Controllers\ArticleCategoryController;
use App\Http\Controllers\PricingCategoryController;

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


// Home page
Route::get('/',[HomeController::class,'index'])->name('home');

// Pages:

Route::get('About', [AboutController::class, 'Affichage'])->name('About');
Route::get('Faq', [FaqController::class, 'Affichage'])->name('Faq');
Route::get('Service', [ServiceController::class, 'Affichage'])->name('Service');
Route::get('Projects', [ProjectsController::class,'Affichage'])->name('Projects');
Route::get('Designs', [DesignsController::class,'Affichage'])->name('Designs');
Route::get('Videos', [VideosController::class,'Affichage'])->name('Videos');
Route::get('Blog', [BlogController::class,'Affichage'])->name('Blog');
Route::get('Contact', [ContactController::class,'Affichage'])->name('Contact');


Route::resource('Services', ServiceController::class);
Route::resource('Our-Blog', BlogController::class);
Route::resource('Our-Contact', ContactController::class);

//Categories :
Route::resource('Articles', ArticleController::class);
Route::resource('ArticleCategorys',ArticleCategoryController::class);
Route::resource('Designs_all', DesignsController::class);
Route::resource('DesignCategory',DesignCategoryController::class);
Route::resource('Videos_all', VideosController::class);
Route::resource('VideoCategory',VideoCategoryController::class);
Route::resource('Projects_all', ProjectsController::class);
Route::resource('Categories', CategoriesController::class);
Route::resource('PricingCategory',PricingCategoryController::class);
Route::resource('Abouts', AboutController::class);
Route::resource('Tags', TagController::class);

Route::resource('Demande', DemandeController::class);
Route::resource('Pricings', PricingController::class);
Route::resource('Teams', TeamController::class);
Route::resource('Faqs', FaqController::class);
Route::resource('Testimonials', TestimonialController::class);
Route::resource('Features', FeatureController::class);
Route::resource('Clients', ClientController::class);
Route::resource('Logos', LogoController::class);

Route::middleware('auth')->group(function () {
    Route::middleware(['auth', 'role:admin'])->group(function(){
        Route::get('/admin/dashboard',[AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    });
});



// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
Route::middleware('auth')->group(function () {
    Route::get('/delete-user', [ProfileController::class, 'delete_user'])->name('delete_user');
    Route::get('/update-password', [ProfileController::class, 'update_password'])->name('update_password');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';




