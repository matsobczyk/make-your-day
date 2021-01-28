<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;

class ToDoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $to_dos = ToDo::get()->toJson(JSON_PRETTY_PRINT);
     
    return response($to_dos,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        error_log('TEST WEJSCIA do store.');

          $this->validate($request, [
            'text' => 'required|unique:to_dos|max:60',
            
          ]);
      
          $user = auth()->user();
          $id = ($user->id);

          // Stworzenie celu
          $temp = false;
          $todo = new ToDo;
          $todo->text = $request->input('text');
          $todo->is_done = "false";
          $todo->user = $id;
          //$note->created_at = $current_date;
          //$note->updated_at = $current_date;
          

          try{
          $todo->save();
          }catch(Exception $e){
            echo 'Caught exception: ',  $e->getMessage(), "\n";
          }
          return redirect()->route('react')->with('success','dodano todo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ToDo  $toDo
     * @return \Illuminate\Http\Response
     */
    public function show(ToDo $todo)
    {
        return view('todo.show', compact('todo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ToDo  $toDo
     * @return \Illuminate\Http\Response
     */
    public function edit(ToDo $todo)
    {
        return view('todo.edit', compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ToDo  $toDo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = auth()->user();
          $id = ($user->id);

          

          // edytowanie celu
          $todo = ToDo::find($id);
          $todo->text = $request->input('text');
          $todo->is_done = $request->input('submit') ? "true" : "false";
          $todo->user = $id;
          //$note->created_at = $current_date;
          //$note->updated_at = $current_date;
          $todo->save();
        
        return redirect()->route('react')->with('success','dodano todo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ToDo  $toDo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = ToDo::find($id);
    $todo->delete();
    
    

    return redirect('/react')->with('success', "usunieto");
    }
}
