<?php

use function Livewire\Volt\{state};
use App\Models\article;
//
state(['article' => fn(article $article) => $article]);

$edit = function () {
    // 編集ページにリダイレクト
    return redirect()->route('articles.edit', $this->article);
};

$destroy = function () {
    $this->article->delete();
    return redirect()->route('articles.index');
};

?>


<div>
    <h1>論文詳細</h1>
    <p>タイトル: {{ $article->title }}</p>
    <p>{!! nl2br(e($article->body)) !!}</p>
    <span>
        <button onclick="location.href='http://localhost/articles'">一覧へ戻る</button>
        <button wire:click="edit">編集する</button>
        <button wire:click="destroy" wire:confirm="本当に削除しますか？">削除する</button>
    </span>
</div>
