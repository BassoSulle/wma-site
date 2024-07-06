<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WmaController;

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
