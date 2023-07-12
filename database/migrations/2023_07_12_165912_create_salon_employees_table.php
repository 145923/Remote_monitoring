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
        Schema::create('salon_employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('se_id')->unsigned();
            $table->text('se_name');
            $table->integer('se_phone');
            $table->unsignedInteger('se_natid');
            $table->text('se_password');
            $table->integer('role_id')->unsigned();
            $table->timestamps();

            $table->foreign('role_id')->references('id')->on('remote_roles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salon_employees');
    }
};
