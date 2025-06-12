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
        Schema::create('profil_provinsis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('provinsi_id')->unsigned()->index();
            $table->foreign('provinsi_id')->references('id')->on('provinsis')->onDelete('cascade');
            $table->integer('tahun')->default(2024);
            $table->bigInteger('populasi')->default(0);
            $table->bigInteger('gdp')->default(0);
            $table->bigInteger('jml_sd')->default(0);
            $table->bigInteger('jml_smp')->default(0);
            $table->bigInteger('jml_sma')->default(0);
            $table->bigInteger('jml_pt')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil_provinsis');
    }
};
