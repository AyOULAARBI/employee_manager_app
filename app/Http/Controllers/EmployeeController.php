<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;


class EmployeeController extends Controller
{
    function index(){
        $employees = Employee::all();
        return view('Employees.index',['employees'=>$employees]);
    }
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $this->validate($request,[
            'registration_num' => 'required|numeric|unique:employees,registration_num',
        'full_name' => 'required',
        'address' => 'required',
        'city' => 'required',
        'email' => 'required|unique:employees',
        'phone' => 'required',
        'departement' => 'required',
        'hired_at' => 'required',
        ]);
        Employee::create($request->except('_token'));
        return redirect()->route('employees.index')->with(['success'=>'Employee added successfully']);
    }

    public function show($id)
    {
        $employee = Employee::where('id',$id)->first();
        return view('Employees.show')->with(['employee'=>$employee]);
    }

    public function edit($id)
    {
        $employee = Employee::where('id',$id)->first();
        return view('Employees.edit',['employee'=>$employee]);
    }

    
    public function update(Request $request, $id)
    {
        $employee = Employee::where('id',$id)->first();
        $this->validate($request,[
            'registration_num' => 'required|numeric|unique:employees,registration_num,'.$employee->registration_num,
        'full_name' => 'required',
        'address' => 'required',
        'city' => 'required',
        'email' => 'required|unique:employees,email,'.$employee->email,
        'phone' => 'required',
        'departement' => 'required',
        'hired_at' => 'required',
    ]);
        $employee->update($request->except('_token','_method'));
        return redirect()->route('employees.index')->with(['success'=>'Employee updated successfully']);

    }

    public function destroy(Request $request,$id)
    {
        $employee = Employee::where('id',$id)->first();
        $employee->delete();
        return redirect()->route('employees.index')->with(['success'=>'Employee DELETED successfully']);
    }
    public function vacationReq($id){
        $emp = Employee::where('id',$id)->first();
        return view('Employees.vacationRequest')->with(['employee'=>$emp]);
    }
    public function workCert($id){
        $emp = Employee::where('id',$id)->first();
        return view('Employees.workCert')->with(['employee'=>$emp]);
    }
}

