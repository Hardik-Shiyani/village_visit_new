<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HealthIssueQuestion;

class HealthQuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('health-questions');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $healthIssueQuestion = new HealthIssueQuestion();
        $healthIssueQuestion->taluka_name = $request->category;
        $healthIssueQuestion->village_name = $request->activity;
        $healthIssueQuestion->health_1 = $request->health_1;
        $healthIssueQuestion->health_1v = $request->health_1v;
        $healthIssueQuestion->health_2 = $request->health_2;
        $healthIssueQuestion->health_2v = $request->health_2v;
        $healthIssueQuestion->phcchcsj = $request->phcchcsj;
        $healthIssueQuestion->health_3 = $request->health_3;
        $healthIssueQuestion->health_3v = $request->health_3v;
        $healthIssueQuestion->health_4 = $request->health_4;
        $healthIssueQuestion->health_4v = $request->health_4v;
        $healthIssueQuestion->health_5 = $request->health_5;
        $healthIssueQuestion->health_5v = $request->health_5v;
        $healthIssueQuestion->health_6 = $request->health_6;
        $healthIssueQuestion->health_6v = $request->health_6v;
        $healthIssueQuestion->health_7v1 = $request->health_7v1;
        $healthIssueQuestion->health_7v2 = $request->health_7v2;
        $healthIssueQuestion->health_7v3 = $request->health_7v3;
        $healthIssueQuestion->health_8 = $request->health_8;
        $healthIssueQuestion->health_8v = $request->health_8v;
        $healthIssueQuestion->health_9 = $request->health_9;
        $healthIssueQuestion->health_10 = $request->health_10;
        $healthIssueQuestion->health_11 = $request->health_11;
        $healthIssueQuestion->health_12 = $request->health_12;
        $healthIssueQuestion->health_13 = $request->health_13;
        $healthIssueQuestion->health_13v = $request->health_13v;
        $healthIssueQuestion->health_14 = $request->health_14;
        $healthIssueQuestion->health_15_1 = $request->health_15_1;
        $healthIssueQuestion->health_15_2 = $request->health_15_2;
        $healthIssueQuestion->health_15_3 = $request->health_15_3;
        $healthIssueQuestion->health_16 = $request->health_16;
        $healthIssueQuestion->health_17_1 = $request->health_17_1;
        $healthIssueQuestion->health_17_2 = $request->health_17_2;
        $healthIssueQuestion->health_17_3 = $request->health_17_3;
        $healthIssueQuestion->health_18_1 = $request->health_18_1;
        $healthIssueQuestion->health_18_2 = $request->health_18_2;
        $healthIssueQuestion->health_18_3 = $request->health_18_3;
        $healthIssueQuestion->health_19 = $request->health_19;
        $healthIssueQuestion->health_20 = $request->health_20;
        $healthIssueQuestion->health_21 = $request->health_21;
        $healthIssueQuestion->health_22 = $request->health_22;
        $healthIssueQuestion->health_23 = $request->health_23;
        $healthIssueQuestion->health_24 = $request->health_24;
        $healthIssueQuestion->health_25 = $request->health_25;
        $healthIssueQuestion->health_26 = $request->health_26;
        $healthIssueQuestion->health_27 = $request->health_27;
        $healthIssueQuestion->health_27v = $request->health_27v;
        $healthIssueQuestion->health_28 = $request->health_28;
        $healthIssueQuestion->health_28v = $request->health_28v;
        $healthIssueQuestion->health_29 = $request->health_29;
        $healthIssueQuestion->health_29v = $request->health_29v;
        $healthIssueQuestion->health_30 = $request->health_30;
        $healthIssueQuestion->health_30v = $request->health_30v;
        $healthIssueQuestion->health_31 = $request->health_31;
        $healthIssueQuestion->health_32 = $request->health_32;
        $healthIssueQuestion->health_32p = $request->health_32p;
        $healthIssueQuestion->health_32l = $request->health_32l;
        $healthIssueQuestion->health_33 = $request->health_33;
        $healthIssueQuestion->health_33s = $request->health_33s;
        $healthIssueQuestion->health_332d = $request->health_332d;
        $healthIssueQuestion->health_34 = $request->health_34;
        $healthIssueQuestion->health_35 = $request->health_35;
        $healthIssueQuestion->health_36 = $request->health_36;
        $healthIssueQuestion->health_36v = $request->health_36v;
        $healthIssueQuestion->health_37 = $request->health_37;
        $healthIssueQuestion->health_38 = $request->health_38;
        $healthIssueQuestion->health_38v = $request->health_38v;
        $healthIssueQuestion->health_39 = $request->health_39;
        $healthIssueQuestion->health_40 = $request->health_40;
        $healthIssueQuestion->health_40v = $request->health_40v;
        $healthIssueQuestion->health_41 = $request->health_41;
        $healthIssueQuestion->health_42 = $request->health_42;
        $healthIssueQuestion->health_42v = $request->health_42v;
        $healthIssueQuestion->health_43 = $request->health_43;
        $healthIssueQuestion->health_44 = $request->health_44;
        $healthIssueQuestion->health_44v = $request->health_44v;
        $healthIssueQuestion->health_45 = $request->health_45;
        $healthIssueQuestion->health_45v = $request->health_45v;
        $healthIssueQuestion->health_46 = $request->health_46;
        $healthIssueQuestion->health_46v = $request->health_46v;
        $healthIssueQuestion->health_47 = $request->health_47;
        $healthIssueQuestion->health_47v = $request->health_47v;
        $healthIssueQuestion->PHCphoto = $request->PHCphoto;
        $healthIssueQuestion->health_48v = $request->health_48v;
        $healthIssueQuestion->details_added_by = $request->details_added_by;
        $healthIssueQuestion->save();
        
        return response()->json(['message' => 'Data saved successfully'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
