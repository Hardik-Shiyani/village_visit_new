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
        Schema::table('yojana_form_data', function (Blueprint $table) {
            $table->string('taluka_name')->after('id')->nullable();
            $table->string('village_name')->after('taluka_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('yojana_form_data', function (Blueprint $table) {
            $table->dropColumn('taluka_name');
            $table->dropColumn('village_name');
        });
    }
};
