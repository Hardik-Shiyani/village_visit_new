<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GamNiVigat extends Model
{
    use HasFactory;

    protected $table = 'gam_ni_vigat';

    protected $fillable = [
        'taluka_name',
        'village_name',
        'total_population',
        'sarpanch_name',
        'sarpanch_mobile',
        'talati_name',
        'talati_mobile',
        'vce_name',
        'vce_mobile',
        'phc_chc',
        'medical_officer_name',
        'medical_officer_mobile',
        'aanganwadi_karyakarta_name1',
        'aanganwadi_karyakarta_mobile1',
        'aanganwadi_karyakarta_name2',
        'aanganwadi_karyakarta_mobile2',
        'aanganwadi_karyakarta_name3',
        'aanganwadi_karyakarta_mobile3',
        'asha_worker_name1',
        'asha_worker_mobile1',
        'asha_worker_name2',
        'asha_worker_mobile2',
        'asha_worker_name3',
        'asha_worker_mobile3',
        'vyajbibhav_dukan_name1',
        'vyajbibhav_dukan_mobile1',
        'vyajbibhav_dukan_name2',
        'vyajbibhav_dukan_mobile2',
        'vyajbibhav_dukan_name3',
        'vyajbibhav_dukan_mobile3',
        'fps_cardholders_details',
        'primary_school_name1',
        'principal_name1',
        'mobile_no1',
        'children_count1',
        'primary_school_name2',
        'principal_name2',
        'mobile_no2',
        'children_count2',
        'primary_school_name3',
        'principal_name3',
        'mobile_no3',
        'children_count3',
        'milk_ass_pramukh_name',
        'milk_ass_pramukh_mobile',
        'sahkari_mandli_pramukh_name',
        'sahkari_mandli_pramukh_mobile',
        'reshan_card',
        'reshan_card_remain_count',
        'aadhar_card',
        'aadhar_card_remain_count',
    ];
}
