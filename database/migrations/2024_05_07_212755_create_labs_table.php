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
        Schema::create('labs', function (Blueprint $table) {
            $table->id();
            $table->string("name", 100);
            $table->integer("result_id");
            $table->string("visit_id", 100);
            $table->string("description", 100);
            $table->string("order_by", 100);
            $table->bigInteger('patient_id')->unsigned()->index()->nullable();
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->date('entry_date');
            $table->string('enter_by');
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
        Schema::dropIfExists('labs');
    }
};
