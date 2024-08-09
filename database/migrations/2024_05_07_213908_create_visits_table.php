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
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->date('visit_date');
            $table->bigInteger('cc_id')->unsigned()->index()->nullable();
            $table->foreign('cc_id')->references('id')->on('visit_ccs');
            $table->bigInteger('provider_id')->unsigned()->index()->nullable();
            $table->foreign('provider_id')->references('id')->on('providers');
            $table->bigInteger('patient_id')->unsigned()->index()->nullable();
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->tinyInteger('is_signedof')->default('1');
            $table->tinyInteger('is_paid')->default('1');
            $table->string('visit_type');
            $table->string('visit_status');
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
        Schema::dropIfExists('visits');
    }
};
