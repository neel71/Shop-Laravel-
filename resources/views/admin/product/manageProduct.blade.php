@extends('admin.master')

@section('content')
<hr/>
<h3 class="text-success text-center">{{Session::get('message')}}</h3>
<hr/>
<table class="table table-bordered table-hover">
    <thread>
        <tr>
           
            <th>Product Name</th>
            <th>Category Name</th>
            <th>Manufacturer Name</th>
            <th>Product Price</th>
            <th>Product Quantity</th>
            <th>Publication Status</th>
            <th>Action</th>
        </tr>
    </thread>
    <tbody>
        @foreach($product as $product)
        <tr>
            
            <th scope='row'>{{$product->productName}}</th>
            <td>{{$product->categoryName}}</td>
            <td>{{$product->manufacturerName}}</td>
            <td>Tk. {{$product->productPrice}}</td>
            <td>{{$product->productQuantity}}</td>
            <td>{{$product->publicationStatus==1?'Published':'Unpublished'}}</td>
            <td>
                <a href="{{url('/product/view/'.$product->id)}}" class="btn btn-info" title="View">
                    <span class="glyphicon glyphicon-eye-open"></span>
                </a>
                <a href="{{url('/product/edit/'.$product->id)}}" class="btn btn-success" title="Edit">
                    <span class="glyphicon glyphicon-edit"></span>
                </a>
                
                <a href="{{url('/product/delete/'.$product->id)}}" title="Delete" onclick="return confirm('Are You Syre to Delete?');" class="btn btn-danger">
                    <span class="glyphicon glyphicon-trash"></span>
                </a>
                
            </td>
        </tr>
        @endforeach
    </tbody>

</table>



@endsection



