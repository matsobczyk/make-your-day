@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Make your day</h2>
                <h3>dodaj notatke</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('note.create') }}" title="Create a note"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Introduction</th>
        </tr>
        @foreach ($note as $notes)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $note->Name }}</td>
                <td>{{ $note->Color }}</td>
                <td>{{ $note->Content }}</td>
                
            </tr>
        @endforeach
    </table>

   

@endsection