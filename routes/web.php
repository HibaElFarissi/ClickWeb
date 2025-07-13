<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\SkillsController;
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
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\SkillsTypeController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\CategorieVideoController;
use App\Http\Controllers\ArticleCategoryController;
use App\Http\Controllers\CategorieDesignController;
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
  Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});

// Home page
Route::get('/',[HomeController::class,'index'])->name('home');

// Pages:

Route::get('About', [AboutController::class, 'Affichage'])->name('About');
Route::get('Faq', [FaqController::class, 'Affichage'])->name('Faq');
Route::get('Service', [ServiceController::class, 'Affichage'])->name('Service');
Route::get('Projects', [ProjectsController::class,'Affichage'])->name('Project');
Route::get('Designs_all', [DesignsController::class,'Affichage'])->name('Designs_all');
Route::get('Video_all', [VideosController::class,'Affichage'])->name('Videos_all');
Route::get('Blog', [BlogController::class,'Affichage'])->name('Blog');
Route::get('Contact', [ContactController::class,'Affichage'])->name('Contact');
Route::resource('projects', ProjectsController::class);

Route::resource('Services', ServiceController::class);
Route::resource('Our-Blog', BlogController::class);
Route::resource('Our-Contact', ContactController::class);
Route::resource('infos', InfoController::class);
//Categories :
Route::resource('Articles', ArticleController::class);
Route::resource('Newsletters', NewsletterController::class);
Route::resource('Contacts', ContactController::class);
Route::resource('ArticleCategorys',ArticleCategoryController::class);
Route::resource('Videos', VideoController::class);
Route::resource('Designs', DesignController::class);

Route::resource('Skills-Types', SkillsTypeController::class);
Route::resource('Skills', SkillsController::class);
Route::resource('Projects_all', ProjectsController::class);
Route::resource('Categories', CategoriesController::class);
Route::resource('PricingCategory',PricingCategoryController::class);
Route::resource('Abouts', AboutController::class);
Route::resource('Tags', TagsController::class);

Route::resource('Demande', DemandeController::class);
Route::resource('Pricings', PricingController::class);
Route::resource('Teams', TeamController::class);
Route::resource('Faqs', FaqController::class);
Route::resource('Testimonials', TestimonialController::class);
Route::resource('Features', FeatureController::class);
Route::resource('Clients', ClientController::class);
Route::resource('Logos', LogoController::class);

Route::resource('Categorie_Designs', CategorieDesignController::class);
Route::resource('Categorie_Videos', CategorieVideoController::class);
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




