<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\IndexCompanyController;
use App\Http\Controllers\IndexSolutionController;
use App\Http\Controllers\IndexPortfolioController;
use App\Http\Controllers\IndexServiceController;
use App\Http\Controllers\IndexExpertiseController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminSettingController;
use App\Http\Controllers\AdminUserController;

use App\Http\Controllers\Auth\AuthenticatedSessionController;



/* VISITOR */
Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/estimate', [IndexController::class, 'estimate']);
Route::get('/estimate/confirm', [IndexController::class, 'estimate_confirm']);

Route::get('/terms', [IndexController::class, 'terms']);
Route::get('/privacy', [IndexController::class, 'privacy']);
Route::get('/email', [IndexController::class, 'email']);


Route::get('/si-development', [IndexController::class, 'si_development']);
Route::get('/homepage-development', [IndexController::class, 'homepage_development']);
Route::get('/creative-production', [IndexController::class, 'creative_production']);
Route::get('/video', [IndexController::class, 'video']);
Route::get('/design', [IndexController::class, 'design']);
Route::get('/thumbnail', [IndexController::class, 'thumbnail']);
Route::get('/sa', [IndexController::class, 'sa']);
Route::get('/da', [IndexController::class, 'da']);
Route::get('/sns', [IndexController::class, 'sns']);
Route::get('/mcn', [IndexController::class, 'mcs']);
Route::get('/cpi', [IndexController::class, 'cpi']);
Route::get('/imc', [IndexController::class, 'imc']);

Route::get('/company', [IndexCompanyController::class, 'index']);

Route::get('/solution', [IndexSolutionController::class, 'index']);

Route::get('/portfolio/{id}/list', [IndexPortfolioController::class, 'list']);
Route::get('/portfolio/data', [IndexPortfolioController::class, 'data']);
Route::get('/portfolio/custom', [IndexPortfolioController::class, 'custom']);
Route::post('/portfolio/display_select', [IndexPortfolioController::class, 'display_select']);
Route::post('/portfolio/portfolio_select', [IndexPortfolioController::class, 'portfolio_select']);

Route::get('/service', [IndexServiceController::class, 'index']);

Route::get('/expertise/overseas', [IndexExpertiseController::class, 'overseas']);
Route::get('/expertise/search', [IndexExpertiseController::class, 'search']);
Route::get('/expertise/banner', [IndexExpertiseController::class, 'banner']);
Route::get('/expertise/meta', [IndexExpertiseController::class, 'meta']);
Route::get('/expertise/youtube', [IndexExpertiseController::class, 'youtube']);
Route::get('/expertise/carrot', [IndexExpertiseController::class, 'carrot']);
Route::get('/expertise/mcn', [IndexExpertiseController::class, 'mcn']);
Route::get('/expertise/cpi', [IndexExpertiseController::class, 'cpi']);
Route::get('/expertise/appsilon', [IndexExpertiseController::class, 'appsilon']);

Route::post('/signin', [IndexController::class, 'signin']);
Route::post('/contact/submit', [IndexController::class, 'contact_submit']);

/* ADMIN */
Route::group(['middleware' => ['check_admin', 'auth']], function() {

    Route::get('/admin', [AdminController::class, 'index']);

    /* ADMIN User */
    Route::get('/admin/user', [AdminUserController::class, 'index']);
    Route::get('/admin/user/create', [AdminUserController::class, 'create']);
    Route::get('/admin/user/{id}/view', [AdminUserController::class, 'view']);
    Route::get('/admin/user/{id}/edit', [AdminUserController::class, 'edit']);
    Route::post('/admin/user/store', [AdminUserController::class, 'store']);
    Route::post('/admin/user/update', [AdminUserController::class, 'update']);
    Route::post('/admin/user/delete', [AdminUserController::class, 'delete']);
    Route::post('/admin/user/login', [AdminUserController::class, 'login']);

    /* ADMIN Setting */
    Route::get('/admin/setting/seo', [AdminSettingController::class, 'seo']);
    Route::post('/admin/setting/seo/update', [AdminSettingController::class, 'seo_update']);
    Route::get('/admin/setting/footer', [AdminSettingController::class, 'footer']);
    Route::post('/admin/setting/footer/update', [AdminSettingController::class, 'footer_update']);
    Route::get('/admin/setting/terms', [AdminSettingController::class, 'terms']);
    Route::post('/admin/setting/terms/update', [AdminSettingController::class, 'terms_update']);
    Route::get('/admin/setting/privacy', [AdminSettingController::class, 'privacy']);
    Route::post('/admin/setting/privacy/update', [AdminSettingController::class, 'privacy_update']);

});

Route::group(['middleware' => ['auth']], function() {
    /* Logout */
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');
});