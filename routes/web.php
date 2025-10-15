<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AdvertController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/categories', [HomeController::class, 'categories'])->name('categories');
Route::get('/category/{category}', [HomeController::class, 'category'])->name('category');
Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('detail');
Route::get('/page/{id}', [HomeController::class, 'page'])->name('page');
Route::get('set-language/{lang}', [LanguageController::class, 'setLanguage'])->name('set.language');
Route::get('/countries', [LocationController::class, 'getCountries']);
Route::get('/states/{country_id}', [LocationController::class, 'getStates']);
Route::get('/cities/{state_id}', [LocationController::class, 'getCities']);
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth','verified')->group(function () {
    Route::get('/ad-create', [AdvertController::class, 'adCreate'])->name('ad.create');
    Route::post('/ad-post', [AdvertController::class, 'adPost'])->name('ad.post');
    Route::post('/ad-comment/{id}', [AdvertController::class, 'adComment'])->name('ad.comment');
    Route::get('/ad-edit/{id}', [AdvertController::class, 'adEdit'])->name('ad.edit');
    Route::post('/ad-update/{id}', [AdvertController::class, 'adUpdate'])->name('ad.update');
    Route::get('/ad-delete/{id}', [AdvertController::class, 'adDelete'])->name('ad.delete');
    Route::post('/ad/uploadImages', [AdvertController::class, 'uploadImages'])->name('ad.uploadImages');
    Route::post('/ad-delete-image', [AdvertController::class, 'deleteImage'])->name('ad.deleteImage');
    Route::get('/complaint/{id}', [AdvertController::class, 'complaint'])->name('complaint');
    Route::post('/site-comment', [AdvertController::class, 'siteComment'])->name('site.comment');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/delete-user/{id}', [ProfileController::class, 'deleteUser'])->name('delete-user');
    Route::delete('/adverts/{advert}/images/{image}', [AdvertController::class, 'deleteImage'])->name('adverts.image.delete');

});
Route::prefix('admin')->group(function()
{
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'loginPost'])->name('admin.login.post');

    Route::middleware([\App\Http\Middleware\AdminAuth::class])->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.index');
        Route::get('/sliders',[AdminController::class,'sliders'])->name('admin.sliders');
        Route::get('/add-slider',[AdminController::class,'addSlider'])->name('admin.add-slider');
        Route::post('/store-slider',[AdminController::class,'storeSlider'])->name('admin.store-slider');
        Route::get('/edit-slider/{id}',[AdminController::class,'editSlider'])->name('admin.edit-slider');
        Route::post('/update-slider/{id}',[AdminController::class,'updateSlider'])->name('admin.update-slider');
        Route::get('/delete-slider/{id}',[AdminController::class,'deleteSlider'])->name('admin.delete-slider');
        Route::get('/props',[AdminController::class,'props'])->name('admin.props');
        Route::get('/add-prop',[AdminController::class,'addProp'])->name('admin.add-prop');
        Route::post('/store-prop',[AdminController::class,'storeProp'])->name('admin.store-prop');
        Route::get('/edit-prop/{id}',[AdminController::class,'editProp'])->name('admin.edit-prop');
        Route::post('/update-prop/{id}',[AdminController::class,'updateProp'])->name('admin.update-prop');
        Route::get('/delete-prop/{id}',[AdminController::class,'deleteProp'])->name('admin.delete-prop');
        Route::get('/pages',[AdminController::class,'pages'])->name('admin.pages');
        Route::get('/add-page',[AdminController::class,'addPage'])->name('admin.add-page');
        Route::post('/store-page',[AdminController::class,'storePage'])->name('admin.store-page');
        Route::get('/edit-page/{id}',[AdminController::class,'editPage'])->name('admin.edit-page');
        Route::post('/update-page/{id}',[AdminController::class,'updatePage'])->name('admin.update-page');
        Route::get('/delete-page/{id}',[AdminController::class,'deletePage'])->name('admin.delete-page');
        Route::get('/main-comment/{id}',[AdminController::class,'mainComment'])->name('admin.main-comment');
        Route::get('/delete-comment/{id}',[AdminController::class,'deleteComment'])->name('admin.delete-comment');
        Route::get('/delete-user/{id}',[AdminController::class,'deleteUser'])->name('admin.delete-user');
        Route::get('/delete-advert/{id}',[AdminController::class,'deleteAdvert'])->name('admin.delete-advert');
    });

    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');

});

require __DIR__.'/auth.php';
