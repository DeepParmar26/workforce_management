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
                <th>Project ID</th>
                <th>Project Title</th>
                <th>Description</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Customer Id</th>
                <th>Status</th>
                <th>manage</th>
            </thead>
            <tbody>
                    @foreach($project as $data)
                        <tr>
                            <td>{{$data->projectid}}</td>
                            <td>{{$data->projecttitle}}</td>
                            <td>{{$data->projectdesc}}</td>
                            <td>{{$data->startdate}}</td>
                            <td>{{$data->enddate}}</td>
                            <td>{{$data->customerid}}</td>
                            <td>{{$data->status}}</td>
                            <td><a href="{{route('project.edit',$data->projectid)}}">Edit</a></td>
                        </tr>
                    @endforeach
            </tbody>
        </table>

        
        </div>
          </div>
        </div>
      </div>

    @endsection