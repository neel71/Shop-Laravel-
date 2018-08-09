@extends('admin.master')


@section('content')
<hr/>
<div class="row">
    <div class="col-lg-12">
        <h3 class="text-center text-success">{{Session::get('message')}}</h3>
    
<hr/>
<div class='well'>
    
    {{Form::open(['url'=>'menufacturer/save','method'=>'POST','class'=>'form-horizontal'])}}
        
        <div class='form-group'>
            <label for='cname' class="control-label col-sm-2">Manufacturer Name</label>
            <div class="col-sm-10">
                <input  type='text' class="form-control{{ $errors->has('manufacturerName') ? ' is-invalid' : '' }}" name='manufacturerName'>
                @if ($errors->has('manufacturerName'))
                 <span class="invalid-feedback" role="alert">
                    <strong class="text-danger">{{ $errors->first('manufacturerName') }}</strong>
                </span>
            @endif
            </div>
            
        </div>
        
        <div class='form-group'>
            <label for='cdesc' class="control-label col-sm-2">Manufacturer Description</label>
            <div class="col-sm-10">
                <textarea class="form-control{{ $errors->has('manufacturerDescription') ? ' is-invalid' : '' }}"  rows='8' name='manufacturerDescription'> </textarea>
                 @if ($errors->has('manufacturerDescription'))
                 <span class="invalid-feedback" role="alert">
                     <strong class="text-danger">{{ $errors->first('manufacturerDescription') }}</strong>
                </span>
            @endif
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
                <button type='submit' name='btn' class="btn btn-info btn-block" name='name'>Save Manufacturer info</button>
            </div>
        </div>
    
    {{Form::close()}}
</div>
</div>
    
</div>


@endsection