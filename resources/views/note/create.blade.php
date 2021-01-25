@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Dodaj nową notatke</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" onclick="window.location='{{ url("note") }}'" title="Go back"> <i class="fas fa-backward ">back</i> </a>
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
    
    <form
class="container"
action= "/note"
method="POST">

    {{csrf_field()}}
    

    <div class="form-group">
        <label>Nazwa</label>
        <input type="text" name="name" class="form-control">
    </div>

    <div class="form-group">
        <label>Subtitle</label>
        <input type="text" name="subtitle" class="form-control">
    </div>

    <div class="form-group">
        <label>Content</label>
        <input type="text" name="content" class="form-control">
    </div>

    <div class="form-group">
        <label>Color</label>
        <input type="text" name="color" class="form-control">
    </div>

    <div class="form-group">
        <label>Tag</label>
        <input type="text" name="tag" class="form-control">
    </div>

    <div class="form-group">
        <button class="btn btn-success">Zapisz</button>
    </div>

</form>

@endsection