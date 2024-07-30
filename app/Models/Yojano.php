<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yojano extends Model
{
    use HasFactory;

    // Specify the table name
    protected $table = 'yojana_form_data';

    // Define the fillable attributes
    protected $fillable = [
        'taluka_name',
        'village_name',
        'total_population',
        'vruddha_niradhar_count',
        'vruddha_niradhar_remarks',
        'widow_count',
        'widow_remarks',
        'sankatmochan_count',
        'sankatmochan_remarks',
        'nfsa_count',
        'nfsa_remarks',
        'pm_jivan_suraksha_count',
        'pm_jivan_suraksha_remarks',
        'pm_jivanjyot_vima_count',
        'pm_jivanjyot_vima_remarks',
        'ayushman_bharat_count',
        'ayushman_bharat_remarks',
        'janani_suraksha_count',
        'janani_suraksha_remarks',
        'pm_matru_vandana_count',
        'pm_matru_vandana_remarks',
        'nishay_poshan_count',
        'nishay_poshan_remarks',
        'kasturba_poshan_count',
        'kasturba_poshan_remarks',
        'k_mameru_count',
        'k_mameru_remarks',
        'divyang_pass_count',
        'divyang_pass_remarks',
        'vhali_dikri_count',
        'vhali_dikri_remarks',
        'vaid_sahay_count',
        'vaid_sahay_remarks',
        'gandhi_pansion_count',
        'gandhi_pansion_remarks',
        'sukanya_samruddhi_count',
        'sukanya_samruddhi_remarks',
        'pm_awaas_count',
        'pm_awaas_remarks',
        'pm_kisan_count',
        'pm_kisan_remarks',
        'pm_joy_count',
        'pm_joy_remarks',
        'disability_pansion_count',
        'disability_pansion_remarks',
        'details_added_by',
        'created_at',
        'updated_at'
    ];

}
