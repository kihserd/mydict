<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;
    protected $fillable=[
        'phrase_id',
        'diff'
    ];
    public static function recent($number=5)
    {
        return Log::orderByDesc('id')->take($number)->pluck('phrase_id');
    }
}
