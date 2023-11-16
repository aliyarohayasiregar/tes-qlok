<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Models\Employee;


Route::get('/', function () {
    $employees = Employee::all();
    return view('employees.index', compact('employees'));
});




//tambah
Route::get('/employee/create', [EmployeeController::class, 'createForm'])->name('employee.createForm');
Route::post('/employee/add', [EmployeeController::class, 'addEmployee'])->name('employee.addEmployee');


// edit
Route::get('/employee/edit/{id}', [EmployeeController::class, 'editForm'])->name('employee.editForm');
Route::put('/employee/update/{id}', [EmployeeController::class, 'updateEmployee'])->name('employee.updateEmployee');

//detail
Route::get('/employee/show/{id}', [EmployeeController::class, 'showDetails'])->name('employee.showDetails');
Route::get('/employee/index', [EmployeeController::class, 'index'])->name('employee.index');

Route::get('/employee/createDetails/{id}', [EmployeeController::class, 'createDetailsForm'])->name('employee.createDetailsForm');
Route::post('/employee/storeDetails/{id}', [EmployeeController::class, 'storeDetails'])->name('employee.storeDetails');

Route::get('/employee/showDetails/{id}', [EmployeeController::class, 'showEmployeeDetails'])->name('employee.showEmployeeDetails');
//hapus
Route::delete('/employee/destroy/{id}', [EmployeeController::class, 'destroy'])->name('employee.destroy');
