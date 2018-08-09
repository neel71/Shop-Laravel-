@extends('admin.master')


@section('content')
<hr/>

<div class="row">
    <div class="col-lg-12">
        <h3 class="text-center text-success">{{Session::get('message')}}</h3>

        <hr/>
        <div class='well'>

            {{Form::open(['url'=>'product/save','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data'])}}

            <div class='form-group'>
                <label for='cname' class="control-label col-sm-2">Product Name</label>
                <div class="col-sm-10">
                    <input  type='text' class="form-control{{ $errors->has('productName') ? ' is-invalid' : '' }}" name='productName'>
                    @if ($errors->has('productName'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-danger">{{ $errors->first('productName') }}</strong>
                    </span>
                    @endif
                </div>

            </div>
            <div class='form-group'>
                <label for='name' class="control-label col-sm-2">Category Name</label>
                <div class="col-sm-10">
                    <select class="form-control" name='categoryId'>
                        <option>.... Select Category Name ....</option>
                        @foreach($category as $category)
                        <option value='{{$category->id}}'>{{$category->categoryName}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class='form-group'>
                <label for='name' class="control-label col-sm-2">Manufacturer Name</label>
                <div class="col-sm-10">
                    <select class="form-control" name='manufacturerId'>
                        <option>.... Select Manufacturer Name ....</option>
                        @foreach($manufacturer as $manufacturer)
                        <option value='{{$manufacturer->id}}'>{{$manufacturer->manufacturerName}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class='form-group'>
                <label for='cdesc' class="control-label col-sm-2">Product Price</label>
                <div class="col-sm-10">

                    <input  type='number' class="form-control{{ $errors->has('productPrice') ? ' is-invalid' : '' }}" name='productPrice'>
                    @if ($errors->has('productPrice'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-danger">{{ $errors->first('productPrice') }}</strong>
                    </span>
                    @endif
                </div>
            </div>



            <div class='form-group'>
                <label for='cdesc' class="control-label col-sm-2">Product Quantity</label>
                <div class="col-sm-10">

                    <input  type='number' class="form-control{{ $errors->has('productQuantity') ? ' is-invalid' : '' }}" name='productQuantity'>
                    @if ($errors->has('productQuantity'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-danger">{{ $errors->first('productQuantity') }}</strong>
                    </span>
                    @endif
                </div>
            </div>


            <div class='form-group'>
                <label for='cdesc' class="control-label col-sm-2">Product Short Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control{{ $errors->has('productShortDescription') ? ' is-invalid' : '' }}"  
                              rows='4' name='productShortDescription'> </textarea>
                    @if ($errors->has('productShortDescription'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-danger">{{ $errors->first('productShortDescription') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class='form-group'>
                <label for='cdesc' class="control-label col-sm-2">Product Long Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control{{ $errors->has('productLongDescription') ? ' is-invalid' : '' }}"  
                              rows='6' name='productLongDescription'> </textarea>

                    @if ($errors->has('productLongDescription'))
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-danger">{{ $errors->first('productLongDescription') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            
            
            <div class='form-group'>
                <label for='name' class="control-label col-sm-2">Product Image</label>
                <div class="col-sm-10">
                    <input type='file'  name='productImage' accept="image/*">
                    <strong class="text-danger">{{$errors->has('productQuantity')? $errors->first('productImage'):''}}</strong>
                </div>
            </div>
            
            
            <div class='form-group'>
                <label for='name' class="control-label col-sm-2">Publication Status</label>
                <div class="col-sm-10">
                    <select class="form-control" name='publicationStatus'>
                        <option>.... Select Publication Status ....</option>
                        <option value='1'>Published</option>
                        <option value='0'>Unpublished</option>
                    </select>
                </div>
            </div>

            

            <div class='form-group'>

                <div class="col-sm-offset-2 col-sm-10">
                    <button type='submit' name='btn' class="btn btn-info btn-block" name='name'>Save Product info</button>
                </div>
            </div>

            {{Form::close()}}
        </div>
    </div>

</div>


@endsection