<?php

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
Route::get("/", 'LoginController@showHomePage');
Route::get("/dashboard",'DashboardController@view');
Route::get("/postjob",'PostJobController@view');
Route::get("/allstudent",'AllStudentController@view');
Route::get("/listjobpost",'ListJobPostController@view');
Route::get("/companylist",'CompanyListController@view');
Route::get("/companydetail",'CompanyDetailController@view');