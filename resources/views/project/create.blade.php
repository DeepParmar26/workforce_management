@extends('admintheme.admin')
@section('content')


<div class="row">
        <div class="col-lg-12">
          <div class="card card-outline">
            <div class="card-header bg-blue">
              <h5 class="text-white m-b-0">Create Project </h5>
            </div>
            <div class="card-body">


    <form action="{{route('project.store')}}" method="post">
        @csrf
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
                    <input type="text" name="projecttitle" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Project Description:</label>
                    <textarea name="projectdesc" id="projectdesc" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Start Date:</label>
                    <input type="date" name="startdate" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">End Date:</label>
                    <input type="date" name="enddate" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Customer Id:</label>
                    <select name="customerid" id="customerid">
                        @foreach($customer as $data)
                        <option value="{{$data->customerid}}">{{$data->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Status:</label>
                    <input type="text" name="status" id="" class="form-control">
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
