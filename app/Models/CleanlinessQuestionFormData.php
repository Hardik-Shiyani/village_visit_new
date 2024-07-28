<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CleanlinessQuestionFormData extends Model
{
    use HasFactory;

    protected $table = 'cleanliness_questions_form_data';

    protected $fillable = [
        'taluka_name_cleanliness',
        'village_name_cleanliness',
        'door_to_door_collection_service',
        'door_to_door_collection_service_details',
        'waste_disposal_frequency',
        'waste_disposal_site',
        'daily_cleaning_service',
        'daily_cleaning_service_details',
        'staff_for_cleanliness',
        'vehicles_for_cleanliness',
        'vehicles_for_cleanliness_details',
        'cleanliness_other_issues',
        'details_added_by'
    ];
}
