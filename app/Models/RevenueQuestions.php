<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RevenueQuestions extends Model
{
    use HasFactory;

    protected $table = "revenue_questions_form_data";

    protected $fillable = [
        'category',
        'activity',
        'revenue_1',
        'revenue_1v',
        'revenue_2',
        'revenue_2v',
        'revenue_3',
        'revenue_3v',
        'revenue_4',
        'revenue_4v',
        'revenue_5',
        'revenue_5v',
        'revenue_6',
        'revenue_6v',
        'revenue_7',
        'revenue_7v',
        'revenue_8',
        'details_added_by'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
