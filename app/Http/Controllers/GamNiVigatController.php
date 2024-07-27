<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GamNiVigat;

class GamNiVigatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('gam-ni-vigat');
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
        $gamNiVigat = new GamNiVigat();
        $gamNiVigat->taluka_name = $request->category;
        $gamNiVigat->village_name = $request->activity;
        $gamNiVigat->total_population = $request->input('village-total-population');
        $gamNiVigat->sarpanch_name = $request->input('sarpanch-name');
        $gamNiVigat->sarpanch_mobile = $request->input('sarpanch-mobile');
        $gamNiVigat->talati_name = $request->input('talati-name');
        $gamNiVigat->talati_mobile = $request->input('talati-mobile');
        $gamNiVigat->vce_name = $request->input('vce-name');
        $gamNiVigat->vce_mobile = $request->input('vce-mobile');
        $gamNiVigat->phc_chc = $request->input('PHC/CHC');
        $gamNiVigat->medical_officer_name = $request->input('medicalofficer-name');
        $gamNiVigat->medical_officer_mobile = $request->input('medicalofficer-mobile');
        $gamNiVigat->aanganwadi_karyakarta_name1 = $request->input('aanganwadikaryakarta-name1');
        $gamNiVigat->aanganwadi_karyakarta_mobile1 = $request->input('aanganwadikaryakarta-mobile1');
        $gamNiVigat->aanganwadi_karyakarta_name2 = $request->input('aanganwadikaryakarta-name2');
        $gamNiVigat->aanganwadi_karyakarta_mobile2 = $request->input('aanganwadikaryakarta-mobile2');
        $gamNiVigat->aanganwadi_karyakarta_name3 = $request->input('aanganwadikaryakarta-name3');
        $gamNiVigat->aanganwadi_karyakarta_mobile3 = $request->input('aanganwadikaryakarta-mobile3');
        $gamNiVigat->asha_worker_name1 = $request->input('aashaworker-name1');
        $gamNiVigat->asha_worker_mobile1 = $request->input('aashaworker-mobile1');
        $gamNiVigat->asha_worker_name2 = $request->input('aashaworker-name2');
        $gamNiVigat->asha_worker_mobile2 = $request->input('aashaworker-mobile2');
        $gamNiVigat->asha_worker_name3 = $request->input('aashaworker-name3');
        $gamNiVigat->asha_worker_mobile3 = $request->input('aashaworker-mobile3');
        $gamNiVigat->vyajbibhav_dukan_name1 = $request->input('vyajbibhavduakndar-name1');
        $gamNiVigat->vyajbibhav_dukan_mobile1 = $request->input('vyajbibhavduakndar-mobile1');
        $gamNiVigat->vyajbibhav_dukan_name2 = $request->input('vyajbibhavduakndar-name2');
        $gamNiVigat->vyajbibhav_dukan_mobile2 = $request->input('vyajbibhavduakndar-mobile2');
        $gamNiVigat->vyajbibhav_dukan_name3 = $request->input('vyajbibhavduakndar-name3');
        $gamNiVigat->vyajbibhav_dukan_mobile3 = $request->input('vyajbibhavduakndar-mobile3');
        $gamNiVigat->fps_cardholders_details = $request->input('fpscardholders-name');
        $gamNiVigat->primary_school_name1 = $request->input('primaryschool-name1');
        $gamNiVigat->principal_name1 = $request->input('principal-name1');
        $gamNiVigat->mobile_no1 = $request->input('mobileno1');
        $gamNiVigat->children_count1 = $request->input('childern-count1');
        $gamNiVigat->primary_school_name2 = $request->input('primaryschool-name2');
        $gamNiVigat->principal_name2 = $request->input('principal-name2');
        $gamNiVigat->mobile_no2 = $request->input('mobileno2');
        $gamNiVigat->children_count2 = $request->input('childern-count2');
        $gamNiVigat->primary_school_name3 = $request->input('primaryschool-name3');
        $gamNiVigat->principal_name3 = $request->input('principal-name3');
        $gamNiVigat->mobile_no3 = $request->input('mobileno3');
        $gamNiVigat->children_count3 = $request->input('childern-count3');
        $gamNiVigat->milk_ass_pramukh_name = $request->input('milkasspramukh-name');
        $gamNiVigat->milk_ass_pramukh_mobile = $request->input('milkasspramukh-mobile');
        $gamNiVigat->sahkari_mandli_pramukh_name = $request->input('sahkarimandlipramukh-name');
        $gamNiVigat->sahkari_mandli_pramukh_mobile = $request->input('sahkarimandlipramukh-mobile');
        $gamNiVigat->reshan_card = $request->input('reshancard');
        $gamNiVigat->reshan_card_remain_count = $request->input('reshancard-remaincount');
        $gamNiVigat->aadhar_card = $request->input('aadharcard');
        $gamNiVigat->aadhar_card_remain_count = $request->input('aadharcard-remaincount');
        $gamNiVigat->save();

        return response()->json(['message' => 'Survey data submitted successfully'], 200);
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
