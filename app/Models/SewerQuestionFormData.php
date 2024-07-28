<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SewerQuestionFormData extends Model
{
    use HasFactory;

    protected $table = 'sewer_questions_form_data';

    protected $fillable = [
        'taluka_name_sewer',
        'village_name_sewer',
        'sewer_line_exists',
        'sewer_line_exists_details',
        'new_sewer_line_needed',
        'new_sewer_line_needed_details',
        'incomplete_sewer_line_completed',
        'incomplete_sewer_line_completed_details',
        'sewer_line_cleaned_before_rain',
        'sewer_line_cleaned_before_rain_details',
        'sewer_check_issues',
        'sewer_check_issues_details',
        'sewer_and_water_lines_maintenance',
        'sewer_and_water_lines_maintenance_details',
        'sewer_other_issues',
        'details_added_by',
    ];
}
