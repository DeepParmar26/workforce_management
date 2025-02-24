@extends('admintheme.admin')
@section('content')



<div class="row">
        <div class="col-lg-12">
          <div class="card card-outline">
            <div class="card-header bg-blue">
              <h5 class="text-white m-b-0">Create Customer </h5>
            </div>
            <div class="card-body">

    <form action="{{route('customer.store')}}" method="post">
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
                    <label for="">Customer Name:</label>
                    <input type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="">Customer Email:</label>
                    <input type="text" name="email">
                </div>
                <div class="form-group">
                    <label for="">Customer Phone No:</label>
                    <input type="number" name="phone">
                </div>
                <div class="form-group">
                    <label for="">Customer Address:</label>
                    <input type="text" name="address">
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
