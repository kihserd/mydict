<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phrase;

class PhraseController extends Controller
{
    public function create()
    {
        return view('phrases.create');
    }

    public function random()
    {
        $phrase = Phrase::randomPhrase();
        // $phrase=Phrase::all()->random();
        // return $phrase->eng;
        return view('welcome')
            ->with('phrase', $phrase);
    }

    public function store(Request $request)
    {
        $validated=$request->validate([
            'engTextarea' => 'required|min:2',
            'rusTextarea' => 'required|min:2',
            'radioType' => ''
        ]);

        Phrase::create(
            [
                'rus' => $validated['rusTextarea'],
                'eng' => $validated['engTextarea'],
                'type' => $validated['radioType'],
            ]
        );
        session()->flash('message', 'Thanks so much for new phrase!');

        return redirect('/phrases/create');
    }
}
