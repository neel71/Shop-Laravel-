@extends('admin.master')
@section('content')
<hr/>

<div class="row">
    <div class="col-lg-12">
        <h3 class="text-center text-success">{{Session::get('message')}}</h3>

        <hr/>
        <div class='well'>

            {{Form::open(['Name'=>'updateForm','url'=>'product/update','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data'])}}

            <div class='form-group'>
                <label for='cname' class="control-label col-sm-2">Product Name</label>
                <div class="col-sm-10">
                    <input  type='text' class="form-control" value="{{$product->productName}}" name='productName'>
                    <input  type='hidden' class="form-control" value="{{$product->id}}" name='productId'>

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

                    <input  type='number' value="{{$product->productPrice}}" class="form-control" name='productPrice'>

                    </div>
            </div>



            <div class='form-group'>
                <label for='cdesc' class="control-label col-sm-2">Product Quantity</label>
                <div class="col-sm-10">

               <input  type='number' class="form-control" value="{{$product->productQuantity}}" name='productQuantity'>

                    </div>
            </div>


            <div class='form-group'>
                <label for='cdesc' class="control-label col-sm-2">Product Short Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control"  
                              rows='4' name='productShortDescription'> {{$product->productShortDescription}}</textarea>

                </div>
            </div>

            <div class='form-group'>
                <label for='cdesc' class="control-label col-sm-2">Product Long Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control"  
                              rows='6' name='productLongDescription'> {{$product->productLongDescription}}</textarea>


                </div>
            </div>


            <div class='form-group'>
                <label for='name' class="control-label col-sm-2">Product Image</label>
                <div class="col-sm-6">
                    <input type='file' name='productImage' accept="image/*">
                    <img src="{{asset($product->productImage)}}"  height="150" width="100"/>
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
                    <button type='submit' name='btn' class="btn btn-info btn-block" name='name'>Update Product info</button>
                </div>
            </div>

            {{Form::close()}}
        </div>
    </div>

</div>
<script>
   document.forms['updateForm'].elements['categoryId'].value = {{$product->categoryId}};
   document.forms['updateForm'].elements['manufacturerId'].value = {{$product->manufacturerId}};
   document.forms['updateForm'].elements['publicationStatus'].value = {{$product->publicationStatus}};

</script>

@endsection