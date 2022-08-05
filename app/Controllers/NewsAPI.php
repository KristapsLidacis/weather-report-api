<?php

namespace App\Controllers;

use App\Models\NewsModel;
use App\View;
use App\Services\NewsRedeemService;

class NewsAPI
{
    private NewsRedeemService $newsRedeemService;

    public function __construct(NewsRedeemService $newsRedeemService)
    {
        $this->newsRedeemService = $newsRedeemService;
    }

    public function show(): View
    {
        return new View('main.twig', ['newsList' => $this->newsRedeemService->execute()->getNewsCollection()]);
    }


}