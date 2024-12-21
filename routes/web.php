<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AchievementsController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(AchievementsController::class)->group(function () {
    Route::get('/', 'index')->name('student.award');
    // Route::get('/student-award-edit/{achievement_id}', 'edit')->name('award.edit');
    Route::post('/student-award-post', 'store')->name('student.award.store');
    Route::PUT('student-award-update{achievement_id}', 'update')->name('student.award.update');
});
