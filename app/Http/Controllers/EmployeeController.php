<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;
use App\Models\department;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee=employee::all();
        return view('employee.index',compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $department=department::all();
        return view('employee.create',compact('department'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,employee $employee)
    {
        $request->validate([
            'name'=>'required|min:3',
            'email'=>'required',
            'password'=>'required',
            'phoneno'=>'required',
            // 'role'=>'required',
        ],
        [
            'required.name'=>'Please Enter Employee Name..',
            'min.name'=>'Please Enter Atleast # character..',
            'required.email'=>'Please Enter Email..',
            'required.password'=>'Please Enter A Password..',
            'required.phoneno'=>'Please Enter Phone Number..',
            // 'required.role'=>'Please Enter Employee Role..'
        ]
        );
        employee::create($request->all());
        return redirect()->route('employee.index')->with('success','Employee Record Added Successfully..');
    }

    /**
     * Display the specified resource.
     */
    public function show(employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(employee $employee,department $department)
    {
        $department=department::all();
        return view('employee.edit')->with('data',$employee)->with('data1',$department);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, employee $employee)
    {
        $request->validate([
            'name'=>'required|min:3',
            'email'=>'required',
           
            'phoneno'=>'required',
           
        ],
        [
            'required.name'=>'Please Enter Employee Name..',
            'required.email'=>'Please Enter Email..',
           
            'required.phoneno'=>'Please Enter Phone Number..',
            
        ]
        );
        $employee->update($request->all());
        return redirect()->route('employee.index')->with('success','Employee Record Updated Successfully..');
 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(employee $employee)
    {
        //
    }
}
