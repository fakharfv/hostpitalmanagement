<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/', function () {
    return redirect(route('login'));
});
Route::group(['middleware' => ['web']], function () {

    Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

    Route::group(['prefix' => 'patient', 'as' => 'patient.'], function () {
        Route::get('/list', [PatientController::class, 'index'])->name('list');
        Route::post('/filter/patients', [PatientController::class, 'filterPatient'])->name('filterPatient');
        Route::get('/patient/search', [PatientController::class, 'listPatients'])->name('search');
        Route::get('/details/{id}', [PatientController::class, 'show'])->name('show');
        Route::get('/create', [PatientController::class, 'create'])->name('create');
        Route::post('/store', [PatientController::class, 'store'])->name('store');
    });
    Route::group(['prefix' => 'provider', 'as' => 'provider.'], function () {
        Route::get('/list', [ProviderController::class, 'index'])->name('list');
        Route::get('/create', [ProviderController::class, 'create'])->name('create');
        Route::post('/store', [ProviderController::class, 'store'])->name('store');
        Route::get('/{provider}/edit', [ProviderController::class, 'edit'])->name('edit');
        Route::put('/{provider}/update', [ProviderController::class, 'update'])->name('update');
    });

    Route::group(['prefix' => 'setting', 'as' => 'setting.'], function () {
        Route::get('/list', [SettingController::class, 'index'])->name('show');

        Route::get('/patient/types', [SettingController::class, 'listPatientTypes'])->name('listPatientTypes');
        Route::post('/patient/type/create', [SettingController::class, 'createPatientTypes'])->name('createPatientTypes');

        Route::get('/provider/types', [SettingController::class, 'listProviderTypes'])->name('listProviderTypes');
        Route::post('/provider/type/create', [SettingController::class, 'createProviderTypes'])->name('createProviderTypes');

        Route::get('/appointment/types', [SettingController::class, 'listAppointmentTypes'])->name('listAppointmentTypes');
        Route::post('/appointment/type/create', [SettingController::class, 'createAppointmentTypes'])->name('createAppointmentTypes');

        Route::get('/lab/types', [SettingController::class, 'listLabTypes'])->name('listLabTypes');
        Route::post('/lab/type/create', [SettingController::class, 'createLabTypes'])->name('createLabTypes');

        Route::get('/charge/types', [SettingController::class, 'listChargeTypes'])->name('listChargeTypes');
        Route::post('/charge/type/create', [SettingController::class, 'createChargeTypes'])->name('createChargeTypes');

        Route::get('/expense/types', [SettingController::class, 'listExpenseTypes'])->name('listExpenseTypes');
        Route::post('/expense/type/create', [SettingController::class, 'createExpenseTypes'])->name('createExpenseTypes');

        Route::get('/refund/types', [SettingController::class, 'listRefundTypes'])->name('listRefundTypes');
        Route::post('/refund/type/create', [SettingController::class, 'createRefundTypes'])->name('createRefundTypes');
    });

    Route::group(['prefix' => 'document', 'as' => 'document.'], function () {
        Route::get('/list', [DocumentController::class, 'index'])->name('list');
    });

    Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
    Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});
