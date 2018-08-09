@extends('admin.master')

@section('header')
Laravel-41
@endsection



@section('content')
<hr/>
<h3 class="text-success text-center">{{Session::get('message')}}</h3>
<hr/>
<table class="table table-bordered table-hover">
    <thread>
        <tr>
            <th>ID</th>
            <th>Category Name</th>
            <th>Category Description</th>
            <th>Publication Status</th>
            <th>Action</th>
        </tr>
    </thread>
    <tbody>
        @foreach($categories as $category)
        <tr>
            <th scope="row">{{$category->id}}</th>
            <td>{{$category->categoryName}}</td>
            <td>{{$category->categoryDescription}}</td>
            <td>{{$category->publicationStatus==1?'Published':'Unpublished'}}</td>
            <td>
                <a href="{{url('/category/edit/'.$category->id)}}" class="btn btn-success">
                    <span class="glyphicon glyphicon-edit"></span>
                </a>
                <a href="{{url('/category/delete/'.$category->id)}}" onclick="return confirm('Are You Syre to Delete?');" class="btn btn-danger">
                    <span class="glyphicon glyphicon-trash"></span>
                </a>
                
            </td>
        </tr>
        @endforeach
    </tbody>

</table>



@endsection



