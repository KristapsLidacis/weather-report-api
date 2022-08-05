<?php

namespace App\Repositories;

use App\Models\NewsCollection;
use App\Models\NewsModel;
use GuzzleHttp\Client;


class NewsApiRepository implements NewsRepository
{
    private Client $httpClient;

    public function __construct()
    {
        $this->httpClient = new Client([
            'base_uri' => $_ENV['BASE_URL']
        ]);
    }

    public function getNews(): NewsCollection
    {
        $url = 'top-headlines?country=us&category=technology&apiKey='.$_ENV['SECRET_KEY'];
        $response = $this->httpClient->get($url);
        $response_data = json_decode($response->getBody()->getContents());
        $news = [];
        foreach ($response_data->articles as $article) {
            if($article->source->name == null || $article->title == null || $article->description == null){
                continue;
            }

            $news[] = new NewsModel(
                $article->source->name,
                $article->author,
                $article->title,
                $article->description,
                $article->url,
                $article->urlToImage,
                $article->publishedAt
            );
        }
        return new NewsCollection($news);
    }

}