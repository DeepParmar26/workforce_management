@extends('admintheme.admin')
@section('content')

<div class="row">
        <div class="col-lg-12">
          <div class="card card-outline">
            <div class="card-header bg-blue">
              <h5 class="text-white m-b-0">Create Department </h5>
            </div>
            <div class="card-body">
<form action="{{route('department.store')}}" method="post">
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
                   <label for="">Description:</label>
                    <input type="text" name="description">
                </div>
                <div class="form-group">
                <input type="submit" value="submit" name="submit" class="btn btn-success"> 
                </div>
            </div>
        </div>
    </form>
    </div>
          </div>
        </div>
      </div>

    @endsection