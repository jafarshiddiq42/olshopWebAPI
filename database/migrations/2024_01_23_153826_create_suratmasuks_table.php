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
        Schema::create('suratmasuks', function (Blueprint $table) {
            $table->id();
            $table->string('noSurat');
            $table->string('asalSurat');
            $table->bigInteger('klasifikasi_id');
            $table->date('tglsuratmasuk')->nullable();
            $table->date('tglsuratditerima')->nullable();
            $table->string('file')->nullable();
            $table->string('keterangan')->nullable();
            $table->bigInteger('user_id');
            $table->integer('notif');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suratmasuks');
    }
};
