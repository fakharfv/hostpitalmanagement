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
        Schema::create('charges', function (Blueprint $table) {
            $table->id();
            $table->string("reason", 100);
            $table->decimal("amount");
            $table->string("pay_type");
            $table->bigInteger('charge_type_id')->unsigned()->index()->nullable();
            $table->foreign('charge_type_id')->references('id')->on('charge_types');
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
        Schema::dropIfExists('charges');
    }
};
