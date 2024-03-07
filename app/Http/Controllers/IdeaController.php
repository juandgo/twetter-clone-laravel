<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function show(Idea $idea){
        return view('ideas.show', [
            'idea' => $idea
        ]);
    }
    public function store(){

        request()->validate([
            'idea' => 'required|min:5|max:240'
        ]);

        $idea = Idea::create(
            [
            'content' => request()->get('idea','')
            ]
        );
        return redirect()->route('dashboard')->with('success','Idea created successfully!');
    }

    public function destroy(Idea $idea){
        //where id = 1
        // Idea::where('id', $id)->firstOrFail()->delete();
        $idea->delete();

        return redirect()->route('dashboard')->with('success','Idea deleted successfully!');
    }
}