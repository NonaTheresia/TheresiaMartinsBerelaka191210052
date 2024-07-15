<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\About\AboutController;
use App\Http\Controllers\ContactUs\ContactUsController;
use App\Http\Controllers\Footer\FooterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LayoutController;
use App\Http\Controllers\Admin\ContactController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/contact/store', [HomeController::class, 'storeContact'])->name('home.contact.store');

Route::get('/profile', [AboutController::class, 'index'])->name('about');
Route::get('/contact_us', [ContactUsController::class, 'index'])->name('contact_us');
Route::get('/footer', [FooterController::class, 'index'])->name('footer');

Route::namespace('Auth')->group(function(){
    Route::view('/login','auth.login')->name('login')->middleware('guest');
    Route::post('/login',[LoginController::class,'authenticate'])->name('login.post');
    Route::post('/logout', function () {
        Auth::logout();
        return redirect()->to('/login');
    })->name('logout');
});

Route::middleware(['auth'])->namespace('Admin')->prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'index'])->name('admin');
    Route::get('/profile',[AdminController::class,'profile'])->name('admin.profile');
    Route::patch('/profile/update/{id}',[AdminController::class,'update'])->name('admin.profile.update');
    
    // Layout
    Route::get('/layout/header',[LayoutController::class,'header'])->name('layout.header');
    Route::post('/layout/setheader',[LayoutController::class,'setHeader'])->name('layout.setheader');
    Route::get('/layout/about',[LayoutController::class,'about'])->name('layout.about');
    Route::post('/layout/setabout',[LayoutController::class,'setAbout'])->name('layout.setabout');
    Route::get('/layout/footer',[LayoutController::class,'footer'])->name('layout.footer');
    Route::post('/layout/setfooter',[LayoutController::class,'setFooter'])->name('layout.setfooter');

    // CRUD Resource
    Route::resource('/user','UserController');
    Route::resource('/about','AboutController');
    Route::resource('/header','HeaderController');
    Route::resource('/footer','FooterController');
    Route::resource('/portfolio','PortfolioController');
    Route::resource('/skill','SkillController');
    
    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::get('/contact/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
    Route::put('/contact/{id}', [ContactController::class, 'update'])->name('contact.update');
    Route::delete('/contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');
});
