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
        Schema::create('grampanchayat_vigat', function (Blueprint $table) {
            $table->id();
            $table->string('taluka_name');
            $table->string('village_name');
            $table->enum('grampanchayat_1', ['yes', 'no'])->nullable();
            $table->string('grampanchayat_1v')->nullable();
            $table->enum('grampanchayat_2', ['yes', 'no'])->nullable();
            $table->string('grampanchayat_2v')->nullable();
            $table->enum('grampanchayat_3', ['yes', 'no'])->nullable();
            $table->string('grampanchayat_3v')->nullable();
            $table->enum('grampanchayat_4', ['yes', 'no'])->nullable();
            $table->string('grampanchayat_4v')->nullable();
            $table->enum('grampanchayat_5', ['yes', 'no'])->nullable();
            $table->string('grampanchayat_5v')->nullable();
            $table->enum('grampanchayat_6', ['yes', 'no'])->nullable();
            $table->string('grampanchayat_6v')->nullable();
            $table->string('grampanchayat_7')->nullable();
            $table->enum('grampanchayat_8', ['yes', 'no'])->nullable();
            $table->string('grampanchayat_8v')->nullable();
            $table->enum('grampanchayat_9', ['yes', 'no'])->nullable();
            $table->string('grampanchayat_9v')->nullable();
            $table->enum('grampanchayat_10', ['yes', 'no'])->nullable();
            $table->string('grampanchayat_10v')->nullable();
            $table->string('health_48v')->nullable();
            $table->string('grampanchayatphoto')->nullable();
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
        Schema::dropIfExists('grampanchayat_vigat');
    }
};
