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
        Schema::create('banking_services_vigat', function (Blueprint $table) {
            $table->id();
            $table->string('taluka_name');
            $table->string('village_name');
            $table->string('bank_1bn1')->nullable();
            $table->string('bank_1bd1')->nullable();
            $table->string('bank_1bn2')->nullable();
            $table->string('bank_1bd2')->nullable();
            $table->string('bank_1bn3')->nullable();
            $table->string('bank_1bd3')->nullable();
            $table->enum('bank_2', ['yes', 'no'])->nullable();
            $table->string('bank_2v')->nullable();
            $table->string('bank_3')->nullable();
            $table->string('bank_4bcn')->nullable();
            $table->string('bank_4bcm')->nullable();
            $table->integer('bank_5')->nullable();
            $table->integer('bank_6')->nullable();
            $table->integer('bank_7')->nullable();
            $table->integer('bank_8')->nullable();
            $table->integer('bank_9')->nullable();
            $table->enum('bank_10', ['yes', 'no'])->nullable();
            $table->string('bank_10v')->nullable();
            $table->text('bank_11')->nullable();
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
        Schema::dropIfExists('banking_services_vigat');
    }
};
