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
                    <th>Department Id</th>
                    <th>Department Name</th>
                    <th>Descripton</th>
                    <th>Manage</th>
                </tr>
            </thead>
            <tbody>
                @foreach($department as $data)
                    <tr>
                        <td>{{$data->deptid}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->description}}</td>
                        <td>
                            <a href="{{route('department.edit',$data->deptid)}}">Edit</a>
                            <form action="{{route('department.destroy',$data->deptid)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Do You Want TO delete This Record?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endsection