<?php

namespace App\Http\Controllers;
use App\Models\BankingQuestions;

use Illuminate\Http\Request;

class BankingQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('banking-questions');
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
        $bankingQuestion = new BankingQuestions();

        $bankingQuestion->taluka_name = $request['category'];
        $bankingQuestion->village_name = $request['activity'];
        $bankingQuestion->bank_1bn1 = $request['bank_1bn1'];
        $bankingQuestion->bank_1bd1 = $request['bank_1bd1'];
        $bankingQuestion->bank_1bn2 = $request['bank_1bn2'];
        $bankingQuestion->bank_1bd2 = $request['bank_1bd2'];
        $bankingQuestion->bank_1bn3 = $request['bank_1bn3'];
        $bankingQuestion->bank_1bd3 = $request['bank_1bd3'];
        $bankingQuestion->bank_2 = $request['bank_2'];
        $bankingQuestion->bank_2v = $request['bank_2v'];
        $bankingQuestion->bank_3 = $request['bank_3'];
        $bankingQuestion->bank_4bcn = $request['bank_4bcn'];
        $bankingQuestion->bank_4bcm = $request['bank_4bcm'];
        $bankingQuestion->bank_5 = $request['bank_5'];
        $bankingQuestion->bank_6 = $request['bank_6'];
        $bankingQuestion->bank_7 = $request['bank_7'];
        $bankingQuestion->bank_8 = $request['bank_8'];
        $bankingQuestion->bank_9 = $request['bank_9'];
        $bankingQuestion->bank_10 = $request['bank_10'];
        $bankingQuestion->bank_10v = $request['bank_10v'];
        $bankingQuestion->bank_11 = $request['bank_11'];
        $bankingQuestion->details_added_by = $request['details_added_by'];

        $bankingQuestion->save();

        return response()->json([
            'message' => 'Banking question created successfully!',
            'data' => $bankingQuestion
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
