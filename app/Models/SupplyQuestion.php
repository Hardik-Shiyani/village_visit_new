<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplyQuestion extends Model
{
    use HasFactory;
    protected $table = 'supply_questions';

    protected $fillable = [
        'category', 'activity', 'supply_1', 'supply_1v', 'supply_2', 'supply_2v',
        'supply_3', 'supply_3v', 'supply_4', 'supply_5', 'supply_6', 'supply_7',
        'supply_8', 'supply_8v', 'supply_9', 'supply_10', 'supply_10v',
        'supply_11', 'supply_11v', 'village_photo', 'supply_12', 'details_added_by'
    ];
}
