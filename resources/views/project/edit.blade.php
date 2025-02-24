@extends('admintheme.admin')
@section('content')


<div class="row">
        <div class="col-lg-12">
          <div class="card card-outline">
            <div class="card-header bg-blue">
              <h5 class="text-white m-b-0">Create Department </h5>
            </div>
            <div class="card-body">

    <form action="{{route('project.update',$data->projectid)}}" method="post">
        @csrf
        @method('PUT')
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        
                <div class="form-group">
                    <label for="">Project Title:</label>
                    <input type="text" name="projecttitle" id="" value="{{$data->projecttitle}}">
                </div>
                <div class="form-group">
                    <label for="">Project Description:</label>
                    <input type="text" name="projectdesc" id=""  value="{{$data->projectdesc}}">
                </div>
                <div class="form-group">
                    <label for="">Start Date:</label>
                    <input type="text" name="startdate" id=""  value="{{$data->startdate}}">
                </div>
                <div class="form-group">
                    <label for="">End Date:</label>
                    <input type="text" name="enddate" id=""  value="{{$data->enddate}}">
                </div>
                <div class="form-group">
                    <label for="">Customer Id:</label>
                    <select name="customerid" id="customerid">
                        @foreach($data1 as $cust)
                        @if($data->customer==$cust->customerid)
                        <option value="{{$cust->customerid}}" selected>{{$cust->name}}</option>
                        @else
                        <option value="{{$cust->customerid}}">{{$cust->name}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Status:</label>
                    <input type="text" name="status" id=""  value="{{$data->status}}">
                </div>
                <div class="form-group">
                     <input type="submit" name="submit" value="Submit" class="btn btn-success">
                </div>
            </div>
        </div>
    </form>

    </div>
          </div>
        </div>
      </div>

    @endsection