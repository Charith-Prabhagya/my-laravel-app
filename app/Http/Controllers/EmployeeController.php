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
}
