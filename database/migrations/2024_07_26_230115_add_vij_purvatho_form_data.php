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
        Schema::create('vij_purvatho_form_data', function (Blueprint $table) {
            $table->id();
            $table->string('taluka_name')->nullable(); // for 'તાલુકાનું નામ:'
            $table->string('village_name')->nullable(); // for 'ગામનું નામ:'
            $table->string('geb_ugvcl_electricity_supply')->nullable(); // for 'GEB/UGVCL દ્વારા નિયમિત ૨૪ કલાક વીજ પુરવઠો ઉપલબ્ધ કરાવવામાં આવે છે કે કેમ?'
            $table->text('geb_ugvcl_electricity_supply_details')->nullable(); // for 'વિગત'
            $table->string('geb_ugvcl_issue_resolution')->nullable(); // for 'GEB/UGVCL વીજ પુરવઠા બાબતે સમસ્યાઓ/પ્રશ્નોના નિરાકરણ માટે કોઇ વ્યવસ્થા છે કે, કેમ?'
            $table->text('geb_ugvcl_issue_resolution_details')->nullable(); // for 'વિગત'
            $table->string('new_light_connection_info')->nullable(); // for 'નવુ લાઇટ કનેક્શન લેવા માટે ગ્રામજનોને માહિતી પુરી પાડવામાં આવે છે કે, કેમ?'
            $table->text('new_light_connection_info_details')->nullable(); // for 'વિગત'
            $table->text('other_issues')->nullable(); // for 'અન્ય બાબત'
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
        Schema::dropIfExists('vij_purvatho_form_data');
    }
};
