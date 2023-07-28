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
        Schema::create('mitrabumdes', function (Blueprint $table) {
            $table->id();
            $table->string('nama_usaha');
            $table->text('deskripsi');
            $table->string('roi');
            $table->string('roa');
            $table->string('roe');
            $table->string('gpm');
            $table->string('opm');
            $table->string('npm');
            $table->string('valuasi');
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
        Schema::dropIfExists('mitrabumdes');
    }
};
