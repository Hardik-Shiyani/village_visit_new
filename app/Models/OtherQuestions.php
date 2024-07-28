<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherQuestions extends Model
{
    use HasFactory;

    protected $table = 'other_issues';

    protected $fillable = [
        'taluka_name',
        'village_name',
        'gas_pipeline',
        'gas_pipeline_details',
        'gas_delivery',
        'gas_delivery_details',
        'public_toilet_issue',
        'public_toilet_details',
        'irrigation_water_issue',
        'irrigation_water_details',
        'canal_incomplete',
        'canal_incomplete_details',
        'new_canal_requirement',
        'new_canal_requirement_details',
        'agriculture_issues',
        'agriculture_issues_details',
        'government_scheme_info',
        'government_scheme_info_details',
        'agriculture_subsidy_issue',
        'agriculture_subsidy_issue_details',
        'animal_shelter_issue',
        'animal_shelter_issue_details',
        'bus_stand_issue',
        'bus_stand_issue_details',
        'route_demanded',
        'route_demanded_details',
        'bus_stop_change_request',
        'bus_stop_change_request_details',
        'aadhar_update_facility',
        'aadhar_update_facility_details',
        'rainwater_harvesting_facility',
        'rainwater_harvesting_facility_details',
        'main_attraction_details',
        'village_specialty_details',
        'additional_presentation_details',
        'details_added_by'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
