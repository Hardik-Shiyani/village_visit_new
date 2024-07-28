<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankingQuestions extends Model
{
    use HasFactory;

    protected $table = 'banking_services_vigat';

    protected $fillable = [
        'taluka_name',
        'village_name',
        'bank_1bn1',
        'bank_1bd1',
        'bank_1bn2',
        'bank_1bd2',
        'bank_1bn3',
        'bank_1bd3',
        'bank_2',
        'bank_2v',
        'bank_3',
        'bank_4bcn',
        'bank_4bcm',
        'bank_5',
        'bank_6',
        'bank_7',
        'bank_8',
        'bank_9',
        'bank_10',
        'bank_10v',
        'bank_11',
        'details_added_by'
    ];

    protected $dates = [
        'created_at', 'updated_at',
    ];
}
