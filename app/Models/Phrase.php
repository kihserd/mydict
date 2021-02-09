<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phrase extends Model
{
    use HasFactory;
    protected $fillable = ['rus', 'eng', 'lesson', 'type'];

    public function scopeNotRecent($query)
    {
        return $query->whereNotIn('id', Log::recent());
    }

    public function scopeWorst($query, $number=10)
    {
        return $query->orderBy('diff')->take($number);
    }

    public function scopeRandom($query)
    {
        return $query->inRandomOrder()->take(1);
    }

    public function scopeLastPhrases($query, $number=30)
    {
        return $query
            ->where('diff', '<', 5)
            ->orderByDesc('created_at')
            ->take($number);
    }

    public function scopeFirstPhrases($query, $number=30)
    {
        return $query
            ->where('diff', '<', 5)
            ->orderBy('created_at')
            ->take($number);
    }

    public function scopeLearnt($query, $number=30)
    {
        return $query
            ->where('diff', '=>', 5)
            ->orderBy('updated_at')
            ->take($number);
    }

    public function log()
    {
        Log::create([
            'phrase_id' => $this->id,
            'diff' => $this->diff
        ]);
    }

    public static function randomPhrase()
    {
        $phrase_count=Phrase::count();
        $learnt_count=Phrase::notRecent()->learnt()->count();
        $log_count=Log::count();
        $case=array_rand([0,1,2,3,4,5,6,7,8,9]);

        if (!$phrase_count) {
            return 'Phrase doesn\'t exist!';
            // replace with exception
        }

        if ($log_count <= 10 || $phrase_count <= 10) {
            return Phrase::all()->random();
        }

        if ($learnt_count<=30) {
            return Phrase::notRecent()->lastPhrases()->get()->random();
        }

        if ($case==0) {
            // в 10% сначала те, у которых диф минимальный!
            return Phrase::notRecent()->worst()->get()->random();
        }

        if ($case==1) {
            // в 10% повторяет те, что уже выучили 
         return Phrase::notRecent()->learnt()->get()->random();
        }

        if ($case<=4) {
         // в 30% случаях берем повторяем старые
          return Phrase::notRecent()->firstPhrases()->get()->random();
        }

        return Phrase::notRecent()->lastPhrases()->get()->random();
    }
}
