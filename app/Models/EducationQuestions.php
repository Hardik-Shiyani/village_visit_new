<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationQuestions extends Model
{
    use HasFactory;

    protected $table = 'education_questions';

    protected $fillable = [
        'taluka_name',
        'village_name',
        'teachers_available',
        'computer_lab',
        'computer_lab_details',
        'computer_usage',
        'computer_usage_details',
        'computer_lab_photo',
        'computers_working',
        'computers_working_details',
        'smart_class',
        'smart_class_details',
        'smart_class_usage',
        'smart_class_usage_details',
        'mid_day_meal_query',
        'mid_day_meal_details',
        'building_condition',
        'building_condition_details',
        'number_of_rooms',
        'playground',
        'playground_details',
        'laboratory_management',
        'laboratory_management_details',
        'library',
        'library_details',
        'drinking_water_management',
        'drinking_water_management_details',
        'toilet_condition',
        'toilet_condition_details',
        'teacher_student_attendance_details',
        'grade',
        'total_students',
        'present_students',
        'boys',
        'girls',
        'total',
        'smart_class_functionality',
        'smart_class_functionality_details',
        'iron_folic_acid_tablets',
        'iron_folic_acid_last_date',
        'sickle_cell_anemia_test_details',
        'health_checkup_by_phc',
        'primary_schools',
        'secondary_schools',
        'building_dilapidation',
        'building_dilapidation_details',
        'new_building_request',
        'new_building_request_details',
        'sanitary_napkins_for_girls',
        'sanitary_napkins_details',
        'lab_experiments_details',
        'mdm_shed_availability',
        'mdm_shed_details',
        'number_of_classrooms',
        'separate_toilets_for_boys_girls',
        'separate_toilets_details',
        'drinking_water_details',
        'cctv_availability',
        'cctv_details',
        'smc_meetings_regular',
        'smc_meetings_details',
        'smc_register',
        'smc_register_details',
        'pta_meetings_regular',
        'pta_meetings_details',
        'details_added_by'
    ];

    protected $dates = [
        'created_at', 'updated_at',
    ];
}
