<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Data;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PostController;
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

Route::get('E-master', function () {
    return view('Attendence.Employe_master');
});
Route::any('master', [Data::class,'master']);


Route::get('B-add', function () {
    return view('Attendence.Branch_add');
});
Route::any('add',[Data::class,'adding']);

Route::get('B-list', function () {
    return view('Attendence.Branch_list');
});
Route::any('Branch_list',[Data::class,'list_B']);

Route::any('delete/{id}',[Data::class,'delete']);

Route::any('edit/{id}',[Data::class,'edit']);

Route::any('/update',[Data::class,'update']);

Route::get('add_emp', function () {
    return view('Attendence.Add_Employe');
});
Route::any('adding_emp',[Data::class,'emp_adding']);

Route::any('Emp_master',[Data::class,'Emp_master']);

Route::any('status_update/{Empid}',[Data::class,'status_update']);

Route::any('timeedit/{id}',[Data::class,'time_edit']);

Route::any('time',[Data::class,'upd_time']);

Route::get('Add_holiday', function () {
    return view('Add_holiday');
});
 Route::any('holiday',[Data::class,'add_holiday']);

 Route::get('match', function () {
    return view('match _employe');  
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth']], function() {
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('posts', PostController::class);
});