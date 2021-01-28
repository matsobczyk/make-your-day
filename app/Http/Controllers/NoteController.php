<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use SebastianBergmann\Environment\Console;
use Exception;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = Note::get()->toJson(JSON_PRETTY_PRINT);
     
        return response($notes,200);
    }
    
    
    
    // public function getAllNotes(){
        // $notes = Note::get()->toJson(JSON_PRETTY_PRINT);
     
        // return response($notes,200);
    // }
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('note.create');
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
            'name' => 'required|unique:notes|max:60|apha_dash',
            'subtitle' => 'required|max:60|apha_dash',
            'content' => 'required|max:500|alpha_dash',
            'tag' => 'required|alpha'
          ]);
      
          $user = auth()->user();
          $id = ($user->id);

          // Stworzenie celu
          $note = new Note;
          $note->name = $request->input('name');
          $note->subtitle = $request->input('subtitle');
          $note->content = $request->input('content');
          $note->tag = $request->input('tag');
          $note->user = $id;
          //$note->created_at = $current_date;
          //$note->updated_at = $current_date;

          try{
          $note->save();
          }catch(Exception $e){
            echo 'Caught exception: ',  $e->getMessage(), "\n";
          }
         // return redirect()->route('note')->with('success','dodano notatke'); //commenting this out to add another return with json
         return response()->json([
             "message"=> "note created"
         ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
        return view('note.show', compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Note $note)
    {
        return view('note.edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = auth()->user();
          $id = ($user->id);
        $note = Note::find($id);
        $note->name = $request->input('name');
        $note->subtitle = $request->input('subtitle');
        $note->content = $request->input('content');
        $note->tag = $request->input('tag');
        $note->user = $id;

        $note->save();
        
        return redirect()->route('note')->with('success','dodano notatke');
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $note = Note::find($id);
    $note->delete();

    return redirect('/note')->with('success', 'Cel zniszczony');
    }
}
