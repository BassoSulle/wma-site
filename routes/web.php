<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WmaController;
use App\Http\Controllers\AdminPanelController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return redirect()->route('home', ['language' => 'en']);
})->name('root');

$language = 'en';

Route::get('/{language}/index', [WmaController::class, 'index'])
    ->name('home');

Route::get('/{language}/background', [WmaController::class, 'background'])
    ->name('background');

Route::get('/{language}/vision-and-mission', [WmaController::class, 'vision_and_mission'])
    ->name('vision-and-mission');

Route::get('/{language}/core-value', [WmaController::class, 'core_values'])
    ->name('core-value');

Route::get('/{language}/mandate-and-roles', [WmaController::class, 'mandate_and_roles'])
    ->name('mandate-and-role');

Route::get('/{language}/organization-structure', [WmaController::class, 'organization_structure'])
    ->name('organization-structure');

Route::get('/{language}/directorates', [WmaController::class, 'directorate'])
    ->name('directorate');

Route::get('/{language}/weight-and-measure-act', [WmaController::class, 'weight_and_measure_act'])
    ->name('weight-and-measure-act');

Route::get('/{language}/wma-regulation', [WmaController::class, 'wma_regulation'])
    ->name('wma-regulation');

Route::get('/{language}/approved-pattern', [WmaController::class, 'approved_patters'])
    ->name('approved-pattern');

Route::get('/{language}/pump-technician', [WmaController::class, 'pump_technician'])
    ->name('pump-technician');

Route::get('/{language}/scale-mechanics', [WmaController::class, 'scale_mechanics'])
    ->name('scale-mechanics');

Route::get('/{language}/tank-calibrator', [WmaController::class, 'tank_calibrator'])
    ->name('tank-calibrator');

Route::get('/{language}/gas-metre-calibrator', [WmaController::class, 'gas_metre_calibrator'])
    ->name('gas-metre-calibrator');

Route::get('/{language}/scale_manufacture', [WmaController::class, 'scale_manufacture'])
    ->name('scale-manufacture');

Route::get('/{language}/tank-calibrator', [WmaController::class, 'tanK_calibrator'])
    ->name('tank-calibrator');

Route::get('/{language}/tank-constructor', [WmaController::class, 'tanK_constructor'])
    ->name('tank-constructor');

Route::get('/{language}/pressure-gauge-and-value-calibrator', [WmaController::class, 'pressue_gauge_and_value_calibrator'])
    ->name('pressure-gauge-and-value-calibrator');

Route::get('/{language}/fuel-measurement-survey', [WmaController::class, 'fuel_measurement_survey'])
    ->name('fuel-measurement-survey');

Route::get('/{language}/sections', [WmaController::class, 'sections'])
    ->name('section');

Route::get('/{language}/units', [WmaController::class, 'units'])
    ->name('unit');

Route::get('/{language}/board-member', [WmaController::class, 'board_member'])
    ->name('board-member');

Route::get('/{language}/wma-management', [WmaController::class, 'wma_management'])
    ->name('wma-management');

Route::get('/{language}/tender', [WmaController::class, 'tender'])
    ->name('tender');

Route::get('/{language}/regianal-office', [WmaController::class, 'regional_office'])
    ->name('regional-office');

Route::get('/{language}/audit-report-2018-2019', [WmaController::class, 'audit_report_2018_2019'])
    ->name('audit-report-2018-2019');

Route::get('/{language}/audit-report-2019-2020', [WmaController::class, 'audit_report_2019_2020'])
    ->name('audit-report-2019-2020');

Route::get('/{language}/audit-report-2020-2021', [WmaController::class, 'audit_report_2020_2021'])
    ->name('audit-report-2020-2021');

Route::get('/{language}/audit-report-2021-2022', [WmaController::class, 'audit_report_2021_2022'])
    ->name('audit-report-2021-2022');

Route::get('/{language}/audit-report-2022-2023', [WmaController::class, 'audit_report_2022_2023'])
    ->name('audit-report-2022-2023');

