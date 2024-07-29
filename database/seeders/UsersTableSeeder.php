<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $currentTimestamp = Carbon::now();

        $users = [
            ['name' => 'શ્રી મેહુલ દવે', 'email' => 'DM-GNR', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'શ્રી એસ.કે.મોદી', 'email' => 'DDO-GNR', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'શ્રીમતી જે.એમ.વેગડા', 'email' => 'DRDA-GNR', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'શ્રી બ્રીજેશ મોડીયા', 'email' => 'PO-GNR', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'શ્રી જૈનિલ દેસાઈ', 'email' => 'PO-KALOL', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'શ્રી ડી.આર.ધોરાજીઆ', 'email' => 'DCLR-GNR', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'સુ.શ્રી શ્વેતા પંડ્યા', 'email' => 'DSO-GNR', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'શ્રી પાર્થ કોટડિયા', 'email' => 'DYDEO-GNR', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'શ્રી યોગરાજસિંહ જાડેજા', 'email' => 'DCSTAMP-GNR', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'શ્રી અર્જુનસિંહ ડી. વણઝારા', 'email' => 'SPLAO-GNR', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'શ્રી એસ.ડી.શાહ', 'email' => 'DYDDO-P-GNR', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'સુ.શ્રી કૃપાલી મિસ્ત્રી', 'email' => 'DYDDO-R-GNR', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'શ્રી પી.બી.પટણી', 'email' => 'DPO-GNR', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'સુ.શ્રી રેશ્માબેન સંધરીયાત', 'email' => 'DDSC-GNR', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'શ્રી. બી. એસ. પટેલ', 'email' => 'DDVJ-GNR', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => ' ડૉ. કિંજલ મોદી', 'email' => 'RMO-GNR', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'ડો.એ.જે.વૈષ્ણવ(ઇ.ચા)', 'email' => 'DHO-GNR', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'શ્રી ડૉ એસ.આઈ.પટેલ', 'email' => 'DAHO-GNR', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'શ્રી ધર્મેન્દ્રસિંહ જાડેજા', 'email' => 'GMDIC-GNR', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'શ્રી સુરેશ પુરોહિત', 'email' => 'EXEN-1-GNR', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'શ્રી એસ.એન.રાજપુત', 'email' => 'EXEN-2-GNR', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'શ્રી કે.ડી.પટેલ', 'email' => 'EXEN-3-GNR', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'શ્રી જે.બી.પટેલ', 'email' => 'EXENELE-GNR', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'શ્રી જતીન પટેલ(ઈ.ચા)', 'email' => 'GWSSB-GNR', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'સુ.શ્રી.મોનિકા સંઘવી', 'email' => 'WASMO-GNR', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'શ્રી તેજસ માંગુકિયા', 'email' => 'EXEN-P-GNR', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'શ્રી.જે.એન.પટેલ', 'email' => 'EXENSS-1-GNR', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'ડો. ચન્દ્રેશ શેનન્દ્રે', 'email' => 'ACF-GNR', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'શ્રી ફારુખ પંજ', 'email' => 'DYDAC-GNR', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'શ્રી જીતેન્‍દ્ર વરમોરા', 'email' => 'DYDAEX-GNR', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'સુ.શ્રી દ્રષ્ટીબેન ઓઝા', 'email' => 'DR-GNR', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'શ્રી ડૉ. બી.એન.પ્રજાપતિ', 'email' => 'DEO-GNR', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'શ્રી પિયુષ પટેલ', 'email' => 'DPEO-GNR', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'સુ.શ્રી વૈધ ભાવનાબેન ટી.પટેલ', 'email' => 'DAO-GNR', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'ડૉ. એચ.કે.ખારા', 'email' => 'DYRMO-GNR', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'સુ.શ્રી ભારતી બન્ના', 'email' => 'DYCO-GNR', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'શ્રી આર.કે. નાઠ', 'email' => 'DYRTO-GNR', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'શ્રી એસ.એમ.જાટ', 'email' => 'DYDYSO-GNR', 'password' => Hash::make('password123'), 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
        ];

        DB::table('users')->insert($users);
    }
}