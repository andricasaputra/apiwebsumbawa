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
        Schema::create('profile_pimpinans', function (Blueprint $table) {
            $table->id();
            $table->string('title_jabatan');
            $table->string('nama');
            $table->string('unit_kerja');
            $table->string('pendidikan');
            $table->string('jabatan');
            $table->string('email');
            $table->string('no_hp');
            $table->string('alamat_kantor');
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
        Schema::dropIfExists('profile_pimpinans');
    }
};
