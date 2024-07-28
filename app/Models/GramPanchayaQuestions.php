<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GramPanchayaQuestions extends Model
{
    use HasFactory;

    protected $table = 'grampanchayat_vigat';

    protected $fillable = [
        'taluka_name',
        'village_name',
        'grampanchayat_1',
        'grampanchayat_1v',
        'grampanchayat_2',
        'grampanchayat_2v',
        'grampanchayat_3',
        'grampanchayat_3v',
        'grampanchayat_4',
        'grampanchayat_4v',
        'grampanchayat_5',
        'grampanchayat_5v',
        'grampanchayat_6',
        'grampanchayat_6v',
        'grampanchayat_7',
        'grampanchayat_8',
        'grampanchayat_8v',
        'grampanchayat_9',
        'grampanchayat_9v',
        'grampanchayat_10',
        'grampanchayat_10v',
        'health_48v',
        'grampanchayatphoto',
        'details_added_by'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
