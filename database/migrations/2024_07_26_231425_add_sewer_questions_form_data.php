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
        Schema::create('sewer_questions_form_data', function (Blueprint $table) {
            $table->string('taluka_name_sewer')->nullable(); // for 'તાલુકાનું નામ:'
            $table->string('village_name_sewer')->nullable(); // for 'ગામનું નામ:'
            $table->string('sewer_line_exists')->nullable(); // for 'ગામમાં ગટર લાઇન છે કે, કેમ?'
            $table->text('sewer_line_exists_details')->nullable(); // for 'વિગત'
            $table->string('new_sewer_line_needed')->nullable(); // for 'નવી ગટર લાઇનની જરૂરીયાત છે કે, કેમ?'
            $table->text('new_sewer_line_needed_details')->nullable(); // for 'વિગત'
            $table->string('incomplete_sewer_line_completed')->nullable(); // for 'અધુરી ગટર લાઇન પુર્ણ કરવામાં આવેલ છે કે, કેમ?'
            $table->text('incomplete_sewer_line_completed_details')->nullable(); // for 'વિગત'
            $table->string('sewer_line_cleaned_before_rain')->nullable(); // for 'ગટર લાઇનની ચોમાસા પહેલા સાફ સફાઇ કરવામાં આવે છે કે, કેમ?'
            $table->text('sewer_line_cleaned_before_rain_details')->nullable(); // for 'વિગત'
            $table->string('sewer_check_issues')->nullable(); // for 'ગટર ચોકઅપના કોઇ પ્રશ્નો છે કે કેમ?'
            $table->text('sewer_check_issues_details')->nullable(); // for 'વિગત'
            $table->string('sewer_and_water_lines_maintenance')->nullable(); // for 'પીવા પાણી અને ગટરની લઈને સાથે નંખાયેલ અને તૂટી ગયેલ નથી તેની તકેદારી રાખવામાં આવે છે કે કેમ?'
            $table->text('sewer_and_water_lines_maintenance_details')->nullable(); // for 'વિગત'
            $table->text('sewer_other_issues')->nullable(); // for 'અન્ય બાબત'
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
        Schema::dropIfExists('sewer_questions_form_data');
    }
};
