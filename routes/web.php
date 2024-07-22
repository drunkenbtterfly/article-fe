<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('../landing_new/article/latest/latest');
});

Route::get('/test', function () {
    return view('../landing_new/article/latest/test');
});

//landing_new
Route::get('/pencarian', function () {
    return view('pencarian');
});

Route::get('/automotive', function () {
    return view('../landing_new/article/automotive/automotive');
});

Route::get('/articleautomotive', function () {
    return view('../landing_new/article/automotive/articleautomotive');
});

Route::get('/entertaiment', function () {
    return view('../landing_new/article/entertaiment/entertaiment');
});

Route::get('/articleentertaiment', function () {
    return view('../landing_new/article/entertaiment/articleentertaiment');
});

Route::get('/finance', function () {
    return view('../landing_new/article/finance/finance');
});

Route::get('/articlefinance', function () {
    return view('../landing_new/article/finance/articlefinance');
});

Route::get('/food', function () {
    return view('../landing_new/article/food/food');
});

Route::get('/articlefood', function () {
    return view('../landing_new/article/food/articlefood');
});

Route::get('/healt', function () {
    return view('../landing_new/article/health/health');
});

Route::get('/articlehealth', function () {
    return view('../landing_new/article/health/articlehealth');
});

Route::get('/latest', function () {
    return view('../landing_new/article/latest/latest');
});

Route::get('/news', function () {
    return view('../landing_new/article/news.news');
});

Route::get('/articlenews', function () {
    return view('../landing_new/article/news.articlenews');
});

Route::get('/sport', function () {
    return view('../landing_new/article/sport.sport');
});

Route::get('/articlesport', function () {
    return view('../landing_new/article/sport.articlesport');
});

Route::get('/tech', function () {
    return view('../landing_new/article/tech.tech');
});

Route::get('/articletech', function () {
    return view('../landing_new/article/tech.articletech');
});

Route::get('/travel', function () {
    return view('../landing_new/article/travel.travel');
});

Route::get('/articletravel', function () {
    return view('../landing_new/article/travel.articletravel');
});

Route::get('/faq', function () {
    return view('landing_new.article.faq.faq');
});

Route::get('/incubator', function () {
    return view('landing_new.article.incubator.incubator');
});