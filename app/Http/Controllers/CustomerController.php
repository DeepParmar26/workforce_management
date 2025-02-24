<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customer=customer::all();
        return view('customer.index',compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3',
            'email'=>'required|min:5',
            'phone'=>'required|min:10',
            'address'=>'required|min:5'
        ],
        [
            'name.required'=>'Enter Your Name...',
            'name.min'=>'Enter Atleast 3 Character in Name..',
            'email.required'=>'Enter Your email...',
            'email.min'=>'Enter Atleast 5 Character in email..',
            'phone.required'=>'Enter Your Phone NO...',
            'phone.min'=>'Enter Only 10 Number in Phone No..',
            'address.required'=>'Enter Your Address...',
            'address.min'=>'Enter Atleast 5 Character in Address..',


        ]
        );
        customer::create($request->all());
        return redirect()->route('customer.index')->with('success','Record Added Successfully..');
    }

    /**
     * Display the specified resource.
     */
    public function show(customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(customer $customer)
    {
       
        return view('customer.edit')->with('data',$customer);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, customer $customer)
    {
        $request->validate([
            'name'=>'required|min:3',
            'email'=>'required|min:5',
            'phone'=>'required|min:10',
            'address'=>'required|min:5'
        ],
        [
            'name.required'=>'Enter Your Name...',
            'name.min'=>'Enter Atleast 3 Character in Name..',
            'email.required'=>'Enter Your email...',
            'email.min'=>'Enter Atleast 5 Character in email..',
            'phone.required'=>'Enter Your Phone NO...',
            'phone.min'=>'Enter Only 10 Number in Phone No..',
            'address.required'=>'Enter Your Address...',
            'address.min'=>'Enter Atleast 5 Character in Address..',


        ]
        );
        $customer->update($request->all());
        return redirect()->route('customer.index')->with('success','Record Updated Successfully..');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(customer $customer)
    {
        //
    }
}
