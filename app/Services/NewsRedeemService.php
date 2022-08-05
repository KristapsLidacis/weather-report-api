<?php

namespace App\Services;

use App\Models\NewsCollection;
use App\Repositories\NewsApiRepository;

class NewsRedeemService
{

    private NewsApiRepository $newsApiRepository;

    public function __construct(NewsApiRepository $newsApiRepository)
    {
        $this->newsApiRepository = $newsApiRepository;
    }

    public function execute(): NewsCollection
    {

        return $this->newsApiRepository->getNews();
    }

}