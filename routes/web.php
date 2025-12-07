<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;


Route::get('/', function () {
    return view('welcome');
});

// 論文一覧ページ
Volt::route('/articles', 'articles.index')->name('articles.index');

// 論文詳細ページ
Volt::route('/articles/{article}', 'articles.show')->name('articles.show');
