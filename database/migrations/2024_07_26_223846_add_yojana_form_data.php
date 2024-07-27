<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yojana_form_data', function (Blueprint $table) {
            $table->id();
            
            $table->integer('vruddha_niradhar_count')->nullable()->comment('બાકી લાભાર્થી ની સંખ્યા for વૃદ્ધ નિરાધાર યોજના');
            $table->string('vruddha_niradhar_remarks')->nullable()->comment('રિમાર્કસ for વૃદ્ધ નિરાધાર યોજના');
            
            $table->integer('widow_count')->nullable()->comment('બાકી લાભાર્થી ની સંખ્યા for વિધવા સહાય');
            $table->string('widow_remarks')->nullable()->comment('રિમાર્કસ for વિધવા સહાય');
            
            $table->integer('sankatmochan_count')->nullable()->comment('બાકી લાભાર્થી ની સંખ્યા for સંકટ મોચન યોજના');
            $table->string('sankatmochan_remarks')->nullable()->comment('રિમાર્કસ for સંકટ મોચન યોજના');
            
            $table->integer('nfsa_count')->nullable()->comment('બાકી લાભાર્થી ની સંખ્યા for એન.એફ.એસ.એ. રેશનકાર્ડ');
            $table->string('nfsa_remarks')->nullable()->comment('રિમાર્કસ for એન.એફ.એસ.એ. રેશનકાર્ડ');
            
            $table->integer('pm_jivan_suraksha_count')->nullable()->comment('બાકી લાભાર્થી ની સંખ્યા for પ્રધાનમંત્રી જીવન સુરક્ષા યોજના');
            $table->string('pm_jivan_suraksha_remarks')->nullable()->comment('રિમાર્કસ for પ્રધાનમંત્રી જીવન સુરક્ષા યોજના');
            
            $table->integer('pm_jivanjyot_vima_count')->nullable()->comment('બાકી લાભાર્થી ની સંખ્યા for પ્રધાનમંત્રી જીવન જ્યોત વીમા યોજના');
            $table->string('pm_jivanjyot_vima_remarks')->nullable()->comment('રિમાર્કસ for પ્રધાનમંત્રી જીવન જ્યોત વીમા યોજના');
            
            $table->integer('ayushman_bharat_count')->nullable()->comment('બાકી લાભાર્થી ની સંખ્યા for આયુષ્યમાન ભારત યોજના');
            $table->string('ayushman_bharat_remarks')->nullable()->comment('રિમાર્કસ for આયુષ્યમાન ભારત યોજના');
            
            $table->integer('janani_suraksha_count')->nullable()->comment('બાકી લાભાર્થી ની સંખ્યા for જનની સુરક્ષા યોજના');
            $table->string('janani_suraksha_remarks')->nullable()->comment('રિમાર્કસ for જનની સુરક્ષા યોજના');
            
            $table->integer('pm_matru_vandana_count')->nullable()->comment('બાકી લાભાર્થી ની સંખ્યા for પ્રધાનમંત્રી માતૃ વંદના યોજના');
            $table->string('pm_matru_vandana_remarks')->nullable()->comment('રિમાર્કસ for પ્રધાનમંત્રી માતૃ વંદના યોજના');
            
            $table->integer('nishay_poshan_count')->nullable()->comment('બાકી લાભાર્થી ની સંખ્યા for નિષય પોષણ યોજના');
            $table->string('nishay_poshan_remarks')->nullable()->comment('રિમાર્કસ for નિષય પોષણ યોજના');
            
            $table->integer('kasturba_poshan_count')->nullable()->comment('બાકી લાભાર્થી ની સંખ્યા for કસ્તુરબા પોષણ સહાય યોજના');
            $table->string('kasturba_poshan_remarks')->nullable()->comment('રિમાર્કસ for કસ્તુરબા પોષણ સહાય યોજના');
            
            $table->integer('k_mameru_count')->nullable()->comment('બાકી લાભાર્થી ની સંખ્યા for કુંવરબાઈનું મામેરૂ સહાય યોજના');
            $table->string('k_mameru_remarks')->nullable()->comment('રિમાર્કસ for કુંવરબાઈનું મામેરૂ સહાય યોજના');
            
            $table->integer('divyang_pass_count')->nullable()->comment('બાકી લાભાર્થી ની સંખ્યા for દિવ્યાંગ /વિકલાંગ (પાસ)');
            $table->string('divyang_pass_remarks')->nullable()->comment('રિમાર્કસ for દિવ્યાંગ /વિકલાંગ (પાસ)');
            
            $table->integer('vhali_dikri_count')->nullable()->comment('બાકી લાભાર્થી ની સંખ્યા for વ્હાલી દિકરી યોજના');
            $table->string('vhali_dikri_remarks')->nullable()->comment('રિમાર્કસ for વ્હાલી દિકરી યોજના');
            
            $table->integer('vaid_sahay_count')->nullable()->comment('બાકી લાભાર્થી ની સંખ્યા for વૈદકીય સહાય યોજના');
            $table->string('vaid_sahay_remarks')->nullable()->comment('રિમાર્કસ for વૈદકીય સહાય યોજના');
            
            $table->integer('gandhi_pansion_count')->nullable()->comment('બાકી લાભાર્થી ની સંખ્યા for ઈંન્દીરા ગાંધી નેશનલ ડીસેબીલીટી પેન્શન યોજના');
            $table->string('gandhi_pansion_remarks')->nullable()->comment('રિમાર્કસ for ઈંન્દીરા ગાંધી નેશનલ ડીસેબીલીટી પેન્શન યોજના');
            
            $table->integer('sukanya_samruddhi_count')->nullable()->comment('બાકી લાભાર્થી ની સંખ્યા for સુકન્યા સમુધ્ધી યોજના');
            $table->string('sukanya_samruddhi_remarks')->nullable()->comment('રિમાર્કસ for સુકન્યા સમુધ્ધી યોજના');
            
            $table->integer('pm_awaas_count')->nullable()->comment('બાકી લાભાર્થી ની સંખ્યા for પ્રધાનમંત્રી આવાસ યોજના');
            $table->string('pm_awaas_remarks')->nullable()->comment('રિમાર્કસ for પ્રધાનમંત્રી આવાસ યોજના');
            
            $table->integer('pm_kisan_count')->nullable()->comment('બાકી લાભાર્થી ની સંખ્યા for PM KISAN પ્રધાનમંત્રી યોજના');
            $table->string('pm_kisan_remarks')->nullable()->comment('રિમાર્કસ for PM KISAN પ્રધાનમંત્રી યોજના');
            
            $table->integer('pm_joy_count')->nullable()->comment('બાકી લાભાર્થી ની સંખ્યા for PM JOY યોજના');
            $table->string('pm_joy_remarks')->nullable()->comment('રિમાર્કસ for PM JOY યોજના');
            
            $table->integer('disability_pansion_count')->nullable()->comment('બાકી લાભાર્થી ની સંખ્યા for Disability Pension Scheme');
            $table->string('disability_pansion_remarks')->nullable()->comment('રિમાર્કસ for Disability Pension Scheme');

            $table->integer('details_added_by')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yojana_form_data');
    }
};
