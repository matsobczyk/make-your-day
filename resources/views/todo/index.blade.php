

@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>To Do test</h2>
                <h3><button type="button" onclick="window.location='{{ url("todo/create") }}'">Dodaj todo</button></h3>
            </div>
            <div class="pull-right">
                
                    
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
    <thead>
        <tr>
            <td>text</td>
            <td>bool</td>
            <td>user</td>
            <td>Działania</td>
            <td></td>
        </tr>
    </thead>
    <tbody>
    @foreach($to_dos as $todo)
        <tr>
            <td>{{ $todo->text }}</td>
            <td>{{ $todo->is_done }}</td>
            <td>{{ $todo->user }}</td>
            <!-- we will also add show, edit, and delete buttons -->
            <td style="width:200px">

                <!-- delete the shark (uses the destroy method DESTROY /sharks/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the shark (uses the show method found at GET /sharks/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('todo/' . $todo->id) }}">Show </a>

                <!-- edit this shark (uses the edit method found at GET /sharks/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('todo/' . $todo->id . '/edit') }}">Edit</a>

            </td>
                <td>
                <form
                    method="POST"
                    action="{{ route('todo.destroy', $todo->id) }}"
                    onsubmit="return confirm('Do you really want to delete?');">


                    {!! csrf_field() !!}

                    <input
                    type="hidden"
                    name="_method"
                    value="DELETE">

                    <button
                    type="submit"
                    class="btn btn-danger" >Delete</button>
                    </form>

                </td>
        </tr>
    @endforeach
    </tbody>
</table>
        
   

@endsection