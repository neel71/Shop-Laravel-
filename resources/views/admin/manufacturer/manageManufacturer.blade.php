@extends('admin.master')

@section('content')
<hr/>
<h3 class="text-success text-center">{{Session::get('message')}}</h3>
<hr/>
<table class="table table-bordered table-hover">
    <thread>
        <th>ID</th>
        <th>Manufacturer Name</th>
        <th>Manufacturer Description</th>
        <th>Publication Status</th>
        <th>Action</th>
    </thread>
    <tbody>
        @foreach($manufacture as $manufacture)
        <tr>
            <th scope="row">{{$manufacture->id}}</th>
            <td>{{$manufacture->manufacturerName}}</td>
            <td>{{$manufacture->manufacturerDescription}}</td>
            <td>{{$manufacture->publicationStatus?'Published':'Unpubliahed'}}</td>
            <td>
                <a href="{{url('/manufacturer/edit/'.$manufacture->id)}}" class="btn btn-success">
                    <span class="glyphicon glyphicon-edit"></span>
                </a>
                <a href="{{url('/manufacturer/delete/'.$manufacture->id)}}" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger">
                    <span class="glyphicon glyphicon-trash"></span>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection