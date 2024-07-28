<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        $forms = [
            'gam_ni_vigat' => 'gam-ni-vigat-index',
            'yojano' => 'yojano-index',
            'health_questions' => 'health-questions-index',
            'education_questions' => 'education-questions-index',
            'supply_questions' => 'supply-questions-index',
            'water_questions' => 'water-questions-index',
            'electricity_questions' => 'electricity-questions-index',
            'road_questions' => 'road-questions-index',
            'sewer_questions' => 'sewer-questions-index',
            'cleanliness_questions' => 'cleanliness-questions-index',
            'polution_questions' => 'polution-questions-index',
            'revenue_questions' => 'revenue-questions-index',
            'anganwadi_questions' => 'anganwadi-questions-index',
            'banking_questions' => 'banking-questions-index',
            'grampanchayat_questions' => 'grampanchayat-questions-index',
            'other_questions' => 'other-questions-index',
        ];

        $formStatuses = [];
        foreach ($forms as $table => $route) {
            $filled = DB::table($table)
                        ->where('details_added_by', $userId)
                        ->exists();
            $formStatuses[] = [
                'route' => $route,
                'name' => ucwords(str_replace('_', ' ', $table)),
                'filled' => $filled
            ];
        }
        return view('dashboard', compact('formStatuses'));
    }
}
