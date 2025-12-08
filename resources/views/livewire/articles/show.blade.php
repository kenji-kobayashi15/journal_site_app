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
    <span>
        <button onclick="location.href='http://localhost/articles'">一覧へ戻る</button>
        <button>編集する</button>
        <button>削除する</button>
    </span>
</div>
