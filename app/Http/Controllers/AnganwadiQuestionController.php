<?php

namespace App\Http\Controllers;
use App\Models\AnganwadiQuestions;

use Illuminate\Http\Request;

class AnganwadiQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('anganwadi-questions');
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
        $anganwadiQuestion = new AnganwadiQuestions();

        $anganwadiQuestion->taluka_name = $request->input('category');
        $anganwadiQuestion->village_name = $request->input('activity');
        $anganwadiQuestion->anganwadi_1 = $request->input('anganwadi_1');
        $anganwadiQuestion->anganwadi_2 = $request->input('anganwadi_2');
        $anganwadiQuestion->anganwadi_3 = $request->input('anganwadi_3');
        $anganwadiQuestion->anganwadi_4 = $request->input('anganwadi_4');
        $anganwadiQuestion->anganwadi_5 = $request->input('anganwadi_5');
        $anganwadiQuestion->anganwadi_6 = $request->input('anganwadi_6');
        $anganwadiQuestion->anganwadi_6v = $request->input('anganwadi_6v');
        $anganwadiQuestion->anganwadi_7 = $request->input('anganwadi_7');
        $anganwadiQuestion->anganwadi_8 = $request->input('anganwadi_8');
        $anganwadiQuestion->anganwadi_9 = $request->input('anganwadi_9');
        $anganwadiQuestion->anganwadi_10 = $request->input('anganwadi_10');
        $anganwadiQuestion->anganwadi_11 = $request->input('anganwadi_11');
        $anganwadiQuestion->anganwadi_12 = $request->input('anganwadi_12');
        $anganwadiQuestion->anganwadi_13w1 = $request->input('anganwadi_13w1');
        $anganwadiQuestion->anganwadi_13h1 = $request->input('anganwadi_13h1');
        $anganwadiQuestion->anganwadi_13pt1 = $request->input('anganwadi_13pt1');
        $anganwadiQuestion->anganwadi_13w2 = $request->input('anganwadi_13w2');
        $anganwadiQuestion->anganwadi_13h2 = $request->input('anganwadi_13h2');
        $anganwadiQuestion->anganwadi_13pt2 = $request->input('anganwadi_13pt2');
        $anganwadiQuestion->anganwadi_13w3 = $request->input('anganwadi_13w3');
        $anganwadiQuestion->anganwadi_13h3 = $request->input('anganwadi_13h3');
        $anganwadiQuestion->anganwadi_13pt3 = $request->input('anganwadi_13pt3');
        $anganwadiQuestion->anganwadi_13w4 = $request->input('anganwadi_13w4');
        $anganwadiQuestion->anganwadi_13h4 = $request->input('anganwadi_13h4');
        $anganwadiQuestion->anganwadi_13pt4 = $request->input('anganwadi_13pt4');
        $anganwadiQuestion->anganwadi_13w5 = $request->input('anganwadi_13w5');
        $anganwadiQuestion->anganwadi_13h5 = $request->input('anganwadi_13h5');
        $anganwadiQuestion->anganwadi_13pt5 = $request->input('anganwadi_13pt5');
        $anganwadiQuestion->anganwadi_14 = $request->input('anganwadi_14');
        $anganwadiQuestion->anganwadi_15 = $request->input('anganwadi_15');
        $anganwadiQuestion->anganwadi_16 = $request->input('anganwadi_16');
        $anganwadiQuestion->anganwadi_17 = $request->input('anganwadi_17');
        $anganwadiQuestion->anganwadi_17v = $request->input('anganwadi_17v');
        $anganwadiQuestion->anganwadi_18g = $request->input('anganwadi_18g');
        $anganwadiQuestion->anganwadi_18y = $request->input('anganwadi_18y');
        $anganwadiQuestion->anganwadi_18r = $request->input('anganwadi_18r');
        $anganwadiQuestion->anganwadi_19 = $request->input('anganwadi_19');
        $anganwadiQuestion->anganwadi_19v = $request->input('anganwadi_19v');
        $anganwadiQuestion->anganwadi_20 = $request->input('anganwadi_20');
        $anganwadiQuestion->anganwadi_20v = $request->input('anganwadi_20v');
        $anganwadiQuestion->anganwadi_21 = $request->input('anganwadi_21');
        $anganwadiQuestion->anganwadi_21v = $request->input('anganwadi_21v');
        $anganwadiQuestion->anganwadi_22 = $request->input('anganwadi_22');
        $anganwadiQuestion->anganwadi_22v = $request->input('anganwadi_22v');
        $anganwadiQuestion->anganwadi_23 = $request->input('anganwadi_23');
        $anganwadiQuestion->anganwadi_24 = $request->input('anganwadi_24');
        $anganwadiQuestion->anganwadi_24v = $request->input('anganwadi_24v');
        $anganwadiQuestion->anganwadi_25 = $request->input('anganwadi_25');
        $anganwadiQuestion->details_added_by = $request->input('details_added_by');

        $anganwadiQuestion->save();

        return response()->json([
            'message' => 'Anganwadi question created successfully!'
            // 'data' => $anganwadiQuestion
        ], 200);
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
