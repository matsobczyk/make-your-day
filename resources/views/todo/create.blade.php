@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Dodaj nowe todo</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" onclick="window.location='{{ url("todo") }}'" title="Go back"> <i class="fas fa-backward ">back</i> </a>
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
action= "/todo"
method="POST">

    {{csrf_field()}}
    

    <div class="form-group">
        <label>text</label>
        <input type="text" name="text" class="form-control">
    </div>

    
    <div class="form-group">
        <button class="btn btn-success">Zapisz</button>
    </div>
   
</form>

@endsection