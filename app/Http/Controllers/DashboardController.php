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
            'yojana_form_data' => 'yojano-index',
            'health_issue_questions' => 'health-questions-index',
            'education_questions' => 'education-questions-index',
            'supply_questions' => 'supply-questions-index',
            'water_questions' => 'water-questions-index',
            'electric_questions' => 'electricity-questions-index',
            'road_question_form_data' => 'road-questions-index',
            'sewer_questions_form_data' => 'sewer-questions-index',
            'cleanliness_questions_form_data' => 'cleanliness-questions-index',
            'pollution_questions_form_data' => 'polution-questions-index',
            'revenue_questions_form_data' => 'revenue-questions-index',
            'anganwadi_questions' => 'anganwadi-questions-index',
            'banking_services_vigat' => 'banking-questions-index',
            'grampanchayat_vigat' => 'grampanchayat-questions-index',
            'other_issues' => 'other-questions-index',
        ];

        $customNames = [
            'gam_ni_vigat' => 'ગામ ની વિગત',
            'yojana_form_data' => 'યોજનાઓ',
            'health_issue_questions' => 'આરોગ્યને બાબતના પ્રશ્નો',
            'education_questions' => 'શિક્ષણને બાબતના પ્રશ્નો',
            'supply_questions' => 'પુરવઠાને બાબતના પ્રશ્નો',
            'water_questions' => 'પાણીને બાબતના પ્રશ્નો',
            'electric_questions' => 'વીજપુરવઠો બાબતના પ્રશ્નો',
            'road_question_form_data' => 'રોડ/રસ્તા બાબતના પ્રશ્નો',
            'sewer_questions_form_data' => 'ગટર બાબતના પ્રશ્નો',
            'cleanliness_questions_form_data' => 'સ્વચ્છતા બાબતના પ્રશ્નો',
            'pollution_questions_form_data' => 'પ્રદુષણ બાબતના પ્રશ્નો',
            'revenue_questions_form_data' => 'મહેસુલી બાબતે',
            'anganwadi_questions' => 'આંગણવાડીને લગતા પ્રશ્નો',
            'banking_services_vigat' => 'બેંકીંગ સેવાને લગતા પ્રશ્નો',
            'grampanchayat_vigat' => 'ગ્રામ પંચાયત બાબતના પ્રશ્નો',
            'other_issues' => 'અન્ય બાબતના પ્રશ્નો',
        ];
    

        // dd($forms);
        $formStatuses = [];
        foreach ($forms as $table => $route) {
            $filled = DB::table($table)
                        ->where('details_added_by', $userId)
                        ->exists();
            $formStatuses[] = [
                'route' => $route,
                'name' => $customNames[$table] ?? ucwords(str_replace('_', ' ', $table)),
                'filled' => $filled
            ];
        }
        return view('dashboard', compact('formStatuses'));
    }

    public function bhareliVigatShow()
    {
        $userId = Auth::id();
        $tables = [
            'gam_ni_vigat' => ['gujaratiName' => 'ગામ ની વિગત', 'talukaColumn' => 'taluka_name', 'villageColumn' => 'village_name'],
            // 'yojana_form_data' => ['gujaratiName' => 'યોજનાઓ', 'talukaColumn' => 'taluka_name', 'villageColumn' => 'village_name'],
            'health_issue_questions' => ['gujaratiName' => 'આરોગ્યને બાબતના પ્રશ્નો', 'talukaColumn' => 'taluka_name', 'villageColumn' => 'village_name'],
            'education_questions' => ['gujaratiName' => 'શિક્ષણને બાબતના પ્રશ્નો', 'talukaColumn' => 'taluka_name', 'villageColumn' => 'village_name'],
            'supply_questions' => ['gujaratiName' => 'પુરવઠાને બાબતના પ્રશ્નો', 'talukaColumn' => 'category', 'villageColumn' => 'activity'],
            'water_questions' => ['gujaratiName' => 'પાણીને બાબતના પ્રશ્નો', 'talukaColumn' => 'category', 'villageColumn' => 'activity'],
            'electric_questions' => ['gujaratiName' => 'વીજપુરવઠો બાબતના પ્રશ્નો', 'talukaColumn' => 'category', 'villageColumn' => 'activity'],
            'road_question_form_data' => ['gujaratiName' => 'રોડ/રસ્તા બાબતના પ્રશ્નો', 'talukaColumn' => 'taluka_name', 'villageColumn' => 'village_name'],
            'sewer_questions_form_data' => ['gujaratiName' => 'ગટર બાબતના પ્રશ્નો', 'talukaColumn' => 'taluka_name', 'villageColumn' => 'village_name'],
            'cleanliness_questions_form_data' => ['gujaratiName' => 'સ્વચ્છતા બાબતના પ્રશ્નો', 'talukaColumn' => 'taluka_name_cleanliness', 'villageColumn' => 'village_name_cleanliness'],
            'pollution_questions_form_data' => ['gujaratiName' => 'પ્રદુષણ બાબતના પ્રશ્નો', 'talukaColumn' => 'category', 'villageColumn' => 'activity'],
            'revenue_questions_form_data' => ['gujaratiName' => 'મહેસુલી બાબતે', 'talukaColumn' => 'category', 'villageColumn' => 'activity'],
            'anganwadi_questions' => ['gujaratiName' => 'આંગણવાડીને લગતા પ્રશ્નો', 'talukaColumn' => 'taluka_name', 'villageColumn' => 'village_name'],
            'banking_services_vigat' => ['gujaratiName' => 'બેંકીંગ સેવાને લગતા પ્રશ્નો', 'talukaColumn' => 'taluka_name', 'villageColumn' => 'village_name'],
            'grampanchayat_vigat' => ['gujaratiName' => 'ગ્રામ પંચાયત બાબતના પ્રશ્નો', 'talukaColumn' => 'taluka_name', 'villageColumn' => 'village_name'],
            'other_issues' => ['gujaratiName' => 'અન્ય બાબતના પ્રશ્નો', 'talukaColumn' => 'taluka_name', 'villageColumn' => 'village_name'],
        ];

        $filledTables = [];
        $tableData = [];

        foreach ($tables as $table => $columns) {
            $count = DB::table($table)
                ->where('details_added_by', $userId)
                ->count();

            if ($count > 0) {
                $filledTables[$table] = $columns['gujaratiName'];
                $data = DB::table($table)
                    ->where('details_added_by', $userId)
                    ->select($columns['talukaColumn'], $columns['villageColumn'])
                    ->distinct()
                    ->get();
                
                $tableData[$table] = $data;
            }
        }

        return view('filled-forms', [
            'filledTables' => $filledTables,
            'tableData' => $tableData,
            'tables' => $tables,
            'allFilled' => count($filledTables) === count($tables)
        ]);
    }
}
