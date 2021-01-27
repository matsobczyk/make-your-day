@extends('layouts.app')


@section('content')
    <div class="row" style="margin-left:15px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1> Dane notatki </h1>
                <h2>  {{ $note->name }}</h2>
            </div>
            <div class="pull-right">
            <a class="btn btn-primary" onclick="window.location='{{ url("note") }}'" title="Go back"> <i class="fas fa-backward ">back</i> </a>
            </div>
        </div>
    </div>

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
                <strong>Tag:</strong>
                {{ $note->tag }}
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
@endsection