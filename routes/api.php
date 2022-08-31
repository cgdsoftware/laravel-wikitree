<?php

use App\Http\Controllers\Dashboard\ChartController;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WikiTree\WikiTreeController;

// example data for the dashboard
Route::middleware(['web', 'auth'])
    ->namespace('Dashboard')
    ->prefix('dashboard')->as('dashboard.')
    ->group(function () {
        Route::get('line', [ChartController::class, 'line'])
            ->name('line');
        Route::get('bar', [ChartController::class, 'bar'])
            ->name('bar');
        Route::get('pie', [ChartController::class, 'pie'])
            ->name('pie');
        Route::get('doughnut', [ChartController::class, 'doughnut'])
            ->name('doughnut');
        Route::get('radar', [ChartController::class, 'radar'])
            ->name('radar');
        Route::get('polar', [ChartController::class, 'polar'])
            ->name('polar');
        Route::get('bubble', [ChartController::class, 'bubble'])
            ->name('bubble');
    });

Route::middleware(['api'])
    ->group(function () {
        Route::get('wikitree/clientLoginResponse', [WikitreeController::class, 'getAuthCodeCallBack'])->name('wikitree.clientLoginResponse');
        Route::get('wikitree/get-authcode', [WikitreeController::class, 'getAuthCode'])->name('wikitree.get-authcode');
        Route::get('wikitree/search-person', [WikitreeController::class, 'searchPerson'])->name('wikitree.search-person');
    });

Broadcast::routes(['middleware' => ['auth:sanctum']]);
