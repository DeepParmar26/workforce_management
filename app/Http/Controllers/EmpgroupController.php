<?php

namespace App\Http\Controllers;

use App\Models\empgroup;
use Illuminate\Http\Request;

class EmpgroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empgroup=empgroup::all();
        return view('empgroup.index',compact('empgroup'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('empgroup.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,empgroup $empgroup)
    {
        $request->validate([
            'groupname'=>'required',
            'description'=>'required'
        ],
        [
            'groupname.required'=>'Please Enter Group Name..',
            'description.required'=>'Please Enter Description..',
        ]
        );
        empgroup::create($request->all());
        return redirect()->route('empgroup.index')->with('success','Record Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(empgroup $empgroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(empgroup $empgroup)
    {
        return view('empgroup.edit')->with('data',$empgroup);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, empgroup $empgroup)
    {
        $request->validate([
            'groupname'=>'required',
            'description'=>'required'
        ],
        [
            'groupname.required'=>'Please Enter Group Name..',
            'description.required'=>'Please Enter Description..',
        ]
        );
        $empgroup->update($request->all());
        return redirect()->route('empgroup.index')->with('success','Record Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(empgroup $empgroup)
    {
        //
    }
}
