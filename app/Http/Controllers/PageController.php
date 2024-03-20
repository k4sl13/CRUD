<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class PageController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('note.index')->with('notes', $notes);
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
        ]);

        $note = new Note();
        $note->done = true;
        $note->name = $validator['title'];
        $note->description = $validator['description'];
        $note->save();

        return to_route('notes');
    }

    public function delete(Request $request)
    {
        $validator = $request->validate([
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
        ]);

        $note = Note::where('name', '=', $validator['title'])->where('description', '=', $validator['description'])->first();

        if (!$note)
        {
            return to_route('notes');
        }

        $note->delete();

        return to_route('notes');
    }

    public function create()
    {
        return view('note.create');
    }

    public function edit($id)
    {
        $note = Note::find($id);
        return view('note.edit')->with('note', $note);
    }

    public function update(Request $request)
    {
        $validator = $request->validate([
            'id' => ['required', 'exists:notes,id'],
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
        ]);

        $note = Note::find($request->id);
        $note->name = $validator['title'];
        $note->description = $validator['description'];
        $note->save();

        return to_route('notes');
    }
}
