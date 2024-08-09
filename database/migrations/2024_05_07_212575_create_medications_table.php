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
        Schema::create('medications', function (Blueprint $table) {
            $table->id();
            $table->string("name", 100);
            $table->string("sig", 100);
            $table->decimal("quantity");
            $table->string("no_of_days");
            $table->string("visit_id", 100);
            $table->string("is_alergy", 100);
            $table->string('prescribe_by');
            $table->date('entry_date');
            $table->string('enter_by');
            $table->bigInteger('patient_id')->unsigned()->index()->nullable();
            $table->foreign('patient_id')->references('id')->on('patients');
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
        Schema::dropIfExists('medications');
    }
};
