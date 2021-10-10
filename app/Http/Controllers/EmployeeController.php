<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeController extends Controller
{
    // all employees
    public function index()
    {
        $employees = Employee::all()->toArray();
        return array_reverse($employees);
    }

    // add employee
    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'designation' =>'required'
        ]);

        $employee = new Employee([
            'name' => $request->input('name'),
            'designation' => $request->input('designation')
        ]);
        $employee->save();

        return response()->json('Employee successfully added');
    }

    // edit employee
    public function edit($id)
    {
        $employee = Employee::find($id);
        return response()->json($employee);
    }

    // update employee
    public function update($id, Request $request)
    {
        $request->validate([
            'name' =>'required',
            'designation' =>'required'
        ]);

        $employee = Employee::find($id);
        $employee->name =$request->name;
        $employee->designation =$request->designation;
        $employee->update();

        return response()->json('employee successfully updated');
    }

    // delete employee
    public function delete($id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        return response()->json('employee successfully deleted');
    }
}
