<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthIssueQuestion extends Model
{
    use HasFactory;

    protected $table = 'health_issue_questions';

    protected $fillable = [
        'taluka_name', 'village_name', 'health_1', 'health_1v', 'health_2', 'health_2v', 'phcchcsj', 
        'health_3', 'health_3v', 'health_4', 'health_4v', 'health_5', 'health_5v', 'health_6', 
        'health_6v', 'health_7v1', 'health_7v2', 'health_7v3', 'health_8', 'health_8v', 'health_9', 
        'health_10', 'health_11', 'health_12', 'health_13', 'health_13v', 'health_14', 'health_15_1', 
        'health_15_2', 'health_15_3', 'health_16', 'health_17_1', 'health_17_2', 'health_17_3', 
        'health_18_1', 'health_18_2', 'health_18_3', 'health_19', 'health_20', 'health_21', 'health_22', 
        'health_23', 'health_24', 'health_25', 'health_26', 'health_27', 'health_27v', 'health_28', 
        'health_28v', 'health_29', 'health_29v', 'health_30', 'health_30v', 'health_31', 'health_32', 
        'health_32p', 'health_32l', 'health_33', 'health_33s', 'health_332d', 'health_34', 'health_35', 
        'health_36', 'health_36v', 'health_37', 'health_38', 'health_38v', 'health_39', 'health_40', 
        'health_40v', 'health_41', 'health_42', 'health_42v', 'health_43', 'health_44', 'health_44v', 
        'health_45', 'health_45v', 'health_46', 'health_46v', 'health_47', 'health_47v', 'PHCphoto', 
        'health_48v', 'details_added_by'
    ];

    protected $dates = [
        'created_at', 'updated_at',
    ];
}
