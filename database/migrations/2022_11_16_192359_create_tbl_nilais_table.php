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
        Schema::create('tbl_nilais', function (Blueprint $table) {
            $table->id();
            $table->char('nis', 7)->unique();
            $table->foreignId('id_tapel');
            $table->foreignId('id_mapel');
            $table->integer('nilai_pengetahuan');
            $table->integer('nilai_keterampilan');
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
        Schema::dropIfExists('tbl_nilais');
    }
};
