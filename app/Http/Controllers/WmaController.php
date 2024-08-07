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

    public function sections($language)
    {

        $templateName = 'section';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];
        return view($templatePath, $data);
    }

    public function units($language)
    {

        $templateName = 'unit';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];
        return view($templatePath, $data);
    }

    public function board_member($language)
    {

        $templateName = 'board_member';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];
        return view($templatePath, $data);
    }

    public function wma_management($language)
    {

        $templateName = 'wma_management';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];
        return view($templatePath, $data);
    }

    public function tender($language)
    {

        $templateName = 'tender';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];
        return view($templatePath, $data);
    }

    public function regional_office($language)
    {

        $templateName = 'regional_office';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];
        return view($templatePath, $data);
    }

    public function audit_report_2018_2019($language)
    {

        $templateName = 'audit_report_2018-2019';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];
        return view($templatePath, $data);
    }

    public function audit_report_2019_2020($language)
    {

        $templateName = 'audit_report_2019-2020';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];
        return view($templatePath, $data);
    }

    public function audit_report_2020_2021($language)
    {

        $templateName = 'audit_report_2020-2021';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];
        return view($templatePath, $data);
    }

    public function audit_report_2021_2022($language)
    {

        $templateName = 'audit_report_2021-2022';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];
        return view($templatePath, $data);
    }

    public function audit_report_2022_2023($language)
    {

        $templateName = 'audit_report_2022-2023';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];
        return view($templatePath, $data);
    }

    public function miscalleneous_amendment_act($language)
    {

        $templateName = 'miscalleneous_amendment_act';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];
        return view($templatePath, $data);
    }

    public function technical_manual($language)
    {

        $templateName = 'technical_manual';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];
        return view($templatePath, $data);
    }

    public function establishment_order($language)
    {

        $templateName = 'establishment_order ';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];
        return view($templatePath, $data);
    }

    public function framework_document($language)
    {

        $templateName = 'framework_document ';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];
        return view($templatePath, $data);
    }

    public function client_service_charter($language)
    {

        $templateName = 'client_service_charter ';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];
        return view($templatePath, $data);
    }

    public function application_form_for_tank_calibrator($language)
    {

        $templateName = 'application_form_for_tank_calibrator ';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];
        return view($templatePath, $data);
    }

    public function form_d_for_pump_mechanics($language)
    {

        $templateName = 'form_d_for_pump_mechanics';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];
        return view($templatePath, $data);
    }

    public function application_form_for_licencing_scale($language)
    {

        $templateName = 'application_form_for_licencing_scale';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];
        return view($templatePath, $data);
    }

    public function compounding_form($language)
    {

        $templateName = 'compounding_form';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];
        return view($templatePath, $data);
    }
}
