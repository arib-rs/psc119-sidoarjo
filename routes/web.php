<?php

use App\Http\Controllers\LoginsController;
use App\Http\Controllers\DashboardsController;
use App\Http\Controllers\InputIncidentsController;
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
use App\Http\Controllers\RShiftsController;
use App\Http\Controllers\PatientDatasController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\ShowMapsController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LoginsController::class, 'index']);

Route::get('/dashboard', [DashboardsController::class, 'index']);

Route::get('/detail_penanganan', [DetailHandlingsController::class, 'index']);

Route::get('/input_kejadian', [InputIncidentsController::class, 'index']);

Route::get('/req_bantuan', [RequestAssistsController::class, 'index']);

Route::get('/edit_laporan', [EditReportsController::class, 'index']);

Route::get('/edit_kejadian', [EditIncidentsController::class, 'index']);

Route::get('/konfirmasi_penugasan', [AssignmentConfirmationsController::class, 'index']);

Route::get('/rekap_shift', [RecapShiftsController::class, 'index']);

Route::get('/monitoring_alarm', [MonitoringAlarmsController::class, 'index']);

Route::get('/penanganan_kejadian', [IncidentHandlingsController::class, 'index']);

Route::get('/monitoring_resources', [MonitoringResourcesController::class, 'index']);

Route::get('/laporan_kejadian', [ReportIncidentsController::class, 'index']);

Route::get('/rekap_kejadian', [RecapIncidentsController::class, 'index']);

Route::get('/rekap_bantuan', [RecapAssistsController::class, 'index']);

Route::get('/rekap_penolakan_pembatalan', [RecapRejectionCancellationsController::class, 'index']);

Route::get('/rekap_perawat', [RecapNursesController::class, 'index']);

Route::get('/rekap_ambulan_offline', [RecapAmbulancesController::class, 'index']);

Route::get('/personil', [PersonsController::class, 'index']);

Route::get('/management_user', [UsersController::class, 'index']);

Route::get('/devicelist', [DevicesController::class, 'index']);

Route::get('/emergency_button_user', [EmergencyButtonUsersController::class, 'index']);

Route::get('/faskes', [HealthFacilitiesController::class, 'index']);

Route::get('/ambulan', [ResourcesController::class, 'index']);

Route::get('/spesialisasi_dokter', [SpecialistsController::class, 'index']);

Route::get('/kategori', [CategoriesController::class, 'index']);

Route::get('/sub_kategori', [SubCategoriesController::class, 'index']);

Route::get('/obat', [MedicinesController::class, 'index']);

Route::get('/shift', [RShiftsController::class, 'index']);

Route::get('/pasien', [PatientDatasController::class, 'index']);

Route::get('/task', [TasksController::class, 'index']);

Route::get('/peta', [ShowMapsController::class, 'index']);
