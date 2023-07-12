<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('payment_code');
            $table->integer('dsv_id')->unsigned();
            $table->integer('payment_amount');
            $table->date('payment_date');
            $table->timestamps();

            $table->foreign('dsv_id')->references('id')->on('done_services');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
