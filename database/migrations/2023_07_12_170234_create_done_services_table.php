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
        Schema::create('done_services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('se_id')->unsigned();
            $table->integer('dsv_id')->unsigned();
            $table->string('payment_code');
            $table->integer('sv_id')->unsigned();
            $table->date('dsv_date');
            $table->timestamps();

            $table->foreign('se_id')->references('id')->on('salon_employees');
            $table->foreign('sv_id')->references('id')->on('services');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('done_services');
    }
};
