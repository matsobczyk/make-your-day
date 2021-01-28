@extends('layouts.app')

@section('content')
<div style="background-color: lightblue; position:fixed;padding:0;margin:0; top:0;left:0;width: 
100%;height: 100%;">
    <div style="margin:20px" class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <h2 style="font-size: 38px;">Edit note</h2>
                <hr style="height:2px;border-width:0;color:gray;background-color:gray;width:250px;position:fixed">
            </div>
            <br/>
            <br/>
            <div class="pull-right">
            <a class="btn btn-primary" onclick="window.location='{{ url("note") }}'" title="Go back"> <i class="fas fa-backward ">Back</i> </a>
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
      action="{{ route('note.update', $note->id) }}"
      method="POST">
      <input type="hidden" name="_method" value="PUT">
        {{csrf_field()}}
        

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $note->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Subtitle:</strong>
                    <input type="text" name="subtitle" value="{{ $note->subtitle }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Content:</strong>
                    <input type="text" name="content" value="{{ $note->content }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Color:</strong>
                    <input type="text" name="color" value="{{ $note->color }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tag:</strong>
                    <input type="text" name="tag" value="{{ $note->tag }}" class="form-control" placeholder="Name">
                </div>
            </div>




            
            </div>
            <div style="margin-left: 10px;" class="form-group">
             <button class="btn btn-success">Save</button>
             </div>
        </div>

    </form>
    </div>
    </div>
@endsection