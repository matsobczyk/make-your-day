@extends('layouts.app')


@section('content')
<div style="background-color: lightblue; position:fixed;padding:0;margin:0; top:0;left:0;width: 
100%;height: 100%;">
    <div class="row" style="margin:20px">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
             <h2 style="font-size: 38px;">Task data</h2>
             <hr style="height:2px;border-width:0;color:gray;background-color:gray;width:200px;position:fixed">
                
            </div>
            <br/>
            <br/>
            <div class="pull-right">
            <a class="btn btn-primary" onclick="window.location='{{ url("react") }}'" title="Go back"> <i class="fas fa-backward ">Back</i> </a>
            </div>
        </div>
    </div>

    <div style="padding: 10px;background-color: rgba(255, 255, 255, 0.56) ;border-radius: 40px;border: 1px solid #ddd;margin: 30px;">
    <div class="row" style="margin-left:15px;">
        <div class="col-xs-12 col-sm-12 col-md-12">
            
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div style="font-size: 15px;" class="form-group">
                <strong >Task:</strong>
                {{ $todo->text }}
            </div>
         </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div style="font-size: 15px;" class="form-group">
                <strong>Done?:</strong>
                {{ $todo->is_done }}
                </br>
            
            </div>
            </div>
            
            <div style="margin-left: 20px;" class="form-group">
            <form
                 method="POST"
                 action="{{ route('todo.destroy', $todo->id) }}"
                 onsubmit="return confirm('Do you really want to delete?');">


                 {!! csrf_field() !!}
                
                <input
                type="hidden"
                name="_method"
                value="DELETE">

                <button style="text-align:right;"
                type="submit"
                class="btn btn-danger">Delete</button>
            </form>
            </div>
            
            <div style="margin-left: 10px;" class="form-group">
                 <a class="btn btn-small btn-info" href="{{ URL::to('todo/' . $todo->id . '/edit') }}">Edit</a>
             </div>
             
    </div>
    </div>
@endsection