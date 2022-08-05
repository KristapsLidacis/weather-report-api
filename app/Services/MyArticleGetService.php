<?php

namespace App\Services;

use App\Models\NewsCollection;
use App\Repositories\MyArticleRepository;

class MyArticleGetService{
    private MyArticleRepository $myArticleRepository;

    public function __construct(MyArticleRepository $myArticleRepository)
    {
        $this->myArticleRepository = $myArticleRepository;
    }

    public function execute(): NewsCollection{
        return $this->myArticleRepository->getNews();
    }
}