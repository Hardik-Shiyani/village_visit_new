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
        Schema::create('cleanliness_questions_form_data', function (Blueprint $table) {
            // Adding new columns for Step 10 (Cleanliness-related Questions)
            $table->string('taluka_name_cleanliness')->nullable(); // for 'તાલુકાનું નામ:'
            $table->string('village_name_cleanliness')->nullable(); // for 'ગામનું નામ:'
            $table->string('door_to_door_collection_service')->nullable(); // for 'ડોર ટુ ડોર કલેક્શનની સેવા ઉપલબ્ધ છે કે, કેમ?'
            $table->text('door_to_door_collection_service_details')->nullable(); // for 'વિગત'
            $table->string('waste_disposal_frequency')->nullable(); // for 'ગામની ડમ્પીંગ સાઇટથી મુખ્ય ડમ્પીંગ સાઇટ પર વેસ્ટ કચરાનો નિકાલ કેટલા દિવસે થાય છે?'
            $table->text('waste_disposal_site')->nullable(); // for 'ડમ્પીંગ સાઈટ નું સ્થળ'
            $table->string('daily_cleaning_service')->nullable(); // for 'ગામની સફાઈ રોજ થાય છે કે કેમ?'
            $table->text('daily_cleaning_service_details')->nullable(); // for 'વિગત'
            $table->integer('staff_for_cleanliness')->nullable(); // for 'સ્વચ્છતા માટે કેટલા વ્યક્તિ કાર્યરત છે?'
            $table->integer('vehicles_for_cleanliness')->nullable(); // for 'સ્વચ્છતા માટે કેટલા વાહનો છે?'
            $table->text('vehicles_for_cleanliness_details')->nullable(); // for 'સ્વચ્છતા માટે કયા કયા વાહનો છે?'
            $table->text('cleanliness_other_issues')->nullable(); // for 'અન્ય બાબત'
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
        Schema::dropIfExists('cleanliness_questions_form_data');
    }
};
