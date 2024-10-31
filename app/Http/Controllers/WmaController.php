<?php

namespace App\Http\Controllers;

use App\Models\faqs;
use App\Models\News;
use App\Models\Tender;
use App\Models\Gallery;
use App\Models\Carousel;
use App\Models\Vacancies;
use App\Models\FormCategory;
use App\Models\PressRelease;
use Illuminate\Http\Request;
use App\Models\Announcements;
use App\Models\RegionOffices;
use App\Models\PublicationCategory;
use App\Models\Services;
use App\Models\Events as EventsModel;

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
            'carousel_items' => Carousel::select('slug', 'image', $language . '_title as title', $language . '_description as description')->where('is_active', true)->latest()->get(),
            'news_articles' => News::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(6)->get(),
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'services' => Services::select('slug', 'image', 'icon', $language . '_name as name', $language . '_content as content', 'created_at')->where('is_active', true)->latest()->limit(8)->get(),
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
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];

        return view($templatePath, $data);
    }

    public function vision_and_mission($language)
    {

        $templateName = 'vision_and_mission';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function core_values($language)
    {

        $templateName = 'core_value';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function mandate_and_roles($language)
    {

        $templateName = 'mandate_and_role';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function organization_structure($language)
    {

        $templateName = 'organization_structure';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function directorate($language)
    {

        $templateName = 'directorate';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function weight_and_measure_act($language)
    {

        $templateName = 'weight_and_measure_act';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function wma_regulation($language)
    {

        $templateName = 'wma_regulation';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function approved_patters($language)
    {

        $templateName = 'approved_pattern';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function pump_technician($language)
    {

        $templateName = 'pump_technician';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function scale_mechanics($language)
    {

        $templateName = 'scale_mechanics';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function tank_calibrator($language)
    {

        $templateName = 'tank_calibrator';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function gas_metre_calibrator($language)
    {

        $templateName = 'gas_metre_calibrator';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function scale_manufacture($language)
    {

        $templateName = 'scale_manufacture';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }


    public function tank_constructor($language)
    {

        $templateName = 'tank_constructor';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function pressue_gauge_and_value_calibrator($language)
    {

        $templateName = 'pressure_gauge_and_value_calibrator';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function fuel_measurement_survey($language)
    {

        $templateName = 'fuel_measurement_survey';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function sections($language)
    {

        $templateName = 'section';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function units($language)
    {

        $templateName = 'unit';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function board_member($language)
    {

        $templateName = 'board_member';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function wma_management($language)
    {

        $templateName = 'wma_management';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function tender($language)
    {

        $templateName = 'tender';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'tender' => Tender::select('slug', $language . '_title as title', $language . '_file as file', 'start_date', 'end_date')->where('is_active', true)->latest()->get(),
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function regional_office($language)
    {

        $templateName = 'regional_office';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'region_offices' => RegionOffices::select('slug', 'region_name', 'location', 'address', 'fax', 'telephone', 'email', $language . '_content as content')->where('is_active', true)->latest()->get(),
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function audit_report_2018_2019($language)
    {

        $templateName = 'audit_report_2018-2019';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function audit_report_2019_2020($language)
    {

        $templateName = 'audit_report_2019-2020';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function audit_report_2020_2021($language)
    {

        $templateName = 'audit_report_2020-2021';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function audit_report_2021_2022($language)
    {

        $templateName = 'audit_report_2021-2022';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function audit_report_2022_2023($language)
    {

        $templateName = 'audit_report_2022-2023';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function miscalleneous_amendment_act($language)
    {

        $templateName = 'miscalleneous_amendment_act';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function technical_manual($language)
    {

        $templateName = 'technical_manual';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function establishment_order($language)
    {

        $templateName = 'establishment_order ';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function framework_document($language)
    {

        $templateName = 'framework_document ';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
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
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function form_d_for_pump_mechanics($language)
    {

        $templateName = 'form_d_for_pump_mechanics';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function application_form_for_licencing_scale($language)
    {

        $templateName = 'application_form_for_licencing_scale';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function compounding_form($language)
    {

        $templateName = 'compounding_form';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function video($language)
    {

        $templateName = 'video';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function gallaries($language)
    {

        $templateName = 'gallaries';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'galleries' => Gallery::select('slug', $language . '_title as title', 'created_at', 'id')->where('is_active', true)->latest()->get(),
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function pressrelease($language)
    {

        $templateName = 'pressrelease';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'press_release' => PressRelease::select($language . '_title as title', $language . '_file as file', 'created_at')->latest()->get(),
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function vacancies($language)
    {

        $templateName = 'vacancies';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'vacancies' => Vacancies::select($language . '_title as title', $language . '_file as file', 'created_at', 'end_date')->latest()->get(),
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function faqs($language)
    {

        $templateName = 'faqs';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'faqs' => faqs::select($language . '_question as question', $language . '_answer as answer', 'created_at')->latest()->get(),
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }


    public function request_for_license_procedures($language)
    {

        $templateName = 'request_for_license_procedures';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            // 'news_articles' => NewsArticle::latest()->limit(4)->get(),
        ];
        return view($templatePath, $data);
    }

    public function speeches($language)
    {

        $templateName = 'speeches';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function brochures($language)
    {

        $templateName = 'brochures';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function posters($language)
    {

        $templateName = 'posters';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function newsletter($language)
    {

        $templateName = 'newsletter';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    // forms
    public function dynamic_forms($language, $slug)
    {
        $templateName = 'forms';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'form_category' => FormCategory::select($language . '_title as title', 'id')->where('is_active', true)->where('slug', $slug)->first(),
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
        // return view('', ['language' => $language, 'form_category_slug' => $slug]);
    }

    public function dynamic_publications($language, $slug)
    {

        $templateName = 'publications';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'publication_category' => PublicationCategory::select($language . '_title as title', 'id')->where('is_active', true)->where('slug', $slug)->first(),
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function all_services($language)
    {

        $templateName = 'all_services';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'services' => Services::select('slug', 'image', 'icon', $language . '_name as name', $language . '_content as content', 'created_at')->where('is_active', true)->latest()->get(),
        ];
        return view($templatePath, $data);
    }

    public function service_details($language, $slug)
    {

        $templateName = 'service_details';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'service_details' => Services::select('slug', 'image', 'icon', $language . '_name as name', $language . '_content as content', 'created_at')->where('is_active', true)->where('slug', $slug)->first(),
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function all_events($language)
    {

        $templateName = 'all_events';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->get(),
        ];
        return view($templatePath, $data);
    }

    public function event_details($language, $slug)
    {

        $templateName = 'event_details';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'event_details' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->where('slug', $slug)->first(),
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function all_announcements($language)
    {

        $templateName = 'all_announcements';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->get(),
        ];
        return view($templatePath, $data);
    }

    public function announcement_details($language, $slug)
    {

        $templateName = 'announcement_details';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcement_details' => Announcements::select('slug',  $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->where('slug', $slug)->first(),
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function all_news($language)
    {

        $templateName = 'all_news';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'news' => News::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->get(),
        ];
        return view($templatePath, $data);
    }

    public function new_details($language, $slug)
    {

        $templateName = 'news_details';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'new_details' => News::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->where('slug', $slug)->first(),
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),

        ];
        return view($templatePath, $data);
    }

    public function how_do_i_1($language)
    {
        $templateName = 'how_do_i_1';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),


        ];

        return view($templatePath, $data);
    }

    public function how_do_i_2($language)
    {
        $templateName = 'how_do_i_2';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),


        ];

        return view($templatePath, $data);
    }

    public function welcome_note($language)
    {
        $templateName = 'welcome_note';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $data = [
            'current_language' => $language,
            'announcements' => Announcements::select('slug', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),
            'events' => EventsModel::select('slug', 'image', $language . '_title as title', $language . '_description as description', 'created_at')->where('is_active', true)->latest()->limit(3)->get(),


        ];

        return view($templatePath, $data);
    }
}
