<?php

namespace App\Http\Controllers;

use App\Models\department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $department=department::all();
        return view('department.index',compact('department'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('department.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,department $department)
    {
        $request->validate([
            'name'=>'required|min:3',
            'description'=>'required|min:5'
        ],
        [
            'name.required'=>'Please Enter Derpartment Name..',
            'name.min'=>'Pleaase enter Atleast 3 Character..',
            'description.required'=>'Please Enter Description..',
            'description.min'=>'Pleaase enter Atleast 5 Character..'

        ]
        );
        department::create($request->all());
        return redirect()->route('department.index')->with('success','Department Record Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(department $department)
    {
       
        return view('department.edit')->with('data',$department);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, department $department)
    {
        $request->validate([
            'name'=>'required|min:3',
            'description'=>'required|min:5'
        ],
        [
            'name.required'=>'Please Enter Derpartment Name..',
            'name.min'=>'Pleaase enter Atleast 3 Character..',
            'description.required'=>'Please Enter Description..',
            'description.min'=>'Pleaase enter Atleast 5 Character..'

        ]
        );
        $department->update($request->all());
        return redirect()->route('department.index')->with('success','Department Record updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(department $department)
    {
        $department->delete();
        return redirect()->route('department.index')->with('success','Record Deleted Successfully..');
    }
}
