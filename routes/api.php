<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//get all employees
Route::get('employees', 'App\Http\Controllers\EmployeeController@getEmployee');

//get specific employee
Route::get('employee/{id}', 'App\Http\Controllers\EmployeeController@getEmployeeById');

//add employee
Route::post('addEmployee', 'App\Http\Controllers\EmployeeController@addEmployee');

//update employee
Route::put('updateEmployee/{id}', 'App\Http\Controllers\EmployeeController@updateEmployee');

//delete employee
Route::delete('deleteEmployee/{id}', 'App\Http\Controllers\EmployeeController@deleteEmployee');