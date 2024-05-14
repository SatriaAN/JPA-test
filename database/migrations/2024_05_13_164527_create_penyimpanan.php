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
        // database penyimpanan
        Schema::create('penyimpanan', function (Blueprint $table) {
            $table->increments('id');
            $table->char('isian',50);
            $table->char('nama',45);
            $table->char('no_hp',15);
            $table->char('alamat',150);
            $table->char('moto_kerja',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};