<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\ProductController;



//// Task Two\\\\\

Route::get('/home', function () {
    return redirect('/dashboard')->withStatus(302);
});


//// Task Four\\\\\
 Route::middleware(['AuthMiddleware'])->group(function () {

    Route::get('/profile',[AssignmentController::class,'taskfour']);
    Route::get('/setting',[AssignmentController::class,'taskfour']);

 });

 //// Task Eight\\\\\

 Route::get('/welcome',[AssignmentController::class,'eight']);

