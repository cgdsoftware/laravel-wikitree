<?php

use Illuminate\Support\Facades\Route;
use Familytree365\Wikitree\Http\Controllers\WikiTreeController;

Route::middleware(['api'])
    ->group(function () {
        Route::get('wikitree/clientLoginResponse', [WikiTreeController::class, 'getAuthCodeCallBack'])->name('wikitree.clientLoginResponse');
        Route::get('wikitree/get-authcode', [WikiTreeController::class, 'getAuthCode'])->name('wikitree.get-authcode');
        Route::get('wikitree/search-person', [WikiTreeController::class, 'searchPerson'])->name('wikitree.search-person');
    });
