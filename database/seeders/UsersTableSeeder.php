<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            ['name' => 'શ્રી મેહુલ દવે', 'email' => 'DM-GNR'],
            ['name' => 'શ્રી એસ.કે.મોદી', 'email' => 'DDO-GNR'],
            ['name' => 'શ્રીમતી જે.એમ.વેગડા', 'email' => 'DRDA-GNR'],
            ['name' => 'શ્રી બ્રીજેશ મોડીયા', 'email' => 'PO-GNR'],
            ['name' => 'શ્રી જૈનિલ દેસાઈ', 'email' => 'PO-KALOL'],
            ['name' => 'શ્રી ડી.આર.ધોરાજીઆ', 'email' => 'DCLR-GNR'],
            ['name' => 'સુ.શ્રી શ્વેતા પંડ્યા', 'email' => 'DSO-GNR'],
            ['name' => 'શ્રી પાર્થ કોટડિયા', 'email' => 'DYDEO-GNR'],
            ['name' => 'શ્રી યોગરાજસિંહ જાડેજા', 'email' => 'DCSTAMP-GNR'],
            ['name' => 'શ્રી અર્જુનસિંહ ડી. વણઝારા', 'email' => 'SPLAO-GNR'],
            ['name' => 'શ્રી એસ.ડી.શાહ', 'email' => 'DYDDO-P-GNR'],
            ['name' => 'સુ.શ્રી કૃપાલી મિસ્ત્રી', 'email' => 'DYDDO-R-GNR'],
            ['name' => 'શ્રી પી.બી.પટણી', 'email' => 'DPO-GNR'],
            ['name' => 'સુ.શ્રી રેશ્માબેન સંધરીયાત', 'email' => 'DDSC-GNR'],
            ['name' => 'શ્રી. બી. એસ. પટેલ', 'email' => 'DDVJ-GNR'],
            ['name' => 'ડૉ. કિંજલ મોદી', 'email' => 'RMO-GNR'],
            ['name' => 'ડો.એ.જે.વૈષ્ણવ(ઇ.ચા)', 'email' => 'DHO-GNR'],
            ['name' => 'શ્રી ડૉ એસ.આઈ.પટેલ', 'email' => 'DAHO-GNR'],
            ['name' => 'શ્રી ધર્મેન્દ્રસિંહ જાડેજા', 'email' => 'GMDIC-GNR'],
            ['name' => 'શ્રી સુરેશ પુરોહિત', 'email' => 'EXEN-1-GNR'],
            ['name' => 'શ્રી એસ.એન.રાજપુત', 'email' => 'EXEN-2-GNR'],
            ['name' => 'શ્રી કે.ડી.પટેલ', 'email' => 'EXEN-3-GNR'],
            ['name' => 'શ્રી જે.બી.પટેલ', 'email' => 'EXENELE-GNR'],
            ['name' => 'શ્રી જતીન પટેલ(ઈ.ચા)', 'email' => 'GWSSB-GNR'],
            ['name' => 'સુ.શ્રી.મોનિકા સંઘવી', 'email' => 'WASMO-GNR'],
            ['name' => 'શ્રી તેજસ માંગુકિયા', 'email' => 'EXEN-P-GNR'],
            ['name' => 'શ્રી.જે.એન.પટેલ', 'email' => 'EXENSS-1-GNR'],
            ['name' => 'ડો. ચન્દ્રેશ શેનન્દ્રે', 'email' => 'ACF-GNR'],
            ['name' => 'શ્રી ફારુખ પંજ', 'email' => 'DYDAC-GNR'],
            ['name' => 'શ્રી જીતેન્‍દ્ર વરમોરા', 'email' => 'DYDAEX-GNR'],
            ['name' => 'સુ.શ્રી દ્રષ્ટીબેન ઓઝા', 'email' => 'DR-GNR'],
            ['name' => 'શ્રી ડૉ. બી.એન.પ્રજાપતિ', 'email' => 'DEO-GNR'],
            ['name' => 'શ્રી પિયુષ પટેલ', 'email' => 'DPEO-GNR'],
            ['name' => 'સુ.શ્રી વૈધ ભાવનાબેન ટી.પટેલ', 'email' => 'DAO-GNR'],
            ['name' => 'ડૉ.વિક્રમ સોલંકી (ઈ.ચા)', 'email' => 'DMO-GNR'],
            ['name' => 'શ્રીમતી કિંજલ દવે', 'email' => 'POICDS-GNR'],
            ['name' => 'શ્રી. એન.એન.પટેલ', 'email' => 'EXEN-4-GNR'],
            ['name' => 'શ્રી જે.એમ.વરમોરા (ઇ.ચા)', 'email' => 'POATMA-GNR'],
            ['name' => 'શ્રી સંજય માલસત્તાર', 'email' => 'GPCB-GNR'],
            ['name' => 'શ્રી હિમાંશુ જોષી', 'email' => 'RMGIDC-GNR'],
            ['name' => 'શ્રી પ્રવિણ અજુડીયા', 'email' => 'DILR-GNR'],
            ['name' => 'શ્રી પ્રણવસિંહ', 'email' => 'AGO-GNR'],
            ['name' => 'શ્રી પિયુષ પટેલ', 'email' => 'DYDCEO-GNR'],
            ['name' => 'શ્રી જે.ડી.જેઠવા', 'email' => 'DLO-GNR'],
            ['name' => 'જે.આઈ.દેસાઈ', 'email' => 'DTO-GNR'],
            ['name' => 'શ્રી હરેશ પટેલ', 'email' => 'MAM-GNR'],
            ['name' => 'સુ.શ્રી જેમિની ગઢિયા', 'email' => 'MAM-KALOL'],
            ['name' => 'શ્રી કે.આર.ચૌધરી', 'email' => 'MAM-MANASA'],
            ['name' => 'શ્રી રોનક કપૂર', 'email' => 'MAM-DAHEGAM'],
            ['name' => 'શ્રી વાય.કે.વાઘેલા', 'email' => 'MAMCITY-KALOL'],
            ['name' => 'શ્રી હેમાંગ ભટ્ટ', 'email' => 'ERO-GNR'],
            ['name' => 'શ્રી મહેશ ચૌધરી', 'email' => 'DSPORT-GNR'],
            ['name' => 'સુશ્રી તેજલબેન ચૌહાણ', 'email' => 'DYDO-GNR'],
            ['name' => 'સુ.શ્રી રમિલાબા એ.રાઠોડ', 'email' => 'WCDO-GNR'],
            ['name' => 'શ્રી જી. એચ.સિંધાવત (ઈ.ચા)', 'email' => 'GLO-GNR'],
            ['name' => 'શ્રી એસ.આઈ.દેસાઈ(ઇ.ચા)', 'email' => 'DSSCMPO-GNR'],
            ['name' => 'શ્રી વી.ડી.ડોબરીયા', 'email' => 'FDCA-GNR'],
            ['name' => 'શ્રી રમેશભાઈ ઝીંઝારા', 'email' => 'DDPO-GNR'],
            ['name' => 'શ્રી એ.એ.પઠાણ', 'email' => 'ARTO-GNR'],
            ['name' => 'શ્રી જે.એસ.પટેલ', 'email' => 'DAGO-GNR'],
            ['name' => 'શ્રી કેતનભાઇ પનારા', 'email' => 'IR-GNR'],
            ['name' => 'શ્રી ડી.કે.સોનારા', 'email' => 'CTS-GNR'],
            ['name' => 'શ્રી આર.એમ.બાથાણી', 'email' => 'CTS-KALOL'],
            ['name' => 'શ્રી મલય ભુવા', 'email' => 'TDO-GNR'],
            ['name' => 'કલ્પેશસિંહ શંકરભાઈ ચાવડા', 'email' => 'TDO-KALOL'],
            ['name' => 'શ્રી પી.જે.મહીડા', 'email' => 'TDO-DAHEGAM'],
            ['name' => 'શ્રી જયદીપ એસ. પટેલ', 'email' => 'TDO-MANASA'],
            ['name' => 'શ્રી એચ.પી.રાવલ', 'email' => 'DMST-GNR'],
        ];

        $currentTimestamp = Carbon::now();

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@village-visit.com',
            'password' => Hash::make('123456'),
            'created_at' => $currentTimestamp,
            'updated_at' => $currentTimestamp,
        ]);

        foreach ($users as $user) {
            DB::table('users')->insert([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => Hash::make('123456'),
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ]);
        }
    }
}