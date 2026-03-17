<?php

use Illuminate\Support\Facades\Route;
use Modules\Users\Http\Controllers\UsersController;

Route::middleware(['auth:admin'])->prefix('admin')->group(function () {
    Route::apiResource('users', UsersController::class)->names('admin.users');

    Route::post('users/{id}/assign-role',  [UsersController::class, 'assignRole']);
    Route::post('users/{id}/revoke-role',  [UsersController::class, 'revokeRole']);
});
