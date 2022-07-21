<?php
namespace App\Services;

use App\Models\ArticleModel;

class ArticleService{
    
    public function createArticle(array $articleData) : ArticleModel
    {
        return ArticleModel::create($articleData);
    }

}