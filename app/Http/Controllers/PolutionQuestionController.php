<?php

namespace App\Http\Controllers;
use App\Models\PolutionQuestions;

use Illuminate\Http\Request;

class PolutionQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('polution-questions');
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
        $pollutionQuestion = new PolutionQuestions();

        $pollutionQuestion->category = $request->input('category', null);
        $pollutionQuestion->activity = $request->input('activity', null);
        $pollutionQuestion->polution_1 = $request->input('polution_1', null);
        $pollutionQuestion->polution_1v = $request->input('polution_1v', null);
        $pollutionQuestion->polution_2 = $request->input('polution_2', null);
        $pollutionQuestion->polution_2v = $request->input('polution_2v', null);
        $pollutionQuestion->polution_3 = $request->input('polution_3', null);
        $pollutionQuestion->polution_3v = $request->input('polution_3v', null);
        $pollutionQuestion->polution_4 = $request->input('polution_4', null);
        $pollutionQuestion->polution_4v = $request->input('polution_4v', null);
        $pollutionQuestion->polution_5 = $request->input('polution_5', null);

        $pollutionQuestion->save();

        return response()->json(['message' => 'Pollution question saved successfully.'], 201);
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
