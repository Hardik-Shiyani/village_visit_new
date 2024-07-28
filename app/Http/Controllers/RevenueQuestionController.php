<?php

namespace App\Http\Controllers;
use App\Models\RevenueQuestions;

use Illuminate\Http\Request;

class RevenueQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('revenue-questions');
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
        $revenueQuestion = new RevenueQuestions();

        $revenueQuestion->category = $request->input('category');
        $revenueQuestion->activity = $request->input('activity');
        $revenueQuestion->revenue_1 = $request->input('revenue_1');
        $revenueQuestion->revenue_1v = $request->input('revenue_1v');
        $revenueQuestion->revenue_2 = $request->input('revenue_2');
        $revenueQuestion->revenue_2v = $request->input('revenue_2v');
        $revenueQuestion->revenue_3 = $request->input('revenue_3');
        $revenueQuestion->revenue_3v = $request->input('revenue_3v');
        $revenueQuestion->revenue_4 = $request->input('revenue_4');
        $revenueQuestion->revenue_4v = $request->input('revenue_4v');
        $revenueQuestion->revenue_5 = $request->input('revenue_5');
        $revenueQuestion->revenue_5v = $request->input('revenue_5v');
        $revenueQuestion->revenue_6 = $request->input('revenue_6');
        $revenueQuestion->revenue_6v = $request->input('revenue_6v');
        $revenueQuestion->revenue_7 = $request->input('revenue_7');
        $revenueQuestion->revenue_7v = $request->input('revenue_7v');
        $revenueQuestion->revenue_8 = $request->input('revenue_8');
        $revenueQuestion->details_added_by = Auth()->user()->id;

        $revenueQuestion->save();

        return redirect()->back()->with('success', 'Record saved successfully.');
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
