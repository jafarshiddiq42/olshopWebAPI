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
        Schema::create('disposisis', function (Blueprint $table) {
            $table->id();
            $table->integer('jenissurat')->comment('1 untuk s_masuk dan 2 untuk s_keluar');
            $table->string('isi_disposisi');
            $table->string('catatan')->nullable();
            $table->date('bataswaktu')->nullable();
            $table->bigInteger('surat_id');
            $table->json('targetdisposisi');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disposisis');
    }
};
