<?php

namespace App\Services;

use App\Models\News;

class DatabaseQueryService{

    public function getAllNews(){
        return News::latest()->paginate(10);
    }

    public function singleNewsById($id){
        return $news_single = News::where('id', $id)->first();
    }

    public function singleNewsBySlug($slug){
        return $news_single = News::where('slug', $slug)->first();
    }

}