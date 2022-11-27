<?php

namespace App\Http\Controllers\News\Front;

use App\Http\Controllers\Controller;
use App\Services\DatabaseQueryService;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct(DatabaseQueryService $service){

        $this->service = $service;
    }

    public function news_list(){
        
        $news = $this->service->getAllNews();
        return view('front.news', compact('news'));
    }

    public function news_detail($slug){
        $news_detail = $this->service->singleNewsBySlug($slug);
        return view('front.news-detail', compact('news_detail'));
    }

}
