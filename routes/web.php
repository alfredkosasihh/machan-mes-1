<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::get('/', function () {
    return redirect('login');
});

Route::group(['middleware' => ['auth']], function () {

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/resource', 'ResourceController@index')->name('resource');
    Route::resource('machine-category', 'MachineCategoryController')->except('show');
    
    Route::post('/rest-time/{id}', 'RestTimeController@createData');
    Route::resource('rest-time', 'RestTimeController')->except('show');
    Route::put('/rest-time/{id}/setup/{setup_id}', 'RestTimeController@updateData')->name('update-data');
    Route::delete('/rest-time/{id}/setup/{setup_id}', 'RestTimeController@deleteData')->name('delete-data');
    Route::resource('work-type', 'WorkTypeController')->except('show');
    Route::resource('machine-definition', 'MachineDefinitionController')->except('show');;
    Route::resource('processing-time', 'ProcessingTimeController')->except('show');;

    Route::resource('variable-formula', 'VariableFormulaController')->except('show');
    Route::resource('formula-setting', 'FormulaSettingController')->except('show');
    Route::resource('machineoee', 'MachineOeeController')->except('show');

    Route::get('machineperformance/search', 'api\ResourceController@searchdate')->name('search_machineperformance');
    Route::get('dayperformance/search', 'DayPerformanceStatisticsController@searchdate')->name('search_dayperformance_date');
    Route::get('/OEEperformance/search', 'OEEperformanceController@searchdate')->name('search_OEEperformance_date');
    Route::get('machineperformance', 'api\ResourceController@show')->name('show_machineperformance');
    Route::get('dayperformance', 'DayPerformanceStatisticsController@show')->name('show_dayperformance');
    Route::get('/OEEperformance', 'OEEperformanceController@show')->name('show_OEEperformance');
    
    Route::get('/sale-order', 'SaleOrderController@index')->name('sale-order');
    Route::get('/sale-order-result-form', 'SaleOrderController@synchroizedForm')->name('sale-order-result-form');
    Route::get('/manufacture-result', 'ManufactureController@manufactureResult')->name('manufacture-result');
    Route::get('/search-manufacture', 'ManufactureController@index')->name('search-manufacture');
    Route::get('/get-manufacture', 'ManufactureController@getManufactureData')->name('get-manufacture');
  
    Route::group(['prefix' => 'process-routing'], function () {
        Route::get('/', 'ProcessRoutingController@index')->name('process-routing.index');
        Route::put('/{id}', 'ProcessRoutingController@update')->name('process-routing.update');
        Route::get('/sync', 'ProcessRoutingController@syncProcessRouting')->name('syncProcessRouting');
        Route::get('/index', 'ProcessRoutingController@processRoutingIndex')->name('ProcessRoutingIndex');
    });

    Route::get('/full-calendar', 'CalendarController@fullCalendar')->name('full-calendar');
    Route::get('/year-calendar', 'CalendarController@yearcalendar')->name('year-calendar');
    Route::get('/process-calendar', 'ProcessCalendarController@processcalendar')->name('process-calendar');
    Route::get('/adjust-process-calendar', 'ProcessCalendarController@showProcessCalendar')->name('show-process-calendar');
        
});



