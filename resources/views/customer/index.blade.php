@extends('admintheme.admin')
@section('content')


@if($message=Session::get('success'))
        <div class="alert alert-success">
            {{$message}}
        </div>
   @endif
   <div class="table-responsive">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <td>Customer Id</td>
                <td>Customer Name</td>
                <td>Email</td>
                <td>Phone No</td>
                <td>Address</td>
                <td>Manage</td>
            </thead>
            <tbody>
                @foreach($customer as $data)
                    <tr>
                        <td>{{$data->customerid}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->address}}</td>
                        <td><a href="{{route('customer.edit',$data->customerid)}}">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        </div>
          </div>
        </div>
      </div>

    @endsection

        