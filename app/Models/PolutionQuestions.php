<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PolutionQuestions extends Model
{
    use HasFactory;

    protected $table = "pollution_questions";

    protected $fillable = [
        'category',
        'activity',
        'polution_1',
        'polution_1v',
        'polution_2',
        'polution_2v',
        'polution_3',
        'polution_3v',
        'polution_4',
        'polution_4v',
        'polution_5'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
