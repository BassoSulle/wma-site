<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WmaController extends Controller
{
    protected function getTemplatePath($language, $templateName)
    {
        return "wmaweb.$language.$templateName";
    }

    public function index($language = 'en')
    {
        $templateName = 'index';
        $templatePath = $this->getTemplatePath($language, $templateName);

        $data = [
            'current_language' => $language,
            // 'carousel_items' => CarouselItem::latest()->get(),
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];

        return view($templatePath, $data);
    }

    
}
