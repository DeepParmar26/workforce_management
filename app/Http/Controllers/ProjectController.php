<?php

namespace App\Http\Controllers;

use App\Models\project;
use Illuminate\Http\Request;
use App\Models\customer;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $project=project::all();
        return view('project.index',compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customer=customer::all();
        return view('project.create',compact('customer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,project $project)
    {
        $request->validate([
            'projecttitle'=>'required|min:3',
            'projectdesc'=>'required|min:5',
            'startdate'=>'required',
            'enddate'=>'required',
            'customerid'=>'required',
            'status'=>'required'
        ],
        [
            'projecttitle.required'=>'Please Enter Project Title..',
            'projecttitle.min'=>'Please Enter Atleast 3 Character in Title',
            'projectdesc.required'=>'Please Enter Project Description..',
            'projectdesc.min'=>'Please Enter Atleast 5 Character in Descriptipon',
            'startdate.required'=>'Please Enter Start Date..',
            'enddate.required'=>'Please Enter end Date..',
            'customerid.required'=>'Please select value..',
            
            'status.required'=>'Please Enter Status..',
        ]
    );
        project::create($request->all());
        return redirect()->route('project.index')->with('success','Record Added Succesfully..');
    }

    /**
     * Display the specified resource.
     */
    public function show(project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(project $project,customer $customer)
    {
        $customer=customer::all();
        return view('project.edit')->with('data',$project)->with('data1',$customer);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, project $project)
    {
        $request->validate([
            'projecttitle'=>'required|min:3',
            'projectdesc'=>'required|min:5',
            'startdate'=>'required',
            'enddate'=>'required',
            'customerid'=>'required',
            'status'=>'required'
        ],
        [
            'projecttitle.required'=>'Please Enter Project Title..',
            'projecttitle.min'=>'Please Enter Atleast 3 Character in Title',
            'projectdesc.required'=>'Please Enter Project Description..',
            'projectdesc.min'=>'Please Enter Atleast 5 Character in Descriptipon',
            'startdate.required'=>'Please Enter Start Date..',
            'enddate.required'=>'Please Enter end Date..',
            'customerid.required'=>'Please select value..',
            
            'status.required'=>'Please Enter Status..',
        ]
    );
        $project->update($request->all());
        return redirect()->route('project.index')->with('success','Record Updated Succesfully..');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(project $project)
    {
        //
    }
}
