<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phrase;

class StatisticController extends Controller
{
    public function right($id)
    {
        $Phrase=Phrase::findOrFail($id);
        $Phrase->increment('correctAnswer');
        $Phrase->increment('diff');
        $Phrase->log();
        return redirect('/');
    }

    public function wrong($id)
    {
        $Phrase=Phrase::findOrFail($id);
        $Phrase->increment('wrongAnswer');
        $Phrase->decrement('diff');
        $Phrase->log();
        return redirect('/');
    }
}
