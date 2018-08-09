@extends('admin.master')

@section('content')
<hr/>
<div class="row">
    <div class="col-lg-12">
        <h3 class="text-center text-success">{{Session::get('message')}}</h3>

        <hr/>
        <div class='well'>

            {{Form::open(['url'=>'manufacturer/update','method'=>'POST','class'=>'form-horizontal','name'=>'updateForm'])}}
           <div class='form-group'>
            <label for='cname' class="control-label col-sm-2">Manufacturer Name</label>
            <div class="col-sm-10">
                <input type='text' class="form-control" name='manufacturerName' value='{{$manufacturerById->manufacturerName}}'>
                <input type='hidden' class="form-control" name='manufacturerId' value='{{$manufacturerById->id}}'>
                
            </div>
            
        </div>
        
        <div class='form-group'>
            <label for='cdesc' class="control-label col-sm-2">Manufacturer Description</label>
            <div class="col-sm-10">
                <textarea class="form-control"  rows='8' name='manufacturerDescription'>{{$manufacturerById->manufacturerDescription}}</textarea>
                 
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
                <button type='submit' name='btn' class="btn btn-info btn-block" name='name'>update Manufacturer info</button>
            </div>
        </div>



            {{Form::close()}}
        </div>
    </div>

</div>

<script>
    document.forms['updateForm'].elements['publicationStatus'].value={{$manufacturerById->publicationStatus}};
</script>
@endsection