@extends('admintheme.admin')
@section('content')


<div class="row">
        <div class="col-lg-12">
          <div class="card card-outline">
            <div class="card-header bg-blue">
              <h5 class="text-white m-b-0">Create Department </h5>
            </div>
            <div class="card-body">
                
    <form action="{{route('employee.update',$data->empid)}}" method="post">
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
                    <label for="">Name:</label>
                    <input type="text" name="name" value="{{$data->name}}">
                </div>
                <div class="form-group">
                    <label for="">Email:</label>
                    <input type="text" name="email" value="{{$data->email}}">
                </div>
                <div class="form-group">
                    <label for="">Phone No:</label>
                    <input type="number" name="phoneno" value="{{$data->phoneno}}">
                </div>
                <div class="form-group">
                    <label for="">Role:</label>
                    <select name="department" id="department">
                        @foreach($data1 as $dept)
                        @if($data->department==$dept->deptid)
                        <option value="{{$dept->deptid}}" selected>{{$dept->name}}</option>
                        @else
                        <option value="{{$dept->deptid}}">{{$dept->name}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="submit" class="btn btn-success">
                </div>
            </div>
        </div>
    </form>
    </div>
          </div>
        </div>
      </div>

    @endsection
