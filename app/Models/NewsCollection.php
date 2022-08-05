<?php

namespace App\Models;

class NewsCollection
{
    private array $newsCollection = [];

    public function __construct(array $news)
    {
        foreach ($news as $article) {
            $this->add($article);
        }
    }

    private function add(NewsModel $model): void
    {
        $this->newsCollection[] = $model;
    }

    public function getNewsCollection(): array
    {
        return $this->newsCollection;
    }
}