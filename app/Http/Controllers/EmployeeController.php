<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{

    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function createForm()
    {
        return view('employees.create');
    }

    public function addEmployee(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'dob' => 'required|date',
            'status' => 'required|string',
            'join_date' => 'required|date',
        ]);
        

        // Create employee
        Employee::create([
            'name' => $request->input('name'),
            'dob' => $request->input('dob'),
            'status' => $request->input('status'),
            'join_date' => $request->input('join_date'),
        ]);

        return redirect()->route('employee.createForm')->with('success', 'Employee added successfully!');
    }


    public function editForm($id)
    {
        $employee = Employee::findOrFail($id);

        return view('employees.edit', compact('employee'));
    }

    public function updateEmployee(Request $request, $id)
    {
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'dob' => 'required|date',
            'status' => 'required|string',
            'join_date' => 'required|date',
        ]);

        // Update employee
        $employee = Employee::findOrFail($id);
        $employee->update([
            'name' => $request->input('name'),
            'dob' => $request->input('dob'),
            'status' => $request->input('status'),
            'join_date' => $request->input('join_date'),
        ]);

        return redirect()->route('employee.editForm', $id)->with('success', 'Employee updated successfully!');
    }

    public function showDetails($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.details', compact('employee'));
    }


    public function showEmployeeDetails($id)
    {
        $employee = Employee::findOrFail($id);
        $employeeDetail = $employee->details;

        return view('employees.employee_details', compact('employee', 'employeeDetail'));
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('employee.index')->with('success', 'Employee deleted successfully!');
    }



    //datails
    public function createDetailsForm($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.createDetails', compact('employee'));
    }

    public function storeDetails(Request $request, $id)
    {
        $request->validate([
            'experience' => 'required|integer',
            'job_title' => 'required',
            'job_desc' => 'required',
        ]);

        $employee = Employee::findOrFail($id);

        $employee->details()->create([
            'experience' => $request->input('experience'),
            'job_title' => $request->input('job_title'),
            'job_desc' => $request->input('job_desc'),
        ]);

        return redirect()->route('employee.showEmployeeDetails', $employee->id)
            ->with('success', 'Employee details added successfully');
    }
}
