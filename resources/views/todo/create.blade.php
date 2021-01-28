@extends('layouts.app')


@section('content')
<div style="background-color: lightblue; position:fixed;padding:0;margin:0; top:0;left:0;width: 
100%;height: 100%;">
    <div style="margin:20px" class="row" >
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="font-size: 35px;">Create new task</h2>
                <hr style="height:2px;border-width:0;color:gray;background-color:gray;width:300px;position:fixed">
            </div>
            <br/>
            <br/>
            <div class="pull-right">
                <a style="text-align: right;" class="btn btn-primary" onclick="window.location='{{ url("todo") }}'" title="Go back"> <i class="fas fa-backward ">Back</i> </a>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <div style="padding: 10px;background-color: rgba(255, 255, 255, 0.56) ;border-radius: 40px;border: 1px solid #ddd;margin: 30px;">
    <form
    class="container"
    action= "/todo"
    method="POST">

    {{csrf_field()}}
    

    <div class="form-group">
        <label style="font-size: 25px;">Task</label>
        <input type="text" name="text" class="form-control">
    </div>

    
    <div style="margin-left: 10px;" class="form-group">
        <button class="btn btn-success">Save</button>
    </div>
   
</form>
</div>
</div>
@endsection
