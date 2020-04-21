<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\News;


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

Route::get('/', function () {
    $hpa = Http::get('http://covid19.health.gov.mv/api/fetch_stats');
    $hpa = json_decode($hpa);
    $news3 = News::latest()->take(3)->get();

    return view('welcome', compact('hpa', 'news3'));
});

Route::get('/api/hpa', function () {
    $hpa = Http::get('http://covid19.health.gov.mv/api/fetch_stats');
    $hpa = json_decode($hpa, true);
    return $hpa;
});

Route::get('/api/coronamv', function () {
    $hpa = Http::get('https://api.coronamv.live/v1/open/maldives');
    $hpa = json_decode($hpa, true);
    return $hpa;
});

Route::get('/dashboard', function() {
    return view('dashboard');
});
