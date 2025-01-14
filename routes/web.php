<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AcademicianController;
use App\Http\Controllers\ResearchGrantController;
use App\Http\Controllers\ProjectMilestoneController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\LeaderAuthController;
use App\Http\Controllers\LeaderDashboardController;


Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::group(['middleware' => function ($request, $next) {
    if (!session()->has('admin_id')) {
        return redirect()->route('admin.login')->withErrors(['Please log in first as an admin.']);
    }
    return $next($request);
}], function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::resource('academicians', AcademicianController::class);
    Route::resource('research-grants', ResearchGrantController::class);
    Route::resource('milestones', ProjectMilestoneController::class);
});



Route::get('/leader/login', [LeaderAuthController::class, 'showLoginForm'])->name('leader.login');
Route::post('/leader/login', [LeaderAuthController::class, 'login'])->name('leader.login.post');
Route::get('/leader/logout', [LeaderAuthController::class, 'logout'])->name('leader.logout');


Route::group(['middleware' => function ($request, $next) {
    if (!session()->has('leader_id')) {
        return redirect()->route('leader.login')->withErrors(['Please log in first.']);
    }
    return $next($request);
}], function () {
    Route::get('/leader/dashboard', [LeaderDashboardController::class, 'dashboard'])->name('leader.dashboard');
    Route::get('/leader/project/{grantId}/members', [LeaderDashboardController::class, 'manageMembers'])->name('leader.members');
    Route::post('/leader/project/{grantId}/members', [LeaderDashboardController::class, 'updateMembers'])->name('leader.members.update');
    Route::get('/leader/project/{grantId}/milestones', [LeaderDashboardController::class, 'manageMilestones'])->name('leader.milestones');
    Route::post('/leader/project/{grantId}/milestones', [LeaderDashboardController::class, 'storeMilestone'])->name('leader.milestones.store');
    Route::put('/leader/milestone/{milestoneId}', [LeaderDashboardController::class, 'updateMilestone'])->name('leader.milestones.update');
    Route::delete('/leader/milestone/{milestoneId}', [LeaderDashboardController::class, 'deleteMilestone'])->name('leader.milestones.delete');
});


Route::get('/', function () {
    return view('auth.landing');  
});
