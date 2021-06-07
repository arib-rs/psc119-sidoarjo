<?php


use App\Http\Controllers\LoginsController;
use App\Http\Controllers\DashboardsController;
// use App\Http\Controllers\InputIncidentsController;
use App\Http\Controllers\RequestAssistsController;
use App\Http\Controllers\DetailHandlingsController;
use App\Http\Controllers\EditReportsController;
use App\Http\Controllers\EditIncidentsController;
use App\Http\Controllers\AssignmentConfirmationsController;
use App\Http\Controllers\RecapShiftsController;
use App\Http\Controllers\MonitoringAlarmsController;
use App\Http\Controllers\IncidentHandlingsController;
use App\Http\Controllers\MonitoringResourcesController;
use App\Http\Controllers\ReportIncidentsController;
use App\Http\Controllers\RecapIncidentsController;
use App\Http\Controllers\RecapAssistsController;
use App\Http\Controllers\RecapRejectionCancellationsController;
use App\Http\Controllers\RecapNursesController;
use App\Http\Controllers\RecapAmbulancesController;
use App\Http\Controllers\PersonsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DevicesController;
use App\Http\Controllers\EmergencyButtonUsersController;
use App\Http\Controllers\HealthFacilitiesController;
use App\Http\Controllers\ResourcesController;
use App\Http\Controllers\SpecialistsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\SubCategoriesController;
use App\Http\Controllers\MedicinesController;
use App\Http\Controllers\RshiftsController;
use App\Http\Controllers\PatientDatasController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\ShowMapsController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LoginsController::class, 'index']);

Route::resources([
    'dashboard' => 'DashboardsController',
    'detail_penanganan' => 'DetailHandlingsController',
    'input_kejadian' => 'InputIncidentsController',
    'req_bantuan' => 'RequestAssistsController',
    'edit_laporan' => 'EditReportsController',
    'edit_kejadian' => 'EditIncidentsController',
    'konfirmasi_penugasan' => 'AssignmentConfirmationsController',
    'rekap_shift' => 'RecapShiftsController',
    'monitoring_alarm' => 'MonitoringAlarmsController',
    'penanganan_kejadian' => 'IncidentHandlingsController',
    'monitoring_resources' => 'MonitoringResourcesController',
    'laporan_kejadian' => 'ReportIncidentsController',
    'rekap_kejadian' => 'RecapIncidentsController',
    'rekap_bantuan' => 'RecapAssistsController',
    'rekap_penolakan_pembatalan' => 'RecapRejectionCancellationsController',
    'rekap_perawat' => 'RecapNursesController',
    'rekap_ambulan_offline' => 'RecapAmbulancesController',
    'personil' => 'PersonsController',
    'management_user' => 'UsersController',
    'devicelist' => 'DevicesController',
    'emergency_button_user' => 'EmergencyButtonUsersController',
    'faskes' => 'HealthFacilitiesController',
    'ambulan' => 'ResourcesController',
    'spesialisasi_dokter' => 'SpecialistsController',
    'kategori' => 'CategoriesController',
    'sub_kategori' => 'SubCategoriesController',
    'obat' => 'MedicinesController',
    'shift' => 'RshiftsController',
    'pasien' => 'PatientDatasController',
    'task' => 'TasksController',
    'peta' => 'ShowMapsController'
]);
