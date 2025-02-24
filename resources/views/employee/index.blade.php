
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
                <tr>
                    <th>Employee Id</th>
                    <th>Employee Name</th>
                    <th>Email</th>
                    <th>Phone No</th>
                    <th>Role</th>
                    <th>Manage</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employee as $data)
                    <tr>
                        <td>{{$data->empid}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->phoneno}}</td>
                        <td>{{$data->department}}</td>
                        <td><a href="{{route('employee.edit',$data->empid)}}">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endsection
