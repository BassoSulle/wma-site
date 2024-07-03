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

    public function background($language)
    {
        $templateName = 'background';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];

        return view($templatePath, $data);
    }

    public function vision_and_mission($language)
    {

        $templateName = 'vision_and_mission';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];
        return view($templatePath, $data);
    }

    public function core_values($language)
    {

        $templateName = 'core_value';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];
        return view($templatePath, $data);
    }

    public function mandate_and_roles($language)
    {

        $templateName = 'mandate_and_role';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];
        return view($templatePath, $data);
    }

    public function organization_structure($language)
    {

        $templateName = 'organization_structure';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];
        return view($templatePath, $data);
    }

    public function directorate($language)
    {

        $templateName = 'directorate';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];
        return view($templatePath, $data);
    }

    public function weight_and_measure_act($language)
    {

        $templateName = 'weight_and_measure_act';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];
        return view($templatePath, $data);
    }

    public function wma_regulation($language)
    {

        $templateName = 'wma_regulation';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];
        return view($templatePath, $data);
    }

    public function approved_patters($language)
    {

        $templateName = 'approved_pattern';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];
        return view($templatePath, $data);
    }

    public function pump_technician($language)
    {

        $templateName = 'pump_technician';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];
        return view($templatePath, $data);
    }

    public function scale_mechanics($language)
    {

        $templateName = 'scale_mechanics';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];
        return view($templatePath, $data);
    }

    public function tank_calibrator($language)
    {

        $templateName = 'tank_calibrator';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];
        return view($templatePath, $data);
    }

    public function gas_metre_calibrator($language)
    {

        $templateName = 'gas_metre_calibrator';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];
        return view($templatePath, $data);
    }

    public function scale_manufacture($language)
    {

        $templateName = 'scale_manufacture';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];
        return view($templatePath, $data);
    }


    public function tank_constructor($language)
    {

        $templateName = 'tank_constructor';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];
        return view($templatePath, $data);
    }

    public function pressue_gauge_and_value_calibrator($language)
    {

        $templateName = 'pressure_gauge_and_value_calibrator';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];
        return view($templatePath, $data);
    }

    public function fuel_measurement_survey($language)
    {

        $templateName = 'fuel_measurement_survey';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];
        return view($templatePath, $data);
    }
}
