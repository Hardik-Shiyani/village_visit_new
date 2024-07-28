<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoadQuestionFormData extends Model
{
    use HasFactory;

    protected $fillable = [
        'taluka_name',
        'village_name',
        'cc_road_available',
        'cc_road_available_details',
        'cc_road_needed',
        'cc_road_needed_details',
        'road_connecting_to_school',
        'road_connecting_to_school_details',
        'road_other_issues',
        'details_added_by',
    ];
}
