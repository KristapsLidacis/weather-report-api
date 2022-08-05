<?php
namespace App\Controllers;

use App\Models\NewsModel;
use App\Services\MyArticleGetService;
use App\View;

class MyArticleController{

    private MyArticleGetService $myArticleGetService;

    public function __construct(MyArticleGetService $myArticleGetService)
    {
        $this->myArticleGetService = $myArticleGetService;
    }
    public function show():View{

        $filename = 'article.csv';
        $f = fopen($filename, 'r');
        $data=[];
        if ($f === false) {
            die('Cannot open the file ' . $filename);
        }

        while (($row = fgetcsv($f)) !== false) {
            $data[] = $row;
        }

        fclose($f);

        return new View('main.twig', ['newsList' => $data]);
    }
    public function create():View{
        return new View('addArticle.twig', []);
    }

    public function store():void{

        $filename = 'article.csv';
        $f = fopen($filename, 'a');
        if ($f === false) {
            die('Error opening the file ' . $filename);
        }
        $create = $this->myArticleGetService->execute()->getNewsCollection();
        /** @var NewsModel $row */
        foreach ($create as $row) {
            fputcsv($f, [$row->getTitle(), $row->getAuthor(), $row->getDescription(), $row->getUrl()]);
        }
        fclose($f);
    }
}