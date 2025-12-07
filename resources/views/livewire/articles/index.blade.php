<?php

use function Livewire\Volt\{state};
use App\Models\article;
//
state(['articles' => fn() => article::all()]);
?>

<div>
    <h1>論文一覧</h1>
    <ul>
        @foreach ($articles as $article)
            <p>
                <li>
                    <a href="{{ route('articles.show', $article) }}">
                        {{ $article->title }}
                    </a>
                </li>
            </p>
        @endforeach
    </ul>
</div>
