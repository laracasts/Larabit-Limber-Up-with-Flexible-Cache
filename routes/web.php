<?php

use App\Services\Financials;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $start = microtime(true);

    $financials = Cache::flexible('financials', [5, 10], function () {
        return Financials::get();
    });

    $runTime = (microtime(true) - $start) * 1000;

    return view('welcome', ['financials' => $financials, 'runTime' => $runTime]);
});
