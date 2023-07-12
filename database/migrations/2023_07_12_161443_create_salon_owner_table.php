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
        Schema::create('salon_owner', function (Blueprint $table) {
            $table->increments('id');
            $table->string('so_name');
            $table->integer('so_id');
            $table->text('so_password');
            $table->integer('so_phone');
            $table->integer('role_id')->unsigned();
            $table->timestamps();

           //foreign key
            $table->foreign('role_id')->references('id')->on('remote_roles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salon_owner');
    }
};
