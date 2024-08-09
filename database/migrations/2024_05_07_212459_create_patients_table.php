<?php

use Illuminate\Database\DBAL\TimestampType;
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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',10);
            $table->string('last_name',10);
            $table->string('occupation',10);
            $table->string('cnic',16);
            $table->string('email')->unique();
            $table->integer('portal_id')->nullable();
            $table->integer('vital_id')->nullable();
            $table->string('phone',12);
            $table->string('address',12)->nullable();
            $table->decimal('due_amount')->nullable();
            $table->decimal('advance_payment')->nullable();
            $table->string('gender',10)->nullable();
            $table->string('ward_no',20)->nullable();
            $table->string('bed_no',20)->nullable();
            $table->string('attended_name',20)->nullable();
            $table->string('attended_phone',20)->nullable();
            $table->string('nok_name',20)->nullable();
            $table->string('nok_no',20)->nullable();
            $table->date('dob');
            $table->bigInteger('patient_type_id')->unsigned()->index()->nullable();
            $table->foreign('patient_type_id')->references('id')->on('patient_types');
            $table->tinyInteger('status')->default('1');
            $table->bigInteger('provider_id')->unsigned()->index()->nullable();
            $table->foreign('provider_id')->references('id')->on('providers');
            $table->date('entry_date')->default(today());
            $table->string('enter_by')->nullable();
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
        Schema::dropIfExists('patients');
    }
};
