<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Data;
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

Route::get('/', function () {
    return view('auth.login');
});
Route::get('dash', function () {
    return view('Attendence.dashborad');
});
Route::get('show_import', function () {
    return view('Attendence.import');
});
Route::any('import', [Data::class,'import']);

Route::get('show_table', function () {
    return view('Attendence.fetch');
});
Route::any('fetch', [Data::class,'fetch']);


Route::get('list', function () {
    return view('Attendence.list');
});
Route::any('emplist', [Data::class,'show']);

Route::get('employ', function () {
    return view('Attendence.month_attendence');
});
Route::any('month_list', [Data::class,'M_list']);


Route::any('search', [Data::class,'employ']);

Route::any('late_attendence', [Data::class,'late_employ']);

Route::any('search_month', [Data::class,'employ_month']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
