<?php

use function Livewire\Volt\{state};
use App\Models\article;
//
state(['article' => fn(article $article) => $article]);
?>

<div>
    <h1>論文詳細</h1>
    <p>タイトル: {{ $article->title }}</p>
    <p>{!! nl2br(e($article->body)) !!}</p>
    <a href="{{ route('articles.index') }}">一覧へ戻る</a>
</div>
