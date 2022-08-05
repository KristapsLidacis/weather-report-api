<?php

namespace App\Repositories;

use App\Models\NewsCollection;
use App\Models\NewsModel;

class MyArticleRepository implements NewsRepository {

    public function getNews(): NewsCollection{
        $news[] = new NewsModel(
            'me', $_POST['title'], $_POST['author'], $_POST['description'],'url', 'imgurl', 'publishedTime');
        return new NewsCollection($news);
    }

}