// audit-report.dynamic
Route::get('{language}/audit-report/{slug}', [WmaController::class, 'audit_report_dynamic'])
    ->name('audit-report.dynamic');

Route::get('/{language}/miscalleneous-amendment-act', [WmaController::class, 'miscalleneous_amendment_act'])
    ->name('miscalleneous-amendment-act');

Route::get('/{language}/technical-manual', [WmaController::class, 'technical_manual'])
    ->name('technical-manual');

Route::get('/{language}/establishment-order', [WmaController::class, 'establishment_order'])
    ->name('establishment-order');

Route::get('/{language}/framework-document', [WmaController::class, 'framework_document'])
    ->name('framework-document');

Route::get('/{language}/client-service-charter', [WmaController::class, 'client_service_charter'])
    ->name('client-service-charter');

Route::get('/{language}/application-form-for-tank-calibrator', [WmaController::class, 'application_form_for_tank_calibrator'])
    ->name('application-form-for-tank-calibrator');

Route::get('/{language}/form-d-for-pump-mechanics', [WmaController::class, 'form_d_for_pump_mechanics'])
    ->name('form-d-for-pump-mechanics');

Route::get('/{language}/application-form-for-licencing-scale', [WmaController::class, 'application_form_for_licencing_scale'])
    ->name('application-form-for-licencing-scale');

Route::get('/{language}/compounding-form', [WmaController::class, 'compounding_form'])
    ->name('compounding-form');

Route::get('/{language}/video', [WmaController::class, 'video'])
    ->name('video');

Route::get('/{language}/gallaries', [WmaController::class, 'gallaries'])
    ->name('gallaries');

Route::get('/{language}/pressrelease', [WmaController::class, 'pressrelease'])
    ->name('pressrelease');

Route::get('/{language}/vacancies', [WmaController::class, 'vacancies'])
    ->name('vacancies');

Route::get('/{language}/faqs', [WmaController::class, 'faqs'])
    ->name('faqs');

Route::get('/{language}/request_for_license_procedures', [WmaController::class, 'request_for_license_procedures'])
    ->name('request_for_license_procedures');

Route::get('/{language}/speeches', [WmaController::class, 'speeches'])
    ->name('speeches');

Route::get('/{language}/brochures', [WmaController::class, 'brochures'])
    ->name('brochures');

Route::get('/{language}/posters', [WmaController::class, 'posters'])
    ->name('posters');

Route::get('/{language}/newsletter', [WmaController::class, 'newsletter'])
    ->name('newsletter');

// forms
Route::get('form/{language}/{slug}', [WmaController::class, 'dynamic_forms'])
    ->name('form');

// publications
Route::get('publication/{language}/{slug}', [WmaController::class, 'dynamic_publications'])
    ->name('publication');

//Services
Route::get('/{language}/service_details/{slug}', [WmaController::class, 'service_details'])
    ->name('service_details');

Route::get('/{language}/event_details/{slug}', [WmaController::class, 'event_details'])
    ->name('event_details');

Route::get('/{language}/announcement_details/{slug}', [WmaController::class, 'announcement_details'])
    ->name('announcement_details');

Route::get('/{language}/new_details/{slug}', [WmaController::class, 'new_details'])
    ->name('new_details');

Route::get('/{language}/how_do_i_1/{slug}', [WmaController::class, 'how_do_i_1'])
    ->name('how_do_i_1');

Route::get('/{language}/how_do_i_2', [WmaController::class, 'how_do_i_2'])
    ->name('how_do_i_2');

Route::get('/{language}/all_announcements/', [WmaController::class, 'all_announcements'])
    ->name('all_announcements');

Route::get('/{language}/welcome_note/', [WmaController::class, 'welcome_note'])
    ->name('welcome_note');
Route::get('/{language}/all_events/', [WmaController::class, 'all_events'])
    ->name('all_events');

Route::get('/{language}/all_news/', [WmaController::class, 'all_news'])
    ->name('all_news');

Route::get('/{language}/all_services/', [WmaController::class, 'all_services'])
    ->name('all_services');
