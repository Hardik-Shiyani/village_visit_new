<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnganwadiQuestions extends Model
{
    use HasFactory;

    protected $table = 'anganwadi_questions';

    protected $fillable = [
        'taluka_name',
        'village_name',
        'anganwadi_1',
        'anganwadi_2',
        'anganwadi_3',
        'anganwadi_4',
        'anganwadi_5',
        'anganwadi_6',
        'anganwadi_6v',
        'anganwadi_7',
        'anganwadi_8',
        'anganwadi_9',
        'anganwadi_10',
        'anganwadi_11',
        'anganwadi_12',
        'anganwadi_13w1',
        'anganwadi_13h1',
        'anganwadi_13pt1',
        'anganwadi_13w2',
        'anganwadi_13h2',
        'anganwadi_13pt2',
        'anganwadi_13w3',
        'anganwadi_13h3',
        'anganwadi_13pt3',
        'anganwadi_13w4',
        'anganwadi_13h4',
        'anganwadi_13pt4',
        'anganwadi_13w5',
        'anganwadi_13h5',
        'anganwadi_13pt5',
        'anganwadi_14',
        'anganwadi_15',
        'anganwadi_16',
        'anganwadi_17',
        'anganwadi_17v',
        'anganwadi_18g',
        'anganwadi_18y',
        'anganwadi_18r',
        'anganwadi_19',
        'anganwadi_19v',
        'anganwadi_20',
        'anganwadi_20v',
        'anganwadi_21',
        'anganwadi_21v',
        'anganwadi_22',
        'anganwadi_22v',
        'anganwadi_23',
        'anganwadi_24',
        'anganwadi_24v',
        'anganwadi_25',
        'details_added_by',
    ];

    protected $dates = [
        'created_at', 'updated_at',
    ];
}
