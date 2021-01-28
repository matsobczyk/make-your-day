@extends('layouts.app')


@section('content')
<div style="background-color: lightblue; position:fixed;padding:0;margin:0; top:0;left:0;width: 
100%;height: 100%;">
    <div class="row" style="margin:20px">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="font-size: 38px;">Note data</h2>
                <h2>  {{ $note->name }}</h2>
                <hr style="height:2px;border-width:0;color:gray;background-color:gray;width:200px;position:fixed">
                
            
            </div>
            </br>
            </br>
            <div class="pull-right">
            <a class="btn btn-primary" onclick="window.location='{{ url("note") }}'" title="Go back"> <i class="fas fa-backward ">Back</i> </a>
            </div>
        </div>
    </div>

    <div style="padding: 10px;background-color: rgba(255, 255, 255, 0.56) ;border-radius: 40px;border: 1px solid #ddd;margin: 30px;">
    <div class="row" style="margin-left:15px;">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $note->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Subtitle:</strong>
                {{ $note->subtitle }}
            </div>
         </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Content:</strong>
                {{ $note->content }}
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Color:</strong>
                {{ $note->color }}
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tag:</strong>
                {{ $note->tag }}
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tag:</strong>
                {{ $note->user }}
            </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Created:</strong>
                {{ $note->created_at, 'jS M Y' }}
            </div>
            </div>
        
            <form
                 method="POST"
                 action="{{ route('note.destroy', $note->id) }}"
                 onsubmit="return confirm('Do you really want to delete?');">


                 {!! csrf_field() !!}

                <input
                type="hidden"
                name="_method"
                value="DELETE">

                <button
                type="submit"
                class="btn btn-danger">Delete</button>
            </form>
    </div>
    </div>
@endsection