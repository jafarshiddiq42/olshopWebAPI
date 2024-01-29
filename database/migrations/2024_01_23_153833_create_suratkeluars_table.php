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
        Schema::create('suratkeluars', function (Blueprint $table) {
            $table->id();
            $table->integer('noagenda');
            $table->string('tujuan');
            $table->string('nosurat');
            $table->string('klasifikasi_id');
            $table->date('tglsurat');
            $table->date('tglcatat');
            $table->string('file');
            $table->string('keterangan');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suratkeluars');
    }
};
