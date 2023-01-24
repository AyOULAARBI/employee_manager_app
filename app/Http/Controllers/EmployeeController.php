<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;


class EmployeeController extends Controller
{
    function getAll(){
        $employees = Employee::all();
        return view('Employees',['employees'=>$employees]);
    }
}
