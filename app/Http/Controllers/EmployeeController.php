<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all(); // Fetch all rows from DB
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create'); // Show the form
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'department' => 'required'
        ]);

        \App\Models\Employee::create($request->only('name', 'email', 'department'));

        return redirect('/employees')->with('success', 'Employee added successfully!');
    }
}
