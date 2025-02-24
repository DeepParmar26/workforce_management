@extends('admintheme.admin')
@section('content')


<div class="row">
        <div class="col-lg-12">
          <div class="card card-outline">
            <div class="card-header bg-blue">
              <h5 class="text-white m-b-0">Create Employee </h5>
            </div>
            <div class="card-body">

    <form action="{{route('employee.store')}}" method="post">
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
                    <label for="">Name:</label>
                    <input type="text" name="name">
                </div>
                 <div class="form-group">
                    <label for="">Email:</label>
                    <input type="text" name="email">
                </div>
                 <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password">
                </div>
                 <div class="form-group">
                    <label for="">Phone No:</label>
                    <input type="number" name="phoneno">
                </div>
                 <div class="form-group">
                    <label for="">Role:</label>
                    <select name="department" id="department">
                        @foreach($department as $data)
                        <option value="{{$data->deptid}}">{{$data->name}}</option>
                        @endforeach
                    </select>
                </div>
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