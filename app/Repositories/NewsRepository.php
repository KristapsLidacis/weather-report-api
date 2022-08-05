<?php

namespace App\Repositories;

use App\Models\NewsCollection;

interface NewsRepository
{
    public function getNews(): NewsCollection;
}