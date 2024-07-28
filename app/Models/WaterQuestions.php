<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaterQuestions extends Model
{
    use HasFactory;
    protected $table = 'water_questions';

    protected $fillable = [
        'category',
        'activity',
        'water_1',
        'water_1v',
        'water_2',
        'water_2v',
        'water_3',
        'water_3v',
        'water_4',
        'water_4v',
        'water_5',
        'water_5v',
        'water_6',
        'water_6v',
        'water_7',
        'water_7v',
        'water_8',
        'water_8v',
        'water_9',
        'water_9v',
        'water_10',
        'water_10v',
        'water_11',
        'water_11v',
        'water_12',
        'details_added_by',
        'created_at',
        'updated_at'
    ];

}
