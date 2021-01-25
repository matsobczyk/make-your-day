<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = Note::all();
    // var_dump($cele);
    return view('note.index')->with('notes', $notes);
    }

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
            'name' => 'required|unique:notes|max:60',
            'subtitle' => 'required|max:60',
            'content' => 'required|max:500',
            'color' => 'required',
            'tag' => 'required|alpha'
          ]);
      
          $current_date = date('Y-m-d H:i:s');

          // Stworzenie celu
          $note = new Note;
          $note->name = $request->input('name');
          $note->subtitle = $request->input('subtitle');
          $note->content = $request->input('content');
          $note->color = $request->input('color');
          $note->tag = $request->input('tag');
          //$note->created_at = $current_date;
          //$note->updated_at = $current_date;

          try{
          $note->save();
          }catch(Exception $e){
            echo 'Caught exception: ',  $e->getMessage(), "\n";
          }
          return redirect()->route('note')->with('success','dodano notatke');
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

        $note = Note::find($id);
        $note->name = $request->input('name');
        $note->subtitle = $request->input('subtitle');
        $note->content = $request->input('content');
        $note->color = $request->input('color');
        $note->tag = $request->input('tag');

        $note->save();

        return redirect()->route('note')->with('success','Zaaktualizowano notatke');
            
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
