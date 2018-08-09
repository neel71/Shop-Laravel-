@extends('admin.master')

@section('header')
Laravel-41
@endsection

@section('content')
<hr/>
<div class="row">
    <div class="col-lg-12">
        <!--<h3 class="text-center text-success">{{Session::get('message')}}</h3>-->
    
<hr/>
<div class='well'>
    
    {{Form::open(['url'=>'category/update','method'=>'POST','class'=>'form-horizontal','name'=>'editCategoryForm'])}}
        
        <div class='form-group'>
            <label for='cname' class="control-label col-sm-2">Category Name</label>
            <div class="col-sm-10">
                <input  type='text' class="form-control" name='categoryName' value='{{$categoryById->categoryName}}'>
                <input  type='hidden' class="form-control" name='categoryId' value='{{$categoryById->id}}'>
            </div>
        </div>
        
        <div class='form-group'>
            <label for='cdesc' class="control-label col-sm-2">Category Description</label>
            <div class="col-sm-10">
                <textarea class="form-control"  rows='8' name='categoryDescription'>{{$categoryById->categoryDescription}} </textarea>
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
        
<!--        <div class='form-group'>
            <label for='name' class="control-label col-sm-2">File</label>
            <div class="col-sm-10">
                <input type='file' class="form-control" name='name'>
            </div>
        </div>-->
        
        <div class='form-group'>
            
            <div class="col-sm-offset-2 col-sm-10">
                <button type='submit' name='btn' class="btn btn-info btn-block" name='name'>Update Category info</button>
            </div>
        </div>
    
    {{Form::close()}}
</div>
</div>
    
</div>

<script>
    document.forms['editCategoryForm'].elements['publicationStatus'].value={{$categoryById->publicationStatus}};
</script>



@endsection