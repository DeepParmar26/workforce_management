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
                <th>Group ID</th>
                <th>Group Name</th>
                <th>Description</th>
                <th>Manage</th>
            </thead>
            <tbody>
                @foreach($empgroup as $data)
                    <tr>
                        <td>{{$data->empgrpid}}</td>
                        <td>{{$data->groupname}}</td>
                        <td>{{$data->description}}</td>
                        <td><a href="{{route('empgroup.edit',$data->empgrpid)}}">Edit</a></td>
                    </tr>
                @endforeach()
            </tbody>
        </table>

        
        </div>
          </div>
        </div>
      </div>

    @endsection
