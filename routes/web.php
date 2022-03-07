<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarouselAkademikController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\CarouselNonAkademikController;
use App\Http\Controllers\FrontPagesController;
use App\Http\Controllers\KegiatanAkademikController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KegiatanNonAkademikController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PpdsController;
use App\Http\Controllers\PrestasiAkademikController;
use App\Http\Controllers\PrestasiNonAkademikController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProfileAdminController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\VisiMisiController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('clear-all', function () {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('config:cache');

    return redirect('/');
});
Route::get('/any-route', function () {
    Artisan::call('storage:link');
  });
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontPagesController::class, 'index'])->name('/');

// Route Admin
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.index');
    Route::resource('/profile', ProfileAdminController::class);
    Route::resource('/news', NewsController::class);
    Route::patch('/deactiveNews/{id_carousel}', [NewsController::class, 'deactiveNews'])->name('news.deactiveNews');
    Route::resource('section1', CarouselController::class);
    Route::patch('section1/{id}', [CarouselController::class, 'updateContent'])->name('carousel.updateContent');
    Route::resource('section2', VisiMisiController::class);
    Route::resource('section3', ProfilController::class);
    Route::resource('section4', KegiatanController::class);
    Route::resource('sejarah', SejarahController::class);
    Route::resource('ppds_lulusan', PpdsController::class);
    Route::resource('staffPengajar', StaffController::class);
    Route::resource('kegiatanAkademik', KegiatanAkademikController::class);
    Route::resource('kegiatanNonAkademik', KegiatanNonAkademikController::class);
    Route::resource('prestasiAkademik', PrestasiAkademikController::class);
    Route::resource('prestasiNonAkademik', PrestasiNonAkademikController::class);
    Route::resource('carouselAkademik', CarouselAkademikController::class);
    Route::resource('carouselNonAkademik', CarouselNonAkademikController::class);
});

// Route Frontpages
Route::prefix('/')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.form');
    Route::post('login', [LoginController::class, 'authenticate'])->name('login.authenticate');
    Route::get('logout', [LoginController::class, 'logout'])->name('login.logout');
    Route::get('sejarah', [FrontPagesController::class, 'sejarahPage'])->name('home.sejarah');
    Route::get('staff', [FrontPagesController::class, 'staffPage'])->name('home.staff');
    Route::get('staff/{id}', [FrontPagesController::class, 'staffShow'])->name('home.staffShow');
    Route::get('ppds-lulusan', [FrontPagesController::class, 'ppdsPage'])->name('home.ppds');
    Route::get('ppds-lulusan/{id}', [FrontPagesController::class, 'ppdsShow'])->name('home.ppdsShow');
    Route::get('akreditasi', [FrontPagesController::class, 'akreditasiPage'])->name('home.akreditasi');
    Route::get('struktur', [FrontPagesController::class, 'strukturOrganisasiPage'])->name('home.struktur');
    Route::get('akademik', [FrontPagesController::class, 'akademikPage'])->name('home.akademik');
    Route::get('non-akademik', [FrontPagesController::class, 'nonAkademikPage'])->name('home.nonakademik');
    Route::get('berita', [FrontPagesController::class, 'beritaPage'])->name('home.news');
    Route::get('berita/{id}', [FrontPagesController::class, 'beritaShow'])->name('home.newsShow');
    Route::get('kontak', [FrontPagesController::class, 'kontakPage'])->name('home.kontak');
});
// Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {