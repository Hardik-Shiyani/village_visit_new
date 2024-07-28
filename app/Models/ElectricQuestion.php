<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElectricQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'activity',
        'electric_1',
        'electric_1v',
        'electric_2',
        'electric_2v',
        'electric_3',
        'electric_3v',
        'electric_4',
        'details_added_by',
    ];
}
