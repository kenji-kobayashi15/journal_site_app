<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;


Route::get('/', function () {
    return view('welcome');
});

// 論文一覧ページ
Volt::route('/articles', 'articles.index')->name('articles.index');

// 編集ページ
Volt::route('/articles/create', 'articles.create')->name('articles.create');

// 論文詳細ページ
Volt::route('/articles/{article}', 'articles.show')->name('articles.show');

// 投稿論文編集ページ
Volt::route('/articles/{article}/edit', 'articles.edit')->name('articles.edit');
